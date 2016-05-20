<?php $title = "Profile";
?>
<?php include("template/header.php") ?>
<?php
session_start();
if($_SESSION['check'] != "true"){
    header('location:login.html');
}

?>
<html>
<head>
    <title></title>
</head>
<body>
<?php
// check for a form submission
if(isset($_GET['id'])){
    $cid = $_GET['id'];
    mysql_connect("localhost","root","root") or die("Could not connect to server");
    mysql_select_db("jewel_soft") or die ("That database could be found!");
    $userquery = mysql_query("select * from customer where cust_id='$cid'") or die ("The query could not be completed.Please try again");
    if (mysql_num_rows($userquery)!=1){
        die ("That customer ID could not be found!");
    }
    while($row= mysql_fetch_array($userquery,MYSQL_ASSOC)){
        $userid = $row['cust_id'];
        $name = $row['cust_name'];
        $address = $row['address'];
        $phone = $row['ph_no'];
        $image = $row['image'];
    }
    ?>
    <table border="1" class="table1">
        <img id="imag" src="<?php echo $image; ?>" alt="image"/>
        <tr><td>Customer Id:</td><td><?php echo $userid ;?></td></tr>
        <tr><td>Name:</td><td><?php echo $name ;?></td></tr>
        <tr><td>Address:</td><td><?php echo $address ;?></td></tr>
        <tr><td>Phone no:</td><td><?php echo "$phone" ;?></td></tr>

    </table>

<?php
} else die ("You need to specify a username!");
?>
</body>
</html>
<?php include("template/footer.php") ?>