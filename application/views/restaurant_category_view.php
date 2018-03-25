<!DOCTYPE HTML>
<html lang="en">
    
<!-- Mirrored from citybook.kwst.net/listing6.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Mar 2018 03:33:34 GMT -->
<head>
        <!--=============== basic  ===============-->
        <?= $header; ?>
        <!--=============== css  ===============-->
    </head>
    <body>
        <!--loader-->
        <div class="loader-wrap">
            <div class="pin"></div>
            <div class="pulse"></div>
        </div>
        <!--loader end-->
        <!-- Main  -->
        <div id="main">
            <!-- header_nav -->
                <?= $header_nav; ?>
            <!-- header_nav end -->
            <!-- wrapper -->
            <div id="wrapper">
                <!--  content  -->
                <div class="content">
                    <!--  section  -->
                    <!-- <section class="parallax-section" data-scrollax-parent="true">
                        <div class="bg par-elem "  data-bg="assets/frontend-assets/images/bg/3.jpg" data-scrollax="properties: { translateY: '30%' }"></div>
                        <div class="overlay"></div>
                        <div class="container">
                            <div class="section-title center-align">
                                <h2><span>Listings Without Map</span></h2>
                                <div class="breadcrumbs fl-wrap"><a href="#">Home</a><a href="#">Listings</a><span>Listings Without Map</span></div>
                                <span class="section-separator"></span>
                            </div>
                        </div>
                        <div class="header-sec-link">
                            <div class="container"><a href="#sec1" class="custom-scroll-link">Let's Start</a></div>
                        </div>
                    </section> -->
                    <!--  section  end-->
                    <!--  section  -->
                    <section class="gray-bg no-pading no-top-padding" id="sec1">
                        <div class="col-list-wrap  center-col-list-wrap left-list">
                            <div class="container">
                                <div class="listsearch-maiwrap box-inside fl-wrap">
                                    <div class="listsearch-header fl-wrap">
                                        <h3>Results For : <span>All Listings</span></h3>
                                        <div class="listing-view-layout">
                                            <ul>
                                                <li><a class="grid active" href="#"><i class="fa fa-th-large"></i></a></li>
                                                <li><a class="list" href="#"><i class="fa fa-list-ul"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- listsearch-input-wrap  -->
                                    <div class="listsearch-input-wrap fl-wrap">
                                        <div class="listsearch-input-item">
                                            <i class="mbri-key single-i"></i>
                                            <input type="text" placeholder="Keywords?" value=""/>
                                        </div>
                                        <div class="listsearch-input-item">
                                            <select data-placeholder="Location" class="chosen-select" >
                                                <option>All Locations</option>
                                                <option>Bronx</option>
                                                <option>Brooklyn</option>
                                                <option>Manhattan</option>
                                                <option>Queens</option>
                                                <option>Staten Island</option>
                                            </select>
                                        </div>
                                        <div class="listsearch-input-item">
                                            <select data-placeholder="All Categories" class="chosen-select" >
                                                <option>All Categories</option>
                                                <option>Shops</option>
                                                <option>Hotels</option>
                                                <option>Restaurants</option>
                                                <option>Fitness</option>
                                                <option>Events</option>
                                            </select>
                                        </div>
                                        <div class="listsearch-input-text">
                                            <label><i class="mbri-map-pin"></i> Enter Addres </label>
                                            <input type="text" placeholder="Destination , Area , Street" class="qodef-archive-places-search" value=""/>
                                            <span   class="loc-act qodef-archive-current-location"><i class="fa fa-dot-circle-o"></i></span>
                                        </div>
                                        <!-- hidden-listing-filter -->
                                        <div class="hidden-listing-filter fl-wrap">
                                            <div class="distance-input fl-wrap">
                                                <div class="distance-title"> Radius around selected destination <span></span> km</div>
                                                <div class="distance-radius-wrap fl-wrap">
                                                    <input class="distance-radius rangeslider--horizontal" type="range" min="1" max="100" step="1" value="1" data-title="Radius around selected destination">
                                                </div>
                                            </div>
                                            <!-- Checkboxes -->
                                            <div class=" fl-wrap filter-tags">
                                                <h4>Filter by Tags</h4>
                                                <div class="filter-tags-wrap">
                                                    <input id="check-a" type="checkbox" name="check" checked>
                                                    <label for="check-a">Elevator in building</label>
                                                </div>
                                                <div class="filter-tags-wrap">
                                                    <input id="check-b" type="checkbox" name="check">
                                                    <label for="check-b">Friendly workspace</label>
                                                </div>
                                                <div class="filter-tags-wrap">
                                                    <input id="check-c" type="checkbox" name="check">
                                                    <label for="check-c">Instant Book</label>
                                                </div>
                                                <div class="filter-tags-wrap">
                                                    <input id="check-d" type="checkbox" name="check">
                                                    <label for="check-d">Wireless Internet</label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- hidden-listing-filter end -->
                                        <button class="button fs-map-btn">Update</button>
                                        <div class="more-filter-option">More Filters <span></span></div>
                                    </div>
                                    <!-- listsearch-input-wrap end -->
                                </div>
                                <!-- list-main-wrap-->
                                <div class="list-main-wrap fl-wrap card-listing">
                                    <!-- listing-item -->
                                    <div class="listing-item">
                                        <article class="geodir-category-listing fl-wrap">
                                            <div class="geodir-category-img">
                                                <img src="assets/frontend-assets/images/all/8.jpg" alt="">
                                                <div class="overlay"></div>
                                            </div>
                                            <div class="geodir-category-content fl-wrap">
                                                <h3><a href="listing-single.html">Filipino <span>(20)</span></a></h3>
                                            </div>
                                        </article>
                                    </div>
                                    <!-- listing-item end-->
                                    <!-- listing-item -->
                                    <div class="listing-item">
                                        <article class="geodir-category-listing fl-wrap">
                                            <div class="geodir-category-img">
                                                <img src="assets/frontend-assets/images/all/1.jpg" alt="">
                                                <div class="overlay"></div>
                                            </div>
                                            <div class="geodir-category-content fl-wrap">
                                                <h3><a href="Korean_Restaurants">Korean <span>(15)</span></a></h3>
                                            </div>
                                        </article>
                                    </div>
                                    <!-- listing-item end-->
                                    <!-- listing-item -->
                                    <div class="listing-item">
                                        <article class="geodir-category-listing fl-wrap">
                                            <div class="geodir-category-img">
                                                <img src="assets/frontend-assets/images/all/4.jpg" alt="">
                                                <div class="overlay"></div>
                                            </div>
                                            <div class="geodir-category-content fl-wrap">
                                                <h3><a href="listing-single.html">Chinese <span>(10)</span></a></h3>
                                            </div>
                                        </article>
                                    </div>
                                    <!-- listing-item end-->
                                    <div class="clearfix"></div>
                                    <!-- listing-item -->
                                    <div class="listing-item">
                                        <article class="geodir-category-listing fl-wrap">
                                            <div class="geodir-category-img">
                                                <img src="assets/frontend-assets/images/all/20.jpg" alt="">
                                                <div class="overlay"></div>
                                            </div>
                                            <div class="geodir-category-content fl-wrap">
                                                <h3><a href="listing-single.html">Japanese <span>(14)</span></a></h3>
                                            </div>
                                        </article>
                                    </div>
                                    <!-- listing-item end-->
                                    <!-- listing-item -->
                                    <div class="listing-item">
                                        <article class="geodir-category-listing fl-wrap">
                                            <div class="geodir-category-img">
                                                <img src="assets/frontend-assets/images/all/5.jpg" alt="">
                                                <div class="overlay"></div>
                                            </div>
                                            <div class="geodir-category-content fl-wrap">
                                                <h3><a href="listing-single.html">Thai <span>(12)</span></a></h3>
                                            </div>
                                        </article>
                                    </div>
                                    <!-- listing-item end-->
                                    <!-- listing-item -->
                                    <div class="listing-item">
                                        <article class="geodir-category-listing fl-wrap">
                                            <div class="geodir-category-img">
                                                <img src="assets/frontend-assets/images/all/23.jpg" alt="">
                                                <div class="overlay"></div>
                                            </div>
                                            <div class="geodir-category-content fl-wrap">
                                                <h3><a href="listing-single.html">American <span>(17)</span></a></h3>
                                            </div>
                                        </article>
                                    </div>
                                    <!-- listing-item end-->
                                    <!-- pagination-->
                                    <div class="pagination">
                                        <a href="#" class="prevposts-link"><i class="fa fa-caret-left"></i></a>
                                        <a href="#" class="blog-page transition">1</a>
                                        <a href="#" class="blog-page current-page transition">2</a>
                                        <a href="#" class="blog-page transition">3</a>
                                        <a href="#" class="blog-page transition">4</a>
                                        <a href="#" class="nextposts-link"><i class="fa fa-caret-right"></i></a>
                                    </div>
                                </div>
                                <!-- list-main-wrap end-->
                            </div>
                        </div>
                    </section>
                    <!--  section  end-->
                    <div class="limit-box fl-wrap"></div>
                    <!--  section  -->
                    <section class="gradient-bg">
                        <div class="cirle-bg">
                            <div class="bg" data-bg="assets/frontend-assets/images/bg/circle.png"></div>
                        </div>
                        <div class="container">
                            <div class="join-wrap fl-wrap">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h3>Join our online community</h3>
                                        <p>Grow your marketing and be happy with your online business</p>
                                    </div>
                                    <div class="col-md-4"><a href="#" class="join-wrap-btn modal-open">Sign Up <i class="fa fa-sign-in"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--  section  end-->
                </div>
                <!--  content  end-->
            </div>
            <!-- wrapper end -->
            <!--footer -->
                <?= $footer; ?>
            <!--footer end  -->
            <!--register form -->
            <div class="main-register-wrap modal">
                <div class="main-overlay"></div>
                <div class="main-register-holder">
                    <div class="main-register fl-wrap">
                        <div class="close-reg"><i class="fa fa-times"></i></div>
                        <h3>Sign In <span>City<strong>Book</strong></span></h3>
                        <div class="soc-log fl-wrap">
                            <p>For faster login or register use your social account.</p>
                            <a href="#" class="facebook-log"><i class="fa fa-facebook-official"></i>Log in with Facebook</a>
                            <a href="#" class="twitter-log"><i class="fa fa-twitter"></i> Log in with Twitter</a>
                        </div>
                        <div class="log-separator fl-wrap"><span>or</span></div>
                        <div id="tabs-container">
                            <ul class="tabs-menu">
                                <li class="current"><a href="#tab-1">Login</a></li>
                                <li><a href="#tab-2">Register</a></li>
                            </ul>
                            <div class="tab">
                                <div id="tab-1" class="tab-content">
                                    <div class="custom-form">
                                        <form method="post"  name="registerform">
                                            <label>Username or Email Address * </label>
                                            <input name="email" type="text"   onClick="this.select()" value="">
                                            <label >Password * </label>
                                            <input name="password" type="password"   onClick="this.select()" value="" >
                                            <button type="submit"  class="log-submit-btn"><span>Log In</span></button>
                                            <div class="clearfix"></div>
                                            <div class="filter-tags">
                                                <input id="check-aa" type="checkbox" name="check">
                                                <label for="check-aa">Remember me</label>
                                            </div>
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
                                                <button type="submit"     class="log-submit-btn"  ><span>Register</span></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--register form end -->
            <a class="to-top"><i class="fa fa-angle-up"></i></a>
        </div>
        <!-- Main end -->
        <?= $js_footer ?>
    </body>

<!-- Mirrored from citybook.kwst.net/listing6.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Mar 2018 03:33:34 GMT -->
</html>