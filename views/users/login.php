
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
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
            .rcorners2 {
                border-radius: 25px;
                border: 2px solid #343a40;
                padding: 20px;
                width: 425px;
                height: 300px;
            }

        </style>
    </head>
    <body>

        <div class="container" style="margin-top:50px;">

            <!-- This all needs to be centered and left aligned, and styled -->

            <h1 class="col-sm-8 offset-sm-4" >Login to BlogsAreUs</h1><br>

            <form action="" method="post" >

                <div class="rcorners2 col-sm-8 offset-sm-4 w3-container w3-card-4 w3-light-grey">
                    <label class="text-left col-sm-4" for="username">Username:</label>
                    <input type="text" class="col-form-label col-sm-8" name="username" /><br>
                    <br>
                    <br>
                    <label class="text-left col-sm-4" for="password">Password:</label>
                    <input type="password" class="col-form-label col-sm-8 w3-input w3-border" name="password"/>
                    <br>
                    &nbsp;
                    <input class="col-form-label col-sm-4 offset-sm-8 btn btn-success" type="submit" value="Login" /><br>

                    &nbsp;
                    <br>
                    <br>
                    <p>New to BlogsAreUs? <a class="btn btn-link" href='create_account.php'> Create account</a></p>
                </div>
            </form>

        </div>

        <?php
        if (!empty($_POST)) {
            $_SESSION["username"] = $_POST['username'];

            echo '<br>';

            if (!empty($_SESSION)) {
                echo "Hello, you are logged in as " . $_SESSION['username'] . '<br>';
                echo '<br>';

                echo "<a href='viewAll_blog.php'> Enter (Go to viewAll_blog Page)</a><br>";
                echo '<br>';
            }
        }
        ?>

        <?php
        if (!empty($_POST)) {
            $_SESSION["username"] = $_POST['username'];

            echo '<br>';

            if (!empty($_SESSION)) {
                echo "Hello, you are logged in as " . $_SESSION['username'] . '<br>';
                echo '<br>';

                echo "<a href='viewAll_blog.php'> Enter (Go to viewAll_blog Page)</a><br>";
                echo '<br>';
            }
        }
        ?>   
        <!--     <footer>  
              For support contact us at support@BlogsAreUs.com <br>
              Created by The6Rogues &COPY; <?= date('Y'); ?>
             </footer> -->

    </body>
</html>