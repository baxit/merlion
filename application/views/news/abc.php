<?php echo $links;?>
<?php foreach ($news as $x):  ?>
<p><?php echo $x['title'];?></p>
<p><?php echo substr(strip_tags($x['text']),0,200);?></p>
<hr/>
<?php endforeach; ?> 
<?php echo $links;?>