<?php
include '../C/reclamationC.php';
include '../C/reponseC.php';
$reclamationC=new reclamationC();
$listereclamation=$reclamationC->afficherreclamation();

$reponseC=new reponseC();
$listereponse=$reponseC->afficherreponse();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<!--[if IE]>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons Icon -->

<title>BuyTeck</title>

<!-- Mobile Specific -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS Style -->
<link rel="stylesheet" type="text/css" href="css/internal.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.css" media="all">
<link rel="stylesheet" type="text/css" href="css/simple-line-icons.css" media="all">
<link rel="stylesheet" type="text/css" href="css/style.css" media="all">
<link rel="stylesheet" type="text/css" href="css/revslider.css" >
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="css/owl.theme.css">
<link rel="stylesheet" type="text/css" href="css/flexslider.css">
<link rel="stylesheet" type="text/css" href="css/jquery.mobile-menu.css">

<!-- Google Fonts -->
<link href='https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,600,600italic,400italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
</head>

<body class="contacts-index-index rtl inner-page">
<div id="page"> 
  
  <!-- Header -->
  <header>
    <div class="header-container">
      <div class="header-top">
        <div class="container">
          <div class="row"> 
            <!-- Header Language -->
            <div class="col-xs-7 col-sm-6">
              <div class="dropdown block-language-wrapper hidden-xs"> <a role="button" data-toggle="dropdown" data-target="#" class="block-language dropdown-toggle" href="#"> <img src="images/english.png" alt="language"> English <span class="caret"></span> </a>
                <ul class="dropdown-menu" role="menu">
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="images/english.png" alt="language"> English </a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="images/francais.png" alt="language"> French </a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="images/german.png" alt="language"> German </a></li>
                </ul>
              </div>
              <!-- End Header Language --> 
              
              <!-- Header Currency -->
              <div class="dropdown block-currency-wrapper hidden-xs"> <a role="button" data-toggle="dropdown" data-target="#" class="block-currency dropdown-toggle" href="#"> USD <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> $ - Dollar </a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> £ - Pound </a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> € - Euro </a></li>
                </ul>
              </div>
              <!-- End Header Currency -->
              
              <div class="welcome-msg hidden-xs"> Welcome!!! </div>
            </div>
            <div class="col-xs-5 col-sm-6"> 
              
              <div class="top-cart-contain pull-right"> 
            <!-- Top Cart -->
            <div class="mini-cart">
              <div data-toggle="dropdown" data-hover="dropdown" class="basket dropdown-toggle"><a href="#">  My Cart <span class="cart_count">0</span></a></div>
              <div>
                <div class="top-cart-content" style="display: none;">
                  <div class="actions">
                    <a href="#" class="view-cart" ><span>View Cart</span></a> </div>
                
                  <!--actions--> 
                </div>
              </div>
            </div>
            <!-- Top Cart -->
            <div id="ajaxconfig_info" style="display:none"><a href="#/"></a>
              <input value="" type="hidden">
              <input id="enable_module" value="1" type="hidden">
              <input class="effect_to_cart" value="1" type="hidden">
              <input class="title_shopping_cart" value="Go to shopping cart" type="hidden">
            </div>
          </div>
          
          <div class="top-search">
            <div class="block-icon pull-right"> <a data-target=".bs-example-modal-lg" data-toggle="modal" class="search-focus dropdown-toggle links"> <i class="fa fa-search"></i> </a>
              <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button aria-label="Close" data-dismiss="modal" class="close" type="button"><img src="images/interstitial-close.png" alt="close"> </button>
                    </div>
                    <div class="modal-body">
                      <form class="navbar-form">
                        <div id="search">
                          <div class="input-group">
                            <input name="search" placeholder="Search" class="form-control" type="text">
                            <button type="button" class="btn-search"><i class="fa fa-search"></i></button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          
              <!-- Header Top Links -->
              <div class="toplinks">
                <div class="links">
                
                  <div class="myaccount"><a title="My Account" href="login.html"><span class="hidden-xs">My Account</span></a></div>
                  <div class="check"><a title="Checkout" href="C:\Users\21697\OneDrive\Desktop\template\template\contact_us.html"><span class="hidden-xs">Contact us </span></a></div>
                  <div class="demo"><a title="Blog" href="blog.html"><span class="hidden-xs">Blog</span></a></div>
                  <!-- Header Company -->
                  
                  <!-- End Header Company -->
                  <div class="login"><a href="login.html"><span class="hidden-xs">Log In</span></a></div>
                  
                </div>
                
              </div>
              <!-- End Header Top Links --> 
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- end header --> 
  
  <!-- Navbar -->
  <nav>
    <div class="container">
        <!-- Header Logo -->
        <div class="logo"><a title="Datson" href="index.php"><img alt="Datson" src="images/logo.png"></a></div>
        <!-- End Header Logo -->

        <div class="mm-toggle-wrap">
            <div class="mm-toggle"><i class="fa fa-reorder"></i><span class="mm-label">Menu</span> </div>
        </div>

        <ul class="nav hidden-xs menu-item menu-item-left">
            <li class="level0 parent drop-menu active"><a href="index.php"><span>Home</span></a>

            </li>
            <li class="level0 parent drop-menu"><a href="#"><span>Pages</span> </a>
                <ul class="level1" style="display: none;">
                    <li class="level1 first"><a href="grid.php"><span>Grid</span></a></li>
                    <li class="level1 nav-10-2"> <a href="list.html"> <span>List</span> </a> </li>
                    <li class="level1 nav-10-3"> <a href="product_detail.html"> <span>Product Detail</span> </a> </li>
                    <li class="level1 nav-10-4"> <a href="shopping_cart.php"> <span>Shopping Cart</span> </a> </li>
                    <li class="level1 first parent"><a href="checkout.html"><span>Checkout</span></a>
                        <!--sub sub category-->
                        <ul class="level2 right-sub" style="top: 0px; left: 165px; display: none;">
                            <li class="level2 nav-2-1-1 first"><a href="checkout_method.html"><span>Checkout Method</span></a></li>
                            <li class="level2 nav-2-1-5 last"><a href="checkout_billing_info.html"><span>Checkout Billing Info</span></a></li>
                        </ul>
                        <!--sub sub category-->
                    </li>
                    <li class="level1 nav-10-4"> <a href="wishlist.html"> <span>Wishlist</span> </a> </li>
                    <li class="level1 first parent"><a href="dashboard.html"><span>Dashboard</span></a>
                        <!--sub sub category-->
                        <ul class="level2 right-sub" style="top: 0px; left: 165px; display: none;">
                            <li class="level2 nav-2-1-1 first"><a href="account_information.html"><span>Account Information</span></a></li>
                            <li class="level2 nav-2-1-5 last"><a href="address_book.html"><span>Address Book</span></a></li>
                            <li class="level2 nav-2-1-1 first"><a href="contact_information.html"><span>Contact Information</span></a></li>
                        </ul>
                        <!--sub sub category-->
                    </li>
                    <li class="level1"> <a href="multiple_addresses.html"> <span>Multiple Addresses</span> </a> </li>
                    <li class="level1"> <a href="about_us.html"> <span>About us</span> </a> </li>

                    <li class="level1"> <a href="faq.html"> <span>FAQ</span> </a> </li>
                    <li class="level1"> <a href="login.html"> <span>Login</span> </a> </li>
                    <li class="level1"> <a href="forgot_password.html"> <span>Forgot Password</span> </a> </li>
                    <li class="level1"> <a href="quick_view.html"> <span>Quick view </span> </a> </li>
                    <li class="level1 first parent"><a href="blog.html"><span>Blog</span></a>
                        <ul class="level2 right-sub" style="top: 0px; left: 165px; display: none;">
                            <li class="level2 nav-2-1-1 first"><a href="blog_detail.html"><span>Blog Detail</span></a></li>
                        </ul>
                    </li>
                    <li class="level1"><a href="afficherlistereclamationfront.php"><span>reclamation</span></a> </li>
                    <li class="level1"><a href="404error.html"><span>404 Error Page</span></a> </li>
                </ul>
            </li>

        </ul>
        <ul class="nav hidden-xs menu-item menu-item-right">
            <li class="mega-menu"><a href="grid.php" class="level-top"><span>Categories</span></a>
                <div style="left: 0px; display: none;" class="level0-wrapper dropdown-6col">
                    <div class="container">
                        <div class="level0-wrapper2">
                            <div class="nav-block nav-block-center">
                                <ul class="level0">
                                    <li class="level1 nav-6-1 parent item"><a href="#/mobiles.html"><span>Mobiles</span></a>
                                        <ul class="level1">
                                            <li class="level2 nav-6-1-1"><a href="#/mobiles/samsung.html"><span>Samsung</span></a></li>
                                            <li class="level2 nav-6-1-1"><a href="#/mobiles/nokia.html"><span>Nokia</span></a></li>
                                            <li class="level2 nav-6-1-1"><a href="#/mobiles/iphone.html"><span>IPhone</span></a></li>
                                            <li class="level2 nav-6-1-1"><a href="#/mobiles/sony.html"><span>Sony</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="level1 nav-6-1 parent item"><a href="#.html" class=""><span>Accesories</span></a>
                                        <ul class="level1">
                                            <li class="level2 nav-6-1-1"><a href="#/mobile-memory-cards.html"><span>Mobile Memory Cards</span></a></li>
                                            <li class="level2 nav-6-1-1"><a href="#/cases-covers.html"><span>Cases &amp; Covers</span></a></li>
                                            <li class="level2 nav-6-1-1"><a href="#/mobile-haedphones.html"><span>Mobile Headphones</span></a></li>
                                            <li class="level2 nav-6-1-1"><a href="#/bluetooth-headsets.html"><span>Bluetooth Headsets</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="level1 nav-6-1 parent item"><a href="#/cameras.html"><span>Cameras</span></a>
                                        <ul class="level1">
                                            <li class="level2 nav-6-1-1"><a href="#/cameras/camcorders.html"><span>Camcorders</span></a></li>
                                            <li class="level2 nav-6-1-1"><a href="#/cameras/point-shoot.html"><span>Point &amp; Shoot</span></a></li>
                                            <li class="level2 nav-6-1-1"><a href="#/cameras/digital-slr.html"><span>Digital SLR</span></a></li>
                                            <li class="level2 nav-6-1-1"><a href="#camera-accesories.html"><span>Camera Accesories</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="level1 nav-6-1 parent item"><a href="#/audio-video.html"><span>Audio &amp; Video</span></a>
                                        <ul class="level1">
                                            <li class="level2 nav-6-1-1"><a href="#/audio-video/mp3-players.html"><span>MP3 Players</span></a></li>
                                            <li class="level2 nav-6-1-1"><a href="#/audio-video/ipods.html"><span>IPods</span></a></li>
                                            <li class="level2 nav-6-1-1"><a href="#/audio-video/speakers.html"><span>Speakers</span></a></li>
                                            <li class="level2 nav-6-1-1"><a href="#/audio-video/video-players.html"><span>Video Players</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="level1 nav-6-1 parent item"><a href="#/computer.html"><span>Computer</span></a>
                                        <ul class="level1">
                                            <li class="level2 nav-6-1-1"><a href="#/external-hard-disk.html"><span>External Hard Disk</span></a></li>
                                            <li class="level2 nav-6-1-1"><a href="#/computer/pendrives.html"><span>Pendrives</span></a></li>
                                            <li class="level2 nav-6-1-1"><a href="#/computer/headphones.html"><span>Headphones</span></a></li>
                                            <li class="level2 nav-6-1-1"><a href="#/computer/pc-components.html"><span>PC Components</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="level1 nav-6-1 parent item"><a href="#/computer.html"><span>Medical</span></a>
                                      </li>
                                </ul>
                            </div>
                        </div>
                        <!--level0-wrapper2-->

                    </div>
                </div>
            </li>
            <li class="mega-menu"><a class="level-top" href="afficherlistereclamationfront.php"><span>Reclamation</span></a></li>

        </ul>



    </div>
