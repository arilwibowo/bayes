        <!--PAGE CONTENT -->
        <div id="content">

            <div class="inner">
				<!--BLOCK SECTION -->
                <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        <table width="100%">
						<tr>
							<td width="50%">
                            GEJALA
							</td>
							<td width="50%" align="right" >
								<a href="?bayes=01_quisioner_add" target="_blank" title="Tambah Quisioner"><button class="btn btn-success btn-xs"><i class="icon-plus icon-white"></i></button></a>
							</td>
						</tr>
						</table>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="datatabel">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>NAMA QUISIONER</th>
                                            <th>JK BALITA PEREMPUAN</th>
                                            <th>UMUR 1-20 BULAN</th>
                                            <th>UMUR 21-40 BULAN</th>
                                            <th>UMUR 41-60 BULAN</th>
                                            <th>TINGGI < 70 CM</th>
                                            <th>TINGGI 71-80 CM</th>
                                            <th>TINGGI 81-90 CM</th>
                                            <th>TINGGI > 90 CM</th>
                                            <th>BB NAIK ?</th>
                                            <th>STATUS</th>
                                            <th>BB/UMUR</th>
                                            <th>PENDEK?</th>
                                            <th>KURUS?</th>
                                            <th>PERUT BESAR</th>
                                            <th>DIAGNOSA</th>
                                            <th>ACT</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php 
									$query = mysqli_query($con, "SELECT * FROM 01_quisioner order by id_quisioner ASC");
									$no = 1;
									while ($data = mysqli_fetch_array($query)){
									?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $no;?></td>
                                            <td><?php echo $data['nama_quisioner'];?></td>
                                            <td><?php echo $data['quisioner[0]'];?></td>
                                            <td><?php echo $data['quisioner[1]'];?></td>
                                            <td><?php echo $data['quisioner[2]'];?></td>
                                            <td><?php echo $data['quisioner[3]'];?></td>
                                            <td><?php echo $data['quisioner[4]'];?></td>
                                            <td><?php echo $data['quisioner[5]'];?></td>
                                            <td><?php echo $data['quisioner[6]'];?></td>
                                            <td><?php echo $data['quisioner[7]'];?></td>
                                            <td><?php echo $data['quisioner[8]'];?></td>
                                            <td><?php echo $data['quisioner[9]'];?></td>
                                            <td><?php echo $data['quisioner[10]'];?></td>
                                            <td><?php echo $data['quisioner[11]'];?></td>
                                            <td><?php echo $data['quisioner[12]'];?></td>
                                            <td><?php echo $data['quisioner[13]'];?></td>
                                            <td><?php echo $data['lulus_quisioner'];?></td>
                                            <td class="center" width="50px">
											<a href="?bayes=01_quisioner_edit&id=<?php echo $data['id_quisioner'];?>" target="_blank"><button class="btn btn-info btn-xs"><i class="icon-pencil icon-white"></i></button></a>
											<a href="?bayes=01_quisioner_proses&act=delete&id=<?php echo $data['id_quisioner'];?>" target="_blank"><button class="btn btn-danger btn-xs"><i class="icon-trash icon-white"></i></button></a>
											</td>
                                        </tr>
									<?php 
									$no++;
									} ?>
                                    </tbody>
                                </table>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
       <!--END PAGE CONTENT -->
<script src="assets/plugins/jquery-2.0.3.min.js"></script>
<script src="assets/plugins/dataTables/jquery.dataTables.js"></script>
<script src="assets/plugins/dataTables/dataTables.bootstrap.js"></script>
<script type="text/javascript">
	$( document ).ready(function() {
		$('#datatabel').DataTable();
	});
</script>
        
