<?php
session_start ();




if(isset($_GET['logout'])) {
    session_destroy ();
	echo '<meta http-equiv="refresh" content="0;URL=index.php">';
		}
		
		
		
		
		if(isset($_GET['login'])) {




		}
		
		?>