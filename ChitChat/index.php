<?php

/**
 * Copyright information
 * @author Shivam Bansal <shivam5992@gmail.com>
 * @copyright Copyright (c) 2013, Shivam Bansal
 * @version 1.0 
 */

include "dbconnection.php";
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>  Ajax Chat </title>
		<meta name="description" content="Simple chat in Ajax and Php" />
		<meta name="keywords" content="Login, Username, Web" />
		<meta name="author" content="Shivam Bansal" />
		<link rel="stylesheet" href= "css/styles.css">
		<link rel="stylesheet" type="text/css" href="css/component.css" />
	</head>

<body>
	<header>
		<h1 align="center">Chat Application <br>Php, Ajax, Javascript<a href="index.php?truncate=true" style="text-decoration:none">,</a> Mysql</h1>
	</header>

	<form action="index.php" class="cbp-mc-form" >
		<div class="cbp-mc-column" align="center">
			<?php
			if(isset($_GET["UserName"]))
			{
				$u = $_GET['UserName'];
				$myquery="INSERT INTO `users` (`UserName`) values('$u')";
				$result=mysql_query($myquery);
				session_start();
				$result = mysql_query("select UserId from `users` where `UserName` = '$u' ");
				if($result === FALSE) {
    				die(mysql_error()); 
				}
				while($row = mysql_fetch_array($result)){
	   			$_SESSION['user'] = $row[0];
    				}
				?>
				<br>
				<div class="chat">
				<div class="messages" id="message_div">
				</div>
				<textarea class="entry" placeholder="Use Shift+Enter for new line and Enter for send"></textarea>
				<div>a</div>
				<div>b</div>
				<div>c</div>




				</div>
				<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
				<script type="text/javascript" src="js/chat.js"></script>
				<?php
				}
				else{
				?>
				<form action="index.php">
				<br><br><br><br><br>
				<label for="first_name">UserName</label><input type="text" name="UserName" id="UserId" autocomplete="off" required>
				<div class="cbp-mc-submit-wrap"><input class="cbp-mc-submit" type="submit" value="Submit" /></div>
				</form>
				<?php	
				}
				?>
				</form>
			
	</div>
			
			<?php
				if(isset($_GET['truncate'])){
					$myquery="truncate chat";
					$result=mysql_query($myquery); 
					}
				?>
</body>
