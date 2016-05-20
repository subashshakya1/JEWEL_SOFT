<?php $title = "Customers";?>
<?php include("template/header.php");
include("template/session_start.php"); ?>
<?php
$con=@mysql_connect("localhost","root","root");
if(!$con){
    //echo " not connected";

}
else
    //echo "connected";
    $selected=@mysql_select_db("jewel_soft",$con);

if(!$selected){
    //echo " not selected";
}
else
    //echo"selected";

    $per_page = 10; //per page result
if(!isset($_GET['page']))
{
    $page = 1;  //current page
}
else
{
    $page = $_GET['page'];
}
if($page<=1)
    $start = 0; // staring row
else
    $start = $page * $per_page - $per_page;

$sql="SELECT * from customer";
$sqli="SELECT * from customer LIMIT $start,$per_page";

$num_row = mysql_num_rows(mysql_query($sql));
$num_page = ceil($num_row/$per_page);
$result= mysql_query($sqli);

echo "<table border='1' id='bill'>
    <caption>Customers</caption>
        <tr>
            <th>Customer ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>Phone no.</th>
        </tr>";
if(mysql_num_rows($result) > 0) {
    while ($row = mysql_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['cust_id'] . "</td>";
        echo "<td>" . $row['cust_name'] . "</td>";
        echo "<td>" . $row['address'] . "</td>";
        echo "<td>" . $row['ph_no'] . "</td>";
        echo "</tr>";
    }
}
else{
    echo "<tr><td>No records found</td></tr>";
}
echo "</table>";

$prev = $page - 1;
$next = $page + 1;
echo "<hr>";
if($prev >0)
    echo "<a href='?page=$prev'> Prev</a>";

$number=1;
for($number; $number<=$num_page ; $number=$number+1)
{
    if($page == $number)
    {
        echo "<b>[$number]</b>";
    }
    else
    {
        echo "<a href='?page=$number'>$number </a>";
    }
}

if($next <  $num_page + 1)
    echo "<a href='?page=$next'> Next </a>";

include("template/footer.php");

mysql_close($con);
?>