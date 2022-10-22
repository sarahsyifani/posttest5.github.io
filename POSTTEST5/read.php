<?php 
   include('koneksi.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,600;1,400&display=swap" rel="stylesheet">
</head>
<body>
    <section class="form">
<center>
    <table border="1">
            <tr colspan="2" style="background-color: red;">
                    <td align="center" colspan="6"> <u> <b> DATA SISWA/I BARU </u></b></td>
            </tr>
            <tr>
                <th>No Induk Siswa</th>
                <th>Nama</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Kelas</th>
                <th>Aksi</th>
            </tr>
            <?php 
            $read = mysqli_query($koneksi, "SELECT * FROM students");
            if(mysqli_num_rows($read) > 0){
               while($row = mysqli_fetch_array($read)){
                  ?>
                     <tr>
                        <td> <?php echo $row['nis'] ?> </td>
                        <td> <?php echo $row['nama'] ?></td>
                        <td> <?php echo $row['tgl_lahir'] ?> </td>
                        <td> <?php echo $row['jenis_kelamin'] ?> </td>
                        <td> <?php echo $row['kelas'] ?> </td>
                        <td>
                           <a href="form.php">create</a>
                           <a href="update.php?nis_posttest5=<?php echo $row['nis']; ?>" class="btn update">Update</a>
                           <a href="delete.php?nis_posttest5=<?php echo $row['nis'];?>" class="btn delete">Delete</a>
                        </td>
                     </tr>
                  <?php
               }
            }
         ?>
           
        </table>
</center>
    </section>

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
</body>
</html>