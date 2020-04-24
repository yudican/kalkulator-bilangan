<?php 
  /* 
    @author Yudi Candra
    UTS Pemrograman WEB 2
  repositori https://github.com/yudican/kalkulator-bilangan.git
  */
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login | Kalukator Konversi Bilangan</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container mt-10">
    <div class="d-flex justify-content-center align-item-center">
      <div class="card w-40">
        <div class="card-body">
          <h1 class="p-10 center">Login</h1>
          <form action="login-proses.php" class="form-input mt-10" method="POST">
            <input type="text" name="username" class="form-control shadow mt-10" style="font-size: 16px;" placeholder="Masukkan username">
            <input type="password" name="password" class="form-control shadow mt-10" style="font-size: 16px;" placeholder="Masukkan password">
            <button type="submit" class="btn mt-10">Masuk</button>
          </form>
          <p>Username: yudicandra</p>
          <p>password: yudican123</p>
        </div>
      </div>
    </div>
  </div>
</body>
</html>