<?php
$dalTablestudent_subject = array();
$dalTablestudent_subject["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTablestudent_subject["student_id"] = array("type"=>3,"varname"=>"student_id", "name" => "student_id", "autoInc" => "0");
$dalTablestudent_subject["subject_id"] = array("type"=>3,"varname"=>"subject_id", "name" => "subject_id", "autoInc" => "0");
$dalTablestudent_subject["id"]["key"]=true;

$dal_info["db_administration_at_localhost__student_subject"] = &$dalTablestudent_subject;
?>