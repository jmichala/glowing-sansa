<?php

require("common.php");
$query="";
$stmt=$db->prepare(query);
if ($stmt->execute())
{
$ar=$stmt->fetchall();
foreach ($ar as $value)
{echo $value . "<br />";}
}
else
{ echo "Query Failed"; }

?>
