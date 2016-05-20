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
	
$sql="insert into bill (bill_no, date, gold_rate, cust_name, prod_name, total, wage, jarti) VALUES ('$_POST[bill_no]','$_POST[date]','$_POST[rate]'
,'$_POST[cust_name]','$_POST[prod_name]','$_POST[total]','$_POST[wage]','$_POST[jarti]')";


if(!mysql_query($sql,$con)){
    die("error".mysql_error());
}
else {
    //echo " 1 bill record added";
}

$doinsert = 0;
$cid = $_POST[cust_id];
$sql = "select count(*) as cnt from customer where cust_id = $cid";
$result=@mysql_query($sql);
if(mysql_num_rows($result) == 0) {
    $doinsert = 1;
} else {
    while ($row = mysql_fetch_array($result)) {
        if ($row["cnt"] == 0) {
            $doinsert = 1;
        }
    }
}
//echo $doinsert;
if($doinsert==1) {
    $cus = "insert into customer (cust_id, cust_name, address, ph_no) VALUES ('$_POST[cust_id]','$_POST[cust_name]','$_POST[address]','$_POST[ph_no]')";

    if (!mysql_query($cus, $con)) {
        die("error" . mysql_error());
    }
    else{
        //echo "Successful";
    }
}

header('location:display_tran.php');
?>






