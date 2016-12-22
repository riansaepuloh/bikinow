<?php
$query = mysqli_query($koneksi,"SELECT `nama`,`email`,`jenis_kelamin`,`no_telp`,`ttl`,c.`kd_kota`,`nama_kota`,(SELECT`nama_provinsi` FROM `t_provinsi` p WHERE p.`kd_provinsi` = k.`kd_provinsi`) provinsi,`kode_pos`,`alamat`
								FROM `t_customer` c JOIN `t_kota` k ON c.`kd_kota` = k.`kd_kota`;
");
$res=mysqli_fetch_array($query);

if ($res['nama'] != "") {
	$nama = $res['nama'];
} else {
	$nama = "NO NAME";
}

 ?>
	<div class="card card-profile">
		<div class="card-avatar">
			<a href="#pablo">
				<img class="img" src="../images/undifined.jpg" />
			</a>
		</div>

		<div class="content">
			<h6 class="category text-gray"><?php echo $username; ?></h6>
			<h4 class="card-title"><?php echo $nama; ?></h4>
				<div class="row" style="padding-right:20px;">
					<div class="col-sm-4">
						<div class="input-group">
							<span class="input-group-addon">
								<i class="material-icons">phone</i>
							</span>
							<input type="text" class="form-control" value="<?php echo $res['no_telp']; ?>" placeholder="Please Enter Your Number" readonly>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="input-group">
							<span class="input-group-addon">
								<i class="material-icons">email</i>
							</span>
							<input type="text" class="form-control" value="<?php echo $res['email']; ?>" placeholder="Please Enter Your Phone Number" readonly>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="input-group">
							<span class="input-group-addon">
								<i class="material-icons">wc</i>
							</span>
							<?php 
							if ($res['jenis_kelamin']=="laki-laki") {
								$jk = "Male";
							} else {
								$jk = "Female";
							}
							?>
							<input type="text" class="form-control" value="<?php echo $jk; ?>" placeholder="Select Your Gender" readonly>
						</div>
					</div>
				</div>
				<div class="row" style="padding-right:20px;">
					<div class="col-sm-4">
						<div class="input-group">
							<span class="input-group-addon">
								<i class="material-icons">event</i>
							</span>
							<input type="text" class="form-control" value="<?php echo $res['ttl']; ?>" placeholder="Please Enter Your Birth Date" readonly>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="input-group">
							<span class="input-group-addon">
								<i class="material-icons">place</i>
							</span>
							<input type="text" class="form-control" value="<?php echo $res['provinsi']; ?>" placeholder="Select District" readonly>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="input-group">
							<span class="input-group-addon">
								<i class="material-icons">place</i>
							</span>
							<input type="text" class="form-control" value="<?php echo $res['nama_kota']; ?>" placeholder="Select City" readonly>
						</div>
					</div>
				</div>
				<div class="row" style="padding-right:20px;">
					<div class="col-sm-12">
						<div class="input-group">
							<span class="input-group-addon">
								<i class="material-icons">place</i>
							</span>
							<textarea class="form-control" rows="5" name="detail_lokasi" placeholder="Please Enter Your Detail Adress" readonly><?php echo $res['alamat']; ?></textarea>
						</div>
					</div>
				</div>
			<a href="index.php?page=edit_profil&id=<?php echo $kd_customer; ?>" class="btn btn-primary btn-simple">
			<i class="material-icons">edit</i> EDIT PROFILE</a>
		</div>
	</div>