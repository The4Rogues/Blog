<?php 
//include '';
?>
<!--
<p>Hello there  <?php // echo $first_name . ' ' . $last_name; ?><p>
<p>The above data is present to demonstrate the utilisation of variables 
populated earlier within the page processing</p>
<p>This is the home page of the MVC Skeleton Application</p>
-->
          

<!DOCTYPE html>
<html>
<head>
    <link href="main.css" rel="stylesheet" type="text/css"/>
    <link href="../css/styles.css" rel="stylesheet" type="text/css"/>
</head>
<body>

<ul>
  <li style="float:left"><a class="active" href="home.php">Home</a></li>  
  <li style="float:left"><a href="?controller=user&action=register">Create Blog</a></li> 
  <li style="float:left"><a href="?controller=user&action=update">Update Blog</a></li> 
<li><a href="#sign_out">Sign Out</a></li>
 <!--<li><a class="disabled" href="#login">Login</a></li>-->
<!-- <li><a class="disabled" href="#create_account">Create Account</a></li> -->
</ul>

    
    <?php

 if(!empty($_SESSION)){
            echo "Hello, you are logged in as " . $_SESSION['username'] . '<br>';
            echo '<br>';
 }
 ?> 
    
            <div class="bg">       
       
        <div>
<!--
<ul>
  <li style="float:left"><a class="active" href="home.php">Home</a></li>  
  <li style="float:left"><a href="#create_blog">About</a></li> 
  <li style="float:left"><a href="#update_blog">Blogs</a></li> 
 <li><a href="login">Login</a></li>
 <!--<li><a class="disabled" href="#login">Login</a></li>-->
 <!--<li><a href="create_account">Create Account</a></li> -->
 <!--<li><a class="disabled" href="create_account">Create Account</a></li> 
</ul>
-->
  
</div>
            
             <h1>BlogsAreUs</h1>  <!-- this needs to be centered and styled -->
            
           <form action="" method="post">
      
      <!-- These all need to be styled and spaced -->
       
    <!-- 
    <div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="#about">About</a>
  <a href="#search">Search</a>
  <a href="#login">Login</a>
  <a href="#create account">Create Account</a>
</div>
    
    
      <div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="#about">About</a>
  <a href="#search">Blogs</a>
  <a href="login.php">Login</a>
  <a href="CreateAccount.php">Create Account</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  
  </a>
  
  -->

<!--
<div style="padding-centre:16px">
  
</div>
-->
<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>
            
                 
     <br>
     <br>
     <br>
     
     <!-- This all needs to be centered and styled -->
               <?php
               
               echo "your voice, your story, " . '<br>';
               echo "your idea's, your blog" . '<br>';
               echo '<br>';
               echo '<br>';
               
               echo "Create an online presence that is truly yours, and share it with the world". '<br>';
               echo '<br>';
               echo '<br>';
               
               ?>
   <!-- <h1> intro to content here </h1>  -->
   <?php foreach($blogs as $blog){ ?> 
   <div class="preview" class="clearfix">
        
       
       <p><?= $blog ->blog_title; ?><p>
       <p><?= $blog ->blog_summary; ?><p>
       <p><?= $blog ->date_created; ?><p>    
        
       <a href="?controller=blog&action=show&blog_id=<?= $blog->id; ?>" class="readmore" style="vertical-align:middle"><span>Read More</span></button></a>
       <?php }?>
   </div>
    <!--<div class="preview" class="clearfix">

         <img class="preview_pic" src="../images/sky.png" alt="Sky Logo" width="200" float: right/>
        Here is some sample content from a blog. 
        There will be lots of words here however the entire blog post will not be here. 
        It will be a snippet of a few hundred characters from within the database. <br>
        <a href="error.php" class="readmore" style="vertical-align:middle"><span>Read More</span></button></a>
        
    </div>
        
        <div class="preview" class="clearfix">
        <img class="preview_pic" src="../images/getintotech.png" alt="Sky Logo" height="120" float: right/>
        Here is some sample content from a blog. 
        There will be lots of words here however the entire blog post will not be here. 
        It will be a snippet of a few hundred characters from within the database.<br>
        <a href="error.php" class="readmore" style="vertical-align:middle"><span>Read More</span></button></a>
    </div>
    
        <div class="preview" class="clearfix">
        <img class="preview_pic" src="../images/bbq.png" alt="Sky Logo" width="200" float: right/>
        Here is some sample content from a blog. 
        There will be lots of words here however the entire blog post will not be here. 
        It will be a snippet of a few hundred characters from within the database.<br>
        <a href="error.php" class="readmore" style="vertical-align:middle"><span>Read More</span></button></a>
    </div>
    !-->
   <div>
    <footer>
         For support contact us at support@BlogsAreUs.com <br>
         Created by The6Rogues &COPY; <?= date('Y'); ?>
    </footer>
   </div>
</body>
</html>