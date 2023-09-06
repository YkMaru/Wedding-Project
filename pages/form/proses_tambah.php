<?php

$uploadDir = '../uploads/'; // Direktori tujuan penyimpanan file

// Cek apakah file gambar yang diunggah adalah gambar
$nama_photo_pria = $_FILES['file_photo_pria']['name'];
$imageFileType = strtolower(pathinfo($uploadDir . basename($_FILES['file_photo_pria']['name']), PATHINFO_EXTENSION));
$allowedExtensions = array('jpg', 'jpeg', 'png', 'gif');

if(in_array($imageFileType, $allowedExtensions)) {
	// Pindahkan file ke direktori penyimpanan
	if(move_uploaded_file($_FILES['file_photo_pria']['tmp_name'], $uploadDir . basename($_FILES['file_photo_pria']['name']))) {

	} else {
		echo "Terjadi kesalahan saat mengunggah file.";
	}
} else {

}

// Cek apakah file gambar yang diunggah adalah gambar
$nama_photo_perempuan = $_FILES['file_photo_perempuan']['name'];
$imageFileType = strtolower(pathinfo($uploadDir . basename($_FILES['file_photo_perempuan']['name']), PATHINFO_EXTENSION));
$allowedExtensions = array('jpg', 'jpeg', 'png', 'gif');

if(in_array($imageFileType, $allowedExtensions)) {
	// Pindahkan file ke direktori penyimpanan
	if(move_uploaded_file($_FILES['file_photo_perempuan']['tmp_name'], $uploadDir . basename($_FILES['file_photo_perempuan']['name']))) {

	} else {
		echo "Terjadi kesalahan saat mengunggah file.";
	}
} else {

}


// Cek apakah file gambar yang diunggah adalah gambar
$background = $_FILES['background']['name'];
$imageFileType = strtolower(pathinfo($uploadDir . basename($_FILES['background']['name']), PATHINFO_EXTENSION));
$allowedExtensions = array('jpg', 'jpeg', 'png', 'gif');

if(in_array($imageFileType, $allowedExtensions)) {
	// Pindahkan file ke direktori penyimpanan
	if(move_uploaded_file($_FILES['background']['tmp_name'], $uploadDir . basename($_FILES['background']['name']))) {

	} else {
		echo "Terjadi kesalahan saat mengunggah file.";
	}
} else {

}

// Cek apakah file gambar yang diunggah adalah gambar
$logo = $_FILES['logo']['name'];
$imageFileType = strtolower(pathinfo($uploadDir . basename($_FILES['logo']['name']), PATHINFO_EXTENSION));
$allowedExtensions = array('jpg', 'jpeg', 'png', 'gif');

if(in_array($imageFileType, $allowedExtensions)) {
	// Pindahkan file ke direktori penyimpanan
	if(move_uploaded_file($_FILES['logo']['tmp_name'], $uploadDir . basename($_FILES['logo']['name']))) {

	} else {
		echo "Terjadi kesalahan saat mengunggah file.";
	}
} else {

}

// Cek apakah file gambar yang diunggah adalah gambar
$gambar1 = $_FILES['gambar1']['name'];
$imageFileType = strtolower(pathinfo($uploadDir . basename($_FILES['gambar1']['name']), PATHINFO_EXTENSION));
$allowedExtensions = array('jpg', 'jpeg', 'png', 'gif');

if(in_array($imageFileType, $allowedExtensions)) {
	// Pindahkan file ke direktori penyimpanan
	if(move_uploaded_file($_FILES['gambar1']['tmp_name'], $uploadDir . basename($_FILES['gambar1']['name']))) {

	} else {
		echo "Terjadi kesalahan saat mengunggah file.";
	}
} else {

}

// Cek apakah file gambar yang diunggah adalah gambar
$gambar2 = $_FILES['gambar2']['name'];
$imageFileType = strtolower(pathinfo($uploadDir . basename($_FILES['gambar2']['name']), PATHINFO_EXTENSION));
$allowedExtensions = array('jpg', 'jpeg', 'png', 'gif');

