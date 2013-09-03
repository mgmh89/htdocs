<?php
if ($_POST) {
    $name = $_POST['com_name'];
    $name = mysql_real_escape_string($name);
    $email = $_POST['com_email'];
    $email = mysql_real_escape_string($email);
    $comment = $_POST['com_dis'];
    $comment = mysql_real_escape_string($comment);
    $post_id = $_POST['post_id'];
    $post_id = mysql_real_escape_string($post_id);
    $lowercase = strtolower($email);
    $image = md5($lowercase);
    mysql_query("insert into comments(com_name,come_email,com_dis) values ('$name','$email','$comment_dis','$post_id')");
}
?>

<li class="box">
    <img src="http://www.gravatar.com/avatar.php?gravatar_id=
<?php echo $image; ?>"/>
<?php echo $name; ?><br />
<?php echo $comment; ?>
</li>