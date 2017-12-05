<?php
session_start();
$mysqli=mysqli_connect('Localhost','root',"",'di');
if(isset($_SESSION['username']) && $_SESSION['username']=='baxit'){
    $news_id=$_GET['id'];
    $q=mysqli_query($mysqli, "DELETE FROM news WHERE id=$news_id");
}
else {
    echo " У вас нет доступа";
}
?>
