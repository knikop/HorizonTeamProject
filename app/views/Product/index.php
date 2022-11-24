<?php $this->view('navbar'); ?>
<br>
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

