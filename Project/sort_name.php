<?php $title = "Transactions";?>
<?php include("template/header.php");
include("template/session_start.php") ?>
<html>
<head><title></title></head>
<body>
<form action="sort_desc.php">
    <input type="submit" value="Sort in descending order">
</form>
<form action="sort_name.php">
    <input type="submit" value="Sort alphabetically">
</form>
</body>
</html>

<?php
$con=mysql_connect('localhost','root','root');
if(!mysql_select_db("jewel_soft",$con)){
    die("cannot connect".mysql_error());
}

$result=mysql_query("SELECT * FROM `bill` ORDER BY cust_name");
echo "<table border='1' id='bill'>

        <tr>
            <th>Bill no.</th>
            <th>Date</th>
            <th>Name of Customer</th>
            <th>Product name</th>
            <th>Rate</th>
            <th>Goldsmith's wage</th>
            <th>Jarti</th>
            <th>Total</th>
        </tr>";
while($row=mysql_fetch_array($result)){
    echo "<tr>";
    echo "<td>".$row['bill_no']."</td>";
    echo "<td>".$row['date']."</td>";
    echo "<td>".$row['cust_name']."</td>";
    echo "<td>".$row['prod_name']."</td>";
    echo "<td>".$row['rate']."</td>";
    echo "<td>".$row['wage']."</td>";
    echo "<td>".$row['jarti']."</td>";
    echo "<td>".$row['total']."</td>";
    echo "</tr>";
}
echo "</table>";
include("template/footer.php");

mysql_close($con);
?>