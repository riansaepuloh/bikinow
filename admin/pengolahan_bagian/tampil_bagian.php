<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>



<body class="flat-blue">
            <div class="box-header">
              <h3 class="box-title"><i class="fa fa-tasks"></i> Bagian Kerja</h3>
            </div>
            <div class="box-body">
             <?php 
                include"../config/koneksi.php";
                $hasil=mysqli_query($koneksi,"SELECT * FROM t_bagian");
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


        <div class="clearfix margin-bottom-10">
              <div class="btn-group">                               
              <button a href="#daftar" data-toggle="modal" class="btn btn-success"><span class="icon fa fa-tasks"></span>
                 Tambah Bagian
                 </button>
              </div>
              
        </div>

        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Kode Bagian</th>
                    <th>Nama Bagian</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
            if($hasil != null){
                while($kolom=mysqli_fetch_array($hasil)){
                ?>
                <tr>
                    <td><?php echo $kolom['kd_bagian']?></td>
                    <td><?php echo $kolom['nama_bagian']?></td>
                    <td>

                        <a href="index.php?page=edit_bagian_kerja&id=<?php echo $kolom['kd_bagian']; ?>"><button type="button" class="btn btn-success"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button></a>
                        <a href="pengolahan_bagian/hapus_bagian_kerja.php?page=hapus_bagian_kerja&id=<?php echo $kolom['kd_bagian'];?>"onclick="return confirm('apakah yakin menghapus data ?')" ><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></button></a>
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

