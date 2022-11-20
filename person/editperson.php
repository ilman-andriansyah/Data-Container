<!DOCTYPE html>
<html>
	<head>
		<title>DATA CONTAINER</title>
			<link rel="stylesheet" type="text/css" href="../style/add.css">
		    <link rel="stylesheet" href="../style/bootstrap.min.css">
			<script src="../js/jquery-3.4.1.min.js"></script>
			<script src="../js/bootstrap.min.js"></script>
	</head>
	<body>
		<?php
		include "../config/connect.php";
		$id=$_GET['id'];
		$dataperson = mysqli_query($connect,"SELECT * FROM tbperson WHERE id=$id");
		while($ds=mysqli_fetch_assoc($dataperson)){
		?>
		<!---<form method="POST" action="updateperson.php">--->
		<form method="POST" action="">
			<!---updateperson.php--->
			<?php
			include "../config/connect.php";
			if(isset($_POST['submit']))
			{
					$id=($_POST["id"]);	
					$nama=($_POST["nama"]);
					$tempat_lahir=($_POST["tempat_lahir"]);
					$tanggal_lahir=($_POST["tanggal_lahir"]);
					$jenis_kelamin=($_POST["jenis_kelamin"]);
					$kewarganegaraan=($_POST["kewarganegaraan"]);
					$agama=($_POST["agama"]);
					$nama_ibu=($_POST["nama_ibu"]);
					$email=($_POST["email"]);
					$no_telepon=($_POST["no_telepon"]);
					$alamat=($_POST["alamat"]);
					$kode_pos=($_POST["kode_pos"]);
					$provinsi=($_POST["provinsi"]);
					$kabupaten=($_POST["kabupaten"]);
					$kecamatan=($_POST["kecamatan"]);
					$pendidikan_terakhir=($_POST["pendidikan_terakhir"]);
					$nama_sekolah=($_POST["nama_sekolah"]);
					$rata_rata_nilai_rapor_kelas_12=($_POST["rata_rata_nilai_rapor_kelas_12"]);
					$pilih_program_studi_1=($_POST["pilih_program_studi_1"]);
					$pilih_program_studi_2=($_POST["pilih_program_studi_2"]);

				$updateperson=mysqli_query($connect,"UPDATE tbperson SET id='$id',nama='$nama',tempat_lahir='$tempat_lahir',tanggal_lahir='$tanggal_lahir',jenis_kelamin='$jenis_kelamin',kewarganegaraan='$kewarganegaraan',agama='$agama',nama_ibu='$nama_ibu',email='$email',no_telepon='$no_telepon',alamat='$alamat',kode_pos='$kode_pos',provinsi='$provinsi',kabupaten='$kabupaten',kecamatan='$kecamatan',pendidikan_terakhir='$pendidikan_terakhir',nama_sekolah='$nama_sekolah',rata_rata_nilai_rapor_kelas_12='$rata_rata_nilai_rapor_kelas_12',pilih_program_studi_1='$pilih_program_studi_1',pilih_program_studi_2='$pilih_program_studi_2' WHERE id=$id");

				if ($updateperson)
				echo "<script type='text/javascript'> alert('Data siswa berhasil diubah'); window.location='viewperson.php';</script>";
				 else
				 echo "<script type='text/javascript'> alert('Data siswa gagal diubah'); window.location='viewperson.php';</script>";
			}
			?>
			<!---updateperson.php--->
			<div class="container p-3 my-3 border">
				<h1 class="text-center">EDIT - DACONT</h1>
					<form id="form" method="post">
						<div class="alert alert-primary">
							<strong>Data Diri</strong>
						</div>
						<div class="row">
							
							<div class="col-sm-5">
								<div class="form-group">
									<label>ID Number:</label>
									<input type="text" name="id" class="form-control" value="<?php echo $ds['id'];?>">
								</div>
							</div>
							<div class="col-sm-7">

								<div class="form-group">
									<label>Nama:</label>
									<input type="text" name="nama" class="form-control" value="<?php echo $ds['nama'];?>">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-4">
								<div class="form-group">
									<label>Tempat Lahir:</label>
									<input type="text" name="tempat_lahir" class="form-control" value="<?php echo $ds['tempat_lahir'];?>">
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label>Tanggal Lahir:</label>
									<input type="date" name="tanggal_lahir" class="form-control">
								</div>
							</div>
							<div class="col-sm-5">
								<div class="form-group">
									<label>Jenis Kelamin:</label>
									<select class="form-control" name="jenis_kelamin">
										<option>Pilih</option>
										<option value="Laki-laki">Laki-laki</option>
										<option value="Perempuan">Perempuan</option>
									</select>
								</div>
							</div>
						</div>

						<div class="row">

							<div class="col-sm-4">
								<div class="form-group">
									<label>Kewarganegaraan:</label>
									<select class="form-control" name="kewarganegaraan">
										<option>Pilih</option>
										<option value="WNI">Warga Negara Indonesia</option>
										<option value="WNA">Warga Negara Asing</option>
									</select>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label>Agama:</label>
									<select class="form-control" name="agama">
										<option>Pilih</option>
										<option value="Islam">Islam</option>
										<option value="Kristen">Kristen</option>
										<option value="Katolik">Katolik</option>
										<option value="Hindu">Hindu</option>
										<option value="Budha">Budha</option>
										<option value="Lainnya">Lainnya</option>
									</select>
								</div>
							</div>
							<div class="col-sm-5">
								<div class="form-group">
									<label>Nama Ibu Kandung:</label>
									<input type="text" name="nama_ibu" class="form-control" value="<?php echo $ds['nama_ibu'];?>">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-4">
								<div class="form-group">
									<label>Email:</label>
									<input type="email" name="email" class="form-control" value="<?php echo $ds['email'];?>">
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<label>No Telp:</label>
									<input type="text" name="no_telepon" class="form-control" value="<?php echo $ds['no_telepon'];?>">
								</div>
							</div>
						</div>
						<div class="alert alert-primary">
							<strong>Data Alamat</strong>
						</div>
						<div class="row">
							<div class="col-sm-5">
								<div class="form-group">
									<label>Alamat:</label>
									<textarea class="form-control" name="alamat" rows="2" id="alamat"><?php echo $ds['alamat'];?> </textarea>
								</div>
							</div>
							<div class="col-sm-2">
								<div class="form-group">
									<label>Kode Pos:</label>
									<input type="text" name="kode_pos" class="form-control" value="<?php echo $ds['kode_pos'];?>">
								</div>
							</div>
						</div>


						<div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Provinsi:</label>
                        <select class="form-control" name="provinsi" id="provinsi">
                            <?php
                            include "../config/connect.php";
                            //Perintah sql untuk menampilkan semua data pada tabel provinsi
                            $sql="select * from provinsi";
                            $hasil=mysqli_query($connect,$sql);
                            while ($data = mysqli_fetch_array($hasil)) {
                                ?>
                            <option value="<?php echo $data['id_prov'];?>"><?php echo $data['nama'];?></option>
                            <?php
                                }
                        ?>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Kabupaten:</label>
                        <select class="form-control" name="kabupaten" id="kabupaten">
                            <!-- Kabupaten akan diload menggunakan ajax, dan ditampilkan disini -->
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Kecamatan:</label>
                        <select class="form-control" name="kecamatan" id="kecamatan">
                            <!-- Kecamatan akan diload menggunakan ajax, dan ditampilkan disini -->
                        </select>
                    </div>
                </div>

            </div>
			            <script>
            $("#provinsi").change(function() {
                // variabel dari nilai combo provinsi
                var id_provinsi = $("#provinsi").val();

                // Menggunakan ajax untuk mengirim dan dan menerima data dari server
                $.ajax({
                    type: "POST",
                    dataType: "html",
                    url: "../config/fetch-area-data.php",
                    data: "provinsi=" + id_provinsi,
                    success: function(data) {
                        $("#kabupaten").html(data);
                    }
                });
            });

            $("#kabupaten").change(function() {
                // variabel dari nilai combo box kabupaten
                var id_kabupaten = $("#kabupaten").val();

                // Menggunakan ajax untuk mengirim dan dan menerima data dari server
                $.ajax({
                    type: "POST",
                    dataType: "html",
                    url: "../config/fetch-area-data.php",
                    data: "kabupaten=" + id_kabupaten,
                    success: function(data) {
                        $("#kecamatan").html(data);
                    }
                });
            });
            </script>
				
			
			<div class="alert alert-primary">
                <strong>Data Pendidikan</strong>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Pendidikan Terakhir:</label>
                        <select class="form-control" name="pendidikan_terakhir">
                            <option value="SMA-IPA">SMA - IPA</option>
                            <option value="SMA-IPS">SMA - IPS</option>
                            <option value="SMK-IPA">SMK - IPA</option>
                            <option value="SMK-IPS">SMK - IPS</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Nama Sekolah:</label>
                        <input type="text" name="nama_sekolah" class="form-control" value="<?php echo $ds['nama_sekolah'];?>">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Rata-rata Nilai Rapor Kelas 12:</label>
                        <input type="text" name="rata_rata_nilai_rapor_kelas_12" class="form-control" value="<?php echo $ds['rata_rata_nilai_rapor_kelas_12'];?>">
                    </div>
                </div>
            </div>
            <div class="alert alert-primary">
                <strong>Pilihan Program Studi</strong>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Pilih Program Studi 1:</label>
                        <select class="form-control" name="pilih_program_studi_1">
                            <option value="D3 - Teknik Komputer">D3 - Teknik Komputer</option>
                            <option value="D3 - Komputerisasi Akuntansi">D3 - Komputerisasi Akuntansi</option>
                            <option value="D3 - Manajemen Informatika">D3 - Manajemen Informatika</option>
                            <option value="S1 - Sistem Informasi">SI - Sistem Informasi</option>
                            <option value="S1 - Teknik Informatika">SI - Teknik Informatika</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Pilih Program Studi 2:</label>
                        <select class="form-control" name="pilih_program_studi_2">
                            <option value="D3 - Teknik Komputer">D3 - Teknik Komputer</option>
                            <option value="D3 - Komputerisasi Akuntansi">D3 - Komputerisasi Akuntansi</option>
                            <option value="D3 - Manajemen Informatika">D3 - Manajemen Informatika</option>
                            <option value="S1 - Sistem Informasi">SI - Sistem Informasi</option>
                            <option value="S1 - Teknik Informatika">SI - Teknik Informatika</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <button type="submit" name="submit" id="submit" class="btn btn-primary" value="UPDATE">Update</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                </div>

            </div>
						<br>
						<a href="viewperson.php"> KEMBALI </a>
					
				</div>
				</form>
				<?php
		}
		?>
		</form>
			</body>
</html>