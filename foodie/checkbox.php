<?php  
include ("../db.php");  
if (isset($_POST['reg_resto']))
{  
$checkbox1 = $_POST["option"];  
for ($i=0; $i<sizeof ($checkbox1);$i++) {  
$query="INSERT INTO restaurants (restaurant_type) VALUES ('".$checkboxl[$i]. "')";  
mysql_query($query) or die(mysql_error());  
}  
echo "Record is inserted";  

$checkbox2 = $_POST["service"];  
for ($v=0; $v<sizeof ($checkbox2);$i++) {  
$query="INSERT INTO restaurants (services) VALUES ('".$checkbox2[$v]. "')";  
mysql_query($query) or die(mysql_error());  
}  
echo "Record is inserted";  
}
?>  