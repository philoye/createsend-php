<?php
require_once "../../csrest_transactional_basicemail.php";

$auth = array("api_key" => "Your API Key");
$wrap = new CS_REST_Transactional_BasicEmail($auth);

echo "Get the list of basic groups...\n";
$result = $wrap->groups();
var_dump($result->response);

