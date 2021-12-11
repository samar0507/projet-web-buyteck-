
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

<!-- Main Container -->
<style>
    .user {
  
    color: black; 
    background-color: #FACFEA; /* Green */
    border: none;
    color: black;
    padding: 10px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 5px 5px;
    cursor: pointer;
  }
 .bo{
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
  }

    input[type=text]
    {
      padding: 8px 200px;
      border-radius: 4px;
      font-size: 16px;
    }
  </style>
<div class="breadcrumbs">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <ul class="breadcrumb">
          <li><a href="#">Home</a></li>
          <li><a href="afficherProduits2.php">Galery</a></li>
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
  <body align="center">
 
  <div class="b" >
       <form align="center" method="GET" action="afficherparcategorie2.php"   >     
       </br>  
    <center  >
     <div class="boo" align="center"  >
       <h3 > Write the name of catgeorie :</h3><br></br>
        <input   type="text" id="nom_cat" name="nom_cat" placeholder="write..">
    </div>
    <br>  <br> 
    <input  class="bo" align="center" type="submit" name="afficher le(s) produit(s)" value="Afficher " >
    </br>
    </center>

 </form>
</div>
<div id ="si"><b>Sort by :</b> 
<button type="submit" class="button"  text-align="right"> 

<i><a href="triNom1.php" ><span class="user"> Name </span></a></i>
</button>
<button type="submit" class="button"> 

<a href="triPrix1.php" ><span class="user"><i> Price</i></span></a>
</button>
	</div> 	
</ul></div>
<br><br>
    
    <div class="row">
      <div class="col-main col-sm-9 col-sm-push-3">
      <?PHP
foreach($listeProduits as $row){
  ?> 
        <article class="col-main">
          <div class="page-title">
            <h1></h1>
          </div>
        
          <div class="toolbar">

          <div class="category-products">
            <ol class="products-list" id="products-list">
          <li class="item first">
            <div class="product-image"> <a href="product_detail.php" title="IPHONE 12 PRO MAX 128 GO"> <img class="small-image" src="products/<?php echo $row['image']; ?>" alt=""> </a> </div>
            <div class="product-shop">
              <h2 class="product-name"><a href="product_detail.php" title="IPHONE 12 PRO MAX 128 GO"><?PHP echo $row['nom']; ?></a></h2>
              <div class="ratings">
                <div class="rating-box">
                  <div style="width:50%" class="rating"></div>
                </div>
                <p class="rating-links"> <a href="#/review/product/list/id/167/category/35/">1 Review(s)</a> <span class="separator">|</span> <a href="#review-form">Add Your Review</a> </p>
              </div>
              <div class="desc std">
                <p><?PHP echo $row['description']; ?><a class="link-learn" title="" href="#">Learn More</a> </p>
              </div>
              <div class="price-box">
               
                <p class="special-price"> <span class="price-label"></span> <span class="price">  <?PHP echo $row['prix']; ?><a> DT </a></span> </p> 
              </div>
              <div class="actions">
                <button><a class="button btn-cart ajx-cart"" href="../C/AddToCart.php?pId=<?PHP echo $row['idprod']; ?>">Ajouter un produit</a></button> 

                <span class="add-to-links"> <a title="Add to Wishlist" class="button link-wishlist" href="#"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="button link-compare" href="#"><span>Add to Compare</span></a> </span> </div>
            </div>
          </li>
    </ol>
          </div>
        </article>  <?PHP
}
?>
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