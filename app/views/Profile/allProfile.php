<?php $this->view('navbar'); ?>
<br>

<<<<<<< HEAD
<h1 class="text-center" style="margin-bottom: 40px;">View All Profiles</h1>
<div class="container p-1 my-5">
    <div class="row">
        <div class="col" style="padding-left: 0;">
            <form action="/Profile/search" method="get" style='display:inline-block; width: 500px;'>
                <div class="input-group text-align-center">
                    <input type="search" name='search_term' class="form-control" placeholder="Search..." />
                    <button type="submit" class="btn btn-primary" value="Search"><i class="bi-search"></i></button>
                </div>
            </form>
=======
<form action="/Profile/search" method="get" style='display:inline-block'>					
			<div class="input-group">
			    <input type="search" name='search_term' class="form-control" placeholder="Search..." />
			  <button type="submit" class="btn btn-primary" value="Search"><i class="bi-search"></i></button>
			</div>		
		</form>

<div class="dropdown" style="margin-left: 30px; margin-bottom: 30px">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
        <?=_("sort by username") ?>
    </button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" name="sort">
        <li><a class="dropdown-item" href="/Profile/allProfile?sort=asc" value="sort-asc"><?=_("asc") ?></a></li>
        <li><a class="dropdown-item" href="/Profile/allProfile?sort=desc" value="sort-desc"><?=_("desc") ?></a></li>
    </ul>
</div>
	
<br>
<?php
foreach ($data as $item) {
    $image = $item->image;
    // echo "<tr>  
	// <img src='/images/$item->image'><br>
    // <td type=name>$item->fullname</td> <br>
    // <td type=name>$item->city</td> <br>
    // <td type=name>$item->state</td> <br>
    // <td type=action><a href='/Wishlist/getProfileWishlist/$item->profile_id' type=hidden>view this profile's wishlist</a></td><br>
    // </tr> <br>";

    echo "<div class=card>
    <div class=row g-0>
        <div class=col-sm-5>
            <img src='/images/$item->image' class=card-img-top h-100>
>>>>>>> 77cbb501633249cd61b31d53a961cfe722eea160
        </div>
        <div class="col">
            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    sort by username
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" name="sort">
                    <li><a class="dropdown-item" href="/Profile/allProfile?sort=asc" value="sort-asc">a - z</a></li>
                    <li><a class="dropdown-item" href="/Profile/allProfile?sort=desc" value="sort-desc">z - a</a></li>
                </ul>
            </div>
        </div>

        <div class="col" style="padding: 0;">
            <div>
            </div>
        </div>
        
    </div>
</div>






<div class="container" style="padding: 0;">
    <div class="row row-cols-2 g-3" style="gap: 12px;">
        <?php
        foreach ($data as $item) {
            include 'detail-allProfile.php';
        }
        ?>
    </div>
</div>