<?php $this->view('navbar'); ?>
<h1><?=$data?></h1>
<a href="/Wishlist/index"></a>

<?php
if(isset($_SESSION['profile_id']) && $_SESSION['profile_id'] == $data->profile_id){
	echo "<img src='/images/$data->image'>";
	echo "<br>";
	echo $data->address;
	echo "<br>";
	echo $data->city;
	echo "<br>";
	echo $data->zipcode;
	echo "<br>";
	echo $data->state;
	echo "<br>";
	echo '<a href="/Profile/edit">Edit my profile</a>';
	echo "<br>";
	echo '<a href="/Profile/editAvatar">Edit my avatar</a>';
	echo "<br>";
	echo '<a href="/User/update">Update password</a>';
	echo "<br>";
	echo '<a href="/Wishlist/index">Wishlist</a>';
	echo "<br>";
	echo '<a href="/Wishlist/profileWishlist">Create Wishlist</a>';
}
?>

<a href="/User/twofasetup">Update password</a>
