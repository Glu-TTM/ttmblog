<?php

class controller{

	//Here we are loading the main view
	public function loadView($viewName, $viewData = []){
		extract($viewData); //extraticng the array
		if (file_exists('views/' .$viewName. '.php')) {
			include 'views/' .$viewName. '.php';
		}else{
			include $viewName.'.php';
		}
	}
	//getting the full template
	public function loadTemplate($viewName, $viewData =[]){
		extract($viewData);
		if (file_exists('views/template.php')) {
			include 'views/template.php';
		}
	}
	//loading views inside templates
	public function loadViewInTemplate($viewName, $viewData){
		extract($viewData);
		if (file_exists('views/'.$viewName.'.php')) {
			include 'views/'.$viewName.'.php';
		}else{
			include $viewName.'.php';
		}
	}
}