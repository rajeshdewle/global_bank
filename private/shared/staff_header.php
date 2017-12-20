<?php 
    if (!isset($page_title)) { $page_title = "Staff Area"; }
 ?>
<!DOCTYPE html>
<html>
    <head>
        <title>GBI - <?php echo $page_title; ?></title>
        <link rel="stylesheet" type="text/css" href="<?php echo url_for('/stylesheets/staff.css'); ?>">
    </head>
    <body>
        <header>
            <h1>Staff Area</h1>
        </header>
        <navigation>
            <ul>
                <li><a href="<?php echo url_for('/staff/index.php'); ?>">Menu</a></li>
            </ul>
        </navigation>