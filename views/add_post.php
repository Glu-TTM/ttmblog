<h1>Posts add</h1>
<div class="row fill-screen">
	<form class="form-group" id="form-post">
		<div class="col-md-4 ">
			<div class="img-placeholder">
				<input class="form-control" type="file" enctype="multipart/data" name="">
			</div>
		</div>
	
		<div class="col-md-8">
			<label>Title</label>
			<div class="col-md-12">
				<input class="form-control" type="text" name="title"><br>
			</div>
			
			<div class="col-md-6">
				<label>Author</label>
				<select class="form-control" name="author">
					<option value="glu">Glu</option>
					<option value="ttm">Ghost</option>
				</select>
			</div>
			<div class="col-md-6">
				<label>Category</label>
				<select class="form-control" name="category">
					<option value="html">HTML</option>
					<option value="php">PHP</option>
				</select>
			</div><br>
			<div class="col-md-12"><br>
				<label>Content</label>
				<textarea rows="5" cols="5" class="form-control" name="content"></textarea><br><br>
				<button class="btn btn-primary" id="add_post" type="submit" >ADD POST</button>
			</div>
			
		</div>
	</form>
</div>