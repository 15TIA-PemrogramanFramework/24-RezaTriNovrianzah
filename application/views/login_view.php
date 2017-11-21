



<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url('assets/') ?>build2/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url('assets/') ?>build2/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url('assets/') ?>build2/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?php echo base_url('assets/') ?>build2/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url('assets/') ?>build2/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">

    <div>

      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <?php echo validation_errors(); ?>
      <?php 
      $attributes = array('class' => 'form login');
      echo form_open('verifylogin', $attributes); 
      ?>
          <section class="login_content">
            <form>
              <h1>Login Form</h1>
              <div>
                <input id="username" type="text" name="username" class="form__input" placeholder="Username" required>
              </div>
              <div>
                <input id="password" type="password" name="password" class="form__input" placeholder="Password" required>
              </div>
              <div>
                <input type="submit" value="Sign In">
                
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>

       
      </div>
    </div>
  </body>
</html>


