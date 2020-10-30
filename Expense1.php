<?php
$con=mysqli_connect("localhost","root","","test");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

if($_SERVER["REQUEST_METHOD"] == "POST")
{
$month=$_POST['month'];
$year=(int)$_POST['year'];
$result= mysqli_query($con,"SELECT * FROM expense_details where month='$month' and year=$year");
if($result->num_rows>0)
{
	
	 echo "<table align='center'; margin-top:200px; margin-left:100px;><tr><td>MONTH</td><td>PURPOSE</td><td>AMOUNT</td></tr>";

    	while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["month"]."</td><td>".$row["purpose"]."</td><td>".$row["amount_spent"]."</td></tr>";
	}
	
 echo "</table>";
 
}
else
{
echo "No expense recorded for $month,$year";

}
}
?>

<?php
$profpic="C:\Users\Monisha\Documents\harini\bigimage.jpg";
?>

<html>
   
   <head>
      <title>Expense Report</title>
      
      <style type = "text/css">
         body {
		background-image:url('<?php echo $profpic;?>');
            font-family:Arial, Helvetica, sans-serif;
            font-size:20px;
         }
         label {
            font-weight:bold;
            width:100px;
            font-size:20px;
         }
         .box {
            border:#000000 solid 1px;
         }
	table, th, td {
  border: 1px solid black;
}
	table{
	margin-top:200px //moves your table 10pixels down
    margin-left:100px
}
      </style>
      
   </head>
   
   <body bgcolor = "#FFFFFF">
	
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333;margin-left:100px;margin-top:200px " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Expense Report</b></div>
				
            <div style = "margin:30px">
           
               <form action = "" method = "post">
                  <label>Month:</label><input type = "text" name = "month" class = "box"/><br /><br />
                  <label>Year:</label><input type = "number" name = "year" class = "box" /><br/><br />
                  <input type = "submit" value = " Show Report"/><br />
               </form>
                             
             </div>  
            </div>
	   </div>
   </body>
</html>
