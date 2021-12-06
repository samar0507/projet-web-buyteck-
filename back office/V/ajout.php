<?php


include_once "../C/ProduitC.php";
include_once "../M/Produit.php";

$error = "";
$produits = NULL;
$produitssCore = new ProduitsCore();
if(isset($_POST["submit"])){
    $produits = new produits(
      $_POST['nom'],
      $_POST['int_cat'],
      $_POST['description'],
      $_POST['prix'],
      $_POST['quantite'],
      $_POST['disponibilite']
      
      
    );
    $ProduitsCore->ajouterProduits($produits);
    header('Location:produits.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <title>Add New Product</title>
    <!-- plugins:css -->
   
   <script src="https://cdn.tiny.cloud/1/4avatqxpxn93pmv0nn2v5rsgo6xv2ysad25jn86kv7sulge6/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>
    tinymce.init({
      selector: '#myEditor',
      branding: false,
      plugins: 'link image table',
      contextmenu: 'link image table',
      draggable_modal: true,
    });
  </script>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_navbar.html -->
     
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
     
        <!-- partial -->
        <div class="main-panel">
         
              
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">add product</h4>
                    <p class="card-description"> Basic form elements </p>
                    <form class="forms-sample" method="POST" action="produits.php">
                      <div class="form-group">
                        <label for="exampleInputName1">nom</label>
                        <input type="text" class="form-control" name="nom" id="exampleInputName1" placeholder="nom">
                      </div>
                      <td>Categorie</td>
               <td><select class="controle" name="int_cat">
                <?PHP
              foreach($listeCategories as $row){
                   ?>
                   <option value="<?PHP echo $row['int_cat']; ?>"><?PHP echo $row['nom_cat'] ?>
                   </option>
                   <?PHP } ?>
                    </select> 
               </td> </tr> 
                      <div class="form-group">
                        <label for="exampleInputdescription">description</label>
                        <input type="number" class="form-control"  name="description" id="exampleInputdescription" placeholder="description">
                      </div>
                     
                      <div class="form-group">
                        <label for="exampleInputCity1">prix</label>
                        <input type="text" class="form-control" name="prix" id="exampleInputCity1" placeholder="Image URL">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputCity1">quantite</label>
                        <input type="text" class="form-control" name="quantite" id="exampleInputCity1" placeholder="Image URL">
                      </div>   
                      <div class="form-group">
                        <label for="exampleInputCity1">disponibilite</label>
                        <input type="text" class="form-control" name="disponibilite" id="exampleInputCity1" placeholder="Image URL">
                      </div>
                     
                   


                    
                     <input type="submit" name="submit" >
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
             
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
         
  </body>
</html>