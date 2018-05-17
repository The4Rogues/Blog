<?php
/*
 * Work In Progress !!!
 * 
 * Author: Ichi 
 * Date: 17/5/2018
 * 
 */


class BlogController {
    /*
     * @Models: "read all" method () to return multi dimentinal associtive arrays 
     * with blog_title, blog_body, blog_owner_name, last_date_post_updated
     * 
     */
    public function viewAll() { 
      // comes here by url of  ?controller=posts&action=viewAll on nav button on home.php (possibly)
      // we store all the blogs in a variable
     
      $blogs = Blog::all();
      require_once('views/blogs/viewAll_blog.php');
      // the would be some pretty title with all posts (it can be entrace of our home page or 
      // then loop on viewAll_blog.php
    }
    
    /*
     * @Models: "read" method (@param 'blog_id') to return a single dimentional associtive array
     * with blog_title, blog_body, blog_owner_name, last_date_post_updated, (admin_level if created)
     * 
     * @Views: call: show_blog.php and viewAll_post.php
     */
    public function show() {
      // we expect a url of form ?controller=posts&action=show&blog_id=x (where x has been echoed from $blogs['id'])
      // by clicking a blog from viewAll_blog.php
      // or call on create
      // 
      // without an id we just redirect to the error page as we need the post id to find it in the database
        if (!isset($_GET['blog_id']))
        return call('pages', 'error');

        try{
            // we use the given id to get the correct blog
            
            $blog = Blog::find($_GET['blog_id']);
            // for echo out          
            require_once('views/blogs/show_blog.php');
            
            // this sould shows all the posts on paticular blog
            //it should be like $post->viewAll('blog_id')
            // !!!!!!!!! this can be BUG then need to re write
            call("post", "viewAll");         
      
        }
        catch (Exception $ex){
            return call('pages','error');
        }
    }
    
    /*
     * @Models: "create" method to retun an associtive array of the single blog just created
     * 
     * @Views: create_blog.php then show_blog.php
     * 
     * @ note: Blog id can be only created when session user has been set
     */
    public function create() {
      // we expect a url of form ?controller=blogs&action=create (hard corded) by clicking nav or link
      // if it's a GET request display a blank form for creating a blog
      
      // $_SESSION['username'] will be set once user registered or logged in
      // $_SESSION ['logged_in'] = True once logged in
      
      // else it's a POST so add to the database and redirect to readAll action
        
      // This privilage has not been set properly if it's set, there would be alternative ways for this condition stateant
        if (isset($_SESSION['logged_in'])){
            if($_SERVER['REQUEST_METHOD'] == 'GET'){
              require_once('views/blogs/create_blog.php');
            }
            else { 

                $blog = Blog::create(); 
                // works? 
                $_GET['blog_id'] = $blog['id'];
                return call("blog", "show");
            }
        }else{
            // if not logged in then re-direct to register page (also has link to log in)
            return call("user", "register");
        }
      
    }
    
    /*
     * @Models: "update" method to retun none
     * @Views: update_blog.php then show_blog.php
     * 
     * @ todo: may need another condition for security - log in
     */
    public function update() {
        
        if($_SERVER['REQUEST_METHOD'] == 'GET'){
            
            if (!isset($_GET['blog_id'])){
                return call('blog', 'viewAll');
            }
            // we use the given id to get the correct product
            // try and catch
            $blog = Blog::find($_GET['blog_id']);
            require_once('views/blog/update_blog.php');
        }
        else
        { 
            $id = $_GET['blog_id'];
            Blog::update($id);
                        
            return call('blog', 'show');
      }
      
    }
    
        /*
     * @Models: "remove" method to retun blog_id which has just created
     *          within the Query WHERE admin level is either registered
     * @Views: create_blog.php & show_blog.php
     * 
     * @ todo: give permissions to only registered users and admin
     */
    public function delete() {
        
            $blog = Blog::find($_GET['blog_id']);
            $blog_owner_name = $blog ['username'];
            
            // not been set on tables yet just guessing 
            If ($_SESSION['username']== $blog_owner_name || $blog['admin_level' == '1'])
            Blog::remove($_GET['blog_id']);
            // check if isset can recognise it as not set
            $_SESSION['blog_id']='';
            $blogs = Blog::all();
            require_once('views/blogs/readAll_blog.php');
            // can I return call ("blog", "viewAll")?
      }
      
    }
  
?>