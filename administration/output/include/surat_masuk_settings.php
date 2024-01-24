<?php
$tdatasurat_masuk = array();
$tdatasurat_masuk[".searchableFields"] = array();
$tdatasurat_masuk[".ShortName"] = "surat_masuk";
$tdatasurat_masuk[".OwnerID"] = "";
$tdatasurat_masuk[".OriginalTable"] = "surat_masuk";


$tdatasurat_masuk[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatasurat_masuk[".originalPagesByType"] = $tdatasurat_masuk[".pagesByType"];
$tdatasurat_masuk[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatasurat_masuk[".originalPages"] = $tdatasurat_masuk[".pages"];
$tdatasurat_masuk[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatasurat_masuk[".originalDefaultPages"] = $tdatasurat_masuk[".defaultPages"];

//	field labels
$fieldLabelssurat_masuk = array();
$fieldToolTipssurat_masuk = array();
$pageTitlessurat_masuk = array();
$placeHolderssurat_masuk = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssurat_masuk["English"] = array();
	$fieldToolTipssurat_masuk["English"] = array();
	$placeHolderssurat_masuk["English"] = array();
	$pageTitlessurat_masuk["English"] = array();
	$fieldLabelssurat_masuk["English"]["nomor_surat"] = "Nomor Surat";
	$fieldToolTipssurat_masuk["English"]["nomor_surat"] = "";
	$placeHolderssurat_masuk["English"]["nomor_surat"] = "";
	$fieldLabelssurat_masuk["English"]["tanggal_surat"] = "Tanggal Surat";
	$fieldToolTipssurat_masuk["English"]["tanggal_surat"] = "";
	$placeHolderssurat_masuk["English"]["tanggal_surat"] = "";
	$fieldLabelssurat_masuk["English"]["tanggal_diterima"] = "Tanggal Diterima";
	$fieldToolTipssurat_masuk["English"]["tanggal_diterima"] = "";
	$placeHolderssurat_masuk["English"]["tanggal_diterima"] = "";
	$fieldLabelssurat_masuk["English"]["nama_penerima"] = "Nama Penerima";
	$fieldToolTipssurat_masuk["English"]["nama_penerima"] = "";
	$placeHolderssurat_masuk["English"]["nama_penerima"] = "";
	$fieldLabelssurat_masuk["English"]["keperluan"] = "Keperluan";
	$fieldToolTipssurat_masuk["English"]["keperluan"] = "";
	$placeHolderssurat_masuk["English"]["keperluan"] = "";
	$fieldLabelssurat_masuk["English"]["file_surat"] = "File Surat";
	$fieldToolTipssurat_masuk["English"]["file_surat"] = "";
	$placeHolderssurat_masuk["English"]["file_surat"] = "";
	$fieldLabelssurat_masuk["English"]["lampiran_foto"] = "Lampiran Foto";
	$fieldToolTipssurat_masuk["English"]["lampiran_foto"] = "";
	$placeHolderssurat_masuk["English"]["lampiran_foto"] = "";
	$fieldLabelssurat_masuk["English"]["ID0"] = "ID0";
	$fieldToolTipssurat_masuk["English"]["ID0"] = "";
	$placeHolderssurat_masuk["English"]["ID0"] = "";
	if (count($fieldToolTipssurat_masuk["English"]))
		$tdatasurat_masuk[".isUseToolTips"] = true;
}


	$tdatasurat_masuk[".NCSearch"] = true;



$tdatasurat_masuk[".shortTableName"] = "surat_masuk";
$tdatasurat_masuk[".nSecOptions"] = 0;

$tdatasurat_masuk[".mainTableOwnerID"] = "";
$tdatasurat_masuk[".entityType"] = 0;
$tdatasurat_masuk[".connId"] = "db_administration_at_localhost";


$tdatasurat_masuk[".strOriginalTableName"] = "surat_masuk";

	



$tdatasurat_masuk[".showAddInPopup"] = false;

$tdatasurat_masuk[".showEditInPopup"] = false;

$tdatasurat_masuk[".showViewInPopup"] = false;

$tdatasurat_masuk[".listAjax"] = false;
//	temporary
//$tdatasurat_masuk[".listAjax"] = false;

	$tdatasurat_masuk[".audit"] = false;

	$tdatasurat_masuk[".locking"] = false;


$pages = $tdatasurat_masuk[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatasurat_masuk[".edit"] = true;
	$tdatasurat_masuk[".afterEditAction"] = 1;
	$tdatasurat_masuk[".closePopupAfterEdit"] = 1;
	$tdatasurat_masuk[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatasurat_masuk[".add"] = true;
$tdatasurat_masuk[".afterAddAction"] = 1;
$tdatasurat_masuk[".closePopupAfterAdd"] = 1;
$tdatasurat_masuk[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatasurat_masuk[".list"] = true;
}



$tdatasurat_masuk[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatasurat_masuk[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatasurat_masuk[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatasurat_masuk[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatasurat_masuk[".printFriendly"] = true;
}



$tdatasurat_masuk[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatasurat_masuk[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatasurat_masuk[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatasurat_masuk[".isUseAjaxSuggest"] = true;





$tdatasurat_masuk[".ajaxCodeSnippetAdded"] = false;

$tdatasurat_masuk[".buttonsAdded"] = false;

$tdatasurat_masuk[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasurat_masuk[".isUseTimeForSearch"] = false;


$tdatasurat_masuk[".badgeColor"] = "2F4F4F";


$tdatasurat_masuk[".allSearchFields"] = array();
$tdatasurat_masuk[".filterFields"] = array();
$tdatasurat_masuk[".requiredSearchFields"] = array();

$tdatasurat_masuk[".googleLikeFields"] = array();
$tdatasurat_masuk[".googleLikeFields"][] = "nomor_surat";
$tdatasurat_masuk[".googleLikeFields"][] = "tanggal_surat";
$tdatasurat_masuk[".googleLikeFields"][] = "tanggal_diterima";
$tdatasurat_masuk[".googleLikeFields"][] = "nama_penerima";
$tdatasurat_masuk[".googleLikeFields"][] = "keperluan";
$tdatasurat_masuk[".googleLikeFields"][] = "file_surat";
$tdatasurat_masuk[".googleLikeFields"][] = "lampiran_foto";
$tdatasurat_masuk[".googleLikeFields"][] = "ID0";



$tdatasurat_masuk[".tableType"] = "list";

$tdatasurat_masuk[".printerPageOrientation"] = 0;
$tdatasurat_masuk[".nPrinterPageScale"] = 100;

$tdatasurat_masuk[".nPrinterSplitRecords"] = 40;

$tdatasurat_masuk[".geocodingEnabled"] = false;










$tdatasurat_masuk[".pageSize"] = 20;

$tdatasurat_masuk[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatasurat_masuk[".strOrderBy"] = $tstrOrderBy;

$tdatasurat_masuk[".orderindexes"] = array();


$tdatasurat_masuk[".sqlHead"] = "SELECT nomor_surat,  tanggal_surat,  tanggal_diterima,  nama_penerima,  keperluan,  file_surat,  lampiran_foto,  ID0";
$tdatasurat_masuk[".sqlFrom"] = "FROM surat_masuk";
$tdatasurat_masuk[".sqlWhereExpr"] = "";
$tdatasurat_masuk[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasurat_masuk[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasurat_masuk[".arrGroupsPerPage"] = $arrGPP;

$tdatasurat_masuk[".highlightSearchResults"] = true;

$tableKeyssurat_masuk = array();
$tableKeyssurat_masuk[] = "ID0";
$tdatasurat_masuk[".Keys"] = $tableKeyssurat_masuk;


$tdatasurat_masuk[".hideMobileList"] = array();




//	nomor_surat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "nomor_surat";
	$fdata["GoodName"] = "nomor_surat";
	$fdata["ownerTable"] = "surat_masuk";
	$fdata["Label"] = GetFieldLabel("surat_masuk","nomor_surat");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nomor_surat";

		$fdata["sourceSingle"] = "nomor_surat";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nomor_surat";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatasurat_masuk["nomor_surat"] = $fdata;
		$tdatasurat_masuk[".searchableFields"][] = "nomor_surat";
//	tanggal_surat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "tanggal_surat";
	$fdata["GoodName"] = "tanggal_surat";
	$fdata["ownerTable"] = "surat_masuk";
	$fdata["Label"] = GetFieldLabel("surat_masuk","tanggal_surat");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "tanggal_surat";

		$fdata["sourceSingle"] = "tanggal_surat";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tanggal_surat";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatasurat_masuk["tanggal_surat"] = $fdata;
		$tdatasurat_masuk[".searchableFields"][] = "tanggal_surat";
//	tanggal_diterima
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "tanggal_diterima";
	$fdata["GoodName"] = "tanggal_diterima";
	$fdata["ownerTable"] = "surat_masuk";
	$fdata["Label"] = GetFieldLabel("surat_masuk","tanggal_diterima");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "tanggal_diterima";

		$fdata["sourceSingle"] = "tanggal_diterima";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tanggal_diterima";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatasurat_masuk["tanggal_diterima"] = $fdata;
		$tdatasurat_masuk[".searchableFields"][] = "tanggal_diterima";
//	nama_penerima
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "nama_penerima";
	$fdata["GoodName"] = "nama_penerima";
	$fdata["ownerTable"] = "surat_masuk";
	$fdata["Label"] = GetFieldLabel("surat_masuk","nama_penerima");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nama_penerima";

		$fdata["sourceSingle"] = "nama_penerima";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nama_penerima";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatasurat_masuk["nama_penerima"] = $fdata;
		$tdatasurat_masuk[".searchableFields"][] = "nama_penerima";
//	keperluan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "keperluan";
	$fdata["GoodName"] = "keperluan";
	$fdata["ownerTable"] = "surat_masuk";
	$fdata["Label"] = GetFieldLabel("surat_masuk","keperluan");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "keperluan";

		$fdata["sourceSingle"] = "keperluan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "keperluan";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatasurat_masuk["keperluan"] = $fdata;
		$tdatasurat_masuk[".searchableFields"][] = "keperluan";
//	file_surat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "file_surat";
	$fdata["GoodName"] = "file_surat";
	$fdata["ownerTable"] = "surat_masuk";
	$fdata["Label"] = GetFieldLabel("surat_masuk","file_surat");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "file_surat";

		$fdata["sourceSingle"] = "file_surat";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "file_surat";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Document Download");

	
	
	
								$vdata["ShowIcon"] = true;
				
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatasurat_masuk["file_surat"] = $fdata;
		$tdatasurat_masuk[".searchableFields"][] = "file_surat";
//	lampiran_foto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "lampiran_foto";
	$fdata["GoodName"] = "lampiran_foto";
	$fdata["ownerTable"] = "surat_masuk";
	$fdata["Label"] = GetFieldLabel("surat_masuk","lampiran_foto");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "lampiran_foto";

		$fdata["sourceSingle"] = "lampiran_foto";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lampiran_foto";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "File-based Image");

	
	
				$vdata["ImageWidth"] = 50;
	$vdata["ImageHeight"] = 50;

			$vdata["multipleImgMode"] = 1;
	$vdata["maxImages"] = 0;

			$vdata["showGallery"] = true;
	$vdata["galleryMode"] = 2;
	$vdata["captionMode"] = 2;
	$vdata["captionField"] = "";

	$vdata["imageBorder"] = 1;
	$vdata["imageFullWidth"] = 1;


	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatasurat_masuk["lampiran_foto"] = $fdata;
		$tdatasurat_masuk[".searchableFields"][] = "lampiran_foto";
//	ID0
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "ID0";
	$fdata["GoodName"] = "ID0";
	$fdata["ownerTable"] = "surat_masuk";
	$fdata["Label"] = GetFieldLabel("surat_masuk","ID0");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "ID0";

		$fdata["sourceSingle"] = "ID0";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ID0";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatasurat_masuk["ID0"] = $fdata;
		$tdatasurat_masuk[".searchableFields"][] = "ID0";


$tables_data["surat_masuk"]=&$tdatasurat_masuk;
$field_labels["surat_masuk"] = &$fieldLabelssurat_masuk;
$fieldToolTips["surat_masuk"] = &$fieldToolTipssurat_masuk;
$placeHolders["surat_masuk"] = &$placeHolderssurat_masuk;
$page_titles["surat_masuk"] = &$pageTitlessurat_masuk;


changeTextControlsToDate( "surat_masuk" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["surat_masuk"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["surat_masuk"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_surat_masuk()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "nomor_surat,  tanggal_surat,  tanggal_diterima,  nama_penerima,  keperluan,  file_surat,  lampiran_foto,  ID0";
$proto0["m_strFrom"] = "FROM surat_masuk";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "nomor_surat",
	"m_strTable" => "surat_masuk",
	"m_srcTableName" => "surat_masuk"
));

$proto6["m_sql"] = "nomor_surat";
$proto6["m_srcTableName"] = "surat_masuk";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "tanggal_surat",
	"m_strTable" => "surat_masuk",
	"m_srcTableName" => "surat_masuk"
));

$proto8["m_sql"] = "tanggal_surat";
$proto8["m_srcTableName"] = "surat_masuk";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "tanggal_diterima",
	"m_strTable" => "surat_masuk",
	"m_srcTableName" => "surat_masuk"
));

$proto10["m_sql"] = "tanggal_diterima";
$proto10["m_srcTableName"] = "surat_masuk";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "nama_penerima",
	"m_strTable" => "surat_masuk",
	"m_srcTableName" => "surat_masuk"
));

$proto12["m_sql"] = "nama_penerima";
$proto12["m_srcTableName"] = "surat_masuk";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "keperluan",
	"m_strTable" => "surat_masuk",
	"m_srcTableName" => "surat_masuk"
));

$proto14["m_sql"] = "keperluan";
$proto14["m_srcTableName"] = "surat_masuk";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "file_surat",
	"m_strTable" => "surat_masuk",
	"m_srcTableName" => "surat_masuk"
));

$proto16["m_sql"] = "file_surat";
$proto16["m_srcTableName"] = "surat_masuk";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "lampiran_foto",
	"m_strTable" => "surat_masuk",
	"m_srcTableName" => "surat_masuk"
));

$proto18["m_sql"] = "lampiran_foto";
$proto18["m_srcTableName"] = "surat_masuk";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "ID0",
	"m_strTable" => "surat_masuk",
	"m_srcTableName" => "surat_masuk"
));

$proto20["m_sql"] = "ID0";
$proto20["m_srcTableName"] = "surat_masuk";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "surat_masuk";
$proto23["m_srcTableName"] = "surat_masuk";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "ID0";
$proto23["m_columns"][] = "nomor_surat";
$proto23["m_columns"][] = "tanggal_surat";
$proto23["m_columns"][] = "tanggal_diterima";
$proto23["m_columns"][] = "nama_penerima";
$proto23["m_columns"][] = "keperluan";
$proto23["m_columns"][] = "file_surat";
$proto23["m_columns"][] = "lampiran_foto";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "surat_masuk";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "surat_masuk";
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="surat_masuk";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_surat_masuk = createSqlQuery_surat_masuk();


	
		;

								

$tdatasurat_masuk[".sqlquery"] = $queryData_surat_masuk;



$tdatasurat_masuk[".hasEvents"] = false;

?>