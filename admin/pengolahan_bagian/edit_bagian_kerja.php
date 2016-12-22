<?php 
include "../config/koneksi.php";

if (isset($_GET['id'])) {
	$kd_bagian = $_GET['id'];
} else {
	die ("Error, Tidak ada kode terpilih");
}
// tampilkan data
$query =  "SELECT * FROM t_bagian where kd_bagian = '$kd_bagian';";

$sql = mysqli_query($koneksi,$query);
$hasil = mysqli_fetch_array($sql);
$kd_bagian = $hasil['kd_bagian'];
$nama_bagian = $hasil['nama_bagian'];


// proses edit
if(isset($_POST['edit'])){
$kd_bagian1 = $_POST['kd_bagian1'];
$nama_bagian1 = $_POST['nama_bagian1'];

// update data
$query = "UPDATE `t_bagian` SET `kd_bagian` = '$kd_bagian1' , `nama_bagian` = '$nama_bagian1' WHERE `kd_bagian` = '$kd_bagian';";
$sql = mysqli_query($koneksi,$query);
if ($sql) {
	echo "<meta http-equiv='refresh' content='0; url=media.php?page=tampil_bagian'>";
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
                            Edit Data Bagian
                        </div>
                        <!-- /.panel-heading -->
                        
                        <div class="panel-body">
                        <form class="form-horizontal" action="" method="post" enctype="multypart/form-data" name="edit" id="edit">
              
                  
                    <div class="form-group">
                        <label for="contact-name" class="col-lg-3 control-label">Kode Bagian : </label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="contract-name" placeholder="Masukan Kode Bagian" name="kd_bagian1" value="<?php echo $kd_bagian ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for = "contact-msg" class="col-lg-3 control-label">Nama Bagian : </label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="contract-name" placeholder="Masukan Nama Bagian" name="nama_bagian1" value="<?php echo $nama_bagian ?>">
                        </div>
                    </div> 
                    
                    <div class="form-action no-margin-bottom" style="margin-left:40%">
                    <input class="btn btn-primary" type="submit" name="edit" id="edit" value="Edit">
                    <a href="media.php?page=tampil_bagian" class="btn btn-primary">Keluar</a>
                    </div>
                </form>
            </div>
    </div>
</div>
