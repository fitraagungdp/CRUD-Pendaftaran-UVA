<html>
<head>
  <title>Aplikasi CRUD dengan PHP</title>
  <link rel="stylesheet" href="styles.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <style>

      select{
        margin-left: 68px;
        /* margin-right: 20px */
      }
      .gender-details-box{
        margin-left: 8px;
      }
    </style>
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
    
    <form action="proses_ubah.php" method="POST" enctype="multipart/form-data">

      <!-- nama //-->
      <div class="user-input-box">
        <label for="nama">nama</label>
        <input type="nama"
                  id="nama"
                  name="nama"
                  placeholder="nama"/>
      </div>

        <!-- alamat //-->
      <div class="user-input-box">
        <label for="alamat">Alamat</label>
        <input type="text"
                id="alamat"
                name="alamat"
                placeholder="Alamat"></input>
      </div>  

        <!-- jenis kelamin //-->
        <div class="gender-details-box">
          <span class="gender-tittle">Jenis Kelamin</span>
          <div class="gender-category">
              <input type="radio" name="jenis_kelamin"  value="Laki-laki">
              <label for="LK">Laki-laki</label>
              <input type="radio" name="jenis_kelamin"  value="Perempuan">
              <label for="PR">Perempuan</label>
          </div>

      </div>         

      <!-- telp //-->
      <div class="user-input-box">
          <label for="agama">Agama: </label>
          <select name="agama" class="form-select" aria-label="Default select example">
              <option>Islam</option>
              <option>Kristen</option>
              <option>Hindu</option>
              <option>Budha</option>
              <option>Atheis</option>
          </select>
      </div>

            <!-- Sekolah Asal //-->
            <div class="user-input-box">
          <label for="sekolah">telp</label>
          <input type="text"
                  id="sekolah"
                  name="sekolah"
                  placeholder="sekolah"/>
      </div>

      <div class="form-submit-btn">
          <!-- <input type="submit" value="Submit"> -->
          <button type="submit" value="Simpan" class="btn btn-primary">SUBMIT</button>

          <a href="list_siswa.php"><input type="button" value="Batal" class="btn btn-primary" ></a>

      </div>

      </form>
  </div>
</body>
</html>