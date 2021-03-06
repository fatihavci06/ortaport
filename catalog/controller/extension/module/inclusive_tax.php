<?php
class ControllerExtensionModuleInclusiveTax extends Controller {
	// catalog/controller/product/product/before
	public function hideExTax(&$route, &$data) {
		if ($this->config->get('module_inclusive_tax_status')) {

			if (isset($data['tax'])) {
				$data['tax'] = null;
			}

			if (isset($data['products']) && is_array($data['products'])) {
				foreach ($data['products'] as $key => $product) {
					$data['products'][$key]['tax'] = null;
				}
			}
		}
	}
}
