<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil data ID yang dikirim oleh form_ubah.php melalui URL
$id = $_GET['id'];

// Ambil Data yang Dikirim dari Form
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];
$sekolah = $_POST['sekolah'];

  // Proses ubah data ke Database
  $sql = $pdo->prepare("UPDATE siswa SET nama=:nama, alamat=:alamat, jenis_kelamin=:jenis_kelamin, agama=:agama, sekolah=:sekolah WHERE id=:id");
  $sql->bindParam(':nama', $nama);
  $sql->bindParam(':alamat', $alamat);
  $sql->bindParam(':jenis_kelamin', $jenis_kelamin);
  $sql->bindParam(':agama', $agama);
  $sql->bindParam(':sekolah', $sekolah);
  $sql->bindParam(':id', $id);
  $execute = $sql->execute(); // Eksekusi / Jalankan query

  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    header("location: index.php"); // Redirect ke halaman index.php
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='form_ubah.php'>Kembali Ke Form</a>";
  }
?>