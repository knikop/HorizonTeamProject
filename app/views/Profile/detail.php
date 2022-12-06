<?php $this->view('navbar'); ?>

<a href="/Wishlist/index"></a>

<?php
if(isset($_SESSION['profile_id']) && $_SESSION['profile_id'] == $data->profile_id){
	include 'detail-design.php';
}
?>
<<<<<<< HEAD

=======
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
<a href="/User/twofasetup"><?=_("two fa") ?></a>
>>>>>>> 77cbb501633249cd61b31d53a961cfe722eea160
