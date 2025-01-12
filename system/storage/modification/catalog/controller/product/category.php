<?php
class ControllerProductCategory extends Controller {
	public function index() {

        // path manager - preserve bc
        if (isset($this->request->get['path']) && $this->config->get('mlseo_fpp_directcat')) {
          $cat_id = strrchr('_'.$this->request->get['path'], '_');
          $cat_id = str_replace('_', '', $cat_id);
          $this->load->model('tool/path_manager');
          $this->request->get['path'] = $this->model_tool_path_manager->getFullCategoryPath($cat_id);
        }
        
        $seoPageName = $this->config->get('mlseo_pagination_name_'.$this->config->get('config_language_id')) != 'mlseo_pagination_name_'.$this->config->get('config_language_id') ? $this->config->get('mlseo_pagination_name_'.$this->config->get('config_language_id')) : 'page';
      
		$this->load->language('product/category');

		$this->load->model('catalog/category');

		$this->load->model('catalog/product');

		$this->load->model('tool/image');
if (defined('JOURNAL3_ACTIVE')) {
                $this->load->model('journal3/image');
            }

		if (isset($this->request->get['filter'])) {
			$filter = $this->request->get['filter'];
		} else {
			$filter = '';
		}

		if (isset($this->request->get['sort'])) {
			$sort = $this->request->get['sort'];
		} else {
			
            if (defined('JOURNAL3_ACTIVE')) {
                $sort = $this->journal3->settings->get('productSort');
            } else {
                $sort = 'p.sort_order';
            }
            
		}

		if (isset($this->request->get['order'])) {
			$order = $this->request->get['order'];
		} else {
			
            if (defined('JOURNAL3_ACTIVE')) {
                $order = $this->journal3->settings->get('productOrder');
            } else {
                $order = 'ASC';
            }
            
		}

		if (isset($this->request->get['page'])) {
			$page = max(1, (int)$this->request->get['page']); // Journal 3 fix
		} else {
			$page = 1;
		}

		if (isset($this->request->get['limit'])) {
			$limit = (int)$this->request->get['limit'];
		} else {
			$limit = $this->config->get('theme_' . $this->config->get('config_theme') . '_product_limit');
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		);

		if (isset($this->request->get['path'])) {
			$url = '';

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['limit'])) {
				$url .= '&limit=' . $this->request->get['limit'];
			}

			$path = '';

			$parts = explode('_', (string)$this->request->get['path']);

			$category_id = (int)array_pop($parts);

