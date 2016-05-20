<?php
$con = mysql_connect("localhost", "root", "root");
if (!$con) {
    die("couldn't connect" . mysql_error());
}
mysql_select_db("jewel_soft", $con);
$sql = "select * from customer";
$result1 = mysql_query($sql);
while ($row1 = mysql_fetch_array($result1)) {

    $name = $row1[cust_name];
    $address = $row1[address];
    $ph = $row1[ph_no];
    $image = $row1[image];
}
echo $name;
echo $address;
echo $ph;

    ?>
<html>
<body>
 <img height="120" width="120" src="<?php echo $image; ?>" alt=""/>
</body>
</html>