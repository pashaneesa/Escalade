	<div class="cd-content-wrapper">
		<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" style="margin-top: 20px;">     
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-body">
							<font style="font-weight: bold; font-size: 20px;">Pembayaran</font><br><br>
							<table id="all_data_json" data-toggle="table" data-url="<?php echo base_url('rekam_medis/data_pasien_rekam_medis');?>" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="nama" data-sort-order="asc" data-toolbar="#toolbar">
								<thead>
									<tr>
										<th data-field="no_antrian" data-formatter="runningFormatter" data-align="right">No.</th>
										<th data-field="nama_depan" data-sortable="true">Nama Pasien</th>
										<th data-field="tanggal_lahir" data-sortable="true">Tanggal Lahir</th>
										<th data-field="id_rekam_mesdis" data-sortable="true">No. Rekam Medis</th>
										<th data-field="nama_dokter" data-sortable="true">Dokter Pilihan</th>
										<th data-field="tanggal_rencana" data-sortable="true">Tanggal Periksa</th>
										<th data-field="jam_rencana" data-sortable="true">Jam Periksa</th>
										<th>Activity</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($bayar->result() as $result): ?>
										<?php $tgl_rencana = date('d F Y', strtotime($result->tanggal_rencana));?>
										<?php $tgl_lahir = date('d F Y', strtotime($result->tanggal_lahir));?>
										<tr>
											<?php $no = 1;?>
											<td><?php echo $no++  ?></td>
											<td><?php echo $result->nama_depan ?> <?php echo $result->nama_belakang ?></td>
											<td><?php echo $tgl_lahir ?></td>
											<td><?php echo $result->id_rekam_medis ?></td>
											<td><?php echo $result->nama_dokter ?></td>
											<td><?php echo $tgl_rencana ?></td>
											<td><?php echo $result->jam_rencana ?></td>
											<td><a href="<?php echo base_url() ?>Superdokter/metode_bayar/<?php echo $result->id_booking ?>" type="button" class="btn btn-success col-md-12"  style="text-align: center; color: white; background-color: #00b050; border-radius: 0px;"> Proses Bayar </a></td>
										</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>	
	</div>
	

	<script>
		function runningFormatter(value, row, index) {
			return index+1;
		}
		function prosesRekamMedis(value){
			return '<a href="<?php echo base_url();?>rekam_medis/create/'+value+'" class="btn btn-primary">Proses</a>';
		}
	</script>   
