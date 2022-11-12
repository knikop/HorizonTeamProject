<?php $this->view('navbar'); ?>

<h1><?=$data ?></h1>

<?php
if(isset($_GET['message'])){
?>
<div class="alert alert-primary" role="alert">
	<?=$_GET['message']?>
</div>
<?php
}
?>
<h1>Edit your Profile</h1>
<p>Provide the information requested in the form below.</p>
<form action='' method="post">
	<div class="form-group">
		<label class="col-sm-2 col-form-label">Full name:<input class='form-control' type="text" name="fullname" placeholder="full name" value='<?=htmlspecialchars($data->fullname)?>'/></label>
	</div>
	<div class="form-group">
		<label class="col-sm-2 col-form-label">Address:<input class='form-control' type="text" name="address" placeholder="address" value='<?=htmlspecialchars($data->address)?>'/></label>
	</div>
	<div class="form-group">
		<label class="col-sm-2 col-form-label">City:<input class='form-control' type="text" name="city" placeholder="city" value='<?=htmlspecialchars($data->city)?>'/></label>
	</div>
    <div class="form-group">
		<label class="col-sm-2 col-form-label">Zipcode:<input class='form-control' type="text" name="zipcode" placeholder="zipcode" value='<?=htmlspecialchars($data->zipcode)?>'/></label>
	</div>
    <div class="form-group">
		<label class="col-sm-2 col-form-label">State:<input class='form-control' type="text" name="state" placeholder="state" value='<?=htmlspecialchars($data->state)?>'/></label>
	</div>
    <div class="form-group">
		<label class="col-sm-2 col-form-label">Country:<input class='form-control' type="text" name="country" placeholder="country" value='<?=htmlspecialchars($data->country)?>'/></label>
	</div>
	<input type='submit' name='action' value="Edit" class='btn btn-primary' />
</form>