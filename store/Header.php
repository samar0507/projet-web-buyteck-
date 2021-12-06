<?php
?>
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
<link rel="stylesheet" type="text/css" href="css/internal.css?<?php echo time(); ?>">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css?<?php echo time(); ?>">
<link rel="stylesheet" type="text/css" href="css/font-awesome.css?<?php echo time(); ?>" media="all">
<link rel="stylesheet" type="text/css" href="css/simple-line-icons.css?<?php echo time(); ?>" media="all">
<link rel="stylesheet" type="text/css" href="css/style.css?<?php echo time(); ?>" media="all">
<link rel="stylesheet" type="text/css" href="css/revslider.css?<?php echo time(); ?>" >
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css?<?php echo time(); ?>">
<link rel="stylesheet" type="text/css" href="css/owl.theme.css?<?php echo time(); ?>">
<link rel="stylesheet" type="text/css" href="css/flexslider.css?<?php echo time(); ?>">
<link rel="stylesheet" type="text/css" href="css/jquery.mobile-menu.css?<?php echo time(); ?>">

<!-- Google Fonts -->
<link href='https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,600,600italic,400italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
</head>
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
                        <div class="dropdown block-currency-wrapper hidden-xs"> <a role="button" data-toggle="dropdown" data-target="#" class="block-currency dropdown-toggle" href="#"> TND <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> $ - Dollar </a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> £ - Pound </a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> € - Euro </a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> TND - Dinar Tunisian </a></li>
                            </ul>
                        </div>
                        <!-- End Header Currency -->


                    </div>
                    <div class="col-xs-5 col-sm-6">

                        <div class="top-cart-contain pull-right">
                            <!-- Top Cart -->
                            <div class="mini-cart">
                                <div data-toggle="dropdown" data-hover="dropdown" class="basket dropdown-toggle"><a href="# " >  My Cart <span class="cart_count">2</span></a></div>
                                <div>
                                    <div class="top-cart-content" style="display: none;">
                                        <div class="actions">
                                            <button class="btn-checkout" title="Checkout" type="button" ><span>Checkout</span></button>
                                            <a href="#" class="view-cart"  ><span>View Cart</span></a> </div>
                                        <!--block-subtitle-->
                                        <ul class="mini-products-list" id="cart-sidebar">
                                            <li class="item first">
                                                <div class="item-inner"><a class="product-image" title="timi &amp; leslie Sophia Diaper Bag, Lemon Yellow/Shadow White" href="#l"><img alt="timi &amp; leslie Sophia Diaper Bag, Lemon Yellow/Shadow White" src="products-images/p4.jpg"></a>
                                                    <div class="product-details">
                                                        <div class="access"><a class="btn-remove1" title="Remove This Item" href="#">Remove</a> <a class="btn-edit" title="Edit item" href="#"><i class="icon-pencil"></i><span class="hidden">Edit item</span></a> </div>
                                                        <!--access--> <strong>1</strong> x <span class="price">$179.99</span>
                                                        <p class="product-name"><a href="#">timi &amp; leslie Sophia Diaper Bag...</a></p>
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
                                <div class="check"><a title="Checkout" href="checkout.html"><span class="hidden-xs">Checkout</span></a></div>
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