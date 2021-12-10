
<?php
include "Header.php";
?>
<body class="inner-page">
<div id="page"> 
<?php
include "Navbar.php";

?>
<?php
include_once "../C/CategorieC.php";
include_once "../M/Categorie.php";

include_once "../C/ProduitC.php";
include_once "../M/Produit.php";
 $CategoriesCore=new CategoriesCore();
 $listecategories=$CategoriesCore->affichercategories();
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
             <li><a href="grid.php">Categories</a></li>
            </ul>
          </div>
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

        <article class="col-main">
          <div class="page-title">
            <h1></h1>
          </div>
        
          <div class="toolbar">
        
          <div class="category-products">
            <ol class="products-list" id="products-list">
          <li class="item first">
            <div class="product-image"> <a href="product_detail.php" title="IPHONE 12 PRO MAX 128 GO"> <img class="small-image" src="products/product1.jpg" alt="IPHONE 12 PRO MAX 128 GO"> </a> </div>
            <div class="product-shop">
              <h2 class="product-name"><a href="product_detail.php" title="IPHONE 12 PRO MAX 128 GO">IPHONE 12 PRO MAX 128 GO</a></h2>
              <div class="ratings">
                <div class="rating-box">
                  <div style="width:50%" class="rating"></div>
                </div>
                <p class="rating-links"> <a href="#/review/product/list/id/167/category/35/">1 Review(s)</a> <span class="separator">|</span> <a href="#review-form">Add Your Review</a> </p>
              </div>
              <div class="desc std">
                <p>6.7 "Super Retina XDR OLED HDR10 display - Resolution: 1284 x 2778 pixels - Processor: Apple A14 Bionic (5 nm) Hexa-core (2x3.1 GHz Firestorm + 4x1.8 GHz Icestorm) - Operating system: iOS 14.1 - RAM memory: 6 GB - Storage: 128 GB - Rear Camera: Triple Pixels: 12 MegaPixels f / 1.6 + 12 MegaPixels f / 2.2 + 12 MegaPixels f / 2.4 - Front Camera 12 MegaPixels f / 2.2 - 4K Video with Wifi , 4G and Bluetooth 5.0 - Battery: Li-Ion 3687 mAh - Face ID - Color: Blue - Warranty: 1 year <a class="link-learn" title="" href="#">Learn More</a> </p>
              </div>
              <div class="price-box">
               
                <p class="special-price"> <span class="price-label"></span> <span class="price"> 5 000,000 DT </span> </p> <p class="old-price"> <span class="price-label"></span> <span class="price"> 5 299,000 DT </span> </p>
              </div>
              <div class="actions">
                <button class="button btn-cart ajx-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                <span class="add-to-links"> <a title="Add to Wishlist" class="button link-wishlist" href="#"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="button link-compare" href="#"><span>Add to Compare</span></a> </span> </div>
            </div>
          </li>
          <li class="item even">
            <div class="product-image"> <a href="#/microsoft-natural-ergonomic-keyboard-4000.html" title="PC PORTABLE APPLE MACBOOK PRO 16"> <img class="small-image" src="products/product2.jpg" alt="PC PORTABLE APPLE MACBOOK PRO 16"> </a> </div>
            <div class="product-shop">
              <h2 class="product-name"><a href="#/microsoft-natural-ergonomic-keyboard-4000.html" title="PC PORTABLE APPLE MACBOOK PRO 16">PC PORTABLE APPLE MACBOOK PRO 16</a></h2>
              <div class="desc std">
                <p>16 "UHD 3072x1920 IPS HDR display - Touch Bar - Intel Core i9-9880H, up to 4.8 GHz, 16 MB cache - 16 GB memory - 1 TB SSD drive - AMD Radeon Pro 5500M graphics card, 4 GB dedicated memory - Wifi 6 - Jack 3.5mm - Bluetooth 5.0 - 4x Thunderbolt 3 / USB-C - Webcam + Micro - Mac OS X 10.15 Catalina - Color Gray - 1 year warranty <a class="link-learn" title="" href="#">Learn More</a></p>
              </div>
              <div class="price-box"> <span class="regular-price"> <span class="price">10 520,000 DT</span> </span> </div>
              <div class="actions">
                <button class="button btn-cart ajx-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                <span class="add-to-links"> <a title="Add to Wishlist" class="button link-wishlist" href="#"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="button link-compare" href="#"><span>Add to Compare</span></a> </span> </div>
            </div>
          </li>
          <li class="item odd">
            <div class="product-image"> <a href="#/30-flat-panel-tft-lcd-cinema-hd-monitor.html" title="Samsung Galaxy Note 20 Ultra"> <img class="small-image" src="products/product4.jpg" alt="Samsung Galaxy Note 20 Ultra"> </a> </div>
            <div class="product-shop">
              <h2 class="product-name"><a href="#/30-flat-panel-tft-lcd-cinema-hd-monitor.html" title="Samsung Galaxy Note 20 Ultra">Samsung Galaxy Note 20 Ultra</a></h2>
              <div class="desc std"><p>The Galaxy Note20 ultra offers incomparable performance: 6.9 "Super amoled + / 8GB memory / 256GB storage / Front camera 10.0 MP / Rear camera 12.0 MP + 16.0 MP + 108.0 MP / 4500 mAh battery / 8K video <a class="link-learn" title="" href="#">Learn More</a></p>
              </div>
              <div class="price-box"> <span class="regular-price"> <span class="price">4 299,000 DT</span> </span> </div>
              <div class="actions">
                <button class="button btn-cart ajx-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                <span class="add-to-links"> <a title="Add to Wishlist" class="button link-wishlist" href="#"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="button link-compare" href="#"><span>Add to Compare</span></a> </span> </div>
            </div>
          </li>
          <li class="item even">
            <div class="product-image"> <a href="#/19-widescreen-flat-panel-lcd-monitor.html" title="IPHONE 11 64 GO - NOIR (MHDA3AA-A)"> <img class="small-image" src="products/product6.png" alt="IPHONE 11 64 GO - NOIR (MHDA3AA-A)"> </a> </div>
            <div class="product-shop">
              <h2 class="product-name"><a href="#/19-widescreen-flat-panel-lcd-monitor.html" title="IPHONE 11 64 GO - NOIR (MHDA3AA-A)">IPHONE 11 64 GO - NOIR (MHDA3AA-A)</a></h2>
              <div class="desc std"><p>6.1 "Retina IPS screen - Resolution: 828 x 1792 pixels - Processor: Apple A13 Bionic Hexa-core (2x2.65 GHz Lightning + 4x1.8 GHz Thunder) - Operating system: iOS 13 - RAM memory: 4 GB - Storage: 64 GB - Rear Camera: Double: 12 MegaPixels + 12 MegaPixels (Aperture f / 2.4 13mm) - Front Camera 12 MegaPixel (Aperture ƒ / 2.2) Retina Flash with Wifi, 4G and Bluetooth 5.0 - Battery: Li -Ion 3110 mAh - 4K video recording - Wireless talk time: up to 17 hours - IP68 rated (maximum depth of 2 meters up to 30 minutes) - Color: Black - Warranty: 1 year.
              <p>  Headphones & Charger adapter not included </p> <a class="link-learn" title="" href="#">Learn More</a> </p>
            </div>
              <div class="price-box"> <span class="regular-price"> <span class="price">2 599,000 DT</span> </span> </div>
              <div class="actions">
                <button class="button btn-cart ajx-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                <span class="add-to-links"> <a title="Add to Wishlist" class="button link-wishlist" href="#"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="button link-compare" href="#"><span>Add to Compare</span></a> </span> </div>
            </div>
          </li>
          <li class="item odd">
            <div class="product-image"> <a href="#/250gb-5400rpm.html" title="Wireless Bluetooth Headphones  "> <img class="small-image" src="products/product7.png" alt="Wireless Bluetooth Headphones  "> </a> </div>
            <div class="product-shop">
              <h2 class="product-name"><a href="#/250gb-5400rpm.html" title="Wireless Bluetooth Headphones  ">Celebrat A23 Wireless Bluetooth Headphones Black </a></h2>
              <div class="desc std"><p>Excellent sound quality; Great bass; This model adapts to your anatomical parameters; The case is made of solid and reliable materials, practical for everyday use; Support TF card (maximum 32G); Bluetooth chip: JL6925F; Bluetooth version: V5.0; Transmission distance: 10m; Standby time: about 80 hours; Battery capacity: 200mAh; Charging time: about 2.5 hours; Music time: about 5 hours; Call time: about 4.5 hours. <a class="link-learn" title="" href="#">Learn More</a> </p>
              </div>
              <div class="price-box"> <span class="regular-price"> <span class="price">79,900 DT</span> </span> </div>
              <div class="actions">
                <button class="button btn-cart ajx-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                <span class="add-to-links"> <a title="Add to Wishlist" class="button link-wishlist" href="#"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="button link-compare" href="#"><span>Add to Compare</span></a> </span> </div>
            </div>
          </li>
  <li class="item odd">
            <div class="product-image"> <a href="#" title="PC PORTABLE HP "> <img class="small-image" src="products/product9.png" alt="PC PORTABLE HP "> </a> </div>
            <div class="product-shop">
              <h2 class="product-name"><a href="#" title="PC PORTABLE HP ">PC PORTABLE HP 15-DW1001NK DUAL CORE 4GO 1TO - GRIS (27Z73EA)</a></h2>
              <div class="desc std"><p>15.6 "HD LED display - Processor: Intel Celeron N4020 (1.10 GHz up to 2.80 GHz, 4 MB cache memory, Dual-Core) - Operating system: Windows 10 Home - Memory: 4 GB - Hard drive: 1 TB - Graphics card: Intel HD Graphics, with Wi-Fi, Bluetooth, 1x USB Type-C, 2x USB Type-A, 1x HDMI 1.4b, 1x RJ-45 and SD card reader - Color: Gray - Warranty: 1 year <a class="link-learn" title="" href="#">Learn More</a> </p>
              </div>
              <div class="price-box"> <span class="regular-price"> <span class="price"></span> </span> </div>
              <p class="special-price"> <span class="price-label"></span> <span class="price"> 899,000 TND DT </span> </p> <p class="old-price"> <span class="price-label"></span> <span class="price"> 999,000 DT </span> </p>
              <div class="actions">
                <button class="button btn-cart ajx-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                <span class="add-to-links"> <a title="Add to Wishlist" class="button link-wishlist" href="#"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="button link-compare" href="#"><span>Add to Compare</span></a> </span> </div>
            </div>
          </li>
          <li class="item even">
            <div class="product-image"> <a href="#/24-widescreen-flat-panel-lcd-monitor.html" title="24&quot; Widescreen LCD Monitor"> <img class="small-image" src="products/product10.png" alt="24&quot; Widescreen LCD Monitor"> </a> </div>
            <div class="product-shop">
              <h2 class="product-name"><a href="#/24-widescreen-flat-panel-lcd-monitor.html" title="TOSHIBA CANVIO BASICS EXTERNAL HARD DRIVE ">TOSHIBA CANVIO BASICS EXTERNAL HARD DRIVE / 1TB / BLACK</a></h2>
              <div class="desc std"><p>Disque dur externe de 2.5" au design noir mat élégant - Capacité 1 To - Interface USB 3.0 - Taux de transfert de données: 5000 Mbit/s. - Compatible Winndows 7 / 8.1 / 10 et MacOS après reformatage - Couleur Noir - Garantie 1 an <a class="link-learn" title="" href="#">Learn More</a> </p>
              </div>
              <div class="price-box"> <span class="regular-price"> <span class="price">129,000 DT</span> </span> </div>
              <div class="actions">
                <button class="button btn-cart ajx-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                <span class="add-to-links"> <a title="Add to Wishlist" class="button link-wishlist" href="#"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="button link-compare" href="#"><span>Add to Compare</span></a> </span> </div>
            </div>
          </li>
          <li class="item odd">
            <div class="product-image"> <a href="#/microsoft-wireless-optical-mouse-5004.html" title="Kit de Surveillance "> <img class="small-image" src="products/product11.png" alt="Kit de Surveillance "> </a> </div>
            <div class="product-shop">
              <h2 class="product-name"><a href="#/microsoft-wireless-optical-mouse-5004.html" title="Kit de Surveillance ">Kit de Surveillance HIKVISION 2 Caméras + DVR – 4 channels</a></h2>
              <div class="desc std"><p>kit Hikvision 2 MP – Superbe qualité d’image sur tous les canaux.
                <p>Système complet Plug ‘N’ Play – Facile à utiliser et à configurer. </p>
                <p>Application mobile pour visionner à distance n’importe où dans le monde.</p>
                <p>Système intérieur et extérieur : vision nocturne jusqu’à 30 m.</p>
                 <a class="link-learn" title="" href="#">Learn More</a> </p>
              </div>
              <div class="price-box"> <span class="regular-price"> <span class="price">530.00 DT</span> </span> </div>
              <div class="actions">
                <button class="button btn-cart ajx-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                <span class="add-to-links"> <a title="Add to Wishlist" class="button link-wishlist" href="#"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="button link-compare" href="#"><span>Add to Compare</span></a> </span> </div>
             </div>
          </li>
        </ol>
          </div>
        </article>
        <!--	///*///======    End article  ========= //*/// --> 
      </div>
      <div class="col-left sidebar col-sm-3 col-xs-12 col-sm-pull-9">
          <aside class="col-left sidebar">
            <div class="side-nav-categories">
              <div class="block-title"> Categories </div>
           <!-- BEGIN BOX-CATEGORY -->
                  <div class="box-content box-category">
                  <ul>
                 <!--level0--> 
                <?php       
               foreach($listecategories as $row){ ?> 
               <li> <a href="#"><?php echo $row['nom_cat'];?> </a> <span class="subDropdown plus"></span>

               <?PHP foreach($listeProduits as $row){ ?>  
                  <ul class="level1" style="display:none">
                      <li> <a href="#"> <?PHP echo $row['nom']; ?></a> </li>     
                      
                   </ul>
                  
                   <?PHP } ?>
                   </li> 
               <?php }?>
                  </div>
                  <!--box-content box-category--> 
                </div>
                <div class="block block-layered-nav">
                  <div class="block-title">Shop By</div>
                  <div class="block-content">
                    <p class="block-subtitle">Shopping Options</p>
                    <dl id="narrow-by-list">
                      <dt class="odd">Price</dt>
                      <dd class="odd">
                        <ol>
                          <li> <a href="#"><span class="price">0.00 DT </span> - <span class="price">567,870 DT</span></a> (6) </li>
                          <li> <a href="#"><span class="price">570,000 DT</span> and above</a> (6) </li>
                        </ol>
                      </dd>
                      <dt class="even">Manufacturer</dt>
                      <dd class="even">
                        <ol>
                          <li> <a href="#">Superb</a> (9) </li>
                          <li> <a href="#">Nexus</a> (4) </li>
                          <li> <a href="#">Xperia</a> (1) </li>
                        </ol>
                      </dd>
                      <dt class="odd">Color</dt>
                      <dd class="odd">
                        <ol>
                          <li> <a href="#">Green</a> (1) </li>
                          <li> <a href="#">White</a> (5) </li>
                          <li> <a href="#">Black</a> (5) </li>
                          <li> <a href="#">Gray</a> (4) </li>
                          <li> <a href="#">Dark Gray</a> (3) </li>
                          <li> <a href="#">Blue</a> (1) </li>
                        </ol>
                      </dd>
                      
                    </dl>
                  </div>
                </div>
         <div class="block block-list block-viewed">
                  <div class="block-title"> Recently Viewed </div>
                  <div class="block-content">
                    <ol id="recently-viewed-items">
                      <li class="item odd">
                        <p class="product-name"><a href="#"> Samsung Galaxy Note 20 Ultra </a></p>
                      </li>
                      <li class="item even">
                        <p class="product-name"><a href="#"> PC PORTABLE HP 15-DW1001NK DUAL CORE 4GO 1TO - GRIS (27Z73EA) </a></p>
                      </li>
                      <li class="item last odd">
                        <p class="product-name"><a href="#"> PC PORTABLE ASUS TUF505DT AMD RYZEN 5 8GO 512GO SSD (TUF505DT-BQ330T) </a></p>
                      </li>
                    </ol>
                  </div>
                </div>
                <div class="block block-poll">
                  <div class="block-title">Community Poll </div>
                  <form id="pollForm" action="#" method="post" onSubmit="return validatePollAnswerIsSelected();">
                    <div class="block-content">
                      <p class="block-subtitle">What is your favorite Magento feature?</p>
                      <ul id="poll-answers">
                        <li class="odd">
                          <input type="radio" name="vote" class="radio poll_vote" id="vote_5" value="5">
                          <span class="label">
                          <label for="vote_5">Layered Navigation</label>
                          </span> </li>
                        <li class="even">
                          <input type="radio" name="vote" class="radio poll_vote" id="vote_6" value="6">
                          <span class="label">
                          <label for="vote_6">Price Rules</label>
                          </span> </li>
                        <li class="odd">
                          <input type="radio" name="vote" class="radio poll_vote" id="vote_7" value="7">
                          <span class="label">
                          <label for="vote_7">Category Management</label>
                          </span> </li>
                        <li class="last even">
                          <input type="radio" name="vote" class="radio poll_vote" id="vote_8" value="8">
                          <span class="label">
                          <label for="vote_8">Compare Products</label>
                          </span> </li>
                      </ul>
                      <div class="actions">
                        <button type="submit" title="Vote" class="button button-vote"><span>Vote</span></button>
                      </div>
                    </div>
                  </form>
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
        
        <li><a href="#">Categories</a>
          <ul>
            <li> <a href="#"><span>Mobiles</span></a>
              <ul>
                <li> <a href="#"><span>Samsung</span></a> </li>
                <li> <a href="#"><span>IPhone</span></a> </li>
                <li> <a href="#"><span>Oppo</span></a> </li>
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
            <li> <a href="#"><span>External Hard Disk</span></a> </li>
            <li> <a href="#"><span>Pendrives</span></a> </li>
            <li> <a href="#"><span>Headphones</span></a> </li>
            <li> <a href="#"><span>PC Components</span></a> </li>
    
            </li>
            
          </ul>
        </li>
        <li><a href="#">Medical</a> </li>
        
        <li><a href="contact-us.html">Contact Us</a> </li>
      </ul>
     
    <!-- JavaScript --> 
    <script type="text/javascript" src="js/jquery.min.js"></script> 
    <script type="text/javascript" src="js/bootstrap.min.js"></script> 
    <script type="text/javascript" src="js/parallax.js"></script>
    <script type="text/javascript" src="js/common.js"></script> 
    <script type="text/javascript" src="js/slider.js"></script> 
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/jquery.mobile-menu.min.js"></script> 
    </body>
    </html>