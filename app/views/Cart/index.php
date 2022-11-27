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

    <form method='post'>
    <input name='add' type=submit value='+'>
    </form>

    <form method='post'>
    <input name='remove' type=submit value='_'>
    </form>
    <td type=action><a href='/Cart/delete/$item->cart_id'>delete from cart</a></td><br>
    </tr> <br>";
}
?>

<td type=action><a href='/Cart/delete/'>checkout</a></td>

