
<!-- <div class="test container">
        
</div> -->

<div class="truyen container">
    <div class="truyen_truyen">
        <img src="http://<?= $_SERVER['SERVER_NAME'] ?>:<?= $_SERVER['SERVER_PORT'] ?>/webdoctruyen/webroot/img/<?= $article->image ?>">
    </div>

    <div class="pb-5">
        <h3 class="font-weight-semi-bold text-center"><?= $article->title ?></h3>
        <div class="mb-3">
            <div class="text-primary mr-2">
                <small class="fas fa-star"></small>
                <small class="fas fa-star"></small>
                <small class="fas fa-star"></small>
                <small class="fas fa-star-half-alt"></small>
                <small class="far fa-star"></small>
            </div>
            <small class="pt-1">(50 Reviews)</small></br>
            <small class="pt-1">Người đăng: Admin</small></br>
            <small class="pt-1">Thể loại: </small>
            <?php foreach ($articles->category as $category) : ?>
                <small class="pt-1"><?= $category->name ?></small>
            <?php endforeach; ?>
        </div>
        <p class="mb-4">
            <?= $article->details ?>
        </p>

        <div class="d-flex pt-2">
            <p class="text-dark font-weight-medium mb-0 mr-2">Chapter</p>
            <div class="d-inline-flex">
                <?php foreach ($chapters as $chapter) : ?>
                    <a class="text-dark px-2" href="">
                        <a class="btn btn-primary" href="<?= $this->Url->build(['controller'=>'Chapter', 'action'=>'index', $chapter->id]) ?>"><?= $chapter->chap ?></a> 
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>