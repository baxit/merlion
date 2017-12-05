<?php 
session_start();
$mysqli=mysqli_connect('Localhost','root',"",'di');
$login= $_POST['login'];
$password=md5($_POST['pass']);
//echo "SELECT*FROM users WHERE username='$login' AND password='$password'";
$q=mysqli_query($mysqli, "SELECT*FROM users WHERE username='$login' AND password='$password'");
if(mysqli_num_rows($q)>0){
    $_SESSION['username']=$_POST['login'];
    header ('location:index.php');
} else {
    echo "логин или пароль не верны";
}

/*if($_POST['login']=='Baxit' && $_POST['pass']='123'){
    $_SESSION['username']=$_POST['login'];
    header ('location:index.php');
} else {
    echo "логин или пароль не верны";
} */
