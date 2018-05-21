<?php

/* 

 */
class PostController {

    public function viewAll() {
        // we store all the posts in a variable
        $posts = Post::all();
        require_once('views/posts/viewAll_post.php');
    }

    public function show() {
        // we expect a url of form ?controller=post&action=show&id=x
        // without an id we just redirect to the error page as we need the post id to find it in the database
        if (!isset($_GET['post_id']))
            return call('pages', 'error');
        try {
            // we use the given id to get the correct post
            $post = Post::find($_GET['post_id']);
            require_once('views/posts/show_post.php');
        } catch (Exception $ex) {
            return call('pages', 'error');
        }
    }

    public function create() {
        // we expect a url of form ?controller=post&action=create
        // if it's a GET request display a blank form for creating a new post
        // else it's a POST so add to the database and redirect to viewAll action
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            require_once('views/posts/create_post.php');
        } else {
            Post::add();

            $post = Post::all(); //$post is used within the view
            require_once('views/posts/viewAll_post.php');
        }
    }

    public function update() {

        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            if (!isset($_GET['post_id']))
                return call('pages', 'error');
            // we use the given id to get the correct post
            $product = Post::find($_GET['post_id']);

            require_once('views/posts/update_post.php');
        }
        else {
            $id = $_GET['post_id'];
            Post::update($id);

            $post = Post::all();
            require_once('views/posts/viewAll_post.php');
        }
    }

    public function delete() {
        Post::remove($_GET['post_id']);

        $post = Post::all();
        require_once('views/posts/viewAll_post.php');
    }

}

?>

