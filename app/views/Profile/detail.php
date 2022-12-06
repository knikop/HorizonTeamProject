<?php $this->view('navbar'); ?>

<a href="/Wishlist/index"></a>

<?php
if(isset($_SESSION['profile_id']) && $_SESSION['profile_id'] == $data->profile_id){
	include 'detail-design.php';
}
?>

