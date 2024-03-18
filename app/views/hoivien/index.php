<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include_once '../app/views/layout/layout.php';

?>
<section>
    <div class="d-flex justify-content-between align-items-center container my-3 mw-100 h-70 bg-secondary-subtle">
        <div class="text-center">
            <h4 class="text-decoration-underline text-primary">THÔNG TIN HỘI VIÊN</h4>
        </div>
        <div class="d-flex align-items-end mb-3 ">
            <form action="
            <?php echo DOMAIN; ?>
" method="GET">
                <input type="hidden" name="route" value="quan_ly_hoi_vien">
                <select class="form-select" aria-label="Default select example" name="id_chi_hoi">
                    <option selected>Chọn chi hội</option>
                    <?php foreach ($chiHoi as $chiHoiItem) { ?>
                        <option value="<?php echo $chiHoiItem->getId(); ?>"><?php echo $chiHoiItem->getTenChiHoi(); ?></option>
                    <?php } ?>
                </select>
                <button class="btn btn-primary" type="submit">Xem danh sách</button>
            </form>

            <a class="btn btn-primary" href="?route=them_hoi_vien">Thêm mới</a>
        </div>
    </div>

    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Họ và tên</th>
            <th scope="col">Ngày sinh</th>
            <th scope="col">Giới tính</th>
            <th scope="col">Địa chỉ</th>
            <th scope="col">Số điện thoại</th>
            <th scope="col">Email</th>
            <th scope="col">Chi hội</th>
            <th scope="col">Chức vụ</th>
            <th scope="col">Thao tác</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($hoiVien as $key => $hv) { ?>
            <tr>
                <td><?php echo $key + 1; ?></td>
                <td><?php echo $hv->getHoTen(); ?></td>
                <td><?php echo $hv->getNgaySinh(); ?></td>
                <td><?php echo $hv->getGioiTinh(); ?></td>
                <td><?php echo $hv->getDiaChi(); ?></td>
                <td><?php echo $hv->getSoDienThoai(); ?></td>
                <td><?php echo $hv->getEmail(); ?></td>
                <td><?php echo $hv->getIdChiHoi(); ?></td>
                <td><?php echo $hv->getChucVu(); ?></td>
                <td>
                    <a href="?route=thong_tin_hoi_vien&id=<?php echo $hv->getId(); ?>">Xem</a>
                    <a href="?route=sua_hoi_vien&id=<?php echo $hv->getId(); ?>">Sửa</a>
                    <a href="?route=xoa_hoi_vien&id=<?php echo $hv->getId(); ?>"
                       onclick="return confirmDelete()">Xóa</a>

                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>

</section>
</body>
<script>

    // confirm delete

    function confirmDelete() {
        return confirm('Bạn có chắc chắn muốn xóa?');
    }


</script>
</html>
