<div class="col-12" id="reviews">
    <div class="card border-light mb-3">
        <div class="card-header bg-warning text-white text-uppercase"><i class="fa fa-comment"></i> Đánh giá
        </div>
        <div class="card-body">
            <div class="review">
                <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
                <meta itemprop="datePublished" content="01-01-2016">January 01, 2018

                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                by <b>Thầy Lộc fuho</b>
                <p class="blockquote">
                <p class="mb-0">Đểu quá.</p>
                </p>
                <hr>
            </div>
            <div class="review">
                <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
                <meta itemprop="datePublished" content="01-01-2016">January 01, 2018

                <span class="fa fa-star" aria-hidden="true"></span>
                <span class="fa fa-star" aria-hidden="true"></span>
                <span class="fa fa-star" aria-hidden="true"></span>
                <span class="fa fa-star" aria-hidden="true"></span>
                <span class="fa fa-star" aria-hidden="true"></span>
                by <b>Cô Minh Thu</b>
                <p class="blockquote">
                <p class="mb-0">Đã mua hàng và ko có lần sau.</p>
                </p>
                <hr>
            </div>

        </div>
        <?php

        if (!isset($_SESSION['user'])) {
            echo '<b class="text-danger">Đăng nhập để bình luận về sản phẩm này</b>';
        } else {

        ?>
        <div class="comment-box text-center">
            <h4>Để lại bình luận</h4>
            <form action="" method="POST">
                <div class="rating"> <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label>
                    <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label> <input type="radio"
                        name="rating" value="3" id="3"><label for="3">☆</label> <input type="radio" name="rating"
                        value="2" id="2"><label for="2">☆</label> <input type="radio" name="rating" value="1"
                        id="1"><label for="1">☆</label>
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