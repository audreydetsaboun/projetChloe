<?php 
	include('views/header.inc.php'); 
	
	$page="";
	if(isset($_GET['page'])) {
		$page = $_GET['page'];
	}

	switch ($page) {
		case "clients":
			include('views/viewClients.php');
			break;
		case "mailbox":
			include('views/viewMailbox.php');
			break;
		default:
			include('views/viewAccueil.php');
	}
	
	include('views/footer.inc.php'); 	
?>