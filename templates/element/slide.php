<!-- Slide -->
<div id="header-carousel" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
						<?php foreach($slides as $key => $slides): ?>
						<div class="carousel-item active" style="height: 410px;">
								<img class="img-fluid" src="webroot/img/<?= $slides->image ?>" alt="Image">
							
								<div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
										<div class="p-3" style="max-width: 700px;">
												<h4 class="text-light text-uppercase font-weight-medium mb-3"><?= $slides->title ?></h4>
												<a href="" class="btn btn-light py-2 px-3">Đọc ngay</a>
										</div>
								</div>
						</div>
						<?php endforeach; ?>
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