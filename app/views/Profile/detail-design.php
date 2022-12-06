<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1 class="text-center py-5" style="margin-bottom: 40px;">My Profile</h1>
    <div class="container-fluid py-1 px-5" >
        <div class="row" >
            <div class="col d-flex" style="justify-content: center;">
                <div class style=" padding: 0;">
                    <img class="img-fluid rounded-circle border border-dark"  src="/images/<?= $data->image ?>" style="width:500px; height:500px; overflow:hidden; object-fit: cover;" />
                </div>
            </div>
            <div class="col-sm-1 ml-auto d-flex align-items-left mt-4 mt-md-0">
                <div class="">
                    <ul class="my-5" style="list-style: none; justify-content: center; white-space: nowrap; overflow: hidden;">
                        <li class="py-5 my-2">
                            <h1><u><?= $data->fullname ?></u></h1>
                        </li>
                        <li class="py-2">
                            <h4><?= $data->address ?></h4>
                        </li>
                        <li class="py-2">
                            <h4><?= $data->city ?></h4>
                        </li>
                        <li class="py-2">
                            <h4><?= $data->zipcode ?></h4>
                        </li>
                        <li class="py-2">
                            <h4><?= $data->state ?></h4>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col ml-auto  mt-4 mt-md-0 mx-5 px-5 py-3" style="top: 100px;">
            <div class="dropdown" style="margin-left: 30px; margin-bottom: 30px">
            <button class="btn btn-secondary btn-dark d-flex justify-content-center " type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="width: 40px; height: 40px; align-items: center; border-radius: 40px;">
            <i class="bi bi-gear-fill" style="font-size: 25px;"></i>
            </button>
            <ul class="dropdown-menu my-3" aria-labelledby="dropdownMenuButton1" name="sort">
                <li><a class="dropdown-item" href="/Profile/edit">Edit my profile</a></li>
                <li><a class="dropdown-item" href="/Wishlist/index">View my wishlist</a></li>
                <li><a class="dropdown-item" href="/User/update">Update password</a></li>
                <li><a class="dropdown-item" href="/User/twofasetup">Setup 2FA</a></li>
            </ul>
        </div>
        
            </div>
        </div>
    </div>
</body>

</html>