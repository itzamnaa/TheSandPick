<?php
	function getConection(){
		$server = "localhost";
    	$usuario = "root";
    	$pass = "hola";
    	$db = "tienda";
    	$con =  mysql_connect($server,$usuario,$pass);
    	mysql_select_db($db);
    	return $con;
	}

	function insertQuery($query){
		$con=getConection();
    	if (!$con) {
    		die('No pudo conectarse: ' . mysql_error());
    	}
    	$result = mysql_query($query);
    	if (!$result) {
    		die('Error:'.mysql_error());
    	}
    	mysql_free_result($result);
    	mysql_close($con);
	}

	function deleteQuery($query){
		$con=getConection();
		if (!$con) {
    		die('No pudo conectarse: ' . mysql_error());
    	}
    	$result = mysql_query($query);
    	if (!$result) {
    		die('Error:'.mysql_error());
    	}
    	mysql_free_result($result);
    	mysql_close($con);
	}

	function getQueryResult($query){
		$con=getConection();
		if (!$con) {
    		die('No pudo conectarse: ' . mysql_error());
    	}
    	$result = mysql_query($query);
    	if (!$result) {
    		die('Error:'.mysql_error());
    	}
    	return $result;
	}

	function getSingleQueryResult($query){
		$con=getConection();
		if (!$con) {
    		die('No pudo conectarse: ' . mysql_error());
    	}
    	$result = mysql_query($query);
    	if (!$result) {
    		die('Error:'.mysql_error());
    	}
    	$ret = mysql_result($result, 0, 0);
    	mysql_free_result($result);
    	mysql_close($con);
    	return $ret;
	}
?>