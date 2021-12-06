
<?php
 include "../C/CategorieC.php";
 include "../M/Categorie.php";
 $CategoriesCore=new CategoriesCore();
 $listecategories=$CategoriesCore->affichercategories();

?>
<!doctype html>
<html  lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show </title>
      
</head>
  <body>       
    <div class="limiter">
       <div class="container-table100">
       <center><h1>List of categories</h1></center>
       <form action="" method="POST">
       <div class="wrap-table100">
         <table border='3' aligne ='center'>       
           <tr>
               <th>Id categorie</th>
               <th>Name of categorie </th>
               <th>Modify </th>
            </tr>
           <?php       
              foreach($listecategories as $row){
               ?>
            <tr>
            <td><?php echo $row['int_cat'];?></td>
           <td><?php echo $row['nom_cat'];?> </td>

	</form>
    <td align="center"><a href="modifierCategorie.php?int_cat=
    <?PHP echo $row['int_cat']; ?>">
  	Modify</a></td>
   	</tr> 
   </div>
           <?php
             } 
            ?>
         </table>
         </div>
            </form>          
      </div>    
      <div align="center"><button onclick="location.href='//localhost/projet_web/web/back%20office/pages/categories.html'">Back to Categories Table </button></div>
      </div>  
  </body>
  
</html>