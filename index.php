<?php require 'koneksi.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/css/style.css">
  <title>MUH. ARIF F I</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-light">

<!-- bagian header -->
  <header>
    <!-- side bar -->
    <input type="checkbox" name="check" id="check">

    <div class="sidebar">
      <ul>
          <li><a href="#home">Home</a></li>
          <li><a href="#data-diri">Data Diri</a></li>
          <li><a href="#akademik">Akademik</a></li>
          <li><a href="#komentar">Komentar</a></li>
      </ul>

      
    </div>

    <div class="container">
      <h2><a href="#">muh. arif f i</a></h2>

      <ul>
          <li><a href="#home">Home</a></li>
          <li><a href="#data-diri">Data Diri</a></li>
          <li><a href="#akademik">Akademik</a></li>
          <li><a href="#komentar">Komentar</a></li>
      </ul>

      <!-- menu mobile -->
      <label for="check" class="mobile-menu"><i class="fa fa-solid fa-bars fa-2x"></i></label>
    </div>
    
  </header>

  <!-- banner -->
  <section class="banner" id="home">
    <div class="container">
      <img src="assets/img/WhatsApp Image 2022-10-15 at 14.46.25.jpeg" alt="" srcset="">
      <h1>Hai... <br>
          Saya adalah seorang <span class="efek-ketik"></span>
      </h1>
      <p>Selamat datang di website saya!</p>
    </div>

  </section>

  <div class="content">
      <!-- Data diri -->

    <section class="data-diri" id="data-diri">

      <div class="container">
        <div class="box-border">
          <h3>Data Diri<div class="bottom"></div></h3>

          <div class="box">
            
            <table class="table-datadiri">
              <tr>
                <td>Nama</td>
                <td>: MUH. ARIF FAUZI IDRIS</td>
              </tr>
              <tr>
                <td>Tempat Tanggal Lahir</td>
                <td>: Bogor, 1999</td>
              </tr>
              <tr>
                <td>Alamat</td>
                <td>: Bogor Jawa Barat Indonesia</td>
              </tr>
              <tr>
                <td>Jenis Kelamin</td>
                <td>: Laki-laki</td>
              </tr>
              <tr>
                <td>Agama</td>
                <td>: Islam</td>
              </tr>
              <tr>
                <td>Pendidikan</td>
                <td>: SMK (TKR)</td>
              </tr>
              <tr>
                <td>Email</td>
                <td>: muhariffi@gmail.com</td>
              </tr>
              <tr>
                <td>No Telepon</td>
                <td>: 08978585446</td>
              </tr>
            </table>
          </div>
        </div>
      </div>

      </section>

      <!-- akademik -->
      <section class="akademik" id="akademik">

      <div class="container">
        <div class="box-border">
          <h3>Akademik<div class="bottom"></div></h3>

          <div class="box">
            
            <table class="table-akademik">
              <thead>
                <tr>
                  <th>Nama Sekolah</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>SDN 2 Kragilan (2011)</td>
                  <td>LULUS</td>
                </tr>
                <tr>
                  <td>MTS Muhammadiya 1 Gemolong (2014)</td>
                  <td>LULUS</td>
                </tr>
                <tr>
                  <td>SMK N 1 Kalijambe (2017)</td>
                  <td>LULUS</td>
                </tr>
                <tr>
                  <td>Universitas Bina Sarana Informatika (2022)</td>
                  <td>Ongoing</td>
                </tr>
              </tbody>
              
            </table>
          </div>
        </div>
      </div>

      </section>
    </div>

  <!-- komentar -->
  <section class="komentar" id="komentar">

    <div class="container" >
      <div class="input-komentar">
          <h3>Komentar<div class="bottom"></div></h3>

          <div class="box">
            
            <form action="" method="post">
              <table class="table-komentar">
                <label for="">Komentar Anda Sangat Kami Butuhkan Untuk <br> Meningkatkan Kualitas Situs Kami</label>
                <tr>
                  <td><label for="nama">Nama</label></td>
                  <td>:</td>
                  <td><input required type="text" name="nama" id="nama" placeholder="Masukkan Nama Anda" class="input-control"></td>
                </tr>
                <tr>
                  <td><label for="email">Email</label></td>
                  <td>:</td>
                  <td><input required type="text" name="email" id="email" placeholder="Masukkan Email Anda" class="input-control"></td>
                </tr>
                <tr>
                  <td><label for="komentar">Komentar</label></td>
                  <td>:</td>
                  <td><textarea required name="komentar" id="komentar" cols="50" rows="3" placeholder="Tulis Komentar Anda disini..." class="input-control"></textarea></td>
                </tr>
                <tr>
                  <td colspan="3">
                    <input type="submit" value="Submit" class="btn" name="submit"> 
                    <input type="reset" value="Reset" class="btn">
                  </td>
                </tr>
              </table>
            </form>
            <?php 
              if(isset($_POST['submit'])) {
                $nama = $_POST['nama'];
                $email = $_POST['email'];
                $komentar = $_POST['komentar'];

                $query_add = mysqli_query($conn, "INSERT INTO komentar
                VALUES
                (null,
                '$nama',
                '$email',
                '$komentar')");

                if(!isset($query_add)) {
                  echo 'Gagal'.mysqli_error($conn);
                }

              }   
            ?>
          </div>
      </div>
    </div>

    <div class="container">
      <div class="dft-komentar">
        <h3>Daftar Komentar<div class="bottom"></div></h3>
        
        
        <div class="box">
            <table class="table-komentar table-dft">
              <?php 
              

                $cek = mysqli_query($conn, "SELECT * FROM komentar ORDER BY id DESC");

                $data = mysqli_num_rows($cek);

                if($data > 0) {
                  while($d= mysqli_fetch_array($cek)) { ?>

                  <tr>
                    <th class="th"><?= $d['nama']. ' ('.$d['email'].')'?></th>
                  </tr>
                  <tr>
                    <td class="td"><?= $d['komentar']?></td>
                  </tr>

              <?php }} else { ?>

                  <h4>Komentar Tidak Ada</h4>
                  
               <?php } ?>
            </table>
        </div>
      </div>
    </div>

  </section>


<script src="assets/script/script.js"></script>

</body>
</html>