<?php
//$file = "anggota_list";
$attributes = array('file' => 'anggota_list');
$this->load->view('Templates/Head-Tables2');

$this->load->view('Templates/Navigation2', $attributes);
?>


<!-- page content -->
<div class="right_col" role="main">
	<div class="">
		<div class="page-title">
			<div class="title_left">
				<h3>Pelanggan  <small>Rental Mobil RIE3</small></h3>
			</div>

			
		</div>

		<div class="clearfix"></div>

		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel">
					<div class="x_title">
						
					</li>
					
				</ul>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				
				<table id="datatable" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Pelanggan</th>
							<th>Jenis Kelamin</th>
							<th>Alamat</th>
							<th>No Telepon</th>
							<th>Aksi</th>
						</tr>
					</thead>


					<tbody>
						<?php foreach ($pelanggan as $key => $value) { ?>
						<tr>
							<td align="center" style="vertical-align:middle;"><?php echo $key+1;?></td>
							<td align="center" style="vertical-align:middle;"><?php echo $value->nama_pelanggan;?></td>
							<td align="center" style="vertical-align:middle;"><?php echo $value->jenis_kelamin;?></td>
							<td align="center" style="vertical-align:middle;"><?php echo $value->alamat;?></td>
							<td align="center" style="vertical-align:middle;"><?php echo $value->no_tlp;?></td>
							<td align="center" style="vertical-align:middle;">
								<?php echo anchor(site_url("Pelanggan/edit/".$value->id_pelanggan),
									'<i class="fa fa-pencil"></i>', 
									'class="btn btn-warning"');?>
								<?php
								echo anchor(site_url("Pelanggan/delete/".$value->id_pelanggan),
									'<i class="fa fa-trash"></i>', 
									'class="btn btn-danger"');
									?>
								</td>
							</tr>
							<?php } ?> 
						</tbody>
					</table>
			

		
		<!-- /page content -->
		<?php
		$this->load->view('Templates/Footer-Tables2');
		?>