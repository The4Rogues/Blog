<?php
/*
 * Work In Progress !!!
 * 
 * Author: Ichi 
 * Date: 17/5/2018
 * 
 * Logic for nav - 
 * if $_SESSION['user_id'] is set - show logout and hello <name>
 * if $_SESSION['user_id'] is empty - show register and login
 * 
 */


class UserController {
    
    /*
     * @Models: "login" method () check $_POST['username'] and $_POST['password'] matched if True 
     * return with one dimentional associtive array with details of all dield on user
     * 
     */
    // How to get called :
    // from url on nav or link on register.com
    // it may be directed via create Blog id you have $_SESSION ['username'] has not been set then direct to 
    // 
    // you would not see this option if you were logged in
    // 
    // blog_id can be set or not
    // post_id can be set or not
    // $_SESSION ['username'] must be empty
    // $_SESSION['logged_in']=False;
    // 
    // 
    // where directed to:
    // Once submitted, go to show_user
    // which will have edit/update/delete button 
    
    public function login() {
  
        // If method was not POST goes to the login form
        if($_SERVER['REQUEST_METHOD'] == 'GET'){
              require_once('views/users/login.php');
            }
        else {     
            try{
                // if  username and password matched, it will return user_id
                $user = User::login();
                $_SESSION['user_id']=$user['id'];
                $_SESSION['username']=$user['username'];
                $_SESSION['logged_in']=True;
                
                return call('user', 'show');
            }
            catch (Exception $ex){
                return call('pages','error');
            }
        } 
          
    }
    
    
    /*
     * @Models: "find" method (@param 'user_id') to return an associtive array of the single user
     * 
     * @Views: show_user.php with edit / delete or go to home page
     * 
     * Only people who are logged in
     * 
     * we expect a url of form ?controller=posts&action=show&blog_id=x 
     * (where x has been echoed from $_SESSION ['user_id'])on possibly layout.php
     * 
     * Directed to edit / delete / or Home on show_user.php
     */
    public function show() {

        try{
            
            $user_id = $_SESSION['user_id'];
            $user = User::find($user_id);
            // show with edit and delete button
            require_once('views/users/show_user.php');    
        }
        catch (Exception $ex){
            return call('pages','error');
        }
    }

    
    /*
     * @Models: "create" method to retun an associtive array of the single user 
     * 
     * @Views: register.php then show_user.php
     * 
     * @todo: try and catch
     */
    public function register() {
 
        
        /* register should not be seen if logged in
         * 
         * if (isset($_SESSION['logged_in'])){
            // logout first
            User::logout();
            $_SESSION['user_id']='';
            $_SESSION['logged_in']='';
            
            }
            
        */    
            
        if($_SERVER['REQUEST_METHOD'] == 'GET'){
            require_once('views/users/register.php');
        }
        else { 
            $user= User::create(); 
             $_SESSION['user_id']=$user['id'];
             $_SESSION['username']=$user['username'];
             $_SESSION['logged_in']=True;
             
            return call("user", "show");
        }  
    }
    
    /*
     * @Models: "update" method to retun none
     * @Views: update_user.php then show_user.php
     * 
     * @ todo: may need another condition for security - log in
     * 
     * How to be called:
     * once logged in you will see "Hello Ichi" with link on to show_user
     */
    public function update() {
        
      if($_SERVER['REQUEST_METHOD'] == 'GET'){
        // we use the given id to get the correct product
            $user_id = 
            $user = User::find($user_id);
            require_once('views/blog/update_user.php');
        }
        else
          { 
          
          // how can i see the owner of the blog
            $user_id=$_SESSION['user_id'];
            $user = User::find($user_id);
                        
            return call('user', 'show');
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
        try{
            Product::remove($_SESSION['user_id']);
            $_SESSION['user_id'] = '';
            $_SESSION['username'] = '';
            $_SESSION['logged_in'] = False;
            // can I do any other way? like session destroy
            
            return call('pages', 'home');    
        }
        catch (Exception $ex){
            return call('pages','error');
        }      
    }
}

?>
