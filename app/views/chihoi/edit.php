<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    <?php include_once '../app/views/layout/layout.php'; ?>
    <div class="container">
        <h3>Sửa chi hội</h3>
        <form action="?route=cap_nhat_chi_hoi" method="post">
        <div class="mb-3">
            <label for="ten_chi_hoi" class="form-label">Tên chi hội</label>
            <input type="text" class="form-control" id="ten_chi_hoi" name="ten_chi_hoi" value="<?php echo $chiHoi->getTenChiHoi(); ?>">
        </div>
        <div class="mb-3">
            <label for="dia_chi" class="form-label">Địa chỉ</label>
            <input type="text" class="form-control" id="dia_chi" name="dia_chi" value="<?php echo $chiHoi->getDiaChi(); ?>">
        </div>
        <div class="mb-3">
            <label for="so_dien_thoai" class="form-label
            ">Số điện thoại</label>
            <input type="text" class="form-control" id="so_dien_thoai" name="so_dien_thoai" value="<?php echo $chiHoi->getSoDienThoai(); ?>">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" name="email" value="<?php echo $chiHoi->getEmail(); ?>">
        </div>

        <div class="mb-3">
            <label for="chu_tich" class="form-label">Chủ tịch</label>
            <input type="text" class="form-control" id="chu_tich" name="chu_tich" value="<?php echo $chiHoi->getChuTich(); ?>">
        </div>

        <div class="mb-3">
            <label for="so_luong_hoi_vien" class="form-label">Số lượng hội viên</label>
            <input type="text" class="form-control" id="so_luong_hoi_vien" name="so_luong_hoi_vien" value="<?php echo $chiHoi->getSoLuongHoiVien(); ?>">
        </div>

        <input type="hidden" name="id" value="<?php echo $chiHoi->getId(); ?>">
        <button type="submit" class="btn btn-primary">Lưu</button>
        </form>
    </div>
</body>
</html>