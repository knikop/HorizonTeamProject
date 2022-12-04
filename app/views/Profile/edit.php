<?php $this->view('navbar'); ?>

<?php
if(isset($_GET['message'])){
?>
<div class="alert alert-primary" role="alert">
	<?=$_GET['message']?>
</div>
<?php
}
?>

<div class="container py-3">
<form action='' method="post">
<img class="rounded-circle border border-dark" src="/images/<?= $data->image ?>" style="width:300px;">

	<h1>Edit your Profile</h1>
<p>Provide the information requested in the form below.</p>
	<div class="form-group">
		<label class="col-sm-6  col-form-label">Full name:<input class='form-control' type="text" name="fullname" placeholder="full name" value='<?=htmlspecialchars($data->fullname)?>'/></label>
	</div>
	<div class="form-group">
		<label class="col-sm-6 col-form-label">Address:<input class='form-control' type="text" name="address" placeholder="address" value='<?=htmlspecialchars($data->address)?>'/></label>
	</div>
	<div class="form-group">
		<label class="col-sm-6  col-form-label">City:<input class='form-control' type="text" name="city" placeholder="city" value='<?=htmlspecialchars($data->city)?>'/></label>
	</div>
    <div class="form-group">
		<label class="col-sm-6  col-form-label">Zipcode:<input class='form-control' type="text" name="zipcode" placeholder="zipcode" value='<?=htmlspecialchars($data->zipcode)?>'/></label>
	</div>
    <div class="form-group">
		<label class="col-sm-6  col-form-label">State:<input class='form-control' type="text" name="state" placeholder="state" value='<?=htmlspecialchars($data->state)?>'/></label>
	</div>
	<input type='submit' name='action' value="Edit" class='btn btn-primary' />
</form>
</div>

<style>
.container {
  position: relative;
  max-width: 500px;
  margin: auto;
  text-align: center;
}


.form-center form {
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  display:flex;
  justify-content: center;
	

}

.form-group {
	text-align: none;
	width: 100%;
}

label {
	text-align: left;
}
</style>