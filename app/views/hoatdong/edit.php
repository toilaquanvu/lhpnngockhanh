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
<?php include_once '../app/views/layout/layout.php'; ?>
<nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
        <span class="navbar-brand mb-0 h1 text-uppercase"><i class="bi bi-arrow-left"></i>
                Quản lý hoạt động chi hội
                phường Ngọc Khánh, Quận Ba Đình, Thành Phố Hà Nội</a></span>
            </span>
        <a class="btn btn-primary" href="?route=dang_ky_hoat_dong">Đăng ký hoạt động cho chi hội</a>
        <a class="btn btn-primary" href="?route=them_moi_hoat_dong">Thêm mới hoạt động</a>
    </div>

</nav>

<div class="container">
    <h1 class="text-center">Sửa thông tin hoạt động</h1>
    <form action="?route=cap_nhat_hoat_dong" method="POST">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label fw-bold">Tên hoạt động</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="ten_hoat_dong" value="<?php echo $hoatDong->getTenHoatDong(); ?>">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label fw-bold">Số lượng</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="so_luong" value="<?php echo $hoatDong->getSoLuong(); ?>">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label fw-bold">Nội dung</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="noi_dung" value="<?php echo $hoatDong->getNoiDung(); ?>">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label fw-bold">Kết quả</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="ket_qua" value="<?php echo $hoatDong->getKetQua(); ?>">

        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label fw-bold">Thời gian</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="thoi_gian" value="<?php echo $hoatDong->getThoiGian(); ?>">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label fw-bold">Địa điểm</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="dia_diem" value="<?php echo $hoatDong->getDiaDiem(); ?>">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label fw-bold">Chi hội</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="id_chi_hoi" value="<?php echo $hoatDong->getIdChiHoi(); ?>">
        </div>

        <input type="hidden" name="id" value="<?php echo $hoatDong->getId(); ?>">


        <button type="submit" class="btn btn-primary">Cập nhật</button>
        <a class="btn btn-primary" href="http://localhost/lhpnngockhanh/public/?route=quan_ly_hoi_vien">Quay lại</a>
    </form>
</div>



</body>
</html>