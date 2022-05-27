<div class="container-fluid mb-5">
	<div class="row border-top px-xl-5">
		<div class="col-lg-3 d-none d-lg-block">
				<a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;">
						<h6 class="m-0">Truyện yêu thích</h6>
						<i class="fa fa-angle-down text-dark"></i>
				</a>
				<nav class="collapse show navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0" id="navbar-vertical">
						<div class="navbar-nav w-100 overflow-hidden" style="height: 410px">
								<?php foreach($articleList as $key => $articleTitle): ?>
										<a class="nav-item nav-link" href=<?= $this->Url->build(['controller'=>'blogs', 'action'=>'view', $key]) ?>><?= $articleTitle ?></a>
								<?php endforeach; ?>
						</div>
				</nav>
		</div>
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
										<a href="<?= $this->Url->build(['controller'=>'blogs', 'action'=>'about']) ?>" class="nav-item nav-link">About</a>
										<div class="nav-item dropdown">
												<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Danh mục</a>
												<div class="dropdown-menu rounded-0 m-0">
														<a href="" class="dropdown-item">1</a>
														<a href="" class="dropdown-item">2</a>
												</div>
										</div>
										<a href="<?= $this->Url->build(['controller'=>'blogs', 'action'=>'contact']) ?>" class="nav-item nav-link">Contact</a>
								</div>
								<div class="navbar-nav ml-auto py-0">
										<a href="#" class="nav-item nav-link">Login</a>
										<a href="#" class="nav-item nav-link">Register</a>
								</div>
						</div>
				</nav>
				<div id="header-carousel" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner">
								<div class="carousel-item active" style="height: 410px;">
										<img class="img-fluid" src="https://genk.mediacdn.vn/2019/11/27/photo-1-15748246326201895527672.jpg" alt="Image">
										<div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
												<div class="p-3" style="max-width: 700px;">
														<h4 class="text-light text-uppercase font-weight-medium mb-3">OnePuchMan</h4>
														<!-- <h3 class="display-4 text-white font-weight-semi-bold mb-4"></h3> -->
														<a href="" class="btn btn-light py-2 px-3">Đọc ngay</a>
												</div>
										</div>
								</div>
								<div class="carousel-item" style="height: 410px;">
										<img class="img-fluid" src="https://gamek.mediacdn.vn/133514250583805952/2021/6/22/vo1-1624353324356847751108.jpeg" alt="Image">
										<div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
												<div class="p-3" style="max-width: 700px;">
														<h4 class="text-light text-uppercase font-weight-medium mb-3">OnePiece</h4>
														<!-- <h3 class="display-4 text-white font-weight-semi-bold mb-4">Truyện</h3> -->
														<a href="" class="btn btn-light py-2 px-3">Đọc ngay</a>
												</div>
										</div>
								</div>
						</div>
						<a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
								<div class="btn btn-dark" style="width: 45px; height: 45px;">
										<span class="carousel-control-prev-icon mb-n2"></span>
								</div>
						</a>
						<a class="carousel-control-next" href="#header-carousel" data-slide="next">
								<div class="btn btn-dark" style="width: 45px; height: 45px;">
										<span class="carousel-control-next-icon mb-n2"></span>
								</div>
						</a>
				</div>
		</div>
	</div>
</div>
<div class="container-fluid pt-5">
  <div class="text-center mb-4">
    <h2 class="section-title px-5"><span class="px-2">Danh sách truyện</span></h2>
  </div>
	<div class="row px-xl-5 pb-3">
		<?php foreach($articles as $key => $articles): ?>
			<div class="col-lg-3 col-md-6 col-sm-12 pb-1">
				<div class="card product-item border-0 mb-4">
					<div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
						<img class="img-fluid w-100" src="https://genk.mediacdn.vn/2019/12/6/photo-1-1575636876797967434144.jpg" alt="">
					</div>
					<div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
						<div class="d-flex justify-content-center">
							<h5><?= $articles->title ?></h5>
						</div>
						<h6 class="text-truncate mb-3">
							<?=
								$this->Text->truncate(
									$articles->details,
									15,
									[
										'ellipsis' => '...',
										'exact' => false
									]
								);
							?>
						</h6>
					</div>
					<div class="card-footer d-flex justify-content-between bg-light border">
						<a href="<?= $this->Url->build(['controller'=>'Blogs', 'action'=>'view', $articles->id])?>" class="btn btn-sm text-dark p-0 mx-auto"><i class="fas fa-eye text-primary mr-1"></i>View</a>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
		</div>
		<ul class="pagination d-flex justify-content-center">
			<?= $this->Paginator->prev("<<") ?>
			<?= $this->Paginator->numbers() ?>
			<?= $this->Paginator->next(">>") ?>
		</ul>
</div>
