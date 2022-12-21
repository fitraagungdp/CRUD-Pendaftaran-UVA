<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Seleksi Kementrian</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <style>
        body {
            background-image: url('images/backgorund2.jpg');
        }
        h1{
            color: whitesmoke;
            text-align: center;
        }
        input{
            margin:10px
        }
        .signup_link{
            margin: 30px 0;
            text-align: center;
            font-size: 16px;
            color: whitesmoke;
            margin-right: 3px;
        }
        .signup_link a{
            color: #2691d9;
            text-decoration: none;
        }

        .signup_link a:hover{
            text-decoration: underline;
        }
        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            /* width: 50%; */
        }

    </style>  

</head>
<body>
    <div class="container">
        <h3>    <img src="images/uva.png" alt="logo" width="400" height="400"  class="center" ></h3> 
        <h1 class="form-title">Seleksi Pegawai Baru Kementrian Kelautan dan Perikanan</h1>
        <form action="#">
            <!-- sign up //-->
            <div class="signup_link">
                Don't have an account?<a href="form_simpan.php"><input type="button" value="Daftar" class="btn btn-primary" ></a>
            </div>

            <!-- Lihat Data -->
            <div class="signup_link">
                See Data?<a href="list_siswa.php"><input type="button" value="List Data" class="btn btn-primary" ></a>
            </div>
            </div>
            
        </form>
    </div>

    <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran anda berhasil silahkan ditunggu info selanjutnya";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
    <?php endif; ?>

</body>
</html>