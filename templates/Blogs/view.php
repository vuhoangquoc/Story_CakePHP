<!-- Tạm thời -->
<div class="container-fluid mb-5">
	<div class="row border-top px-xl-5">
		<div class="col-lg-9">
      <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
        <a href="" class="text-decoration-none d-block d-lg-none">
            <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">S</span>Stories</h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav mr-auto py-0">
                <a href="<?= $this->Url->build(['controller'=>'blogs', 'action'=>'home']) ?>" class="nav-item nav-link active">Home</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Danh mục</a>
                    <div class="dropdown-menu rounded-0 m-0">
                        <a href="" class="dropdown-item">1</a>
                        <a href="" class="dropdown-item">2</a>
                    </div>
                </div>
                <a href="<?= $this->Url->build(['controller'=>'blogs', 'action'=>'about']) ?>" class="nav-item nav-link">About</a>
                <a href="<?= $this->Url->build(['controller'=>'blogs', 'action'=>'contact']) ?>" class="nav-item nav-link">Contact</a>
            </div>
            <!-- <div class="navbar-nav ml-auto py-0">
                <a href="#" class="nav-item nav-link">Login</a>
                <a href="#" class="nav-item nav-link">Register</a>
            </div> -->
        </div>
      </nav>
		</div>
	</div>
</div>
<!-- end -->
<!-- <div class="text-center">
  <h2 class="text-info"><?= $article->title ?></h2>
  <p><?= $article->details ?></p>
</div> -->
<div class="test container">
        
</div>
<div class="truyen container">
    <div class="truyen_truyen">
        <img src="webroot/img/<?= $articles->image ?>">
    </div>

    <div class="pb-5">
        <h3 class="font-weight-semi-bold"><?= $article->title ?></h3>
        <div class="mb-3">
            <div class="text-primary mr-2">
                <small class="fas fa-star"></small>
                <small class="fas fa-star"></small>
                <small class="fas fa-star"></small>
                <small class="fas fa-star-half-alt"></small>
                <small class="far fa-star"></small>
            </div>
            <small class="pt-1">(50 Reviews)</small>
        </div>
        <p class="mb-4">
            <?= $article->details ?>
        </p>

        <div class="d-flex pt-2">
            <p class="text-dark font-weight-medium mb-0 mr-2">Chapter</p>
            <div class="d-inline-flex">


                <?php foreach ($chapters as $chapter) : ?>

                <a class="text-dark px-2" href="">
                    <button class="btn btn-primary">
                        <?= $chapter->chap ?>
                        <!-- <?= $this->Html->link(__('Xem'), ['controller' => 'Chuong', 'action' => 'index', $chapter->id, 'class' => 'btn btn-success']) ?> -->
                    </button>
                </a>
                <!-- <a class="text-dark px-2" href="">
                    <button class="btn btn-primary">2</button>
                </a>
                <a class="text-dark px-2" href="">
                    <button class="btn btn-primary">3</button>
                </a>
                <a class="text-dark px-2" href="">
                    <button class="btn btn-primary">4</button>
                </a>
                <a class="text-dark px-2" href="">
                    <button class="btn btn-primary">5</button>
                </a>  -->

                    <tbody>
                        <tr>
                            <th><?= $chapter->recap ?></th>
                            <td><?= $chapter->modified ?></td>
                            <td><?= $this->Html->link(__('Xem'), ['controller' => 'Chuong', 'action' => 'index', $chapter->id, 'class' => 'btn btn-success']) ?></td>
                        </tr>
                    </tbody>
                <?php endforeach; ?>

            </div>
        </div>
    </div>
</div>