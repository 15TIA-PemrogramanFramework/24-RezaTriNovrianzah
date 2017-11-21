<?php
$attributes = array('file' => 'rental_form');
$this->load->view('Templates/Head-Forms2');

$this->load->view('Templates/Navigation2', $attributes);
?>

				<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Form Rental</h3>
              </div>

              
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo $action;?>" method="POST">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Karyawan
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         <select class="form-control select2" name="username" id="karyawan" style="width: 100%;">
											<?php foreach ($karyawan as $key => $value) { ?>
										<option value="<?php echo $value->username; ?>"><?php echo $value->nama_karyawan;?></option>
										<?php } ?>
										</select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama Pelanggan
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <select class="form-control select2" name="id_pelanggan" id="pelanggan" style="width: 100%;">
											<?php foreach ($pelanggan as $key => $value) { ?>
										<option value="<?php echo $value->id_pelanggan; ?>"><?php echo $value->nama_pelanggan;?></option>
										<?php } ?>
										</select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Nama Mobil</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control select2" name="id_mobil" id="mobil" style="width: 100%;">
											<?php foreach ($mobil as $key => $value) { ?>
										<option value="<?php echo $value->id_mobil; ?>"><?php echo $value->nama_mobil;?></option>
										<?php } ?>
										</select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal Sewa
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class='input-group date' id='myDatepicker2'>
                            <input type="date" name="tanggal_sewa" value="<?php echo $tanggal_sewa;?>" class="form-control pull-right" placeholder="">
                            <span class="input-group-addon">
                               <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                        </div>
                      </div>
                       
                       
                      <input type="hidden" name="id_sewa" value="<?php echo $id_sewa; ?>">
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                         <a href="<?php echo site_url('rental'); ?>" class="btn btn-default">Kembali</a>
										<input type="reset" class="btn btn-default">
                          <button type="submit" class="btn btn-primary"><?php echo $button; ?></button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>

           
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
		<script>
				function matchIndex() {
					var indexPelanggan = <?php echo $id_pelanggan; ?>;
					var indexKaryawan = <?php echo $username; ?>;
					var indexMobil = <?php echo $id_mobil; ?>;
					document.getElementById("pelanggan").selectedIndex = indexPelanggan;
					document.getElementById("karyawan").selectedIndex = indexKaryawan;
					document.getElementById("mobil").selectedIndex = indexMobil;
				}
			</script>

		<?php
		$this->load->view('Templates/Footer-Forms2');
		?>