<?php
$tdatastudent = array();
$tdatastudent[".searchableFields"] = array();
$tdatastudent[".ShortName"] = "student";
$tdatastudent[".OwnerID"] = "";
$tdatastudent[".OriginalTable"] = "student";


$tdatastudent[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatastudent[".originalPagesByType"] = $tdatastudent[".pagesByType"];
$tdatastudent[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatastudent[".originalPages"] = $tdatastudent[".pages"];
$tdatastudent[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatastudent[".originalDefaultPages"] = $tdatastudent[".defaultPages"];

//	field labels
$fieldLabelsstudent = array();
$fieldToolTipsstudent = array();
$pageTitlesstudent = array();
$placeHoldersstudent = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsstudent["English"] = array();
	$fieldToolTipsstudent["English"] = array();
	$placeHoldersstudent["English"] = array();
	$pageTitlesstudent["English"] = array();
	$fieldLabelsstudent["English"]["id"] = "Id";
	$fieldToolTipsstudent["English"]["id"] = "";
	$placeHoldersstudent["English"]["id"] = "";
	$fieldLabelsstudent["English"]["name"] = "Name";
	$fieldToolTipsstudent["English"]["name"] = "";
	$placeHoldersstudent["English"]["name"] = "";
	$fieldLabelsstudent["English"]["class"] = "Class";
	$fieldToolTipsstudent["English"]["class"] = "";
	$placeHoldersstudent["English"]["class"] = "";
	if (count($fieldToolTipsstudent["English"]))
		$tdatastudent[".isUseToolTips"] = true;
}


	$tdatastudent[".NCSearch"] = true;



$tdatastudent[".shortTableName"] = "student";
$tdatastudent[".nSecOptions"] = 0;

$tdatastudent[".mainTableOwnerID"] = "";
$tdatastudent[".entityType"] = 0;
$tdatastudent[".connId"] = "db_administration_at_localhost";


$tdatastudent[".strOriginalTableName"] = "student";

	



$tdatastudent[".showAddInPopup"] = false;

$tdatastudent[".showEditInPopup"] = false;

$tdatastudent[".showViewInPopup"] = false;

$tdatastudent[".listAjax"] = false;
//	temporary
//$tdatastudent[".listAjax"] = false;

	$tdatastudent[".audit"] = false;

	$tdatastudent[".locking"] = false;


$pages = $tdatastudent[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatastudent[".edit"] = true;
	$tdatastudent[".afterEditAction"] = 1;
	$tdatastudent[".closePopupAfterEdit"] = 1;
	$tdatastudent[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatastudent[".add"] = true;
$tdatastudent[".afterAddAction"] = 1;
$tdatastudent[".closePopupAfterAdd"] = 1;
$tdatastudent[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatastudent[".list"] = true;
}



$tdatastudent[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatastudent[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatastudent[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatastudent[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatastudent[".printFriendly"] = true;
}



$tdatastudent[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatastudent[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatastudent[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatastudent[".isUseAjaxSuggest"] = true;





$tdatastudent[".ajaxCodeSnippetAdded"] = false;

$tdatastudent[".buttonsAdded"] = false;

$tdatastudent[".addPageEvents"] = false;

// use timepicker for search panel
$tdatastudent[".isUseTimeForSearch"] = false;


$tdatastudent[".badgeColor"] = "CFAE83";


$tdatastudent[".allSearchFields"] = array();
$tdatastudent[".filterFields"] = array();
$tdatastudent[".requiredSearchFields"] = array();

$tdatastudent[".googleLikeFields"] = array();
$tdatastudent[".googleLikeFields"][] = "id";
$tdatastudent[".googleLikeFields"][] = "name";
$tdatastudent[".googleLikeFields"][] = "class";



$tdatastudent[".tableType"] = "list";

$tdatastudent[".printerPageOrientation"] = 0;
$tdatastudent[".nPrinterPageScale"] = 100;

$tdatastudent[".nPrinterSplitRecords"] = 40;

$tdatastudent[".geocodingEnabled"] = false;










$tdatastudent[".pageSize"] = 20;

$tdatastudent[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatastudent[".strOrderBy"] = $tstrOrderBy;

$tdatastudent[".orderindexes"] = array();


$tdatastudent[".sqlHead"] = "SELECT id,  	name,  	`class`";
$tdatastudent[".sqlFrom"] = "FROM student";
$tdatastudent[".sqlWhereExpr"] = "";
$tdatastudent[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatastudent[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatastudent[".arrGroupsPerPage"] = $arrGPP;

$tdatastudent[".highlightSearchResults"] = true;

$tableKeysstudent = array();
$tableKeysstudent[] = "id";
$tdatastudent[".Keys"] = $tableKeysstudent;


$tdatastudent[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "student";
	$fdata["Label"] = GetFieldLabel("student","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["sourceSingle"] = "id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
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


	$tdatastudent["id"] = $fdata;
		$tdatastudent[".searchableFields"][] = "id";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "student";
	$fdata["Label"] = GetFieldLabel("student","name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "name";

		$fdata["sourceSingle"] = "name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "name";

	
	
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


	$tdatastudent["name"] = $fdata;
		$tdatastudent[".searchableFields"][] = "name";
//	class
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "class";
	$fdata["GoodName"] = "class";
	$fdata["ownerTable"] = "student";
	$fdata["Label"] = GetFieldLabel("student","class");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "class";

		$fdata["sourceSingle"] = "class";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`class`";

	
	
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


	$tdatastudent["class"] = $fdata;
		$tdatastudent[".searchableFields"][] = "class";


$tables_data["student"]=&$tdatastudent;
$field_labels["student"] = &$fieldLabelsstudent;
$fieldToolTips["student"] = &$fieldToolTipsstudent;
$placeHolders["student"] = &$placeHoldersstudent;
$page_titles["student"] = &$pageTitlesstudent;


changeTextControlsToDate( "student" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["student"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["student"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_student()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	name,  	`class`";
$proto0["m_strFrom"] = "FROM student";
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
	"m_strName" => "id",
	"m_strTable" => "student",
	"m_srcTableName" => "student"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "student";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "student",
	"m_srcTableName" => "student"
));

$proto8["m_sql"] = "name";
$proto8["m_srcTableName"] = "student";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "class",
	"m_strTable" => "student",
	"m_srcTableName" => "student"
));

$proto10["m_sql"] = "`class`";
$proto10["m_srcTableName"] = "student";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "student";
$proto13["m_srcTableName"] = "student";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id";
$proto13["m_columns"][] = "name";
$proto13["m_columns"][] = "class";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "student";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "student";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="student";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_student = createSqlQuery_student();


	
		;

			

$tdatastudent[".sqlquery"] = $queryData_student;



$tdatastudent[".hasEvents"] = false;

?>