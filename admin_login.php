<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link rel="stylesheet"
 href="https://cdnjs.cloudflare.com/ajax/libs/min/1.5.0/entireframework.min.css"
 integrity="sha512-6m5ZCRMFZCsnMLvCjwrbdZLmNCE52SS5edmlMGzcpMMRTlJY32SoGAljcQ7l+mrm3Ok3n6AR82lV2fN2jS2HsQ=="
 crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="Login.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
<meta name="Author" content="SSL Project">
<meta name="Guidelines" content="HMS">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head> 
<body>
    <div class="login">
        <h1>Login</h1>
        <form action="admin_login.php" method="post">
            <label for="username">
                <i class="fas fa-user"></i>
            </label>
            <input type="text" name="username_i" placeholder="Username" id="username" required>
            <label for="password">
                <i class="fas fa-lock"></i>
            </label>
            <input type="password" name="pass_2" placeholder="Password" id="password" required>
            <input type="submit" name="Login_x" value="Login">
        </form>
    </div>
</body>
</html>


<?php  

if(isset($_POST['Login_x']))   
{
      $user = $_POST['username_i'];
     $pass = $_POST['pass_2'];

      if($user == "Lokesh_Deepu" && $pass == "LD")  
         {                                       
         // echo "<p style='color: aliceblue;'>sucessfull!</p>";
               header('Location: admin_main.php');
        }
        else
        {
              echo "<p style='color: aliceblue;'>invalid UserName or Password</p>";        
        }       
}
else 
{
    echo "";
}
 ?>