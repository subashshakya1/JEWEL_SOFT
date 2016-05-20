<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title><?php echo $title ?></title>
    <link href="css/styles.css" rel="stylesheet">

</head>
<body>
<div class="header-section">
    <div class="header">
        <div class="logo">
            <h1>Jewel Soft</h1>
        </div>
        <div class="menu">
            <ul>
                <li><a href="home.php" class="<?php echo $page == 'home' ? 'active' : '' ?>">Home</a></li>
                <li><a href="about.php" class="<?php echo $page == 'about' ? 'active' : '' ?>">About</a></li>
                <li><a href="contact.php" class="<?php echo $page == 'contact' ? 'active' : '' ?>">Contact</a></li>
                <li><a href="cust_add.php" class="<?php echo $page == 'add customer' ? 'active' : '' ?>">Add Customer</a></li>
                <li><a href="index.php">Logout</a></li>
            </ul>
        </div>
    </div>
</div>
