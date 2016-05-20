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

    $cus = "insert into customer (cust_name, address, ph_no) VALUES ('$_POST[cust_name]','$_POST[address]','$_POST[ph_no]')";
if (!mysql_query($cus, $con)) {
    die("error" . mysql_error());
}
else{
    echo "Successful";
}
?>