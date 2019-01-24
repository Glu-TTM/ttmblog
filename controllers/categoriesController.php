<?php

class categoriesController extends controller{


	public function index(){

		$cats = new categories();
		$data = [];

		$data['categories'] = $cats->allCategories();
		if (isset($_POST['category-name']) && !empty($_POST['category-name'])) {
			$name = addslashes($_POST['category-name']);
			$cats ->addCategory($name);
		}
		if (isset($_POST['category_update']) && !empty($_POST['category_update'])) {
			$catUp = addslashes($_POST['category_update']);
			$idCat = addslashes($_POST['id_cat']);

			$cats->updateCategory($idCat, $catUp);
			if ($cats->updateCategory($idCat, $catUp)) {
				$data['msg'] = "Updated ...";
			}else{
				$data['msg'] = "Exists ...";
			}
			echo json_encode($data);
		}

		$this->loadTemplate('categories', $data);
	}
}