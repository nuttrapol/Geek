<?php
require_once ('connect.php');
session_start();
$PID=$_GET['PID'];
$q = "SELECT * FROM patient WHERE Patient_ID = ".$PID;
$result = $mysqli->query($q);
$row = $result->fetch_array();
$pName = $row['Patient_Fname']." ".$row['Patient_Lname'];
$pGender = $row['Patient_Gender'];
$pDOB = $row['Patient_Birth'];
$pAddr = $row['Patient_Address'];
?>
<html>
	<head>
		<title>Record New Patient</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
	</head>
	<body>

		<!-- Header -->
			<header id="header" >
				<div class="logo"><a href="index.php">Hospital Collaboration Resource <i class="fas fa-hospital"></i></a></div>
				<a href="#menu" class="toggle"><span>Menu</span></a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.php">Home</a></li>
					<li><a href="">Logout</a></li>
				</ul>
            </nav>
        <!-- Footer -->
        <footer id="footer" class="wrapper">
            <div class="inner">
                <section>
                    <div class="box">
                        <div class="content">
                            <h2 class="align-center">Record New Patient</h2>
                            <hr />
                            <form action="#" method="post">
                                <div class="field half first">
                                    <label for="name">Record Name</label>
                                    <input name="name" id="name" type="text" placeholder="Record Name">
                                </div>
                                <div class="field half first">
                                    <label for="name">Patient Name</label>
                                    <h3><?php echo $pName; ?></h3>
                                </div>
                                <div class="field half first">
                                    <label for="name">Weight</label>
                                    <input name="name" id="name" type="text" placeholder="Weight">
                                </div>
                                <div class="field half first">
                                    <label for="name">Height</label>
                                    <input name="name" id="name" type="text" placeholder="Height">
                                </div>
                                <div class="field half first">
                                    <label for="name">Description</label>
                                    <textarea name="demo-message" id="demo-message" placeholder="Enter your message" rows="6"></textarea>
                                </div>
                                <div class="field half first">
                                    <label for="name">Presciption</label>
                                    <textarea name="demo-message" id="demo-message" placeholder="Enter your message" rows="6"></textarea>
                                </div>
                                <div class="field half first">
                                    <label for="name">Doctor Name</label>
                                    <h3>Phayut Janocha</h3>
                                </div>
                                <ul class="actions align-center">
                                    <li>
                                        <input  value="Submit" class="button special" type="submit">
                                    </li>
                                </ul>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </footer>

        <!-- Scripts -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/jquery.scrolly.min.js"></script>
        <script src="assets/js/jquery.scrollex.min.js"></script>
        <script src="assets/js/skel.min.js"></script>
        <script src="assets/js/util.js"></script>
        <script src="assets/js/main.js"></script>

    </body>

</html>