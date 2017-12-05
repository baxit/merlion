<!DOCTYPE html>
<?php
$mysqli=mysqli_connect('Localhost','root',"",'di');
?>
<html lang="en">
<head>
<style>
    .menu li{
        list-style:none;
        float: left;
    }
    .menu li a{
        padding: 10px 15px;
        text-decoration: none;
        text-transform: uppercase;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        font-size: 1.2em;
        color: #000000;
        background-color: #14D8B7 ;
        text-shadow: 1px 1px 1px white;
        transition: all 1s linear;
    }
    .menu li a:hover{
        background-color: #EB1919;
        color: #FFFFFF;
        transition: all 0.5s linear;
    }
    </style>
    <script src="js/jquery.js"></script>
    <script src="js/ckeditor/ckeditor.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ul class="menu">
    <li> <a href="login.php">Войти</a></li>
    <li> <a href="logout.php">Выйти</a></li>
    <li> <a href="add_form.php">Добавить новости</a></li>
    </ul>
    <br/>
    <br/>

