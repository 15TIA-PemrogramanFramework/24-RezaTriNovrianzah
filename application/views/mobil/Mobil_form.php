<?php
//$file = "buku_form";
$attributes = array('file' => 'mobil_form');
$this->load->view('Templates/Head-Forms2');
$this->load->view('Templates/Navigation2', $attributes);
?>

		<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Form Mobil</h3>
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Mobil 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         <input type="text" name="nama_mobil" class="form-control" placeholder="" value="<?php echo $nama_mobil;?>">	
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Merk Mobil 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="merk_mobil" class="form-control" placeholder="" value="<?php echo $merk_mobil;?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Nomor Polisi</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="nomor_polisi" class="form-control" placeholder="" value="<?php echo $nomor_polisi;?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Harga 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         <input type="text" name="harga" class="form-control" placeholder="" value="<?php echo $harga;?>">
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Warna 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         <input type="text" name="warna" value="<?php echo $warna;?>" class="form-control" placeholder="">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                         <a href="<?php echo site_url('mobil'); ?>" class="btn btn-default">Kembali</a>
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
		<?php
		$this->load->view('Templates/Footer-Forms2');
		?>