<?php $this->view('navbar'); ?>
<br>
<?php
$sum = 0;
foreach ($data as $item) {
    $product = new \app\models\Product();
    $product = $product->get($item->product_id);
    $profile = new \app\models\Profile();
    $profile = $profile->get($item->profile_id);
    
    $image = $product->image;
    $price = $product->cost_price*$item->qty;
    echo "
    <div class=card d-flex p-2 style=width:20rem;justify-content:center;>
    <img class=card-img-top src='$image' alt=Card image cap width=100height=200>
    <div class=card-body>
        <h5 class=card-title>$product->product_name</h5>
        <p class=card-text>$product->description</p>
    </div>
    <ul class=list-group list-group-flush>
        <li class=list-group-item>Amount: $item->qty</li>
        <li class=list-group-item>Cost each: $product->cost_price$</li>
    </ul>
    <div class=card-body>
        <a class='btn btn-primary' href='/Cart/increaseQtyButton/$item->cart_id' class=card-link>add</a>
        <a class='btn btn-primary' href='/Cart/decreaseQtyButton/$item->cart_id' class=card-link>remove</a>
        <a class='btn btn-danger' href='/Cart/delete/$item->cart_id'>delete from cart</a>
    </div>
    </div>
<br>";
    $sum += $price;
}
?>
 <ul class=list-group list-group-flush style="padding: 30px">
    <li class=list-group-item style="text-style=bold;"><strong>Subtotal: <?= $sum ?>$</strong></li>
    <a class='btn btn-success' href='/Cart/checkout' class=card-link>Checkout</a>
</ul>
