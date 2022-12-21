<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil Data yang Dikirim dari Form
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];
$sekolah = $_POST['sekolah'];


// Proses upload

  $sql = $pdo->prepare("INSERT INTO siswa(nama, alamat, jenis_kelamin, agama, sekolah) VALUES(:nama,:alamat,:jenis_kelamin,:agama,:sekolah)");
  $sql->bindParam(':nama', $nama);
  $sql->bindParam(':alamat', $alamat);
  $sql->bindParam(':jenis_kelamin', $jenis_kelamin);
  $sql->bindParam(':agama', $agama);
  $sql->bindParam(':sekolah', $sekolah);

  $sql->execute(); // Eksekusi query insert

  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    header("location: index.php"); // Redirect ke halaman index.php
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
  }

?>

