<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table>
<?php 
foreach($talabalar as $b){
    echo $b['FIO']."<br/>";
    echo $b['date_birth']."<br/>";
}
?>
</table>    
</body>
</html>