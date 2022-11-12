<?php $this->view('navbar'); ?>

<h1><?=$data ?></h1>
<a href="/Wishlist/index"></a>

<?php
if(isset($_SESSION['profile_id']) && $_SESSION['profile_id'] == $data->profile_id){
	echo '<a href="/Profile/edit">Edit my profile</a>';
}
?>
