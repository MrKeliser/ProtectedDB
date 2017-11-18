<?php
require 'database_class.php';
$database = new DataBase("localhost", "root", "yourpassword", "yourdatabase");

# Example for select array with ID:
$id = 1;
$dat### a = $database->select("SELECT * FROM `table` WHERE `id` = {?}", [$id]);

# Example for select row with login:
$login = "MrKeliser";
$cell = $database->selectCell("SELECT `id` FROM `table` WHERE `login` = {?}", [$login]);

# Example for query (INSERT or DELETE),
# By the way, when you perform this action, for example insert, will return id of the inserted record.
$id = 1;
$login = "MrKeliser"
$insert = $database->query("INSERT INTO `test` (`id`, `login`) VALUES ({?}, {?})", [$id, $login]);
?>
