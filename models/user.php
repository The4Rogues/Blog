<?php
    class User{
        public $id;
        public $username;
        public $password;
        public $first_name;
        public $last_name;
        public $email;
        
        public function __construct($id, $username, $password, $first_name, $last_name, $email) {
            $this->id = $id;
            $this->username = $username;
            $this->password = $password;
            $this->first_name = $first_name;
            $this->last_name = $last_name;
            $this->email = $email;
        }
        
        public static function all() {
            $list = [];
            $db = Db::getInstance();
            $req = $db->query('SELECT * FROM USERS');
            foreach($req->fetchAll() as $user) {
                $list[] = new User($user['id'], $user['username'], $user['password'], $user['first_name'], $user['last_name'], $user['email']);
            }          
            return $list;
        }
        
        public static function create() {
            $db = Db::getInstance();
            $req = $db->prepare("Insert into user(username, password, first_name, last_name, email) values (:username, :password, :first_name, :last_name, :email)");
            $req->bindParam(':username', $username);
            $req->bindParam(':password', $password);
            $req->bindParam('first_name', $first_name);
            $req->bindParam('last_name', $last_name);
            $req->bindParam('email', $email);
            
            if(isset($_POST['username'])&& $POST['username']!=""){
                $filteredUsername = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);}
            if(isset($_POST['password'])&& $_POST['password']!=""){
                $filteredPassword = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);}
            if(isset($_POST['first_name'])&& $_POST['first_name']!=""){
                $filteredFirst_name = filter_input(INPUT_POST, 'first_name', FILTER_SANITIZE_SPECIAL_CHARS);}
            if(isset($_POST['last_name'])&& $_POST['last_name']!=""){
                $filteredLast_name = filter_input(INPUT_POST, 'last_name', FILTER_SANITIZE_SPECIAL_CHARS);}
            if(isset($_POST['email'])&& $_POST['email']!=""){
                $filteredEmail = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);}
            $username = $filteredUsername;
            $password = $filteredPassword;
            $first_name = $filteredFirst_name;
            $last_name = $filteredLast_name;
            $email = $filteredEmail;
            $req->execute();
        }
            
        public static function update(){
            $db = Db::getInstance();
            $req = $db->prepare("Update user set password=:password, first_name=:first_name, last_name=:last_name, email=:email where id=:id");
            if(isset($_POST['password'])&& $_POST['password']!=""){
                $filteredPassword = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);}
            if(isset($_POST['first_name'])&& $_POST['first_name']!=""){
                $filteredFirst_name = filter_input(INPUT_POST, 'first_name', FILTER_SANITIZE_SPECIAL_CHARS);}
            if(isset($_POST['last_name'])&& $_POST['last_name']!=""){
                $filteredLast_name = filter_input(INPUT_POST, 'last_name', FILTER_SANITIZE_SPECIAL_CHARS);}
            if(isset($_POST['email'])&& $_POST['email']!=""){
                $filteredEmail = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);}
            $password = $filteredPassword;
            $first_name = $filteredFirst_name;
            $last_name = $filteredLast_name;
            $email = $filteredEmail;
            $req->execute();
        }
        
        public static function delete($id){
            $db = Db::getInstance();
            $id = intval($id);
            $req = $db->prepare('delete FROM USERS WHERE id = :id');
            $req->execute(array('id'=>$id));
        }
    }
    