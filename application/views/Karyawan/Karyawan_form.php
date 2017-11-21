<?php
//$file = "petugas_form";
$attributes = array('file' => 'petugas_form');
$this->load->view('Templates/Head-Forms2');

$this->load->view('Templates/Navigation2', $attributes);
?>

		 <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Form Karyawan</h3>
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Username 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         <input type="text" name="username" class="form-control" placeholder="" value="<?php echo $username;?>">	
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama Karyawan 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         <input type="text" name="nama_karyawan" class="form-control" placeholder="" value="<?php echo $nama_karyawan;?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Password</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="password" name="password" class="form-control" placeholder="" value="<?php echo $password;?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Jabatan</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                      <select class="form-control select2 pull-right" name="jabatan" value="<?php echo $jabatan;?>" style="width: 100%;">
											<option selected="selected">Admin</option>
											<option>Karyawan</option>
							</select>
							</div>
                        </div>
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Kelamin</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div id="gender" class="btn-group" data-toggle="buttons">
                            <select class="form-control select2" name="jenis_kelamin" style="width: 100%;">
											<option selected="selected">Laki-laki</option>
											<option>Perempuan</option>
							</select>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Alamat 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         <input type="text" name="alamat" value="<?php echo $alamat;?>" class="form-control" placeholder="">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                         <a href="<?php echo site_url('karyawan'); ?>" class="btn btn-default">Kembali</a>
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