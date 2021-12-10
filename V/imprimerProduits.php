
<!DOCTYPE html>
<link  rel="icon" href="img/logo/jik.png">
  
<html>

<?php
  //require 'connect.php';
  $objectPdo = new PDO('mysql:host=localhost;dbname=projet_web', 'root', '');
  $pdoStat = $objectPdo->prepare('SElECT idprod,nom,nom_cat,description,prix,quantite,disponibilite,image From produits inner join categories on produits.int_cat=categories.int_cat  ORDER BY idprod ASC ');
  $executeIsOK = $pdoStat->execute();
  $listeProduits= $pdoStat->fetchAll();

 ?>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    BuyTech
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet" />
  <link href="../assets/css/main.css" rel="stylesheet" />
  <link rel="stylesheet" href="reclamationchart.css">
</head>
<div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="produits.php" target="_blank">
        <img src="../assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">BuyTech..</span>
      </a>
    </div>

<body onload="window.print()">
<div class="container-fluid py-4">
    <br>
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h4>List of products</h4>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
           <div class="wrap-table100">
           <table class="table align-items-center mb-0">  
<tr> 
           <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2"> Name of product</th>
           <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps">Name Categorie </th>
           <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps">Description</th>
           <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps">Price</th>
           <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps">Amount</th>
           <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps">Availablity</th>
           <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-5">Picture</th>

</tr>
<?PHP
foreach($listeProduits as $listeProduits){
  ?>
  <tr>
  <td><?PHP echo $listeProduits['nom']; ?></td>
  <td><?PHP echo $listeProduits['nom_cat']; ?></td>
  <td><?PHP echo $listeProduits['description']; ?></td>
  <td><?PHP echo $listeProduits['prix']; ?></td>
  <td><?PHP echo $listeProduits['quantite']; ?></td>
  <td><?PHP echo $listeProduits['disponibilite']; ?></td>
  <td class="zoom" width="200"
     height="300"><img width="200"
     height="250"src="products/<?php echo $listeProduits['image']; ?>" /></br> 

  
  <?PHP
}
?>

</div>
          </div>
        </div>
</table>
</div>
          </div>
        </div></div>
          </div>
        </div> <a href="produits.php">Back</a>

<footer class="footer pt-3  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                made with <i class="fa fa-heart"></i> by
                <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">BuyTech</a>
                for a better web.
              </div>
            </div>
            <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">BuyTech</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
                </li>
                <li class="nav-item">
                  <a href="https://creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
      <br>
      <br>
      <br>
    </div>

  </main>
 
    <!--   Core JS Files   -->
    <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
  </script>

  <script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.3"></script>
</body>

</html>
