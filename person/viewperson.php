<!DOCTYPE html>
<html lang="en">
	<head>
		<title>View Person</title>
		<link rel="stylesheet" type="text/css" href="../style/jquery.dataTables.min.css">
		<style type="text/css" class="init">
			div.dataTables_wrapper {
				width: 800px;
				margin: 0 auto;
			}
		</style>
		<script type="text/javascript" language="javascript" src="../js/jquery-1.11.3.min.js"></script>
		<script type="text/javascript" language="javascript" src="../js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" class="init">
			$(document).ready(function() {
				$('#example').DataTable( {
					"scrollY": 200,
					"scrollX": true
				} );
			} );
		</script>
	</head>
	<body class="wide comments example">
		<center>
		<table id="example" class="display nowrap" cellspacing="0" width="100%">
			<h2> Data Container </h2>
			<br/>
			<br/>
			<br/>
			<a href = "addperson.php"> Tambah Data Orang</a> ||  <a href="../index.php"> Kembali ke home </a>
			<br/>
			<br/>
			<br/>
			<br/>
			<thead>
				<tr>
					<th>No</th>
					<th>ID</th>
					<th>Nama</th>										
					<th>Tempat Lahir</th>
					<th>Tanggal Lahir</th>
					<th>Jenis Kelamin</th>
					<th>Kewarganegaraan</th>
					<th>Agama</th>										
					<th>Nama Ibu</th>
					<th>Email</th>
					<th>No. Telepon</th>
					<th>Alamat</th>
					<th>Kode Pos</th>										
					<th>Provinsi</th>
					<th>Kabupaten</th>
					<th>Kecamatan</th>
					<th>Pendidikan Terakhir</th>
					<th>Nama Sekolah</th>
					<th>Rata-Rata Nilai Rapor Kelas 12</th>
					<th>Pilih Program studi 1</th>
					<th>Pilih Program studi 2</th>
					<th>Choice</th>
				</tr>
			</thead>
			<?php
			include ('../config/connect.php');
			$no=1;
			$dataperson=mysqli_query($connect,"select * from tbperson") or die (mysqli_error());
			if (!$dataperson) { //to show error statement
				printf("Error: %s\n", mysqli_error($connect));
				exit();
			}
			while ($ds=mysqli_fetch_assoc($dataperson)){
			?>
			<tbody>
					<tr>
						<td><?php echo $no++;?> </td>
						<td><?php echo $ds['id'];?></td>
						<td><?php echo $ds['nama'];?></td>
						<td><?php echo $ds['tempat_lahir'];?></td>
						<td><?php echo $ds['tanggal_lahir'];?></td>
						<td><?php echo $ds['jenis_kelamin'];?></td>
						<td><?php echo $ds['kewarganegaraan'];?></td>
						<td><?php echo $ds['agama'];?></td>
						<td><?php echo $ds['nama_ibu'];?></td>
						<td><?php echo $ds['email'];?></td>
						<td><?php echo $ds['no_telepon'];?></td>
						<td><?php echo $ds['alamat'];?></td>
						<td><?php echo $ds['kode_pos'];?></td>
						<td><?php echo $ds['provinsi'];?></td>
						<td><?php echo $ds['kabupaten'];?></td>
						<td><?php echo $ds['kecamatan'];?></td>
						<td><?php echo $ds['pendidikan_terakhir'];?></td>
						<td><?php echo $ds['nama_sekolah'];?></td>
						<td><?php echo $ds['rata_rata_nilai_rapor_kelas_12'];?></td>
						<td><?php echo $ds['pilih_program_studi_1'];?></td>
						<td><?php echo $ds['pilih_program_studi_2'];?></td>
						<td>
							<a href="editperson.php?id=<?php echo $ds['id'];?>"> EDIT </a> ||
							<a href="deleteperson.php?id=<?php echo $ds['id'];?>"> HAPUS </a>
						</td>
					</tr>
			</tbody>
			<?php
			}
			?>	
		</table>		
		</center>
	</body>
</html>