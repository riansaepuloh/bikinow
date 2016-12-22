<?php
$query = mysqli_query($koneksi,"SELECT `nama`,`email`,`jenis_kelamin`,`no_telp`,`ttl`,c.`kd_kota`,`nama_kota`,(SELECT`nama_provinsi` FROM `t_provinsi` p WHERE p.`kd_provinsi` = k.`kd_provinsi`) provinsi,
(SELECT`kd_provinsi` FROM `t_provinsi` p WHERE p.`kd_provinsi` = k.`kd_provinsi`) kd_provinsi,`kode_pos`,`alamat`
FROM `t_customer` c JOIN `t_kota` k ON c.`kd_kota` = k.`kd_kota`;
");
$res=mysqli_fetch_array($query);

if ($res['nama'] != "") {
	$nama = $res['nama'];
} else {
	$nama = "NO NAME";
}

 ?>
 	<form action="pengolahan_profil/simpan_profil.php" method="post">
	<div class="card card-profile">
		<div class="card-avatar">
			<a href="#pablo">
				<img class="img" src="../images/undifined.jpg" />
			</a>
		</div>
		<div class="content">
			<h6 class="category text-gray"><?php echo $username; ?></h6>
			<div class="row">
			<div class="col-sm-4">
			</div>
			<div class="col-sm-4">
				<div class="form-group label-floating" style="text-align:Left">
					<label class="control-label">Enter Full Name</label>
					<input type="hidden" name="kd_customer" value="<?php echo $kd_customer; ?>">
					<input type="text" name="nama" class="form-control" value="<?php echo $res['nama']; ?>">
				</div>	
			</div>
			<div class="col-sm-4">
			</div>
			</div>
				<div class="row" style="padding-right:20px;">
					<div class="col-sm-4">
						<div class="input-group">
							<span class="input-group-addon">
								<i class="material-icons">phone</i>
							</span>
							<input type="text" name="no_telp" class="form-control" value="<?php echo $res['no_telp']; ?>" placeholder="Please Enter Your Number">
						</div>
					</div>
					<div class="col-sm-4">
						<div class="input-group">
							<span class="input-group-addon">
								<i class="material-icons">email</i>
							</span>
							<input type="text" name="email" class="form-control" value="<?php echo $res['email']; ?>" placeholder="Please Enter Your Phone Number" readonly>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="input-group">
							<span class="input-group-addon">
								<i class="material-icons">wc</i>
							</span>
							<select name="jenis_kelamin" class="form-control">
							<?php 
							if ($res['jenis_kelamin']=="laki-laki") {
								echo "<option disabled>- Select Gender - </option>
									  <option value='laki-laki' selected>Male</option>
									  <option value='perempuan'>Female</option>";
							} else if ($res['jenis_kelamin']=="perempuan") {
								echo "<option disabled>- Select Gender - </option>
									  <option value='laki-laki' >Male</option>
									  <option value='perempuan' selected>Female</option>";
							} else {
								?>
								<option disabled selected>- Select Gender - </option>
								<option value='laki-laki' >Male</option>
								<option value='perempuan' >Female</option>
								<?php
							}
							?>						
							</select>
						</div>
					</div>
				</div>
				<div class="row" style="padding-right:20px;">
					<div class="col-sm-4">
						<div class="input-group">
							<span class="input-group-addon">
								<i class="material-icons">event</i>
							</span>
							<input type="text" name="ttl" class="form-control" value="<?php echo $res['ttl']; ?>" placeholder="Please Enter Your Birth Date">
						</div>
					</div>
					
					<div class="col-sm-4">
						<div class="input-group">
							<span class="input-group-addon">
								<i class="material-icons">place</i>
							</span>
							<select name="prop" class="form-control"  onchange="pilih_kota(this.value);"; >
								<?php
								$query =  mysqli_query($koneksi, "SELECT kd_provinsi,nama_provinsi FROM t_provinsi ORDER BY nama_provinsi");
							    while ( $row = mysqli_fetch_array($query)) {
							        echo '<option value="'.$row['kd_provinsi'].'">'.$row['nama_provinsi'].'</option>';
							    }
								?>
							</select>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="input-group">
							<span class="input-group-addon">
								<i class="material-icons">place</i>
							</span>
							<select name="kd_kota" class="form-control" id="dom_kota">
							<?php 
								if ($kd_kota!="") {
									$query1 =  mysqli_query($koneksi, "SELECT kd_kota,nama_kota,kd_provinsi FROM t_kota WHERE kd_provinsi='$res[kd_provinsi]' ORDER BY nama_kota"); 
				                    while ( $result = mysqli_fetch_array($query1)) {
				                    	if ($result['kd_kota']==$res['kd_kota']) {
				                    		echo '<option value="'.$result['kd_kota'].'" selected>'.$result['nama_kota'].'</option>';
				                    	} else {
				                        echo '<option value="'.$result['kd_kota'].'">'.$result['nama_kota'].'</option>';
				                        }
				                    }
								}
							 ?>
								<option value="#">Pilih Kota</option>
							<select>
						</div>
					</div>
					
				</div>
				<div class="row" style="padding-right:20px;">
					<div class="col-sm-12">
						<div class="input-group">
							<span class="input-group-addon">
								<i class="material-icons">place</i>
							</span>
							<textarea class="form-control" rows="5" name="detail_lokasi" placeholder="Please Enter Your Detail Adress"><?php echo $res['alamat']; ?></textarea>
						</div>
					</div>
				</div>
			<input type="submit" class="btn btn-success" value="UPDATE PROFILE">
		</div>
	</div>
	</form>