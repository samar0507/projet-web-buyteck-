
<?php
include "Header.php";
?>
<body class="inner-page">
<div id="page"> 
<?php
include "Navbar.php";

?>
<?php
include_once "../C/ProduitC.php";
include_once "../M/Produit.php";

$ProduitsCore=new ProduitsCore();
$listeProduits=$ProduitsCore->afficherProduits();

?>
  <!-- Slider -->
  <div id="thm-slideshow" class="thm-slideshow">
    <div class="container">
      <div id="rev_slider_4_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="classicslider1" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;"> 
        <!-- START REVOLUTION SLIDER 5.0.7 auto mode -->
        <div id="rev_slider_4_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">
          <ul>
            <!-- SLIDE  -->
            <li data-index="rs-16" data-transition="zoomout" data-slotamount="default"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="images/slide-img1.jpg"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Intro" data-description=""> 
              <!-- MAIN IMAGE --> 
              <img src="images/img1.jpg" alt=""> 
              <!-- LAYERS --> 
              
              <!-- LAYER NR. 1 -->
              <div class="tp-caption NotGeneric-Title   tp-resizeme rs-parallaxlevel-0" 
									 id="slide-16-layer-1" 
									 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
									 data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
									data-lineheight="['70','70','70','50']"
									data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
						 
									 data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" 
									 data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
									 data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
									 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
									data-start="1000" 
									data-splitin="chars" 
									data-splitout="none" 
									data-responsive_offset="on" 

									data-elementdelay="0.05" 
									
									style="z-index: 5; white-space: nowrap;">SEASON SALE</div>
              
              <!-- LAYER NR. 2 -->
              <div class="tp-caption NotGeneric-SubTitle   tp-resizeme rs-parallaxlevel-0" 
									 id="slide-16-layer-4" 
									 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
									 data-y="['middle','middle','middle','middle']" data-voffset="['52','52','52','51']" 
												data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
						 
									 data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
									 data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
									 data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
									 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
									data-start="1500" 
									data-splitin="none" 
									data-splitout="none" 
									data-responsive_offset="on" 

									
									style="z-index: 6; white-space: nowrap;">Get more for less on selected brands.</div>
              
              <!-- LAYER NR. 3 -->
              <div class="tp-caption NotGeneric-Icon   tp-resizeme rs-parallaxlevel-0" 
									 id="slide-16-layer-8" 
									 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
									 data-y="['middle','middle','middle','middle']" data-voffset="['-68','-68','-68','-68']" 
												data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
										data-style_hover="cursor:default;"
						 
									 data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;" 
									 data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
									 data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
									 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
									data-start="2000" 
									data-splitin="none" 
									data-splitout="none" 
									data-responsive_offset="on" 

									
									style="z-index: 7; white-space: nowrap;">Incredible Prices on All Your Favorite Items.<i class="pe-7s-refresh"></i> </div>
                                    
                                    
                                     <!-- LAYER NR. 3 -->
              <div class="tp-caption NotGeneric-Icon   tp-resizeme rs-parallaxlevel-1" 
									 id="slide-17-layer-8" 
									 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
									 data-y="['middle','middle','middle','middle']" data-voffset="['120','100','100','100']" 
												data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
									data-style_hover="cursor:default;"
						 
									 data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;" 
									 data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
									 data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
									 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
									data-start="2000" 
									data-splitin="none" 
									data-splitout="none" 
									data-responsive_offset="on" 

									
									style="z-index: 7; white-space: nowrap;"><a href="#">Learn More</a></div>
            </li>
            <!-- SLIDE  -->
            
            <!-- SLIDE  -->
            <li data-index="rs-18" data-transition="zoomin" data-slotamount="7"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="images/slide-img2.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Ken Burns" data-description=""> 
              <!-- MAIN IMAGE --> 
              <img src="images/img.jpg"  alt=""> 
              <!-- LAYERS --> 
              
              <!-- LAYER NR. 1 -->
              <div class="tp-caption tp-shape tp-shapewrapper   tp-resizeme rs-parallaxlevel-0" 
									 id="slide-18-layer-9" 
									 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
									 data-y="['middle','middle','middle','middle']" data-voffset="['15','15','15','15']" 
												data-width="600"
									data-height="155"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
						 
									 data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power4.easeInOut;" 
									 data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
									 data-mask_in="x:0px;y:0px;" 
									 data-mask_out="x:inherit;y:inherit;" 
									data-start="2000" 
									data-responsive_offset="on" 

									
									style="z-index: 5;background-color:rgba(0, 0, 0, 0.75);border-color:rgba(0, 0, 0, 0.50);"> </div>
              
              <!-- LAYER NR. 2 -->
              <div class="tp-caption NotGeneric-Title   tp-resizeme rs-parallaxlevel-0" 
									 id="slide-18-layer-1" 
									 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
									 data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
									data-lineheight="['70','70','70','50']"
									data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
						 
									 data-transform_in="y:[-100%];z:0;rZ:35deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" 
									 data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
									 data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
									 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
									data-start="1000" 
									data-splitin="chars" 
									data-splitout="none" 
									data-responsive_offset="on" 

									data-elementdelay="0.05" 
									
									style="z-index: 6; white-space: nowrap;">Mega Sale </div>
              
              <!-- LAYER NR. 3 -->
              <div class="tp-caption NotGeneric-SubTitle   tp-resizeme rs-parallaxlevel-0" 
									 id="slide-18-layer-4" 
									 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
									 data-y="['middle','middle','middle','middle']" data-voffset="['52','51','51','31']" 
												data-width="none"
									data-height="none"
									data-whitespace="nowrap"
									data-transform_idle="o:1;"
						 
									 data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
									 data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
									 data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
									 data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
									data-start="1500" 
									data-splitin="none" 
									data-splitout="none" 
									data-responsive_offset="on" 

									
									style="z-index: 7; white-space: nowrap;"></div>
            </li>
           
            
          </ul>
          <div class="tp-static-layers"></div>
          <div class="tp-bannertimer" style="height: 7px; background-color: rgba(255, 255, 255, 0.25);"></div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- end Slider -->
  
  <div class="promo-section">
  <div class="container">
  <div class="row">
  <div class="col-lg-6 col-md-4 col-sm-4 col-xs-12"><img alt="promotion banner" src="images/promo-banner1.png"></div>
  <div class="col-lg-6 col-md-4 col-sm-4 col-xs-12"><img alt="promotion banner" src="images/promo-banner2.png"></div>
  
  </div>
  </div>
  </div>
  
  <!-- Featured Slider -->
  <section class="featured-pro container wow bounceInUp animated">
    <div class="slider-items-products container">
      <div class="new_title center">
        <h2>Buytech Products</h2>
        <div class="starSeparator"></div>
      </div>
      <div id="featured-slider" class="product-flexslider hidden-buttons">
        <div class="slider-items slider-width-col4 products-grid">
        
