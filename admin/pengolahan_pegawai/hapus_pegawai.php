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
            <form action="pengolahan_pegawai/hapus_banyak_pegawai.php" method="post">
            <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Pilih</th>
                    <th>NIP</th>
                    <th>Nama Pegawai</th>
                    <th>Status Kerja</th>
                    <th>Nama Jabatan</th>
                    <th>Nama Bagian</th>
                    <th>Foto</th>
                </tr>
            </thead>
            <tbody>
                <?php 
            if($hasil != null){
                while($kolom=mysqli_fetch_array($hasil)){
                ?>
                <tr>
                    <td><input type="checkbox" id="cekbox" name="cekbox[]" value="<?php echo $kolom['nip'] ?>"/></td>
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
                            echo"<img src='../gambar/$foto' width=75 heigth=25/ >"
                    ?>
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
        <center>
        <button class="btn btn-danger"  type="submit" value="Hapus" name="submit" /><span  class="fa fa-erase"aria-hidden="true"> Hapus Data Pegawai </span></button>
        <!-- <button type="button" name="submit" class="btn btn-danger" type="submit" id="submit" value="Delete"> <span  class="fa fa-erase"aria-hidden="true"> Hapus Data Pegawai </span></button></a> -->
        </center>
        </form>


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
</script>