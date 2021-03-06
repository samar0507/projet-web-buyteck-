<?php
include_once '../M/client.php';
include_once '../C/clientC.php';

$error = "";

// create client
$client = null;

// create an instance of the controller
$clientC = new clientC();
if (

  isset($_POST["nom"]) &&
  isset($_POST["prenom"]) &&
  isset($_POST["username"]) &&
  isset($_POST["passwordd"]) &&
  isset($_POST["email"]) &&
  isset($_POST["noo"]) 
  // isset($_POST["dateb"])
) {
  if (

    !empty($_POST['nom']) &&
    !empty($_POST["prenom"]) &&
    !empty($_POST["username"]) &&
    !empty($_POST["passwordd"]) &&
    !empty($_POST["email"]) &&
    !empty($_POST["noo"]) 
    // !empty($_POST["dateb"])
  ) {
    $client = new client(

      $_POST['username'],
      $_POST['passwordd'],
      $_POST['nom'],
      $_POST['prenom'],
      $_POST['email'],
      $_POST['noo']
      // $_POST['dateb']
    );
    $clientC->ajouterclient($client);
    require_once "../mailer/mail.php";
    $clientC->activecompte($client,$_POST['username']);
    	header('Location:ccompte.php');

  } else
    $error = "Missing information";
}


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

  <title>BuyTech</title>

  <!-- Mobile Specific -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- CSS Style -->
  <link rel="stylesheet" type="text/css" href="../css/internal.css">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/font-awesome.css" media="all">
  <link rel="stylesheet" type="text/css" href="../css/simple-line-icons.css" media="all">
  <link rel="stylesheet" type="text/css" href="../css/styleformulaire.css" media="all">
  <link rel="stylesheet" type="text/css" href="../css/revslider.css">
  <link rel="stylesheet" type="text/css" href="../css/owl.carousel.css">
  <link rel="stylesheet" type="text/css" href="../css/owl.theme.css">
  <link rel="stylesheet" type="text/css" href="../css/flexslider.css">
  <link rel="stylesheet" type="text/css" href="../css/jquery.mobile-menu.css">


  <!-- Google Fonts -->
  <link href='https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,600,600italic,400italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
</head>

