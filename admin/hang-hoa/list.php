<div class="container">
    <div class="page-title">
        <h4 class="mt-5 font-weight-bold text-center">Danh sách hàng hóa</h4>
    </div>
    <div class="box box-primary">
        <div class="box-body">
            <nav aria-label="...">
                <ul class="pagination justify-content-center">
                    <!-- <li class="page-item disabled">
                        <a class="page-link" href="?btn_list&page_no=0" tabindex="-1">Trước</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="?btn_list&page_no=0">1</a>
                    </li>
                    <li class="page-item active">
                        <a class="page-link" href="#!">2 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#!">3</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#!">Tiếp</a>
                    </li> -->
                    <!-- <li><a href="?btn_list&page_no=0">|&lt;</a></li>
                    <li><a href="?btn_list&page_no=<?= $_SESSION['page_no'] - 1 ?>">&lt;&lt;</a></li>
                    <li><a href="?btn_list&page_no=<?= $_SESSION['page_no'] + 1 ?>">&gt;&gt;</a></li>
                    <li><a href="?btn_list&page_no=<?= $_SESSION['page_count'] - 1 ?>">&gt;|</a></li> -->

                </ul>
            </nav>
            <input type="button" class="btn btn-danger mb-1" value="Xóa các mục đã chọn">
            <table width="100%" class="table table-hover table-bordered text-center">
                <thead class="thead-dark">
                    <tr>
                        <th><input type="checkbox" name="ma_hh[]" value="<?= $ma_hh ?>"></th>
                        <th>Mã HH</th>
                        <th>Tên hàng hóa</th>
                        <th>Ảnh</th>
                        <th>Đơn giá</th>
                        <th>Giảm giá</th>
                        <th>Lượt xem</th>
                        <th>Ngày nhập</th>
                        <th>Đặc biệt?</th>
                        <th><a href="index.php" class="btn btn-success text-white">Thêm mới
                                <i class="fas fa-plus-circle"></i></a></th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    foreach ($items as $item) {
                        extract($item);
                        $suahh = "index.php?btn_edit&ma_hh=" . $ma_hh;
                        $xoahh = "index.php?btn_delete&ma_hh=" . $ma_hh;
                        $img_path = $UPLOAD_URL . '/products/' . $hinh;
                        if (is_file($img_path)) {
                            $img = "<img src='$img_path' height='60' width='60' class='object-fit-cover'>";
                        } else {
                            $img = "no photo";
                        }
                    ?>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td><?= $ma_hh ?></td>
                        <td><?= $ten_hh ?></td>
                        <td><?= $img ?></td>
                        <td><?= number_format($don_gia, 0) ?></td>
                        <td><?= number_format($giam_gia * 100) ?></td>
                        <td><?= $so_luot_xem ?></td>
                        <td><?= $ngay_nhap ?></td>
                        <td><?= ($dac_biet == 1) ? "Đặc biệt" : "Không"; ?></td>

                        <td class="text-end">
                            <a href="<?= $suahh ?>" class="btn btn-outline-info btn-rounded"><i
                                    class="fas fa-pen"></i></a>
                            <a href="index.php?btn_delete&ma_bl=<?= $ma_bl ?>&ma_hh=<?= $ma_hh ?>"
                                class="btn btn-outline-danger btn-rounded" onclick="return checkDelete()"><i
                                    class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    <?php
                    }

                    ?>
                </tbody>

            </table>
        </div>
    </div>
</div>