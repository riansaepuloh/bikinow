<?php 
include "../config/koneksi.php";

if (isset($_GET['id'])) {
	$id = $_GET['id'];
} else {
	die ("Error, Tidak ada kode terpilih");
}
// tampilkan data
$query =  "SELECT * FROM users where id = '$id';";

$sql = mysqli_query($koneksi,$query);
$hasil = mysqli_fetch_array($sql);
$nip = $hasil['nip'];
$nama = $hasil['nama'];
$username = $hasil['username'];
$password = $hasil['password'];
$email = $hasil['email'];
$level = $hasil['level'];
$foto = $hasil['foto'];


// proses edit
if(isset($_POST['edit'])){
$nip1 = $_POST['nip1'];
$nama1 = $_POST['nama1'];
$username1 = $_POST['username1'];
$password1 = $_POST['password1'];
$email1 = $_POST['email1'];
$level1 = $_POST['level1'];
$foto1 = $_POST['foto1'];

// update data
$query = "UPDATE `users` SET `username` = '$username1' , `password` = '$password1' , `email` = '$email1'
        , `nama` = '$nama1' , `foto` = '$foto1'
          WHERE `id` = '$id';";
$sql = mysqli_query($koneksi,$query);
if ($sql) {
    echo "<div class='alert alert-success alert-dismissible'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <h4><i class='icon fa fa-check'></i> Alert!</h4>
                Data Berhasil di tambah
              </div>";
	echo "<meta http-equiv='refresh' content='0; url=media.php?page=tampil_admin'>";
} else {
	echo "Data gagal di edit";
	}
}	
 ?>
 <br>
  <div class="row">
                <div class="col-lg-12">
                    <div class="panel fresh-color panel-info">
                        <div class="panel-heading">
                            Management Edit Administrator
                        </div>
                        <!-- /.panel-heading -->

                        <div class="panel-body">
                        <form class="form-horizontal" action="" method="post" enctype="multypart/form-data" name="edit" id="edit">
                    
                    <!-- Generate Id -->
                    <div class="form-group">
                        <label for = "contact-msg" class="col-lg-3 control-label">ID  : </label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" id="contract-name" name="id1" required value="<?php echo $id ?>" placeholder="Masukan NIP Pegawai" disabled>
                        </div>
                    </div >
                    
                     <!-- Generate NIP -->
                    <div class="form-group">
                        <label for = "contact-msg" class="col-lg-3 control-label">NIP  : </label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" id="contract-name" name="nip1" required value="<?php echo $nip ?>" placeholder="Masukan NIP Pegawai" disabled>
                        </div>
                    </div >
                    <!-- Input username  -->
                    <div class="form-group">
                        <label for = "contact-msg" class="col-lg-3 control-label">Username  : </label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" id="contract-name" placeholder="Masukan Username" name="username1" value="<?php echo $username ?>" required>
                        </div>
                    </div >

                    <!-- Input Password  -->
                    <div class="form-group">
                        <label for = "contact-msg" class="col-lg-3 control-label">Password  : </label>
                        <div class="col-lg-9">
                            <input type="password" class="form-control" id="contract-name" placeholder="Masukan Password" name="password1" value="<?php echo $password ?>" required>
                        </div>
                    </div >

                    <!-- Input Namai -->
                    <div class="form-group">
                        <label for = "contact-msg" class="col-lg-3 control-label">Nama  : </label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" id="contract-name" placeholder="Masukan Nama" name="nama1" value="<?php echo $nama ?>" required>
                        </div>
                    </div >

                    <!-- Input Email -->
                    <div class="form-group">
                        <label for = "contact-msg" class="col-lg-3 control-label">E-Mail  : </label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" id="contract-name" placeholder="Masukan Email" name="email1" value="<?php echo $email ?>" required>
                        </div>
                    </div >

                    <!-- Generate Id -->
                    <div class="form-group">
                        <label for = "contact-msg" class="col-lg-3 control-label">Level User  : </label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" id="contract-name" name="level1" required value="<?php echo $level ?>"  disabled>
                        </div>
                    </div >


                    <!-- Tampilkan Foto -->
                    <div class="form-group">
                        <label for = "contact-msg" class="col-lg-3 control-label"></label>
                        <div class="col-lg-9">
                            <img src="../gambar/<?php echo "$foto"; ?>" width="200px" heigh="200px">
                        </div>
                    </div>

                    <!-- Masukan Masukan Foto -->
                    <div class="form-group">
                        <label for = "contact-msg" class="col-lg-3 control-label">Foto  : </label>
                        <div class="col-lg-9">
                            <input type="file" name="foto1" id="foto">
                        </div>
                    </div>


                    <!-- Button -->
                    <div class="form-action no-margin-bottom" style="margin-left:40%">
                        <input class="btn btn-primary" type="submit" name="edit" id="edit" value="Edit">                   
                    <a href="media.php?page=tampil_admin" class="btn btn-primary">Keluar</a>
                    </div>
                </form>
            </div>
    </div>
</div>
