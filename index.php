<?php require "header.php" ?>

  <main>

    <?php
      if(isset($_SESSION['userID']))
      {
        echo 
        '
          <FORM action="dbTools/SaveCustomer.php" method="post">
            <fieldset>
              <legend>Customer Details</legend>
              
              <br>
      
              <LABEL>First Name: </LABEL>
              <INPUT type="text" name= "form_first_name" placeholder = "FirstName">  
      
              <br>      
              <br>
      
              <button type="submit" name="button">Save</button>        
            </fieldset>           
          </FORM>        
        ';
      }
      else
      {
        echo '<p>You are logged out!</p>';
      }
    ?>   
    
    <br>
    <br>
    
    
  </main>

<?php require "footer.php" ?>