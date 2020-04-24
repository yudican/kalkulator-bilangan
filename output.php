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
  <title>Kalukator Konversi Bilangan</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <nav class="d-flex navbar shadow">
    <div class="logo">
      <h1>Kalkulator Bilangan</h1>
    </div>
    <div class="menu">
      <ul class="d-flex">
        <li class="nav-link"><a class="link" href="home.php">Home</a></li>
        <li class="nav-link"><a class="link active" href="output.php">Output</a></li>
        <li class="nav-link">Yudi Candra</li>
      </ul>
    </div>
  </nav>
  <div class="container mt-10">
    <div class="d-flex justify-content-center align-item-center">
      <div class="card w-80">
        <div class="card-body">
          <h1 class="p-10 center">Hasil Konversi Bilangan</h1>
          <table width="100%" border="1">
            <thead>
              <tr>
                <th>Data Awal</th>
                <th>Type Konversi</th>
                <th>Hasil Konversi</th>
                <th>Waktu Konversi</th>
              </tr>
            </thead>
            <tbody>
              
              <?php 
                $hasilKonversi = fopen("output.txt", "rb");

                while (!feof($hasilKonversi) ) { 
                  $baris = fgets($hasilKonversi);
                  $pecah = explode('|', $baris); 
                  ?>
                    <tr>
                      <td><?php echo isset($pecah[0]) ? $pecah[0] : '' ?></td>
                      <td><?php echo isset($pecah[1]) ? $pecah[1] : '' ?></td>
                      <td><?php echo isset($pecah[2]) ? $pecah[2] : '' ?></td>
                      <td><?php echo isset($pecah[3]) ? $pecah[3] : '' ?></td>
                    </tr>
              <?php }
                fclose($hasilKonversi);
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</body>
</html>