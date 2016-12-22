<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>

<body class="flat-blue">

            <div class="box-header">
              <h3 class="box-title"><i class="fa fa-tasks"></i> Absensi Pegawai</h3>
              <center><h3 class="box-title"><?php 
                date_default_timezone_set('Asia/Jakarta'); 
                echo date('l, d F Y'); ?></h3></center></div> 
            <div class="box-body">

            <!-- Small boxes (Stat box) -->
            <?php 
            include"../config/koneksi.php";
            $query_jmlpegawai = mysqli_query($koneksi,'SELECT COUNT(`kd_absen`) AS "hadir" FROM `t_absen` WHERE `tanggal` LIKE CURDATE();');
            $res = mysqli_fetch_array($query_jmlpegawai);
            $jmlpegawai = $res['hadir'];
             ?>
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $jmlpegawai; ?></h3>
              <p>Total Pegawai</p>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
            <a href="media.php?page=tampil_absen&absen=absen" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
            <?php 
            $query_absen = mysqli_query($koneksi,'SELECT COUNT(`kd_absen`) AS "hadir" FROM `t_absen` WHERE `tanggal` LIKE CURDATE() AND `keterangan` LIKE "Hadir";');
            $res1 = mysqli_fetch_array($query_absen);
            $absenhadir = $res1['hadir'];
           ?>          
           <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo $absenhadir; ?></h3>

              <p>Pegawai Hadir</p>
            </div>
            <div class="icon">
              <i class="fa fa-check"></i>
            </div>
            <a href="media.php?page=tampil_absen&absen=tampil_hadir" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <?php 
            $query_absen = mysqli_query($koneksi,'SELECT COUNT(`kd_absen`) AS "t_hadir" FROM `t_absen` WHERE `tanggal` LIKE CURDATE() AND `keterangan` LIKE "Tidak Hadir";');
            $res1 = mysqli_fetch_array($query_absen);
            $t_hadir = $res1['t_hadir'];
           ?> 
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo $t_hadir; ?></h3>

              <p>Tidak Hadir</p>
            </div>
            <div class="icon">
              <i class="fa fa-close"></i>
            </div>
            <a href="media.php?page=tampil_absen&absen=tidak_hadir" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <?php 
            $query_cuti = mysqli_query($koneksi,'SELECT COUNT(`kd_absen`) AS "t_cuti" FROM `t_absen` WHERE `tanggal` LIKE CURDATE() AND `keterangan` LIKE "cuti";');
            $res2 = mysqli_fetch_array($query_cuti);
            $t_cuti = $res2['t_cuti'];
           ?> 
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo $t_cuti; ?></h3>

              <p>Cuti</p>
            </div>
            <div class="icon">
              <i class="fa fa-hourglass"></i>
            </div>
            <a href="media.php?page=tampil_absen&absen=cuti" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
    
      <br>
      <?php 
          $absen = (isset($_GET['absen']))? $_GET['absen'] : "main";
          switch ($absen) {

          //pegawai
          case 'absen': include "tampil_absen_harian.php"; break;
          case 'tampil_hadir': include "tampil_hadir.php"; break;
          case 'tidak_hadir': include "tampil_tidak_hadir.php"; break;
          case 'cuti': include "tampil_cuti.php"; break;
          default: include 'utama.php';
          }
          ?>
        



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

