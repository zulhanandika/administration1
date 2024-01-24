<?php
$dalTableadministrationugmembers = array();
$dalTableadministrationugmembers["UserName"] = array("type"=>200,"varname"=>"UserName", "name" => "UserName", "autoInc" => "0");
$dalTableadministrationugmembers["GroupID"] = array("type"=>3,"varname"=>"GroupID", "name" => "GroupID", "autoInc" => "0");
$dalTableadministrationugmembers["Provider"] = array("type"=>200,"varname"=>"Provider", "name" => "Provider", "autoInc" => "0");
$dalTableadministrationugmembers["UserName"]["key"]=true;
$dalTableadministrationugmembers["GroupID"]["key"]=true;
$dalTableadministrationugmembers["Provider"]["key"]=true;

$dal_info["db_administration_at_localhost__administrationugmembers"] = &$dalTableadministrationugmembers;
?>