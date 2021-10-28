<nav class="navbar navbar-md navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="<?= $SITE_URL ?>/trang-chinh/index.php">
            <img class="img-fluid logo" src="<?= $CONTENT_URL ?>/images/logo.png" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-center" id="navbarsExampleDefault">
            <ul class="navbar-nav m-auto">
                <li class="nav-item <?= $_SESSION['name_page'] == 'trang_chu' ? 'active' : '' ?>">
                    <a class="nav-link" href="<?= $SITE_URL ?>/trang-chinh/index.php">Trang chủ</a>
                </li>
                <li class="nav-item <?= $_SESSION['name_page'] == 'san_pham' ? 'active' : '' ?>">
                    <a class="nav-link" href="<?= $SITE_URL ?>/trang-chinh/index.php?san-pham">Sản phẩm</a>
                </li>
                <li class="nav-item <?= $_SESSION['name_page'] == 'gioi_thieu' ? 'active' : '' ?>">
                    <a class="nav-link" href="<?= $SITE_URL ?>/trang-chinh/index.php?gioi-thieu">Giới thiệu</a>
                </li>
                <li class="nav-item <?= $_SESSION['name_page'] == 'bai_viet' ? 'active' : '' ?>">
                    <a class="nav-link" href="<?= $SITE_URL ?>/trang-chinh/index.php?bai-viet">Bài viết</a>
                </li>
                <li class="nav-item <?= $_SESSION['name_page'] == 'hoi_dap' ? 'active' : '' ?>">
                    <a class="nav-link" href="<?= $SITE_URL ?>/trang-chinh/index.php?hoi-dap">Hỏi đáp</a>
                </li>
            </ul>

            <form class="form-inline my-2 my-lg-0">
                <div class="input-group input-group-sm">
                    <form action="" method="POST">
                        <input type="text" name="" class="form-control input-custom" placeholder="Từ khóa...">
                        <div class="input-group-append">
                            <button type="submit" name="" class="btn btn-info btn-number btn-custom">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </form>
            <!--Cart user -->
            <div class="widgets-wrap float-md-right ml-4">
                <!-- Cart -->
                <div class="widget-header  mr-3">
                    <a href="cart.html" class="icon icon-sm rounded-circle border"><i
                            class="fa fa-shopping-cart"></i></a>
                    <span class="badge badge-pill badge-danger notify">0</span>
                </div>
                <!-- User -->
                <div class="dropdown widget-header icontext">
                    <a href="#" class="icon icon-sm rounded-circle border" id="dropdownMenu1" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <?php
                        if (isset($_SESSION['user']) && $_SESSION['user']['hinh'] != "") { ?>
                        <img src="<?= $UPLOAD_URL . "/users/" . $_SESSION['user']['hinh'] ?>" width="50" height="50"
                            class="mb-2" alt="">
                        <?php } else { ?>
                        <i class="fa fa-user"></i>
                        <?php }  ?>
                    </a>
                    <div class="text">
                        <span class="text-white">Xin chào!</span>
                        <?php
                        if (isset($_SESSION['user'])) { ?>
                        <div class="text-white text-info"><?= $_SESSION['user']['ho_ten'] ?></div>
                        <?php } else { ?>

                        <a href="<?= $SITE_URL . '/tai-khoan/dang-nhap.php' ?>"
                            class="d-block text-white text-info">Đăng nhập</a>

                        <?php }  ?>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <?php
                            if (isset($_SESSION['user'])) { ?>

                            <?php if ($_SESSION['user']['vai_tro'] == 1) { ?>
                            <a class="dropdown-item pl-3 py-2" href="<?= $ADMIN_URL . "/trang-chinh/" ?>">Quản trị
                                admin</a>
                            <?php }  ?>

                            <a class="dropdown-item pl-3 py-2"
                                href="<?= $SITE_URL . '/tai-khoan/cap-nhat-tk.php' ?>">Cập nhật tài khoản</a>
                            <a class="dropdown-item pl-3 py-2" href="<?= $SITE_URL . '/tai-khoan/doi-mk.php' ?>">Đổi mật
                                khẩu</a>
                            <a class="dropdown-item pl-3 py-2"
                                href="<?= $SITE_URL . '/tai-khoan/dang-nhap.php?btn_logout' ?>">Đăng xuất</a>


                            <?php } else { ?>

                            <a class="dropdown-item pl-3 py-2" href="<?= $SITE_URL . '/tai-khoan/dang-nhap.php' ?>">Đăng
                                nhập</a>
                            <a class="dropdown-item pl-3 py-2" href="<?= $SITE_URL . '/tai-khoan/dang-ky.php' ?>">Đăng
                                ký</a>

                            <?php }  ?>
                        </div>
                    </div>
                </div>

            </div> <!-- widgets-wrap.// -->

        </div>

    </div>

</nav>