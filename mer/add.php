<?php 
$mysqli=mysqli_connect('Localhost','root',"",'di');
$title = $_POST['title'];
$text = $_POST['text'];
$date = $_POST['datetime'];
$res=mysqli_query($mysqli, "INSERT INTO news(title, text,date) VALUES('$title', '$text', '$date')");
?>