<div class="row">
    <!-- Sart Modal -->
    <form class="form-horizontal" action="pengolahan_project/simpan_project.php" method="post">
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        <i class="material-icons">clear</i>
                    </button>
                    <h4 class="modal-title">NEW PROJECT</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group label-floating">
                        <label class="control-label">PROJECT NAME</label>
                        <input type="text" class="form-control" name="permintaan" required>
                        <input type="hidden" class="form-control" value="<?php echo $kd_customer; ?>" name="kd_customer">
                    </div>
                    <div class="form-group label-floating">
                        <label class="control-label">CATEGORY</label>
                        <select class="form-control" name="kd_kategori">
                        <?php 
                        $kategori =  mysqli_query($koneksi, "SELECT kd_kategori,nama_kategori FROM t_kategori");
                        while ( $res1 = mysqli_fetch_array($kategori)) {
                        echo '<option value="'.$res1['kd_kategori'].'">'.$res1['nama_kategori'].'</option>';
                        }
                        ?>
                        </select>
                    </div>
                    <div class="form-group label-floating">
                        <label class="control-label">DESKRIPTIONS</label>
                        <textarea class="form-control" rows="5" name="deskripsi"></textarea>
                    </div>
                    <div class="form-group label-floating">
                        <label class="control-label">CITY</label>
                        <input type="text" class="form-control" value="<?php echo $nama_kota; ?>" name="nama_kota" readonly>
                        <input type="hidden" class="form-control" value="<?php echo $kd_kota; ?>" name="kd_kota">
                    </div>

                    <div class="form-group label-floating">
                        <label class="control-label">LOCATION DETAILS</label>
                        <textarea class="form-control" rows="5" name="detail_lokasi"></textarea>
                    </div>
                    <div class="form-group label-floating">
                        <label class="control-label">BUDGET</label>
                        <input type="text" class="form-control" name="budget" required>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">CLOSE</button>
                    <button type="submit" class="btn btn-default">PUBLISH</button>
                </div>
            </div>
        </div>
    </div>
    </form>
    <!--  End Modal -->

	<button class="btn btn-success" style="margin-left : 30px;" data-toggle="modal" data-target="#myModal"><i class="material-icons">note_add</i> NEW PROJECT</button>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header" data-background-color="purple">
                <h4 class="title">Data Project</h4>
                <p class="category">(pernah diajukan sebelumnya)</p>
            </div>
            <?php 
            $query = mysqli_query($koneksi,"SELECT `kd_permintaan`,`permintaan`,`deskripsi`,`tgl_permintaan`, `nama_kota`,`nama_provinsi`,`budget`
			  FROM `t_permintaan` p JOIN `t_kota` k ON p.`kd_kota` = k.`kd_kota`
		      JOIN `t_customer` c ON p.`kd_customer` = c.`kd_customer`
		      JOIN `t_kategori` kt ON p.`kd_kategori`= kt.`kd_kategori`
		      JOIN `t_provinsi` tp ON k.`kd_provinsi` = tp.`kd_provinsi` ORDER BY `kd_permintaan`;");
             ?>
            <div class="card-content table-responsive">
                <table class="table">
                    <thead class="text-primary">
                    	<th>No.</th>
                    	<th>Project</th>
                    	<th>Deskripsi</th>
                    	<th>Tanggal</th>
						<th>Budget</th>
						<th colspan="2">Aksi</th>
                    </thead>
                    <tbody>
                    <?php 
                    $i = 0;
                    while ($res = mysqli_fetch_array($query)) {
                    $i = $i+1;
                     echo "
                        <tr>
                        	<td>$i</td>
                        	<td>$res[permintaan]</td>
                        	<td>$res[deskripsi]</td>
                        	<td>$res[tgl_permintaan]</td>
							<td>$res[budget]</td>
							<td class='td-actions text-right'>
								<a href='index.php?page=detail_project&id=$res[kd_permintaan]'>
								<button type='button' rel='tooltip' title='Details' class='btn btn-primary btn-simple btn-xs'>
									<i class='material-icons'>add_box</i>
								</button></a>
                            ";
                            ?>
								<a href='pengolahan_project/hapus_project.php?id=<?php echo $res['kd_permintaan']; ?>' onclick="return confirm('apakah yakin menghapus data ?')">
		                     	<button type='button' rel='tooltip' title='Remove' class='btn btn-danger btn-simple btn-xs'>
									<i class='material-icons'>close</i>
								</button></a>			
							</td>
                        </tr>
                        <?php
                    	}
                     ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>