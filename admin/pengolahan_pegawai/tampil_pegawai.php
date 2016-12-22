<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>



<body class="flat-blue">
            <div class="box-header">
              <h3 class="box-title"><i class="fa fa-tasks"></i> Management Pegawai</h3>
            </div>
            <div class="box-body">
             <?php 
                include"../config/koneksi.php";
                $hasil=mysqli_query($koneksi,"SELECT nip, nama, s_kerja, nama_jabatan, nama_bagian, foto FROM t_pegawai JOIN t_jabatan USING (kd_jabatan)
                                    JOIN t_bagian USING (kd_bagian);");
             ?>

            <!-- Main Content -->
                     <!-- Modal -->
                        <div class="modal fade modal-primary" id="daftar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

                        <!-- definisi Pemberian Kode Jabatan -->
                        // <?php
                        //     $query=mysql_query("select max(kd_jabatan) as kd_jabatan from t_jabatan");
                        //     $hasil_id=mysql_fetch_array($query);
                        //     $id_baru=substr($hasil_id['kd_jabatan'],1,4);
                        //     $tambah=$id_baru+1;
                        //     if($tambah<10) {
                        //       $id="M00".$tambah;
                        //     } else {
                        //       $id="M0".$tambah;
                        //     }


                        ?>

                        <!-- tambah jabatan kerja -->
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Tambah Pegawai</h4>
                                    </div>

                                    <form class="form-horizontal" action="pengolahan_pegawai/simpan_pegawai.php" method="post" enctype="multipart/form-data" name="FormUpload" id="FormUpload">
                                    <div class="modal-body">

                        <!-- Data Pegawai -->
                                    <div class="form-title"><strong><font color="white">Masukan Data Pegawai</font></strong></div>
                                        <br>
                                        <!-- Generate NIP -->
                                        <div class="form-group">
                                            <label for = "contact-msg" class="col-lg-3 control-label">NIP Pegawai : </label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" id="contract-name" name="nip"  required placeholder="Masukan Nip Pegawai" >
                                            </div>
                                        </div >

                                        <!-- Pilih Kode Jabatan -->
                                         <div class="form-group">
                                            <label for="contact-name" class="col-lg-3 control-label">Jabatan : </label>
                                            <div class="col-lg-9">
                                                <select class="form-control" name="kd_jabatan">
                                                    <option>Pilih Nama Jabatan</option>
                                                    <?php 
                                                    $query1 = "SELECT * FROM `t_jabatan`;";
                                                    $sql1 = mysqli_query($koneksi,$query1);
                                                    while ( $baris = mysqli_fetch_array($sql1)) {
                                                        echo '<option value="'.$baris['kd_jabatan'].'">'.$baris['nama_jabatan'].'</option>';
                                                    }
                                                     ?>
                                                </select>
                                            </div>
                                        </div>

                                        <!-- Pilih Kode Bagian -->
                                        <div class="form-group">
                                            <label for = "contact-msg" class="col-lg-3 control-label">Bagian : </label>
                                            <div class="col-lg-9">
                                                <select class="form-control" name="kd_bagian">
                                                    <option>Pilih Nama Bagian</option>
                                                    <?php 
                                                    $query1 = "SELECT * FROM `t_bagian`;";
                                                    $sql1 = mysqli_query($koneksi,$query1);
                                                    while ( $baris = mysqli_fetch_array($sql1)) {
                                                        echo '<option value="'.$baris['kd_bagian'].'">'.$baris['nama_bagian'].'</option>';
                                                    }
                                                     ?>
                                                </select>
                                            </div>
                                        </div >

                                        <!-- Masukan Tanggal Masuk -->
                                        <div class="form-group">
                                            <label for = "contact-msg" class="col-lg-3 control-label">Tanggal Masuk Pegawai : </label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" id="datepicker1" placeholder="Masukan Tanggal Masuk Pegawai" name="tgl_masuk" required>
                                            </div>
                                        </div >
                                        <br>


                        <!-- Data Pegawai -->

                        <!-- Data Diri -->
                                    <div class="form-title"><strong><font color="white">Masukan Data Pribadi Pegawai</font></strong></div>
                                        <br>

                                        <!-- Input Nama Pegawai -->
                                        <div class="form-group">
                                            <label for = "contact-msg" class="col-lg-3 control-label">Nama Pegawai : </label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" id="contract-name" placeholder="Masukan Nama Pegawai" name="nama" required>
                                            </div>
                                        </div >

                                        <!-- Input Tempat Lahir -->
                                        <div class="form-group">
                                            <label for = "contact-msg" class="col-lg-3 control-label">Tempat Lahir : </label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" id="contract-name" placeholder="Masukan Tempat Lahir" name="tempat_lahir" required>
                                            </div>
                                        </div >

                                        <!-- Input Tanggal Lahir -->
                                        <div class="form-group">
                                            <label for = "contact-msg" class="col-lg-3 control-label">Tanggal Lahir : </label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" id="datepicker" placeholder="Masukan Tanggal Lahir" name="tgl_lahir" required>
                                            </div>
                                        </div >

                                        <!-- Input Alamat -->
                                        <div class="form-group">
                                            <label for = "contact-msg" class="col-lg-3 control-label">Alamat : </label>
                                            <div class="col-lg-9">
                                                <textarea class="form-control" name="alamat" placeholder="Masukan Alamat Pegawai" rows="2" required></textarea>
                                            </div>
                                        </div >

                                        <!-- Input No Telepon -->
                                        <div class="form-group">
                                            <label for = "contact-msg" class="col-lg-3 control-label">No Telepon : </label>
                                            <div class="col-lg-9">
                                                <input name="n_hp" class="form-control" placeholder="No Telepon" type="text" data-mask="" required data-inputmask="'mask': ['9999-9999-9999'] ">
                                            </div>
                                        </div >

                                        <!-- Input Jenis Kelamin -->
                                        <div class="form-group">
                                        <label for = "contact-msg" class="col-lg-3 control-label">Jenis Kelamin : </label>
                                          <div class="col-lg-9">
                                          <div class="radio3 radio-check radio-inline">
                                            <input type="radio" id="radio4" name="jk" value="Laki-Laki">
                                            <label for="radio4">
                                              Laki-laki
                                            </label>
                                          </div>
                                          <div class="radio3 radio-check radio-success radio-inline">
                                            <input type="radio" id="radio5" name="jk" value="Perempuan">
                                            <label for="radio5">
                                              Perempuan
                                            </label>
                                          </div>
                                          </div>
                                        </div>
                                      
                                        <!-- Pilih Status Kerja -->
                                        <div class="form-group">
                                            <label for = "contact-msg" class="col-lg-3 control-label">Status Kerja : </label>
                                            <div class="col-lg-9">
                                                <select name="s_kerja" class="form-control" required>
                                                    <option value=""> -----------------Pilih--------------</option>
                                                    <option value="Kontrak">Kontrak</option>
                                                    <option value="Tetap">Tetap</option>                                 
                                                </select>
                                        </div>
                                        </div>

                                        <!-- Pilih Status Kawin -->
                                        <div class="form-group">
                                            <label for = "contact-msg" class="col-lg-3 control-label">Status Kawin : </label>
                                            <div class="col-lg-9">
                                                <select name="s_kawin" class="form-control" required>
                                                    <option value=""> -----------------Pilih--------------</option>
                                                    <option value="Menikah">Menikah</option>
                                                    <option value="Lajang">Lajang</option>                                 
                                                </select>
                                        </div>
                                        </div>

                                        <!-- Masukan Jumlah Anak -->
                                        

                                        <div class="form-group">
                                            <label for = "contact-msg" class="col-lg-3 control-label">Jumlah Anak : </label>
                                            <div class="col-lg-9">
                                                <input name="jml_anak" class="form-control" placeholder="Jumlah Anak" type="text" data-mask="" required data-inputmask="'mask': ['9'] ">
                                            </div>
                                        </div >

                                        <!-- Masukan Masukan Foto -->
                                        <div class="form-group">
                                            <label for="contact-name" class="col-lg-3 control-label">Foto Karyawan : </label>
                                            <div class="col-lg-9">
                                                <input type="file" name="foto" id="foto">
                                            </div>
                                        </div>
            <!-- Data Diri -->

                                        <!-- Button -->
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
                                        <button type="submit" class="btn btn-success" ><span class="icon fa fa-user-plus"></span> Tambah</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>


        <div class="clearfix margin-bottom-10">
              <div class="btn-group">                               
              <button a href="#daftar" data-toggle="modal" class="btn btn-success"><span class="icon fa fa-tasks"></span>
                 Tambah Data Pegawai
                 </button>
              </div>
              
        </div>

        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>NIP</th>
                    <th>Nama Pegawai</th>
                    <th>Status Kerja</th>
                    <th>Nama Jabatan</th>
                    <th>Nama Bagian</th>
                    <td>Foto
                    <th align="center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
            if($hasil != null){
                while($kolom=mysqli_fetch_array($hasil)){
                ?>
                <tr>
                    <td><?php echo $kolom['nip']?></td>
                    <td><?php echo $kolom['nama']?></td>
                    <td><?php echo $kolom['s_kerja']?></td>
                    <td><?php echo $kolom['nama_jabatan']?></td>
                    <td><?php echo $kolom['nama_bagian']?></td>
                    <td>
                    <?php 
                        $foto = $kolom['foto'];
                        if (empty($foto)) 
                            echo "<strong><img src='../gambar/no_Image.jpg' width='50' height='50'> <br></strong>";
                        else
                            echo"<img src='../gambar/$foto' width='50px' heigth='50px'/ >"
                    ?>
                    </td>
                    <td align="center">
                        <a href="media.php?page=detail_pegawai&id=<?php echo $kolom['nip']; ?>"><button type="button" class="btn btn-success"><span  class="fa fa-external-link"aria-hidden="true"> Detail Pegawai </span></button></a>
                        
                    </td>
                </tr>
                <?php 
                }
            }
            else {
                echo "data kosong";
            }
            ?>
            </tbody>
        </table>
        <!-- page script -->
<script>
  //datatables untuk pencarian, paging dan sorting
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
  //datepicker untuk tanggal
  $('#datepicker').datepicker({
      format: 'yyyy/mm/dd',
      autoclose: true
    });
  $('#datepicker1').datepicker({
      format: 'yyyy/mm/dd',
      autoclose: true
    });
  //input mask untuk no telepon
    $("[data-mask]").inputmask();


</script>



                     
</body>

</html>

