<?php
$dalTableuser = array();
$dalTableuser["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTableuser["username"] = array("type"=>200,"varname"=>"username", "name" => "username", "autoInc" => "0");
$dalTableuser["password"] = array("type"=>200,"varname"=>"password", "name" => "password", "autoInc" => "0");
$dalTableuser["nama"] = array("type"=>200,"varname"=>"nama", "name" => "nama", "autoInc" => "0");
$dalTableuser["email"] = array("type"=>200,"varname"=>"email", "name" => "email", "autoInc" => "0");
$dalTableuser["userpic"] = array("type"=>128,"varname"=>"userpic", "name" => "userpic", "autoInc" => "0");
$dalTableuser["id"]["key"]=true;

$dal_info["db_administration_at_localhost__user"] = &$dalTableuser;
?>