<!-- Item -->
          <?PHP
foreach($listeProduits as $row){
  ?> 
          <div class="item">
            <div class="item-inner">
              <div class="item-img">
                <div class="item-img-info"> <a class="product-image" title="product" href="#"> <img alt="product" src="products/<?php echo $row['image']; ?>"> </a>
                     <div class="actions">
                    <div class="quick-view-btn"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Quick View"> <span>Quick View</span></a></div>
                    <div class="link-wishlist"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Wishlist"><span>Add to Wishlist</span></a></div>
                    <div class="link-compare"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Compare"><span>Add to Compare</span></a></div>
                    <div class="add_cart">
                      <button class="button btn-cart" type="button" data-toggle="tooltip" data-placement="right" title="" data-original-title="Add to Cart"><span>Add to Cart</span></button>
                    </div>
                  </div>
                  <div class="rating">
                    <div class="ratings">
                      <div class="rating-box">
                        <div style="width:80%" class="rating"></div>
                      </div>
                      <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item-info">
                <div class="info-inner">
                  <div class="item-title"> <a title="product" href="#"> <?PHP echo $row['nom']; ?> </a> </div>
                  <div class="item-content">
                    <div class="item-price">
                      <div class="price-box"> <span class="regular-price"> <span class="price"> <?PHP echo $row['prix']; ?><a> DT </a></span> </span> </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Item --> 
          <?PHP
}
?>
        </div>
      </div>
    </div>
  </section>
  <!-- End Featured Slider -->
  
   <!--Promotion Banner-->
  <div class="offer-slider parallax parallax-2">
    <div class="container">
      <h2> Deals of the day</h2>
         <div class="starSeparator"></div>
      <p>Buytech's store is updated regularly with offers.</p>
     <div class="box-timer">
                      <div class="countbox_1 timer-grid"></div>
                    </div>
      <a href="#" class="shop-now">Shop Now</a> </div>
  </div>
  <!--Promotion Banner End--> 
  
  <div class="container">
    <div class="row">
      <div class="products-grid">
        <div class="col-md-12">
          <div class="std">
            <div class="home-tabs wow bounceInUp animated">
              <div class="producttabs">
                <div id="thm_producttabs1" class="thm-producttabs"> 
                  <!--<h3></h3>-->
                  <div class="thm-pdt-container"> 
                    <!--Begin Tab Nav -->
                    <div class="thm-pdt-nav">
                      <ul class="pdt-nav">
                        <li class="item-nav" data-type="order" data-catid="" data-orderby="best_sales" data-href="pdt_best_sales"><span class="title-navi">Best Seller</span></li>
                        <li class="item-nav tab-loaded tab-nav-actived" data-type="order" data-catid="" data-orderby="new_arrivals" data-href="pdt_new_arrivals"><span class="title-navi">New Arrivals</span></li>
                      </ul>
                     </div>
                    <!-- End Tab Nav --> 
                    <!--Begin Tab Content -->
     
                    <div class="thm-pdt-content wide-5">
                      <div class="pdt-content is-loaded pdt_best_sales">                    
                        <ul class="pdt-list products-grid zoomOut play">
                          <li class="item item-animate wide-first">
                           <div class="item-inner">
                              <div class="item-img">
                                <div class="item-img-info"><a href="#" title="product" class="product-image"><img src="products/<?php echo $row['image']; ?>" alt="product"></a>
                       
                                  <div class="actions">
                                    <div class="quick-view-btn"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Quick View"> <span>Quick View</span></a></div>
                                    <div class="link-wishlist"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Wishlist"><span>Add to Wishlist</span></a></div>
                                    <div class="link-compare"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Compare"><span>Add to Compare</span></a></div>
                                    <div class="add_cart">
                                      <button class="button btn-cart" type="button" data-toggle="tooltip" data-placement="right" title="" data-original-title="Add to Cart"><span>Add to Cart</span></button>
                                    </div>
                                  </div>
                                  <div class="rating">
                                    <div class="ratings">
                                      <div class="rating-box">
                                        <div class="rating" style="width:80%"></div>
                                      </div>
                                      <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="item-info">
                                <div class="info-inner">
                                  <div class="item-title"><a href="#" title="product"><?PHP echo $row['nom']; ?> </a> </div>
                                  <div class="item-content">
                                    <div class="item-price">
                                      <div class="price-box"><span class="regular-price"><span class="price"><?PHP echo $row['prix']; ?><a> DT </a></span> </span> </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </li>
                      </ul>                   
                      </div>     
                      <div class="pdt-content pdt_new_arrivals is-loaded  tab-content-actived">
                        <ul class="pdt-list products-grid zoomOut play">
                        <li class="item item-animate wide-first">
                            <div class="item-inner">
                              <div class="item-img">
                                <div class="item-img-info"><a href="#" title="product" class="product-image"><img src="products/<?php echo $row['image']; ?>" alt="product"></a>
                       
                                  <div class="actions">
                                    <div class="quick-view-btn"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Quick View"> <span>Quick View</span></a></div>
                                    <div class="link-wishlist"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Wishlist"><span>Add to Wishlist</span></a></div>
                                    <div class="link-compare"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Compare"><span>Add to Compare</span></a></div>
                                    <div class="add_cart">
                                      <button class="button btn-cart" type="button" data-toggle="tooltip" data-placement="right" title="" data-original-title="Add to Cart"><span>Add to Cart</span></button>
                                    </div>
                                  </div>
                                  <div class="rating">
                                    <div class="ratings">
                                      <div class="rating-box">
                                        <div class="rating" style="width:80%"></div>
                                      </div>
                                      <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="item-info">
                                <div class="info-inner">
                                  <div class="item-title"><a href="#" title="product"><?PHP echo $row['nom']; ?> </a> </div>
                                  <div class="item-content">
                                    <div class="item-price">
                                      <div class="price-box"><span class="regular-price"><span class="price"><?PHP echo $row['prix']; ?><a> DT </a></span> </span> </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </li>
                         </div>
                        </ul>
                      </div> 
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

 
  
  <!-- Latest Blog -->

  <!-- End Latest Blog -->
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
  
  <div class="our-features-box">
    <div class="container">
      <ul>
        <li>
          <div class="feature-box red_bg"> <span class="icon-globe-alt"></span>
            <div class="content">
              <h3>FREE SHIPPING WORLDWIDE</h3>
            </div>
          </div>
        </li>
                <li>
          <div class="feature-box yellow_bg"> <span class="icon-support"></span>
            <div class="content">
              <h3>24/7 CUSTOMER SUPPORT</h3>
            </div>
          </div>
        </li>
          <li class="last">
          <div class="feature-box brown_bg"> <span class="icon-share-alt"></span>
            <div class="content">
              <h3>RETURNS AND EXCHANGES</h3>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
  
  <!-- Footer -->
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
          <ul> <li><a href="blog-detail.html">Blog Detail</a> </li> </ul>
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
    <li><a href="#"></a> </li>
   
  </ul>


