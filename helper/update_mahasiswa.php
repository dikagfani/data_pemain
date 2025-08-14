<?php
include 'koneksi.php';

//mengambil Nilai Post
$id = $_POST['id'];
$nama_pemain = $_POST['nama_pemain'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$klub = $_POST['klub'];
$nomor_punggung = $_POST['nomor_punggung'];

//query 
$query_update = "UPDATE pemain SET 
				nama_pemain='$nama_pemain',
				jenis_kelamin='$jenis_kelamin',
				klub='$klub',
				nomor_punggung='$nomor_punggung'
				WHERE id='$id'";
$update = mysqli_query($db, $query_update);

if ($update) {
	header("location: ../index.php");
} else {
	echo "gagal";
}

