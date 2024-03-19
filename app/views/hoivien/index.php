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
    <div class="d-flex  justify-content-between align-items-center container my-3 mw-100 h-70 bg-secondary-subtle">
        <span class=" fs-5 navbar-brand mb-0 h1 text-uppercase"><i class="bi bi-arrow-left"></i>
                Quản lý hội viên </a></span>
        </span>
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
                <button class="btn btn-primary" type="submit">
                    <i class="bi bi-search"></i>
                    Xem danh sách
                </button>
            </form>

            <a class="btn btn-primary" href="?route=them_hoi_vien">
                <i class="bi bi-plus-lg"></i>
                Thêm mới</a>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <table class="table table-bordered table-striped">
                    <thead class="table-dark">
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
                                <a class="btn btn-primary"
                                   href="?route=thong_tin_hoi_vien&id=<?php echo $hv->getId(); ?>">
                                    <i class="bi bi-eye"></i>
                                </a>
                                <a class="btn btn-primary" href="?route=sua_hoi_vien&id=<?php echo $hv->getId(); ?>">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <a class="btn btn-danger" href="?route=xoa_hoi_vien&id=<?php echo $hv->getId(); ?>"
                                   onclick="return confirmDelete()">
                                    <i class="bi bi-trash"></i>
                                </a>

                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>

</section>
</body>
<script>


    function confirmDelete() {
        return confirm('Bạn có chắc chắn muốn xóa?');
    }


</script>
</html>
