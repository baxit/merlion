<?php
session_start();
include_once("header.php");
$news_id=$_GET['id'];
$q=mysqli_query($mysqli, "SELECT*FROM news WHERE id=$news_id");
$R=mysqli_fetch_array($q);
echo "<h1>".$R['title']."</h1>";
echo $R['text'];
