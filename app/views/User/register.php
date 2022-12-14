<html>
<head>
	<title>Register</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>

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
              <h2 class="fw mb-2 text-uppercase"><?=_("Register") ?></h2>
              <p class="text-white-50 mb-5"> </p>
            <form action='' method='post'>
              <div class="form-outline form-white mb-4">
                <input type="email" id="typeEmailX" class="form-control form-control-lg" name="email"/>
                <label class="form-label" for="typeEmailX"><?=_("Email") ?></label>
              </div>

              <div class="form-outline form-white mb-4">
                <input type="password" id="typeEmailX" class="form-control form-control-lg" name="password"/>
                <label class="form-label" for="typeEmailX"><?=_("Password") ?></label>
              </div>

              <div class="form-outline form-white mb-4">
                <input type="password" id="typePasswordX" class="form-control form-control-lg" name="password_confirm"/>
                <label class="form-label" for="typePasswordX"><?=_("Confirm Password") ?></label>
              </div>

              <!-- <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p> -->

              <a><button class="btn btn-outline-light btn-lg px-5" type="submit" name="action"><?=_("Register") ?></button></a>
            </form>
            </div>
            <div>
              <p class="mb-0"><?=_("Already have an account?") ?> <a href="/User/index" class="text-white-50 fw-bold"><?=_("Login") ?></a>
              </p>
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
</html>