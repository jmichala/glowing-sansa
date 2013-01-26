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
{ echo $value . "<br />"; }
}
else
{ echo "Query failed."; }
echo "<br />";

echo "DONE";

?>
