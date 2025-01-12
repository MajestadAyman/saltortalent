<?php
class ControllerCommonHeader extends Controller {
	public function index() {

                $this->document->addStyle('view/javascript/journal3/assets/menu.css');
            
		$data['title'] = $this->document->getTitle();

            if($_SERVER['QUERY_STRING'] != "") {
                if ($this->config->get('config_admin_header_title_auth') == 1 ) {
		    	    $data['title'] = $this->document->getTitle() .''. $this->config->get('config_admin_header_title');
                }
		    }
            

		if ($this->request->server['HTTPS']) {
			$data['base'] = HTTPS_SERVER;
		} else {
			$data['base'] = HTTP_SERVER;
		}


				if (is_file(DIR_IMAGE . $this->config->get('config_logo_favicon'))) {
			        $this->document->addLink(HTTPS_CATALOG . 'image/' . $this->config->get('config_logo_favicon'), 'icon');
		        }
				
			

                $data['config_admin_date_auth'] = $this->config->get('config_admin_date_auth');
				
			
		$data['description'] = $this->document->getDescription();
		$data['keywords'] = $this->document->getKeywords();
		$data['links'] = $this->document->getLinks();
		$data['styles'] = $this->document->getStyles();
		$data['scripts'] = $this->document->getScripts();
		$data['lang'] = $this->language->get('code');
		$data['direction'] = $this->language->get('direction');

				$data['config_logo_image'] = $this->config->get('config_logo_image');
					$this->load->model('tool/image');
					
					if (isset($this->request->post['config_logo_image']) && is_file(DIR_IMAGE . $this->request->post['config_logo_image'])) {
						$data['logo_thumb'] = $this->model_tool_image->resize($this->request->post['config_logo_image'], 125, 46);
					} elseif ($this->config->get('config_logo_image') && is_file(DIR_IMAGE . $this->config->get('config_logo_image'))) {
						$data['logo_thumb'] = $this->model_tool_image->resize($this->config->get('config_logo_image'), 125, 46);
					} else {
						$data['logo_thumb'] = 'view/image/logo.png';
					}
				$data['config_footer_text'] = html_entity_decode($this->config->get('config_footer_text'));
				
			

		$this->load->language('common/header');
		
		$data['text_logged'] = sprintf($this->language->get('text_logged'), $this->user->getUserName());

		if (!isset($this->request->get['user_token']) || !isset($this->session->data['user_token']) || ($this->request->get['user_token'] != $this->session->data['user_token'])) {
			$data['logged'] = '';

			$data['home'] = $this->url->link('common/dashboard', '', true);
		} else {
			$data['logged'] = true;

			$data['home'] = $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true);
			$data['logout'] = $this->url->link('common/logout', 'user_token=' . $this->session->data['user_token'], true);
			$data['profile'] = $this->url->link('common/profile', 'user_token=' . $this->session->data['user_token'], true);
		
			$this->load->model('user/user');
	
			$this->load->model('tool/image');
	
			$user_info = $this->model_user_user->getUser($this->user->getId());
	
			if ($user_info) {
				$data['firstname'] = $user_info['firstname'];
				$data['lastname'] = $user_info['lastname'];
				$data['username']  = $user_info['username'];
				$data['user_group'] = $user_info['user_group'];
	
				if (is_file(DIR_IMAGE . $user_info['image'])) {
					$data['image'] = $this->model_tool_image->resize($user_info['image'], 45, 45);
				} else {
					$data['image'] = $this->model_tool_image->resize('profile.png', 45, 45);
				}
			} else {
				$data['firstname'] = '';
				$data['lastname'] = '';
				$data['user_group'] = '';
				$data['image'] = '';
			}			
			
			// Online Stores
			$data['stores'] = array();

			$data['stores'][] = array(
				'name' => $this->config->get('config_name'),
				'href' => HTTP_CATALOG
			);

			$this->load->model('setting/store');

			$results = $this->model_setting_store->getStores();

			foreach ($results as $result) {
				$data['stores'][] = array(
					'name' => $result['name'],
					'href' => $result['url']
				);
			}
		}

		return $this->load->view('common/header', $data);
	}
}