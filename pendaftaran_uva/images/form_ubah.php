<html>
<head>
  <title>Aplikasi CRUD dengan PHP</title>
  <link rel="stylesheet" href="styles.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</head>
<body>

  <?php
  // Load file koneksi.php
  include "koneksi.php";

  // Ambil data NIS yang dikirim oleh index.php melalui URL
  $id = $_GET['id'];

  // Query untuk menampilkan data siswa berdasarkan ID yang dikirim
  $sql = $pdo->prepare("SELECT * FROM siswa WHERE id=:id");
  $sql->bindParam(':id', $id);
  $sql->execute(); // Eksekusi query insert
  $data = $sql->fetch(); // Ambil semua data dari hasil eksekusi $sql
  ?>

<div class="container">
    <img src="images/uva.png" alt="logo" width="150" height="150"  margin-left = "70px">
    <h1 class="form-title">Ubah data Penerimaan UVA ACADEMY</h1>
    
    <form method="post" action="proses_ubah.php?id=<?php echo $id; ?>" enctype="multipart/form-data">
        
      <!-- nis //-->
      <div class="main-user-info">
        <div class="user-input-box">
            <label for="nis">nis</label>
            <input type="text" name="nis" value="<?php echo $data['nis']; ?>">
        </div>

        <!-- nama //-->
        <div class="user-input-box">
            <label for="nama">nama</label>
            <input type="text" name="nama" value="<?php echo $data['nama']; ?>">
        </div>

          <!-- jenis kelamin //-->
          <div class="gender-details-box">
            <span class="gender-tittle">Jenis Kelamin</span>
            <div class="gender-category">
            <?php
              if($data['jenis_kelamin'] == "Laki-laki"){
                echo "<input type='radio' name='jenis_kelamin' value='laki-laki' checked='checked'> Laki-laki";
                echo "<input type='radio' name='jenis_kelamin' value='perempuan'> Perempuan";
              }else{
                echo "<input type='radio' name='jenis_kelamin' value='laki-laki'> Laki-laki";
                echo "<input type='radio' name='jenis_kelamin' value='perempuan' checked='checked'> Perempuan";
              }
              ?>
            </div>
        </div>         

        <!-- telp //-->
        <div class="user-input-box">
            <label for="telp">telp</label>
            <input type="text" name="telp" value="<?php echo $data['telp']; ?>">
        </div>

          <!-- alamat //-->
        <div class="user-input-box">
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat"> value="<?php echo $data['telp']; ?>">
        </div>  
        <!-- pas foto//-->

        <div class="file-input">

            <div class="mb-3">
                <label for="foto" class="form-label">Pas Foto</label>
                <input class="form-control" type="file" name="foto">
            </div>
        </div>

        <div class="form-submit-btn">
            <!-- <input type="submit" value="Submit"> -->
            <button type="submit" value="ubah" class="btn btn-primary">SUBMIT</button>

            <a href="index.php"><input type="button" value="Batal" class="btn btn-primary" ></a>

        </div>
        
    </form>
  </div>
</body>
</html>