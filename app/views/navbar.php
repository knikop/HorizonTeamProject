<html>

<head>
	<title>Horizon Store</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>

<body>
	<div class='container'>
		<a href='/Product/index'>
			<img src="https://github.com/knikop/HorizonTeamProject/blob/main/horizonImages/horizon-store.jpg?raw=true" alt="horizon logo" style="width:100px;height:50px;">
		</a>
		<a href='/Profile/allProfile'><i style="font-size: 2rem;" title='search profile'></i>
			<img src="https://github.com/knikop/HorizonTeamProject/blob/main/horizonImages/searchProfile.gif?raw=true" alt="search user profiles" style="width:100px;height:50px;">
		</a>

		<form action="/Product/search" method="get" style='display:inline-block'>
			<div class="input-group">
				<input type="search" name='search_term' class="form-control" placeholder="Search..." />
				<button type="submit" class="btn btn-primary" value="Search"><i class="bi-search"></i></button>
			</div>
		</form>

		<?php
		if (!isset($_SESSION['user_id'])) { ?>
			<a href="/User/index"><i style="font-size: 2rem;" class='bi-door-closed' title="Log in"></i></a>
		<?php	} else { ?>

			<a href="/User/logout"><i style="font-size: 2rem;" class='bi-door-open' title='Log out'></i></a>
			<a href='/Profile/index'><i style="font-size: 2rem;" class='bi-file-earmark-person' title='My Profile'></i></a>
			<a href='/Cart/index'><i style="font-size: 2rem;" class='bi-cart' title='My Cart'></i></a>
		<?php	}
		?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

</body>
</html>