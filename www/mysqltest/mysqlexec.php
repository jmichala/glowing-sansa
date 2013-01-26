<?php

require("common.php");
/*$query1="CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` char(64) COLLATE utf8_unicode_ci NOT NULL,
  `salt` char(16) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;";*/
$query2="ALTER TABLE `users` ADD (
 `lesson` int(11) NOT NULL DEFAULT 0
)";
$stmt=$db->prepare($query2);
if ($stmt->execute())
{
$ar=$stmt->fetchall();
foreach ($ar as $value)
{echo $value . "<br />";}
}
else
{ echo "Query Failed"; }

?>
