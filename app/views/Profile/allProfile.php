<?php $this->view('navbar'); ?>
<br>

<form action="/Profile/search" method="get" style='display:inline-block'>					
			<div class="input-group">
			    <input type="search" name='search_term' class="form-control" placeholder="Search..." />
			  <button type="submit" class="btn btn-primary" value="Search"><i class="bi-search"></i></button>
			</div>		
		</form>
	
<br>
<?php
foreach ($data as $item) {
    $image = $item->image;
    echo "<tr>  
	<img src='/images/$item->image'><br>
    <td type=name>$item->fullname</td> <br>
    <td type=name>$item->city</td> <br>
    <td type=name>$item->state</td> <br>
    <td type=action><a href='/Wishlist/profileWishlist/$item->profile_id'>view this profile's wishlist</a></td><br>
    </tr> <br>";
}
?>
