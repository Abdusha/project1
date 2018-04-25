<!-- Fungsionalitas untuk konfirmasi peminjaman oleh admin dari halaman wp-admin.php -->

<?php 
	include "config.php";
	if (isset($_POST['yes'])) {
		mysqli_query($conn,"UPDATE konfirm SET konfirmasi = 'DISETUJUI' WHERE id = '".$_POST['inputan']."'");
		$query = mysqli_query($conn,"SELECT * FROM pinjam WHERE id = '".$_POST['inputan']."'");
		$data = mysqli_fetch_array($query);
		mysqli_query($conn,"INSERT INTO `booked` (`kode_ruangan`, `tanggal`, `jam`, `lama_pinjam`, `atas_nama`, `nim`, `jurusan`) VALUES ('".$data['kode_ruangan']."', '".$data['tanggal']."', '".$data['jam']."', '".$data['lama_pinjam']."', '".$data['atas_nama']."', '".$data['nim']."', '".$data['jurusan']."');");
	}elseif (isset($_POST['no'])) {
		mysqli_query($conn,"UPDATE konfirm SET konfirmasi = 'DITOLAK' WHERE id = '".$_POST['inputan']."'");
	};

	header("location: http://localhost/projekan/wp-admin.php");
	// redirect ke halaman wp-admin.php
?>