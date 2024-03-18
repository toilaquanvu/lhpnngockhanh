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
    <h1 class="text-center">Sửa thông tin hội viên</h1>
    <form action="?route=cap_nhat_hoi_vien" method="POST">
        <input type="hidden" name="id" value="<?php echo $hoiVien->getId(); ?>">
        <div class="mb-3">
            <label for="f_ten" class="form-label">Họ</label>
            <input type="text" class="form-control" id="f_ten" name="f_ten" value="<?php echo $hoiVien->getFTen(); ?>">
        </div>
        <div class="mb-3">
            <label for="l_ten" class="form-label">Tên</label>
            <input type="text" class="form-control" id="l_ten" name="l_ten" value="<?php echo $hoiVien->getLTen(); ?>">
        </div>
        <div class="mb-3">
            <label for="ngay_sinh" class="form-label">Ngày sinh</label>
            <input type="date" class="form-control" id="ngay_sinh" name="ngay_sinh" value="<?php echo $hoiVien->getNgaySinh(); ?>">
        </div>
        <div class="mb-3">
            <label for="gioi_tinh" class="form-label">Giới tính</label>
            <select class="form-select" id="gioi_tinh" name="gioi_tinh">
                <option value="Nam" <?php if ($hoiVien->getGioiTinh() == 'Nam') echo 'selected'; ?>>Nam</option>
                <option value="Nữ" <?php if ($hoiVien->getGioiTinh() == 'Nữ') echo 'selected'; ?>>Nữ</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="dia_chi" class="form-label">Địa chỉ</label>
            <input type="text" class="form-control" id="dia_chi" name="dia_chi" value="<?php echo $hoiVien->getDiaChi(); ?>">
        </div>
        <div class="mb-3">
            <label for="so_dien_thoai" class="form-label">Số điện thoại</label>
            <input type="text" class="form-control" id="so_dien_thoai" name="so_dien_thoai" value="<?php echo $hoiVien->getSoDienThoai(); ?>">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo $hoiVien->getEmail(); ?>">
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
            <input type="text" class="form-control" id="chuc_vu" name="chuc_vu" value="<?php echo $hoiVien->getChucVu(); ?>">
        </div>

        <button type="submit" class="btn btn-primary">Cập nhật</button>
        <a class="btn btn-primary" href="?route=quan_ly_hoi_vien">Quay lại</a>
    </form>
</div>
</body>
</html>