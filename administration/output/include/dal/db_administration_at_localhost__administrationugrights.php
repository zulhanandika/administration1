<?php
$dalTableadministrationugrights = array();
$dalTableadministrationugrights["TableName"] = array("type"=>200,"varname"=>"TableName", "name" => "TableName", "autoInc" => "0");
$dalTableadministrationugrights["GroupID"] = array("type"=>3,"varname"=>"GroupID", "name" => "GroupID", "autoInc" => "0");
$dalTableadministrationugrights["AccessMask"] = array("type"=>200,"varname"=>"AccessMask", "name" => "AccessMask", "autoInc" => "0");
$dalTableadministrationugrights["Page"] = array("type"=>201,"varname"=>"Page", "name" => "Page", "autoInc" => "0");
$dalTableadministrationugrights["TableName"]["key"]=true;
$dalTableadministrationugrights["GroupID"]["key"]=true;

$dal_info["db_administration_at_localhost__administrationugrights"] = &$dalTableadministrationugrights;
?>