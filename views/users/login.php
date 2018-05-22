<<<<<<< HEAD

=======
>>>>>>> 1a60a09c6b2c9ebbff1b0229a2353786b339d7f1
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
<<<<<<< HEAD
session_start()
=======
  session_start();
>>>>>>> 1a60a09c6b2c9ebbff1b0229a2353786b339d7f1
?>

<html>
    <head>
        <title>Website Login Page</title>
<<<<<<< HEAD
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" crossorigin="anonymous">
    </head>
    <body>
        <div class="container" style="margin-top:30px;">

            <!-- This all needs to be centered and left aligned, and styled -->

            <h1 class="col-sm-10 offset-sm-2">Log into your account</h1><br>

            <form action="" method="post">
                <label class="col-sm-10 offset-sm-2 col-form-label" for="username">Username:</label>
                <div class="col-sm-10 offset-sm-2"><input type="text" name="username" /></div><br>
                <br>
                <label class="col-sm-10 offset-sm-2 col-form-label" for="password">Password:</label>
                <div class="col-sm-10 offset-sm-2"><input type="password" name="password" /></div><br>
                <br>
                <div class="col-sm-10 offset-sm-2"><input type="submit" value="Login" /></div>
                <br>
            </form>
        </div>

        <?php
        if (!empty($_POST)) {
            $_SESSION["username"] = $_POST['username'];

            echo '<br>';

            if (!empty($_SESSION)) {
                echo "Hello, you are logged in as " . $_SESSION['username'] . '<br>';
                echo '<br>';

                echo "<a href='home.php'> Enter (Go to Home Page)</a><br>";
                echo '<br>';
            }
        }
        ?>   


        <!--
     <h2>Don't have an account?</h2>
    
      <a href="create_account.php" class="button">Create Your Account</a>  -->

        <p1 class="col-sm-10 offset-sm-2">Don't have an account?</p1><br>


        <form action="create_account.php">
            <!-- echo "<a href='create_account.php'>Create account</a>"; -->
            
            <div class="col-sm-10 offset-sm-2"><a href="#">Create Account</a>
        </form> 



        <footer>  
            For support contact us at support@BlogsAreUs.com <br>
            Created by The6Rogues &COPY; <?= date('Y'); ?>
        </footer>
=======
        <link href="main.css" rel="stylesheet" type="text/css"/>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>
            
            <!-- This all needs to be centered and left aligned, and styled -->
            
             <h1>Log into your account</h1>
            
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
    
       <h1>Don't have an account?</h1>
        
       
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

>>>>>>> 1a60a09c6b2c9ebbff1b0229a2353786b339d7f1

    </body>
</html>