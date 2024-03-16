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

<div class="container">
    <h1 class="text-center">Thêm mới hội viên</h1>
    <form action="http://localhost/lhpnngockhanh/public/?route=luu_hoi_vien" method="POST">
        <div class="mb-3">
            <label for="f_ten" class="form-label">Họ</label>
            <input type="text" class="form-control" id="f_ten" name="f_ten">
        </div>
        <div class="mb-3">
            <label for="l_ten" class="form-label">Tên</label>
            <input type="text" class="form-control" id="l_ten" name="l_ten">
        </div>
        <div class="mb-3">
            <label for="ngay_sinh" class="form-label">Ngày sinh</label>

            <input type="text" class="form-control" id="ngay_sinh" name="ngay_sinh">
        </div>
        <div class="mb-3">
            <label for="gioi_tinh" class="form-label">Giới tính</label>
            <select class="form-select" id="gioi_tinh" name="gioi_tinh">
                <option value="Nam">Nam</option>
                <option value="Nữ">Nữ</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="dia_chi" class="form-label">Địa chỉ</label>
            <input type="text" class="form-control" id="dia_chi" name="dia_chi">
        </div>
        <div class="mb-3">
            <label for="so_dien_thoai" class="form-label
            ">Số điện thoại</label>
            <input type="text" class="form-control" id="so_dien_thoai" name="so_dien_thoai">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>

        <div class="mb-3">
            <label for="id_chi_hoi" class="form-label
            ">Chi hội</label>
            <select class="form-select" id="id_chi_hoi" name="id_chi_hoi">
                <?php foreach ($chiHoi as $chiHoiItem) { ?>
                    <option value="<?php echo $chiHoiItem->getId(); ?>"><?php echo $chiHoiItem->getTenChiHoi(); ?></option>
                <?php } ?>
            </select>
        </div>

        <div class="mb-3">
            <label for="chuc_vu" class="form-label">Chức vụ</label>
            <select class="form-select" id="chuc_vu" name="chuc_vu">
                <option value="1">Chủ tịch</option>
                <option value="2">Phó chủ tịch</option>
                <option value="3">Bí thư</option>
                <option value="4">Phó bí thư</option>
                <option value="5">Ủy viên</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Lưu</button>
        <a class="btn btn-primary" href="http://localhost/lhpnngockhanh/public/?route=quan_ly_hoi_vien">Quay lại</a>
    </form>
</div>
</body>
</html>