<div class="col-12" id="reviews">
    <div class="card border-light mb-3">
        <div class="card-header bg-warning text-white text-uppercase"><i class="fa fa-comment"></i> Đánh giá
        </div>
        <div class="card-body">
            <?php foreach ($binh_luan_list as $bl) : ?>
            <div class="review">
                <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
                <meta itemprop="datePublished" content="01-01-2016"><?= $bl['ngay_bl'] ?>

                <?php for ($i = 1; $i <= $bl['rating']; $i++) {
                        echo '<span class="fa fa-star"></span>';
                    } ?>

                by <b><?= $bl['ho_ten'] ?></b>
                <p class="blockquote">
                <p class="mb-0"><?= $bl['noi_dung'] ?></p>
                </p>
                <hr>
            </div>
            <?php endforeach ?>
            <nav aria-label="..." class="text-center">
                <ul class="pagination">
                    <li class="page-item disabled">
                        <a class="page-link" href="#!" tabindex="-1">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#!">1</a></li>
                    <li class="page-item active">
                        <a class="page-link" href="#!">2 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="page-item"><a class="page-link" href="?page=">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#!">Next</a>
                    </li>
                </ul>
            </nav>

        </div>
        <?php

        if (!isset($_SESSION['user'])) {
            echo '<b class="text-danger">Đăng nhập để bình luận về sản phẩm này</b>';
        } else {

        ?>
        <div class="comment-box text-center">
            <h4>Để lại bình luận</h4>
            <form action="" method="POST">
                <div class="rating">
                    <input type="radio" name="rating" value="5" id="5" checked>
                    <label for="5">☆</label>
                    <input type="radio" name="rating" value="4" id="4">
                    <label for="4">☆</label>
                    <input type="radio" name="rating" value="3" id="3">
                    <label for="3">☆</label>
                    <input type="radio" name="rating" value="2" id="2">
                    <label for="2">☆</label>
                    <input type="radio" name="rating" value="1" id="1">
                    <label for="1">☆</label>
                </div>
                <div class="comment-area">
                    <textarea class="form-control" name="noi_dung" placeholder="Nội dung..." rows="4"></textarea>
                </div>
                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-success send px-5">Đăng bình luận
                        <i class="fa fa-long-arrow-right ml-1"></i>
                    </button>
                </div>
            </form>
        </div>
        <?php
        } ?>
    </div>
</div>