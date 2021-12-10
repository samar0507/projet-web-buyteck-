<?php
include "Header.php";
?>
<body class="inner-page">
<div id="page"> 
<?php
include "Navbar.php";

?>

<!DOCTYPE html>
<html>

<body>
  

<?php
include_once "../C/ProduitC.php";
include_once "../M/Produit.php";
include_once "../config.php";
if (isset($_GET['nom_cat'])) {

    $ProduitsCore= new ProduitsCore();
    $produits=$ProduitsCore->afficherparcategories($_GET['nom_cat']);
}
?>
<style> .bo{
   background-color: #DD93C2;
   padding: 10px 25px;
   border: none;
   color: white;  
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 5px 5px;
    cursor: pointer;
    border-radius: 8px;
  }</style>
<div class="breadcrumbs">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <ul class="breadcrumb">
          <li><a href="#">Home</a></li>
          <li><a href="#">Categories</a></li>
      </div>
    </div>
  </div>
</div>
<section class="main-container col2-left-layout bounceInUp animated">
  <div class="container">
    <div class="row">
      <div class="col-main col-sm-9 col-sm-push-3">
        <!--	///*///======    End article  ========= //*/// --> 
      </div>
      <div class="col-left sidebar col-sm-10 col-xs-0 col-sm-pull-15">
        <aside class="col-left sidebar">
          <div class="side-nav-categories">
            <div class="block-title"> Galery </div>
            <!--block-title--> 
            <!-- BEGIN BOX-CATEGORY -->
            <div class="box-content box-category">
              <ul>  
 <h3 align="center"  class="feu"> This category "<i><?PHP echo $_GET['nom_cat'] ?> </i>" has for product :</h3> 
<?PHP
foreach($produits as $row){
  ?> <div  align="center">		
		
<div id="box1" align="center">
     <hr  align="center">
               <p  align="center">
               <h4  align="center">
                <dl>
                <dd><b class="f"  >Name of product :</b> <i><?PHP echo $row['nom']; ?> </i></dd> 
                <dd><b class="f"> Name Categorie :</b><i> <?PHP echo $row['nom_cat']; ?></i></dd>
                 <dd><b class="f">Description :</b><i> <?PHP echo $row['description']; ?></i></dd>
                  <dd><b class="f">Price :</b><i> <?PHP echo $row['prix']; ?></i></dd>
                  <dd><b class="f">Amount :</b><i> <?PHP echo $row['quantite']; ?></i></dd>
                  <dd><b class="f">Availablity :</b><i> <?PHP echo $row['disponibilite']; ?></i></dd>
                  <br> <dd><b class="zoom" >Picture :</b><img width="200" height="200" src="../Vproducts/<?php echo $row['image']; ?>"/></dd>
                </dl>
     </dl>
               </h4>
                </p>
</div>
 <br></br>
<?PHP
}
?></aside>
</section></div></div></div>
<br>
 <div align="center"><button class="bo"><div><a href="afficherProduits2.php"> Back </a></button><div>
 <br>
 <br>
