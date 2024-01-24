<?php
$dalTablesurat_masuk = array();
$dalTablesurat_masuk["ID0"] = array("type"=>3,"varname"=>"ID0", "name" => "ID0", "autoInc" => "1");
$dalTablesurat_masuk["nomor_surat"] = array("type"=>200,"varname"=>"nomor_surat", "name" => "nomor_surat", "autoInc" => "0");
$dalTablesurat_masuk["tanggal_surat"] = array("type"=>7,"varname"=>"tanggal_surat", "name" => "tanggal_surat", "autoInc" => "0");
$dalTablesurat_masuk["tanggal_diterima"] = array("type"=>135,"varname"=>"tanggal_diterima", "name" => "tanggal_diterima", "autoInc" => "0");
$dalTablesurat_masuk["nama_penerima"] = array("type"=>200,"varname"=>"nama_penerima", "name" => "nama_penerima", "autoInc" => "0");
$dalTablesurat_masuk["keperluan"] = array("type"=>200,"varname"=>"keperluan", "name" => "keperluan", "autoInc" => "0");
$dalTablesurat_masuk["file_surat"] = array("type"=>200,"varname"=>"file_surat", "name" => "file_surat", "autoInc" => "0");
$dalTablesurat_masuk["lampiran_foto"] = array("type"=>200,"varname"=>"lampiran_foto", "name" => "lampiran_foto", "autoInc" => "0");
$dalTablesurat_masuk["ID0"]["key"]=true;

$dal_info["db_administration_at_localhost__surat_masuk"] = &$dalTablesurat_masuk;
?>