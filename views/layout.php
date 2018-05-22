<?php

/* 
 * Copy from Peter's you can delete all. this is only for reference
 */
session_start();
?>

<!DOCTYPE html>
<html>
  <head>
<meta name="viewport" content="width=device-width, initial-scale=1">


<link rel="stylesheet" href="views/css/main.css">
<title>Blog</title>
  </head>
  <body>
   <!-- <header class="w3-container w3-gray">
      <a href='/MVC_Skeleton'>Home</a>
      <a href='?controller=blog&action=readAll'>Products</a>
      <a href='?controller=product&action=create'>Add Product</a>
    </header> -->
<div class="w3-container w3-pink">
    <?php require_once('routes.php'); ?>
</<div>
<div class="w3-container w3-gray">
    <footer >
        
        For support contact us at support@BlogsAreUs.com <br>
         Created by The6Rogues &COPY; <?= date('Y'); ?>
     <!--   Copyright &COPY; <?= date('Y'); ?> -->
    </footer>
</div>
  </body>
</html>