</nav>
  <!-- end nav --> 
  
  <!-- Main Container -->
  <section class="main-container col2-right-layout">
    <div class="main container">
      <div class="reclamation">
        <section class="col-main col-sm-9">
          <div class="page-title">
          <div class="content">
                  <p>Consult reclamations</p><br><br>
  
          <div class="buttons-set">
          
                    <button class="button reclamation_form" ><a href="product.php">Product reclamations</a></button>
                    <button class="button reclamation_form" ><a href="shipping.php">Shipping reclamations</a></button>
                    <button class="button reclamation_form" ><a href="rating.php">Rating reclamations</a></button>
                  </div>
</div>
            <br>  <br>  <br>  <br>  <br>
            <fieldset class="col2-set">
              <div class="col-1 new-users">
                <div class="content">
                  <p>To add reclamation in our website please click on the button</p><br><br>
                  <div class="buttons-set">
                    <button class="button reclamation_form" ><a href="contact_us.php">Add reclamation</a></button>
                    </div>
                </div>
              </div>
            </fieldset>
        </div>

    </section>
</div>
    <aside class="col-right sidebar col-sm-3">
        <div class="block block-company">
          <div class="block-title">Company </div>
          <div class="block-content">
            <ol id="recently-viewed-items">
              <li class="item  odd"><a href="#">Terms of Service</a></li>
              <li class="item even"><a href="#">Search Terms</a></li>
              <li class="item last"><strong>Reclamations</strong></li>
            </ol>
          </div>
        </div>
      </aside>
    </div>
 
