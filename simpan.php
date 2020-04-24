<?php
/* 
  @author Yudi Candra
  UTS Pemrograman WEB 2
  repositori https://github.com/yudican/kalkulator-bilangan.git
*/
class Simpan {
  function decToBin($angka)
  {
    $datas = explode(' ', $angka);
    $hasil = '';
    if (count($datas) > 1) {
      $tanggal=date("d-m-Y h:i:s"); 
      $type = 'Desimal Ke Biner';
      foreach ($datas as $data) {
        $hasil = str_pad(decbin($data), 8, "0", STR_PAD_LEFT);
        $this->simpanFile($data, $type, $tanggal, $hasil);
      }
      return 'batch';
    }
    return file_put_contents("hasil.txt", str_pad(decbin($angka), 8, "0", STR_PAD_LEFT));
  }

  function BinToDec($angka)
  {
    $datas = explode(' ', $angka);
    $hasil = '';

    if (count($datas) > 1) {
      $tanggal=date("d-m-Y h:i:s");
      $type = 'Biner Ke Desimal';
      
      foreach ($datas as $data) {
        $hasil = bindec($data);
        $this->simpanFile($data, $type, $tanggal, $hasil);
      }
      
      return 'batch';
    }
    return file_put_contents("hasil.txt", bindec($angka));
  }

  function decToOct($angka)
  {
    $datas = explode(' ', $angka);
    $hasil = '';

    if (count($datas) > 1) {
      $tanggal=date("d-m-Y h:i:s");
      $type = 'Desimal Ke Octal';
      
      foreach ($datas as $data) {
        $hasil = decoct($data);
        
        $this->simpanFile($data, $type, $tanggal, $hasil);
      }
      
      return 'batch';
    }

    return file_put_contents("hasil.txt", decoct($angka));
  }

  function octToDec($angka)
  {
    $datas = explode(' ', $angka);
    $hasil = '';

    if (count($datas) > 1) {
      $tanggal=date("d-m-Y h:i:s");
      $type = 'Octal Ke Desimal';
      
      foreach ($datas as $data) {
        $hasil = octdec($data);
        
        $this->simpanFile($data, $type, $tanggal, $hasil);
      }
      
      return 'batch';
    }

    return file_put_contents("hasil.txt", octdec($angka));
  }

  function decToHex($angka)
  {
    $datas = explode(' ', $angka);
    $hasil = '';

    if (count($datas) > 1) {
      $tanggal=date("d-m-Y h:i:s");
      $type = 'Desimal Ke Hexadesimal';
      
      foreach ($datas as $data) {
        $hasil = dechex($data);
        
        $this->simpanFile($data, $type, $tanggal, $hasil);
      }
      
      return 'batch';
    }

    return file_put_contents("hasil.txt", dechex($angka));
  }

  function hexToDec($angka)
  {
    $datas = explode(' ', $angka);
    $hasil = '';

    if (count($datas) > 1) {
      $tanggal=date("d-m-Y h:i:s");
      $type = 'Hexadesimal Ke Desimal';
      
      foreach ($datas as $data) {
        $hasil = hexdec($data);
        
        $this->simpanFile($data, $type, $tanggal, $hasil);
      }
      
      return 'batch';
    }

    return file_put_contents("hasil.txt", hexdec($angka));
  }

  function binToHex($angka)
  {
    $datas = explode(' ', $angka);
    $hasil = '';

    if (count($datas) > 1) {
      $tanggal=date("d-m-Y h:i:s");
      $type = 'Biner Ke Hexadesimal';
      
      foreach ($datas as $data) {
        $hasil = dechex(bindec($data));
        
        $this->simpanFile($data, $type, $tanggal, $hasil);
      }
      
      return 'batch';
    }

    return file_put_contents("hasil.txt", hexdec($angka));
  }

  function hexToBin($angka)
  {
    $datas = explode(' ', $angka);
    $hasil = '';

    if (count($datas) > 1) {
      $tanggal=date("d-m-Y h:i:s");
      $type = 'Hexadesimal ke Biner';
      
      foreach ($datas as $data) {
        $hasil = decbin(hexdec($data));
        
        $this->simpanFile($data, $type, $tanggal, $hasil);
      }
      
      return 'batch';
    }

    return file_put_contents("hasil.txt", hexdec($angka));
  }
    /* 
  @author Yudi Candra
  171011401613
  UTS Pemrograman WEB 2
  repositori https://github.com/yudican/kalkulator-bilangan.git
*/
  function binToOct($angka)
  {
    $datas = explode(' ', $angka);
    $hasil = '';

    if (count($datas) > 1) {
      $tanggal=date("d-m-Y h:i:s");
      $type = 'Biner ke Octal';
      
      foreach ($datas as $data) {
        $hasil = decoct(bindec($data));
        
        $this->simpanFile($data, $type, $tanggal, $hasil);
      }
      
      return 'batch';
    }

    return file_put_contents("hasil.txt", hexdec($angka));
  }

  function octToBin($angka)
  {
    $datas = explode(' ', $angka);
    $hasil = '';

    if (count($datas) > 1) {
      $tanggal=date("d-m-Y h:i:s");
      $type = 'Octal ke Biner';
      
      foreach ($datas as $data) {
        $hasil = decbin(octdec($data));
        
        $this->simpanFile($data, $type, $tanggal, $hasil);
      }
      
      return 'batch';
    }

    return file_put_contents("hasil.txt", hexdec($angka));
  }
  /* 
  @author Yudi Candra
  171011401613
  UTS Pemrograman WEB 2
  repositori https://github.com/yudican/kalkulator-bilangan.git
*/

  function octToHex($angka)
  {
    $datas = explode(' ', $angka);
    $hasil = '';

    if (count($datas) > 1) {
      $tanggal=date("d-m-Y h:i:s");
      $type = 'Octal ke Hexadesimal';
      
      foreach ($datas as $data) {
        $hasil = dechex(octdec($data));
        
        $this->simpanFile($data, $type, $tanggal, $hasil);
      }
      
      return 'batch';
    }

    return file_put_contents("hasil.txt", hexdec($angka));
  }

  function hexToOct($angka)
  {
    $datas = explode(' ', $angka);
    $hasil = '';

    if (count($datas) > 1) {
      $tanggal=date("d-m-Y h:i:s");
      $type = 'Hexadesimal ke Octal';
      
      foreach ($datas as $data) {
        $hasil = decoct(hexdec($data));
        
        $this->simpanFile($data, $type, $tanggal, $hasil);
      }
      
      return 'batch';
    }
    return file_put_contents("hasil.txt", hexdec($angka));
  }

  public function simpanFile($data, $type, $tanggal, $hasil)
  {
    $buka=fopen("output.txt",'a'); 
    fwrite($buka,"\t\t$data\t\t\t |\t\t\t$type\t\t\t |\t\t\t$hasil\t\t\t |\t\t$tanggal\t\t\n");
    fclose($buka);

  }
}
/* 
  @author Yudi Candra
  UTS Pemrograman WEB 2
  repositori https://github.com/yudican/kalkulator-bilangan.git
*/
