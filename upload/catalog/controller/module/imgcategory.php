<?php
// *	@copyright	OPENCART.PRO 2011 - 2015.
// *	@forum	http://forum.opencart.pro
// *	@source		See SOURCE.txt for source and other copyright.
// *	@license	GNU General Public License version 3; see LICENSE.txt

class ControllerModuleImgcategory extends Controller {

	public function index($setting) {
		$this->load->language('module/imgcategory');

    	$data['heading_title'] = $this->language->get('heading_title');

		$this->load->model('catalog/category');

		$this->load->model('tool/image');

		$data['categories'] = $this->getCategories($setting['category_id']);

		if (file_exists(DIR_TEMPLATE . $this->config->get('config_template') . '/template/module/imgcategory')) {
			return $this->load->view($this->config->get('config_template') . '/template/module/imgcategory', $data);
		} else {
			return $this->load->view('default/template/module/imgcategory', $data);
		}
  	}

	protected function getCategories($parent_cat_id) {
		$categories = array();
		
		$results = $this->model_catalog_category->getCategories($parent_cat_id);

        if (empty($results)) {
            return $categories;
        }
		
		$i = 0;
		foreach ($results as $result) {
            $categories[$i]['href'] = $this->url->link('product/category', 'path=' . $result['category_id']);

			if ($result['image']) {
                $image = $result['image'];
            } else {
                $image = 'placeholder.png';
            }

            $categories[$i]['thumb'] = $this->model_tool_image->resize($image, $this->config->get('config_image_category_width'), $this->config->get('config_image_category_height'));
            $categories[$i]['name'] = $result['name'];
			
            $i++;
		}
		
		return $categories;
	}		
}
?>