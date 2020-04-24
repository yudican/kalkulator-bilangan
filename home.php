<?php 
/* 
  @author Yudi Candra
  UTS Pemrograman WEB 2
*/

  include_once('proses.php'); 
  $hasilKonversi = $hasil == 'batch' ? '' : file_get_contents('hasil.txt');
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
        <li class="nav-link"><a class="link active" href="home.php">Home</a></li>
        <li class="nav-link"><a class="link" href="output.php">Output</a></li>
        <li class="nav-link">Yudi Candra</li>
      </ul>
    </div>
  </nav>
  <div class="container mt-10">
    <div class="d-flex justify-content-center align-item-center">
      <div class="card w-30">
        <div class="card-body">
          <h1 class="p-10 center">Konversi Bilangan</h1>
          <form action="home.php" name="calculator" class="form-input mt-10" method="POST">
            <select name="menu" id="menu" class="form-control shadow" style="font-size: 20px;">
              <option value="d2b">Desimal Ke Binner</option>
              <option value="d2o">Desimal Ke Octal</option>
              <option value="d2h">Desimal Ke Hexadesimal</option>
              <option value="b2d">Binner Ke Desimal</option>
              <option value="b2o">Biner Ke Octal</option>
              <option value="b2h">Biner Ke Hexadesimal</option>
              <option value="o2d">Octal Ke Desimal</option>
              <option value="o2b">Octal Ke Biner</option>
              <option value="o2h">Octal Ke Hexadesimal</option>
              <option value="h2d">Hexadesimal Ke Desimal</option>
              <option value="h2b">Hexadesimal Ke Biner</option>
              <option value="h2o">Hexadesimal Ke Octal</option>
            </select>
            <input type="text" name="display" value="<?php echo $hasilKonversi ?>" placeholder="masukkan bilangan" class="form-control shadow mt-10" readonly>
            <div class="d-flex justify-content-between mt-10">
              <input type="button" value="1" class="btn w-100 shadow m-5" onclick="calculator.display.value += '1'">
              <input type="button" value="2" class="btn w-100 shadow m-5" onclick="calculator.display.value += '2'">
              <input type="button" value="3" class="btn w-100 shadow m-5" onclick="calculator.display.value += '3'">
              <input type="button" value="4" class="btn w-100 shadow m-5" onclick="calculator.display.value += '4'">
              <input type="button" value="A" class="btn w-100 shadow m-5" onclick="calculator.display.value += 'A'">
              <input type="button" value="B" class="btn w-100 shadow m-5" onclick="calculator.display.value += 'B'">
              <input type="button" value="C" class="btn w-100 shadow m-5" onclick="calculator.display.value += 'C'">
            </div>
            <div class="d-flex justify-content-between">
              <input type="button" value="5" class="btn w-100 shadow m-5" onclick="calculator.display.value += '5'">
              <input type="button" value="6" class="btn w-100 shadow m-5" onclick="calculator.display.value += '6'">
              <input type="button" value="7" class="btn w-100 shadow m-5" onclick="calculator.display.value += '7'">
              <input type="button" value="8" class="btn w-100 shadow m-5" onclick="calculator.display.value += '8'">
              <input type="button" value="D" class="btn w-100 shadow m-5" onclick="calculator.display.value += 'D'">
              <input type="button" value="E" class="btn w-100 shadow m-5" onclick="calculator.display.value += 'E'">
              <input type="button" value="F" class="btn w-100 shadow m-5" onclick="calculator.display.value += 'F'">
            </div>
            <div class="d-flex justify-content-between">
              <input type="button" value="9" class="btn w-100 shadow m-5" onclick="calculator.display.value += '9'">
              <input type="button" value="0" class="btn w-100 shadow m-5" onclick="calculator.display.value += '0'">
              <input type="button" value="Reset" class="btn w-100 shadow m-5" onclick="calculator.display.value = ''">
              <input type="button" value="Space" class="btn w-100 shadow m-5" onclick="calculator.display.value += ' '">
              <input type="submit" value="Hitung" class="btn w-100 shadow m-5 w-100">
            </div>
          </form>
          <p><b>Note: </b> Untuk conversi secara batch pisahkan dengan spasi contoh desimal ke binner 613 414 567 dst.</p>
        </div>
      </div>
    </div>
  </div>
</body>
</html>