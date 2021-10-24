<div class="container">
    <div class="page-title">
        <h4 class="mt-5 font-weight-bold text-center">Tổng hợp bình luận</h4>
    </div>
    <div class="box box-primary">
        <div class="box-body">
            <input type="button" class="btn btn-danger mb-1" value="Xóa các mục đã chọn">
            <table width="100%" class="table table-hover table-bordered text-center">
                <thead class="thead-dark">
                    <tr>
                        <th>Hàng hóa</th>
                        <th>Số bình luận</th>
                        <th>Cũ nhất</th>
                        <th>Mới nhất</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    foreach ($items as $item) {
                        extract($item);

                    ?>
                    <tr>
                        <td><?= $ten_hh ?></td>
                        <td><?= $so_luong ?></td>
                        <td><?= $cu_nhat ?></td>
                        <td><?= $moi_nhat ?></td>
                        <td class="text-end">
                            <a href="../binh-luan/index.php?ma_hh=<?= $ma_hh ?>"
                                class="btn btn-outline-info btn-rounded">Chi tiết<i
                                    class="fas fa-info-circle"></i></i></a>
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