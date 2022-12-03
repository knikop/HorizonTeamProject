<html>

<head>
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>
<body>

  <section class="h-100 gradient-form">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-10">
          <div class="card rounded-3 text-black">
            <div class="row g-0">
              <div class="col-lg-6">
                <div class="card-body p-md-5 mx-md-4">

                  <div class="text-center">
                    <img src="https://github.com/knikop/HorizonTeamProject/blob/main/horizonImages/horizon.png?raw=true" style="width: 185px;" alt="logo">
                    <h4 class="mt-1 mb-5 pb-1">Gaming Store</h4>
                  </div>

                  <form action='' method='post'>
                    <p>Please login to your account</p>

                    <div class="form-outline mb-4">
                      <input type="email" id="form2Example11" class="form-control" placeholder="email address" name="email" />
                      <label class="form-label" for="form2Example11">Email</label>
                    </div>

                    <div class="form-outline mb-4">
                      <input type="password" id="form2Example22" class="form-control" name="password" />
                      <label class="form-label" for="form2Example22">Password</label>
                    </div>

                    <div class="text-center pt-1 mb-5 pb-1">
                      <a><button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3 " type="submit" name="action">Login</button></a>
                    </div>

                    <?php
                    if (isset($_GET['error'])) {
                    ?>
                      <div class="alert alert-dark" role="alert">
                        <?= $_GET['error'] ?>
                      </div>
                    <?php
                    }
                    ?>

                    <div class="d-flex align-items-center justify-content-center pb-4">
                      <p class="mb-0 me-2">Don't have an account?</p>
                      <a href="/User/register"><button type="button" class="btn btn-outline-danger">Create new</button></a>
                    </div>
                  </form>
                </div>
              </div>
              <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                  <h4 class="mb-4">We are more than just a company</h4>
                  <p class="small mb-0" style="text-align: center;">Gaming is an industry that grows fast, with new exciting games,
                    more advanced graphics, and richer storylines produced every day. And as games improve,
                    so does gaming website design. The internet is full of stunning game website examples and
                    countless gaming website ideas that are worth exploring.Horizon will be here to assist you guys the simplest manner possible</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

<style>
  .gradient-custom-2 {
    background: #6a11cb;

    /* Chrome 10-25, Safari 5.1-6 */
    background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));

    /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));
  }

  @media (min-width: 768px) {
    .gradient-form {
      height: 100vh !important;
    }
  }

  @media (min-width: 769px) {
    .gradient-custom-2 {
      border-top-right-radius: .3rem;
      border-bottom-right-radius: .3rem;
    }
  }
</style>

</html>