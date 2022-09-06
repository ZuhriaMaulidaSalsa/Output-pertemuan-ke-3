
<?php

// ambil data file
$file = $_FILES['gambar']['name'];
$sementara = $_FILES['gambar']['tmp_name'];

// tentukan lokasi file akan dipindahkan
$upload = "images/";

// pindahkan file
$terupload = move_uploaded_file($sementara, $upload.$file);

if ($terupload) {
	echo "Nama : " . $_POST['Nama'];
	echo "<br> Nim : " . $_POST['NIM'];
    echo "<br> Upload berhasil!";
    echo "<br> Link: <a href='".$upload.$file."'>".$file."</a>";
} else {
    echo "Upload Gagal!";
}

?>