
<?php
if(isset($_GET['error'])){
?>
<div class="alert alert-danger" role="alert">
	<?=$_GET['error']?>
</div>
<?php
}
?>

<form action='' method='post'>
	<div class="form-group">
		<label class="col-sm-2 col-form-label">Email:<input class='form-control' type="email" name="email" /></label>
	</div>
	<div class="form-group">
		<label class="col-sm-2 col-form-label">Password:<input class='form-control' type="password" name="password" /></label>
	</div>
	<div class="form-group">
		<label class="col-sm-2 col-form-label">Password confirmation:<input class='form-control' type="password" name="password_confirm" /></label>
	</div>
	<input type="submit" name="action" value="Register" class='btn btn-primary' />
</form>
<a href='/User/index'>Already have an account? Login.</a>
