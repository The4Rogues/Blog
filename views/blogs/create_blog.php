<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
    box-sizing: border-box;
}

/* Add a gray background color with some padding */
body {
    font-family: Arial;
    padding: 20px;
    background: #f1f1f1;
}

/* Header/Blog Title */
.header {
    padding: 30px;
    font-size: 40px;
    text-align: center;
    background: white;
}

/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {   
    float: left;
    width: 75%;
}

/* Right column */
.rightcolumn {
    float: left;
    width: 25%;
    padding-left: 20px;
}

/* Fake image */
.fakeimg {
    background-color: #aaa;
    width: 100%;
    padding: 20px;
}

/* Add a card effect for articles */
.card {
     background-color: white;
     padding: 20px;
     margin-top: 20px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Footer */
.footer {
    padding: 20px;
    text-align: center;
    background: #ddd;
    margin-top: 20px;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
    .leftcolumn, .rightcolumn {   
        width: 100%;
        padding: 0;
    }
}
</style>
</head>
<body>

<div class="header">
  <h2>Enter your Blog Name here</h2>
</div>

<div class="row">
  <div class="leftcolumn">
    <div class="card">
       
<p><textarea rows="20" cols="131" autofocus placeholder="Write your summary here - Capture your audience and tell them what your blog is about">
</textarea></p>

        
    <!--  <h2>Write your blog summary here</h2>
      <h2>Capture your audience and tell them what your blog is about</h2>
     <!-- <h5>Title description, May 20, 2018</h5> -->
     
   <!--   <p>Some text..</p>
      <p>Write something interesting here..........</p> -->
    </div> 
    <div class="fakeimg" style="height:200px;">Optional Image</div>
    
    <br>
    <br>
    
   <!-- This button needs to be more centered and bigger -->
    <input type="submit" value="Create Blog" />
    
   <!-- <div class="card">
      <h2>TITLE HEADING</h2>
      <h5>Title description, April 29, 2018</h5>
      <div class="fakeimg" style="height:200px;">Image</div>
      <p>Some text..</p>
      <p>blah blah blah my blog is about blah blah blah.</p>
    </div> -->
  </div>
  <div class="rightcolumn">
    <div class="card">
      <h2>About Me</h2>
      <div class="fakeimg" style="height:100px;">Image</div>
      <p>Some text about me..</p>
    </div>
      
       
   <!-- <div class="card">
      <h3>Popular Post</h3>
      <div class="fakeimg">Image</div><br>
      <div class="fakeimg">Image</div><br>
      <div class="fakeimg">Image</div>
    </div> -->
    <div class="card">
      <h3>Follow Me</h3>
      <p>Some text..</p>
    </div>
  </div>
</div>
<!--
<div class="footer">
    <footer>  
         For support contact us at support@BlogsAreUs.com <br>
         Created by The6Rogues &COPY; <?= date('Y'); ?>
        </footer> 
</div> -->

</body>
</html>


