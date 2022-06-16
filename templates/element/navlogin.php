<div class="col-lg-9">
			<!-- nav -->
				<nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
						<a href="<?= $this->Url->build(['controller'=>'blogs', 'action'=>'home']) ?>" class="text-decoration-none d-block d-lg-none">
								<h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">S</span>Stories</h1>
						</a>
						<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
								<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
								<div class="navbar-nav mr-auto py-0">
										<a href="<?= $this->Url->build(['controller'=>'blogslogin', 'action'=>'home']) ?>" class="nav-item nav-link active">Home</a>
										<div class="nav-item dropdown">
											<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Thể loại</a>
											<div class="dropdown-menu rounded-0 m-0">
                        <!-- nhớ sửa nè -->
												<a href="<?= $this->Url->build(['controller' => 'categorylogin', 'action' => 'index', 1]); ?>" class="dropdown-item">Trẻ em</a>
												<a href="<?= $this->Url->build(['controller' => 'categorylogin', 'action' => 'index', 2]); ?>" class="dropdown-item">Hành động</a>
												<a href="<?= $this->Url->build(['controller' => 'categorylogin', 'action' => 'index', 3]); ?>" class="dropdown-item">Viễn tưởng</a>
												<a href="<?= $this->Url->build(['controller' => 'categorylogin', 'action' => 'index', 4]); ?>" class="dropdown-item">Trinh thám</a>
											</div>
										</div>
										<a href="#" class="nav-item nav-link">About</a>
										<a href="#" class="nav-item nav-link">Contact</a>
								</div>
								<div class="navbar-nav ml-auto py-0">
										<a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'logout']); ?>" class="nav-item nav-link">Logout</a>
								</div>
						</div>
				</nav>