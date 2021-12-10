<!-- stat -->
<?php 
 include_once "../C/ProduitC.php";
 include_once "../M/Produit.php";
 include_once "../config.php";
 $ProduitsCore=new ProduitsCore();
 $listeProduits=$ProduitsCore->calcul();
?>
<!DOCTYPE html>
<html>
<body>
	<div align="center">
  <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
            <br>
            <h4>Statistics</h4> 
              <div class="table-responsive p-0">
           <div class="wrap-table100">
    <table class="table align-items-center mb-0"> 
		<th  class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps">Prices</th>
		<th  class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps">Total Amount</th>
    <?php 
  
  foreach($listeProduits as $row){
    	 print"<tr>";
	     echo"<td>".$row['total']."</td>"; 
	   	 echo"<td>".$row['quantite']."</td>"; 

  $dataPoints = array(
	array("label"=> "Price", "y"=>$row['total']),
	array("label"=> "Amount", "y"=> $row['quantite']),);
}?> 
<br>
</table>
</div>
<br><br>
<div id="chartContainer" style="height: 300px; width: 100%;"></div>
<br></div></div></div></div></div>
<!-- end stat -->



<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <script>
window.onload = function () {
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	exportEnabled: true,
	data: [{
		type: "pie",
		showInLegend: "true",
		legendText: "{label}",
		indexLabelFontSize: 16,
		indexLabel: "{label} - #percent%",
		yValueFormatString: "฿#,##0",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>