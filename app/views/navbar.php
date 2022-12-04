<html>

<head>
	<title>Horizon Store</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>

<body>
	<nav class="navbar navbar-expand-md navbar bg-light">
    <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
        
	<ul class="navbar-nav mr-auto">
            <li class="nav-item active px-5">
			<form action="/Product/search" method="get" style='display:inline-block; margin: 0 auto;'>
			<div class="input-group">
				<input type="search" name='search_term' class="form-control" placeholder="Search..." />
				<button type="submit" class="btn btn-outline-primary" value="Search"><i class="bi-search"></i></button>
			</div>
		</form>
            </li>
	</ul>

    </div>
    <div class="mx-auto order-0 w-100">
        <a class="navbar-brand mx-6 h2 fs-2" href="/Product/index" style="
			position: absolute;
			width: 100%;
			left: 0;
			top: 8;
			text-align: center;
			margin: auto;">
			<img src="https://github.com/knikop/HorizonTeamProject/blob/main/horizonImages/horizonlogo.png?raw=true"
			 alt="" style="width: 60px; padding-right: 10px;">HORIZON</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    <div class="navbar-collapse collapse dual-collapse2 my-2 my-lg-0 text-dark">
        <ul class="navbar-nav px-5" style="display: flex;">
		
			<?php
		if (!isset($_SESSION['user_id'])) { ?>
			<li class="nav-item" style="display: flex;">
			<a class="nav-link fs-5" href="/User/index"><button type="button" class="btn btn-outline-dark fs-5">Login</button></a>
            </li>
		<?php	} else { ?>
			<li class="nav-item" style="display: flex;">
			<a class="nav-link fs-5" style="size: 17px;" href="/Profile/index"><button type="button" class="btn btn-outline border-0 fs-5 px-1">Profile</button></a>
            </li>
			<li class="nav-item" style="display: flex;">
			<a class="nav-link fs-5" style="size: 17px;" href="/Cart/index"><button type="button" class="btn btn-outline border-0 fs-5 px-1">Cart</button></a>
            </li>
			<li class="nav-item" style="display: flex;">
			<a class="nav-link fs-5" href="/User/Logout"><button type="button" class="btn btn-outline-dark fs-5 px-1">Logout</button></a>
            </li>
		<?php	}
		?>

        </ul>
    </div>
</nav>

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