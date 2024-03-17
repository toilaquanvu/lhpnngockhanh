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


    <form action="?route=luu_hoat_dong" method="post">
        <div class="mb-3">
            <label for="ten_hoat_dong" class="form-label text-uppercase">Tên hoạt động</label>
            <input type="text" class="form-control" id="ten_hoat_dong" name="ten_hoat_dong">
        </div>
        <div class="mb-3">
            <label for="so_luong" class="form-label text-uppercase">Số lượng</label>
            <input type="text" class="form-control" id="so_luong" name="so_luong">
        </div>

        <div class="mb-3">
            <label for="noi_dung" class="form-label text-uppercase">Nội dung</label>
            <input type="text" class="form-control" id="noi_dung" name="noi_dung">
        </div>

        <div class="mb-3">
            <label for="ket_qua" class="form-label text-uppercase">Kết quả</label>
            <input type="text" class="form-control" id="ket_qua" name="ket_qua">

        </div>

        <div class="mb-3">
            <label for="thoi_gian" class="form-label text-uppercase">Thời gian</label>
            <input type="text" class="form-control" id="thoi_gian" name="thoi_gian">

        </div>

        <div class="mb-3">
            <label for="dia_diem" class="form-label text-uppercase">Địa điểm</label>
            <input type="text" class="form-control" id="dia_diem" name="dia_diem">

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

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>


</body>
</html>