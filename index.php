<?php require 'koneksi.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MUH. ARIF</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-light">

<!-- bagian header -->
  <header>
    <!-- side bar -->

    <div class="sidebar" id="mobile">
      <span onclick="hideMobileMenu()">Close</span>
      <ul>
          <li onclick="hideMobileMenu()"><a href="#home">Home</a></li>
          <li onclick="hideMobileMenu()"><a href="#data-diri">Data Diri</a></li>
          <li onclick="hideMobileMenu()"><a href="#akademik">Akademik</a></li>
          <li onclick="hideMobileMenu()"><a href="#komentar">Komentar</a></li>
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
      <div class="mobile-menu">
        <a href="#" onclick="showMobileMenu()"><i class="fa fa-solid fa-bars fa-2x"></i></a>
      </div>
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

      <!-- Data diri -->

    <section class="border-bottom data-diri" id="data-diri">

      <div class="container">
          <div class="header-content">
            <h3>Data Diri</h3>
          </div>
          <div class="box">
            <div class="col-2">
              
              <table class="table">
                <label for="">Profil Data Diri</label>
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

            <div class="col-2">
              
              <table class="table">
                <label for="">Profil Kuliah</label>
                <tr>
                  <td>Nama Kuliah</td>
                  <td>: Universitas Bina Sarana Informatika</td>
                </tr>
                <tr>
                  <td>NIM</td>
                  <td>: 19215081</td>
                </tr>
                <tr>
                  <td>Kelas</td>
                  <td>: 19.2B.13</td>
                </tr>
                <tr>
                  <td>Jurusan</td>
                  <td>: Sistem Informasi</td>
                </tr>
                <tr>
                  <td>Pendidikan</td>
                  <td>: Strata 1</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
    </section>

      <!-- Akademik -->

    <section class="border-bottom akademik" id="akademik">

      <div class="container">
     
          <div class="header-content">
            <h3>Akademik</h3>
          </div>

          <div class="box">
          <div class="col-2">
            
            <table class="table">
              <label for="">Profil Kelulusan</label>
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

          <div class="col-2">
            
            <table class="table">
              <label for="">Skills</label>

                <div class="box-skill">
                    <h3>HTML</h3> 
                    <div class="bar">
                      <span class="nilai nilai-75">75%</span>
                    </div>
                   
                    <h3>CSS</h3>
                    <div class="bar">
                      <span class="nilai nilai-85">85%</span>
                    </div>
                   
                    <h3>PHP</h3> 
                    <div class="bar">
                      <span class="nilai nilai-60">60%</span>
                    </div>
              
                    <h3>JAVA SCRIPT</h3> 
                    <div class="bar">
                      <span class="nilai nilai-40">40%</span>
                    </div>
               
                </div>
              
              </table>
            </div>
          </div>

      </div>

    </section>

     <!-- komentar -->

    <section class="komentar" id="komentar">

      <div class="container">
          <div class="header-content">
            <h3>Komentar</h3>
          </div>

          <div class="box">
            <div class="col-2">
              
              <form action="" method="post">
                <table class="table">
                  <label for="">Input Komentar</label>
                  <br>
                  <br>
                    <p class="label"> Komentar Anda Sangat Kami Butuhkan Untuk <br> Meningkatkan Kualitas Situs Kami</p>
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
                    <td colspan="3" >
                      <input type="submit" value="Submit" class="btn margin-left" name="submit"> 
                      <input type="reset" value="Reset" class="btn">
                    </td>
                  </tr>
                </table>
              </form>
              <?php 
                if(isset($_POST['submit'])) {
                  $nama = addslashes(htmlspecialchars(ucwords($_POST['nama'])));
                  $email = addslashes(htmlspecialchars($_POST['email']));
                  $komentar = addslashes(htmlspecialchars($_POST['komentar']));

                  $query_add = mysqli_query($conn, "INSERT INTO komentar
                  VALUES
                  (null,
                  '$nama',
                  '$email',
                  '$komentar',
                  null)");

                  if(!isset($query_add)) {
                    echo 'Gagal'.mysqli_error($conn);
                  }

                }   
              ?>
            </div>

            <div class="col-2 scroll" >
 
                <label for="">Tampilan Komentar</label>
                <?php 
                
                  $cek = mysqli_query($conn, "SELECT * FROM komentar ORDER BY id DESC");

                  $data = mysqli_num_rows($cek);

                  if($data > 0) {
                    while($d= mysqli_fetch_array($cek)) { ?>
                      <div class="box-komentar">
                        <small><?= date('d/m/Y', strtotime($d['create_at']) ) ?></small>
                        <h3><?= $d['nama']. ' ('.$d['email'].')'?></h3>
                      
                        <p><?= substr($d['komentar'], 0, 90) ?></p>
                      </div>

                <?php }} else { ?>
                  <div class="center">
                        <h4>Komentar Tidak Ada</h4>
                  </div>
                    
                <?php } ?>
                
            </div>
          </div>
      </div>

      </section>

<div class="footer">
  Copyright &copy; 2022, Muh Arif
</div>




<script src="assets/script/script.js"></script>

</body>
</html>