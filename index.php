<?php
try
{
	$params = $_REQUEST;
        
        echo $controller = ucfirst(strtolower(trim($params['controller'])));
        $action = strtolower(trim($params['action']))."Action";

if(file_exists("controller/{$controller}.php"))
{
include_once "controller/{$controller}.php";
}
else
{
throw new Exception('Controller is invalid.');
}

$controller = new $controller($params);
if(method_exists($controller, $action)===false)
{
throw new Exception('Action is invalid.');
}
$return = $controller->$action();
if($return !== FALSE)
{
$result["data"] = $return;
$result["success"] = TRUE;
}
else
{
$result["data"] =$return;
$result["success"] = FALSE;
}
}
catch( Exception $e ) {
//catch any exceptions and report the problem
$result = array();
$result['success'] = false;
$result['errormsg'] = $e->getMessage();
}
//echo the result of the API call
echo json_encode($result);
exit();
