<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="../public/css/login.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>


<body>

  <div class="container">
    <div class="body d-md-flex align-items-center justify-content-between">
      <div class="box-1 
      d-flex
      flex-column
      align-items-center
      justify-content-center

      ">
      <br/>

        <img
          src="../public/images/logo_vwu.png"
          class="
          img-fluid
          w-50
          h-50
          rounded-circle
          mb-3
          my-3
          
          " alt="">
          <div class="
          d-flex
          flex-column
          align-items-center
          justify-content-center
        " >

          <h3 class="h-1 fs-6 text-uppercase">HỆ THỐNG ĐĂNG NHẬP TẬP TRUNG</h3>
          <h3 class="h-1 fs-6 text-uppercase">HỘI LIÊN HIỆP PHỤ NỮ VIỆT NAM</h3>
        </div>
      </div>
      <div class=" box-2 d-flex flex-column">
      <div class="
          d-flex
          flex-column
          align-items-center
          justify-content-center
        " >

          <h3 class="h-1 fs-6 text-uppercase">Đăng nhập</h3>
        </div>
        <div class="mt-2">
          <form method="POST" action="http://localhost/lhpnngockhanh/public/?route=login-user">
            <div class="mb-3">
              <label for="username" class="form-label text-white">Tên tài khoản</label>
              <input type="text" class="form-control" id="username" name="username">
              <div class="invalid-feedback">
                Tên tài khoản không được để trống
                </div>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label text-white">Mật khẩu</label>
              <input type="password" class="form-control" id="password" name="password">
              <div class="invalid-feedback">
                Mật khẩu không được để trống
                </div>
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="remember">
              <label class="form-check-label text-white" for="remember">Ghi nhớ đăng nhập</label>
            </div>
            <div class="
              d-flex
              align-items-center
              justify-content-center
              gap-3
            " >
              <button type="submit" class="btn btn-primary">Đăng nhập</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<script>
  const form = document.querySelector('form');
  form.addEventListener('submit', function (e) {
    e.preventDefault();
    const username = document.getElementById('username');
    const password = document.getElementById('password');
    if (username.value === '') {
      username.classList.add('is-invalid');
      username.nextElementSibling.classList.remove('d-none');
    } else {
      username.classList.remove('is-invalid');
      username.nextElementSibling.classList.add('d-none');
    }
    if (password.value === '') {
      password.classList.add('is-invalid');
      password.nextElementSibling.classList.remove('d-none');
    } else {
      password.classList.remove('is-invalid');
      password.nextElementSibling.classList.add('d-none');
    }
    if (username.value !== '' && password.value !== '') {
      form.submit();
    }
  });


</script>
</html>