if(in_array($imageFileType, $allowedExtensions)) {
	// Pindahkan file ke direktori penyimpanan
	if(move_uploaded_file($_FILES['gambar2']['tmp_name'], $uploadDir . basename($_FILES['gambar2']['name']))) {

	} else {
		echo "Terjadi kesalahan saat mengunggah file.";
	}
} else {

}

// Cek apakah file gambar yang diunggah adalah gambar
$gambar3 = $_FILES['gambar3']['name'];
$imageFileType = strtolower(pathinfo($uploadDir . basename($_FILES['gambar3']['name']), PATHINFO_EXTENSION));
$allowedExtensions = array('jpg', 'jpeg', 'png', 'gif');

if(in_array($imageFileType, $allowedExtensions)) {
	// Pindahkan file ke direktori penyimpanan
	if(move_uploaded_file($_FILES['gambar3']['tmp_name'], $uploadDir . basename($_FILES['gambar3']['name']))) {

	} else {
		echo "Terjadi kesalahan saat mengunggah file.";
	}
} else {

}

// Cek apakah file gambar yang diunggah adalah gambar
$galery1 = $_FILES['galery1']['name'];
$imageFileType = strtolower(pathinfo($uploadDir . basename($_FILES['galery1']['name']), PATHINFO_EXTENSION));
$allowedExtensions = array('jpg', 'jpeg', 'png', 'gif');

if(in_array($imageFileType, $allowedExtensions)) {
	// Pindahkan file ke direktori penyimpanan
	if(move_uploaded_file($_FILES['galery1']['tmp_name'], $uploadDir . basename($_FILES['galery1']['name']))) {

	} else {
		echo "Terjadi kesalahan saat mengunggah file.";
	}
} else {

}
// Cek apakah file gambar yang diunggah adalah gambar
$galery2 = $_FILES['galery2']['name'];
$imageFileType = strtolower(pathinfo($uploadDir . basename($_FILES['galery2']['name']), PATHINFO_EXTENSION));
$allowedExtensions = array('jpg', 'jpeg', 'png', 'gif');

if(in_array($imageFileType, $allowedExtensions)) {
	// Pindahkan file ke direktori penyimpanan
	if(move_uploaded_file($_FILES['galery2']['tmp_name'], $uploadDir . basename($_FILES['galery2']['name']))) {

	} else {
		echo "Terjadi kesalahan saat mengunggah file.";
	}
} else {

}

// Cek apakah file gambar yang diunggah adalah gambar
$galery3 = $_FILES['galery3']['name'];
$imageFileType = strtolower(pathinfo($uploadDir . basename($_FILES['galery3']['name']), PATHINFO_EXTENSION));
$allowedExtensions = array('jpg', 'jpeg', 'png', 'gif');

if(in_array($imageFileType, $allowedExtensions)) {
	// Pindahkan file ke direktori penyimpanan
	if(move_uploaded_file($_FILES['galery3']['tmp_name'], $uploadDir . basename($_FILES['galery3']['name']))) {

	} else {
		echo "Terjadi kesalahan saat mengunggah file.";
	}
} else {

}

// Cek apakah file gambar yang diunggah adalah gambar
$galery4 = $_FILES['galery4']['name'];
$imageFileType = strtolower(pathinfo($uploadDir . basename($_FILES['galery4']['name']), PATHINFO_EXTENSION));
$allowedExtensions = array('jpg', 'jpeg', 'png', 'gif');

if(in_array($imageFileType, $allowedExtensions)) {
	// Pindahkan file ke direktori penyimpanan
	if(move_uploaded_file($_FILES['galery4']['tmp_name'], $uploadDir . basename($_FILES['galery4']['name']))) {

	} else {
		echo "Terjadi kesalahan saat mengunggah file.";
	}
} else {

}

// Cek apakah file gambar yang diunggah adalah gambar
$galery5 = $_FILES['galery5']['name'];
$imageFileType = strtolower(pathinfo($uploadDir . basename($_FILES['galery5']['name']), PATHINFO_EXTENSION));
$allowedExtensions = array('jpg', 'jpeg', 'png', 'gif');

