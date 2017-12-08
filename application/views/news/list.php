<?php
foreach ($news as $x){
    echo "<h1>".anchor('news/show/'.$x['id'],$x['title'])."</h1>";
    echo substr(strip_tags($x['text']),0,200)."</br></br>";
    echo anchor('news/delete/'.$x['id'], 'del')."</br></br>";
    echo $x["date"]."</br></br>";
} 
?>