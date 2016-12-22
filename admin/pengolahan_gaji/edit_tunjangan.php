<?php 
    include "../config/koneksi.php";
    $query = mysqli_query($koneksi,"SELECT * FROM `t_pengolahan_gaji`;");
    $kolom = mysqli_fetch_array($query);
    $id_pengolahan_gaji = $kolom["id_pengolahan_gaji"];
    $gapok = $kolom["gaji_pokok"];
    $tunjangan_anak = $kolom["tunjangan_anak"];
    $gaji_lembur = $kolom["gaji_lembur"];


    //Masukan perubahan ke database
    // proses edit
    if(isset($_POST['edit'])){
    $gaji_pokok1 = $_POST['gaji_pokok1'];
    $tunjangan_anak1 = $_POST['tunjangan_anak1'];
    $upah_lembur1 = $_POST['upah_lembur1'];

    // update data
    $query = "UPDATE `t_pengolahan_gaji`
                    SET `gaji_pokok` = '$gaji_pokok1',
                      `tunjangan_anak` = '$tunjangan_anak1',
                      `gaji_lembur` = '$upah_lembur1'
                    WHERE `id_pengolahan_gaji` = '$id_pengolahan_gaji';";
    $sql = mysqli_query($koneksi,$query);
    if ($sql) {
        echo "<meta http-equiv='refresh' content='0; url=media.php?page=pengolahan_gaji'>";
    } else {
        echo "Data gagal di edit";
        }
    }
 ?>

<body class="flat-blue">
            <div class="box-header">
              <h3 class="box-title"><i class="fa fa-tasks"></i> PENGOLAHAN GAJI</h3>
            </div>

    <form class="form-horizontal" action="" method="post">
        <div class="modal-body">
         <div class="form-group">
            <label for = "contact-msg" class="col-lg-2 control-label">GAJI POKOK : </label>
            <div class="col-lg-9">
                <div class="input-group">
                    <span class="input-group-addon">Rp. </i></span>
                    <input type="text" class="form-control" name="gaji_pokok1" value="<?php echo $gapok; ?>">
                    <span class="input-group-addon">/ BULAN</span>
                </div> 
            </div>
        </div >

        <div class="form-group">
            <label for = "contact-msg" class="col-lg-2 control-label">TUNJANGAN ANAK : </label>
            <div class="col-lg-9">
                <div class="input-group">
                    <span class="input-group-addon">Rp. </i></span>
                    <input type="text" class="form-control" name="tunjangan_anak1" value="<?php echo $tunjangan_anak; ?>">
                    <span class="input-group-addon">/ ANAK</span>
                </div> 
            </div>
        </div >

        <div class="form-group">
            <label for = "contact-msg" class="col-lg-2 control-label">UPAH LEMBUR : </label>
            <div class="col-lg-9">
                <div class="input-group">
                    <span class="input-group-addon">Rp. </i></span>
                    <input type="text" class="form-control" name="upah_lembur1" value="<?php echo $gaji_lembur; ?>">
                    <span class="input-group-addon">/ HARI</span>
                </div> 
            </div>
        </div >
        
    </div>
    <div class="modal-footer">
        <a href="media.php?page=pengolahan_gaji"><button type="button" class="btn btn-default" data-dismiss="modal">Batal</button></a>
        <input type="submit" class="btn btn-success" name="edit" id="edit" value="Edit"></input>
    </div>
    </form>
</body>     
