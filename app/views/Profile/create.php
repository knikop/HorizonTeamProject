<?php $this->view('navbar'); ?>
<?php
if (isset($_GET['message'])) {
?>
	<div class="alert alert-primary" role="alert">
		<?= $_GET['message'] ?>
	</div>
<?php
}
?>

<div class="box">
	<div class="container p-3 insideColor" style="width: 80%; height: 115%; margin-top: 25%">

		<h1 style="font-weight: bold; font-size: 350%">~Insert Profile Info~</h1>
		<hr>

		<form action='' method='post' enctype="multipart/form-data">
			
		<h4 style="margin-right: 27%; font-weight: bold; color: black">Add A profile Picture</h4>
		<input class="btn btn-primary btn-lg" type="file" name="image" style="width: 60%; border-radius: 15px"/><br>

			<div class="form-group">
				<label class="col-sm-2 col-form-label">Full name:<input class='form-control' type="text" name="fullname" placeholder="full name" /></label>
			</div>
			<div class="form-group">
				<label class="col-sm-2 col-form-label">Address:<input class='form-control' type="text" name="address" placeholder="address" /></label>
			</div>
			<div class="form-group">
				<label class="col-sm-2 col-form-label">City:<input class='form-control' type="text" name="city" placeholder="city" /></label>
			</div>
			<div class="form-group">
				<label class="col-sm-2 col-form-label">Zipcode:<input class='form-control' type="text" name="zipcode" placeholder="zipcode" /></label>
			</div>
			<div class="form-group">
				<label class="col-sm-2 col-form-label">State:<input class='form-control' type="text" name="state" placeholder="state" /></label>
			</div>

			<input class="btn btn-dark btn-lg" type='submit' name='action' value='Create' style="width: 40%" />
		</form>
	</div>
</div>
</form>
<script>
	picture.onchange = evt => {
  const [file] = picture.files
  if (file) {
    pic_preview.src = URL.createObjectURL(file)
  }
}
</script>
<?php $this->view('footer'); ?>