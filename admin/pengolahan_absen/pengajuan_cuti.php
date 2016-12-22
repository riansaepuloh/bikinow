<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>



<body class="flat-blue">
            <div class="box-header">
              <h3 class="box-title"><i class="fa fa-tasks"></i> PENGAJUAN CUTI</h3>
            </div>
            <div class="box-body">
             <?php 
                include"../config/koneksi.php";
                $hasil=mysqli_query($koneksi,"SELECT `kd_pengajuan`,`nip`,`nama`,`tanggal_pengajuan`,`tanggal_cuti`,`status`,`keterangan_cuti`,`nama_bagian`,`nama_jabatan` 
                                              FROM `t_pengajuan_cuti` JOIN `t_pegawai` USING(`nip`) 
                                              JOIN `t_bagian` USING(`kd_bagian`) JOIN `t_jabatan` USING(`kd_jabatan`);");
             ?>

            <!-- Main Content -->
                     <!-- Modal -->
                        <div class="modal fade modal-primary" id="daftar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

                        <!-- tambah bagian kerja -->
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Tambah Bagian</h4>
                                    </div>
                                    <form class="form-horizontal" action="pengolahan_bagian/simpan_bagian_kerja.php" method="post">
                                    <div class="modal-body">
                                         <div class="form-group">
                                            <label for="contact-name" class="col-lg-3 control-label">Kode Bagian : </label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" id="contract-name" placeholder="Masukan Kode Bagian" name="kd_bagian">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for = "contact-msg" class="col-lg-3 control-label">Nama Bagian : </label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" id="contract-name" placeholder="Masukan Nama Bagian" name="nama_bagian">
                                            </div>
                                        </div >

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
                                        <button type="submit" class="btn btn-success" ><span class="icon fa fa-user-plus"></span> Tambah</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>

        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>TGL. PENGJUAN</th>
                    <th>TGL. CUTI</th>
                    <th>NIP</th>
                    <th>NAMA</th>
                    <th>BAGIAN</th>
                    <th>JABATAN</th>
                    <th>STATUS</th>
                    <th>KETERANGAN</th>
                    <th>AKSI</th>
                </tr>
            </thead>
            <tbody>
                <?php 
            if($hasil != null){
                while($kolom=mysqli_fetch_array($hasil)){
                ?>
                <tr>
                    <td><?php echo $kolom['tanggal_pengajuan']?></td>
                    <td><?php echo $kolom['tanggal_cuti']?></td>
                    <td><?php echo $kolom['nip']?></td>
                    <td><?php echo $kolom['nama']?></td>
                    <td><?php echo $kolom['nama_bagian']?></td>
                    <td><?php echo $kolom['nama_jabatan']?></td>
                    <td><?php echo $kolom['status']?></td>
                    <td><?php echo $kolom['keterangan_cuti']?></td>
                    <td>
                        <a href="pengolahan_absen/setujui_cuti.php?kd_pengajuan=<?php echo $kolom['kd_pengajuan'];?>&nip=<?php echo $kolom['nip'];?>&tanggal_cuti=<?php echo $kolom['tanggal_cuti'];?>" onclick="return confirm('Apakah Anda yakin menyetujui cuti ?')" ><button type="button" class="btn btn-success"><span class="fa fa-check"></span></button></a>
                        <a href="pengolahan_absen/tolak_pengajuan_cuti.php?kd_pengajuan=<?php echo $kolom['kd_pengajuan'];?>&nip=<?php echo $kolom['nip'];?>&tanggal_cuti=<?php echo $kolom['tanggal_cuti'];?>" onclick="return confirm('Apakah anda yakin menolak cuti ?')" ><button type="button" class="btn btn-danger"><span class="fa fa-remove"></span></button></a>
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
</script>


                     
</body>

</html>

