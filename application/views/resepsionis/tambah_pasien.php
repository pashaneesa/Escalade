<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
.input{
	margin-top: 50px;
}
</style>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" >					

	<div class="row">
		<div class="col-lg-12">
		</div>
	</div><!--/.row-->
	<br>	


	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-body">
					<font style="font-weight: bold; font-size: 15px; padding-left: 27px">Buat Janji Pemeriksaan <i class="fa fa-chevron-right" aria-hidden="true"></i> Buat Akun Keluarga</font><br><br>
					<form action="<?php echo base_url('Superdokter/add_pasien/');?>" method="post">
						<div class="form-group">																				
							<div class="col-md-12">
								<div class="col-lg-12" style="margin-bottom: 15px"><b>Informasi Umum</b></div><br>
								<div class="col-lg-2">	
									Nama Depan 
								</div>
								<div class="col-lg-4">	
									<div class="form-group">	
										<input type="text" class="form-control" rows="3" name="nama_depan" id="nama_depan" required="required">
									</div>
								</div><br>
								<div class="col-lg-2">	 
									Nama Belakang
								</div>
								<div class="col-lg-4">	
									<div class="form-group">	
										<input type="text" class="form-control" rows="3" name="nama_belakang" id="nama_belakang" required="required">
									</div></div>

									<div class="col-lg-2">	 
										Tanggal lahir
									</div>
									<div class="col-lg-4">	
										<div class="form-group">	
											<input type="date" class="form-control" rows="3" name="tanggal_lahir" id="tanggal_lahir" required="required">
										</div></div>
										<div class="col-lg-2">	 
											Jenis kelamin
										</div>
										<div class="col-lg-4">	
											<div class="form-group">	
												<select class="form-control" name="jenis_kelamin" id="jenis_kelamin" required="required">
													<option value="" disabled selected style="display: none;">-- Pilih Jenis Kelamin --</option>
													<option value="Laki-Laki" id="Laki-Laki">Laki-Laki</option>
													<option value="Perempuan" id="Perempuan">Perempuan</option>
												</select>
											</div></div>
											<div class="col-lg-12" style="margin-bottom: 15px; margin-top: 20px;"><b>Kontak yang dapat dihubungi</b></div><br>

											<div class="col-lg-2">	 
												Email
											</div>
											<div class="col-lg-4">	
												<div class="form-group">	
													<input type="email" class="form-control" rows="3" name="email" id="email" required="required">
												</div></div>
												<div class="col-lg-2">	 
													No. HP
												</div>
												<div class="col-lg-4">	
													<div class="form-group">	
														<input type="number" class="form-control" rows="3" name="no_hp" id="no_hp" required="required">
													</div>
												</div>
												<div class="col-lg-12" style="margin-bottom: 20px; margin-top: 20px">Dengan menekan tombol dibawah, maka pastikan pasien Anda telah menyetujui <font color="salmon"> Perjanjian User, Kebijakan Privasi,</font> dan <font color="salmon"> Kebijakan Cookie </font></div>

												<div class="form-group">	
													<button class="btn salmon col-sm-4" style="float: right; height: 50px; width: 100%" type="submit">Buat Akun Keluarga</button> 
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div><!-- /.col-->
					</div><!-- /.row -->

	</div><!--/.main-->