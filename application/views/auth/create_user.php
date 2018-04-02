<<<<<<< Updated upstream
<h1><?php echo lang('create_user_heading');?></h1>
<p><?php echo lang('create_user_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("administration/register");?>

      <p>
            <?php echo lang('create_user_fname_label', 'first_name');?> <br />
            <?php echo form_input($first_name);?>
      </p>

      <p>
            <?php echo lang('create_user_lname_label', 'last_name');?> <br />
            <?php echo form_input($last_name);?>
      </p>

      <?php
      if($identity_column!=='email') {
          echo '<p>';
          echo lang('create_user_identity_label', 'identity');
          echo '<br />';
          echo form_error('identity');
          echo form_input($identity);
          echo '</p>';
      }
      ?>

      <p>
            <?php echo lang('create_user_company_label', 'company');?> <br />
            <?php echo form_input($company);?>
      </p>

      <p>
            <?php echo lang('create_user_email_label', 'email');?> <br />
            <?php echo form_input($email);?>
      </p>

      <p>
            <?php echo lang('create_user_phone_label', 'phone');?> <br />
            <?php echo form_input($phone);?>
      </p>

      <p>
            <?php echo lang('create_user_password_label', 'password');?> <br />
            <?php echo form_input($password);?>
      </p>

      <p>
            <?php echo lang('create_user_password_confirm_label', 'password_confirm');?> <br />
            <?php echo form_input($password_confirm);?>
      </p>


      <p><?php echo form_submit('submit', lang('create_user_submit_btn'));?></p>

<?php echo form_close();?>
=======
<!DOCTYPE HTML>
<html lang="en">
<head>
    <!--=============== basic  ===============-->
    <meta charset="UTF-8">
    <meta name="google-signin-client_id" content="809452780704-kf8rj9v58h7cm0eiijjvkhnbrl6shnsd.apps.googleusercontent.com">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="robots" content="index, follow"/>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <title>Login - Where in Angeles City</title>
    <script src="assets/frontend-assets/jquery/jquery-3.3.1.slim.min.js"></script>
    <link rel="stylesheet" href="assets/frontend-assets/fontawesome-free-5.0.8/svg-with-js/css/fa-svg-with-js.css">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <!--=============== css  ===============-->
    <link type="text/css" rel="stylesheet" href="assets/frontend-assets/css/reset.css">
    <link type="text/css" rel="stylesheet" href="assets/frontend-assets/css/plugins.css">
    <link type="text/css" rel="stylesheet" href="assets/frontend-assets/css/style.css">
    <link type="text/css" rel="stylesheet" href="assets/frontend-assets/css/color.css">
    <link type="text/css" rel="stylesheet" href="assets/frontend-assets/css/alerts.css">
    <!--=============== favicons ===============-->
    <link rel="shortcut icon" href="assets/frontend-assets/images/favicon.png">
</head>
  <body style="background-color: #fff;">
    <!--register form -->
        <div class="main-overlay"></div>
        <div class="main-register-holder" style="position: relative; top: -80px;">
          <div class="main-register fl-wrap">
            <h3><img src="assets/frontend-assets/images/logo9.png" alt="" style="margin-left: 10px;"></h3>
            <div class="col-md-6">
                  <!-- <div class="close-reg"><i class="fa fa-times"></i></div> -->
                  <div id="tabs-container" style="margin-top: -20px;">
                      <div class="tab">
                          <div id="tab-1" class="tab-content">
                              <div class="custom-form">
                                <div class="message"></div>
                                <form id="frm_login">
                                  <label>Username or Email Address * </label>
                                  <input name="identity" type="text" onClick="this.select()" value id="identity">
                                  <label >Password * </label>
                                  <input name="password" type="password" onClick="this.select()" value id="password" >
                                  <button type="button" class="log-submit-btn"><span>Log In</span></button>
                                  <div class="clearfix"></div>
                                  <div class="filter-tags">
                                    <input id="check-a" type="checkbox" name="remember" value="1" id="remember">
                                    <label for="check-a">Remember me</label>
                                  </div>
                                </form>
                                <div class="lost_password">
                                    <a href="#">Lost Your Password?</a>
                                </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-6 soc_panel">
                <div class="soc-log fl-wrap">
                    <p>For faster login or register use your social account.</p>
                    <a href="#" class="facebook-log"><i class="fa fa-facebook-official"></i>Log in with Facebook</a>
                    <a href="#" class="google-log"><i class="fa fa-google-plus"></i> Sign in with Google</a>
                    <a href="#" class="twitter-log"><i class="fa fa-twitter"></i> Log in with Twitter</a>
                    <a href="#" class="instagram-log"><i class="fa fa-instagram"></i> Log in with Instagram</a>
                </div>
              </div>
          </div>
        </div>
    <!--register form end -->
    <script type="text/javascript" src="assets/frontend-assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/frontend-assets/js/plugins.js"></script>
    <script type="text/javascript" src="assets/frontend-assets/js/scripts.js"></script>
    <script type="text/javascript" src="assets/frontend-assets/js/login/index.js"></script>
    <script type="text/javascript" src="assets/frontend-assets/js/alerts.js"></script>
  </body>
</html>
>>>>>>> Stashed changes
