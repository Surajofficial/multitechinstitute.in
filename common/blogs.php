<style>
    picture img {
        width: 100%;
        display: block;
    }
</style>
<div class="card">

    <picture class="card-img-top">
        <source media='(min-width: 401px)' srcset='<?= $Courses[0]['image_big']; ?>' />
        <source media='(max-width: 400px)' srcset='<?= $Courses[0]['image_small']; ?>' />
        <img src='<?= $Courses[0]['image_big']; ?>' />
    </picture>
    <!-- <img src="<?= $cours['image']; ?>" class="card-img-top lazy" alt="<?= $cours['img_alt']; ?>">-->
    <div class="card-body">
        <h4 class="card-title weight-100">
            <?= explode('|', $row['title'])[0]; ?>
        </h4>
        <p class="card-text" style="text-align: justify;">
            <?= substr($row['short'], 0, 200) . "..."; ?>
        </p>
        <a type="button" class="btn btn-default" href="<?= $row['url']; ?>">View Course</a>
    </div>
</div>