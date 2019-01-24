<h1 class="h3">Categories </h1><hr>

<div class="row " >
	<div class="col-md-12">
		<form id="formUpdate" class="form-group" hidden="hidden">
			<div class="col-md-4">
				<input class="form-control" id="inputForm" type="text" name="category_update" >
				<input type="text" name="id_cat" hidden="hidden" id="id_cat">
			</div>
			
			<button class="btn btn-primary" type="submit" id="updateCat">Update</button>
		</form>
	</div>
	<div class="col-md-12 " id="categories">
		
	</div>
</div>

	<form class="form-group form-add" method="post" id="form-cat">
		<div hidden="hidden" class="alert alert-success" id="response"></div>
		<div class="col-md-6">
			<input class="form-control" id="category" type="text" name="category-name">
		</div>
		<div>
			<button class="btn btn-primary" id="add-category" type="submit">Add New Category</button>
		</div><br>
		<input class="cat_gory" type="text" hidden="hidden" name="category" >
		<div class="col-md-12">
			<div class="alert alert-success col-md-6" id="success" hidden="hidden"></div>
			<div class="alert alert-danger col-md-6" id="error" hidden="hidden"></div>
		</div>
		
		
	</form>

</div>
