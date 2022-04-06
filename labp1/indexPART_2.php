<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd" >

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <link rel="stylesheet" href="../css/pracCSS.css" type="text/css"/>
    <div id = "Container">
        <div id = "main">
        <div id = "top">
            <h3> Coupon Distribution Results </h3>
            <a href="index.html"> Lab Practicum 1 Part 1</a>
            <a href="indexPART_2.html"> Lab Practicum 1 Part 2</a><br>
        </div>
        <div id = "content">
            <?php include "../ssi/part_2.php"?>
            </form>
        </div>
		<?php echo "This page was Last modified on ". date("d F Y h:i:s ",getlastmod()); ?>
        </div>
    </div>
</head>