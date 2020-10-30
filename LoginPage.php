<?php
   $db = mysqli_connect("localhost", "root", "", "test");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT password FROM user_details WHERE userid = '$myusername'";
      $result = mysqli_query($db,$sql);
      //$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
      if($count>0) {
         //session_register("myusername");
         //$_SESSION['login_user'] = $myusername;
         
         header("location: http://localhost:8090/xampp/Project/pro2.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
<?php
$profpic="C:\Users\Monisha\Documents\harini\photos.jpg";
?>

<html>
   <head>
      <title>Login Page</title>
      
      <style type = "text/css">
         body {
             background-image:url('<?php echo $profpic;?>');
              
            font-family:Arial, Helvetica, sans-serif;
            font-size:30px;
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
   
   <body>
	
      <div align = "center">
         <div style = "background-color:#E9967A; width:500px; border: solid 1px #FFFFFF;margin-left:100px;margin-top:300px"align = "left">
            <div style = "background-color:#E9967A; color:#000000; padding:3px;"><b>Login</b></div>
				
            <div style = "margin:30px">
               
               <form action = "" method = "post">
                  <label>UserName  :</label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit "/><br />
               </form>
               
               					
            </div>
				
         </div>
			
      </div>

   </body>
</html>