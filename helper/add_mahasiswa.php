<?php
include 'koneksi.php';
//mengambil nilai post

$nama_pemain = $_POST['nama_pemain'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$klub = $_POST['klub'];
$nomor_punggung = $_POST['nomor_punggung'];

//query
$query_simpan = "INSERT INTO pemain (nama_pemain, jenis_kelamin, klub, nomor_punggung) 
				values ('$nama_pemain', '$jenis_kelamin', '$klub', '$nomor_punggung') ";

$simpan = mysqli_query($db, $query_simpan);

//cek
if ($simpan) {
	header("location: ../index.php");
} else {
	echo "gagal";
}
