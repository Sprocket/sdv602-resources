<?php

/*	BASE URL
	location of the main index.php page from web server
	no slash at the end */
define('BASE_URL', '/_nmit/sdv602-resources');

/*	PROJECT NAME
	the name of the project
	used in main navigation */
define('PROJ_NAME', 'SDV602 PHP');

/*	DEFAULT NOTE
	class note to show by default */
define('DEFAULT_NOTE', '00.intro/01.intro.htm');

/*	NOTES
	sets note making mode
	FALSE	- note making system is not used
	'SHOW'	- shows user notes at the bottom of the page
	'EDIT'	- shows the note editor
*/
define('SHOW_NOTES', FALSE);
// define('SHOW_NOTES', 'SHOW');
// define('SHOW_NOTES', 'EDIT');


/*	EDIT CLASS NOTES
	whether to show edit button */
define('EDIT_CLASS_NOTES', FALSE );




/*	MAIN SECTIONS
	array of links in the main nav
	"Link Text"	=> "/url/from/BASE_URL/" */
$sections = array(
	"Class notes"		=> "/classnotes/",
	"Resources" 		=> "/resources/",
	"Examples"			=> "/examples/"
	);

