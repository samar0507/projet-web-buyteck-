<!-- Navbar -->
<?php
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
<nav>
    <div class="container">
        <!-- Header Logo -->
        <div class="logo"><a title="Datson" href="index.php"><img alt="Datson" src="images/logo.png"></a></div>
        <!-- End Header Logo -->

        <div class="mm-toggle-wrap">
            <div class="mm-toggle"><i class="fa fa-reorder"></i><span class="mm-label">Menu</span> </div>
        </div>

        <ul class="nav hidden-xs menu-item menu-item-left">
            <li class="level0 parent drop-menu active"><a href="index.php"><span>Home</span></a>

            </li>
            <li class="level0 parent drop-menu"><a href="#"><span>Pages</span> </a>
                <ul class="level1" style="display: none;">
                    <li class="level1 first"><a href="grid.php#"><span>Grid</span></a></li>
                    <li class="level1 nav-10-2"> <a href="list.php"> <span>List</span> </a> </li>
                    <li class="level1 nav-10-3"> <a href="product_detail.php"> <span>Product Detail</span> </a> </li>
                    <li class="level1 nav-10-4"> <a href="shopping_cart.php"> <span>Shopping Cart</span> </a> </li>
                    <li class="level1 first parent"><a href="checkout.php"><span>Checkout</span></a>
                        <!--sub sub category-->
                        <ul class="level2 right-sub" style="top: 0px; left: 165px; display: none;">
                            <li class="level2 nav-2-1-1 first"><a href="checkout_method.php"><span>Checkout Method</span></a></li>
                            <li class="level2 nav-2-1-5 last"><a href="checkout_billing_info.php"><span>Checkout Billing Info</span></a></li>
                        </ul>
                        <!--sub sub category-->
                    </li>
                    <li class="level1 nav-10-4"> <a href="list.php"> <span>Wishlist</span> </a> </li>
                        <!--sub sub category-->
                        <ul class="level2 right-sub" style="top: 0px; left: 165px; display: none;">
                            <li class="level2 nav-2-1-1 first"><a href="account_information.php"><span>Account Information</span></a></li>
                            <li class="level2 nav-2-1-5 last"><a href="address_book.php"><span>Address Book</span></a></li>
                            <li class="level2 nav-2-1-1 first"><a href="contact_information.php"><span>Contact Information</span></a></li>
                        </ul>
                        <!--sub sub category-->
                    </li>
                    <li class="level1"> <a href="about_us.php"> <span>About us</span> </a> </li>
                    <li class="level1"> <a href="faq.php"> <span>FAQ</span> </a> </li>
                    <li class="level1"> <a href="login.php"> <span>Login</span> </a> </li>
                    <li class="level1"> <a href="forgot_password.php"> <span>Forgot Password</span> </a> </li>
                    <li class="level1"> <a href="quick_view.php"> <span>Quick view </span> </a> </li>
                    <li class="level1 first parent"><a href="blog.php"><span>Blog</span></a>
                        <ul class="level2 right-sub" style="top: 0px; left: 165px; display: none;">
                            <li class="level2 nav-2-1-1 first"><a href="blog_detail.php"><span>Blog Detail</span></a></li>
                        </ul>
                    </li>
                    <li class="level1"><a href="contact_us.php"><span>Contact us</span></a> </li>
                    <li class="level1"><a href="404error.php"><span>404 Error Page</span></a> </li>
                </ul>
            </li>

        </ul>
        <ul class="nav hidden-xs menu-item menu-item-right">
            <li class="mega-menu"><a href="grid.php#" class="level-top"><span>Categories</span></a>
                <div style="left: 0px; display: none;" class="level0-wrapper dropdown-6col">
                    <div class="container">
                        <div class="level0-wrapper2">
                            <div class="nav-block nav-block-center">
                                <ul class="level0">
                           <?php foreach($listecategories as $row){ ?> 
                              <?PHP foreach($listeProduits as $row){ ?> 
                                    <li class="level1 nav-6-1 parent item"><a href="#"><span><?php echo $row['nom_cat'];?> </span></a>
                                    <ul class="level1">
                                            <li class="level2 nav-6-1-1"><a href="#"><span><?PHP echo $row['nom']; ?></span></a></li>
                                        </ul>
                                        <?PHP } ?>
                                    <?php }?>
                                </ul>
                            </div>
                        </div>
                        <!--level0-wrapper2-->

                    </div>
                </div>
            </li>
            <li class="mega-menu"><a class="level-top" href="afficherlistereclamationfront.php"><span>Reclamation </span></a></li>

        </ul>



    </div>
</nav>
<!-- end nav -->
<?php
?>