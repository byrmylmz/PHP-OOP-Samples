<?php
/**
 * https://www.php.net/manual/en/function.method-exists.php
 */
$directory = new Directory('.');

var_dump(method_exists($directory,'read'));


?>