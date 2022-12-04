<?php $this->view('navbar'); ?>

<a href="/Wishlist/index"></a>

<?php
if(isset($_SESSION['profile_id']) && $_SESSION['profile_id'] == $data->profile_id){
	
	include 'detail-design.php';
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
            <div class="row mb-4">
              <div class="col">
                <div class="form-outline">
                 <img src="" alt="">
              </div>
              <div class="col">
                <div class="form-outline">
                  <input type="text" id="form7Example2" class="form-control" />
                  <label class="form-label" for="form7Example2">Credit card number</label>
                </div>
              </div>
            </div>
<a href="/User/twofasetup">Update password</a>
