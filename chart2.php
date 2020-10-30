<?php
$datapoints=array();
//get connection
$connection=mysqli_connect("localhost","root","","test");
$db=mysqli_select_db($connection,"test");
//query to get data from the table
$sql = mysqli_query($connection,"SELECT sum(amount_spent) as total, year 

FROM expense_details group by year");
while($row=mysqli_fetch_array($sql)){
array_push($datapoints,array("x"=>$row['year'],"y"=>$row['total']));
}
?>


<html>
<head><title>Expense chart Yearly wise</title>
<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	
	data: [{
		type: "line",
		dataPoints: <?php echo json_encode($datapoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
</head>
<body>
<h1 align="center">Expense chart Yearly wise</h1>
<div id="chartContainer" style="height: 300px; width: 100%; margin-left:100px; margin-top:300px"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>



</body>
</html>