if(in_array($imageFileType, $allowedExtensions)) {
	// Pindahkan file ke direktori penyimpanan
	if(move_uploaded_file($_FILES['galery5']['tmp_name'], $uploadDir . basename($_FILES['galery5']['name']))) {

	} else {
		echo "Terjadi kesalahan saat mengunggah file.";
	}
} else {

}

// Cek apakah file gambar yang diunggah adalah gambar
$galery6 = $_FILES['galery6']['name'];
$imageFileType = strtolower(pathinfo($uploadDir . basename($_FILES['galery6']['name']), PATHINFO_EXTENSION));
$allowedExtensions = array('jpg', 'jpeg', 'png', 'gif');

if(in_array($imageFileType, $allowedExtensions)) {
	// Pindahkan file ke direktori penyimpanan
	if(move_uploaded_file($_FILES['galery6']['tmp_name'], $uploadDir . basename($_FILES['galery6']['name']))) {

	} else {
		echo "Terjadi kesalahan saat mengunggah file.";
	}
} else {

}

// Cek apakah file gambar yang diunggah adalah gambar
$wishes1 = $_FILES['wishes1']['name'];
$imageFileType = strtolower(pathinfo($uploadDir . basename($_FILES['wishes1']['name']), PATHINFO_EXTENSION));
$allowedExtensions = array('jpg', 'jpeg', 'png', 'gif');

if(in_array($imageFileType, $allowedExtensions)) {
	// Pindahkan file ke direktori penyimpanan
	if(move_uploaded_file($_FILES['wishes1']['tmp_name'], $uploadDir . basename($_FILES['wishes1']['name']))) {

	} else {
		echo "Terjadi kesalahan saat mengunggah file.";
	}
} else {

}

// Cek apakah file gambar yang diunggah adalah gambar
$wishes2 = $_FILES['wishes2']['name'];
$imageFileType = strtolower(pathinfo($uploadDir . basename($_FILES['wishes2']['name']), PATHINFO_EXTENSION));
$allowedExtensions = array('jpg', 'jpeg', 'png', 'gif');

if(in_array($imageFileType, $allowedExtensions)) {
	// Pindahkan file ke direktori penyimpanan
	if(move_uploaded_file($_FILES['wishes2']['tmp_name'], $uploadDir . basename($_FILES['wishes2']['name']))) {

	} else {
		echo "Terjadi kesalahan saat mengunggah file.";
	}
} else {

}

// Cek apakah file gambar yang diunggah adalah gambar
$wishes3 = $_FILES['wishes3']['name'];
$imageFileType = strtolower(pathinfo($uploadDir . basename($_FILES['wishes3']['name']), PATHINFO_EXTENSION));
$allowedExtensions = array('jpg', 'jpeg', 'png', 'gif');

if(in_array($imageFileType, $allowedExtensions)) {
	// Pindahkan file ke direktori penyimpanan
	if(move_uploaded_file($_FILES['wishes3']['tmp_name'], $uploadDir . basename($_FILES['wishes3']['name']))) {

	} else {
		echo "Terjadi kesalahan saat mengunggah file.";
	}
} else {

}

