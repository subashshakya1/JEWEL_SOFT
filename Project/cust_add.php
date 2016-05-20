<?php $title = "add customer";?>
<?php include("template/header.php");
include("template/session_start.php") ?>
<html>
<body>
    <form action="check_try.php" method="post" enctype="multipart/form-data">
        Customer name: <br/>
        <input type="text" name="cust_name"><br/>
        Address:<br/>
        <input type="text" name="address"><br/>
        Phone no.:
        <br/>
        <input type="text" name="ph_no"><br/>
        <input type="file" name="image" ><br/>
        <input type="submit" value="Add Customer">
    </form>
</body>
</html>