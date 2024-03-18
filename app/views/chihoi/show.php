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
        <h1>Thông tin chi tiết chi hội</h1>
        <div class="row">
            <div class="col-6">
                <div class="mb-3">
                    <label for="tenChiHoi" class="form-label ">Tên chi hội</label>
                    <input type="text" class="form-control" id="tenChiHoi" value="<?php echo $chiHoi->getTenChiHoi(); ?>" readonly>
                </div>
                <div class="mb-3">
                    <label for="diaChi" class="form-label">Địa chỉ</label>
                    <input type="text" class="form-control" id="diaChi" value="<?php echo $chiHoi->getDiaChi(); ?>" readonly>
                </div>

                <div class="mb-3">
                    <label for="soDienThoai" class="form-label ">Số điện thoại</label>
                    <input type="text" class="form-control" id="soDienThoai" value="<?php echo $chiHoi->getSoDienThoai(); ?>" readonly>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" id="email" value="<?php echo $chiHoi->getEmail(); ?>" readonly>
                </div>

                <div class="mb-3">
                    <label for="chuTich" class="form-label">Chủ tịch</label>
                    <input type="text" class="form-control" id="chuTich" value="<?php echo $chiHoi->getChuTich(); ?>" readonly>
                </div>

                <div class="mb-3">
                    <label for="soLuongHoiVien" class="form-label">Số lượng hội viên</label>
                    <input type="text" class="form-control" id="soLuongHoiVien" value="<?php echo $chiHoi->getSoLuongHoiVien(); ?>" readonly>
                </div>

                <div class="mb-3">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addNewModal" data-bs-whatever="addNew">Sửa thông tin</button>

                    <a href="?route=quan_ly_chi_hoi" class="btn btn-primary">Trở lại</a>

                    <div class="modal fade" id="addNewModal" tabindex="-1" aria-labelledby="addNewModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="addNewModalLabel">Sửa thông tin chi hội</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body ">
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
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</body>
</html>