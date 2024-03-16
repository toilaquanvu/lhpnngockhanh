<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Thêm chi hội</title>
</head>

<body>
  <?php include_once '../app/views/layout/layout.php'; ?>
  <div class="container">
    <h3>Thêm chi hội</h3>
    <form action="http://localhost/lhpnngockhanh/public/?route=quan_ly_chi_hoi/luu_chi_hoi" method="post">
      <div class="mb-3">
        <label for="ten_chi_hoi" class="form-label">Tên chi hội</label>
        <input type="text" class="form-control" id="ten_chi_hoi" name="ten_chi_hoi">
      </div>
      <div class="mb-3">
        <label for="dia_chi" class="form-label">Địa chỉ</label>
        <input type="text" class="form-control" id="dia_chi" name="dia_chi">
      </div>
      <div class="mb-3">
        <label for="so_dien_thoai" class="form-label">Số điện thoại</label>
        <input type="text" class="form-control" id="so_dien_thoai" name="so_dien_thoai">
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="text" class="form-control" id="email" name="email">
      </div>
      <div class="mb-3">
        <label for="chu_tich" class="form-label">Chủ tịch</label>
        <input type="text" class="form-control" id="chu_tich" name="chu_tich">
      </div>
      <div class="mb-3">
        <label for="so_luong_hoi_vien" class="form-label">Số lượng hội viên</label>
        <input type="text" class="form-control" id="so_luong_hoi_vien" name="so_luong_hoi_vien">
      </div>
      <button type="submit" class="btn btn-primary">Lưu</button>
    </form>
</body>
<script>

</script>
</html>