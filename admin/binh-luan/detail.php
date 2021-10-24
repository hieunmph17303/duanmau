<div class="container">
    <div class="page-title">
        <h4 class="mt-5 font-weight-bold text-center">Chi tiết bình luận</h4>
    </div>
    <div class="box box-primary">
        <div class="box-body">
            <input type="button" class="btn btn-danger mb-1" value="Xóa các mục đã chọn">
            <table width="100%" class="table table-hover table-bordered text-center">
                <thead class="thead-dark">
                    <tr>
                        <th><input type="checkbox" name="ma_hh[]" value="<?= $ma_bl ?>"></th>
                        <th>Nội dung</th>
                        <th>Ngày BL</th>
                        <th>Người BL</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    foreach ($items as $item) {
                        extract($item);

                    ?>
                    <tr>
                        <td><input type="checkbox"></td>
                        <td><?= $noi_dung ?></td>
                        <td><?= $ngay_bl ?></td>
                        <td><?= $ma_kh ?></td>
                        <td class="text-end">
                            <a href="<?= $xoahh ?>" class="btn btn-outline-danger btn-rounded"
                                onclick="return checkDelete()"><i class="fas fa-trash"></i></a>
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