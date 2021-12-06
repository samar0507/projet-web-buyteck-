<?php 
 include_once "../C/ProduitC.php";
 include_once "../M/Produit.php";
 include_once "../config.php";
 $ProduitsCore=new ProduitsCore();
 $listeProduits=$ProduitsCore->calcul();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf8">
	<link rel="stylesheet" type="text/css" href="cssfile.css">
</head>
<body>
	<div align="center">
	<?php 
	    print'<table border="1" class="tab">
		<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps">Total Products</th>
		<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps">Prices</th>
		<th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps">Total Amount</th>

';
  foreach($listeProduits as $row){
    	 print"<tr>";
	     echo"<td>".$row['s']."</td>"; 
	    echo"<td>".$row['total']."</td>"; 
		echo"<td>".$row['quantite']."</td>"; 
  }?>
</div>
</body>
</html>
<?php
 
$dataPoints = array(
	array("label"=> "Id Product", "y"=> $row['s']),
	array("label"=> "Price", "y"=>$row['total']),
	array("label"=> "Amount", "y"=> $row['quantite']),

);
	
?>
<!DOCTYPE HTML>
<html>
<head>  
<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	exportEnabled: true,
	title:{
		text: "Total Statistics"
	},
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
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>      