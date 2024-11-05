
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
                            EDIT QUISIONER
							</td>
							<td width="50%" align="right" >
                            ID : 
							<?php
							$id_quisioner = $_GET['id'];
							$query_data = mysqli_fetch_array(mysqli_query($con, "select * from 01_quisioner where id_quisioner = '$id_quisioner'"));
							echo $id_quisioner;?>
							</td>
						</tr>
						</table>
                        </div>
                        <div class="panel-body">
					<form class="form-horizontal" action="?bayes=01_quisioner_proses&act=edit" method="POST" enctype="multipart/form-data">
					<!--LEFT SECTION -->
					<div class="col-lg-10">
						<input type="hidden" name="id_quisioner" value="<?php echo $id_quisioner;?>" class="form-control" readonly />
						<div class="form-group">
							<label class="control-label col-lg-4">NAMA QUISIONER</label>
							<div class="col-lg-8">
								<input type="text" name="nama_quisioner" value="<?php echo $query_data['nama_quisioner'];?>" class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">JK BALITA PEREMPUAN </label>
							<div class="col-lg-8">
								<select class="form-control chzn-select" name="jalurprestasi_quisioner">
									<option value="<?php echo $query_data['quisioner[0]'];?>"><?php echo $query_data['quisioner[0]'];?></option>
									<option value="YA">YA</option>
									<option value="TIDAK">TIDAK</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">UMUR 1-20 BULAN</label>
							<div class="col-lg-8">
								<select class="form-control chzn-select" name="pendidikanibuminimalsma_quisioner">
									<option value="<?php echo $query_data['quisioner[1]'];?>"><?php echo $query_data['quisioner[1]'];?></option>
									<option value="YA">YA</option>
									<option value="TIDAK">TIDAK</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">UMUR 21-40 BULAN</label>
							<div class="col-lg-8">
								<select class="form-control chzn-select" name="ip1_328_quisioner">
									<option value="<?php echo $query_data['quisioner[2]'];?>"><?php echo $query_data['quisioner[2]'];?></option>
									<option value="YA">YA</option>
									<option value="TIDAK">TIDAK</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">UMUR 41-60 BULAN</label>
							<div class="col-lg-8">
								<select class="form-control chzn-select" name="ip2_330_quisioner">
									<option value="<?php echo $query_data['quisioner[3]'];?>"><?php echo $query_data['quisioner[3]'];?></option>
									<option value="YA">YA</option>
									<option value="TIDAK">TIDAK</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">TINGGI < 70 CM</label>
							<div class="col-lg-8">
								<select class="form-control chzn-select" name="ip3_332_quisioner">
									<option value="<?php echo $query_data['quisioner[4]'];?>"><?php echo $query_data['quisioner[4]'];?></option>
									<option value="YA">YA</option>
									<option value="TIDAK">TIDAK</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">TINGGI 70-80 CM</label>
							<div class="col-lg-8">
								<select class="form-control chzn-select" name="ip4_334_quisioner">
									<option value="<?php echo $query_data['quisioner[5]'];?>"><?php echo $query_data['quisioner[5]'];?></option>
									<option value="YA">YA</option>
									<option value="TIDAK">TIDAK</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">TINGGI 81-90 CM</label>
							<div class="col-lg-8">
								<select class="form-control chzn-select" name="ip5_336_quisioner">
									<option value="<?php echo $query_data['quisioner[6]'];?>"><?php echo $query_data['quisioner[6]'];?></option>
									<option value="YA">YA</option>
									<option value="TIDAK">TIDAK</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">TINGGI >90 CM</label>
							<div class="col-lg-8">
								<select class="form-control chzn-select" name="ip6_338_quisioner">
									<option value="<?php echo $query_data['quisioner[7]'];?>"><?php echo $query_data['quisioner[7]'];?></option>
									<option value="YA">YA</option>
									<option value="TIDAK">TIDAK</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">BB NAIK ?</label>
							<div class="col-lg-8">
								<select class="form-control chzn-select" name="sks1_21_quisioner">
									<option value="<?php echo $query_data['quisioner[8]'];?>"><?php echo $query_data['quisioner[8]'];?></option>
									<option value="YA">YA</option>
									<option value="TIDAK">TIDAK</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">STATUS</label>
							<div class="col-lg-8">
								<select class="form-control chzn-select" name="sks2_21_quisioner">
									<option value="<?php echo $query_data['quisioner[9]'];?>"><?php echo $query_data['quisioner[9]'];?></option>
									<option value="YA">YA</option>
									<option value="TIDAK">TIDAK</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">BB/UMUR</label>
							<div class="col-lg-8">
								<select class="form-control chzn-select" name="sks3_21_quisioner">
									<option value="<?php echo $query_data['quisioner[10]'];?>"><?php echo $query_data['quisioner[10]'];?></option>
									<option value="YA">YA</option>
									<option value="TIDAK">TIDAK</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">PENDEK?</label>
							<div class="col-lg-8">
								<select class="form-control chzn-select" name="sks4_21_quisioner">
									<option value="<?php echo $query_data['quisioner[11]'];?>"><?php echo $query_data['quisioner[11]'];?></option>
									<option value="YA">YA</option>
									<option value="TIDAK">TIDAK</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">KURUS ?</label>
							<div class="col-lg-8">
								<select class="form-control chzn-select" name="sks5_21_quisioner">
									<option value="<?php echo $query_data['quisioner[12]'];?>"><?php echo $query_data['quisioner[12]'];?></option>
									<option value="YA">YA</option>
									<option value="TIDAK">TIDAK</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">PERUT BESAR ?</label>
							<div class="col-lg-8">
								<select class="form-control chzn-select" name="sks6_21_quisioner">
									<option value="<?php echo $query_data['quisioner[13]'];?>"><?php echo $query_data['quisioner[13]'];?></option>
									<option value="YA">YA</option>
									<option value="TIDAK">TIDAK</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">KETERANGAN DIAGNOSA</label>
							<div class="col-lg-8">
								<select class="form-control chzn-select" name="lulus_quisioner">
									<option value="<?php echo $query_data['lulus_quisioner'];?>"><?php echo $query_data['lulus_quisioner'];?></option>
									<option value="STUNTING">STUNTING</option>
									<option value="NORMAL">NORMAL</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4"></label>
							<div class="col-lg-7">
								<button class="btn btn-warning"><i class="icon-arrow-right icon-white"></i> Simpan </button>
							</div>
						</div>
					</div>
					<!--RIGHT SECTION -->
					</form>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
       <!--END PAGE CONTENT -->
