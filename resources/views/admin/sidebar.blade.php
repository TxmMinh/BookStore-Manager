<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/admin" class="brand-link">
        <img src="/template/admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="/template/admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Team 2</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->

                {{-- Người --}}
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-bars"></i>
                        <p>
                            Người Dùng
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admin/people/staff/add" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Thêm Nhân Viên</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/people/staff/list" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh Sách Nhân Viên</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/people/client/add" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Thêm Khách Hàng</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/people/client/list" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh Sách Khách Hàng</p>
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- Danh Mục Sách --}}
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-regular fa-book"></i>
                        <p>
                            Danh Mục Sách
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admin/book/author/add" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tác Giả</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/book/author/list" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh Sách Tác Giả</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/book/category/add" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Thể Loại</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/book/category/list" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh Sách Thể Loại</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/book/publishing_house/add" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Nhà Xuất Bản</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/book/publishing_house/list" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh Sách NXB</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/book/add" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Đầu Sách</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/book/list" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh Sách Đầu Sách</p>
                            </a>
                        </li>
                    </ul>

                {{-- Quản Lý Sách --}}
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-solid fa-bookmark"></i>
                        <p>
                            Quản Lý Sách
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admin/import/add" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Nhập Sách</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/import/list" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tra Cứu</p>
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- Hóa đơn --}}
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-shopping-cart"></i>
                        <p>
                            Hóa Đơn
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admin/bill/add" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Thêm hóa đơn</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/bill/list" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh Sách hóa đơn</p>
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- Phiếu Thu Tiền --}}
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-file-invoice-dollar"></i>
                        <p>
                            Phiếu Thu Tiền
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admin/receipt/add" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Thêm Phiếu Thu</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/receipt/list" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh Sách Phiếu Thu</p>
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- Báo Cáo --}}
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-regular fa-file"></i>
                        <p>
                            Báo Cáo
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admin/note/add" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Báo Cáo Tồn</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/note/list" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Báo Cáo Công Nợ</p>
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- Quy Định --}}
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-solid fa-pen"></i>
                        <p>
                            Quy Định
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/admin/note/add" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Thêm Quy Định</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/note/list" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Danh Sách Quy Định</p>
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- Page Dashboard --}}
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="nav-icon fas fa-regular fa-paper-plane"></i>
                        <p>
                            Dashboard
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/dashboard" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Trang Chủ</p>
                            </a>
                        </li>

                    </ul>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->

    </div>
    <!-- /.sidebar -->
</aside>
