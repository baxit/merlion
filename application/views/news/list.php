<?php
foreach ($news as $x){
    echo "<h1>".anchor('news/show/'.$x['id'],$x['title'])."</h1>";
    echo substr(strip_tags($x['text']),0,200);
    echo "<p>" . $x['date'] . "</p>";
} 
?>