<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>

<nav class="navbar navbar-expand navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="http://localhost/lhpnngockhanh/public/?route=thong_ke">QUẢN LÝ NHÂN SỰ</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="
          http://localhost/lhpnngockhanh/public/?route=thong_ke
          ">Tổng quan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="
          http://localhost/lhpnngockhanh/public/?route=quan_ly_chi_hoi
          ">Quản lý chi hội</a>
        </li>
          <li class="nav-item">
              <a class="nav-link" href="
          http://localhost/lhpnngockhanh/public/?route=hoat_dong_hoi_vien
          ">Quản lý hoạt động hội viên</a>
          </li>
        <li class="nav-item">
          <a class="nav-link" href="
          http://localhost/lhpnngockhanh/public/?route=quan_ly_hoi_vien
          ">Quản lý hội viên</a>
        </li>


      </ul>
      <div class="d-flex gap-2" >
      <?php
              if (isset($_SESSION['id'])) {
                echo '<div class="navbar-text px-2 fw-bold">';
                echo 'Xin chào, ' . $_SESSION['username'] . '!';
                echo '</div>';
                echo '<a class="btn btn-outline-success" href="
                http://localhost/lhpnngockhanh/public/?route=logout
                ">Đăng xuất</a>';
              } else {
                echo '<a class="btn btn-outline-success" href="
                http://localhost/lhpnngockhanh/public/?route=login
                ">Đăng nhập</a>';
              }
            ?>
      </div>
    </div>
  </div>
</nav>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</html>