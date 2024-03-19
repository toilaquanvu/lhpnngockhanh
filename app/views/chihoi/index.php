<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quản lý chi hội</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
  <?php
    include_once '../app/views/layout/layout.php';
  ?>
  <div class="container-fluid">
      <nav class="navbar bg-body-tertiary">
          <div class="container-fluid">
        <span class="navbar-brand mb-0 h1 text-uppercase"><i class="bi bi-arrow-left"></i>
                DANH SÁCH CHI HỘI PHƯỜNG NGỌC KHÁNH, QUẬN BA ĐÌNH, THÀNH PHỐ HÀ NỘI</a></span>
              </span>
          </div>
      </nav>
    <a href="?route=them_chi_hoi" class="btn btn-primary mb-3">
        <i class="bi bi-plus-lg"></i>
        Thêm chi hội</a>
    <table class="table table-bordered table-striped">
      <thead class="table-dark" >
        <tr>
          <th scope="col">Tên chi hội</th>
          <th scope="col">Phường</th>
          <th scope="col">Số điện thoại</th>
          <th scope="col">Chi hội trưởng</th>
          <th scope="col">Số lượng hội viên</th>
          <th scope="col">Thao tác</th>
        </tr>
      </thead>
      <tbody>
        <?php
          foreach ($chiHoi as $item) {
            echo '<tr>';
            echo '<tr>';
            echo '<td>' . $item->getTenChiHoi() . '</td>';
            echo '<td>' . $item->getDiaChi() . '</td>';
            echo '<td>' . $item->getSoDienThoai() . '</td>';
            echo '<td>' . $item->getChuTich() . '</td>';
            echo '<td>' . $item->getSoLuongHoiVien() . '</td>';
            echo '<td>';
            echo '<a href="?route=chi_tiet_chi_hoi&id=' . $item->getId() . '" class=" mx-2 btn btn-primary">
<i class="bi bi-eye"></i>
</a>';
            echo '<a href="?route=sua_chi_hoi&id=' . $item->getId() . '" class=" mx-2 btn btn-primary">
<i class="bi bi-pencil"></i>
</a>';
            echo '<a href="?route=xoa_chi_hoi&id=' . $item->getId() . '" class=" mx-2 btn btn-danger" onclick="return confirmDelete()">
<i class="bi bi-trash"></i>
</a>';
            echo '</td>';
            echo '</tr>';
          }
        ?>
      </tbody>
    </table>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

<script>
function confirmDelete() {
  return confirm('Are you sure you want to delete this user?');
} <
/html>