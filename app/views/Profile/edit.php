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
<body>
	

<div class="container py-3">
<form action='' method="post" enctype='multipart/form-data'>
<div class="img-circle" style="position: relative; padding: 0;">
	<img id="blah" class="img-fluid rounded-circle border border-dark"
 	src="/images/<?= $data->image ?>"
	style="width:300px; height:300px; overflow:hidden; object-fit: cover;">
	<label for="imgInp" >
	<span style="position: absolute;"><i class="bi bi-save fs-3" style="cursor: pointer;"></i></span>
	</label>
	<input id="imgInp" type="file" name="image" style="display: none;">
	</div>
	<h1><?=_("Edit your Profile") ?></h1>
<p><?=_("Provide the information requested in the form below.") ?></p>
	<div class="form-group">
		<label class="col-sm-6  col-form-label"><?=_("Full name:") ?><input class='form-control' type="text" name="fullname" placeholder="full name" value='<?=htmlspecialchars($data->fullname)?>'/></label>
	</div>
	<div class="form-group">
		<label class="col-sm-6 col-form-label"><?=_("Address:") ?><input class='form-control' type="text" name="address" placeholder="address" value='<?=htmlspecialchars($data->address)?>'/></label>
	</div>
	<div class="form-group">
		<label class="col-sm-6  col-form-label"><?=_("City:") ?><input class='form-control' type="text" name="city" placeholder="city" value='<?=htmlspecialchars($data->city)?>'/></label>
	</div>
    <div class="form-group">
		<label class="col-sm-6  col-form-label"><?=_("Zipcode:") ?><input class='form-control' type="text" name="zipcode" placeholder="zipcode" value='<?=htmlspecialchars($data->zipcode)?>'/></label>
	</div>
    <div class="form-group">
		<label class="col-sm-6  col-form-label"><?=_("State:") ?><input class='form-control' type="text" name="state" placeholder="state" value='<?=htmlspecialchars($data->state)?>'/></label>
	</div>
	<input type='submit' name='action' value="Edit" class='btn btn-outline-primary' />
</form>
</div>
</body>

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

.img-circle {
  border-radius: 50%;
}
img.img-circle {
  background:black;
}
span {
 left:0;
 text-align:center;
 width:100%;
 background:rgba(255,255,255,0.5);
 bottom:0;
 padding:10px 0;
}
.img-thumbnail {
display:inline-block;
 }
.img-thumbnail > div {
display:inline-block;
overflow: hidden;
height: 140px;
border-radius:50%;
}
</style>

<script>
     picture.onchange = evt => {
        const [file] = picture.files
        if (file) {
          pic_preview.src = URL.createObjectURL(file)
        }
      }

</script>