<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trang tổng quan</title>
</head>

<body>
  <?php 
    include_once '../app/views/layout/layout.php';
    ?>
  <nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
      <span class="navbar-brand mb-0 h1 text-uppercase"><a href=""><i class="bi bi-arrow-left"></i></a> Quản lý hội viên
        phường Ngọc Khánh, Quận Ba Đình, Thành Phố Hà Nội</span>
    </div>
  </nav>
  <div class="d-flex justify-content-between container my-3 mw-100 h-70 bg-secondary-subtle">
    <div class="text-center">
      <h4 class="text-decoration-underline text-primary">THÔNG TIN HỘI VIÊN</h4>
      <img src="https://via.placeholder.com/150" alt="Ảnh đại diện">
    </div>

    <div class="d-flex align-items-end mb-3 ">




      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addNewModal"
        data-bs-whatever="addNew">THÊM MỚI <i class="bi bi-caret-down-fill"></i></button>

      </div>


      <div class="modal fade" id="addNewModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Thêm mới hội viên</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form>
                <div class="mb-3">
                  <label for="recipient-name" class="col-form-label">Recipient:</label>
                  <input type="text" class="form-control" id="recipient-name">
                </div>
                <div class="mb-3">
                  <label for="message-text" class="col-form-label">Message:</label>
                  <textarea class="form-control" id="message-text"></textarea>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Thêm mới</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container mw-100">
    <table class="table table-bordered table-striped border-primary">
      <thead class="table-light">
        <tr>
          <th scope="col">Hội Liên hiệp phụ nữ</th>
          <th scope="col">PN từ 18 tuổi trở lên</th>
          <th scope="col">Tổng số HV</th>
          <th scope="col">Mới trong kỳ báo cáo</th>
          <th scope="col">Giảm trong kỳ báo cáo</th>
          <th scope="col">HV theo địa bàn dân cư</th>
          <th scope="col">HV theo mô hình CLB, tổ nhóm đặc thù</th>
          <th scope="col">Hội viên đương nhiên</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td> <i class="bi bi-bookmark-plus-fill"></i> Thị trấn Hòa Thành</td>
          <td>0</td>
          <td>0</td>
          <td>0</td>
          <td>0</td>
          <td>0</td>
          <td>0</td>
          <td>0</td>
          <td><i class="bi bi-info-circle"></i></td>
        </tr>
      </tbody>
    </table>
  </div>
</body>

</html>