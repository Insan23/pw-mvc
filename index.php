<?php
if (isset($_GET['c']) && isset($_GET['f'])) {
    $controller = $_GET['c'];
    $action = $_GET['f'];
} else {
    $controller = 'controller';
    $action = 'home';
}
require_once('route.php');
?>
