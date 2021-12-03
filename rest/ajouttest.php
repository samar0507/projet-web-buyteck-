<?php
 include_once 'reponse.php';
 include_once 'reponseC.php';

 $error1 = "";

 // create adherent
 $reponseC= null;

 // create an instance of the controller
 $reponseC = new reponseC();
 if (		
     isset($_POST["content"]) 
 ) {
     if (
         !empty($_POST["content"]) 
     ) {
         $reponse = new reponse(
             $_POST['id_reclamation'],
             $_POST['content']
         );
         $reponseC->ajouterreponse($reponse);
     }
     else
         $error1 = "Missing information";
 }


?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
<button><a href="ajouttest.php">retour</a></button>
        <hr>
        
        <div id="error1">
            <?php echo $error1; ?>
        </div>
   <form action="" method="POST"> 
<table border='1' align='center'>
            <tr>
                
            
            <td><input type='hidden' name='id_reclamation' id='id_reclamation' value="4"></td>
            
            <label for='adresse'>content:
            </label>
            </td>

            <td><input type='text' name='content' id='content' maxlength='20'></td>
            </tr>
            <br>
           
            
            <br>
            <tr>
                <input type="submit" value="Envoyer">
            </tr>
            <br>
            <tr>
            <input type="reset" value="Effacer">
            </tr>
            <br>
            </table>
</body>
</html>
