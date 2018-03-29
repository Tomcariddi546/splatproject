<?php session_start();// Starting Session 
$connection = mysqli_connect('localhost', 'root', 'root', 'splat');

$qry = "SELECT * FROM users order by Uid desc limit 1;";
//$qry = "SELECT * FROM users";

$result = mysqli_query($connection,$qry);
    while($row=$result->fetch_assoc()){
       // print_r($row);
        $post = $row['Status'];
       // echo $post;
};
?>

<!doctype html>
<html>
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
    <link rel="stylesheet" href="css/style.css"></head>
    <body><?php require_once "nav.php"; ?>

        <div class="textframe">
        <div class="propic"><img src="assets/img/unnamed.jpg"></div>
            <div class="bio"><p class="biopiece">Username</p>
                <p class="biopiece">Somewhere over the rainbow</p>
                <p class="biopiece">I am a splat user and this is my bio. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                
               <p class="biopiece">User is feeling <?php echo $post; ?> today!</p>
            </div>
        

     <h3>My Status</h3>
 <form method="post" action="process.php">
    <input type="text" name="splatPost" placeholder="sup?">
    <input type="submit" name="submit">
  </form>


</div>
</body>
</html>
