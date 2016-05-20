<?php
   $con=mysql_connect("localhost","root","root");
    if(!$con)
    {
        die("couldn't connect".mysql_error());
    }
    else{
        echo "Successful";
    }

    $select=mysql_select_db("jewel_soft",$con);

        $name =  $_POST["cust_name"];
        $address = $_POST["address"];
        $ph_no = $_POST["ph_no"];


        $target_dir= "img/";
        $fullpath = 'E:/UniServerZ/www/Project/';
    $target_file= $target_dir . basename($_FILES["image"]["name"]);
    $tmpname = $_FILES["image"]["tmp_name"];
    if(move_uploaded_file($tmpname, $fullpath . $target_file)){
        echo"The File".basename($_FILES["image"]["name"])."has been uploaded.";
    }
    else{
        die("Sorry, there was an error uploading your file.");
    }

    $image= $target_file;//$target_dir . basename($FILES["image"]["name"][$i],$imageFileType);
    echo $image;

    $sql = "insert into customer(cust_name, address, ph_no, image)values('$name','$address','$ph_no','$image')";
        mysql_query($sql,$con);

    mysql_close($con);
    header('location: display_cust.php');

?>