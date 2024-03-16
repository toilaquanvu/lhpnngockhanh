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

<div class="container">
    <h1>Thông tin chi tiết hội viên</h1>
    <div class="row">
        <div class="col-6">
            <img src="https://via.placeholder.com/150" alt="Ảnh đại diện">
        </div>

        <div class="col-6">
            <div class="mb-3">
                <label for="hoTen" class="form-label">Họ tên</label>
                <input type="text" class="form-control" id="hoTen" value="<?php echo $hoiVien->getHoTen(); ?>" readonly>
            </div>
            <div class="mb-3">
                <label for="ngaySinh" class="form-label">Ngày sinh</label>
                <input type="text" class="form-control" id="ngaySinh" value="<?php echo $hoiVien->getNgaySinh(); ?>"
                       readonly>
            </div>
            <div class="mb-3">
                <label for="gioiTinh" class="form-label">Giới tính</label>
                <input type="text" class="form-control" id="gioiTinh" value="<?php echo $hoiVien->getGioiTinh(); ?>"
                       readonly>
            </div>
            <div class="mb-3">
                <label for="diaChi" class="form-label">Địa chỉ</label>
                <input type="text" class="form-control" id="diaChi" value="<?php echo $hoiVien->getDiaChi(); ?>"
                       readonly>
            </div>
            <div class="mb-3">
                <label for="soDienThoai" class="form-label
                ">Số điện thoại</label>
                <input type="text" class="form-control" id="soDienThoai"
                       value="<?php echo $hoiVien->getSoDienThoai(); ?>" readonly>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" value="<?php echo $hoiVien->getEmail(); ?>" readonly>
            </div>
            <div class="mb-3">
                <label for="chucVu" class="form-label">Chức vụ</label>
                <input type="text" class="form-control" id="chucVu" value="<?php echo $hoiVien->getChucVu(); ?>"
                       readonly>
            </div>

            <div class="mb-3">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addNewModal"
                        data-bs-whatever="addNew">Sửa thông tin
                </button>

                <a class=" btn btn-primary" href=
                "http://localhost/lhpnngockhanh/public/?route=quan_ly_hoi_vien"
                >Trở lại</a>

                <div class="modal fade " id="addNewModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Sửa thông tin hội viên</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>
                            <div class="modal-body
                            ">
                                <form action="http://localhost/lhpnngockhanh/public/?route=cap_nhat_hoi_vien" method="POST">
                                    <input type="hidden" name="id" value="<?php echo $hoiVien->getId(); ?>">
                                    <div class="mb-3">
                                        <label for="hoTen" class="form-label">Họ</label>
                                        <input type="text" class="form-control" id="f_ten"
                                               value="<?php echo $hoiVien->getFTen(); ?>">
                                    </div>

                                    <div class="mb-3">
                                        <label for="hoTen" class="form-label">Tên</label>
                                        <input type="text" class="form-control" id="l_ten"
                                               value="<?php echo $hoiVien->getLTen(); ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="ngaySinh" class="form-label">Ngày sinh</label>
                                        <input type="text" class="form-control" id="ngaySinh"
                                               value="<?php echo $hoiVien->getNgaySinh(); ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="gioiTinh" class="form-label">Giới tính</label>
                                        <input type="text" class="form-control" id="gioiTinh"
                                               value="<?php echo $hoiVien->getGioiTinh(); ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="diaChi" class="form-label">Địa chỉ</label>
                                        <input type="text" class="form-control" id="diaChi"
                                               value="<?php echo $hoiVien->getDiaChi(); ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="soDienThoai" class="form-label
                                    ">Số điện thoại</label>
                                        <input type="text" class="form-control" id="soDienThoai"
                                               value="<?php echo $hoiVien->getSoDienThoai(); ?>">
                                    </div>

                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="text" class="form-control" id="email"
                                               value="<?php echo $hoiVien->getEmail(); ?>">
                                    </div>

                                    <div class="mb-3">
                                        <label for="chucVu" class="form-label">Chức vụ</label>
                                        <input type="text" class="form-control" id="chucVu"
                                               value="<?php echo $hoiVien->getChucVu(); ?>">
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close
                                        </button>
                                        <button type="button" class="btn btn-primary">Lưu thay đổi</button>
                                    </div>
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