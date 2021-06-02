<?php
session_start(); // Start session nya
include "db/conn.php"; // Load file koneksi.php
$email = $_POST['email']; // Ambil value email yang dikirim dari form
$password = $_POST['password']; // Ambil value password yang dikirim dari form
$password = md5($password); // Kita enkripsi (encrypt) password tadi dengan md5
// Buat query untuk mengecek apakah ada data user dengan email dan password yang dikirim dari form
$sql = $pdo->prepare("SELECT * FROM users WHERE email=:a AND password=:b");
$sql->bindParam(':a', $email);
$sql->bindParam(':b', $password);
$sql->execute(); // Eksekusi querynya
$data = $sql->fetch(); // Ambil datanya dari hasil query tadi
echo '<h1 class="text-center text-success" > Anda Sukses Terdaftar </h1>';
// Cek apakah variabel $data ada datanya atau tidak
if( !empty($data)){ // Jika tidak sama dengan empty (kosong)
  
  $_SESSION['email'] = $data['email']; // Set session untuk email (simpan email di session)
  $_SESSION['id'] = $data['id']; // Set session untuk nama (simpan nama di session)
  
  setcookie("message","delete",time()-1); // Kita delete cookie message
  
  header("location: success.php"); // Kita redirect ke halaman success.php
}else{ // Jika $data nya kosong
  // Buat sebuah cookie untuk menampung data pesan kesalahan
  echo '<h1 class="text-center text-success" > Gagal login</h1>';
  setcookie("message", "Maaf, email atau Password salah", time()+10);
  
  header("location: index.php"); // Redirect kembali ke halaman index.php
}
?>