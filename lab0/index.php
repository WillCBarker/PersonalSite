<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd" >

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>Home Page</title>
	<link rel="stylesheet" href="../css/lab0yo.css" type="text/css"/>
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
            <div id = "LeftMain">
                <div id = "Summary">
                    <h3>Summary </h3>
                    <ul>
                        <li><b>Personal</b></li>
                        <ol>
                        <li>Born in Richmond, VA & raised in Williamsburg, VA</li>
                        <li>My family is German, having moved to America a few decades ago</li>
                        <li>Some hobbies of mine include: boxing, reading & electric guitar</li>
                        </ol>
                        <li><b>Academic</b></li>
                        <ol>
                            <li>2019 Warhill High School graduate </li>
                            <li>Current Junior at GMU majoring in IT with a concentration in database technologies and programming</li>
                        </ol>            
                    </ul>
                </div> 
                <div id = "Professional">
                    <h3>Professional Details</h3>
                    <ul>                    
                       <li> Currently looking for a software development internship summer 2022</li>
                    </ul>
                </div>
            </div>
            <div id = "RightMain">
                <div id = "Image">
                    <img src="../images/yo.jpg" alt="Headshot" width="250">
                </div>
            </div>
            </div>
	    <div id = "CR">
		<?php include '../ssi/CR.php'; ?>
            </div>
        </div>
    </div>
</body>
</html>