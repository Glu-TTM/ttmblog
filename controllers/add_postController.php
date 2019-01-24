<?php

class add_postController extends controller{


	public function index(){

		$data = [];
		$posts = new posts();

		if (isset($_POST['title']) && !empty($_POST['title']) && !empty($_POST['content'])) {
			$title = addslashes($_POST['title']);
			$content = addslashes($_POST['content']);
			$author = addslashes($_POST['author']);
			$category = addslashes($_POST['category']);

			$posts->addPost($title, $content, $author, $category);
		}

		$this->loadTemplate('add_post', $data);
	}
	
}