</section>
  <!-- Main Container End --> 
  
  <!-- Brand logo starts  -->
         
<div class="brand-logo wow bounceInUp animated">
    <div class="container">
      <div class="slider-items-products">
        <div id="brand-logo-slider" class="product-flexslider hidden-buttons">
          <div class="slider-items slider-width-col6"> 
            
            <!-- Item -->
            <div class="item"><a href="#"><img src="images\samsung.png " width="100" alt="Image"></a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"><a href="#"><img src="images\apple.png"width="50" alt="Image"></a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"><a href="#"><img src="images\hp.png"width="50" alt="Image"></a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"><a href="#"><img src="images\asus.png"width="100" alt="Image"></a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"><a href="#"><img src="images\oppo.png" width="100"alt="Image"></a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"><a href="#"><img src="images\sony.png" width="100"alt="Image"></a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"><a href="#"><img src="images/b-logo1.png" alt="Image"></a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"><a href="#"><img src="images/b-logo4.png" alt="Image"></a> </div>
            <!-- End Item --> 
            
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Brand logo ends  --> 
  
    
<!-- Footer -->  <footer>
    <div class="footer-inner">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-xs-12 col-lg-8">
              <div class="footer-column pull-left">
                <h4>CUSTOMMER SERVICE</h4>
                <ul class="links">
                  <li class="first"><a href="#" title="Contact us">My Account</a></li>
                  <li><a href="#" title="About us">Order History</a></li>
                  <li><a href="#" title="faq">FAQ</a></li>
                  <li><a href="#" title="Popular Searches">Specials</a></li>
                  <li class="last"><a href="#" title="Where is my order?">Help Center</a></li>
    
                </ul>
              </div>
              <div class="footer-column pull-left">
                <h4>Corporation</h4>
                <ul class="links">
                  <li class="first"><a title="Your Account" href="#">About us</a></li>
                  <li><a title="Information" href="#">Customer Service</a></li>
                  <li><a title="Addresses" href="#">Company</a></li>
                  <li><a title="Addresses" href="#">Investor Relations</a></li>
                  <li class="last"><a title="Orders History" href="#">Advanced Search</a></li>
                 
                </ul>
              </div>
              <div class="footer-column pull-left">
                <h4>Why choose Us</h4>
                <ul class="links">
                  <li class="first"><a href="#" title="About us">Shopping Guide</a></li>
                  <li><a href="#" title="Blog">Blog</a></li>
                  <li><a href="#" title="Company">Company</a></li>
                  <li><a href="#" title="Investor Relations">Investor Relations</a></li>
                  <li class=" last"><a href="fficherlistereclamationfront.php" title="Suppliers">Contact Us</a></li>
                </ul>
              </div>
            </div>
            <div class="col-xs-12 col-lg-4">
              <div class="footer-column-last">
                <div class="newsletter-wrap">
                  <h4>Sign up for emails</h4>
                  <form id="newsletter-validate-detail" method="post" action="#">
                    <div id="container_form_news">
                      <div id="container_form_news2">
                        <input type="text" class="input-text required-entry validate-email" value="Enter your email address" onFocus=" this.value='' " title="Sign up for our newsletter" id="newsletter" name="email">
                        <button class="button subscribe" title="Subscribe" type="submit"><span>Subscribe</span></button>
                      </div>
                    </div>
                  </form>
                </div>
                <br>
                <div class="social">
                  <h4>Follow Us</h4>
                  <ul class="link">
                    <li class="fb pull-left"><a href="#"></a></li>
                    <li class="tw pull-left"><a href="#"></a></li>
                    <li class="googleplus pull-left"><a href="#"></a></li>
                    <li class="rss pull-left"><a href="#"></a></li>
                    <li class="pintrest pull-left"><a href="#"></a></li>
                    <li class="linkedin pull-left"><a href="#"></a></li>
                    <li class="youtube pull-left"><a href="#"></a></li>
                  </ul>
                </div>
                
              </div>
            </div>
          </div>
        </div>
        <div class="container">
        <div class="col-sm-12 col-xs-12 footer-logo"><img alt="Datson" src="images/logo.png"></div>
        
        </div>
      </div>
      
      <div class="footer-bottom">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-xs-12 coppyright">&copy; 2016 ThemesGround. All Rights Reserved.</div>
            
          </div>
        </div>
      </div>
    </footer>
    </div>
    <div id="mobile-menu">
      <ul>
        <li>
          <div class="mm-search">
            <form id="search_mob" name="search">
              <div class="input-group">
                <div class="input-group-btn">
                  <button class="btn btn-default" type="submit"><i class="fa fa-search"></i> </button>
                </div>
                <input type="text" class="form-control simple" placeholder="Search ..." name="srch-term" id="srch-term">
              </div>
            </form>
          </div>
        </li>
        <li>
          <div class="home"><a href="#"><i class="icon-home"></i>Home</a> </div>
        </li>
        <li><a href="#">Pages</a>
          <ul>
            <li><a href="grid.php">Grid</a> </li>
            <li> <a href="list.html">List</a> </li>
            <li> <a href="product_detail.html">Product Detail</a> </li>
            <li> <a href="shopping_cart.html">Shopping Cart</a> </li>
            <li><a href="blog.html">Blog</a>
              <ul>
                <li><a href="blog-detail.html">Blog Detail</a> </li>
              </ul>
            </li>
            <li><a href="reclamation.html">reclamatin</a> </li>
          </ul>
        </li>
        <li class="mega-menu"><a href="grid.php" class="level-top"><span>Categories</span></a>
          <div style="left: 0px; display: none;" class="level0-wrapper dropdown-6col">
              <div class="container">
                  <div class="level0-wrapper2">
                      <div class="nav-block nav-block-center">
                          <ul class="level0">
                              <li class="level1 nav-6-1 parent item"><a href="#/mobiles.html"><span>Mobiles</span></a>
                                  <ul class="level1">
                                      <li class="level2 nav-6-1-1"><a href="#/mobiles/samsung.html"><span>Samsung</span></a></li>
                                      <li class="level2 nav-6-1-1"><a href="#/mobiles/nokia.html"><span>Nokia</span></a></li>
                                      <li class="level2 nav-6-1-1"><a href="#/mobiles/iphone.html"><span>IPhone</span></a></li>
                                      <li class="level2 nav-6-1-1"><a href="#/mobiles/sony.html"><span>Sony</span></a></li>
                                  </ul>
                              </li>
                              <li class="level1 nav-6-1 parent item"><a href="#.html" class=""><span>Accesories</span></a>
                                  <ul class="level1">
                                      <li class="level2 nav-6-1-1"><a href="#/mobile-memory-cards.html"><span>Mobile Memory Cards</span></a></li>
                                      <li class="level2 nav-6-1-1"><a href="#/cases-covers.html"><span>Cases &amp; Covers</span></a></li>
                                      <li class="level2 nav-6-1-1"><a href="#/mobile-haedphones.html"><span>Mobile Headphones</span></a></li>
                                      <li class="level2 nav-6-1-1"><a href="#/bluetooth-headsets.html"><span>Bluetooth Headsets</span></a></li>
                                  </ul>
                              </li>
                              <li class="level1 nav-6-1 parent item"><a href="#/cameras.html"><span>Cameras</span></a>
                                  <ul class="level1">
                                      <li class="level2 nav-6-1-1"><a href="#/cameras/camcorders.html"><span>Camcorders</span></a></li>
                                      <li class="level2 nav-6-1-1"><a href="#/cameras/point-shoot.html"><span>Point &amp; Shoot</span></a></li>
                                      <li class="level2 nav-6-1-1"><a href="#/cameras/digital-slr.html"><span>Digital SLR</span></a></li>
                                      <li class="level2 nav-6-1-1"><a href="#camera-accesories.html"><span>Camera Accesories</span></a></li>
                                  </ul>
                              </li>
                              <li class="level1 nav-6-1 parent item"><a href="#/audio-video.html"><span>Audio &amp; Video</span></a>
                                  <ul class="level1">
                                      <li class="level2 nav-6-1-1"><a href="#/audio-video/mp3-players.html"><span>MP3 Players</span></a></li>
                                      <li class="level2 nav-6-1-1"><a href="#/audio-video/ipods.html"><span>IPods</span></a></li>
                                      <li class="level2 nav-6-1-1"><a href="#/audio-video/speakers.html"><span>Speakers</span></a></li>
                                      <li class="level2 nav-6-1-1"><a href="#/audio-video/video-players.html"><span>Video Players</span></a></li>
                                  </ul>
                              </li>
                              <li class="level1 nav-6-1 parent item"><a href="#/computer.html"><span>Computer</span></a>
                                  <ul class="level1">
                                      <li class="level2 nav-6-1-1"><a href="#/external-hard-disk.html"><span>External Hard Disk</span></a></li>
                                      <li class="level2 nav-6-1-1"><a href="#/computer/pendrives.html"><span>Pendrives</span></a></li>
                                      <li class="level2 nav-6-1-1"><a href="#/computer/headphones.html"><span>Headphones</span></a></li>
                                      <li class="level2 nav-6-1-1"><a href="#/computer/pc-components.html"><span>PC Components</span></a></li>
                                  </ul>
                              </li>
          </ul>
        </li>
       
        <li><a href="fficherlistereclamationfront.php">Contact Us</a> </li>
      </ul>
      <div class="dropdown block-language-wrapper">
                    <ul>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="images/english.png" alt="language"> English </a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="images/francais.png" alt="language"> French </a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="images/german.png" alt="language"> German </a></li>
                    </ul>
                  </div>
                  <div class="dropdown block-currency-wrapper"> 
                    <ul>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> $ - Dollar </a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> £ - Pound </a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> € - Euro </a></li>
                    </ul>
                  </div>
    </div>
    <!-- JavaScript --> 
    <script type="text/javascript" src="js/jquery.min.js"></script> 
    <script type="text/javascript" src="js/bootstrap.min.js"></script> 
    <script type="text/javascript" src="js/parallax.js"></script> 
    <script type="text/javascript" src="js/common.js"></script> 
    <script type="text/javascript" src="js/jquery.flexslider.js"></script> 
    <script type="text/javascript" src="js/owl.carousel.min.js"></script> 
    <script type="text/javascript" src="js/jquery.mobile-menu.min.js"></script> 
    <script type="text/javascript" src="js/cloud-zoom.js"></script>
    </body>
    </html>