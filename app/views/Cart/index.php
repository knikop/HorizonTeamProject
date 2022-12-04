<?php $this->view('navbar'); ?>
<br>
<div class="container py-5">
    <div class="row" style="padding: 10px; gap: 15px;">
        <?php
        $sum = 0;
        foreach ($data as $item) {
            $product = new \app\models\Product();
            $product = $product->get($item->product_id);
            $profile = new \app\models\Profile();
            $profile = $profile->get($item->profile_id);

            $image = $product->image;
            $price = $product->cost_price * $item->qty;
            echo "    
            <div class=card d-flex p-2 style=width:25rem;justify-content:center;>
            <img class=card-img-top src='$image' alt=Card image cap width=100%height=15vw>
            <div class=card-body>
              <h5 class=card-title>$product->product_name</h5>
              <p class=card-text>$product->description</p>
            </div>
      
            <ul class=list-group list-group-flush>
              <li class=list-group-item>Quantity in cart: $item->qty</li>
              <li class=list-group-item>Cost each: $product->cost_price$</li>
              <li class=list-group-item>Total: $price$</li>
            </ul>
      
            <div class=card-body list>
              <a class='btn btn-primary' href='/Cart/increaseQtyButton/$item->cart_id' class=card-link>add</a>
              <a class='btn btn-primary' href='/Cart/decreaseQtyButton/$item->cart_id' class=card-link>remove</a>
              <a class='btn btn-danger' href='/Cart/delete/$item->cart_id'>delete from cart</a>
            </div>
          </div>
          <br>
          <style>
            .card-img-top {
              width: 100%;
              height: 18vw;
              object-fit: cover;
            }
          </style>";
            $sum += $price;
        }
        ?>
    </div>

<ul class=list-group list-group-flush>
    <li class=list-group-item style="text-style=bold;"><strong>Subtotal: <?= $sum ?>$</strong></li>
    <a class='btn btn-outline-success' href='/Cart/checkout' class=card-link>Checkout</a>
</ul>
</div>