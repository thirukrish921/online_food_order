<?php 
session_start();

include("../connection/connect.php");

   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT * FROM admin WHERE username='$myusername' && password='".md5($mypassword)."'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
      // echo '<script type="text/javascript">alert("'.$count.'");</script>';
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
        // session_register("adm_id");
         $_SESSION['adm_id'] = $myusername;
     //   echo '<script type="text/javascript">alert("'.$_SESSION['adm_id'].'");</script>';
         echo '<script type="text/javascript">window.location.href = "http://spicyfoodonline.000webhostapp.com/admin/dashboard.php";</script>';
      }else {
        echo '<script>alert("incorrect");</script>';
      }
   }
?>
<html>
   
   <head>
      <title>Login Page</title>
      
      <style type = "text/css">
         body {
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
      </style>
      
   </head>
   
   <body bgcolor = "#FFFFFF">
	
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
				
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