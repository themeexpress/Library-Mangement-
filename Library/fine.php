<?php 
echo $date = date("Y-m-d");
echo "<br/>";
require 'newcon.php'; 
$query=mysql_query("select * from borrowers");
$row=mysql_fetch_array($query);
echo $takendate=$row['date_of_taken'];
echo "<br/>";

/*
function dateDifference($differenceFormat = '%a' )
{
	 $date = date("Y-m-d");
require 'newcon.php'; 
$query=mysql_query("select * from borrowers");
$row=mysql_fetch_array($query);
 $takendate=$row['date_of_taken'];

    $datetime1 = date_create($date);
    $datetime2 = date_create($takendate);
   
    $interval = date_diff($datetime1, $datetime2);
   
    echo $interval->format($differenceFormat);    
   
}

echo "<br/>";
//dateDifference();
*/

$date1=date_create("2013-03-15");
$date2=date_create("2013-12-12");
$diff=date_diff($date1,$date2);
echo $diff->format("%R%a days");
echo "<br/>";
$date1=date_create($date);
$date2=date_create($takendate);
$diff=date_diff($date1,$date2);
echo $diff->format("%R%a days");



   
?>