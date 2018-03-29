<?php session_start();
$post = $_POST['splatPost'];

$connection = mysqli_connect('localhost', 'root', 'root', 'splat');

$qry = "INSERT INTO users (Status) VALUES ('$post');";
//$qry = "UPDATE `users` SET `Status`='$post', `user`= 'susan' WHERE `id`= 2;";

mysqli_query($connection, $qry);

mysqli_close($connection);

header('Location: index.php');
?>
