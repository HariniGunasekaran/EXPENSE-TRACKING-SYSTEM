<?php
$con=mysqli_connect("localhost","root","","test");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

if($_SERVER["REQUEST_METHOD"] == "POST")
{
$year=(int)$_POST['year'];
$result= mysqli_query($con,"SELECT * FROM expense_details where year=$year");
if($result->num_rows>0)
{
	 echo "<table align='left'; margin-top:100px; margin-left:100px;><tr><td>MONTH</td><td>PURPOSE</td><td>AMOUNT</td></tr>";

    	while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["month"]."</td><td>".$row["purpose"]."</td><td>".$row["amount_spent"]."</td></tr>";
    	}
 echo "</table>";
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
            font-size:14px;
         }
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         .box {
            border:#666666 solid 1px;
         }
	table, th, td {
  border: 1px solid black;
}
	table{
	margin-top:150px //moves your table 10pixels down
    margin-left:150px
}
      </style>
      
   </head>
   
   <body bgcolor = "#FFFFFF">
	
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Expense Report</b></div>
				
            <div style = "margin:30px">
           
               <form action = "" method = "post">
                  
           <label>Year:</label><input type = "number" name = "year" class = "box" /><br/><br />
                  <input type = "submit" value = " Show Report"/><br />
               </form>
                             
             </div>  
            </div>
	   </div>
   </body>
</html>
