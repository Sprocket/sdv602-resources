<?php

/* * * * * * * * * * * * * * * * * * * *
VERSION
	the version number
 * * * * * * * * * * * * * * * * * * * */
define('VERSION', '0.3');

/* * * * * * * * * * * * * * * * * * * *
BASE URL
	location of the main index.php page from web server
	no slash at the end
 * * * * * * * * * * * * * * * * * * * */
define('BASE_URL', '/sdv602-resources');


/* * * * * * * * * * * * * * * * * * * *
PROJECT NAME
	the name of the project
	used in main navigation
 * * * * * * * * * * * * * * * * * * * */
define('PROJ_NAME', 'SDV602 PHP');

/* * * * * * * * * * * * * * * * * * * *
MAIN SECTIONS
	array of links in the main nav
	"Link Text"	=> "/url/from/BASE_URL/"
 * * * * * * * * * * * * * * * * * * * */
// $sections = array(
// 	"Class notes"		=> "/classnotes/",
// 	"Resources" 		=> "/resources/",
// 	"Examples"			=> "/examples/",
// 	"Study"				=> "/study/"
// 	);


$sections = array(
	array( "title"	=> "Class notes",
			"path"	=> "/classnotes/",
			"desc"	=> "Notes from class"
			),
	array( "title"	=> "Resources",
			"path"	=> "/resources/",
			"desc"	=> "Course-related resources"
			),
	array( "title"	=> "Examples",
			"path"	=> "/examples/",
			"desc"	=> "Code and docuemnt examples"
			),
	array( "title"	=> "Study",
			"path"	=> "/study/",
			"desc"	=> "Requirements and quizzes"
			),
	array( "title"	=> "Assessment",
			"path"	=> "/assessment/",
			"desc"	=> "List of assessments and resources"
			),
	);

/* * * * * * * * * * * * * * * * * * * *
DEFAULT NOTE
	class note to show by default
 * * * * * * * * * * * * * * * * * * * */
define('DEFAULT_NOTE', '00.intro/01.what_is_php.htm');


/* * * * * * * * * * * * * * * * * * * *
NOTES
	sets note making mode
	FALSE	- note making system is not used
	'SHOW'	- shows user notes at the bottom of the page
	'EDIT'	- shows the note editor
 * * * * * * * * * * * * * * * * * * * */
define('SHOW_NOTES', FALSE);
// define('SHOW_NOTES', 'SHOW');
// define('SHOW_NOTES', 'EDIT');


/* * * * * * * * * * * * * * * * * * * *
EDIT CLASS NOTES
	whether to show edit button
 * * * * * * * * * * * * * * * * * * * */
define('EDIT_CLASS_NOTES', FALSE );
