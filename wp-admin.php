<!DOCTYPE html>
<?php include "config.php"; ?>
<html>
<head>
	<!-- load bootstrap -->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- end load bootstrapcd -->
	<style>
		.aw{
			width: 100px;
		}
	</style>

	<title>Cek Proses</title>
</head>
<?php 
	$i = 1;
	$query = mysqli_query($conn, "SELECT * FROM pinjam INNER JOIN konfirm ON pinjam.id = konfirm.id;");
?>
<body>
	<div>
		<!-- nav -->
		<nav id="mainNav" class="navbar navbar-default">
        	<div class="container">
            	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                	<ul class="nav navbar-nav">
                    		<li  class="active"><a href="wp-admin.php">Admin</a></li>
                	</ul>
            	</div>
        	</div>
   		</nav>
		<!-- nav close -->
	</div>
	<div class="container">
		<table class="table" >
			<thead>
				<tr>
					<th style="width: 40px; text-align: center;">No.</th>
					<th style="width: 100px; text-align: center;">Kode Ruangan</th>
					<th style="width: 100px; text-align: center;">Tanggal Peminjaman</th>
					<th style="width: 100px; text-align: center;">Waktu Pinjam</th>
					<th style="width: 100px; text-align: center;">Lama Pinjam</th>
					<th style="width: 100px; text-align: center;">Nama Peminjam</th>
					<th style="width: 100px; text-align: center;">NIM</th>
					<th style="width: 100px; text-align: center;">Jurusan</th>
					<th style="width: 500px; text-align: center;">Keterangan</th>
					<th style="width: 500px; text-align: center;">Waktu Input</th>
					<th style="width: 100px; text-align: center;">Konfirmasi?</th>
					<th style="width: 100px; text-align: center;">Aksi</th>

				</tr>
			</thead>
			<tbody>
				<?php while ($key = mysqli_fetch_array($query)){?>
				<tr>
					<td style="text-align: center;"><?php echo $i; ?></td>
					<td style="text-align: center;"><?php echo $key['kode_ruangan']; ?></td>
					<td style="text-align: center;"><?php echo $key['tanggal']; ?></td>
					<td style="text-align: center;"><?php echo $key['jam']; ?></td>
					<td style="text-align: center;"><?php echo $key['lama_pinjam']; ?> jam</td>
					<td style="text-align: center;"><?php echo $key['atas_nama']; ?></td>
					<td style="text-align: center;"><?php echo $key['nim']; ?></td>
					<td style="text-align: center;"><?php echo $key['jurusan']; ?></td>
					<td><?php echo $key['keterangan']; ?></td>
					<td style="text-align: center;"><?php echo $key['waktu_input']; ?></td>
					<td style="text-align: center;"><?php echo $key['konfirmasi']; ?></td>
					<td style="text-align: center;">
					<form action="konfirm.php" method="post" accept-charset="utf-8">
						<input type="hidden" name="inputan" value="<?php echo $key['id'] ?>">
						<input type="submit" name="yes" class="btn btn-success aw" value="yes">
						<input type="submit" name="no" class="btn btn-danger aw" value="no">
					</form>
					</td>
				</tr>
				<?php $i++; }; ?>
			</tbody>
		</table>
	</div>
</body>
</html>
