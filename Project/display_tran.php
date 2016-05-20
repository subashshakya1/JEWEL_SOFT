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
    <form action="display_tran.php" method="post">
        <input type="text" name="search" placeholder="search here" value="<?php echo $searchq; ?>"/>
        <input type="submit" value=">>"  />
    </form>
    </body>
    </html>


<?php
$con=@mysql_connect("localhost","root","root");
if(!$con){
    //echo " not connected";

}
else
    //echo"connected";
    $selected=@mysql_select_db("jewel_soft",$con);

if(!$selected){
    //echo " not selected";
}
else
    //echo"selected";

    $per_page = 20; //per page result
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

$sql="SELECT * from bill";
$sqli="SELECT * from bill LIMIT $start,$per_page";

$num_row = mysql_num_rows(mysql_query($sql));
$num_page = ceil($num_row/$per_page);
$result= mysql_query($sqli);


echo "<table border='1' id='bill'>
    <caption>Transactions</caption>
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

if(isset($_POST['search']))
{
    $check = 1;
    $searchq = $_POST['search'];
    $query1 = "SELECT * FROM bill WHERE cust_name LIKE '%" . $searchq . "%'" ;
    $searchresult = mysql_query($query1);
    if (mysql_num_rows($searchresult) > 0)
    {
        while($row = mysql_fetch_array($searchresult))
        {
            echo "<td>" .$row['bill_no']."</td>";
            echo "<td>" .$row['date']."</td>";
            echo "<td>" .$row['cust_name']."</td>";
            echo "<td>" .$row['prod_name']."</td>";
            echo "<td>" .$row['gold_rate']."</td>";
            echo "<td>" .$row['wage']."</td>";
            echo "<td>" .$row['jarti']."</td>";
            echo "<td>" .$row['total']."</td>";
            echo"</tr>";
            $check=0;
        }
    }
    if($check == 1){ echo "<tr><td colspan='4'>No records found</td></tr>"; }

    echo "</table>";

}

else {
    if (mysql_num_rows($result) > 0) {
        while ($row = mysql_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row['bill_no'] . "</td>";
            echo "<td>" . $row['date'] . "</td>";
            echo "<td>" . $row['cust_name'] . "</td>";
            echo "<td>" . $row['prod_name'] . "</td>";
            echo "<td>" . $row['gold_rate'] . "</td>";
            echo "<td>" . $row['wage'] . "</td>";
            echo "<td>" . $row['jarti'] . "</td>";
            echo "<td>" . $row['total'] . "</td>";
            echo "</tr>";
        }
    }
    else {
        echo "<tr><td>No records found</td></tr>";
    }
    echo "</table>";


    $prev = $page - 1;
    $next = $page + 1;
    echo "<hr>";
    if ($prev > 0)
        echo "<a href='?page=$prev'> Prev</a>";

    $number = 1;
    for ($number; $number <= $num_page; $number = $number + 1) {
        if ($page == $number) {
            echo "<b>[$number]</b>";
        } else {
            echo "<a href='?page=$number'>$number </a>";
        }
    }

    if($next <  $num_page + 1)
        echo "<a href='?page=$next'> Next </a>";
}


include("template/footer.php");

mysql_close($con);
?>