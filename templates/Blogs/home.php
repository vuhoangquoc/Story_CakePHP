
<div class="container-fluid pt-5">
  <div class="text-center mb-4">
    <h3 class="section-title px-5"><span class="px-2">Danh sách truyện</span></h3>
  </div>
	<div class="row px-xl-5 pb-3">
		<?php foreach($articles as $key => $articles): ?>
			<div class="col-lg-3 col-md-6 col-sm-12 pb-1">
				<div class="card product-item border-0 mb-4">
					<div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
						<img class="img-fluid w-100" src="webroot/img/<?= $articles->image ?>" alt="" style="max-height:400px">
					</div>
					<div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
						<div class="d-flex justify-content-center">
							<h5><?= $articles->title ?></h5>
						</div>
						<h6 class="text-truncate mb-3">
							<?=
								$this->Text->truncate(
									$articles->details,
									20,
									[
										'ellipsis' => '...',
										'exact' => false
									]
								);
							?>
						</h6>
					</div>
					<div class="card-footer d-flex justify-content-between bg-light border">
						<!-- <a href="<?= $this->Url->build(['controller'=>'Blogs', 'action'=>'view', $articles->id])?>" class="btn btn-sm text-dark p-0 mx-auto"><i class="fas fa-eye text-primary mr-1"></i>View</a> -->
						<a href="<?= $this->Url->build(['controller'=>'article', 'action'=>'index', $articles->id])?>" class="btn btn-sm text-dark p-0 mx-auto"><i class="fas fa-eye text-primary mr-1"></i>Đọc</a>
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
