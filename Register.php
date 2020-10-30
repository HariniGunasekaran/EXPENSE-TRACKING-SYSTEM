<?php
   $db = mysqli_connect("localhost", "root", "", "test");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = $sql="insert into register values('$myusername','$mypassword')";
     
      if (mysqli_query($db, $sql)) {
		//echo "income record created successfully !";
		
      		 echo "<script type='text/javascript'>alert(' User $myusername registered')</script>";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($db);
   }     
   }
?>
<?php
$profpic="C:\Users\Monisha\Documents\harini\bigimage.jpg";
?>

<html>
   <head>
      <title>Register Page</title>
      
      <style type = "text/css">
         body {
             background-image:url('<?php echo $profpic;?>');
              
            font-family:Arial, Helvetica, sans-serif;
            font-size:20px;
         }
         label {
            font-weight:bold;
            width:100px;
            font-size:25px;
         }
         .box {
            border:#E9967A solid 1px;
         }
      </style>
      
   </head>
   
   <body>
	
      <div align = "center">
         <div style = "background-color:#c0c0c0; width:300px;margin-left:100px;margin-top:200px; border: solid 1px #FF0000; "align = "center">
            <div style="background-color:#CD5C5C;align="center"color:#000000; padding:3px;"><b>REGISTER</b></div>
				
            <div style = "margin:30px">
               
               <form action = "" method = "post">
                  <label>UserName  :</label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Register "/><br />
		  <button onclick="window.location.href='http://localhost:8090/xampp/Project/LoginPage.php'">Login</button>
               </form>
               
               
					
            </div>
				
         </div>
			
      </div>

   </body>
</html>