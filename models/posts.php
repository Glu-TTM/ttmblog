<?php

class posts extends model{


	public function addPost($data=[]){

		$getpost = $this->getPost($data['title']);
		if ($getpost <= 0) {

		$sql = "INSERT INTO blog_posts SET title = :title, author=:author, category = :category, content = :content, date = :now";
			$sql = $this->connect()->prepare($sql);
			$sql->bindValue(':title', $data['title']);
			$sql->bindValue(':author', $data['author']);
			$sql->bindValue(':category', $data['category']);
			$sql->bindValue(':content',$data['content']);
			$sql->bindValue(':now', $data['date']);
			//$sql->bindValue(':image', $data['image']);
			$sql->execute();
			if ($sql->execute()) {
			$data=[];
			$data = "Post Added Succesfully";
			return $data;
			}
		}else{
			$msg = "There is a post with same name!";
			return $msg;
		}
	}

	public function allPosts($start, $limit){

		$sql = "SELECT * FROM blog_posts LIMIT $start, $limit";
		$sql = $this->connect()->prepare($sql);
		$sql->execute();

		if ($sql->rowCount() > 0) {
			$result = $sql->fetchAll();
		}
		return $result;
	}
	public function getPost($key){
		if (is_numeric($key)) {
			$sql = "SELECT * FROM blog_posts WHERE id = :id";
			$sql = $this->connect()->prepare($sql);
			$sql->bindValue(':id', $key);
			$sql->execute();

			if ($sql->rowCount() > 0) {
				$result = $sql->fetch();
			}
			return $result;
		}else{
			$sql = "SELECT * FROM blog_posts WHERE title = :title";
			$sql = $this->connect()->prepare($sql);
			$sql->bindValue(':title', $key);
			$sql->execute();

			if ($sql->rowCount() > 0) {
				$result = $sql->fetch();
			}
			return $result;
		}
		
	}
	public function categoryPosts($category){
		$sql = "SELECT * FROM blog_posts WHERE category = :category";
		$sql = $this->connect()->prepare($sql);
		$sql->bindValue(":category", $category);
		$sql->execute();

		if ($sql->rowCount() > 0) {
			$result = $sql->fetchAll();
			return $result;
		}
		
	}

	public function deletePost($id){
		$id = addslashes($id);
		$sql = "DELETE FROM blog_posts WHERE id =:id";
		$sql =$this->connect()->prepare($sql);
		$sql->bindValue(':id', $id);
		$sql->execute();

		if ($sql->execute()) {
			$data=[];
			$data = "Post deleted Succesfully";
			return $data;
		}
	}
	public function updatePost($data=[]){
		$sql = "UPDATE blog_posts SET title = :title, author=:author, category = :category, content = :content, date = :now WHERE id = :id";
			$sql = $this->connect()->prepare($sql);
			$sql->bindValue(':id', $data['id']);
			$sql->bindValue(':title', $data['title']);
			$sql->bindValue(':author', $data['author']);
			$sql->bindValue(':category', $data['category']);
			$sql->bindValue(':content',$data['content']);
			$sql->bindValue(':now', $data['date']);
			//$sql->bindValue(':image', $data['image']);
			$sql->execute();

			if ($sql->execute()) {
				$msg = "Post updated Succesfully";
			}else{
				$msg = 'Something went wrong';
			}
			return $msg;
	}
}