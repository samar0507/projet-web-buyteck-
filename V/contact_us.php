<?php
session_start();
    include_once '../M/reclamationp.php';
    include_once '../C/reclamationC.php';
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    
    require_once  'PHPMailer-master\src\Exception.php';
    require_once 'PHPMailer-master\src\PHPMailer.php';
    require_once 'PHPMailer-master\src\SMTP.php';
    
    // passing true in constructor enables exceptions in PHPMailer
    $mail = new PHPMailer(true);
    $error = "";

    $reclamationC= null;

    $reclamationC = new reclamationC();
    if (		
        isset($_POST["comment"]) &&
        isset($_POST["typer"])
    ) {
        if (
            !empty($_POST["comment"]) &&  
            !empty($_POST["typer"])
        ) {
            $reclamation = new reclamation(
				$_POST['id'],
                $_POST['comment'], 
				$_POST['date_rec'],
                $_POST['typer'],
                $_POST['etat']
            );
            $reclamationC->ajouterreclamation($reclamation);
            try {
              // Server settings
              $mail->SMTPDebug = SMTP::DEBUG_SERVER; // for detailed debug output
              $mail->isSMTP();
              $mail->Host = 'smtp.gmail.com';
              $mail->SMTPAuth = true;
              $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
              $mail->Port = 587;
          
              $mail->Username = 'samar05.hamdi@gmail.com'; // YOUR gmail email
              $mail->Password = 'amoursucre05072001'; // YOUR gmail password
          
              // Sender and recipient settings
              $mail->setFrom('samar.hamdi@esprit.com', 'Client');
              $mail->addAddress($_SESSION["email"], 'TEST');
              $mail->addReplyTo('samar05.hamdi@gmail.com', 'Sender Name'); // to set the reply to
          
              // Setting the email content
              $mail->IsHTML(true);
              $mail->Subject = "NEW reclamation";
              $mail->Body = 'You have a new reclamation please consult :C:\xampp\htdocs\PW\back office\pages\V\reclamation.php';
              $mail->AltBody = 'test';
          
              $mail->send();
              echo "Email message sent.";
          } catch (Exception $e) {
              echo "Error in sending email. Mailer Error: {$mail->ErrorInfo}";
          }
          
header('Location:afficherlistereclamationfront.php');
       
         
        }
        else
            $error = "Missing information";

    }

    $date = date('y-m-d');
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
      <div class="row">
        <section class="col-main col-sm-9">
          <div class="page-title">
            <h1>Reclamation</h1>
          </div>
          <div id="error">
            <?php echo $error; ?>
        </div>
          <div class="static-contain">
            <fieldset class="group-select">
              <ul>
                <li id="billing-new-address-form">
                  <fieldset>
                  <form action="" method="POST" >
            <tr>
            <td><input type='hidden' name='id' id='id' value="<?php echo $_SESSION["id"]  ?>"></td>
            <td><input type='hidden' name='date_rec' id='date_rec' value='<?php echo $date?>'></td>
            <td><input type='hidden' name='etat' id='etat' value=' waiting'></td>
        
            <td>
            <label for="rec">Type : 
                    </label>
                    <select name="typer" id="typer" >
                        <option value="shipping">shipping</option>
                        <option value="product">product</option>
                        <option value="rating">rating</option>
                    </select><br>
            </tr>
            <br>
           
            <tr>
            <td>
            <label for='comment'>comment :
            </label>
            </td>
            <td><textarea name='comment' id='comment' requiered ></textarea></td>
        </tr>
            <br>
            <tr>
           </fieldset>
                </li>
                <span class="require"><em class="required">* </em>Required Fields</span>
                <div class="buttons-set">
                  <button type="submit" title="Submit" class="button submit"> <span> Submit </span> </button>
                  <button type="Reset" title="reset" class="button reset"> <span> Reset </span> </button>
               
                </div>
            </li>
              </ul>
            </form> 
           
            </fieldset>
          </div>
        </section>
        <aside class="col-right sidebar col-sm-3">
          <div class="block block-company">
            <div class="block-title">Company </div>
            <div class="block-content">
              <ol id="recently-viewed-items">
                <li class="item  odd"><a href="#">Terms of Service</a></li>
                <li class="item even"><a href="#">Search Terms</a></li>
                <li class="item last"><strong>reclamation</strong></li>
              </ol>
            </div>
          </div>
        </aside>
      </div>
    </div>
  </section>
  <!-- Main Container End --> 
  
          
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
        <li><a href="blog.html">Blog</a>
          <ul>
            <li><a href="blog-detail.html">Blog Detail</a> </li>
          </ul>
        </li>
        <li><a href="contact_us.html">Contact us</a> </li>
      </ul>
    </li>
    <li class="mega-menu"><a href="grid.html" class="level-top"><span>Categories</span></a>
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