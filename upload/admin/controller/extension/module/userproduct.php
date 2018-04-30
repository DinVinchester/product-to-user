<?php
class ControllerExtensionModuleUserproduct extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('extension/module/userproduct');
		$this->document->setTitle($this->language->get('heading_title'));
		$this->load->model('extension/cms/userproduct');
	}

	public function install() {
		$this->load->model('extension/cms/userproduct');
		$this->model_extension_cms_userproduct->install();

		$this->load->model('setting/extension');
		$this->model_setting_extension->install('module', 'product_to_user_relationship');
	}

	public function uninstall() {
		// $this->load->model('extension/cms/userproduct');
		// $this->model_extension_cms_userproduct->uninstall();
		//
		// $this->load->model('setting/extension');
		// $this->model_setting_extension->uninstall('module', 'product_to_user_relationship');
	}
}
