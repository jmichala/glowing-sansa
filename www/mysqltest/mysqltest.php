<?php

require("common.php");

echo "SHOW DATABASES: <br />";
$stmt=$db->prepare("SHOW DATABASES");
if ($stmt->execute())
{
$ar=$stmt->fetchall();
foreach($ar as $value)
{ //echo $value . "<br />";
foreach ($value as $value2)
{ echo $value2 . "<br />"; }
}
}
else
{ echo "Query failed"; }
echo "<br />";

echo "SHOW TABLES: <br />";
$stmt=$db->prepare("SHOW TABLES FROM $dbname");
if ($stmt->execute())
{
$ar=$stmt->fetchall();
foreach ($ar as $value)
{ //echo $value . "<br />"; 
foreach ($value as $value2)
{ echo $value2 . "<br />"; }
}
}
else
{ echo "Query failed."; }
echo "<br />";

echo "PRINT TABLE USERS: <br />";
$stmt=$db->prepare("SELECT * FROM users");
if ($stmt->execute())
{
$ar=$stmt->fetchall();
$a=0;
foreach($ar as $value)
{
if ($a==0)
{
$ak=array_keys($value);
foreach ($ak as $akv)
{ echo $akv . "\t"; }
echo "<br />";
$a=1;
}
foreach($value as $value2)
{ echo $value2 . "\t"; }
echo "<br />";
}
}
echo "<br />";

echo "DONE";

?>
