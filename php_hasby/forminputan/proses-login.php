<?php
$email = @$_REQUEST['email'];
$password = @$_REQUEST['password'];

if ($email !== 'hasby@gmail.com') {
  die("Email tidak terdaftar!");
}

if ($password !== 'ampundije') {
  die("Password salah!");
}
echo "Selamat {$email}, anda berhasil login! :)";
?>