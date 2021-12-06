<!doctype html>
<html class="no-js" lang="en">
<?PHP
include_once "../C/CategorieC.php";


$CategoriesCore=new CategoriesCore();
$categories=$CategoriesCore->triNom();
//var_dump($listeEmployes->fetchAll());
?>


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Sort</title>
         <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>								                    
<!DOCTYPE html>
<html>


<body>
<div class="limiter">
        <div class="container-table100">
        <h1 align="center" >Sort categories by name</h1>
        <div class="wrap-table100">
        
<table border="4" align="center" id="box1">
<tr> 
<td bgcolor="white" align="center">Id categories </td>
<td bgcolor="white" align="center">Name of Categorie</td>


</tr>
<?PHP
foreach($categories as $row){
	?>
	<tr>
	<td bgcolor="white" align="center"><?PHP echo $row['int_cat']; ?></td>
	<td bgcolor="white" align="center"><?PHP echo $row['nom_cat']; ?></td>
  </tr>  </div>
	<?PHP
}
?>
</table>        
<br>
<br>
<div align="center"><button onclick="location.href='//localhost/projet_web/web/back%20office/pages/categories.html'">Back to Categories Table </button></div>

</div>
        </div> </div>
     
    </body>
</html>