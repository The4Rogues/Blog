<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
  session_start();
?>

<html>
    <head>
        <title>Website Login Page</title>
        <link href="main.css" rel="stylesheet" type="text/css"/>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>
            
            <!-- This all needs to be centered and left aligned, and styled -->
            
             <h1>Login to BlogsAreUs</h1>
            
           <form action="" method="post">
               Username: <input type="text" name="username" /><br>
               <br>
               Password: <input type="password" name="password" /><br>
               <br>
            <input type="submit" value="Login" />
        </form>
           
        </div>
        
        <?php
        if(!empty($_POST)){
            $_SESSION["username"] = $_POST['username'];
            
            echo '<br>';
            
        if(!empty($_SESSION)){
            echo "Hello, you are logged in as " . $_SESSION['username'] . '<br>';
            echo '<br>';
            
            echo "<a href='viewAll_blog.php'> Enter (Go to viewAll_blog Page)</a><br>";
            echo '<br>';
        }
        }
        ?>   
        
        
            <!--
         <h2>Don't have an account?</h2>
        
          <a href="create_account.php" class="button">Create Your Account</a>  -->
    
       <h1>New to BlogsAreUs?</h1>
        
       
        <form action="create_account.php">
      <!-- echo "<a href='create_account.php'>Create account</a>"; -->
      <input type="submit" value="Create Account" /> 
        </form> 
                
        
        
   <!--     <footer>  
         For support contact us at support@BlogsAreUs.com <br>
         Created by The6Rogues &COPY; <?= date('Y'); ?>
        </footer> -->
        
    </body>
</html>


