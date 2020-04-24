<?php
/* 
  @author Yudi Candra
  UTS Pemrograman WEB 2
*/
$userDb = file('login.txt');
$username = $_POST['username']; 
$password = $_POST['password']; 
foreach ($userDb as $users) {
  $user = explode('|', $users);
  if ($user[0] == $username && $user[1] == $password) {
    header('location:home.php');
    break;
  }else{
    echo '<script>alert(`Login gagal username atau password salah`)</script>';
    header('location:index.php');
    break;
  }
}
