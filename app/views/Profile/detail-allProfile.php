<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View U</title>
</head>

<body>
        <div class="card d-flex" style="max-width: 660px; margin-bottom: 20px; padding: 0;">
            <div class="row g-0" style="height: 350px";>
                <div class="col-sm-6" style="position: relative; overflow: hidden; padding-bottom: 25%;">
                    <img src="/images/<?= $item->image ?>" class="card-img-top h-100" style="position: absolute; object-fit: cover;">
                </div>
                <div class="col-sm-3">
                    <div class="card-body">
                        <h1 class="card-title" style="white-space: nowrap;"><?php echo wordwrap($item->fullname, 20, "<br />") ?></h1>
                        <p class="card-text fs-5"><?= $item->city ?></p>
                        <p class="card-text"><?= $item->state ?></p>

                        <a href="/Wishlist/getProfileWishlist/<?= $item->profile_id ?>" class="btn btn-primary stretched-link" style="white-space: nowrap; position: absolute; right: 25%; bottom: 15;">View users wishlist</a>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>