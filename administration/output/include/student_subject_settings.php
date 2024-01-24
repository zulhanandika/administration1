<?php
$tdatastudent_subject = array();
$tdatastudent_subject[".searchableFields"] = array();
$tdatastudent_subject[".ShortName"] = "student_subject";
$tdatastudent_subject[".OwnerID"] = "";
$tdatastudent_subject[".OriginalTable"] = "student_subject";


$tdatastudent_subject[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatastudent_subject[".originalPagesByType"] = $tdatastudent_subject[".pagesByType"];
$tdatastudent_subject[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatastudent_subject[".originalPages"] = $tdatastudent_subject[".pages"];
$tdatastudent_subject[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatastudent_subject[".originalDefaultPages"] = $tdatastudent_subject[".defaultPages"];

//	field labels
$fieldLabelsstudent_subject = array();
$fieldToolTipsstudent_subject = array();
$pageTitlesstudent_subject = array();
$placeHoldersstudent_subject = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsstudent_subject["English"] = array();
	$fieldToolTipsstudent_subject["English"] = array();
	$placeHoldersstudent_subject["English"] = array();
	$pageTitlesstudent_subject["English"] = array();
	$fieldLabelsstudent_subject["English"]["id"] = "Id";
	$fieldToolTipsstudent_subject["English"]["id"] = "";
	$placeHoldersstudent_subject["English"]["id"] = "";
	$fieldLabelsstudent_subject["English"]["student_id"] = "Student Id";
	$fieldToolTipsstudent_subject["English"]["student_id"] = "";
	$placeHoldersstudent_subject["English"]["student_id"] = "";
	$fieldLabelsstudent_subject["English"]["subject_id"] = "Subject Id";
	$fieldToolTipsstudent_subject["English"]["subject_id"] = "";
	$placeHoldersstudent_subject["English"]["subject_id"] = "";
	if (count($fieldToolTipsstudent_subject["English"]))
		$tdatastudent_subject[".isUseToolTips"] = true;
}


	$tdatastudent_subject[".NCSearch"] = true;



$tdatastudent_subject[".shortTableName"] = "student_subject";
$tdatastudent_subject[".nSecOptions"] = 0;

$tdatastudent_subject[".mainTableOwnerID"] = "";
$tdatastudent_subject[".entityType"] = 0;
$tdatastudent_subject[".connId"] = "db_administration_at_localhost";


$tdatastudent_subject[".strOriginalTableName"] = "student_subject";

	



$tdatastudent_subject[".showAddInPopup"] = false;

$tdatastudent_subject[".showEditInPopup"] = false;

$tdatastudent_subject[".showViewInPopup"] = false;

$tdatastudent_subject[".listAjax"] = false;
//	temporary
//$tdatastudent_subject[".listAjax"] = false;

	$tdatastudent_subject[".audit"] = false;

	$tdatastudent_subject[".locking"] = false;


$pages = $tdatastudent_subject[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatastudent_subject[".edit"] = true;
	$tdatastudent_subject[".afterEditAction"] = 1;
	$tdatastudent_subject[".closePopupAfterEdit"] = 1;
	$tdatastudent_subject[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatastudent_subject[".add"] = true;
$tdatastudent_subject[".afterAddAction"] = 1;
$tdatastudent_subject[".closePopupAfterAdd"] = 1;
$tdatastudent_subject[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatastudent_subject[".list"] = true;
}



$tdatastudent_subject[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatastudent_subject[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatastudent_subject[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatastudent_subject[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatastudent_subject[".printFriendly"] = true;
}



$tdatastudent_subject[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatastudent_subject[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatastudent_subject[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatastudent_subject[".isUseAjaxSuggest"] = true;





$tdatastudent_subject[".ajaxCodeSnippetAdded"] = false;

$tdatastudent_subject[".buttonsAdded"] = false;

$tdatastudent_subject[".addPageEvents"] = false;

// use timepicker for search panel
$tdatastudent_subject[".isUseTimeForSearch"] = false;


$tdatastudent_subject[".badgeColor"] = "edca00";


$tdatastudent_subject[".allSearchFields"] = array();
$tdatastudent_subject[".filterFields"] = array();
$tdatastudent_subject[".requiredSearchFields"] = array();

$tdatastudent_subject[".googleLikeFields"] = array();
$tdatastudent_subject[".googleLikeFields"][] = "id";
$tdatastudent_subject[".googleLikeFields"][] = "student_id";
$tdatastudent_subject[".googleLikeFields"][] = "subject_id";



$tdatastudent_subject[".tableType"] = "list";

$tdatastudent_subject[".printerPageOrientation"] = 0;
$tdatastudent_subject[".nPrinterPageScale"] = 100;

$tdatastudent_subject[".nPrinterSplitRecords"] = 40;

$tdatastudent_subject[".geocodingEnabled"] = false;










$tdatastudent_subject[".pageSize"] = 20;

$tdatastudent_subject[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatastudent_subject[".strOrderBy"] = $tstrOrderBy;

$tdatastudent_subject[".orderindexes"] = array();


$tdatastudent_subject[".sqlHead"] = "SELECT id,  	student_id,  	subject_id";
$tdatastudent_subject[".sqlFrom"] = "FROM student_subject";
$tdatastudent_subject[".sqlWhereExpr"] = "";
$tdatastudent_subject[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatastudent_subject[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatastudent_subject[".arrGroupsPerPage"] = $arrGPP;

$tdatastudent_subject[".highlightSearchResults"] = true;

$tableKeysstudent_subject = array();
$tableKeysstudent_subject[] = "id";
$tdatastudent_subject[".Keys"] = $tableKeysstudent_subject;


$tdatastudent_subject[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "student_subject";
	$fdata["Label"] = GetFieldLabel("student_subject","id");
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


	$tdatastudent_subject["id"] = $fdata;
		$tdatastudent_subject[".searchableFields"][] = "id";
//	student_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "student_id";
	$fdata["GoodName"] = "student_id";
	$fdata["ownerTable"] = "student_subject";
	$fdata["Label"] = GetFieldLabel("student_subject","student_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "student_id";

		$fdata["sourceSingle"] = "student_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "student_id";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "student";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "name";

	

	
	$edata["LookupOrderBy"] = "name";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdatastudent_subject["student_id"] = $fdata;
		$tdatastudent_subject[".searchableFields"][] = "student_id";
//	subject_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "subject_id";
	$fdata["GoodName"] = "subject_id";
	$fdata["ownerTable"] = "student_subject";
	$fdata["Label"] = GetFieldLabel("student_subject","subject_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "subject_id";

		$fdata["sourceSingle"] = "subject_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "subject_id";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "subject";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "subject";

	

	
	$edata["LookupOrderBy"] = "subject";

	
	
	
	

	
		$edata["Multiselect"] = true;

		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdatastudent_subject["subject_id"] = $fdata;
		$tdatastudent_subject[".searchableFields"][] = "subject_id";


$tables_data["student_subject"]=&$tdatastudent_subject;
$field_labels["student_subject"] = &$fieldLabelsstudent_subject;
$fieldToolTips["student_subject"] = &$fieldToolTipsstudent_subject;
$placeHolders["student_subject"] = &$placeHoldersstudent_subject;
$page_titles["student_subject"] = &$pageTitlesstudent_subject;


changeTextControlsToDate( "student_subject" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["student_subject"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["student_subject"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="student";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="student";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "student";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["student_subject"][0] = $masterParams;
				$masterTablesData["student_subject"][0]["masterKeys"] = array();
	$masterTablesData["student_subject"][0]["masterKeys"][]="id";
				$masterTablesData["student_subject"][0]["detailKeys"] = array();
	$masterTablesData["student_subject"][0]["detailKeys"][]="student_id";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="subject";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="subject";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "subject";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["student_subject"][1] = $masterParams;
				$masterTablesData["student_subject"][1]["masterKeys"] = array();
	$masterTablesData["student_subject"][1]["masterKeys"][]="id";
				$masterTablesData["student_subject"][1]["detailKeys"] = array();
	$masterTablesData["student_subject"][1]["detailKeys"][]="subject_id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_student_subject()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	student_id,  	subject_id";
$proto0["m_strFrom"] = "FROM student_subject";
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
	"m_strTable" => "student_subject",
	"m_srcTableName" => "student_subject"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "student_subject";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "student_id",
	"m_strTable" => "student_subject",
	"m_srcTableName" => "student_subject"
));

$proto8["m_sql"] = "student_id";
$proto8["m_srcTableName"] = "student_subject";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "subject_id",
	"m_strTable" => "student_subject",
	"m_srcTableName" => "student_subject"
));

$proto10["m_sql"] = "subject_id";
$proto10["m_srcTableName"] = "student_subject";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "student_subject";
$proto13["m_srcTableName"] = "student_subject";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id";
$proto13["m_columns"][] = "student_id";
$proto13["m_columns"][] = "subject_id";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "student_subject";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "student_subject";
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
$proto0["m_srcTableName"]="student_subject";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_student_subject = createSqlQuery_student_subject();


	
		;

			

$tdatastudent_subject[".sqlquery"] = $queryData_student_subject;



$tdatastudent_subject[".hasEvents"] = false;

?>