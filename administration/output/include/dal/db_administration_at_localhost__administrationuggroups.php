<?php
$dalTableadministrationuggroups = array();
$dalTableadministrationuggroups["GroupID"] = array("type"=>3,"varname"=>"GroupID", "name" => "GroupID", "autoInc" => "1");
$dalTableadministrationuggroups["Label"] = array("type"=>200,"varname"=>"Label", "name" => "Label", "autoInc" => "0");
$dalTableadministrationuggroups["Provider"] = array("type"=>200,"varname"=>"Provider", "name" => "Provider", "autoInc" => "0");
$dalTableadministrationuggroups["Comment"] = array("type"=>201,"varname"=>"Comment", "name" => "Comment", "autoInc" => "0");
$dalTableadministrationuggroups["GroupID"]["key"]=true;

$dal_info["db_administration_at_localhost__administrationuggroups"] = &$dalTableadministrationuggroups;
?>