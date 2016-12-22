<body class="flat-blue">
            <div class="box-header">
              <h3 class="box-title"><i class="fa fa-tasks"></i> PENGOLAHAN GAJI</h3>
            </div>

            <?php 
                include "../config/koneksi.php";
                $query = mysqli_query($koneksi,"SELECT * FROM `t_pengolahan_gaji`;");
                $kolom = mysqli_fetch_array($query);
                $gapok = number_format($kolom["gaji_pokok"],0,".",".");
                $tunjangan_anak = number_format($kolom["tunjangan_anak"],0,".",".");
                $gaji_lembur = number_format($kolom["gaji_lembur"],0,".",".");
             ?>
                  
                                
                <div class="box-body">
                <form class="form-horizontal" action="" method="post" enctype="multypart/form-data" name="edit" id="edit">
              
                  <div class="col-lg-4 col-xs-6">
                  <!-- small box -->
                  <div class="small-box bg-aqua">
                    <div class="inner">
                      <h3>Rp. <?php echo "$gapok"; ?>,-</h3>

                      <p>Gaji Pokok Pegawai</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-money"></i>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 col-xs-6">
                  <!-- small box -->
                  <div class="small-box bg-aqua">
                    <div class="inner">
                      <h3>Rp. <?php echo "$tunjangan_anak"; ?>,-</h3>

                      <p>Tunjangan Anak</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-money"></i>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 col-xs-6">
                  <!-- small box -->
                  <div class="small-box bg-aqua">
                    <div class="inner">
                      <h3>Rp. <?php echo "$gaji_lembur"; ?>,-</h3>

                      <p>Upah Lembur/hari</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-money"></i>
                    </div>
                  </div>
                </div>

                <div class="col-lg-12 col-xs-6">
                  <!-- small box -->
                  <div class="small-box bg-aqua">
                    <a href="media.php?page=edit_tunjangan" data-toggle="modal" class="small-box-footer">
                      <h4>UBAH TUNJANGAN DAN UPAH LEMBUR<i class="fa fa-arrow-circle-right"></i></h4></a>
                  </div>
                </div>
                
                </form>
            </div>
</div>
</body>
<!-- ============================= -->
<br>
