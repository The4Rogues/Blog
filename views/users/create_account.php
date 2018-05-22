<!DOCTYPE html>
<!--
-->
<html>
    <head>
        <title>Create an Account</title>
        <link href="main.css" rel="stylesheet" type="text/css"/>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    
    <body>
        
        <!-- This all needs to be centered and styled -->
        
        
        <h1>Create Account</h1>
        
        <h2>Please fill in all fields</h2>
        
        <form action="create_account.php"  
              method="post" >
     
            <p>First name: <input type="text" name="firstname" placeholder="Enter First Name" required autofocus/></p>
            <p>Last name: <input type="text" name="lastname" placeholder="Enter Last Name" required /></p>
            <p>Email: <input type="email" name="email"  placeholder="name@example.com" required /></p>   
            <p>Choose a username: <input type="text" name="username" placeholder="Choose a Username" required /> </p> 
            <p>Choose a password: <input type="password" name="password" placeholder="Choose a Password" required/></p>
            <p>Repeat Password: <input type="password" name="password-repeat" placeholder="Repeat Password" required/></p>  
               
            <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me  

    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>   
     
    <input type="submit" value="Cancel" />     
    <input type="submit" value="Create Account" />
    <br>
    <br>
    
                
        </form>   
        
        <?php

/* 

 */


        session_start();
         $_SESSION = [];
       // session_destroy();
        
    //set the session variables if the $_POST superglobal is not empty:
                                      
        if (!empty($_POST)){
            $_SESSION["firstname"] = $_POST["firstname"];
            $_SESSION["lastname"] = $_POST["lastname"];
            $_SESSION["email"] = $_POST["email"];            
            $_SESSION["username"] = $_POST["username"];
            $_SESSION["password"] = $_POST["password"];
            $_SESSION["password-repeat"] = $_POST["password-repeat"];
            
            
            
            
            
            //Check username not already in use
               
           
        }
        
        // if the $_SESSION superglobal contains values:
        //
        
        if (!empty($_SESSION)){   
            
            
            echo "Account created for ". $_SESSION["username"] . '<br>';
            echo "Thank your for Registering with BlogsAreUs. Please click on the link to Login" . '<br>';
            echo( "<button onclick= location.href='login.php'>Login</button>");  
           // echo "<a href='login.php'>Login</a><br>"; 
           
                  
        }
                 
        ?>
        
      <!--
        
        <form>
            
        <input type="submit" value="Login" />
        
        </form> -->
       
        
    <!--    <footer>  
         For support contact us at support@BlogsAreUs.com <br>
         Created by The6Rogues &COPY; <?= date('Y'); ?>
        </footer> -->
        
    </body>
</html>


