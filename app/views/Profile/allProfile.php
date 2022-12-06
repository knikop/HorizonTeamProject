<?php $this->view('navbar'); ?>
<br>

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