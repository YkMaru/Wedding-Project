<?php
date_default_timezone_set("Asia/Jakarta");
$date = date("Y-m-d");

if (@$_POST['Tambah']) {
  include "proses_tambah.php";
}
  //if (@$_POST['upload']) {
  //  include "upload.php";
  //}

  $ID = "1";
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_pernikahan";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM tbl_form WHERE id_undangan ='1'";

// Step 3: Execute the query
$result = $conn->query($sql);

// Step 4: Fetch and echo the data
$pria = "Default Name";
$perempuan = "Default Name"; // Nilai default jika data tidak ditemukan

if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
  $pria = $row["nama_pria"];
  $perempuan = $row["nama_perempuan"];
  $tanggal = $row["tanggal"];
}

// Step 5: Close the database connection
$conn->close();

?>

<form action="" method="post" enctype="multipart/form-data">
<div class="container-fluid">
      <div class="form-group">
        <input type="hidden" name="Id" class="form-control" id="Id" value="<?php echo $ID;?>">
      </div>
        <!-- SELECT2 EXAMPLE -->
        <span class="span"><center>Background & Logo</center></span>
            <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                    <input type="file" name="background" class="form-control" >
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                    <input type="file" name="logo" class="form-control">
                  </div>
             </div>
             </div><hr>  
        <span class="span"><center>Nama Mempelai</center></span>
            <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" name="NamaPria" class="form-control" id="NamaPria" placeholder="Nama Pria" require>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" name="NamaPerempuan" class="form-control" id="NamaPerempuan" placeholder="Nama Perempuan" require>
                  </div>
             </div>
             </div><hr>
             <span class="span"><center>Foto Pria dan Wanita</center></span>
            <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                    <input type="file" name="file_photo_pria" class="form-control" require>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                    <input type="file" name="file_photo_perempuan" class="form-control" require>
                  </div>
             </div>
             </div><hr>  
            <span class="span"><center>Deskripsi Pria & Perempuan</center></span>
            <div class="row">
            <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" name="DeskripsiPria" class="form-control" id="DeskripsiPria" placeholder="Deskripsi Pria" require>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" name="DeskripsiPerempuan" class="form-control" id="DeskripsiPerempuan" placeholder="Deskripsi Perempuan" require>
                  </div>
              </div>
            </div><hr>  
            <span class="span"><center>Kepada Yth, Tanggal</center></span>
            <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" name="KepadaYth" class="form-control" id="KepadaYth" placeholder="Kepada Yth" require>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                    <input type="date" name="Tanggal" class="form-control" require>
                  </div>
              </div>
            </div><hr>
            <span class="span"><center>Our Story (Foto 1/2/3)</center></span>
            <div class="row">
              <div class="col-md-4">
                  <div class="form-group">
                    <input type="file" name="gambar1" class="form-control" require>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="form-group">
                    <input type="file" name="gambar2" class="form-control" require>
                  </div>
             </div>
             <div class="col-md-4">
                  <div class="form-group">
                    <input type="file" name="gambar3" class="form-control" require>
                  </div>
              </div>
             </div><hr>
            <span class="span"><center>Deskripsi Our Story (1/2/3)</center></span>
            <div class="row">
              <div class="col-md-4">
                  <div class="form-group">
                    <input type="text" name="Deskripsi1" class="form-control" id="Deskripsi1" placeholder="Deskripsi 1" require>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="form-group">
                    <input type="text" name="Deskripsi2" class="form-control" id="Deskripsi2" placeholder="Deskripsi 2" require>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="form-group">
                    <input type="text" name="Deskripsi3" class="form-control" id="Deskripsi3" placeholder="Deskripsi 3" require>
                  </div>
              </div>
            </div><hr>
            <span class="span"><center>Wedding Gallery (Foto 1/2/3/4/5/6)</center></span>
            <div class="row">
              <div class="col-md-4">
                  <div class="form-group">
                    <input type="file" name="galery1" class="form-control" require>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="form-group">
                    <input type="file" name="galery2" class="form-control" require>
                  </div>
             </div>
             <div class="col-md-4">
                  <div class="form-group">
                    <input type="file" name="galery3" class="form-control" require>
                  </div>
              </div>
              </div>
              <br>
              <div class="row">
              <div class="col-md-4">
                  <div class="form-group">
                    <input type="file" name="galery4" class="form-control" require>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="form-group">
                    <input type="file" name="galery5" class="form-control" require>
                  </div>
             </div>
             <div class="col-md-4">
                  <div class="form-group">
                    <input type="file" name="galery6" class="form-control" require>
                  </div>
              </div>
             </div><hr>
             <span class="span"><center>Wishes (Foto 1/2/3)</center></span>
            <div class="row">
              <div class="col-md-4">
                  <div class="form-group">
                    <input type="file" name="wishes1" class="form-control" require>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="form-group">
                    <input type="file" name="wishes2" class="form-control" require>
                  </div>
             </div>
             <div class="col-md-4">
                  <div class="form-group">
                    <input type="file" name="wishes3" class="form-control" require>
                  </div>
              </div>
             </div><hr>
            <span class="span"><center>Services</center></span>
            <div class="row">
              <div class="col-md-4">
                  <div class="form-group">
                    <input type="text" name="Services1" class="form-control" id="Services1" placeholder="Services 1" require>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="form-group">
                    <input type="text" name="Services2" class="form-control" id="Services2" placeholder="Services 2" require>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="form-group">
                    <input type="text" name="Services3" class="form-control" id="Services3" placeholder="Services 3" require>
                  </div>
              </div>
            </div><hr>
            <span class="span"><center>Harapan</center></span>
            <div class="row">
              <div class="col-md-4">
                  <div class="form-group">
                    <input type="text" name="Harapan1" class="form-control" id="Harapan 1" placeholder="Harapan 1" require>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="form-group">
                    <input type="text" name="Harapan2" class="form-control" id="Harapan 2" placeholder="Harapan 2" require>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="form-group">
                    <input type="text" name="Harapan3" class="form-control" id="Harapan 3" placeholder="Harapan 3" require>
                  </div>
              </div>
            </div><hr>
            <span class="span"><center>Akad Nikah, Syukuran, Resepsi</center></span>
            <div class="row">
              <div class="col-md-4">
                  <div class="form-group">
                    <input type="time" name="AkadNikah" class="form-control" id="AkadNikah" placeholder="Dari jam berapa sampai jam berapa" require>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="form-group">
                    <input type="text" name="Syukuran" class="form-control" id="Syukuran" placeholder="Ayat-ayat Qur'an" require>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="form-group">
                    <input type="time" name="Resepsi" class="form-control" id="Resepsi" placeholder="Dari jam berapa sampai jam berapa" require>
                  </div>
              </div>
            </div><hr>
            <span class="span"><center>Negara, Kota, Tempat, Hari</center></span>
            <div class="row">
              <div class="col-md-3">
                  <div class="form-group">
                    <input type="text" name="Negara" class="form-control" id="Negara" placeholder="Negara" require>
                  </div>
              </div>
              <div class="col-md-3">
                  <div class="form-group">
                    <input type="text" name="Kota" class="form-control" id="Kota" placeholder="Kota" require>
                  </div>
              </div>
              <div class="col-md-3">
                  <div class="form-group">
                    <input type="text" name="Gedung" class="form-control" id="Gedung" placeholder="Tempat" require>
                  </div>
              </div>
              <div class="col-md-3">
                  <div class="form-group">
                    <input type="text" name="Hari" class="form-control" id="Hari" placeholder="Hari" require>
                  </div>
              </div>
            </div><hr>
            <span class="span"><center>Keluargan Pria</center></span>
            <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" name="AyahPria" class="form-control" id="AyahPria" placeholder="Ayah Pria" require>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" name="IbuPria" class="form-control" id="IbuPria" placeholder="Ibu Pria" require>
                  </div>
              </div>
            </div><br>
            <span class="span"><center>Keluarga Perempuan</center></span>
            <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" name="AyahPerempuan" class="form-control" id="AyahPerempuan" placeholder="Ayah Perempuan" require>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" name="IbuPerempuan" class="form-control" id="IbuPerempuan" placeholder="Ibu Perempuan" require>
                  </div>
              </div>
            </div><hr>
            <span class="span"><center>Peta Lokasi</center></span>
            <div class="row">
              <div class="col-md-12">
                  <div class="form-group">
                    <input type="text" name="Peta" class="form-control" id="Peta" placeholder="Masukkan Embed Link" require>
                  </div>
              </div>
            </div><hr>
            <span class="span"><center>Turut Mengundang Keluarga Pria</center></span><br>
            <div class="row">
              <div class="col-md-3">
                  <div class="form-group">
                    <input type="text" name="Nama1" class="form-control" id="Nama1" placeholder="Nama 1" require>
                  </div>
              </div>
              <div class="col-md-3">
                  <div class="form-group">
                    <input type="text" name="Nama2" class="form-control" id="Nama2" placeholder="Nama 2" require>
                  </div>
              </div>
              <div class="col-md-3">
                  <div class="form-group">
                    <input type="text" name="Nama3" class="form-control" id="Nama3" placeholder="Nama 3" require>
                  </div>
              </div>
              <div class="col-md-3">
                  <div class="form-group">
                    <input type="text" name="Nama4" class="form-control" id="Nama4" placeholder="Nama 4" require>
                  </div>
              </div>
            </div><br>
            <span class="span"><center>Turut Mengundang Keluarga Perempuan</center></span><br>
            <div class="row">
              <div class="col-md-3">
                  <div class="form-group">
                    <input type="text" name="Nama5" class="form-control" id="Nama5" placeholder="Nama 5" require>
                  </div>
              </div>
              <div class="col-md-3">
                  <div class="form-group">
                    <input type="text" name="Nama6" class="form-control" id="Nama6" placeholder="Nama 6" require>
                  </div>
              </div>
              <div class="col-md-3">
                  <div class="form-group">
                    <input type="text" name="Nama7" class="form-control" id="Nama7" placeholder="Nama 7" require>
                  </div>
              </div>
              <div class="col-md-3">
                  <div class="form-group">
                    <input type="text" name="Nama8" class="form-control" id="Nama8" placeholder="Nama 8" require>
                  </div>
              </div>
            </div><hr>
            <div class="card-footer">
      <input type = "submit" name = "Tambah" class = "btn btn-primary"></input>
      <input type = "reset" name = "Hapus" class = "btn btn-danger" value = "Reset"></input>
      <a href = "index.php?page=pengguna" nama ="Cancel" class = "btn btn-warning">Cancel</a>
    </div>       
</div>
</form>