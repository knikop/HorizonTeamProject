<?php $this->view('navbar'); ?>

<?php
	if(isset($_GET['error'])){ ?>
<div class="alert alert-danger" role="alert">
  <?= $_GET['error'] ?>
</div>
<?php	}
	if(isset($_GET['message'])){ ?>
<div class="alert alert-success" role="alert">
  <?= $_GET['message'] ?>
</div>
<?php	}
?>

<body>
<section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card gradient-custom text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-1 mt-md-4 pb-5">
            <div class="text-center">
                  <img src="https://github.com/knikop/HorizonTeamProject/blob/main/horizonImages/horizon.png?raw=true"
                    style="width: 134px;" alt="logo">
                </div>
              <h2 class="fw mb-2 text-uppercase">Update Password</h2>
              <p class="text-white-50 mb-5"> </p>
            <form action='' method='post'>
              <div class="form-outline form-white mb-4">
                <input type="password" name="old_password" id="typePasswordX" class="form-control form-control-lg" name="email"/>
                <label class="form-label" for="typePasswordX">Old password</label>
              </div>

              <div class="form-outline form-white mb-4">
                <input type="password" name="password" id="typePasswordX" class="form-control form-control-lg" name="password"/>
                <label class="form-label" for="typeEmailX">Password</label>
              </div>

              <div class="form-outline form-white mb-4">
                <input type="password" name="password_confirm" id="typePasswordX" class="form-control form-control-lg" name="password_confirm"/>
                <label class="form-label" for="typePasswordX">Confirm Password</label>
              </div>

              <!-- <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p> -->

              <a><button class="btn btn-outline-light btn-lg px-5" type="submit" name="action">Update</button></a>
            </form>
            </div>
            <br>
            <?php
if(isset($_GET['error'])){
?>
<div class="alert alert-dark" role="alert">
	<?=$_GET['error']?>
</div>
<?php
}
?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>

<style>.gradient-custom {
/* fallback for old browsers */
background: #6a11cb;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to left, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to left, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1))
}</style>


