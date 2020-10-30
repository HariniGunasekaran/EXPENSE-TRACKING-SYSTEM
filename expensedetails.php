<?php
$profpic="C:\Users\Monisha\Documents\harini\bigimage.jpg";
?>
<html>
<body>
<style type = "text/css">
body{
     background-image:url('<?php echo $profpic;?>');
     }
</style>
<div align = "center">
         <div style = "width:300px; border: solid 1px #333333;margin-left:100px;margin-top:200px "align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>ExpenseReport</b></div>
				
            <div style = "margin:30px">
               
	     <button onclick="window.location.href='http://localhost:8090/xampp/Project/Expense2.php'">View Yearly Expense</button>   
		<button onclick="window.location.href='http://localhost:8090/xampp/Project/Expense1.php'">View Monthly Expense</button>          
               
         <button onclick="window.location.href='http://localhost:8090/xampp/Project/totalexpense.php'">View total expense</button>

		<button onclick="window.location.href='http://localhost:8090/xampp/Project/welcome.php'">Back</button>    
					
            </div>
				
         </div>
			
      </div>

   </body>

<br>
</body>
</html>
