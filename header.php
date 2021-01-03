<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>  
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Window Builder</title> 
  <link rel="stylesheet" href="css/style.css" id="stylesheet" />

  <script type="text/javascript">
    function changeStyle(url) 
    {
      document.getElementById('stylesheet').href = url;
    }
  </script>

</head>

<body>  

  <header>        

    <nav>  

      <div class="header-logo">                        
        <img src = "Images/logo2.png" class="img-center" width="277" height="99" alt="Airtite Windows Logo" /> 
      </div>

      <br>

      <div class="nav-bar">

        
        <a href="index.php">Home</a>
        <a href="#">Contact</a>
        

        <div class="login">

          <?php
            if(isset($_SESSION['userID']))
            {
              echo 
              '
              <form action="dbTools/logout.php" method="post">          
                <button type="submit" name="logout-submit">Logout</button>
              </form>
              ';
            }
            else
            {
              echo 
              '
              <form action="dbTools/login.php" method="post">
                <input type="text" name="username" placeholder="Username">
                <input type="password" name="pwd" placeholder="Password">
                <button type="submit" name="login-submit">Login</button>
                <a href="signup.php">Signup</a>
              </form>                          
              ';
            }
          ?>       
          
        </div>

      </div>
      
    </nav>
  </header>
  <br>
  <br>

  <!--  
  comments
  -->  