<!-- End Footer --> 

<!-- JavaScript --> 
<script type="text/javascript" src="js/jquery.min.js"></script> 
<script type="text/javascript" src="js/bootstrap.min.js"></script> 
<script type="text/javascript" src="js/common.js"></script> 
<script type="text/javascript" src="js/countdown.js"></script> 
<script type="text/javascript" src="js/owl.carousel.min.js"></script> 
<script type="text/javascript" src="js/jquery.mobile-menu.min.js"></script> 
<script type="text/javascript" src="js/revolution-slider.js"></script> 
<script type="text/javascript" src="js/revolution.extension.js"></script> 
  <script type="text/javascript">
var dthen1 = new Date("12/25/17 11:59:00 PM");
	start = "05/03/15 03:02:11 AM";
	start_date = Date.parse(start);
	var dnow1 = new Date(start_date);
	if (CountStepper > 0)
	ddiff = new Date((dnow1) - (dthen1));
	else
	ddiff = new Date((dthen1) - (dnow1));
	gsecs1 = Math.floor(ddiff.valueOf() / 1000);
	
	var iid1 = "countbox_1";
	CountBack_slider(gsecs1, "countbox_1", 1);
	
	var dthen1 = new Date("12/12/17 11:59:00 PM");
	start = "01/20/16 03:02:11 AM";
	start_date = Date.parse(start);
	var dnow1 = new Date(start_date);
	if (CountStepper > 0)
	ddiff = new Date((dnow1) - (dthen1));
	else
	ddiff = new Date((dthen1) - (dnow1));
	gsecs1 = Math.floor(ddiff.valueOf() / 1000);
	
	var iid1 = "countbox_2";
	CountBack_slider(gsecs1, "countbox_2", 1);
