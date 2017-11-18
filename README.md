# ProtectedDB

Class for safe operation with MySQL. Protection against SQL injections and other attempts at hacking.

Example of using this class in code:
```php
<?php
require 'database_class.php';
$database = new DataBase("localhost", "root", "yourpassword", "yourdatabase");

# Example for select array with ID:
$id = 1;
$dat### a = $database->select("SELECT * FROM `table` WHERE `id` = {?}", [$id]);

# Example for select row with login:
$login = "MrKeliser";
$cell = $database->selectCell("SELECT `id` FROM `table` WHERE `login` = {?}", [$login]);
?>
```
