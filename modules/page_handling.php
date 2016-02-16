<?php
if (isset($_GET['page'])) {
	$requested_page = $_GET['page'];
	$allowed_sector = $allowed_pages;
	if (!in_array($requested_page, $allowed_sector)) {
		include_once '404.php';
	} else {
		if (file_exists($requested_page.'.php')) {
			//move these new notes to new file, service-record.php
			//change links ?sr=## to ?page=sr&sr=##
			//if sr is set, if int check db. if return not found
			//  then bring up service record log
			// if sr=all => table all records with filtering
			// if sr=new => start new blank record
			include_once $requested_page.'.php';
		} else {
			include_once '404.php';
		}
	}
} else { 
	include_once 'dashboard.php'; 
} ?>