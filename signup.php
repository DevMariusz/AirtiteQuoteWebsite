<?php require "header.php" ?>

  <main>
    <div class="signup-form">
      <br>
      <h1>SignUp!</h1>
      <br>
      <br>

      <?php
        if(isset($_GET['error']))
        {
          if($_GET['error'] == "emptyfields")
          {
            echo '<p> Fill in all fields!</p>';
          }
          elseif($_GET['error'] == "invaliduidmail")
          {
            echo '<p> Invalid username and e-mail!</p>';
          }
          elseif($_GET['error'] == "invaliduid")
          {
            echo '<p> Invalid username!</p>';
          }
          elseif($_GET['error'] == "invalidmail")
          {
            echo '<p> Invalid e-mail!</p>';
          }
          elseif($_GET['error'] == "passwordcheck")
          {
            echo '<p> Your passwords do not match!</p>';
          }
          elseif($_GET['error'] == "usertaken")
          {
            echo '<p> Username is already taken!</p>';
          }
        }

        if(isset($_GET['sign_up']))
        {
          if($_GET['sign_up'] == "success")
          {
            echo '<p> Signup successfull!</p>';
          }
        }



        //elseif($_GET['sign_up'] == "success")
        //{ echo '<p> Signup successfull!</p>'; }
        
      ?>

      <form action="dbTools/signupform.php" method="post">
          
          <input type="text" name="email" placeholder="Email"><br>
          <br>
          <input type="text" name="uid" placeholder="User Name"><br>
          <br>
          <input type="password" name="pwd" placeholder="Password"><br>
          <br>
          <input type="password" name="confirm-pwd" placeholder="Confirm Password"><br>
          <br>
          <br>
          <button type="submit" name="signup-submit">Signup</button>
          
      </form>    
    </div>
  </main>

  <br>
  <br>
  <br>

<?php require "footer.php" ?>