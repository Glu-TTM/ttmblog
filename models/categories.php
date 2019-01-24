<?php

class categories extends model{


	public function getCategory($key){
		if (!empty($key) && is_numeric($key)) {
			$key = addslashes($key);
			$sql = "SELECT cat_name FROM categories WHERE id =:id";
			$sql = $this->connect()->prepare($sql);
			$sql->bindValue(':id', $key);
			$sql->execute();

			if ($sql->rowCount() > 0) {
				$result = $sql->fetch();
			}
			return $result;
			}elseif (!empty($key) && is_string($key)) {
				$key = addslashes($key);
				$sql = "SELECT cat_name FROM categories WHERE cat_name =:key";
				$sql = $this->connect()->prepare($sql);
				$sql->bindValue(':key', $key);
				$sql->execute();

				if ($sql->rowCount() > 0) {
					$result = $sql->fetch();
				}
				return $result;
			}
	}
	public function nameExists($cat_name){

		if (!empty($cat_name)) {
			$sql = "SELECT cat_name FROM categories WHERE cat_name =:cat_name";
			$sql = $this->connect()->prepare($sql);
			$sql->bindValue(':cat_name', $cat_name);
			$sql->execute();

			if ($sql->rowCount() > 0) {
				$result = $sql->fetch();
			}
			return $result;
			}
			
	}
	public function allCategories(){

		$sql = "SELECT * FROM categories";
		$sql = $this->connect()->query($sql);

		if ($sql->rowCount() > 0) {
			$result = $sql->fetchAll();
		}
		return $result;
	}

	public function addCategory($name_Cat){

		$name = $this->nameExists($name_Cat);

		if ($name <= 0) {
			$sql = "INSERT INTO categories SET cat_name = :category_name";
			$sql = $this->connect()->prepare($sql);
			$sql->bindValue(':category_name', $name_Cat);
			$sql->execute();
			if ($sql->execute()) {
				$msg = "Category added Successfully ...";
			}else{
				$msg = "Something went wrong! please try again";
			}
			return $msg;
		}
	}

	public function deleteCategory($id){
		if (!empty($id)) {
			$id = addslashes($id);
			$sql = "DELETE FROM categories WHERE id= :id";
			$sql = $this->connect()->prepare($sql);
			$sql->bindValue(':id', $id);
			$sql->execute();
			if ($sql->execute()) {
				$msg = "Category deleted Successfully!...";
			}else{
				$msg = "Something went wrong! please try again";
			}
			return $msg;
		}
	}
	public function updateCategory($id, $cat_name){
		if (!empty($id) && !empty($cat_name)) {
			$id = addslashes($id);
			$cat_name = addslashes($cat_name);

			$sql = "UPDATE categories SET cat_name = :cat_name WHERE id = :id";
			$sql = $this->connect()->prepare($sql);
			$sql->bindValue(':cat_name', $cat_name);
			$sql->bindValue(':id', $id);
			$sql->execute();
		}
	}
}


?>