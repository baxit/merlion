<?php

echo "<h1>" . $info['title'] . "</h1>";
echo $info['text'];
echo anchor('news/delete/'.$info['id'], 'del');