$ID = mysqli_real_escape_string($KONEKSI,$_POST['Id']);
$PRIA = mysqli_real_escape_string($KONEKSI,$_POST['NamaPria']);
$DESKRIPSIPRIA = mysqli_real_escape_string($KONEKSI,$_POST['DeskripsiPria']);
$PEREMPUAN = mysqli_real_escape_string($KONEKSI,$_POST['NamaPerempuan']);
$DESKRIPSIPEREMPUAN = mysqli_real_escape_string($KONEKSI,$_POST['DeskripsiPerempuan']);
$KEPADA = mysqli_real_escape_string($KONEKSI,$_POST['KepadaYth']);
$TANGGAL = mysqli_real_escape_string($KONEKSI,$_POST['Tanggal']);
$AKAD = mysqli_real_escape_string($KONEKSI,$_POST['AkadNikah']);
$SYUKURAN = mysqli_real_escape_string($KONEKSI,$_POST['Syukuran']);
$AYAHPRIA = mysqli_real_escape_string($KONEKSI,$_POST['AyahPria']);
$IBUPRIA = mysqli_real_escape_string($KONEKSI,$_POST['IbuPria']);
$AYAHPEREMPUAN = mysqli_real_escape_string($KONEKSI,$_POST['AyahPerempuan']);
$IBUPEREMPUAN = mysqli_real_escape_string($KONEKSI,$_POST['IbuPerempuan']);
$PETA = mysqli_real_escape_string($KONEKSI,$_POST['Peta']);
$GEDUNG = mysqli_real_escape_string($KONEKSI,$_POST['Gedung']);
$NEGARA = mysqli_real_escape_string($KONEKSI,$_POST['Negara']);
$KOTA = mysqli_real_escape_string($KONEKSI,$_POST['Kota']);
$HARI = mysqli_real_escape_string($KONEKSI,$_POST['Hari']);
$RESEPSI = mysqli_real_escape_string($KONEKSI,$_POST['Resepsi']);
$NAMA1 = mysqli_real_escape_string($KONEKSI,$_POST['Nama1']);
$NAMA2 = mysqli_real_escape_string($KONEKSI,$_POST['Nama2']);
$NAMA3 = mysqli_real_escape_string($KONEKSI,$_POST['Nama3']);
$NAMA4 = mysqli_real_escape_string($KONEKSI,$_POST['Nama4']);
$NAMA5 = mysqli_real_escape_string($KONEKSI,$_POST['Nama5']);
$NAMA6 = mysqli_real_escape_string($KONEKSI,$_POST['Nama6']);
$NAMA7 = mysqli_real_escape_string($KONEKSI,$_POST['Nama7']);
$NAMA8 = mysqli_real_escape_string($KONEKSI,$_POST['Nama8']);
$SERVICES1 = mysqli_real_escape_string($KONEKSI,$_POST['Services1']);
$SERVICES2 = mysqli_real_escape_string($KONEKSI,$_POST['Services2']);
$SERVICES3 = mysqli_real_escape_string($KONEKSI,$_POST['Services3']);
$DESKRIPSI1 = mysqli_real_escape_string($KONEKSI,$_POST['Deskripsi1']);
$DESKRIPSI2 = mysqli_real_escape_string($KONEKSI,$_POST['Deskripsi2']);
$DESKRIPSI3 = mysqli_real_escape_string($KONEKSI,$_POST['Deskripsi3']);
$HARAPAN1 = mysqli_real_escape_string($KONEKSI,$_POST['Harapan1']);
$HARAPAN2 = mysqli_real_escape_string($KONEKSI,$_POST['Harapan2']);
$HARAPAN3 = mysqli_real_escape_string($KONEKSI,$_POST['Harapan3']);
$PHOTOPRIA = mysqli_real_escape_string($KONEKSI,$nama_photo_pria);
$PHOTOPEREMPUAN = mysqli_real_escape_string($KONEKSI,$nama_photo_perempuan);
$BACKGROUND = mysqli_real_escape_string($KONEKSI,$background);
$LOGO = mysqli_real_escape_string($KONEKSI,$logo);
$GAMBAR1 = mysqli_real_escape_string($KONEKSI,$gambar1);
$GAMBAR2 = mysqli_real_escape_string($KONEKSI,$gambar2);
$GAMBAR3 = mysqli_real_escape_string($KONEKSI,$gambar3);
$GALERY1 = mysqli_real_escape_string($KONEKSI,$galery1);
$GALERY2 = mysqli_real_escape_string($KONEKSI,$galery2);
$GALERY3 = mysqli_real_escape_string($KONEKSI,$galery3);
$GALERY4 = mysqli_real_escape_string($KONEKSI,$galery4);
$GALERY5 = mysqli_real_escape_string($KONEKSI,$galery5);
$GALERY6 = mysqli_real_escape_string($KONEKSI,$galery6);
$WISHES1 = mysqli_real_escape_string($KONEKSI,$wishes1);
$WISHES2 = mysqli_real_escape_string($KONEKSI,$wishes2);
$WISHES3 = mysqli_real_escape_string($KONEKSI,$wishes3);


