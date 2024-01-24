<?php
$dalTablesubject = array();
$dalTablesubject["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTablesubject["subject"] = array("type"=>200,"varname"=>"subject", "name" => "subject", "autoInc" => "0");
$dalTablesubject["lecturer"] = array("type"=>200,"varname"=>"lecturer", "name" => "lecturer", "autoInc" => "0");
$dalTablesubject["id"]["key"]=true;

$dal_info["db_administration_at_localhost__subject"] = &$dalTablesubject;
?>