<?php
   $db = mysqli_connect("localhost", "root", "", "test");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      //add income details
      
      $month = $_POST['month'];
      $year = (int)$_POST['year']; 
      $purpose=$_POST['purpose'];
      $amount=(int)$_POST['amount_spent'];
      $sql="insert into expense_details values('$month',$year,'$purpose',$amount)";
      //$result = mysqli_query($db,$sql);
if (mysqli_query($db, $sql)) {
		//echo "income record created successfully !";
		//header("location: http://localhost:8090/xampp/Project/Page3.php");
      		 echo "<script type='text/javascript'>alert(' Expense details added successfully for $month, $year ')</script>";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($db);
   }     
      
}
?>
<?php
$profpic="C:\Users\Monisha\Documents\harini\a.jpg";
?>
<html>
   
   <head>
      <title>Income</title>
      
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
            border:#666666 solid 1px;
         }
      </style>
      
   </head>
   
   <body bgcolor = "#FFFFFF">
	
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Enter Your Expense Details</b></div>
				
            <div style = "margin:30px">
           
               <form action = "" method = "post">
                  <label>Month:</label><input type = "text" name = "month" class = "box"/><br /><br />
                  <label>Year:</label><input type = "number" name = "year" class = "box" /><br/><br />
                  <label>Purpose:</label><input type = "text" name = "purpose" class = "box" /><br/><br />
                  <label>Amount Spent:</label><input type = "number" name = "amount_spent" class = "box" /><br/><br />
                  <input type = "submit" value = " Add Expense"/><br />
		<button onclick="window.location.href='http://localhost:8090/xampp/Project/welcome.php'">Back</button>  
               </form>
               
               
             </div>  
           		
            </div>
			
      </div>

   </body>
</html>







