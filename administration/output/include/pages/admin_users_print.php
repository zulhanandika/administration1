<?php
			$optionsArray = array( 'pdf' => array( 'pdfView' => true,
'orientation' => 'portrait',
'scale' => 100 ),
'totals' => array( 'id' => array( 'totalsType' => '' ),
'username' => array( 'totalsType' => '' ),
'password' => array( 'totalsType' => '' ),
'nama' => array( 'totalsType' => '' ),
'email' => array( 'totalsType' => '' ),
'userpic' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'username',
'password',
'nama',
'email',
'userpic' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'username' => array( 'simple_grid_field1',
'simple_grid_field' ),
'password' => array( 'simple_grid_field2',
'simple_grid_field6' ),
'nama' => array( 'simple_grid_field3',
'simple_grid_field7' ),
'email' => array( 'simple_grid_field4',
'simple_grid_field8' ),
'userpic' => array( 'simple_grid_field5',
'simple_grid_field9' ) ),
'hideEmptyFields' => array(  ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'above-grid' => array( 'print_pages' ),
'below-grid' => array(  ),
'top' => array( 'print_header',
'print_subheader',
'print_pdf' ),
'grid' => array( 'simple_grid_field',
'simple_grid_field1',
'simple_grid_field6',
'simple_grid_field2',
'simple_grid_field7',
'simple_grid_field3',
'simple_grid_field8',
'simple_grid_field4',
'simple_grid_field9',
'simple_grid_field5' ) ),
'formXtTags' => array( 'above-grid' => array( 'print_pages' ),
'below-grid' => array(  ) ),
'itemForms' => array( 'print_pages' => 'above-grid',
'print_header' => 'top',
'print_subheader' => 'top',
'print_pdf' => 'top',
'simple_grid_field' => 'grid',
'simple_grid_field1' => 'grid',
'simple_grid_field6' => 'grid',
'simple_grid_field2' => 'grid',
'simple_grid_field7' => 'grid',
'simple_grid_field3' => 'grid',
'simple_grid_field8' => 'grid',
'simple_grid_field4' => 'grid',
'simple_grid_field9' => 'grid',
'simple_grid_field5' => 'grid' ),
'itemLocations' => array( 'simple_grid_field' => array( 'location' => 'grid',
'cellId' => 'headcell_field' ),
'simple_grid_field1' => array( 'location' => 'grid',
'cellId' => 'cell_field' ),
'simple_grid_field6' => array( 'location' => 'grid',
'cellId' => 'headcell_field1' ),
'simple_grid_field2' => array( 'location' => 'grid',
'cellId' => 'cell_field1' ),
'simple_grid_field7' => array( 'location' => 'grid',
'cellId' => 'headcell_field2' ),
'simple_grid_field3' => array( 'location' => 'grid',
'cellId' => 'cell_field2' ),
'simple_grid_field8' => array( 'location' => 'grid',
'cellId' => 'headcell_field3' ),
'simple_grid_field4' => array( 'location' => 'grid',
'cellId' => 'cell_field3' ),
'simple_grid_field9' => array( 'location' => 'grid',
'cellId' => 'headcell_field4' ),
'simple_grid_field5' => array( 'location' => 'grid',
'cellId' => 'cell_field4' ) ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'print_header' => array( 'print_header' ),
'print_subheader' => array( 'print_subheader' ),
'print_pages' => array( 'print_pages' ),
'print_pdf' => array( 'print_pdf' ),
'grid_field' => array( 'simple_grid_field1',
'simple_grid_field2',
'simple_grid_field3',
'simple_grid_field4',
'simple_grid_field5' ),
'grid_field_label' => array( 'simple_grid_field',
'simple_grid_field6',
'simple_grid_field7',
'simple_grid_field8',
'simple_grid_field9' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'headcell_field' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array( 'username_fieldheadercolumn' ),
'items' => array( 'simple_grid_field' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field1' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array( 'password_fieldheadercolumn' ),
'items' => array( 'simple_grid_field6' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field2' => array( 'cols' => array( 2 ),
'rows' => array( 0 ),
'tags' => array( 'nama_fieldheadercolumn' ),
'items' => array( 'simple_grid_field7' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field3' => array( 'cols' => array( 3 ),
'rows' => array( 0 ),
'tags' => array( 'email_fieldheadercolumn' ),
'items' => array( 'simple_grid_field8' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field4' => array( 'cols' => array( 4 ),
'rows' => array( 0 ),
'tags' => array( 'userpic_fieldheadercolumn' ),
'items' => array( 'simple_grid_field9' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array( 'username_fieldcolumn' ),
'items' => array( 'simple_grid_field1' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field1' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array( 'password_fieldcolumn' ),
'items' => array( 'simple_grid_field2' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field2' => array( 'cols' => array( 2 ),
'rows' => array( 1 ),
'tags' => array( 'nama_fieldcolumn' ),
'items' => array( 'simple_grid_field3' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field3' => array( 'cols' => array( 3 ),
'rows' => array( 1 ),
'tags' => array( 'email_fieldcolumn' ),
'items' => array( 'simple_grid_field4' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field4' => array( 'cols' => array( 4 ),
'rows' => array( 1 ),
'tags' => array( 'userpic_fieldcolumn' ),
'items' => array( 'simple_grid_field5' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field' => array( 'cols' => array( 0 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field1' => array( 'cols' => array( 1 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field2' => array( 'cols' => array( 2 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field3' => array( 'cols' => array( 3 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field4' => array( 'cols' => array( 4 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ) ),
'width' => 5,
'height' => 3 ) ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'verticalBar' => false,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array( 'print_pages' => array( 'tag' => 'PRINT_PAGES',
'type' => 2 ) ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'gridType' => 0,
'recsPerRow' => 1,
'hasCustomButtons' => false,
'customButtons' => array(  ),
'hasNotifications' => false,
'menus' => array(  ),
'calcTotalsFor' => 1 ),
'misc' => array( 'type' => 'print',
'breadcrumb' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ),
'dataGrid' => array( 'groupFields' => array(  ) ) );
			$pageArray = array( 'id' => 'print',
'type' => 'print',
'layoutId' => 'basic',
'disabled' => 0,
'default' => 0,
'forms' => array( 'above-grid' => array( 'modelId' => 'print-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'print_pages' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'print-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'print-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c2' => array( 'model' => 'c2',
'items' => array( 'print_header',
'print_subheader' ) ),
'c1' => array( 'model' => 'c1',
'items' => array( 'print_pdf' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'horizontal-grid',
'grid' => array( array( 'section' => 'head',
'cells' => array( array( 'cell' => 'headcell_field' ),
array( 'cell' => 'headcell_field1' ),
array( 'cell' => 'headcell_field2' ),
array( 'cell' => 'headcell_field3' ),
array( 'cell' => 'headcell_field4' ) ) ),
array( 'section' => 'body',
'cells' => array( array( 'cell' => 'cell_field' ),
array( 'cell' => 'cell_field1' ),
array( 'cell' => 'cell_field2' ),
array( 'cell' => 'cell_field3' ),
array( 'cell' => 'cell_field4' ) ) ),
array( 'section' => 'foot',
'cells' => array( array( 'cell' => 'footcell_field' ),
array( 'cell' => 'footcell_field1' ),
array( 'cell' => 'footcell_field2' ),
array( 'cell' => 'footcell_field3' ),
array( 'cell' => 'footcell_field4' ) ) ) ),
'cells' => array( 'headcell_field' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field' ),
'field' => 'username',
'columnName' => 'field' ),
'cell_field' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field1' ),
'field' => 'username',
'columnName' => 'field' ),
'footcell_field' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field1' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field6' ),
'field' => 'password',
'columnName' => 'field' ),
'cell_field1' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field2' ),
'field' => 'password',
'columnName' => 'field' ),
'footcell_field1' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field2' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field7' ),
'field' => 'nama',
'columnName' => 'field' ),
'cell_field2' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field3' ),
'field' => 'nama',
'columnName' => 'field' ),
'footcell_field2' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field3' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field8' ),
'field' => 'email',
'columnName' => 'field' ),
'cell_field3' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field4' ),
'field' => 'email',
'columnName' => 'field' ),
'footcell_field3' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field4' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field9' ),
'field' => 'userpic',
'columnName' => 'field' ),
'cell_field4' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field5' ),
'field' => 'userpic',
'columnName' => 'field' ),
'footcell_field4' => array( 'model' => 'footcell_field',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'print_header' => array( 'type' => 'print_header' ),
'print_subheader' => array( 'type' => 'print_subheader' ),
'print_pages' => array( 'type' => 'print_pages' ),
'print_pdf' => array( 'type' => 'print_pdf',
'targetPages' => array(  ),
'splitModes' => array(  ),
'scopes' => array(  ) ),
'simple_grid_field1' => array( 'field' => 'username',
'type' => 'grid_field' ),
'simple_grid_field' => array( 'type' => 'grid_field_label',
'field' => 'username' ),
'simple_grid_field2' => array( 'field' => 'password',
'type' => 'grid_field' ),
'simple_grid_field6' => array( 'type' => 'grid_field_label',
'field' => 'password' ),
'simple_grid_field3' => array( 'field' => 'nama',
'type' => 'grid_field' ),
'simple_grid_field7' => array( 'type' => 'grid_field_label',
'field' => 'nama' ),
'simple_grid_field4' => array( 'field' => 'email',
'type' => 'grid_field' ),
'simple_grid_field8' => array( 'type' => 'grid_field_label',
'field' => 'email' ),
'simple_grid_field5' => array( 'field' => 'userpic',
'type' => 'grid_field' ),
'simple_grid_field9' => array( 'type' => 'grid_field_label',
'field' => 'userpic' ) ),
'dbProps' => array(  ),
'version' => 14,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right',
'listTotals' => 1 );
		?>