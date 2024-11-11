<?php
class ControllerCommonFooter extends Controller {
	public function index() {
		$this->load->language('common/footer');

				if($this->config->get('config_footer_text')){
					$data['config_footer_text'] = html_entity_decode($this->config->get('config_footer_text'));
				}else{
					if ($this->user->isLogged() && isset($this->request->get['user_token']) && ($this->request->get['user_token'] == $this->session->data['user_token'])) {
						$data['config_footer_text'] = sprintf($this->language->get('text_version'), VERSION);
					} else {
						$data['config_footer_text'] = '';
					}
				}
				// estadisticas menu lateral
				$data['config_admin_columnleft_stats_auth'] = $this->config->get('config_admin_columnleft_stats_auth');
				
			

		if ($this->user->isLogged() && isset($this->request->get['user_token']) && ($this->request->get['user_token'] == $this->session->data['user_token'])) {
			$data['text_version'] = sprintf($this->language->get('text_version'), VERSION);
		} else {
			$data['text_version'] = '';
		}
		
		return $this->load->view('common/footer', $data);
	}
}
