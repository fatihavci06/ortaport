<?php
class ControllerExtensionModuleInclusiveTax extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('extension/module/inclusive_tax');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('setting/setting');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->model_setting_setting->editSetting('module_inclusive_tax', $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
		}

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/module/inclusive_tax', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['action'] = $this->url->link('extension/module/inclusive_tax', 'user_token=' . $this->session->data['user_token'], true);

		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);

		if (isset($this->request->post['module_inclusive_tax_status'])) {
			$data['module_inclusive_tax_status'] = $this->request->post['module_inclusive_tax_status'];
		} else {
			$data['module_inclusive_tax_status'] = $this->config->get('module_inclusive_tax_status');
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/module/inclusive_tax', $data));
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/module/inclusive_tax')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}

	public function install() {
		$this->load->model('setting/event');

		$this->model_setting_event->addEvent('inclusive_tax', 'catalog/view/product/*/before', 'extension/module/inclusive_tax/hideExTax');
		$this->model_setting_event->addEvent('inclusive_tax_modules', 'catalog/view/extension/module/*/before', 'extension/module/inclusive_tax/hideExTax');
	}

	public function uninstall() {
		$this->load->model('setting/event');

		$this->model_setting_event->deleteEventByCode('inclusive_tax');
		$this->model_setting_event->deleteEventByCode('inclusive_tax_modules');
	}
}