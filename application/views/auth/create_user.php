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
    <title>Register - Where in Angeles City</title>
    <script src="../assets/frontend-assets/jquery/jquery-3.3.1.slim.min.js"></script>
    <link rel="stylesheet" href="../assets/frontend-assets/fontawesome-free-5.0.8/svg-with-js/css/fa-svg-with-js.css">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <!--=============== css  ===============-->
    <link type="text/css" rel="stylesheet" href="../assets/frontend-assets/css/reset.css">
    <link type="text/css" rel="stylesheet" href="../assets/frontend-assets/css/plugins.css">
    <link type="text/css" rel="stylesheet" href="../assets/frontend-assets/css/style.css">
    <link type="text/css" rel="stylesheet" href="../assets/frontend-assets/css/color.css">
    <link type="text/css" rel="stylesheet" href="../assets/frontend-assets/css/alerts.css">
    <!--=============== favicons ===============-->
    <link rel="shortcut icon" href="../assets/frontend-assets/images/favicon.png">
</head>
  <body style="background-color: #fff;">
    <!--register form -->
        <div class="main-overlay"></div>
        <div class="main-register-holder-register" style="position: relative; top: -80px;">
          <div class="main-register fl-wrap">
            <h3><img src="../assets/frontend-assets/images/logo9.png" alt="" style="margin-left: 10px;"></h3>
              <!-- <div class="close-reg"><i class="fa fa-times"></i></div> -->
              <div id="tabs-container" style="margin-top: -20px;">
                  <div class="tab">
                      <div id="tab-1" class="tab-content">
                          <div class="custom-form">
                            <div class="message"></div>
                            <?php echo form_open("administration/register");?>
                              <label>First Name <span class="asterisk">*</span> </label>
                              <input name="first_name" type="text" value id="first_name">
                              <label>Last Name <span class="asterisk">*</span> </label>
                              <input name="last_name" type="text" value id="last_name">
                              <label>Company Name <span class="asterisk">*</span> </label>
                              <input name="company" type="text" value id="company">
                              <label>Email Address <span class="asterisk">*</span> </label>
                              <input name="email" type="text" value id="email">
                              <label>Phone <span class="asterisk">*</span> </label>
                              <input name="phone" type="text" value id="phone">
                              <label>Password <span class="asterisk">*</span> </label>
                              <input name="password" type="password" value id="password" >
                              <label>Confirm Password <span class="asterisk">*</span> </label>
                              <input name="password_confirm" type="password" value id="password_confirm">
                              <input type="submit" class="log-submit-btn" value="Create user">
                              <div class="clearfix"></div>
                            <?php echo form_close();?>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </div>
    <!--register form end -->
    <script type="text/javascript" src="../assets/frontend-assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="../assets/frontend-assets/js/plugins.js"></script>
    <script type="text/javascript" src="../assets/frontend-assets/js/scripts.js"></script>
    <script type="text/javascript" src="../assets/frontend-assets/js/login/index.js"></script>
    <script type="text/javascript" src="../assets/frontend-assets/js/alerts.js"></script>
  </body>
</html>
