<?php
function call($controller, $action)
{
    require_once($controller . '.php');
    switch ($controller) {
        case 'controller':
            require_once('model.php');
            $controller = new controller();
            break;
    }
    $controller->{$action}();
}
call($controller, $action);
?>