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

<!-- lấy chi hội được chọn và gán vào một chi hội cụ thể-->

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
    <h1 class="text-center">Đăng ký hoạt động cho chi hội </h1>
    <form action="?route=luu_hoat_dong" method="post">
        <div class="mb-3">
            <label for="ten_hoat_dong" class="form-label text-uppercase">Tên hoạt động</label>
            <input type="text" class="form-control" id="ten_hoat_dong" name="ten_hoat_dong" value="<?php echo $hoatDong->getTenHoatDong(); ?>">
        </div>

        <div class="mb-3">
            <label for="id_chi_hoi" class="form-label
            text-uppercase">Chi hội thực hiện</label>
            <select value="id_chi_hoi" name="id_chi_hoi" class="form-select" aria-label="Default select example">
                <option selected>Chọn chi hội</option>
                <?php
                foreach ($chiHoi as $key => $value) {
                    echo "<option value='" . $value->getId() . "'>" . $value->getTenChiHoi() . "</option>";
                }
                ?>
            </select>


        </div>

        <button type="submit" class="btn btn-primary">Lưu</button>
        <a href="?route=hoat_dong_chi_hoi" class="btn btn-secondary">Hủy</a>
    </form>
</div>





</body>
</html>