if ($ID == "" || $PRIA =="" || $DESKRIPSIPRIA =="" || $PEREMPUAN =="" || $DESKRIPSIPEREMPUAN =="" ||
    $TANGGAL =="" || $AKAD =="" || $SYUKURAN =="" || $AYAHPRIA =="" || 
    $IBUPRIA =="" || $AYAHPEREMPUAN =="" || $IBUPEREMPUAN =="" || $PETA =="" ||
    $GEDUNG =="" || $NEGARA =="" || $KOTA =="" || $HARI =="" || $RESEPSI =="" || $NAMA1 =="" || $NAMA2 =="" || 
	$NAMA3 =="" || $NAMA4 ==""|| $NAMA5 =="" || $NAMA6 =="" || $NAMA7 =="" || $NAMA8 =="") {
    echo "<div class = 'alert alert-sucses'>
             <center>
                 <strong>EROR</strong> Silahkan isi semua kolom
             </center>
          </div>
          <meta http-equiv='refresh' content=2>";die;
 } else {
     $QUERY = mysqli_query($KONEKSI, "UPDATE tbl_form SET 
     nama_pria = '$PRIA',
     deskripsi_pria = '$DESKRIPSIPRIA',
     nama_perempuan = '$PEREMPUAN',
     deskripsi_perempuan = '$DESKRIPSIPEREMPUAN',
     kepada_yth = '$KEPADA',
     tanggal = '$TANGGAL',
     akad_nikah = '$AKAD',
     syukuran = '$SYUKURAN',
     nama_ayah_pria = '$AYAHPRIA',
     nama_ibu_pria = '$IBUPRIA',
     nama_ayah_perempuan = '$AYAHPEREMPUAN',
     nama_ibu_perempuan = '$IBUPEREMPUAN',
	 peta_lokasi = '$PETA',
	 gedung = '$GEDUNG',
	 negara = '$NEGARA',
	 kota = '$KOTA',
	 hari = '$HARI',
	 resepsi = '$RESEPSI',
     mengundang1 = '$NAMA1',
     mengundang2 = '$NAMA2',
     mengundang3 = '$NAMA3',
     mengundang4 = '$NAMA4',
     mengundang5 = '$NAMA5',
     mengundang6 = '$NAMA6',
     mengundang7 = '$NAMA7',
     mengundang8 = '$NAMA8',
	 photo_pria = '$PHOTOPRIA',
	 photo_perempuan = '$PHOTOPEREMPUAN',
     logo = '$LOGO',
	 background = '$BACKGROUND',
     gambar1 = '$GAMBAR1',
     gambar2 = '$GAMBAR2',
     gambar3 = '$GAMBAR3',
     galery1 = '$GALERY1',
     galery2 = '$GALERY2',
     galery3 = '$GALERY3',
     galery4 = '$GALERY4',
     galery5 = '$GALERY5',
	 galery6 = '$GALERY6',
     services1 = '$SERVICES1',
     services2 = '$SERVICES2',
     services3 = '$SERVICES3',
	 deskripsi1 = '$DESKRIPSI1',
     deskripsi2 = '$DESKRIPSI2',
     deskripsi3 = '$DESKRIPSI3',
	 harapan1 = '$HARAPAN1',
     harapan2 = '$HARAPAN2',
     harapan3 = '$HARAPAN3',
     foto_wishes1 = '$WISHES1',
     foto_wishes2 = '$WISHES2',
     foto_wishes3 = '$WISHES3' WHERE id_undangan='$ID';") or die ("Gagal Melakukan Tambah data".mysqli_connect_error($QUERY));
    echo "<div class = 'alert alert-sucses'>
             <center>
                 <strong>Berhasil</strong> Halaman Akan di Redirect Otomatis
             </center>
         </div>
         ";
 }
?>

<meta http-equiv="refresh" content="1; url=../wedding/index.php?id=<?php echo $ID; ?>">
