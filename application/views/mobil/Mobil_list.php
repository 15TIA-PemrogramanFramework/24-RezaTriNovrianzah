<?php
//$file = "buku_list";
$attributes = array('file' => 'mobil_list');
$this->load->view('Templates/Head-Tables2');

$this->load->view('Templates/Navigation2', $attributes);
?>


<!-- page content -->
<div class="right_col" role="main">
	<div class="">
		<div class="page-title">
			<div class="title_left">
				<h3>Mobil  <small>Rental Mobil RIE3</small></h3>
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
							<th>Nama Mobil</th>
							<th>Merk Mobil</th>
							<th>Nomor Polisi</th>
							<th>Warna</th>
							<th>Harga</th>
							<?php $jabatan = $this->session->userdata('jabatan'); 
							if($jabatan == 'Admin'){ ?>
							<th>Aksi</th>
							<?php } ?>
						</tr>
					</thead>


					<tbody>
						<?php foreach ($mobil as $key => $value) { ?>
						<tr>
							<td align="center" style="vertical-align:middle;"><?php echo $key+1;?></td>
							<td align="center" style="vertical-align:middle;"><?php echo $value->nama_mobil;?></td>
							<td align="center" style="vertical-align:middle;"><?php echo $value->merk_mobil;?></td>
							<td align="center" style="vertical-align:middle;"><?php echo $value->nomor_polisi;?></td>
							<td align="center" style="vertical-align:middle;"><?php echo $value->warna;?></td>
							<td align="center" style="vertical-align:middle;"><?php echo $value->harga;?></td>
							<?php $jabatan = $this->session->userdata('jabatan'); 
							if($jabatan == 'Admin'){ ?>
							<td align="center" style="vertical-align:middle;">
								<?php echo anchor(site_url("mobil/edit/".$value->id_mobil),
									'<i class="fa fa-pencil"></i>', 
									'class="btn btn-warning"');?>
								<?php 
								echo anchor(site_url("mobil/delete/".$value->id_mobil),
									'<i class="fa fa-trash"></i>', 
									'class="btn btn-danger"');
									?>
								</td>
								<?php } ?>
							</tr>
							<?php } ?>
						</tbody>
					</table>
					

					
					<!-- /page content -->
					<?php
					$this->load->view('Templates/Footer-Tables2');
					?>