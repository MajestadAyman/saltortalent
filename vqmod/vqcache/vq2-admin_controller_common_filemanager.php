<?php
class ControllerCommonFileManager extends Controller {
	public function index() {
		$this->load->language('common/filemanager');

		// Find which protocol to use to pass the full image link back
		if ($this->request->server['HTTPS']) {
			$server = HTTPS_CATALOG;
		} else {
			$server = HTTP_CATALOG;
		}

		if (isset($this->request->get['filter_name'])) {
			$filter_name = rtrim(str_replace(array('*', '/', '\\'), '', $this->request->get['filter_name']), '/');
		} else {
			$filter_name = '';
		}

		// Make sure we have the correct directory
		if (isset($this->request->get['directory'])) {
			$directory = rtrim(DIR_IMAGE . 'catalog/' . str_replace('*', '', $this->request->get['directory']), '/');
		} else {
			$directory = DIR_IMAGE . 'catalog';
		}

		if (isset($this->request->get['page'])) {
			$page = $this->request->get['page'];
		} else {
			$page = 1;
		}

		$directories = array();
		$files = array();

		$data['images'] = array();

		$this->load->model('tool/image');

		if (substr(str_replace('\\', '/', realpath($directory) . '/' . $filter_name), 0, strlen(DIR_IMAGE . 'catalog')) == str_replace('\\', '/', DIR_IMAGE . 'catalog')) {
			// Get directories
			$directories = glob($directory . '/' . $filter_name . '*', GLOB_ONLYDIR);

			if (!$directories) {
				$directories = array();
			}

			// Get files
			$files = glob($directory . '/' . $filter_name . '*.{jpg,jpeg,png,gif,pdf,mp4,JPG,JPEG,PNG,GIF,PDF,MP4}', GLOB_BRACE);

                if ($this->config->get('config_admin_fmor_auth') == "Name Asc" ) {
                    array_multisort($files, SORT_REGULAR, SORT_ASC);
                } elseif ($this->config->get('config_admin_fmor_auth') == "Name Desc" ) {
                    array_multisort($files, SORT_REGULAR, SORT_DESC);
                } elseif ($this->config->get('config_admin_fmor_auth') == "Date Asc" ) {
                    array_multisort(array_map('filemtime', $files), SORT_NUMERIC, SORT_ASC, $files);
                } elseif ($this->config->get('config_admin_fmor_auth') == "Date Desc" ) {
                    array_multisort(array_map('filemtime', $files), SORT_NUMERIC, SORT_DESC, $files);
                } else {
                
                }
                //
                
            

			if (!$files) {
				$files = array();
			}
		}

		// Merge directories and files
		$images = array_merge($directories, $files);

		// Get total number of files and directories
		$image_total = count($images);

		// Split the array based on current page number and max number of items per page of 10

            $data['config_admin_fmrp_auth'] = $this->config->get('config_admin_fmrp_auth');//Results per Page
            if ($data['config_admin_fmrp_auth'] == ""){$data['config_admin_fmrp_auth'] = "default";}
            $data['config_admin_fmrl_auth'] = $this->config->get('config_admin_fmrl_auth');//Results per line
            if ($data['config_admin_fmrl_auth'] == ""){$data['config_admin_fmrl_auth'] = "default";}
            $data['config_admin_fmor_auth'] = $this->config->get('config_admin_fmor_auth');//Order Results
            if ($data['config_admin_fmor_auth'] == ""){$data['config_admin_fmor_auth'] = "default";}
            $data['config_admin_ticon_auth'] = $this->config->get('config_admin_ticon_auth');//Icons Size
            if ($data['config_admin_ticon_auth'] == ""){$data['config_admin_ticon_auth'] = "default";}
            $data['config_admin_tmod_auth'] = $this->config->get('config_admin_tmod_auth');//Modal Size
            if ($data['config_admin_tmod_auth'] == ""){$data['config_admin_tmod_auth'] = "default";}
            $data['config_admin_fmsn_auth'] = $this->config->get('config_admin_fmsn_auth');//Disable space in name
            
		
            //Results per Page
            if ($data['config_admin_fmrp_auth'] == "all") {
                $data['config_admin_fmrp_pagination'] = "0";
                $pag="100";
            } else {
                if ($data['config_admin_fmrp_auth'] == "default") {
                    $images = array_splice($images, ($page - 1) * 16, 16);
                    $pag="16";
                } else {
                    $images = array_splice($images, ($page - 1) * $data['config_admin_fmrp_auth'], $data['config_admin_fmrp_auth']);
                    $pag=$data['config_admin_fmrp_auth'];
                }
                $data['config_admin_fmrp_pagination'] = "1";
            }
            //Results per line
            if ($data['config_admin_fmrl_auth'] == "default") {
                $data['config_admin_fmrl_num'] = "4";
                $data['config_admin_fmrl_class'] = "col-sm-3 col-xs-6 text-center";
            } else {
                $data['config_admin_fmrl_num'] = $data['config_admin_fmrl_auth'];
                if ($data['config_admin_fmrl_auth'] == "3") {
                    $data['config_admin_fmrl_class'] = "col-sm-4 col-xs-6 text-center";
                } elseif ( $data['config_admin_fmrl_auth'] == "4" ){
                    $data['config_admin_fmrl_class'] = "col-sm-3 col-xs-6 text-center";
                } elseif ( $data['config_admin_fmrl_auth'] == "6" ){
                    $data['config_admin_fmrl_class'] = "col-sm-2 col-xs-6 text-center";
                } elseif ( $data['config_admin_fmrl_auth'] == "12" ){
                    $data['config_admin_fmrl_class'] = "col-lg-1 col-sm-2 col-xs-5 text-center";
                }
            }
            //Tamaño icono
            if ($data['config_admin_ticon_auth'] == "default") {
                $data['config_admin_ticon_class'] = "";
            } else {
                $data['config_admin_ticon_class']=" style=\"font-size:".$data['config_admin_ticon_auth']."\"";
            }
            //Tamaño modal
            if ($data['config_admin_tmod_auth'] == "default") {
                $data['config_admin_tmod_class'] = "";
            } else {
                $data['config_admin_tmod_class']="  style=\"width:".$data['config_admin_tmod_auth']."\"";
            }
            

		foreach ($images as $image) {
			
            if ($this->config->get('config_admin_fmsn_auth') == 1 ) {
                $name = str_split(basename($image), 150);
            } else {
                $name = str_split(basename($image), 14);
            }
            

			if (is_dir($image)) {
				$url = '';

				if (isset($this->request->get['target'])) {
					$url .= '&target=' . $this->request->get['target'];
				}

				if (isset($this->request->get['thumb'])) {
					$url .= '&thumb=' . $this->request->get['thumb'];
				}


			if (strrchr($image, '.') == ".pdf"){
				$img_icon=$this->model_tool_image->resize('pdf_icon.png', 100, 100);
			} elseif (strrchr($image, '.') == ".mp4"){
				$img_icon=$this->model_tool_image->resize('mp4_icon.png', 100, 100);
			} else {
				$img_icon=$this->model_tool_image->resize(utf8_substr($image, utf8_strlen(DIR_IMAGE)), 100, 100);
			}
			
				$data['images'][] = array(
					'thumb' => '',
					'name'  => implode(' ', $name),
					'type'  => 'directory',
					'path'  => utf8_substr($image, utf8_strlen(DIR_IMAGE)),
					'href'  => $this->url->link('common/filemanager', 'user_token=' . $this->session->data['user_token'] . '&directory=' . urlencode(utf8_substr($image, utf8_strlen(DIR_IMAGE . 'catalog/'))) . $url, true)
				);
			} elseif (is_file($image)) {

			if (strrchr($image, '.') == ".pdf"){
				$img_icon=$this->model_tool_image->resize('pdf_icon.png', 100, 100);
			} elseif (strrchr($image, '.') == ".mp4"){
				$img_icon=$this->model_tool_image->resize('mp4_icon.png', 100, 100);
			} else {
				$img_icon=$this->model_tool_image->resize(utf8_substr($image, utf8_strlen(DIR_IMAGE)), 100, 100);
			}
			
				$data['images'][] = array(
					'thumb' => $img_icon,
					'name'  => implode(' ', $name),
					'type'  => 'image',
					'path'  => utf8_substr($image, utf8_strlen(DIR_IMAGE)),
					'href'  => $server . 'image/' . utf8_substr($image, utf8_strlen(DIR_IMAGE))
				);
			}
		}

		$data['user_token'] = $this->session->data['user_token'];

		if (isset($this->request->get['directory'])) {
			$data['directory'] = urlencode($this->request->get['directory']);
		} else {
			$data['directory'] = '';
		}

		if (isset($this->request->get['filter_name'])) {
			$data['filter_name'] = $this->request->get['filter_name'];
		} else {
			$data['filter_name'] = '';
		}

		// Return the target ID for the file manager to set the value
		if (isset($this->request->get['target'])) {
			$data['target'] = $this->request->get['target'];
		} else {
			$data['target'] = '';
		}

		// Return the thumbnail for the file manager to show a thumbnail
		if (isset($this->request->get['thumb'])) {
			$data['thumb'] = $this->request->get['thumb'];
		} else {
			$data['thumb'] = '';
		}

		// Parent
		$url = '';

		if (isset($this->request->get['directory'])) {
			$pos = strrpos($this->request->get['directory'], '/');

			if ($pos) {
				$url .= '&directory=' . urlencode(substr($this->request->get['directory'], 0, $pos));
			}
		}

		if (isset($this->request->get['target'])) {
			$url .= '&target=' . $this->request->get['target'];
		}

		if (isset($this->request->get['thumb'])) {
			$url .= '&thumb=' . $this->request->get['thumb'];
		}

		$data['parent'] = $this->url->link('common/filemanager', 'user_token=' . $this->session->data['user_token'] . $url, true);

		// Refresh
		$url = '';

		if (isset($this->request->get['directory'])) {
			$url .= '&directory=' . urlencode($this->request->get['directory']);
		}

		if (isset($this->request->get['target'])) {
			$url .= '&target=' . $this->request->get['target'];
		}

		if (isset($this->request->get['thumb'])) {
			$url .= '&thumb=' . $this->request->get['thumb'];
		}

		$data['refresh'] = $this->url->link('common/filemanager', 'user_token=' . $this->session->data['user_token'] . $url, true);

		$url = '';

		if (isset($this->request->get['directory'])) {
			$url .= '&directory=' . urlencode(html_entity_decode($this->request->get['directory'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['filter_name'])) {
			$url .= '&filter_name=' . urlencode(html_entity_decode($this->request->get['filter_name'], ENT_QUOTES, 'UTF-8'));
		}

		if (isset($this->request->get['target'])) {
			$url .= '&target=' . $this->request->get['target'];
		}

		if (isset($this->request->get['thumb'])) {
			$url .= '&thumb=' . $this->request->get['thumb'];
		}

		$pagination = new Pagination();
		$pagination->total = $image_total;
		$pagination->page = $page;
		$pagination->limit = $pag;
		$pagination->url = $this->url->link('common/filemanager', 'user_token=' . $this->session->data['user_token'] . $url . '&page={page}', true);

		$data['pagination'] = $pagination->render();

		$this->response->setOutput($this->load->view('common/filemanager', $data));
	}

	public function upload() {
		$this->load->language('common/filemanager');

		$json = array();

		// Check user has permission
		if (!$this->user->hasPermission('modify', 'common/filemanager')) {
			$json['error'] = $this->language->get('error_permission');
		}

		// Make sure we have the correct directory
		if (isset($this->request->get['directory'])) {
			$directory = rtrim(DIR_IMAGE . 'catalog/' . html_entity_decode($this->replaceSpaces($this->request->get['directory'],$this->config->get('config_admin_filemanager_auth')), ENT_QUOTES, 'UTF-8') . '/');
		} else {
			$directory = DIR_IMAGE . 'catalog';
		}

		// Check its a directory
		if (!is_dir($directory) || substr(str_replace('\\', '/', realpath($directory)), 0, strlen(DIR_IMAGE . 'catalog')) != str_replace('\\', '/', DIR_IMAGE . 'catalog')) {
			$json['error'] = $this->language->get('error_directory');
		}

		if (!$json) {
			// Check if multiple files are uploaded or just one
			$files = array();

			if (!empty($this->request->files['file']['name']) && is_array($this->request->files['file']['name'])) {
				foreach (array_keys($this->request->files['file']['name']) as $key) {
					$files[] = array(
						'name'     => $this->replaceSpaces($this->request->files['file']['name'][$key],$this->config->get('config_admin_filemanager_auth')),
						'type'     => $this->request->files['file']['type'][$key],
						'tmp_name' => $this->request->files['file']['tmp_name'][$key],
						'error'    => $this->request->files['file']['error'][$key],
						'size'     => $this->request->files['file']['size'][$key]
					);
				}
			}

			foreach ($files as $file) {
				if (is_file($file['tmp_name'])) {
					// Sanitize the filename
					$filename = basename(html_entity_decode($file['name'], ENT_QUOTES, 'UTF-8'));

					// Validate the filename length
					if ((utf8_strlen($filename) < 3) || (utf8_strlen($filename) > 255)) {
						$json['error'] = $this->language->get('error_filename');
					}

					// Allowed file extension types
					$allowed = array(
						'jpg',
						'jpeg',
						'gif',
						'png'
,'pdf','mp4'
					);

					if (!in_array(utf8_strtolower(utf8_substr(strrchr($filename, '.'), 1)), $allowed)) {
						$json['error'] = $this->language->get('error_filetype');
					}

					// Allowed file mime types
					$allowed = array(
						'image/jpeg',
						'image/pjpeg',
						'image/png',
						'image/x-png',
						'image/gif'
,'application/pdf','video/mp4'
					);

					if (!in_array($file['type'], $allowed)) {
						$json['error'] = $this->language->get('error_filetype');
					}

					// Return any upload error
					if ($file['error'] != UPLOAD_ERR_OK) {
						$json['error'] = $this->language->get('error_upload_' . $file['error']);
					}
				} else {
					$json['error'] = $this->language->get('error_upload');
				}

				if (!$json) {
					move_uploaded_file($file['tmp_name'], $directory . '/' . $filename);
				}
			}
		}

		if (!$json) {
			$json['success'] = $this->language->get('text_uploaded');
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	public function folder() {
		$this->load->language('common/filemanager');

		$json = array();

		// Check user has permission
		if (!$this->user->hasPermission('modify', 'common/filemanager')) {
			$json['error'] = $this->language->get('error_permission');
		}

		// Make sure we have the correct directory
		if (isset($this->request->get['directory'])) {
			$directory = rtrim(DIR_IMAGE . 'catalog/' . html_entity_decode($this->replaceSpaces($this->request->get['directory'],$this->config->get('config_admin_filemanager_auth')), ENT_QUOTES, 'UTF-8') . '/');
		} else {
			$directory = DIR_IMAGE . 'catalog';
		}

		// Check its a directory
		if (!is_dir($directory) || substr(str_replace('\\', '/', realpath($directory)), 0, strlen(DIR_IMAGE . 'catalog')) != str_replace('\\', '/', DIR_IMAGE . 'catalog')) {
			$json['error'] = $this->language->get('error_directory');
		}

		if ($this->request->server['REQUEST_METHOD'] == 'POST') {
			// Sanitize the folder name
			$folder = basename(html_entity_decode($this->request->post['folder'], ENT_QUOTES, 'UTF-8'));

			// Validate the filename length
			if ((utf8_strlen($folder) < 3) || (utf8_strlen($folder) > 128)) {
				$json['error'] = $this->language->get('error_folder');
			}

			// Check if directory already exists or not
			if (is_dir($directory . '/' . $folder)) {
				$json['error'] = $this->language->get('error_exists');
			}
		}

		if (!isset($json['error'])) {
			mkdir($directory . '/' . $folder, 0777);
			chmod($directory . '/' . $folder, 0777);

			@touch($directory . '/' . $folder . '/' . 'index.html');

			$json['success'] = $this->language->get('text_directory');
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}


            public function replaceSpaces($string,$allow) {
                if ( $allow == 1 ) {
                    $string = preg_replace('!\s+!', ' ', $string);
                    $string = str_replace(" ", "-", $string);
                    $unwanted_array = array(    'Š'=>'S', 'š'=>'s', 'Ž'=>'Z', 'ž'=>'z', 'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A', 'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E',
                                    'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O', 'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ù'=>'U',
                                    'Ú'=>'U', 'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y', 'Þ'=>'B', 'ß'=>'Ss', 'à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a', 'å'=>'a', 'æ'=>'a', 'ç'=>'c',
                                    'è'=>'e', 'é'=>'e', 'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i', 'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o', 'ô'=>'o', 'õ'=>'o',
                                    'ö'=>'o', 'ø'=>'o', 'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ý'=>'y', 'þ'=>'b', 'ÿ'=>'y', '('=>'', ')'=>'' );
                    $string = strtolower(strtr( $string, $unwanted_array ));
                    $string = preg_replace('~-{2,}~', '-', $string);
                }
                return $string;
            }
            
	public function delete() {
		$this->load->language('common/filemanager');

		$json = array();

		// Check user has permission
		if (!$this->user->hasPermission('modify', 'common/filemanager')) {
			$json['error'] = $this->language->get('error_permission');
		}

		if (isset($this->request->post['path'])) {
			$paths = $this->request->post['path'];
		} else {
			$paths = array();
		}

		// Loop through each path to run validations
		foreach ($paths as $path) {
			// Check path exsists
			if ($path == DIR_IMAGE . 'catalog' || substr(str_replace('\\', '/', realpath(DIR_IMAGE . $path)), 0, strlen(DIR_IMAGE . 'catalog')) != str_replace('\\', '/', DIR_IMAGE . 'catalog')) {
				$json['error'] = $this->language->get('error_delete');

				break;
			}
		}

		if (!$json) {
			// Loop through each path
			foreach ($paths as $path) {
				$path = rtrim(DIR_IMAGE . $path, '/');

				// If path is just a file delete it
				if (is_file($path)) {
					unlink($path);

				// If path is a directory beging deleting each file and sub folder
				} elseif (is_dir($path)) {
					$files = array();

					// Make path into an array
					$path = array($path);

					// While the path array is still populated keep looping through
					while (count($path) != 0) {
						$next = array_shift($path);

						foreach (glob($next) as $file) {
							// If directory add to path array
							if (is_dir($file)) {
								$path[] = $file . '/*';
							}

							// Add the file to the files to be deleted array
							$files[] = $file;
						}
					}

					// Reverse sort the file array
					rsort($files);

					foreach ($files as $file) {
						// If file just delete
						if (is_file($file)) {
							unlink($file);

						// If directory use the remove directory function
						} elseif (is_dir($file)) {
							rmdir($file);
						}
					}
				}
			}

			$json['success'] = $this->language->get('text_delete');
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
}