<?php
	$db = "(DESCRIPTION =
			(ADDRESS = (PROTOCOL = TCP)(HOST = oracle.iut-blagnac.fr)(PORT = 1521))
			(CONNECT_DATA =
			  (SERVER = DEDICATED)
			  (SID = db11g)
			)
		  )" ;
	$connect = oci_connect("SAEBD10", "videofest", $db);
	
	// si la connexion a échoué, on affiche le message d'erreur
	if (!$connect) {
		$e = oci_error();
		trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
	}
?>