<body style="background-color:#9f2fb666;" class="customer-account-login inner-page">

  <div id="page">

    <!-- Header -->
    <header>
      <div class="header-container">
        <div class="header-top">
          <div class="container">
            <div class="row">
              <!-- Header Language -->
              <div class="col-xs-7 col-sm-6">
                <div class="dropdown block-language-wrapper hidden-xs"> <a role="button" data-toggle="dropdown" data-target="#" class="block-language dropdown-toggle" href="#"> <img src="../images/english.png" alt="language"> English <span class="caret"></span> </a>
                  <ul class="dropdown-menu" role="menu">
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="../images/english.png" alt="language"> English </a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="../images/francais.png" alt="language"> French </a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="../images/german.png" alt="language"> German </a></li>
                  </ul>
                </div>
                <!-- End Header Language -->

                <!-- Header Currency -->
                <div class="dropdown block-currency-wrapper hidden-xs"> <a role="button" data-toggle="dropdown" data-target="#" class="block-currency dropdown-toggle" href="#"> USD <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> $ - Dollar </a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> ?? - Pound </a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> ??? - Euro </a></li>
                  </ul>
                </div>
                <!-- End Header Currency -->

                <div class="welcome-msg hidden-xs"> Default welcome msg! </div>
              </div>
              <div class="col-xs-5 col-sm-6">

                <div class="top-cart-contain pull-right">
                  <!-- Top Cart -->
                  <div class="mini-cart">
                    <div data-toggle="dropdown" data-hover="dropdown" class="basket dropdown-toggle"><a href="#"> My
                        Cart <span class="cart_count">2</span></a></div>
                    <div>
                      <div class="top-cart-content" style="display: none;">
                        <div class="actions">
                          <button class="btn-checkout" title="Checkout" type="button"><span>Checkout</span></button>
                          <a href="#" class="view-cart"><span>View Cart</span></a>
                        </div>
                        <!--block-subtitle-->
                        <ul class="mini-products-list" id="cart-sidebar">
                          <li class="item first">
                            <div class="item-inner"><a class="product-image" title="timi &amp; leslie Sophia Diaper Bag, Lemon Yellow/Shadow White" href="#l"><img alt="timi &amp; leslie Sophia Diaper Bag, Lemon Yellow/Shadow White" src="products-images/p4.jpg"></a>
                              <div class="product-details">
                                <div class="access"><a class="btn-remove1" title="Remove This Item" href="#">Remove</a>
                                  <a class="btn-edit" title="Edit item" href="#"><i class="icon-pencil"></i><span class="hidden">Edit item</span></a>
                                </div>
                                <!--access--> <strong>1</strong> x <span class="price">$179.99</span>
                                <p class="product-name"><a href="#">timi &amp; leslie Sophia Diaper Bag...</a></p>
                              </div>
                            </div>
                          </li>
                          <li class="item last">
                            <div class="item-inner"><a class="product-image" title="JP Lizzy Satchel Designer Diaper Bag - Slate Citron" href="#"><img alt="JP Lizzy Satchel Designer Diaper Bag - Slate Citron" src="products-images/p3.jpg"></a>
                              <div class="product-details">
                                <div class="access"><a class="btn-remove1" title="Remove This Item" href="#">Remove</a>
                                  <a class="btn-edit" title="Edit item" href="#"><i class="icon-pencil"></i><span class="hidden">Edit item</span></a>
                                </div>
                                <!--access--> <strong>1</strong> x <span class="price">$80.00</span>
                                <p class="product-name"><a href="#">JP Lizzy Satchel Designer Diaper Ba...</a></p>
                              </div>
                            </div>
                          </li>
                        </ul>
                        <!--actions-->
                      </div>
                    </div>
                  </div>
                  <!-- Top Cart -->
                  <div id="ajaxconfig_info" style="display:none"><a href="#/"></a>
                    <input value="" type="hidden">
                    <input style="background-color: #9f2fb624;" id="enable_module" value="1" type="hidden">
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
                            <button aria-label="Close" data-dismiss="modal" class="close" type="button"><img src="../images/interstitial-close.png" alt="close"> </button>
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

                    <div class="myaccount"><a title="My Account" href="login.php"><span class="hidden-xs">My
                          Account</span></a></div>
                    <div class="check"><a title="Checkout" href="checkout.html"><span class="hidden-xs">Checkout</span></a></div>
                    <div class="demo"><a title="Blog" href="blog.html"><span class="hidden-xs">Blog</span></a></div>
                    <!-- Header Company -->

                    <!-- End Header Company -->
                    <div class="login"><a href="login.php"><span class="hidden-xs">Log In</span></a></div>
                    

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
        <div class="logo"><a title="BuyTech" href="index.php"><img alt="Datson" src="images/logo.png"></a></div>
        <!-- End Header Logo -->

        
      </div>
    </nav>
    <!-- end nav -->

    <!-- Main Container -->
    <br> <br> <br> <br>
    <script src="js/formu.js"> </script>
    <div class="formu">
      <form action="" onsubmit="verif()" method="post" name='f'>
      
        <p>
        <h1> Create An Account </h1>
        
        </p>
        <br>
        <fieldset>
          <table>

            <tr>
              <td> First Name :  </td>
              <td > <input style="background-color: #9f2fb624;
              border-color:#9f2fb666;" type="text" name="nom"> </td>
            </tr>
            


            <tr>
              <td> Last Name : </td>
              <td> <input style="background-color: #9f2fb624;
              border-color:#9f2fb666;" type="text" name="prenom" value="">
            </tr>
            </td>
            <tr>
            <tr>
              <td> User Name : </td>
              <td> <input style="background-color: #9f2fb624;
              border-color:#9f2fb666;" type="text" name="username" value="">
            </tr>
            </td>
            <tr>
              <td> E-MAIL : </td>
              <td> <input style="background-color: #9f2fb624; 
              border-color:#9f2fb666;" type="text" name="email" value=""> </td>
            </tr>


            <tr>
              <td> Password : </td>
              <td> <input style="background-color: #9f2fb624;
              border-color:#9f2fb666;" type="password" name="passwordd"></td>
            </tr>


            <tr>
              <td>Password Confirmation : </td>
              <td> <input style="background-color: #9f2fb624;
              border-color:#9f2fb666;" type="password" name="mdpp"> </td>
            </tr>
            <tr>
              <td> Phone Number </td>
              <td> <input style="background-color: #9f2fb624;
              border-color:#9f2fb666;" type="text" name="noo" value=''><span class="validity"></span> </td>
            </tr>

            <tr>
              <td> Date of birth </td>
              <td> <input style="background-color: #9f2fb624;
              border-color:#9f2fb666;" type="date" name="dateb" min='01_10_2021'> </td>
            </tr>
            <tr>
              <td>gender </td>

            </tr>
            <div class="radioo">
              <tr>
                <td> Mr <input style="background-color: #9f2fb624;" type="radio" name="ok"> </td>
                <td> Mme <input style="background-color: #9f2fb624;" type="radio" name="ok"> </td>
              </tr>
            </div>





          </table>

        </fieldset>
        <br>

        </fieldset>

        <div class="buttons-set">
        
        <button id="send2" name="" type="submit" class="button login"> <span>Submit</span></button>
          
        <!-- <button id="send2" name="" type="submit" class="button login"><span>Submit</span></button> -->
          <button id="send2" name=""  class="button login" href="login.php"><span>Cancel</span></button>

        </div>

      </form>
    </div>
    <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
    <!-- Main Container End -->

    <br> <br> <br> <br> <br> <br> <br> <br> <br>

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
          <address>
            <i class="fa fa-map-marker"></i>ThemesGround, 789 Main rd, Anytown, CA 12345 USA <i class="fa fa-mobile"></i><span> +(888) 123-4567</span> <i class="fa fa-envelope"></i><span>
              superb@themesground.com</span>
          </address>
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
          <li> <a href="shopping_cart.php">Shopping Cart</a> </li>
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
          <li> <a href="#"><span>Appliances</span></a>
            <ul>
              <li> <a href="#"><span>Vaccum Cleaners</span></a> </li>
              <li> <a href="#"><span>Indoor Lighting</span></a> </li>
              <li> <a href="#"><span>Kitchen Tools</span></a> </li>
              <li> <a href="#"><span>Water Purifier</span></a> </li>
            </ul>
          </li>
        </ul>
      </li>
      <li><a href="#">Furniture</a> </li>
      <li><a href="#">Kids</a> </li>
      <li><a href="contact-us.html">Contact Us</a> </li>
    </ul>
    <div class="dropdown block-language-wrapper">
      <ul>
        <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="../images/english.png" alt="language">
            English </a></li>
        <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="../images/francais.png" alt="language">
            French </a></li>
        <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="../images/german.png" alt="language">
            German </a></li>
      </ul>
    </div>
    <div class="dropdown block-currency-wrapper">
      <ul>
        <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> $ - Dollar </a></li>
        <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> ?? - Pound </a></li>
        <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> ??? - Euro </a></li>
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