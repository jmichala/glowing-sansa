<?php

$string=file_get_contents("curriculum.json");
$json_a=json_decode($string, true);
foreach ($json_a as $k => $v)
{
echo $k, " : <br />";
foreach ($v as $k2 => $v2)
{
echo "--- ", $k2, " : ", $v2, "<br />";
}
}