<footer>
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
              <li class=" last"><a href="contact-us.php" title="Suppliers">Contact Us</a></li>
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
        <div class="col-sm-12 col-xs-12 coppyright">&copy; 2021 ThemesGround. All Rights Reserved.</div>
        
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
      <li><a href="checkout.php">Checkout</a>
        <ul>
          <li><a href="checkout_method.php">Checkout Method</a> </li>
          <li><a href="checkout_billing_info.php">Checkout Billing Info</a> </li>
        </ul>
      </li>
      <li> <a href="wishlist.php">Wishlist</a> </li>
      <li> <a href="dashboard.php">Dashboard</a> </li>
      <li> <a href="multiple_addresses.php">Multiple Addresses</a> </li>
      <li> <a href="about_us.php">About us</a> </li>
      <li><a href="blog.php">Blog</a>
        <ul>
          <li><a href="blog-detail.php">Blog Detail</a> </li>
        </ul>
      </li>
      <li><a href="contact_us.php">Contact us</a> </li>
      <li><a href="404error.php">404 Error Page</a> </li>
    </ul>
  </li>
  <li><a href="#">Electronics</a>
    <ul>
      <li> <a href="#"><span>Mobiles</span></a>
        <ul>
          <li> <a href="#"><span>Samsung</span></a> </li>
          <li> <a href="#"><span>Nokia</span></a> </li>
          <li> <a href="#"><span>IPhone</span></a> </li>
          <li> <a href="#"><span>Sony</span></a> </li>
        </ul>
      </li>
      <li> <a href="#" class=""><span>Accesories</span></a>
        <ul>
          <li> <a href="#"><span>Mobile Memory Cards</span></a> </li>
          <li> <a href="#"><span>Cases &amp; Covers</span></a> </li>
          <li> <a href="#"><span>Mobile Headphones</span></a> </li>
          <li> <a href="#"><span>Bluetooth Headsets</span></a> </li>
        </ul>
      </li>
      <li> <a href="#"><span>Cameras</span></a>
        <ul>
          <li> <a href="#"><span>Camcorders</span></a> </li>
          <li> <a href="#"><span>Point &amp; Shoot</span></a> </li>
          <li> <a href="#"><span>Digital SLR</span></a> </li>
          <li> <a href="#"><span>Camera Accesories</span></a> </li>
        </ul>
      </li>
      <li> <a href="#"><span>Audio &amp; Video</span></a>
        <ul>
          <li> <a href="#"><span>MP3 Players</span></a> </li>
          <li> <a href="#"><span>IPods</span></a> </li>
          <li> <a href="#"><span>Speakers</span></a> </li>
          <li> <a href="#"><span>Video Players</span></a> </li>
        </ul>
      </li>
      <li> <a href="#"><span>Computer</span></a>
        <ul>
          <li> <a href="#"><span>External Hard Disk</span></a> </li>
          <li> <a href="#"><span>Pendrives</span></a> </li>
          <li> <a href="#"><span>Headphones</span></a> </li>
          <li> <a href="#"><span>PC Components</span></a> </li>
        </ul>
      </li>
      <li> <a href="#"><span>Medical</span></a>
    </ul>
  </li>
  <li><a href="contact-us.php">Contact Us</a> </li>
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
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> TND Dinar Tunisien </a></li>
              </ul>
            </div>
</div>
<!-- End Footer --> 

<!-- JavaScript --> 
<script type="text/javascript" src="js/jquery.min.js"></script> 
<script type="text/javascript" src="js/bootstrap.min.js"></script> 
<script type="text/javascript" src="js/parallax.js"></script> 
<script type="text/javascript" src="js/revslider.js"></script> 
<script type="text/javascript" src="js/common.js"></script> 
<script type="text/javascript" src="js/jquery.bxslider.min.js"></script> 
<script type="text/javascript" src="js/owl.carousel.min.js"></script> 
<script type="text/javascript" src="js/jquery.mobile-menu.min.js"></script> 
<script type='text/javascript'>
      jQuery(document).ready(function(){
          jQuery('#rev_slider_4').show().revolution({
              dottedOverlay: 'none',
              delay: 5000,
              startwidth: 0,
              startheight: 800,

              hideThumbs: 200,
              thumbWidth: 200,
              thumbHeight: 50,
              thumbAmount: 2,

              navigationType: 'thumb',
              navigationArrows: 'solo',
              navigationStyle: 'round',

              touchenabled: 'on',
              onHoverStop: 'on',
              
              swipe_velocity: 0.7,
              swipe_min_touches: 1,
              swipe_max_touches: 1,
              drag_block_vertical: false,
          
              spinner: 'spinner0',
              keyboardNavigation: 'off',

              navigationHAlign: 'center',
              navigationVAlign: 'bottom',
              navigationHOffset: 0,
              navigationVOffset: 20,

              soloArrowLeftHalign: 'left',
              soloArrowLeftValign: 'center',
              soloArrowLeftHOffset: 20,
              soloArrowLeftVOffset: 0,

              soloArrowRightHalign: 'right',
              soloArrowRightValign: 'center',
              soloArrowRightHOffset: 20,
              soloArrowRightVOffset: 0,

              shadow: 0,
              fullWidth: 'on',
              fullScreen: 'off',

              stopLoop: 'off',
              stopAfterLoops: -1,
              stopAtSlide: -1,

              shuffle: 'off',

              autoHeight: 'off',
              forceFullWidth: 'on',
              fullScreenAlignForce: 'off',
              minFullScreenHeight: 0,
              hideNavDelayOnMobile: 1500,
          
              hideThumbsOnMobile: 'off',
              hideBulletsOnMobile: 'off',
              hideArrowsOnMobile: 'off',
              hideThumbsUnderResolution: 0,

              hideSliderAtLimit: 0,
              hideCaptionAtLimit: 0,
              hideAllCaptionAtLilmit: 0,
              startWithSlide: 0,
              fullScreenOffsetContainer: ''
          });
      });
      </script> 
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip(); 
});
</script>
</body>
</html>
