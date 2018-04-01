<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="">
    <meta name="twitter:creator" content="">
    <meta name="twitter:card" content="">
    <meta name="twitter:title" content="Admin">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="">

    <!-- Facebook -->
    <meta property="og:url" content="">
    <meta property="og:title" content="Admin">
    <meta property="og:description" content="">
    <meta property="og:image" content="">
    <meta property="og:image:secure_url" content="">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">
    <!-- Meta -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?= $title.' - Where in Angeles City'; ?></title>
    <link rel="shortcut icon" href="assets/frontend-assets/images/favicon.png">

    <!-- vendor css -->
    <!-- <link href="assets/frontend-assets/lib/font-awesome/css/font-awesome.css" rel="stylesheet"> -->
    <!-- <link href="assets/frontend-assets/lib/Ionicons/css/ionicons.css" rel="stylesheet"> -->
    <link href="assets/frontend-assets/css/ionicons.css" rel="stylesheet">
    <link href="assets/frontend-assets/css/ionicons.min.css" rel="stylesheet">
    <link href="assets/frontend-assets/fonts/ionicons.eot">
    <link href="assets/frontend-assets/fonts/ionicons.svg">
    <link href="assets/frontend-assets/fonts/ionicons.ttf">
    <link href="assets/frontend-assets/fonts/ionicons.woff">

    <link rel="stylesheet" href="assets/frontend-assets/fontawesome-free-5.0.8/svg-with-js/css/fa-svg-with-js.css">
    <link type="text/css" rel="stylesheet" href="assets/frontend-assets/css/plugins.css">


    <link href="assets/frontend-assets/lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="assets/frontend-assets/lib/rickshaw/rickshaw.min.css" rel="stylesheet">

    <!-- Starlight CSS -->
    <link rel="stylesheet" href="assets/frontend-assets/css/cms/starlight.css">

    <link href="assets/frontend-assets/lib/datatables/jquery.dataTables.css" rel="stylesheet">
    <link href="assets/frontend-assets/lib/highlightjs/github.css" rel="stylesheet">
    <link href="assets/frontend-assets/lib/select2/css/select2.min.css" rel="stylesheet">
    <link href="assets/frontend-assets/css/master.css" rel="stylesheet" >

    <script src="assets/frontend-assets/lib/jquery/jquery.js"></script>
    <script src="assets/frontend-assets/lib/popper.js/popper.js"></script>
    <script src="assets/frontend-assets/lib/bootstrap/bootstrap.js"></script>
    <script src="assets/frontend-assets/lib/jquery-ui/jquery-ui.js"></script>
    <script src="assets/frontend-assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
    <script src="assets/frontend-assets/lib/jquery.sparkline.bower/jquery.sparkline.min.js"></script>
    <script src="assets/frontend-assets/lib/d3/d3.js"></script>
    <script src="assets/frontend-assets/lib/rickshaw/rickshaw.min.js"></script>
    <script src="assets/frontend-assets/lib/chart.js/Chart.js"></script>
    <script src="assets/frontend-assets/lib/Flot/jquery.flot.js"></script>
    <script src="assets/frontend-assets/lib/Flot/jquery.flot.pie.js"></script>
    <script src="assets/frontend-assets/lib/Flot/jquery.flot.resize.js"></script>
    <script src="assets/frontend-assets/lib/flot-spline/jquery.flot.spline.js"></script>
    <script src="assets/frontend-assets/js/cms/starlight.js"></script>
    <script src="assets/frontend-assets/js/cms/ResizeSensor.js"></script>
    <script src="assets/frontend-assets/js/cms/dashboard.js"></script>
    <script src="assets/frontend-assets/lib/datatables/jquery.dataTables.js"></script>
    <script src="assets/frontend-assets/lib/datatables-responsive/dataTables.responsive.js"></script>
    <script src="assets/frontend-assets/lib/select2/js/select2.min.js"></script>
    <script src="assets/frontend-assets/lib/highlightjs/highlight.pack.js"></script>
  </head>
  <body>
    <!-- Start Left Panel -->
    <div class="sl-logo"><a href="#"><i class="icon ion-android-star-outline"></i> WIAC CMS</a></div>
    <div class="sl-sideleft">
      <label class="sidebar-label">Navigation</label>
      <div class="sl-sideleft-menu">
        <a href="Dashboard" class="sl-menu-link active">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
            <span class="menu-item-label">Dashboard</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon fa fa-building tx-20"></i>
            <span class="menu-item-label">Establishments</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="Establishment_category" class="nav-link">Main Category</a></li>
          <li class="nav-item"><a href="#" class="nav-link">Sub Category</a></li>
          <li class="nav-item"><a href="#" class="nav-link">Clients</a></li>
        </ul>
        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-football-outline tx-20"></i>
            <span class="menu-item-label">Amenities</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-map tx-20"></i>
            <span class="menu-item-label">Location</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-book-outline tx-20"></i>
            <span class="menu-item-label">Advertisement</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-paper-outline tx-20"></i>
            <span class="menu-item-label">News</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-pricetags-outline tx-20"></i>
            <span class="menu-item-label">Price</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-android-globe tx-20"></i>
            <span class="menu-item-label">Website</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-person tx-20"></i>
            <span class="menu-item-label">Users</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
      </div><!-- sl-sideleft-menu -->
      <br>
    </div><!-- sl-sideleft -->
    <!-- End Left Panel -->

    <!-- Start Top Bar -->
    <div class="sl-header">
      <div class="sl-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href="#"><i class="icon ion-navicon-round"></i></a></div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href="#"><i class="icon ion-navicon-round"></i></a></div>
      </div><!-- sl-header-left -->
      <div class="sl-header-right">
        <nav class="nav">
          <div class="dropdown">
            <a href="#" class="nav-link nav-link-profile" data-toggle="dropdown">
              <span class="logged-name"><?= $_SESSION['username']; ?></span></span>
              <img src="assets/frontend-assets/img/user.png" class="wd-32 rounded-circle" alt="">
            </a>
            <div class="dropdown-menu dropdown-menu-header wd-200">
              <ul class="list-unstyled user-profile-nav">
                <li><a href="#"><i class="icon ion-ios-person-outline"></i> Edit Profile</a></li>
                <li><a href="#"><i class="icon ion-ios-gear-outline"></i> Settings</a></li>
                <li><a href="#"><i class="icon ion-ios-download-outline"></i> Downloads</a></li>
                <li><a href="#"><i class="icon ion-ios-star-outline"></i> Favorites</a></li>
                <li><a href="#"><i class="icon ion-ios-folder-outline"></i> Collections</a></li>
                <li><a href="administration/logout"><i class="icon ion-power"></i> Sign Out</a></li>
              </ul>
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
        </nav>
        <div class="navicon-right">
          <a id="btnRightMenu" href="#" class="pos-relative">
            <i class="icon ion-ios-bell-outline"></i>
            <!-- start: if statement -->
            <span class="square-8 bg-danger"></span>
            <!-- end: if statement -->
          </a>
        </div><!-- navicon-right -->
      </div><!-- sl-header-right -->
    </div><!-- sl-header -->
    <!-- End Top Bar -->

    <!-- Start Right Panel -->
    <div class="sl-sideright">
      <ul class="nav nav-tabs nav-fill sidebar-tabs" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" role="tab" href="#messages">Messages (2)</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" role="tab" href="#notifications">Notifications (8)</a>
        </li>
      </ul><!-- sidebar-tabs -->

      <!-- Tab panes -->
      <div class="tab-content">
        <div class="tab-pane pos-absolute a-0 mg-t-60 active" id="messages" role="tabpanel">
          <div class="media-list">
            <!-- loop starts here -->
            <a href="#" class="media-list-link">
              <div class="media">
                <img src="assets/frontend-assets/images/cms/img3.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Donna Seay</p>
                  <span class="d-block tx-11 tx-gray-500">2 minutes ago</span>
                  <p class="tx-13 mg-t-10 mg-b-0">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
                </div>
              </div><!-- media -->
            </a>
            <!-- loop ends here -->
            <a href="#" class="media-list-link">
              <div class="media">
                <img src="assets/frontend-assets/images/cms/img4.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Samantha Francis</p>
                  <span class="d-block tx-11 tx-gray-500">3 hours ago</span>
                  <p class="tx-13 mg-t-10 mg-b-0">My entire soul, like these sweet mornings of spring.</p>
                </div>
              </div><!-- media -->
            </a>
            <a href="#" class="media-list-link">
              <div class="media">
                <img src="assets/frontend-assets/images/cms/img7.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Robert Walker</p>
                  <span class="d-block tx-11 tx-gray-500">5 hours ago</span>
                  <p class="tx-13 mg-t-10 mg-b-0">I should be incapable of drawing a single stroke at the present moment...</p>
                </div>
              </div><!-- media -->
            </a>
            <a href="#" class="media-list-link">
              <div class="media">
                <img src="assets/frontend-assets/images/cms/img5.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Larry Smith</p>
                  <span class="d-block tx-11 tx-gray-500">Yesterday, 8:34pm</span>

                  <p class="tx-13 mg-t-10 mg-b-0">When, while the lovely valley teems with vapour around me, and the meridian sun strikes...</p>
                </div>
              </div><!-- media -->
            </a>
            <a href="#" class="media-list-link">
              <div class="media">
                <img src="assets/frontend-assets/images/cms/img3.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Donna Seay</p>
                  <span class="d-block tx-11 tx-gray-500">Jan 23, 2:32am</span>
                  <p class="tx-13 mg-t-10 mg-b-0">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
                </div>
              </div><!-- media -->
            </a>
          </div><!-- media-list -->
          <div class="pd-15">
            <a href="#" class="btn btn-secondary btn-block bd-0 rounded-0 tx-10 tx-uppercase tx-mont tx-medium tx-spacing-2">View More Messages</a>
          </div>
        </div><!-- #contacts -->

        <div class="tab-pane pos-absolute a-0 mg-t-60 overflow-y-auto" id="notifications" role="tabpanel">
          <div class="media-list">
            <!-- loop starts here -->
            <a href="#" class="media-list-link read">
              <div class="media pd-x-20 pd-y-15">
                <img src="assets/frontend-assets/images/cms/img8.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Suzzeth Bungaos</strong> tagged you and 18 others in a post.</p>
                  <span class="tx-12">October 03, 2017 8:45am</span>
                </div>
              </div><!-- media -->
            </a>
            <!-- loop ends here -->
            <a href="#" class="media-list-link read">
              <div class="media pd-x-20 pd-y-15">
                <img src="assets/frontend-assets/images/cms/img9.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Mellisa Brown</strong> appreciated your work <strong class="tx-medium tx-gray-800">The Social Network</strong></p>
                  <span class="tx-12">October 02, 2017 12:44am</span>
                </div>
              </div><!-- media -->
            </a>
            <a href="#" class="media-list-link read">
              <div class="media pd-x-20 pd-y-15">
                <img src="assets/frontend-assets/images/cms/img10.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="tx-13 mg-b-0 tx-gray-700">20+ new items added are for sale in your <strong class="tx-medium tx-gray-800">Sale Group</strong></p>
                  <span class="tx-12">October 01, 2017 10:20pm</span>
                </div>
              </div><!-- media -->
            </a>
            <a href="#" class="media-list-link read">
              <div class="media pd-x-20 pd-y-15">
                <img src="assets/frontend-assets/images/cms/img5.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Julius Erving</strong> wants to connect with you on your conversation with <strong class="tx-medium tx-gray-800">Ronnie Mara</strong></p>
                  <span class="tx-12">October 01, 2017 6:08pm</span>
                </div>
              </div><!-- media -->
            </a>
            <a href="#" class="media-list-link read">
              <div class="media pd-x-20 pd-y-15">
                <img src="assets/frontend-assets/images/cms/img8.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Suzzeth Bungaos</strong> tagged you and 12 others in a post.</p>
                  <span class="tx-12">September 27, 2017 6:45am</span>
                </div>
              </div><!-- media -->
            </a>
            <a href="#" class="media-list-link read">
              <div class="media pd-x-20 pd-y-15">
                <img src="assets/frontend-assets/images/cms/img10.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="tx-13 mg-b-0 tx-gray-700">10+ new items added are for sale in your <strong class="tx-medium tx-gray-800">Sale Group</strong></p>
                  <span class="tx-12">September 28, 2017 11:30pm</span>
                </div>
              </div><!-- media -->
            </a>
            <a href="#" class="media-list-link read">
              <div class="media pd-x-20 pd-y-15">
                <img src="assets/frontend-assets/images/cms/img9.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Mellisa Brown</strong> appreciated your work <strong class="tx-medium tx-gray-800">The Great Pyramid</strong></p>
                  <span class="tx-12">September 26, 2017 11:01am</span>
                </div>
              </div><!-- media -->
            </a>
            <a href="#" class="media-list-link read">
              <div class="media pd-x-20 pd-y-15">
                <img src="assets/frontend-assets/images/cms/img5.jpg" class="wd-40 rounded-circle" alt="">
                <div class="media-body">
                  <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Julius Erving</strong> wants to connect with you on your conversation with <strong class="tx-medium tx-gray-800">Ronnie Mara</strong></p>
                  <span class="tx-12">September 23, 2017 9:19pm</span>
                </div>
              </div><!-- media -->
            </a>
          </div><!-- media-list -->
        </div><!-- #attachments -->
      </div><!-- tab-content -->
    </div><!-- sl-sideright -->
    <!-- End Right Panel -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Admin</a>
        <span class="breadcrumb-item active">Dashboard</span>
      </nav>
      <div class="sl-pagebody">
        <?= $RenderBody; ?>
      </div><!-- sl-pagebody -->
      <!-- Start Footer -->
      <footer class="sl-footer">
          <div class="footer-left">
            <div class="mg-b-2">Copyright &copy; 2018. AIMS All Rights Reserved</div>
          </div>
      </footer>
      <!-- End Footer -->
    </div>
  </body>
</html>
