<?php $title = "Bill Page" ?>
<?php include("template/header.php");
include("template/session_start.php") ?>
<?php
class Customer {
    var $id;
    var $name;
    var $address;
    var $phone;
}
$customer = new Customer();
if(isset($_GET["cid"])){
    $cid = $_GET["cid"];
    $sql = "Select * from customer where cust_id = $cid";

    $con=@mysql_connect("localhost","root","root");
    $selected=@mysql_select_db("jewel_soft",$con);
    $result=@mysql_query($sql);
    while($row=mysql_fetch_array($result)) {
        $customer->id = $row["cust_id"];
        $customer->name = $row["cust_name"];
        $customer->address = $row["address"];
        $customer->phone = $row["ph_no"];
    }
}
?>

<script type="application/javascript">
    function search(){
        window.location.href = "bill.php?cid=" + document.getElementById("cid").value;
    }
    function validateForm(){
        var a=document.bill.cust_name.value;
        var b=document.bill.prod_name.value;
        var c=document.bill.weight.value;
        var d=document.bill.jarti.value;
        var e=document.bill.rate.value;
        var f=document.bill.wage.value;
        var g=document.bill.total.value;




        if(a==null||a==""){
            alert("Customer name must be filled out!");
            return false;
        }

        if(b==null||b==""){
            alert("Product name must be filled out!");
            return false;
        }
        if(c==null||c==""){
            alert("Weight must be filled out!");
            return false;
        }
        if(d==null||d==""){
            alert("Jarti must be filled out!");
            return false;
        }
        if(e==null||e==""){
            alert("Rate must be filled out!");
            return false;
        }
        if(f==null||f==""){
            alert("Wage must be filled out!");
            return false;
        }
        if(g==null||g==""){
            alert("Total must be filled out!");
            return false;
        }
        if(c<d){
            alert("Jarti cannot be greater than weight");
            return false;
        }


    }
    function calculate(form, callingField) {
        if (callingField != "result") {
            /*if(form.square.checked) {
                form.result.value = form.weight.value - form.jarti.value;
            }
            else {	form.entry.value = form.result.value-2;	}
        }
        else {*/
            //if(form.square.checked) {
                form.result.value = parseFloat(form.weight.value || 0)  + parseFloat( form.jarti.value || 0) * parseFloat(form.rate.value || 0) + parseFloat(form.wage.value || 0);
                form.total.value = parseFloat(form.result.value || 0) - parseFloat(form.dis.value || 0);
                /*var x= document.getElementById("val1")+document.getElementById("val2");
                 form.result.value = var x;*/
            //}
            //else {	form.result.value = form.weight.value + 2;	}
        }
    }
</script>

<form method="post" name="bill" action="insert.php" onsubmit="return validateForm()">
    <div class="right">
        <table>
            <tr>
                <td>Date</td>
                <td><input type="date" name="date"></td>
            </tr>
        </table>
    </div>
    <div class="left">
        Customer ID:<br/>
        <input type="text" name="cust_id" id="cid" value="<?php echo $customer->id ?>">
        <input type="button" value="Search" onclick="search()">
        Customer name: <br/>
        <input type="text" name="cust_name" value="<?php echo $customer->name ?>"><br/>
        Address:<br/>
        <input type="text" name="address" value="<?php echo $customer->address ?>"><br/>
        Phone no.:
        <br/>
        <input type="text" name="ph_no" value="<?php echo $customer->phone ?>"><br/>
    </div>
    <table border="1" id="bill">
        <caption><B>Bill</B></caption>
        <tr>
            <th>S.N.</th>
            <th>Product Name</th>
            <th>Wt. (in tola)</th>
            <th>Jarti</th>
            <th>Rate</th>
            <th>Wage</th>
            <th>Total</th>
        </tr>
        <tr height="180px">
            <td><input type="text" size="3"> </td>
            <td><input type="text" name="prod_name" size="40"></td>
            <td><input type="text" name="weight" size="10" onChange="calculate(this.form, this.name);"></td>
            <td><input type="text" name="jarti" size="10" onChange="calculate(this.form, this.name);"></td>
            <td><input type="text" name="rate" size="15" onChange="calculate(this.form, this.name);"></td>
            <td><input type="text" name="wage" size="15" onChange="calculate(this.form, this.name);">
            </td>
            <td><input type='text' size="15" onChange="calculate(this.form, this.name);" name="result">

            </td>
        </tr>
        <tr>
            <td colspan="5"></td>
            <td bgcolor="#E8DA83" >Discount</td>
            <td><input type="text" name="dis" size="15" onChange="calculate(this.form, this.name);"></td>
        </tr>
        <tr>
            <td colspan="5"></td>
            <td bgcolor="#E8DA83">Grand Total</td>
            <td><input type="text" name="total" size="15" onChange="calculate(this.form, this.name);"></td>
        </tr>
    </table>
   <input type="submit" value="Save Bill" id="save_bill">

</form>
<?php include("template/footer.php") ?>