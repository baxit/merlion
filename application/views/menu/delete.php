<?php

echo "<h1>" . $info['title'] . "</h1>";
echo $info['text'];
echo anchor('menu/delete/'.$info['id'], 'del');