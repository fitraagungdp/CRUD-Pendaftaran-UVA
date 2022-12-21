
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>Seleksi Kementrian</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</head>
<body>
  <div class="container">
    <img src="images/uva.png" alt="logo" width="150" height="150"  margin-left = "70px">
    <h1 class="form-title">Penerimaan UVA ACADEMY</h1>
    
    <form action="proses_simpan.php" method="POST" enctype="multipart/form-data">
        
      <!-- nis //-->
      <div class="main-user-info">
        <div class="user-input-box">
            <label for="nis">nis</label>
            <input type="text"
                    id="nis"
                    name="nis"
                    placeholder="nis"/>
        </div>

        <!-- nama //-->
        <div class="user-input-box">
            <label for="nama">nama</label>
            <input type="nama"
                    id="nama"
                    name="nama"
                    placeholder="nama"/>
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
            <label for="telp">telp</label>
            <input type="text"
                    id="telp"
                    name="telp"
                    placeholder="telp"/>
        </div>

          <!-- alamat //-->
        <div class="user-input-box">
            <label for="alamat">Alamat</label>
            <input type="text"
                    id="alamat"
                    name="alamat"
                    placeholder="Alamat"></input>
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
            <button type="submit" value="Simpan" class="btn btn-primary">SUBMIT</button>

            <a href="index.php"><input type="button" value="Batal" class="btn btn-primary" ></a>

        </div>
        
    </form>
  </div>
</body>
</html>