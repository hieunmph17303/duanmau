 <!-- ============== COMPONENT SLIDER ITEMS SLICK  ============= -->
 <div class="container-fluid p-5">
     <div class="row">
         <div class="col-md-12">
             <div class="owl-carousel">


                 <?php foreach ($hh_cung_loai as $hh_cl) :

                        if ($don_gia > 0) {
                            $p_d_hh_cl = number_format($hh_cl['giam_gia'] / $hh_cl['don_gia'] * 100);
                        } else {
                            $p_d_hh_cl = 0;
                        }

                    ?>
                 <div class="product-card">
                     <div class="product-badge text-danger">
                         <?= $hh_cl['giam_gia'] == 0 ? '' : '-' . $p_d_hh_cl . '%' ?></div>
                     <a class="product-thumb"
                         href="<?= $SITE_URL . '/hang-hoa/chi-tiet.php?ma_hh=' . $hh_cl['ma_hh'] ?>"
                         data-abc="true"><img class="product-img"
                             src="<?= $UPLOAD_URL . "/products/" . $hh_cl['hinh'] ?>">
                     </a>
                     <h3 class="product-title">
                         <a href="<?= $SITE_URL . '/hang-hoa/chi-tiet.php?ma_hh=' . $hh_cl['ma_hh'] ?>"
                             data-abc="true"><?= $hh_cl['ten_hh'] ?></a>
                     </h3>
                     <h4 class="product-price">
                         <del><?= number_format($hh_cl['don_gia'], 0, ',') ?>đ</del><?= number_format($don_gia - $giam_gia, 0, ',') ?>đ
                     </h4>
                     <div class="product-buttons">
                         <button class="btn btn-outline-primary btn-sm">Add to Cart</button>
                     </div>
                 </div>
                 <?php endforeach; ?>
             </div>
         </div>
     </div>
 </div>
 </div>
 <!-- ============== COMPONENT SLIDER ITEMS SLICK .end // ============= -->