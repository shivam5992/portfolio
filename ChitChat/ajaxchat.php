<?php

/**
 * Copyright information
 * @author Shivam Bansal <shivam5992@gmail.com>
 * @copyright Copyright (c) 2013, Shivam Bansal
 * @version 1.0 
 */
 
require 'init.php';
if(isset($_POST['method']) === true && empty($_POST['method']) === false){
	$chat = new Chat();
	$method = trim($_POST['method']);
	if($method === 'fetch')
	{
		$messages = $chat->fetchMessages();
		if(empty($messages) === true){
		echo 'No Messages !!!!';
		}
		else{
		foreach ($messages as $message){
		?>

		<div class="message" align="left" >
		
		<div id="name">

			<?php
				$x = explode(" ",$message['time']);
				$y = explode(":",$x[1]);

				$z = explode("-",$x[0]);


			 	echo "<font color=red>",$z[2],"/",$z[1],",</font><font color='#E01B5D'>",$y[0],":",$y[1],"</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; ?>

		<a href=#>
		<?php echo $message['UserName']; ?></a> &nbsp;:
		</div>

		<div id="name_message">
		<?php echo nl2br($message['message']); ?>
		</div>

		</div>
		<?php
		}
		}
	}
	else if($method === 'throw' && isset($_POST['message']) === true){
		$message = trim($_POST['message']);
		if(empty($message) === false){
		$chat->throwMessage($_SESSION['user'],$message);
		}
}
}
?>
