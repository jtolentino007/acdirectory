<!-- <h1><?php echo lang('login_heading');?></h1>
<p><?php echo lang('login_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("Authentication/login");?>

  <p>
    <?php echo lang('login_identity_label', 'identity');?>
    <?php echo form_input($identity);?>
  </p>

  <p>
    <?php echo lang('login_password_label', 'password');?>
    <?php echo form_input($password);?>
  </p>

  <p>
    <?php echo lang('login_remember_label', 'remember');?>
    <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
  </p>


  <p><?php echo form_submit('submit', lang('login_submit_btn'));?></p>

<?php echo form_close();?>

<p><a href="authentication/forgot_password"><?php echo lang('login_forgot_password');?></a></p> -->












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
        <title>Login</title>
        <script src="assets/frontend-assets/jquery/jquery-3.3.1.slim.min.js"></script>
        <link rel="stylesheet" href="assets/frontend-assets/fontawesome-free-5.0.8/svg-with-js/css/fa-svg-with-js.css">
        <script src="https://apis.google.com/js/platform.js" async defer></script>
        <!--=============== css  ===============-->
        <link type="text/css" rel="stylesheet" href="assets/frontend-assets/css/reset.css">
        <link type="text/css" rel="stylesheet" href="assets/frontend-assets/css/plugins.css">
        <link type="text/css" rel="stylesheet" href="assets/frontend-assets/css/style.css">
        <link type="text/css" rel="stylesheet" href="assets/frontend-assets/css/color.css">
        <!--=============== favicons ===============-->
        <link rel="shortcut icon" href="assets/frontend-assets/images/favicon.png">
</head>
    <body style="background-color: #fff;">
      <!--register form -->
          <div class="main-overlay"></div>
          <div class="main-register-holder" style="position: relative; top: -80px;">
              <div class="main-register fl-wrap">
                  <!-- <div class="close-reg"><i class="fa fa-times"></i></div> -->
                  <h3><img src="assets/frontend-assets/images/logo9.png" alt=""></h3>
                  <div id="tabs-container" style="margin-top: -20px;">
                      <ul class="tabs-menu">
                          <li class="current"><a href="#tab-1">Login</a></li>
                          <li><a href="#tab-2">Register</a></li>
                      </ul>
                      <div class="tab">
                          <div id="tab-1" class="tab-content">
                              <div class="custom-form">
                                  <form method="post"  name="registerform">
                                    <?php echo form_open("Authentication/login");?>
                                      <label>Username or Email Address * </label>
                                      <input name="identity" type="text"   onClick="this.select()" value id="identity">
                                      <label >Password * </label>
                                      <input name="password" type="password"   onClick="this.select()" value id="password" >
                                      <button type="submit"  class="log-submit-btn"><span>Log In</span></button>
                                      <div class="clearfix"></div>
                                      <div class="filter-tags">
                                          <input id="check-a" type="checkbox" name="remember" value="1" id="remember">
                                          <label for="check-a">Remember me</label>
                                      </div>
                                    <?php echo form_close();?>
                                  </form>
                                  <div class="lost_password">
                                      <a href="#">Lost Your Password?</a>
                                  </div>
                              </div>
                          </div>
                          <div class="tab">
                              <div id="tab-2" class="tab-content">
                                  <div class="custom-form">
                                      <form method="post"   name="registerform" class="main-register-form" id="main-register-form2">
                                          <label >First Name * </label>
                                          <input name="name" type="text"   onClick="this.select()" value="">
                                          <label>Second Name *</label>
                                          <input name="name2" type="text"  onClick="this.select()" value="">
                                          <label>Email Address *</label>
                                          <input name="email" type="text"  onClick="this.select()" value="">
                                          <label >Password *</label>
                                          <input name="password" type="password"   onClick="this.select()" value="" >
                                          <button type="submit" name="submit" value="Login"    class="log-submit-btn"  ><span>Register</span></button>
                                      </form>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="log-separator fl-wrap"><span>or</span></div>
                  <div class="soc-log fl-wrap">
                      <p>For faster login or register use your social account.</p>
                      <a href="#" class="facebook-log"><i class="fa fa-facebook-official"></i>Log in with Facebook</a>
                      <a href="#" class="google-log"><i class="fa fa-google-plus"></i> Sign in with Google</a>
                      <a href="#" class="twitter-log"><i class="fa fa-twitter"></i> Log in with Twitter</a>
                      <a href="#" class="instagram-log"><i class="fa fa-instagram"></i> Log in with Instagram</a>
                  </div>
              </div>
          </div>
      <!--register form end -->
      <!--=============== scripts  ===============-->
      <script type="text/javascript" src="assets/frontend-assets/js/jquery.min.js"></script>
      <script type="text/javascript" src="assets/frontend-assets/js/plugins.js"></script>
      <script type="text/javascript" src="assets/frontend-assets/js/scripts.js"></script>
    </body

</html>
