<?php
// page1.php

session_start();

echo 'this is page 1';

$_SESSION['username'] = '16222555';
$_SESSION['pw']   = '123456';

echo '<br /><a href="login.php">page 2</a>';

?>