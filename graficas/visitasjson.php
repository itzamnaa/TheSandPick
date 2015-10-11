<?php
$query="select concat ('Date.UTC(',year(time),',',month(time),',',day(time),'),',count(*)) from visit";
        $server = "localhost";
        $usuario = "root";
        $pass = "root";
        $db = "tienda";
        $con =  mysql_connect($server,$usuario,$pass);
        mysql_select_db($db);
        if (!$con) {
            die('No pudo conectarse: ' . mysql_error());
        }
        $result = mysql_query($query);
        if (!$result) {
            die('Error:'.mysql_error());
        }
        $rows = array();
        while($r = mysql_fetch_array($result)) 
            {
                $row[0] = $r[0];
                array_push($rows,$row);
            }
    //print json_encode($rows, JSON_PRETTY_PRINT);
    $str = json_encode($rows, JSON_NUMERIC_CHECK); 
    $str = str_replace('"', "",$str);
    echo $str;
    mysql_free_result($result);
    mysql_close($con);
?>