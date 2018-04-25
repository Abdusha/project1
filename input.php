<!-- Fungsionalitas untuk input peminjaman ruangan dari halaman index.php -->

<?php 
	include "config.php";
	if (isset($_POST['submit'])) {
		$kode_ruang =  $_POST['kode_ruang'];
		$tanggal = $_POST['tanggal'];
		$waktu = $_POST['waktu'];
		$lama = $_POST['lama_pinjam'];
		$atas_nama = $_POST['name'];
		$nim = $_POST['nim'];
		$jurusan = $_POST['major'];
		$ket = $_POST['keterangan'];
		mysqli_query($conn,"INSERT INTO `pinjam` (`kode_ruangan`, `tanggal`, `jam`, `lama_pinjam`, `atas_nama`, `nim`, `jurusan`, `keterangan`) VALUES ('".$kode_ruang."', '".$tanggal."', '".$waktu."', '".$lama."', '".$atas_nama."', '".$nim."', '".$jurusan."', '".$ket."');");
		mysqli_query($conn,"INSERT INTO `konfirm` (`konfirmasi`) VALUES ('PROSES');");
	}

	header("location: http://localhost/projekan/index.php");
	// redirect ke halaman index.php
?>