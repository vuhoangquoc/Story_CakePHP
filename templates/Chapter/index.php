
<!-- ĐỌC -->
<div class="doc">
    <!-- <div class="back">
		<?php foreach($articles as $key => $articles): ?>
            <a href="<?= $this->Url->build(['controller'=>'article', 'action'=>'index', $articles->id]) ?>">Back</a>
		<?php endforeach; ?>
    </div> -->
    <!-- <div class="chuyenchap">
        <div class="" style="position:fixed;">
            <?php foreach ($chapters as $chapter) : ?>
                <a class="btn btn-primary" href="<?= $this->Url->build(['controller'=>'Chapter', 'action'=>'index', $chapter->id]) ?>"><?= $chapter->chap ?></a> 
            <?php endforeach; ?>
        </div>
    </div> -->
    <div class="chapp">
        <div class="doc_doc">
            <img src="http://<?= $_SERVER['SERVER_NAME'] ?>:<?= $_SERVER['SERVER_PORT'] ?>/webdoctruyen/webroot/img/<?= $chapter->image ?>">
        </div>
        <div class="doc_doc">
            <img src="http://<?= $_SERVER['SERVER_NAME'] ?>:<?= $_SERVER['SERVER_PORT'] ?>/webdoctruyen/webroot/img/chapter-img/002.jpg">
        </div>
        <div class="doc_doc">
            <img src="http://<?= $_SERVER['SERVER_NAME'] ?>:<?= $_SERVER['SERVER_PORT'] ?>/webdoctruyen/webroot/img/chapter-img/003.jpg">
        </div>
        <div class="doc_doc">
            <img src="http://<?= $_SERVER['SERVER_NAME'] ?>:<?= $_SERVER['SERVER_PORT'] ?>/webdoctruyen/webroot/img/chapter-img/004.jpg">
        </div>
        <div class="doc_doc">
            <img src="http://<?= $_SERVER['SERVER_NAME'] ?>:<?= $_SERVER['SERVER_PORT'] ?>/webdoctruyen/webroot/img/chapter-img/005.jpg">
        </div>
        <div class="doc_doc">
            <img src="http://<?= $_SERVER['SERVER_NAME'] ?>:<?= $_SERVER['SERVER_PORT'] ?>/webdoctruyen/webroot/img/chapter-img/006.jpg">
        </div>
        <div class="doc_doc">
            <img src="http://<?= $_SERVER['SERVER_NAME'] ?>:<?= $_SERVER['SERVER_PORT'] ?>/webdoctruyen/webroot/img/chapter-img/007.jpg">
        </div>
        <div class="doc_doc">
            <img src="http://<?= $_SERVER['SERVER_NAME'] ?>:<?= $_SERVER['SERVER_PORT'] ?>/webdoctruyen/webroot/img/chapter-img/008.jpg">
        </div>
    </div>
</div>