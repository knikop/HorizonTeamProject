<?php $this->view('navbar'); ?>
<br>
<?php 
    foreach ($data as $item){
        $profile = new \app\models\Profile();
        $profile = $profile->get($item->profile_id);
        echo "<h1 class=text-center>$profile->fullname's wishlist</h1>";
        break;
    }
?>
<div class="container"> 
    <div class="row" style="padding: 10px; gap: 15px;">
<?php

foreach ($data as $item) {
    $product = new \app\models\Product();
    $product = $product->get($item->product_id);
    $profile = new \app\models\Profile();
    $profile = $profile->get($item->profile_id);
    
    $image = $product->image;
    echo "
    <div class=card d-flex p-2 style=width:25rem;justify-content:center;>
    <img class=card-img-top src='$image' alt=Card image cap width=100%height=15vw>
    <div class=card-body>
        <h5 class=card-title>$product->product_name</h5>
        <p class=card-text>$product->description</p>
    </div>

    <ul class=list-group list-group-flush>
        <li class=list-group-item>In stock: $product->quantity</li>
        <li class=list-group-item>Cost each: $product->cost_price$</li>
    </ul>
    </div>
    <br>
    <style>
    .card-img-top {
    width: 100%;
    height: 18vw;
    object-fit: cover;
    }
</style>";
}
?>
    </div>
</div>