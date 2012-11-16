<?php 

$host = "ec2-54-243-93-37.compute-1.amazonaws.com:5432"; 
$user = "nfannucmgavuaw"; 
$pass = "dtTXZ58LPKTVRupz6rvOu4ZdiQ"; 
$db = "d61mf9vhkn48ck"; 

$con = pg_connect("host=$host dbname=$db user=$user password=$pass")
    or die ("Could not connect to server\n"); 

$query = "SELECT VERSION()"; 
$rs = pg_query($con, $query) or die("Cannot execute query: $query\n"); 
$row = pg_fetch_row($rs);

echo $row[0] . "\n";

pg_close($con); 

?>