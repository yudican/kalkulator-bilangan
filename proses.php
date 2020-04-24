
<?php
/* 
  @author Yudi Candra
  UTS Pemrograman WEB 2
*/ 
    include('simpan.php');

  $simpan = new Simpan();
  $angka = isset($_POST['display']) ? $_POST['display']:"";
  $hasil = '';
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['menu'] == 'd2b') {
        $hasil = $simpan->decToBin($angka);
    }
    if ($_POST['menu'] == 'd2o') {
        $hasil =  $simpan->decToOct($angka);
    }
    if ($_POST['menu'] == 'd2h') {
        $hasil =  $simpan->decToHex($angka);
    }
    if ($_POST['menu'] == 'b2d') {
       $hasil =  $simpan->BinToDec($angka);
    }
    if ($_POST['menu'] == 'o2d') {
        $hasil =  $simpan->octToDec($angka);
    }
    if ($_POST['menu'] == 'h2d') {
        $hasil =  $simpan->hexToDec($angka);
    }
    if ($_POST['menu'] == 'b2h') {
        $hasil =  $simpan->binToHex($angka);
    }
    if ($_POST['menu'] == 'h2b') {
        $hasil =  $simpan->hexToBin($angka);
    }
    if ($_POST['menu'] == 'b2o') {
        $hasil =  $simpan->binToOct($angka);
    }
    if ($_POST['menu'] == 'o2b') {
        $hasil =  $simpan->octToBin($angka);
    }
    if ($_POST['menu'] == 'o2h') {
        $hasil =  $simpan->octToHex($angka);
    }
    if ($_POST['menu'] == 'h2o') {
        $hasil =  $simpan->hexToOct($angka);
    }
  }

  /* 
  @author Yudi Candra
  UTS Pemrograman WEB 2
*/
