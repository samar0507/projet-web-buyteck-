<?php
include "Header.php";
?>
<body class="inner-page">
<div id="page"> 
<?php
include "Navbar.php";

?><?php
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
  

  
  <!-- Main Container -->
  <section class="main-container col2-right-layout">
    <div class="main container">
      <div class="reclamation">
        <section class="col-main col-sm-9">
          <div class="page-title">
          <div class="slider-items slider-width-col6"> 
                <h1>Reclamation</h1><br><br><br>
            </div>
            <div class="card-header pb-0">
              <h6>Reclamation's list</h6>
            </div>
            
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                  <thead>
              
    <tr>
      
        <th>Comment</th> 
        <th>Date reclamation</th> 
        <th>Type</th> 
        <th>Etat</th>
        <th>Response</th>
</tr>
</thead>
<tbody>

<?php
foreach($listereclamation as $reclamation){
  if  ($reclamation['typer']=="shipping"  ){
?>
<tr>
    
    <td><?php echo  $reclamation['comment']; ?></td>
    <td><?php echo  $reclamation['date_rec']; ?></td>
    <td><?php echo  $reclamation['typer']; ?></td>
    <td><?php echo  $reclamation['etat']; ?></td>
 
<?php

$reponse = $reponseC->recupererreponse($reclamation['id_rec']);
  if  (!empty($reponse['content']) )
  { 
?>
    <td><?php echo  $reponse['content']; ?></td>

<?php } else {?>
<td>No response</td>

<?php }}?>
<?php  }?>
</tr>
<tbody>
</table>
              </div>
            </div>
          

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
          <div class="item"><a href="#"><img src="images/apple1.png" alt="Image"></a> </div>
          <!-- End Item --> 
          
          <!-- Item -->
          <div class="item"><a href="#"><img src="images/samsung.png" alt="Image"></a> </div>
          <!-- End Item --> 
          
          <!-- Item -->
          <div class="item"><a href="#"><img src="images/lenovo.png" alt="Image"></a> </div>
          <!-- End Item --> 
          
          <!-- Item -->
          <div class="item"><a href="#"><img src="images/mi2.png" alt="Image"></a> </div>
          <!-- End Item --> 
          
          <!-- Item -->
          <div class="item"><a href="#"><img src="images/asus.png" alt="Image"></a> </div>
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
            <li> <a href="list.php">List</a> </li>
            <li> <a href="product_detail.php">Product Detail</a> </li>
            <li> <a href="shopping_cart.php">Shopping Cart</a> </li>
            <li><a href="blog.php">Blog</a>
              <ul>
                <li><a href="blog-detail.php">Blog Detail</a> </li>
              </ul>
            </li>
            <li><a href="reclamation.php">Reclamation</a> </li>
          </ul>
        </li>
        <li class="mega-menu"><a href="grid.php" class="level-top"><span>Categories</span></a>
          <div style="left: 0px; display: none;" class="level0-wrapper dropdown-6col">
              <div class="container">
                  <div class="level0-wrapper2">
                      <div class="nav-block nav-block-center">
                          <ul class="level0">
                              <li class="level1 nav-6-1 parent item"><a href="#/mobiles.php"><span>Mobiles</span></a>
                                  <ul class="level1">
                                      <li class="level2 nav-6-1-1"><a href="#/mobiles/samsung.php"><span>Samsung</span></a></li>
                                      <li class="level2 nav-6-1-1"><a href="#/mobiles/nokia.php"><span>Nokia</span></a></li>
                                      <li class="level2 nav-6-1-1"><a href="#/mobiles/iphone.php"><span>IPhone</span></a></li>
                                      <li class="level2 nav-6-1-1"><a href="#/mobiles/sony.php"><span>Sony</span></a></li>
                                  </ul>
                              </li>
                              <li class="level1 nav-6-1 parent item"><a href="#.php" class=""><span>Accesories</span></a>
                                  <ul class="level1">
                                      <li class="level2 nav-6-1-1"><a href="#/mobile-memory-cards.php"><span>Mobile Memory Cards</span></a></li>
                                      <li class="level2 nav-6-1-1"><a href="#/cases-covers.php"><span>Cases &amp; Covers</span></a></li>
                                      <li class="level2 nav-6-1-1"><a href="#/mobile-haedphones.php"><span>Mobile Headphones</span></a></li>
                                      <li class="level2 nav-6-1-1"><a href="#/bluetooth-headsets.php"><span>Bluetooth Headsets</span></a></li>
                                  </ul>
                              </li>
                              <li class="level1 nav-6-1 parent item"><a href="#/cameras.php"><span>Cameras</span></a>
                                  <ul class="level1">
                                      <li class="level2 nav-6-1-1"><a href="#/cameras/camcorders.php"><span>Camcorders</span></a></li>
                                      <li class="level2 nav-6-1-1"><a href="#/cameras/point-shoot.php"><span>Point &amp; Shoot</span></a></li>
                                      <li class="level2 nav-6-1-1"><a href="#/cameras/digital-slr.php"><span>Digital SLR</span></a></li>
                                      <li class="level2 nav-6-1-1"><a href="#camera-accesories.php"><span>Camera Accesories</span></a></li>
                                  </ul>
                              </li>
                              <li class="level1 nav-6-1 parent item"><a href="#/audio-video.php"><span>Audio &amp; Video</span></a>
                                  <ul class="level1">
                                      <li class="level2 nav-6-1-1"><a href="#/audio-video/mp3-players.php"><span>MP3 Players</span></a></li>
                                      <li class="level2 nav-6-1-1"><a href="#/audio-video/ipods.php"><span>IPods</span></a></li>
                                      <li class="level2 nav-6-1-1"><a href="#/audio-video/speakers.php"><span>Speakers</span></a></li>
                                      <li class="level2 nav-6-1-1"><a href="#/audio-video/video-players.php"><span>Video Players</span></a></li>
                                  </ul>
                              </li>
                              <li class="level1 nav-6-1 parent item"><a href="#/computer.php"><span>Computer</span></a>
                                  <ul class="level1">
                                      <li class="level2 nav-6-1-1"><a href="#/external-hard-disk.php"><span>External Hard Disk</span></a></li>
                                      <li class="level2 nav-6-1-1"><a href="#/computer/pendrives.php"><span>Pendrives</span></a></li>
                                      <li class="level2 nav-6-1-1"><a href="#/computer/headphones.php"><span>Headphones</span></a></li>
                                      <li class="level2 nav-6-1-1"><a href="#/computer/pc-components.php"><span>PC Components</span></a></li>
                                  </ul>
                              </li>
          </ul>
        </li>
       
        <li><a href="afficherlistereclamationfront.php">Contact Us</a> </li>
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