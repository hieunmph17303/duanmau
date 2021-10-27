 <!-- Body -->

 <div class="container">
     <div class="row">
         <div class="col">
             <nav aria-label="breadcrumb">
                 <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
                     <li class="breadcrumb-item"><a href="category.html">Sản phẩm</a></li>
                 </ol>
             </nav>
         </div>
     </div>
 </div>
 <div class="container">
     <div class="row">
         <div class="col-12 col-sm-3">
             <div class="bg-light mb-3">
                 <?php require "../layout/tim-kiem.php"; ?>
                 <!-- Danh mục -->
                 <div id="accordion" role="tablist">
                     <?php require "../layout/danh-muc.php"; ?>
                     <?php require "../layout/top10.php"; ?>
                     <?php require "../layout/dac-biet.php"; ?>
                 </div>
             </div>

         </div>
         <!-- Sản phẩm -->
         <div class="col">
             <h5 class="alert-secondary pt-3 pb-3 pl-sm-4 shadow-sm text-center ">
                 <?= $title_site ?></h5>

             <div class="row">
                 <?php foreach ($items as $item) :
                        extract($item);
                        if ($don_gia > 0) {
                            $percent_discount = number_format($giam_gia / $don_gia * 100);
                        } else {
                            $percent_discount = 0;
                        }

                    ?>
                 <div class="col-12 col-md-6 col-lg-4 mt-3">
                     <div class="card text-center">
                         <img class="card-img-top product-img" src="<?= $UPLOAD_URL . '/products/' . $hinh ?>"
                             alt="Ảnh sản phẩm">
                         <div class="card-body">
                             <h4 class="card-title mh-60">
                                 <a href="<?= $SITE_URL . '/hang-hoa/chi-tiet.php?ma_hh=' . $ma_hh ?>">
                                     <?= $ten_hh ?>
                                 </a>
                             </h4>
                             <i><?= $giam_gia == 0 ? '' : '-' . $percent_discount . '%' ?></i>
                             <div class="product-price">
                                 <div class="col d-flex justify-content-center align-items-center">
                                     <del class="d-block"><?= number_format($don_gia, 0, ',') ?>đ</del>
                                     <p class="text-danger font-weight-bold d-block ml-3 mb-0">
                                         <?= number_format($don_gia - $giam_gia, 0, ',') ?>đ</p>
                                 </div>
                             </div>
                             <div class="col m-2">
                                 <a href="#" class="btn btn-danger btn-block">Add to cart</a>
                             </div>
                         </div>
                     </div>
                 </div>
                 <?php endforeach; ?>

             </div>
         </div>

     </div>
 </div>