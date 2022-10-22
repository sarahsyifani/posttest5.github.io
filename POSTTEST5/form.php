<?php 
   include('koneksi.php');

   if (isset($_POST["submit"])) {
       $nis = $_POST["nis"];
       $nama = $_POST["nama"];
       $tgl_lahir = $_POST["tgl_lahir"];
       $jenis_kelamin = $_POST["jenis_kelamin"];
       $kelas = $_POST["kelas"];
    //    var_dump($_POST);
       # code...

       
       $create = mysqli_query($koneksi,"INSERT INTO students VALUES(
            '".$nis."',
            '".$nama."',
            '".$tgl_lahir."',
            '".$jenis_kelamin."',
            '".$kelas."'
    
        )");

    
        if($create){
            ?>
            <script>
            alert("data berhasil ditambahkan");
            window.location=('read.php');
            </script>
            <?php
        } else {
            echo "gagal" . mysqli_error($koneksi);
        }

    }

   

   

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="form.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,600;1,400&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<section class="form">
    <h3> Pendaftaran Siswa/i Baru</h3>
    <p>Silakan isi form dibawah ini 
        <br>
    Sebelum submit, pastikan data yang anda isi sudah benar
    </p>
</section>
<div class="container">
        <h2 class="alert alert-success text-center mt-5 col-md-8">Forms Tambah Data</h2>
        <form action="" method="POST">
            <div class="form-group">
                <div class="row">
                    <div class="col-md-8">
                        <label for="id_barang">Nis:</label>
                        <input type="number" name="nis" class="form-control" placeholder="Masukan No Nis">
                    </div>
                </div>
            </div>
             <div class="form-group">
                <div class="row">
                    <div class="col-md-8">
                        <label for="nama">Nama:</label>
                        <input type="text" name="nama" class="form-control" placeholder="Masukan Nama">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-8">
                        <label for="tgl_lahir">Tanggal Lahir(yyyy-mm-dd):</label>
                        <input type="text" name="tgl_lahir" class="form-control" placeholder="Masukan Tanggal Lahir">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin: </label>
                <div class="row">
                    <div class="col-md-8">
                        <input type="radio" name="jenis_kelamin" value="Laki-Laki">Laki-Laki
                        <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-8">
                        <label for="kelas">Kelas:</label>
                        <input type="text" name="kelas" class="form-control" placeholder="Masukan Kelas">
                    </div>
                </div>
            </div>
            <button type="submit" name="submit"  class="btn btn-primary">Tambah</button>
        </form>
   </div>

<section class="footer">
        <h1> SMA NEGERI 1 </h1>
        <p> Jl. DI Panjaitan Gang Ketemu 3 Rt.01 No. 10. Kota Baru, Indonesia 
            <br>
            No. Telepon : 0548-99999 | E-mail : sman1@gmail.com
        </p>
</section>

<section class="bio">
    <div class="saya">
        <img src="image/sapaya.jpg">
     <div class="teks">
        <h3> Tentang Saya </h3>
        <p>Nama : Sarah Syifani 
            <br>
            NIM : 2109106131
            <br>
            Tempat Tanggal Lahir : Samarinda, 1 Oktober 2003
            <br>
            Instagram : @sarhsyfn_
            <br>
            E-mail : sarahsyifa34@gmail.com
        </p>
      </div>
    </div>
</section>
</section>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>