<?php $this->view('navbar'); ?>
<br>
<div class="dropdown" style="margin-left: 30px; margin-bottom: 30px">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                Sort Price
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" name="sort">
                <li><a class="dropdown-item" href="#" value="sort-asc">asc</a></li>
                <li><a class="dropdown-item" href="#" value="sort-desc">desc</a></li>
            </ul>
        </div>
<?php

foreach ($data as $item) {
    $image = $item->image;
    echo "<tr>  
    <img src='$image'><br>
    <td type=name>$item->product_name</td> <br>
    <td type=name>$item->cost_price</td>$ <br>
    <td type=name>$item->quantity</td> <br>
    <td type=name>$item->description</td> <br>
    </tr> <br>
    <td type=action><a href='/Cart/insert/$item->product_id'>Add to Cart</a></td><br>
    <td type=action><a href='/Wishlist/insert/$item->product_id'>Add to Wishlist</a></td><br>";
}
?>

