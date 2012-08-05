<?php

/*	BASE URL
	location of the main index.php page from web server
	no slash at the end */
define('BASE_URL', '/_nmit/sdv602-resources');

/*	PROJECT NAME
	the name of the project
	used in main navigation */
define('PROJ_NAME', 'SDV602 PHP');

/*	NOTES
	
	can be FALSE, 'SHOW', 'EDIT' */
// define('SHOW_NOTES', FALSE);
// define('SHOW_NOTES', 'SHOW');
define('SHOW_NOTES', 'EDIT');



/*	MAIN SECTIONS
	array of links in the main nav
	"Link Text"	=> "/url/from/BASE_URL/" */
$sections = array(
	"Class notes"		=> "/classnotes/",
	"Resources" 		=> "/resources/",
	"Examples"			=> "/examples/"
	);

