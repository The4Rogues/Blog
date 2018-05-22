<!DOCTYPE html>
<p>View all posts:</p>

<?php foreach ($posts as $post) { ?>
    <p>
        <?php echo $post->post_title; ?> &nbsp; &nbsp;
        <a href='?controller=post&action=read&id=<?php echo $post->id; ?>'>Read Post</a> &nbsp; &nbsp;
        <a href='?controller=post&action=delete&id=<?php echo $post->id; ?>'>Delete Post</a> &nbsp; &nbsp;
        <a href='?controller=postt&action=update&id=<?php echo $post->id; ?>'>Update Post</a> &nbsp;
    </p>
<?php } ?>
