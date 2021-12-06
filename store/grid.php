<?php
include "Header.php";
?>
<body class="inner-page">
<div id="page"> 
<?php
include "Navbar.php";

?><?php
include_once "../C/CategorieC.php";
include_once "../M/Categorie.php";
 $CategoriesCore=new CategoriesCore();
 $listecategories=$CategoriesCore->affichercategories();
?>
<?PHP  

include_once "../C/ProduitC.php";
include_once "../M/Produit.php";

$ProduitsCore=new ProduitsCore();
$listeProduits=$ProduitsCore->afficherProduits();

?>
<!DOCTYPE html>
<html lang="en">

<!-- Breadcrumbs -->
<div class="breadcrumbs">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <ul class="breadcrumb">
          <li><a href="#">Home</a></li>
          <li><a href="http://localhost//projet_web/web/back%20office/store/grid.php#">Categories</a></li>
      </div>
    </div>
  </div>
</div>
<!-- Breadcrumbs End --> 
<!-- Main Container -->
<section class="main-container col2-left-layout bounceInUp animated">
  <div class="container">
    <div class="row">
      <div class="col-main col-sm-9 col-sm-push-3">
        <!--	///*///======    End article  ========= //*/// --> 
      </div>
      <div class="col-left sidebar col-sm-10 col-xs-0 col-sm-pull-15">
        <aside class="col-left sidebar">
          <div class="side-nav-categories">
            <div class="block-title"> Categories </div>
            <!--block-title--> 
            <!-- BEGIN BOX-CATEGORY -->
            <div class="box-content box-category">
              <ul>
                 <li> <a href="http://localhost/projet_web/web/back%20office/store/mobiles.php"> Mobiles </a> <span class="subDropdown plus"></span>
                      <ul class="level1" style="display:none">
                        <li> <a href="#/mobiles/samsung.html"> Samsung </a> </li>
                        <li> <a href="#/mobiles/apple.html"> IPhone </a> </li>
                        <li> <a href="#/mobiles/blackberry.html"> Oppo </a> </li>
                      </ul>
                     </li>
                    <li> <a href="#/accesories.html"> Accesories </a> <span class="subDropdown plus"></span>
                      <ul class="level1" style="display:none">
                        <li> <a href="#/accesories/mobile-memory-cards.html">Mobile Memory Cards </a> </li>
                        <li> <a href="#/accesories/cases-&amp-covers.html"> Cases &amp; Covers </a> </li>
                        <li> <a href="#/accesories/mobile-headphones.html"> Mobile Headphones </a> </li>
                        <li> <a href="#/accesories/bluetooth-headsets.html"> Bluetooth Headsets </a> </li>
                      </ul>
                    </li>
                    <li> <a href="#/cameras.html"> Cameras </a> <span class="subDropdown plus"></span>
                      <ul class="level1" style="display:none">
                        <li> <a href="#/cameras/camcorders.html"> Camcorders </a> </li>
                        <li> <a href="#/cameras/point-&amp;-shoot.html"> Point &amp; Shoot </a> </li>
                        <li> <a href="#/cameras/digital-SLR.html"> Digital SLR </a> </li>
                        <li> <a href="#/cameras/camera-accesories.html"> Camera Accesories </a> </li>
                      </ul>
                    </li>
                    <!--level0--> 
                   </li>
                   <li> <a href="#/audio-&amp;-video.html"> Audio &amp; Video </a> <span class="subDropdown plus"></span>
                      <ul class="level1" style="display:none">
                        <li> <a href="#/audio-&amp;-video/MP3-players.html"> MP3 Players </a> </li>
                        <li> <a href="#/audio-&amp;-video/IPods.html"> IPods </a> </li>
                        <li> <a href="#/audio-&amp;-video/speakers.html"> Speakers </a> </li>
                        <li> <a href="#/audio-&amp;-video/video-players.html"> Video Players </a> </li>
                      </ul>
                    </li>
                   <!--level0--> 
                    </li>
                    <li> <a href="#/computer.html"> Computer </a> <span class="subDropdown plus"></span>
                      <ul class="level1" style="display:none">
                        <li> <a href="#/computer/external-hard-disk.html"> External Hard Disk </a> </li>
                        <li> <a href="#/computer/pendrives.html"> Pendrives </a> </li>
                        <li> <a href="#/computer/headphones.html"> Headphones </a> </li>
                        <li> <a href="#/computer/PC-components.html"> PC Components </a> </li>
                      </ul>
                    </li>
                  <!--level0--> 
                  <li> <a href="#/medical.html"> Medical </a> <span class="subDropdown plus"></span>
                  <ul class="level1" style="display:none"></ul>
                </li>
                 <!--level0--> 
                <?php       
               foreach($listecategories as $row){ ?> 
               <li> <a href="#"><?php echo $row['nom_cat'];?> </a> <span class="subDropdown plus"></span>

               <?PHP foreach($listeProduits as $row){ ?>  
                  <ul class="level1" style="display:none">
                      <li> <a href="#"> <?PHP echo $row['nom']; ?></a> </li>     
                   </ul>

                   <?PHP } ?>

               <?php }?>

                </li>      
            </div>
            <!--box-content box-category--> 
          </div>
            </div>
                </li>
              </ul>
            </div>
          </div>
      </aside>
      </div>
    </div>
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
              <li class=" last"><a href="contact-us.html" title="Suppliers">Contact Us</a></li>
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
      <li><a href="grid.html">Grid</a> </li>
      <li> <a href="list.html">List</a> </li>
      <li> <a href="product_detail.html">Product Detail</a> </li>
      <li> <a href="shopping_cart.html">Shopping Cart</a> </li>
      <li><a href="checkout.html">Checkout</a>
        <ul>
          <li><a href="checkout_method.html">Checkout Method</a> </li>
          <li><a href="checkout_billing_info.html">Checkout Billing Info</a> </li>
        </ul>
      </li>
      <li> <a href="wishlist.html">Wishlist</a> </li>
      <li> <a href="dashboard.html">Dashboard</a> </li>
      <li> <a href="multiple_addresses.html">Multiple Addresses</a> </li>
      <li> <a href="about_us.html">About us</a> </li>
      <li><a href="blog.html">Blog</a>
        <ul>
          <li><a href="blog-detail.html">Blog Detail</a> </li>
        </ul>
      </li>
      <li><a href="contact_us.html">Contact us</a> </li>
      <li><a href="404error.html">404 Error Page</a> </li>
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
  <li><a href="contact-us.html">Contact Us</a> </li>
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