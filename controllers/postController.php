<?php

class postController extends controller{


	public function index(){

		$data = [];

		// $data['categories'] = $cats->allCategories();

		$this->loadTemplate('post', $data);
	}
	
}