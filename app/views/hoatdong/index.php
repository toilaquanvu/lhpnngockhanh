<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
include_once '../app/views/layout/layout.php';
?>

<nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
        <span class="navbar-brand mb-0 h1 text-uppercase"><i class="bi bi-arrow-left"></i>
                Quản lý hoạt động chi hội
                phường Ngọc Khánh, Quận Ba Đình, Thành Phố Hà Nội</a></span>
            </span>

<!--        <a class="btn btn-primary" href="?route=dang_ky_hoat_dong">Đăng ký hoạt động cho chi hội</a>-->
        <a class="btn btn-primary" href="?route=them_moi_hoat_dong">
            <i class="bi bi-plus-lg"></i>
            Thêm mới hoạt động</a>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <table class="table table-bordered table-striped">
                <thead class="table-dark" >
                <tr>
                    <th scope="col">Lựa chọn</th>
                    <th scope="col">STT</th>
                    <th scope="col">Tên hoạt động</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col">Nội dung</th>
                    <th scope="col">Kết quả</th>
                    <th scope="col">Thời gian</th>
                    <th scope="col">Địa điểm</th>
                    <th scope="col">Chi hội</th>
                    <th scope="col">Thao tác</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($hoatDong as $key => $value) {
                    echo "<tr>";
                    echo "<td><input type='radio' name='id_hoat_dong' value='" . $value->getId() . "'></td>";
                    echo "<th scope='row'>" . $key . "</th>";
                    echo "<td>" . $value->getTenHoatDong() . "</td>";
                    echo "<td>" . $value->getSoLuong() . "</td>";
                    echo "<td>" . $value->getNoiDung() . "</td>";
                    echo "<td>" . $value->getKetQua() . "</td>";
                    echo "<td>" . $value->getThoiGian() . "</td>";
                    echo "<td>" . $value->getDiaDiem() . "</td>";
                    echo "<td>" . $value->getIdChiHoi() . "</td>";
                    echo "<td><a class='btn btn-primary' href='?route=sua_hoat_dong&id=" . $value->getId() . "'>
<i class='bi bi-pencil-square'></i>
</a> 
<a class='btn btn-danger' href='?route=xoa_hoat_dong&id=" . $value->getId() . "' onclick='return confirmDelete()'>
<i class='bi bi-trash'></i>
</a>

</td>";
                    echo "</tr>";
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>



</body>
<script>
    function confirmDelete() {
        return confirm('Bạn có chắc chắn muốn xóa?');
    }
</script>
</html>