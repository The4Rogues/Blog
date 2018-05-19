<!DOCTYPE html>

<p>All posts:</p>

<?php foreach($posts as $post) { ?>
  <p>
    <?php printf("%s - %s", $post->blog->blog_title, $post->post_title); ?> &nbsp; &nbsp;
    <a href='?controller=post&action=read&id=<?php echo $post->id; ?>'>See post</a> &nbsp; &nbsp;
    <a href='?controller=post&action=delete&id=<?php echo $post->id; ?>'>Delete Post</a> &nbsp; &nbsp;
    <a href='?controller=post&action=update&id=<?php echo $post->id; ?>'>Update Post</a> &nbsp;
  </p>
<?php } ?>