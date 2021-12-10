<?php
include "Header.php";
?>
<body class="inner-page">
<div id="page"> 
<?php
include "Navbar.php";

?>
<html lang="zxx">
<?php

 

?>
<?PHP
include_once "../C/ProduitC.php";


$produitsC=new ProduitsCore();
$listeProduits=$produitsC->listeProduits();
?><style>
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
          <li><a href="http://localhost/projet_web/web/back%20office/store/afficherProduits2.php">Galery</a></li>
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
<br> </br></br></br>
</ul>
 
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
<?PHP
foreach($listeProduits as $row){
  ?> <div  align="center">		
		
<div id="box1" align="center">
     <hr  align="center">
               <p  align="center">
               <h4  align="center">
               <dl><dd><b class="f"  >Name of product :</b> <i><?PHP echo $row['nom']; ?> </i></dd> 
                <dd><b class="f"> Name Categorie :</b><i> <?PHP echo $row['nom_cat']; ?></i></dd>
                 <dd><b class="f">Description :</b><i> <?PHP echo $row['description']; ?></i></dd>
                  <dd><b class="f">Price :</b><i> <?PHP echo $row['prix']; ?></i></dd>
                  <dd><b class="f">Amount :</b><i> <?PHP echo $row['quantite']; ?></i></dd>
                  <dd><b class="f">Availablity :</b><i> <?PHP echo $row['disponibilite']; ?></i></dd>
                  <br>
                  <dd><b class="f">Picture: </b><i> <td align="center" class="zoom" ><img width="200" height="300"src="products/<?php echo $row['image']; ?>" /></br> 
                </dl>
      </h4>
                </p>
</div>
 <br></br> 
  <?PHP
}
?>
        </ul>
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
							</div>
						</div>
</body>
</html>
 </section>    <!-- Footer -->  <footer>
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
            <li><a href="reclamation.php">reclamatin</a> </li>
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