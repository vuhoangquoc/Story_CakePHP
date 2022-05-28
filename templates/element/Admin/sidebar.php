<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <!-- <i class="fas fa-laugh-wink"></i> -->
            <i class="fas fa-user-lock"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin</div>
    </a>


    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <!-- <i class="fas fa-fw fa-wrench"></i> -->
            <i class="fas fa-book"></i>
            <span>Truyện</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Quản lý truyện</h6>
                <a class="collapse-item" href="<?= $this->Url->build(['controller' => 'categories', 'action' => 'index']); ?>">Danh mục</a>
                <a class="collapse-item" href="<?= $this->Url->build(['controller' => 'articles', 'action' => 'index']); ?>">Truyện</a>
                <a class="collapse-item" href="<?= $this->Url->build(['controller' => 'chapters', 'action' => 'index']); ?>">Chương</a>
                <!-- <a class="collapse-item" href="utilities-other.html">Other</a> -->
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="<?= $this->Url->build(['controller' => 'users', 'action' => 'index']); ?>">
            <!-- <i class="fas fa-fw fa-chart-area"></i> -->
            <i class="fas fa-users"></i>
            <span>Người dùng</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->