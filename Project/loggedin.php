<?php
session_start();
$_SESSION['check']="false";
$con=mysql_connect('localhost','root','root');
if(!mysql_select_db("jewel_soft",$con)){
    die("cannot connect".mysql_error());
}

$result=mysql_query("select username,password from owner");
while($row=mysql_fetch_array($result)){
    if((strcmp($row['username'],$_POST['uname'])==0) && (strcmp($row['password'],$_POST['password'])==0))
    {
        $_SESSION['check']="true";
        header('location:home.php');
    }
}
die("unauthorized user".mysql_error());