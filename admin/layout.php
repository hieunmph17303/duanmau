<?php

check_login();

?>
<?php
// require_once '../../global.php';
// check_login();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Xshop-Dự án Mẫu</title>
    <link rel="icon" href="<?= $CONTENT_URL ?>/images/logo.png" type="image/gif" sizes="16x16">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>/css/bootstrap.min.css" type="text/css">
    <!-- Font awesome -->
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>/css/all.min.css" type="text/css">
    <!-- Slick slider -->
    <!-- <link rel="stylesheet" href="css/slick.css" type="text/css">
    <link rel="stylesheet" href="css/slick-theme.css" type="text/css">
    <script src="js/slick.min.js"></script> -->

    <!-- Custom -->
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>/css/dashboard.css" type="text/css">

</head>

<body>
    <!-- Page Preloader -->
    <div class="wrapper">
        <!-- -===========================Menu ===================-->
        <?php
        require "menu.php";
        ?>
        <div id="body" class="active">
            <!-- navbar navigation component -->
            <nav class="navbar navbar-expand-lg navbar-white bg-white">
                <button type="button" id="sidebarCollapse" class="btn btn-light">
                    <i class="fas fa-bars"></i><span></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <div class="nav-dropdown">
                                <a href="#" id="nav2" class="nav-item nav-link dropdown-toggle text-secondary"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-user"></i> <span>Hiếu Minh</span> <i style="font-size: .8em;"
                                        class="fas fa-caret-down"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end nav-link-menu">
                                    <ul class="nav-list">
                                        <li><a href="" class="dropdown-item"><i class="fas fa-address-card"></i>
                                                Profile</a></li>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-envelope"></i>
                                                Messages</a></li>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-cog"></i> Settings</a>
                                        </li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="" class="dropdown-item"><i class="fas fa-sign-out-alt"></i>
                                                Logout</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- end of navbar navigation -->
            <div class="content">
                <div class="container">

                    <!-- -===========================home ===================-->

                    <?php include $VIEW_NAME; ?>
                </div>
            </div>
        </div>
    </div>



    <!-- Js -->
    <script src="<?= $CONTENT_URL ?>/js/jquery-3.6.0.min.js"></script>
    <script src="<?= $CONTENT_URL ?>/js/bootstrap.bundle.min.js"></script>
    <script src="<?= $CONTENT_URL ?>/js/main.js"></script>

    <script>
    // =============Check delete=================//
    function checkDelete() {
        var x = confirm("Bạn chắc muốn xóa chứ?")
        if (x) {
            return true;
        } else {
            return false;
        }

    }
    // =============Auto resize textarea=================//

    function expandTextarea(id) {
        document.getElementById(id).addEventListener('keyup', function() {
            this.style.overflow = 'hidden';
            this.style.minHeight = '106.8px';
            this.style.height = 0;
            this.style.height = this.scrollHeight + 'px';
        }, false);
    }
    expandTextarea('txtarea');
    </script>


    <!-- Toast message -->
    <script>
    $(document).ready(function() {
        $('.toast').toast('show');
    });
    </script>

    <!-- Thư viện javascript này được sử dụng để chọn và bỏ chọn các loại trên trang list.php. -->
    <script>
    $(document).ready(function() {
        $("#check-all").click(function() {
            $(":checkbox").prop("checked", true);
        });
        $("#clear-all").click(function() {
            $(":checkbox").prop("checked", false);
        });
        $("#btn-delete").click(function() {
            if ($(":checked").length === 0) {
                alert("Vui lòng chọn ít nhất một mục!");
                return false;
            }
        });
    });
    </script>
</body>

</html>