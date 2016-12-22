 <?php 
 include"../config/koneksi.php";
  ?>
  <div class="row">
    <div class="col-md-12">
      <!-- Custom Tabs -->
      <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
          <li class="active"><a href="#tab_1" data-toggle="tab">DATA GAJI YANG DIBERIKAN BULAN INI</a></li>
          <li><a href="#tab_2" data-toggle="tab">DATA GAJI PEGAWAI KESELURUHAN</a></li>
          <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane active" id="tab_1">
      <!-- tampil gaji pegawai bulan ini -->
     <!-- Modal -->
        <div class="modal fade modal-primary" id="daftar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

        <!-- bayarkan gaji pegawai -->
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Tambah Bayarkan Gaji </h4>
                    </div>
                    <form class="form-horizontal" action="pengolahan_gaji/bayarkan_gaji.php" method="post">
                    <div class="modal-body">
                         <div class="form-group">
                            <label for="contact-name" class="col-lg-3 control-label">NIP : </label>
                            <div class="col-lg-9">
                                <select class="form-control" name="nip">
                                    <option>Pilih NIP</option>
                                    <?php 
                                    $query1 = "SELECT `nip` FROM `t_pegawai`;";
                                    $sql1 = mysqli_query($koneksi,$query1);
                                    while ( $baris = mysqli_fetch_array($sql1)) {
                                        echo '<option value="'.$baris['nip'].'">'.$baris['nip'].'</option>';
                                    }
                                     ?>
                                </select>
                            </div>
                        </div>
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
             BAYARKAN GAJI
             </button>
          </div>
    </div>
    <br>
       <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Tanggal</th>
                <th>NIP</th>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Tunj. Jabatan</th>
                <th>Tunj. Anak</th>
                <th>Gaji Lembur</th>
                <th>Total Gaji</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
          <?php 
          $bulan_sekarang = date("Y-m");
          $hasil=mysqli_query($koneksi,"SELECT `id_gaji`,`tanggal_gaji`,`nip`,`nama`,`nama_jabatan`,`tunj_jabatan`, `tunj_anak`,`gaji_lembur`, `total_gaji`
                                        FROM `t_pegawai` JOIN `t_jabatan` USING(`kd_jabatan`) JOIN
                                        `t_gaji_pegawai`USING(`nip`) WHERE `tanggal_gaji` LIKE '%$bulan_sekarang%';");
        if($hasil != null){
            while($kolom=mysqli_fetch_array($hasil)){
            ?>
            <tr>
                <td><?php echo $kolom['tanggal_gaji']?></td>
                <td><?php echo $kolom['nip']?></td>
                <td><?php echo $kolom['nama']?></td>
                <td><?php echo $kolom['nama_jabatan']?></td>
                <td><?php echo number_format($kolom['tunj_jabatan'],2,',','.');?></td>
                <td><?php echo number_format($kolom['tunj_anak'],2,',','.');?></td>
                <td><?php echo number_format($kolom['gaji_lembur'],2,',','.');?></td>
                <td><?php echo number_format($kolom['total_gaji'],2,',','.');?></td>
                <td>
                    <a href="pengolahan_gaji/hapus_gaji.php?page=hapus_bagian_kerja&id=<?php echo $kolom['id_gaji'];?>"onclick="return confirm('apakah yakin menghapus data ?')" ><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></button></a>
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
    <!-- akhir tampil gaji pegawai bulan ini -->
          </div>
          <!-- /.tab-pane -->
          <div class="tab-pane" id="tab_2">
            
            <!-- mulai data gaji keseluruhan -->
     <!-- Modal -->
        <div class="modal fade modal-primary" id="daftar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

        <!-- tambah bagian kerja -->
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Tambah Bagian</h4>
                    </div>
                    <form class="form-horizontal" action="pengolahan_gaji/bayarkan_gaji.php" method="post">
                    <div class="modal-body">
                         <div class="form-group">
                            <label for="contact-name" class="col-lg-3 control-label">NIP : </label>
                            <div class="col-lg-9">
                                <select class="form-control" name="nip">
                                    <option>Pilih Nama Jabatan</option>
                                    <?php 
                                    $query1 = "SELECT `nip` FROM `t_pegawai`;";
                                    $sql1 = mysqli_query($koneksi,$query1);
                                    while ( $baris = mysqli_fetch_array($sql1)) {
                                        echo '<option value="'.$baris['nip'].'">'.$baris['nip'].'</option>';
                                    }
                                     ?>
                                </select>
                            </div>
                        </div>
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
             BAYARKAN GAJI
             </button>
          </div>
    </div>
    <br>
       <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Tanggal</th>
                <th>NIP</th>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Tunj. Jabatan</th>
                <th>Tunj. Anak</th>
                <th>Gaji Lembur</th>
                <th>Total Gaji</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
          <?php 
          $bulan_sekarang = date("Y-m");
          $hasil=mysqli_query($koneksi,"SELECT `id_gaji`,`tanggal_gaji`,`nip`,`nama`,`nama_jabatan`,`tunj_jabatan`, `tunj_anak`,`gaji_lembur`, `total_gaji`
                                        FROM `t_pegawai` JOIN `t_jabatan` USING(`kd_jabatan`) JOIN
                                        `t_gaji_pegawai`USING(`nip`) ORDER BY `tanggal_gaji` DESC;");
        if($hasil != null){
            while($kolom=mysqli_fetch_array($hasil)){
            ?>
            <tr>
                <td><?php echo $kolom['tanggal_gaji']?></td>
                <td><?php echo $kolom['nip']?></td>
                <td><?php echo $kolom['nama']?></td>
                <td><?php echo $kolom['nama_jabatan']?></td>
                <td><?php echo number_format($kolom['tunj_jabatan'],2,',','.');?></td>
                <td><?php echo number_format($kolom['tunj_anak'],2,',','.');?></td>
                <td><?php echo number_format($kolom['gaji_lembur'],2,',','.');?></td>
                <td><?php echo number_format($kolom['total_gaji'],2,',','.');?></td>
                <td>
                    <a href="pengolahan_gaji/hapus_gaji.php?page=hapus_bagian_kerja&id=<?php echo $kolom['id_gaji'];?>"onclick="return confirm('apakah yakin menghapus data ?')" ><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></button></a>
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
    <!-- akhir tampil data gaji keseluruhan -->


          </div>
          <!-- /.tab-pane -->
        </div>
        <!-- /.tab-content -->
      </div>
      <!-- nav-tabs-custom -->
    </div>
    <!-- /.col -->
  </div>

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