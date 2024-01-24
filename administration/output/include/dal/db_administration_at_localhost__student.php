<?php
$dalTablestudent = array();
$dalTablestudent["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTablestudent["name"] = array("type"=>200,"varname"=>"name", "name" => "name", "autoInc" => "0");
$dalTablestudent["class"] = array("type"=>200,"varname"=>"fldclass", "name" => "class", "autoInc" => "0");
$dalTablestudent["id"]["key"]=true;

$dal_info["db_administration_at_localhost__student"] = &$dalTablestudent;
?>