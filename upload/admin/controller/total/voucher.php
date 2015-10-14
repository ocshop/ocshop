<?php
// *	@copyright	OCSHOP.CMS \ ocshop.net 2011 - 2015.
// *	@demo	http://ocshop.net
// *	@blog	http://ocshop.info
// *	@forum	http://forum.ocshop.info
// *	@source		See SOURCE.txt for source and other copyright.
// *	@license	GNU General Public License version 3; see LICENSE.txt

class ControllerTotalVoucher extends Controller {
	private $error = array();

	public function index() {
		$this->language->load('total/voucher');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('setting/setting');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->model_setting_setting->editSetting('voucher', $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('extension/total', 'token=' . $this->session->data['token'], true));
		}

		$data['heading_title'] = $this->language->get('heading_title');

		$data['text_edit'] = $this->language->get('text_edit');
		$data['text_enabled'] = $this->language->get('text_enabled');
		$data['text_disabled'] = $this->language->get('text_disabled');

		$data['entry_status'] = $this->language->get('entry_status');
		$data['entry_sort_order'] = $this->language->get('entry_sort_order');

		$data['button_save'] = $this->language->get('button_save');
		$data['button_cancel'] = $this->language->get('button_cancel');

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'token=' . $this->session->data['token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_total'),
			'href' => $this->url->link('extension/total', 'token=' . $this->session->data['token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('total/voucher', 'token=' . $this->session->data['token'], true)
		);

		$data['action'] = $this->url->link('total/voucher', 'token=' . $this->session->data['token'], true);

		$data['cancel'] = $this->url->link('extension/total', 'token=' . $this->session->data['token'], true);

		if (isset($this->request->post['voucher_status'])) {
			$data['voucher_status'] = $this->request->post['voucher_status'];
		} else {
			$data['voucher_status'] = $this->config->get('voucher_status');
		}

		if (isset($this->request->post['voucher_sort_order'])) {
			$data['voucher_sort_order'] = $this->request->post['voucher_sort_order'];
		} else {
			$data['voucher_sort_order'] = $this->config->get('voucher_sort_order');
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('total/voucher.tpl', $data));
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'total/voucher')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}

	public function install() {
		// Register the event triggers
		$this->load->model('extension/event');

		$this->model_extension_event->addEvent('voucher', 'post.order.history.add', 'total/voucher/send');
	}

	public function uninstall() {
		// delete the event triggers
		$this->load->model('extension/event');

		$this->model_extension_event->deleteEvent('voucher');
	}
}