</script>

<script type="text/javascript">
					var tpj=jQuery;			
					var revapi4;
					tpj(document).ready(function() {
						if(tpj("#rev_slider_4_1").revolution == undefined){
							revslider_showDoubleJqueryError("#rev_slider_4_1");
						}else{
							revapi4 = tpj("#rev_slider_4_1").show().revolution({
								sliderType:"standard",
								sliderLayout:"fullwidth",
								dottedOverlay:"none",
								delay:9000,
								navigation: {
									keyboardNavigation:"off",
									keyboard_direction: "horizontal",
									mouseScrollNavigation:"off",
									onHoverStop:"off",
									touch:{
										touchenabled:"on",
										swipe_threshold: 75,
										swipe_min_touches: 1,
										swipe_direction: "horizontal",
										drag_block_vertical: false
									}
									,
									arrows: {
										style:"zeus",
										enable:true,
										hide_onmobile:true,
										hide_under:750,
										hide_onleave:true,
										hide_delay:200,
										hide_delay_mobile:1200,
										tmp:'<div class="tp-title-wrap">  	<div class="tp-arr-imgholder"></div> </div>',
										left: {
											h_align:"left",
											v_align:"center",
											h_offset:30,
											v_offset:0
										},
										right: {
											h_align:"right",
											v_align:"center",
											h_offset:30,
											v_offset:0
										}
									}
									,
									bullets: {
										enable:true,
										hide_onmobile:true,
										hide_under:600,
										style:"metis",
										hide_onleave:true,
										hide_delay:200,
										hide_delay_mobile:1200,
										direction:"horizontal",
										h_align:"center",
										v_align:"bottom",
										h_offset:0,
										v_offset:30,
										space:5,
										tmp:'<span class="tp-bullet-img-wrap">  <span class="tp-bullet-image"></span></span><span class="tp-bullet-title">{{title}}</span>'
									}
								},
								viewPort: {
									enable:true,
									outof:"pause",
									visible_area:"80%"
								},
								responsiveLevels:[1240,1024,778,480],
								gridwidth:[768,1024,778,480],
								gridheight:[890,600,500,400],
								lazyType:"none",
								parallax: {
									type:"mouse",
									origo:"slidercenter",
									speed:2000,
									levels:[2,3,4,5,6,7,12,16,10,50],
								},
								shadow:0,
								spinner:"off",
								stopLoop:"off",
								stopAfterLoops:-1,
								stopAtSlide:-1,
								shuffle:"off",
								autoHeight:"off",
								hideThumbsOnMobile:"off",
								hideSliderAtLimit:0,
								hideCaptionAtLimit:0,
								hideAllCaptionAtLilmit:0,
								debugMode:false,
								fallbacks: {
									simplifyAll:"off",
									nextSlideOnWindowFocus:"off",
									disableFocusListener:false,
								}
							});
						}
					});	/*ready*/
				</script>
                

