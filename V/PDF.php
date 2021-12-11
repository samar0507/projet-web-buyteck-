<<?php 
require_once  '../vendor/autoload.php';


$num_commande=$_GET["num_commande"];
$date_commande=$_GET["date_commande"];
$status=$_GET["status"];
$prixTotal=$_GET["prixTotal"];
$type_Paiment=$_GET["type_Paiment"];
$type_Livraison=$_GET["type_Livraison"];




$mpdf = new \Mpdf\Mpdf();
$data='<table>
<thead>
  <tr>
    <th>Your Details</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td>Command number:  ' . $num_commande. ' </td>
  </tr>
 
  <tr>
    <td>Status: ' . $status. '</td>
  </tr>
  <tr>
    <td>Total price: ' . $prixTotal. ' TND </td>
  </tr>
  <tr>
    <td>Type of payment: ' . $type_Paiment. '</td>
  </tr>
  <tr>
    <td>Delivery type: ' . $type_Livraison. '</td>
  </tr>
</tbody>
</table>';
/*$data ='';
$data .= '<h1>YOUR DETAILS </h1>'; 
$data .= '<strong>num commande : </strong>' . $num_commande. '<br />';
$data .= '<strong>date commande : </strong>' . $date_commande. '<br />';
$data .= '<strong>status: </strong>' . $status. '<br />';
$data .= '<strong>Prix Total : </strong>' . $prixTotal. '<br />';
$data .= '<strong>Type de paiment : </strong>' . $type_Paiment. '<br />';
$data .= '<strong>Type de livraison : </strong>' . $type_Livraison. '<br />';*/


$mpdf->WriteHTML($data);




$mpdf->Output('myfile.pdf','D');


 ?> 