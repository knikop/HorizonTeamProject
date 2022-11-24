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

<form action='' method='post' enctype='multipart/form-data'>
<div class="container p-3 insideColor" style="width: 80%; height: 115%; margin-top: 25%">

<h1 style="font-weight: bold; font-size: 350%">~Insert Profile Info~</h1>
<hr>

<form action='' method='post' enctype='multipart/form-data'>
    <img src='/images/<?php echo $data->image; ?>' style='width:150px; height: 120px;'>
        <input class="editDesign btn btn-primary" type="file" name="image" 
            style="width: 60%; border-radius: 20px">

    <input type='submit' name='action' value='Save changes' class="btn btn-dark btn-lg" 
    style="width: 60%; border-radius: 15px"/>
</form>

<script>
	picture.onchange = evt => {
  const [file] = picture.files
  if (file) {
    pic_preview.src = URL.createObjectURL(file)
  }
}
</script>
