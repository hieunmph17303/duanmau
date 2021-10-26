<nav class="navbar navbar-expand-md navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="index.php">
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
            <!-- user -->
            <div class="widgets-wrap float-md-right ml-4">
                <div class="widget-header  mr-3">
                    <a href="cart.html" class="icon icon-sm rounded-circle border"><i
                            class="fa fa-shopping-cart"></i></a>
                    <span class="badge badge-pill badge-danger notify">0</span>
                </div>
                <div class="widget-header icontext">
                    <a href="#" class="icon icon-sm rounded-circle border"><i class="fa fa-user"></i></a>
                    <div class="text">
                        <span class="text-white">Xin chào!</span>
                        <div>
                            <a class="text-info" href="login.html">Đăng nhập</a> |
                            <a class="text-info" href="signup.html"> Đăng ký</a>
                        </div>
                    </div>
                </div>

            </div> <!-- widgets-wrap.// -->

        </div>

    </div>

</nav>