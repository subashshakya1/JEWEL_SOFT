<?php $title = "Home";
$page = "home"
?>
<?php include("template/header.php") ?>
<?php
session_start();
if($_SESSION['check'] != "true"){
    header('location:login.html');
}

?>
<div class="bannner-section">

    <div class="banner-title-section">
        <div class="banner-title">
            <div class="panel">

            </div>
            <div class="panel">

            </div>
            <div class="panel">
                <form action="profile.php" method="get">
                    <input name="id" type="text" size="15" placeholder="search by ID"/>
                    <input type="submit" name="submit" value="View Profile">
                </form>
            </div>
        </div>
    </div>

  <div class="clear"></div>
  <div class="banner-row">
    <div class="banner">
      <div class="panel"><img src="images/bill1.png" alt="image1"/></div>
      <div class="panel"><img src="images/trans.png" alt="image2" /></div>
      <div class="panel dot-bg2"><img src="images/cust.ico" alt="image3" /></div>
      <div class="clear"></div>
    </div>
    <div class="clear"></div>
  </div>
  <div class="banner-content">
    <div class="row">
      <div class="panel">
          <div class="controller">
        <button class="button"><a href="bill.php">Create Bill</a> </button>
          </div>
      </div>
      <div class="panel">
          <div class="controller">
              <button class="button"><a href="display_tran.php">Transactions</a> </button>
          </div>

      </div>
      <div class="panel dot-bg3">
          <div class="controller">
              <button class="button"><a href="display_cust.php">Customers</a> </button>
          </div>
      </div>
    </div>
    <div class="clear"></div>
  </div>
  <div class="clear"></div>
</div>
<!--------------banner-section----------->
<div class="page-section">
  <div class="page">
    <div class="right-section">
      <div class="panel">
        <div class="title">
          <h1>Advantages of Jewel Soft</h1>
        </div>
        <div class="content">
          <p>
              <ul>
                <li>
                    1. Easy to use.
                </li>
                <li>
                    2. Faster data entry.
                </li>
                <li>
                    3. Reliable data source.
                </li>
                <li>
                    4. Technological Advantage.
                </li>
              </ul>
          </p>
    </div>
    <!--------------------right-section------------>
  </div>
  <div class="clear"></div>
</div>

<?php include("template/footer.php") ?>