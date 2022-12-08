<?php $this->view('navbar'); ?>

<?php
if(isset($_GET['message'])){
?>
<div class="alert alert-success" role="alert">
	<?=$_GET['message']?>
</div>
<?php
}
?>

<?php
if(isset($_SESSION['profile_id']) && $_SESSION['profile_id'] == $data->profile_id){
	include 'detail-design.php';
}
?>


