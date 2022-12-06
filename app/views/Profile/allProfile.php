<?php $this->view('navbar'); ?>
<br>

<form action="/Profile/search" method="get" style='display:inline-block'>					
			<div class="input-group">
			    <input type="search" name='search_term' class="form-control" placeholder="Search..." />
			  <button type="submit" class="btn btn-primary" value="Search"><i class="bi-search"></i></button>
			</div>		
		</form>

<div class="dropdown" style="margin-left: 30px; margin-bottom: 30px">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
        <?=_("sort by username") ?>
    </button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" name="sort">
        <li><a class="dropdown-item" href="/Profile/allProfile?sort=asc" value="sort-asc"><?=_("asc") ?></a></li>
        <li><a class="dropdown-item" href="/Profile/allProfile?sort=desc" value="sort-desc"><?=_("desc") ?></a></li>
    </ul>
</div>
	
<br>
<div class="container" style="padding: 0;">
    <div class="row row-cols-2 g-3" style="gap: 12px;">
<?php

        foreach ($data as $item) {
            include 'detail-allProfile.php';
        }
        ?>
    </div>
</div>