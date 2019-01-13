<?php
require 'ToolkitService.php';

$db = 'connection string';
$user = 'username credential';
$pass = 'password credential';
$extension = 'ibm_db2';

try{
    $service = ToolkitService::getINstance($db, $user, $pass, $extension);
} catch (Exception $e){
    echo $e->getMessage();
    exit;
}