<?php

class Blog {

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
        foreach ($req->fetchAll() as $blog) {
            $list[] = new Blog($blog['id'], $blog['user_id'], $blog['blog_title'], $blog['topic'], $blog['blog_summary'], $blog['date_created'], $blog['date_edited'], $blog['style_id']);
        }
        return $list;
    }

    public static function find($id) {
        $db = Db::getInstance();
        $id = intval($id);
        $req = $db->prepare('SELECT * FROM BLOGS WHERE id = :id');
        $req->execute(array('id' => $id));
        $blog = $req->fetch();
        if ($blog) {
            return new Blog($blog['id'], $blog['user_id'], $blog['blog_title'], $blog['topic'], $blog['blog_summary'], $blog['date_created'], $blog['date_edited'], $blog['style_id']);
        } else {
            throw new Exception('Cannot find blog, please try again.');
        }
    }

    public static function update($id) {
        $db = Db::getInstance();
        $req = $db->prepare("Update blog set blog_title=:blog_title, blog_summary=:blog_summary, topic:=topic, style_id:=style_id where id=:id");
        $req->bindParam(':id', $id);
        $req->bindParam(':blog_title', $blog_title);
        $req->bindParam(':blog_summary', $blog_summary);
        $req->bindParam(':topic', $topic);
        $req->bindParam(':style_id', $style_id);

        if (isset($_POST['blog_title']) && $_POST['blog_title'] != "") {
            $filteredBlog_title = filter_input(INPUT_POST, 'blog_title', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['blog_summary']) && $_POST['blog_summary'] != "") {
            $filteredBlog_summary = filter_input(INPUT_POST, 'blog_summary', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['topic']) && $_POST['topic'] != "") {
            $filteredTopic = filter_input(INPUT_POST, 'topic', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['style_id']) && $_POST['style_id'] != "") {
            $filteredStyle_id = filter_input(INPUT_POST, 'style_id', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        $blog_title = $filteredBlog_title;
        $blog_summary = $filteredBlog_summary;
        $topic = $filteredTopic;
        $style_id = $filteredStyle_id;
        $req->execute();
        return $id;
    }

    public static function create() {
        $db = Db::getInstance();
        $req = $db->prepare("Insert into blog(blog_title, topic, blog_summary, style_id) values (:blog_title, :topic, :blog_summary, :style_id)");
        $req->bindParam(':blog_title', $blog_title);
        $req->bindParam(':topic', $topic);
        $req->bindParam('blog_summary', $blog_summary);
        $req->bindParam('style_id', $style_id);

        if (isset($_POST['blog_title']) && $POST['blog_title'] != "") {
            $filteredBlog_title = filter_input(INPUT_POST, 'blog_title', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['blog_summary']) && $_POST['blog_summary'] != "") {
            $filteredBlog_summary = filter_input(INPUT_POST, 'blog_summary', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['topic']) && $_POST['topic'] != "") {
            $filteredTopic = filter_input(INPUT_POST, 'topic', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        if (isset($_POST['style_id']) && $_POST['style_id'] != "") {
            $filteredStyle_id = filter_input(INPUT_POST, 'style_id', FILTER_SANITIZE_SPECIAL_CHARS);
        }
        $blog_title = $filteredBlog_title;
        $blog_summary = $filteredBlog_summary;
        $topic = $filteredTopic;
        $style_id = $filteredStyle_id;
        $req->execute();  
        $last_id = $db->lastInsertId();
        echo "New record created successfully. Last inserted ID is: " . $last_id;
        return $last_id;
    }

    public static function delete($id) {
        $db = Db::getInstance();
        $id = intval($id);
        $req = $db->prepare('delete FROM BLOGS WHERE id = :id');
        $req->execute(array('id' => $id));
    }

}
