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
		<a href='/Product/index'>Horizon</a>
		<form action="/Product/search" method="get" style='display:inline-block'>					
			<div class="input-group">
			    <input type="search" name='search_term' class="form-control" placeholder="Search..." />
			  <button type="submit" class="btn btn-primary" value="Search"><i class="bi-search"></i></button>
			</div>
			
		</form>
		<?php
		if(!isset($_SESSION['user_id'])){?>
			<a href="/User/index"><i style="font-size: 2rem;" class='bi-door-closed' title="Log in"></i></a>
<?php	}else{ ?>
			<a href="/User/logout"><i style="font-size: 2rem;" class='bi-door-open' title='Log out'></i></a>
<?php	}
		?>
<a href='/Profile/index'><i style="font-size: 2rem;" class='bi-file-earmark-person' title='My Profile'></i></a>	

<a href='/Cart/index'><i style="font-size: 2rem;" class='bi-cart' title='My Cart'></i></a>
<a href='/Wishlist/index'><i style="font-size: 2rem;" class='bi-wishlist' title='My Wishlist'></i>Wishlist</a>