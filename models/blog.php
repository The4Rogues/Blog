<?php
class Blog {

    // we define 3 attributes
    public $id;
    public $user_id;
    public $blog_title;
    public $topic;
    public $blog_summary;
    public $date_created;
    public $date_edited;
    public $style_id;

    public function __construct($id, $user_id, $blog_title, $topic, $blog_summary, $date_created, $date_edited, $style_id) {
        $this->id = $id;
        $this->user_id = $user_id;
        $this->blog_title = $blog_title;
        $this->topic = $topic;
        $this->blog_summary = $blog_summary;
        $this->date_created = $date_created;
        $this->date_edited = $date_edited;
        $this->style_id = $style_id;
    }

    public static function all() {
        $list = [];
        $db = Db::getInstance();
        $req = $db->query('SELECT * FROM BLOGS');
        // we create a list of Product objects from the database results
        foreach ($req->fetchAll() as $blog) {
            $list[] = new Blog($blog['id'], 
                    $blog['user_id'],
                    $blog['blog_title'],
                    $blog['topic'],
                    $blog['blog_summary'],
                    $blog['date_created'],
                    $blog['date_edited'],
                    $blog['style_id']);
        }
        return $list;
    }

    public static function find($id) {
        $db = Db::getInstance();
        //use intval to make sure $id is an integer
        $id = intval($id);
        $req = $db->prepare('SELECT * FROM BLOGS WHERE id = :id');
        //the query was prepared, now replace :id with the actual $id value
        $req->execute(array('id' => $id));
        $blog = $req->fetch();
        if ($blog) {
            return new Blog($blog['id'], 
                    $blog['user_id'],
                    $blog['blog_title'],
                    $blog['topic'],
                    $blog['blog_summary'],
                    $blog['date_created'],
                    $blog['date_edited'],
                    $blog['style_id']
            );
        } else {
            //replace with a more meaningful exception
            throw new Exception('A real exception should go here');
        }
    }
}
