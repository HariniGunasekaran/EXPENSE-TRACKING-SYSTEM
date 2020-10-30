<?php
   $db = mysqli_connect("localhost", "root", "", "test");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      //add income details
      
      $month = $_POST['month'];
      $year = (int)$_POST['year']; 
      $income=(int)$_POST['income'];
      $sql="insert into income_details values('$month',$year,$income)";
      //$result = mysqli_query($db,$sql);
if (mysqli_query($db, $sql)) {
		//echo "income record created successfully !";
		//header("location: http://localhost:8090/xampp/Project/Page3.php");
      		 echo "<script type='text/javascript'>alert(' Income details added successfully for $month, $year ')</script>";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($db);
   }     
      
}
?>
<?php
$profpic="C:\Users\Monisha\Documents\harini\LAST.jpg";
?>
<html>   
   <head>
      <title>Income</title>      
      <style type = "text/css">
         body {
                background-image:url('<?php echo $profpic;?>');
              	background-size:300px 100px;
            
         }
         label {
            font-weight:bold;
            width:100px;
            font-size:30px;
         }
         .box {
            border:#666666 solid 1px;
         }
      </style>
      
   </head>
   
   <body bgcolor = "#000000">
	
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Enter Your Income Details</b></div>
				
            <div style = "margin:30px">
           
               <form action = "" method = "post">
                  <label>Month:</label><input type = "text" name = "month" class = "box"/><br /><br />
                  <label>Year:</label><input type = "number" name = "year" class = "box" /><br/><br />
                  <label>Income:</label><input type = "number" name = "income" class = "box" /><br/><br />
                  <input type = "submit" value = " Add income"/><br />
		<button onclick="window.location.href='http://localhost:8090/xampp/Project/welcome.php'">Back</button>  
               </form>
               
               
</div>
             </div>  
           		
            </div>
			
      </div>

   </body>
</html>






