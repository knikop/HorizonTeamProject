<?php $this->view('navbar'); ?>
<br>
<?php
foreach ($data as $item) {
    $product = new \app\models\Product();
    $product = $product->get($item->product_id);
    $profile = new \app\models\Profile();
    $profile = $profile->get($item->profile_id);
    
    $image = $product->image;
    echo "<tr>
    <img src='$image'><br>
    <td type=name>$product->product_name</td> <br>
    <td type=name>$product->cost_price</td>$ <br>
    <td type=name>$product->description</td> <br>
    <td type=name>$item->qty</td> <br>

    <a href='/Cart/increaseQtyButton/$item->cart_id'>add</a>
    <a href='/Cart/decreaseQtyButton/$item->cart_id'>reduce</a>


    <td type=action><a href='/Cart/delete/$item->cart_id'>delete from cart</a></td><br>
    </tr> <br>";
}
?>

