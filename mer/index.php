<?php
session_start();
include_once("header.php");
if(isset($_SESSION['username'])){
echo "Привет,".$_SESSION['username'];
} else { echo "Вы не вошли сайт";
}
$q=mysqli_query($mysqli, "SELECT*FROM news ORDER BY id DESC LIMIT 10");
while ($R=mysqli_fetch_array($q)) {
 echo "<h2><a href='news_show.php?id=".$R['id']."'>".$R['title']."</a></h2>";
 echo substr(strip_tags($R['text']),0,200)."<br/><br/>";
 echo "<a href='news_show.php?id=".$R['id']."'> Далее</a>";
 echo "<a href='news_del.php?id=".$R['id']."'> Удалить</a>";
 echo $R['date'];
 echo "<hr/>";
}
echo md5 ("baxit")
//echo md5 (md5("turumbetov")."tatu");
?>