<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd" >

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>Home Page</title>
	<link rel="stylesheet" href="../css/lab0yo.css" type="text/css"/>
	<link rel="stylesheet" href="../css/lab2.css" type="text/css"/>
</head>

<body>
    <div id = "Container">
        <div class = "Labs">
            <?php include '../ssi/SideMenu.php'; ?>
	</div>
        <div id = "Main">
            <div id = "Header">
               <?php include '../ssi/Header.php'; ?>
            </div>
            <div id = "LowerContent">
            	<?php include '../ssi/Calendar.php'; ?>
            </div>
	    <div id = "CR">
		<?php include '../ssi/CR.php'; ?>
            </div>
        </div>
    </div>
</body>
</html>