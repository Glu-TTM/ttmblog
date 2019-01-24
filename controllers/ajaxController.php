<?php

class ajaxController extends controller{


    public function index(){
        $data = [];
    }
    /*==================================Begin of category=================================*/


    public function addcategory(){
    	$data = [];
    	if (isset($_POST['category-name']) && !empty($_POST['category-name'])) {
    		$catname = $_POST['category-name'];

    		$cats = new categories();
    		$data['msg'] = $cats->addCategory($catname);
    	}

    	echo json_encode($data);
    }
    public function getcategory($key){
    	$cats = new categories();
		$data = [];

		$data['category'] = $cats->getCategory($key);
		echo json_encode($data);
    }
    public function getcategories(){
        $cats = new categories();
        $posts = new posts();
		$data = [];

		$data['categories'] = $cats->allCategories();

        echo json_encode($data);
    }
    public function delcategory($id){

    	$data = [];

    	if (!empty($id)) {
    		 $cats = new categories();
    		 $cats->deleteCategory($id);

    		 $data['msg'] = $cats->deleteCategory($id);
    		 echo json_encode($data);
    		 }
    }
    public function updatecategory($id, $catname){
    	$data = [];

    	$cats = new categories();
    	$cats->updateCategory($id, $catname);

    	if ($cats->updateCategory($id, $catname)) {
    		 	$data['msg'] = "Updated ";
    		 	echo json_encode($data);
    		 }else{
    		 	$data['msg'] = "Ops ";
    		 	echo json_encode($data);
    		 }
    }
    /*==================================End of category=================================*/

    public function addpost(){
    	$data = [];
    	if (isset($_POST['title']) && !empty($_POST['title'])) {
    		$data['title'] = addslashes($_POST['title']);
    		$data['author'] = addslashes($_POST['author']);
    		$data['category'] = addslashes($_POST['category']);
    		$data['content'] = addslashes($_POST['content']);
    		$data['date'] = addslashes(date('y:m:d h:i:s'));

    		$post = new posts();
    		$post->addPost($data);
    		
    		$data['msg'] = $post->addPost($data);
    		echo json_encode($data);
    	}
    }
    public function getposts(){
    	if ($_POST["key"] == 'getData') {
    		$start = addslashes($_POST['start']);
    		$limit = addslashes($_POST['limit']);

			$posts = new posts();
			$data = [];

			$data['posts'] = $posts->allPosts($start, $limit);

	        echo json_encode($data);
    	}else
    		exit("maxReached");
        
    }
     public function postscategory(){
     	if (!empty($_POST['cat'])) {
     		$category = $_POST['cat'];
     		$posts = new posts();
			$data = [];

			$data['postscategory'] = $posts->categoryPosts($category);

		    echo json_encode($data);
     	}
		
 
    }

    public function getpost($id){
        $posts = new posts();
		$data = [];

		$data['post'] = $posts->getPost($id);

        echo json_encode($data);
    }
    public function delpost($id){
    	$posts = new posts();

    	$data = [];

    	$data['msg'] = $posts->deletePost($id);
    	echo json_encode($data);
    }
    public function updatepost(){
    	$data =[];
    	if (isset($_POST['title']) && !empty($_POST['title'])) {
    		$data['id'] = addslashes($_POST['id']);
    		$data['title'] = addslashes($_POST['title']);
    		$data['author'] = addslashes($_POST['author']);
    		$data['category'] = addslashes($_POST['category']);
    		$data['content'] = addslashes($_POST['content']);
    		$data['date'] = addslashes(date('y:m:d h:i:s'));
    	}	

    	$posts = new posts();

    	$data['msg'] = $posts->updatePost($data);
    	echo json_encode($data);
    }

}    