			foreach ($parts as $path_id) {
				if (!$path) {
					$path = (int)$path_id;
				} else {
					$path .= '_' . (int)$path_id;
				}

				$category_info = $this->model_catalog_category->getCategory($path_id);

				if ($category_info) {
					$data['breadcrumbs'][] = array(
						'text' => $category_info['name'],
						'href' => $this->url->link('product/category', 'path=' . $path . $url)
					);
				}
			}
		} else {
			$category_id = 0;
		}

		$category_info = $this->model_catalog_category->getCategory($category_id);

		if ($category_info) {
			$this->document->setTitle(!empty($category_info['meta_title']) && $this->config->get('mlseo_enabled') ? $category_info['meta_title'] . ((!empty($seoPageName) && !empty($this->request->get['page'])) ? ' - ' . $seoPageName . ' ' . $this->request->get['page'] : '') : $category_info['name']);
			$this->document->setDescription($category_info['meta_description'] . (!empty($this->request->get['page']) ? ' - ' . $seoPageName . ' ' . $this->request->get['page'] : ''));
			$this->document->setKeywords($category_info['meta_keyword']);

			
      //$data['heading_title'] = $category_info['name'];
      
      $data["heading_title"] = !empty($category_info['seo_h1']) && $this->config->get('mlseo_enabled') ? $category_info['seo_h1'] : $category_info['name'];
      $data["heading_title"] .= (!empty($seoPageName) && !empty($this->request->get['page'])) ? ' - ' . $seoPageName . ' ' . $this->request->get['page'] : '';
      
      $data['seo_h1'] = !empty($category_info['seo_h1']) ? $category_info['seo_h1'] : '';
      $data['seo_h2'] = !empty($category_info['seo_h2']) ? $category_info['seo_h2'] : '';
      $data['seo_h3'] = !empty($category_info['seo_h3']) ? $category_info['seo_h3'] : '';
      
      if ($this->config->get('mlseo_enabled')) {
        $this->load->model('tool/seo_package');
        
        if ($this->config->get('mlseo_microdata')) {
          $this->document->addSeoMeta($this->model_tool_seo_package->rich_snippet('microdata', 'category', $data));
        }
      }
      
      if ($this->config->get('mlseo_header_lm_category')) {
        $gkd_header_lm_date = strtotime($category_info['date_modified']);
        
        $this->response->addHeader('Last-Modified: '.date('D, d M Y H:i:s', $gkd_header_lm_date).' GMT');
      }
      

			if (defined('JOURNAL3_ACTIVE')) {
                $data['text_compare'] = $this->journal3->countBadge($this->language->get('text_compare'), isset($this->session->data['compare']) ? count($this->session->data['compare']) : 0);
            } else {
                $data['text_compare'] = sprintf($this->language->get('text_compare'), (isset($this->session->data['compare']) ? count($this->session->data['compare']) : 0));
            }

			// Set the last category breadcrumb
			$data['breadcrumbs'][] = array(
				'text' => $category_info['name'],
				'href' => $this->url->link('product/category', 'path=' . $this->request->get['path'])
			);


      if (!empty($this->request->get['page'])) {
        $data['breadcrumbs'][] = array(
          'text' => $category_info['name'] . (!empty($this->request->get['page']) ? ' - ' . $seoPageName . ' ' . $this->request->get['page'] : ''),
          'href' => $this->config->get('config_url').(isset($_GET['_route_']) ? $_GET['_route_'] : '')
        );
      }
      
			if ($category_info['image']) {
				if (defined('JOURNAL3_ACTIVE')) {
                $data['thumb'] = $this->model_journal3_image->resize($category_info['image'], $this->journal3->settings->get('image_dimensions_category.width'), $this->journal3->settings->get('image_dimensions_category.height'), $this->journal3->settings->get('image_dimensions_category.resize'));
                $data['thumb2x'] = $this->model_journal3_image->resize($category_info['image'], $this->journal3->settings->get('image_dimensions_category.width') * 2, $this->journal3->settings->get('image_dimensions_category.height') * 2, $this->journal3->settings->get('image_dimensions_category.resize'));
            } else {
                $data['thumb'] = $this->model_tool_image->resize($category_info['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_category_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_category_height'));
            }
			} else {
				$data['thumb'] = '';
			}

			$data['description'] = html_entity_decode($category_info['description'], ENT_QUOTES, 'UTF-8');

      $seoHeadings = $this->config->get('mlseo_headings');
      
      if ($this->config->get('mlseo_enabled')) {
        $extraTopDesc = $extraBottomDesc = '';
        
        foreach (array('h1', 'h2', 'h3') as $headingType) {
          if (!empty($seoHeadings['category'][$headingType]['pos']) && !empty($category_info['seo_'.$headingType]) && $seoHeadings['category'][$headingType]['pos'] == 'topdesc') {
            $extraTopDesc .= '<'.$headingType.' class="seo_'.$headingType.'"'.(!empty($seoHeadings['category'][$headingType]['css']) ? ' style="'.$seoHeadings['category'][$headingType]['css'].'"' : '').'>'.$category_info['seo_'.$headingType].'</'.$headingType.'>';
          }
          
          if (!empty($seoHeadings['category'][$headingType]['pos']) && !empty($category_info['seo_'.$headingType]) && $seoHeadings['category'][$headingType]['pos'] == 'botdesc') {
            $extraBottomDesc .= '<'.$headingType.' class="seo_'.$headingType.'"'.(!empty($seoHeadings['category'][$headingType]['css']) ? ' style="'.$seoHeadings['category'][$headingType]['css'].'"' : '').'>'.$category_info['seo_'.$headingType].'</'.$headingType.'>';
          }
        }
        
        if ($this->config->get('mlseo_autolink')) {
          $autolinks = $this->db->query("SELECT * FROM " . DB_PREFIX . "url_autolink WHERE language_id =  '". (int) $this->config->get('config_language_id') . "'")->rows;
          
          foreach ($autolinks as $autolink) {
            $data['description'] = preg_replace('/<a\b[^>]*>[^<]*<\/a>(*SKIP)(*FAIL)|\b('.$autolink['query'].')\b/', '<a href="'.$autolink['redirect'].'">$1</a>', $data['description']);
          }
        }
        
        $data['description'] = $extraTopDesc . $data['description'] . $extraBottomDesc;
      }
      
			$data['compare'] = $this->url->link('product/compare');

			$url = '';

			if (isset($this->request->get['filter'])) {
				$url .= '&filter=' . $this->request->get['filter'];
			}

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['limit'])) {
				$url .= '&limit=' . $this->request->get['limit'];
			}

			$data['categories'] = array();

			if (defined('JOURNAL3_ACTIVE')) {
                if ($this->journal3->settings->get('refineCategories') !== 'none') {
                    if ($this->journal3->settings->get('subcategoriesDisplay') === 'carousel') {
                        $this->journal3->document->addStyle('catalog/view/theme/journal3/lib/swiper/swiper.min.css');
			            $this->journal3->document->addScript('catalog/view/theme/journal3/lib/swiper/swiper.min.js', 'footer');
                    }
                    $results = $this->model_catalog_category->getCategories($category_id);
                } else {
                    $results = array();
                }
            } else {
                $results = $this->model_catalog_category->getCategories($category_id);
            }

			foreach ($results as $result) {
				$filter_data = array(
					'filter_category_id'  => $result['category_id'],
					'filter_sub_category' => true
				);

				$data['categories'][] = array(
					'name' => defined('JOURNAL3_ACTIVE') ? $this->journal3->countBadge($result['name'], $this->config->get('config_product_count') ? $this->model_catalog_product->getTotalProducts($filter_data) : null) : $result['name'] . ($this->config->get('config_product_count') ? ' (' . $this->model_catalog_product->getTotalProducts($filter_data) . ')' : ''),
            'image' => defined('JOURNAL3_ACTIVE') ? $this->model_journal3_image->resize($result['image'], $this->journal3->settings->get('image_dimensions_subcategory.width'), $this->journal3->settings->get('image_dimensions_subcategory.height'), $this->journal3->settings->get('image_dimensions_subcategory.resize')) : '',
            'image2x' => defined('JOURNAL3_ACTIVE') ? $this->model_journal3_image->resize($result['image'], $this->journal3->settings->get('image_dimensions_subcategory.width') * 2, $this->journal3->settings->get('image_dimensions_subcategory.height') * 2, $this->journal3->settings->get('image_dimensions_subcategory.resize')) : '',
            'alt' => defined('JOURNAL3_ACTIVE') ? $result['name'] : '',
					'href' => $this->url->link('product/category', 'path=' . $this->request->get['path'] . '_' . $result['category_id'] . $url)
				);
			}

			$data['products'] = array();

			$filter_data = array(
				'filter_category_id' => $category_id,
				'filter_filter'      => $filter,
				'sort'               => $sort,
				'order'              => $order,
				'start'              => ($page - 1) * $limit,
				'limit'              => $limit
			);

			
            if (defined('JOURNAL3_ACTIVE')) {
                $this->load->model('journal3/filter');

                $filter_data = array_merge($this->model_journal3_filter->parseFilterData(), $filter_data);

                $this->model_journal3_filter->setFilterData($filter_data);

                \Journal3\Utils\Profiler::start('journal3/filter/total_products');

                $product_total = $this->model_journal3_filter->getTotalProducts();

                \Journal3\Utils\Profiler::end('journal3/filter/total_products');
            } else {
                $product_total = $this->model_catalog_product->getTotalProducts($filter_data);
            }
            

			
            if (defined('JOURNAL3_ACTIVE')) {
                \Journal3\Utils\Profiler::start('journal3/filter/products');

                $results = $this->model_journal3_filter->getProducts($filter_data);

                \Journal3\Utils\Profiler::end('journal3/filter/products');
            } else {
                $results = $this->model_catalog_product->getProducts($filter_data);
            }
            

            if (defined('JOURNAL3_ACTIVE')) {
                $this->load->model('journal3/product');

                $data['image_width'] = $this->journal3->settings->get('image_dimensions_product.width');
                $data['image_height'] = $this->journal3->settings->get('image_dimensions_product.height');

                if ($this->journal3->settings->get('performanceLazyLoadImagesStatus')) {
			        $data['dummy_image'] = $this->model_journal3_image->transparent($data['image_width'], $data['image_width']);
                }
            }
            

			foreach ($results as $result) {
				if ($result['image']) {
					if (defined('JOURNAL3_ACTIVE')) {
                $image = $this->model_journal3_image->resize($result['image'], $this->journal3->settings->get('image_dimensions_product.width'), $this->journal3->settings->get('image_dimensions_product.height'), $this->journal3->settings->get('image_dimensions_product.resize'));
            } else {
                $image = $this->model_tool_image->resize($result['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height'));
            }
				} else {
					$image = $this->model_tool_image->resize('placeholder.png', $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height'));
				}

				if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
					$price = $this->currency->format($this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
				} else {
					$price = false;
				}

				if ((float)$result['special']) {
					$special = $this->currency->format($this->tax->calculate($result['special'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
				} else {
					$special = false;
				}

				if ($this->config->get('config_tax')) {
					$tax = $this->currency->format((float)$result['special'] ? $result['special'] : $result['price'], $this->session->data['currency']);
				} else {
					$tax = false;
				}

				if ($this->config->get('config_review_status')) {
					$rating = (int)$result['rating'];
				} else {
					$rating = false;
				}


            if (defined('JOURNAL3_ACTIVE')) {
                if ($result['image']) {
                    $image2x = $this->model_journal3_image->resize($result['image'], $this->journal3->settings->get('image_dimensions_product.width') * 2, $this->journal3->settings->get('image_dimensions_product.height') * 2, $this->journal3->settings->get('image_dimensions_product.resize'));
                } else {
                    $image2x = $this->model_journal3_image->resize('placeholder.png', $this->journal3->settings->get('image_dimensions_product.width') * 2, $this->journal3->settings->get('image_dimensions_product.height') * 2, $this->journal3->settings->get('image_dimensions_product.resize'));
                }

                if ($this->journal3->document->isDesktop() && $this->journal3->settings->get('globalProductGridSecondImageStatus') && ($additional_image = $this->journal3->productSecondImage($result))) {
                    $second_image = $this->model_journal3_image->resize($additional_image, $this->journal3->settings->get('image_dimensions_product.width'), $this->journal3->settings->get('image_dimensions_product.height'), $this->journal3->settings->get('image_dimensions_product.resize'));
                    $second_image2x = $this->model_journal3_image->resize($additional_image, $this->journal3->settings->get('image_dimensions_product.width') * 2, $this->journal3->settings->get('image_dimensions_product.height') * 2, $this->journal3->settings->get('image_dimensions_product.resize'));
                } else {
                    $second_image = false;
                    $second_image2x = false;
                }
            }
            
				$data['products'][] = array(

                'classes'        => array(
					defined('JOURNAL3_ACTIVE') ? $this->journal3->productExcludeButton($result, $price, $special) : null,
				),
                'quantity'       => defined('JOURNAL3_ACTIVE') ? $result['quantity'] : null,
				'stock_status'   => defined('JOURNAL3_ACTIVE') ? $result['stock_status'] : null,
				'thumb2x'        => defined('JOURNAL3_ACTIVE') ? $image2x : null,
				'second_thumb'   => defined('JOURNAL3_ACTIVE') ? $second_image : null,
				'second_thumb2x' => defined('JOURNAL3_ACTIVE') ? $second_image2x : null,
				'labels'         => defined('JOURNAL3_ACTIVE') ? $this->journal3->productLabels($result, $price, $special) : null,
				'extra_buttons'  => defined('JOURNAL3_ACTIVE') ? $this->journal3->productExtraButton($result, $price, $special) : null,
				'date_end'       => defined('JOURNAL3_ACTIVE') ? $this->journal3->productCountdown($result) : null,
				'price_value'    => defined('JOURNAL3_ACTIVE') ? ($result['special'] ? $result['special'] > 0 : $result['price'] > 0) : null,
				'stat1'          => defined('JOURNAL3_ACTIVE') ? $this->journal3->productStat($result, $this->journal3->settings->get('globalProductStat1')) : null,
				'stat2'          => defined('JOURNAL3_ACTIVE') ? $this->journal3->productStat($result, $this->journal3->settings->get('globalProductStat2')) : null,
            
					'product_id'  => $result['product_id'],

        'image_title' => isset($result['image_title']) ? $result['image_title'] : '',
        'image_alt' => isset($result['image_alt']) ? $result['image_alt'] : '',
        
					'thumb'       => $image,
					'name'        => $result['name'],
					'description' => utf8_substr(trim(strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8'))), 0, $this->config->get('theme_' . $this->config->get('config_theme') . '_product_description_length')) . '..',
					'price'       => $price,
					'special'     => $special,
					'tax'         => $tax,
					'minimum'     => $result['minimum'] > 0 ? $result['minimum'] : 1,
					'rating'      => $result['rating'],
					'href'        => $this->url->link('product/product', 'path=' . $this->request->get['path'] . '&product_id=' . $result['product_id'] . $url)
				);
			}

			$url = '';

			if (isset($this->request->get['filter'])) {
				$url .= '&filter=' . $this->request->get['filter'];
			}

			if (isset($this->request->get['limit'])) {
				$url .= '&limit=' . $this->request->get['limit'];
			}


            if (defined('JOURNAL3_ACTIVE')) {
                $url .= $this->model_journal3_filter->buildFilterData($filter_data);
            }
            
			$data['sorts'] = array();

			$data['sorts'][] = array(
				'text'  => $this->language->get('text_default'),
				'value' => 'p.sort_order-ASC',
				'href'  => $this->url->link('product/category', 'path=' . $this->request->get['path'] . '&sort=p.sort_order&order=ASC' . $url)
			);

			$data['sorts'][] = array(
				'text'  => $this->language->get('text_name_asc'),
				'value' => 'pd.name-ASC',
				'href'  => $this->url->link('product/category', 'path=' . $this->request->get['path'] . '&sort=pd.name&order=ASC' . $url)
			);

			$data['sorts'][] = array(
				'text'  => $this->language->get('text_name_desc'),
				'value' => 'pd.name-DESC',
				'href'  => $this->url->link('product/category', 'path=' . $this->request->get['path'] . '&sort=pd.name&order=DESC' . $url)
			);

			$data['sorts'][] = array(
				'text'  => $this->language->get('text_price_asc'),
				'value' => 'p.price-ASC',
				'href'  => $this->url->link('product/category', 'path=' . $this->request->get['path'] . '&sort=p.price&order=ASC' . $url)
			);

			$data['sorts'][] = array(
				'text'  => $this->language->get('text_price_desc'),
				'value' => 'p.price-DESC',
				'href'  => $this->url->link('product/category', 'path=' . $this->request->get['path'] . '&sort=p.price&order=DESC' . $url)
			);

			if ($this->config->get('config_review_status')) {
				$data['sorts'][] = array(
					'text'  => $this->language->get('text_rating_desc'),
					'value' => 'rating-DESC',
					'href'  => $this->url->link('product/category', 'path=' . $this->request->get['path'] . '&sort=rating&order=DESC' . $url)
				);

				$data['sorts'][] = array(
					'text'  => $this->language->get('text_rating_asc'),
					'value' => 'rating-ASC',
					'href'  => $this->url->link('product/category', 'path=' . $this->request->get['path'] . '&sort=rating&order=ASC' . $url)
				);
			}

			$data['sorts'][] = array(
				'text'  => $this->language->get('text_model_asc'),
				'value' => 'p.model-ASC',
				'href'  => $this->url->link('product/category', 'path=' . $this->request->get['path'] . '&sort=p.model&order=ASC' . $url)
			);

			$data['sorts'][] = array(
				'text'  => $this->language->get('text_model_desc'),
				'value' => 'p.model-DESC',
				'href'  => $this->url->link('product/category', 'path=' . $this->request->get['path'] . '&sort=p.model&order=DESC' . $url)
			);

			$url = '';

			if (isset($this->request->get['filter'])) {
				$url .= '&filter=' . $this->request->get['filter'];
			}

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			$data['limits'] = array();

			$limits = array_unique(array($this->config->get('theme_' . $this->config->get('config_theme') . '_product_limit'), 25, 50, 75, 100));

			sort($limits);

            if (defined('JOURNAL3_ACTIVE')) {
                $url .= $this->model_journal3_filter->buildFilterData($filter_data);
            }
            

			foreach($limits as $value) {
				$data['limits'][] = array(
					'text'  => $value,
					'value' => $value,
					'href'  => $this->url->link('product/category', 'path=' . $this->request->get['path'] . $url . '&limit=' . $value)
				);
			}

			$url = '';

			if (isset($this->request->get['filter'])) {
				$url .= '&filter=' . $this->request->get['filter'];
			}

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['limit'])) {
				$url .= '&limit=' . $this->request->get['limit'];
			}


            if (defined('JOURNAL3_ACTIVE')) {
                $url .= $this->model_journal3_filter->buildFilterData($filter_data);
            }
            
			$pagination = new Pagination();
			$pagination->total = $product_total;
			$pagination->page = $page;
			$pagination->limit = $limit;
			$pagination->url = $this->url->link('product/category', 'path=' . $this->request->get['path'] . $url . '&page={page}');

			$data['pagination'] = $pagination->render();

			$data['results'] = sprintf($this->language->get('text_pagination'), ($product_total) ? (($page - 1) * $limit) + 1 : 0, ((($page - 1) * $limit) > ($product_total - $limit)) ? $product_total : ((($page - 1) * $limit) + $limit), $product_total, ceil($product_total / $limit));

			// http://googlewebmastercentral.blogspot.com/2011/09/pagination-with-relnext-and-relprev.html

      if ($page > 1 AND $this->config->get('mlseo_pagination_canonical')) {
         $this->load->model('tool/path_manager'); $this->document->addLink($this->url->link('product/category', 'path=' . ($this->config->get('mlseo_fpp_cat_canonical') ? $this->model_tool_path_manager->getFullCategoryPath($category_info['category_id']) : $category_info['category_id']) . '&page='. $page, true), 'canonical');
      }
      
			if ($page == 1) {
			    
        $this->load->model('tool/path_manager');
        if (empty($this->request->get['mfp_seo_alias'])) {
          $this->document->addLink($this->url->link('product/category', 'path=' . ($this->config->get('mlseo_fpp_cat_canonical') ? $this->model_tool_path_manager->getFullCategoryPath($category_info['category_id']) : $category_info['category_id'])), 'canonical');
        } else {
          $this->document->addLink( rtrim( $this->url->link('product/category', 'path=' . ($this->config->get('mlseo_enabled') && $this->config->get('mlseo_pagination_fix') ? $this->request->get['path'] : $category_info['category_id']), true), '/' ) . '/' . $this->request->get['mfp_seo_alias'], 'canonical');
        }
        
			} else {
				$this->load->model('tool/path_manager'); $this->document->addLink($this->url->link('product/category', 'path=' . ($this->config->get('mlseo_fpp_cat_canonical') ? $this->model_tool_path_manager->getFullCategoryPath($category_info['category_id']) : $category_info['category_id']) . ($this->config->get('mlseo_pagination_canonical') ? '&page='. $page : '')), 'canonical');
			}
			
			if ($page > 1) {
			    $this->load->model('tool/path_manager'); $this->document->addLink($this->url->link('product/category', 'path=' . ($this->config->get('mlseo_fpp_cat_canonical') ? $this->model_tool_path_manager->getFullCategoryPath($category_info['category_id']) : $category_info['category_id']) . (($page - 2) ? '&page='. ($page - 1) : '')), 'prev');
			}

			if ($limit && ceil($product_total / $limit) > $page) {
			    $this->load->model('tool/path_manager'); $this->document->addLink($this->url->link('product/category', 'path=' . ($this->config->get('mlseo_fpp_cat_canonical') ? $this->model_tool_path_manager->getFullCategoryPath($category_info['category_id']) : $category_info['category_id']) . '&page='. ($page + 1)), 'next');
			}

			$data['sort'] = $sort;
			$data['order'] = $order;
			$data['limit'] = $limit;

			$data['continue'] = $this->url->link('common/home');

			$data['column_left'] = $this->load->controller('common/column_left');
			$data['column_right'] = $this->load->controller('common/column_right');
			$data['content_top'] = $this->load->controller('common/content_top');
			$data['content_bottom'] = $this->load->controller('common/content_bottom');
			$data['footer'] = $this->load->controller('common/footer');
			$data['header'] = $this->load->controller('common/header');

			$this->response->setOutput($this->load->view('product/category', $data));
		} else {
			$url = '';

			if (isset($this->request->get['path'])) {
				$url .= '&path=' . $this->request->get['path'];
			}

			if (isset($this->request->get['filter'])) {
				$url .= '&filter=' . $this->request->get['filter'];
			}

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			if (isset($this->request->get['limit'])) {
				$url .= '&limit=' . $this->request->get['limit'];
			}

			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('text_error'),
				'href' => $this->url->link('product/category', $url)
			);

			$this->document->setTitle($this->language->get('text_error'));

			$data['continue'] = $this->url->link('common/home');

			$this->response->addHeader($this->request->server['SERVER_PROTOCOL'] . ' 404 Not Found');

			$data['column_left'] = $this->load->controller('common/column_left');
			$data['column_right'] = $this->load->controller('common/column_right');
			$data['content_top'] = $this->load->controller('common/content_top');
			$data['content_bottom'] = $this->load->controller('common/content_bottom');
			$data['footer'] = $this->load->controller('common/footer');
			$data['header'] = $this->load->controller('common/header');

			$this->response->setOutput($this->load->view('error/not_found', $data));
		}
	}
}
