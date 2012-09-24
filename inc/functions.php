<?php

if ( file_exists('../configs.php') ) require '../configs.php';
else require 'configs.default.php';

// PAGE FUNCTIONS

function page_header( $title = '' ) {
	return '<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>'.PROJ_NAME.' - '.$title.'</title>
</head>
	<link rel="stylesheet" href="'.BASE_URL.'/inc/css/sitewide.css">
</head>
<body>'
		. main_nav();
}

function page_footer() {
	return '<footer class="container"><small>&copy; Freefall Media Ltd. All rights reserved. May not be redistributed without permission</small>
	</footer>

	<script src="'.BASE_URL.'/inc/js/jquery-1.7.2.min.js"></script>
	<script src="'.BASE_URL.'/inc/js/bootstrap.js"></script>
	<script src="'.BASE_URL.'/inc/js/prettify.js"></script>
	<script src="'.BASE_URL.'/inc/redactor/redactor.min.js"></script>
	<script src="'.BASE_URL.'/inc/js/sitewide.js"></script>
</body>
</html>
';
}


// NAVIGATION FUNCTIONS
function main_nav() {
	global $sections;

	$nav = '
	<div class="navbar navbar-fixed-top navbar-inverse">
	<div class="navbar-inner">
    <div class="container">
		<ul class="nav">
      <li><a class="brand" href="'.BASE_URL.'">'.PROJ_NAME.'</a></li>';

	foreach ( $sections as $section ) {
		$nav .= sprintf( '<li><a href="'.BASE_URL.'%s" title="%s">%s</a></li>',
			$section['path'],
			$section['desc'],
			$section['title']
		);
	}

	$nav .= '</div>
  </div>
</div>';

	return $nav;

}

function sub_nav( $directory, $current = NULL ) {
	$subnav = '<ol>';

	$directories = glob( $directory, GLOB_ONLYDIR );

	$subnav .= "<ul class=\"nav nav-list\">";

	foreach ( $directories as $dir ) {

		$subnav .= "<li class=\"nav-header\">".clean_linktext( $dir )."</li>";

		$files = glob( "$dir/*.htm" );

		foreach ( $files as $file ) {

			if ( isset( $current ) and $file == $current ) $subnav .= '<li class="active">';
			else $subnav .= '<li>';

			$subnav .= "<a href=\"index.php?page="
				. $file
				. "\">"
				. clean_linktext( $file )
				. '</a></li>';
		}

	}

	return $subnav . '</ol>';
}

// LINK FUNCTIONS
function clean_linktext( $link_text ) {
	$cleaned = preg_replace( "/[0-9.]/", "", basename( $link_text, '.htm' ) );
	return str_replace( '_', ' ', $cleaned );
}

/* MESSAGES */
function show_msg( $msg ) {

	$alert = sprintf( '<div class="alert alert-%s">%s</div>',
		$msg[0],
		$msg[1]
	);

	return $alert;

}


/* EDITOR FUNCTIONS */

function edit_form( $page ) {

	$form = "<form action=\"\" method=\"post\">
	<input type=\"hidden\" value=\"{$page}\" id=\"editor_page\" name=\"editor_page\">
	<textarea id=\"editor_content\" name=\"editor_content\">" . file_get_contents( $page ) . "</textarea>";

	$form .= "<div id=\"editor-buttons\"><a href=\"index.php\" class=\"btn\">Cancel</a><input type=\"submit\" class=\"btn btn-primary\" value=\"save\"></div></form>";

	return $form;
}

function make_note( $notes_file ) {
	// echo $notes_file; // ../_notes/01.intro/lamp.htm
	// echo getcwd(); // /Library/WebServer/Documents/_nmit/sdv602-resources/classnotes
	// touch($notes_file);

	$path = pathinfo( $notes_file );

	if ( ! is_dir( $path['dirname'] ) ) mkdir( $path['dirname'] , 0777 );

	// file_put_contents($notes_file, '');
	touch( $notes_file );
	chmod( $notes_file, 0777 );

	// return edit_form( $notes_file );
	$notes = '<div id="notes">'
		. edit_form( $notes_file )
		. '</div>';
	return $notes;
}


function save_notes( $page, $content ) {

	return file_put_contents( $page, $content );

}


function process_notes( $page ) {

	if ( SHOW_NOTES == FALSE ) return;

	$notes_file = '../_notes/'.$page;

	if ( SHOW_NOTES == 'SHOW' ) {
		if ( file_exists( $notes_file ) ) {
			$notes = '<div id="notes">'
				. file_get_contents( $notes_file )
				. '</div>';
			return $notes;
		} else return '<p>[no user notes]</p>';
	}

	if ( SHOW_NOTES == 'EDIT' ) {

		if ( file_exists( $notes_file ) ) {
			$notes = '<div id="notes">'
				. edit_form( $notes_file )
				. '</div>';
			return $notes;
		} else return make_note( $notes_file );

	}

}


function edit_note_link( $page ) {
	$edit_link = sprintf( '<p><a href="%s/edit.php?page=%s" class="btn">edit</a></p>', BASE_URL, $page );
	return $edit_link;
}


function section_details() {

	global $sections;

	$details = '<dl>';

	foreach ( $sections as $section ) {
		$details .= sprintf( '<dt><a href="'.BASE_URL.'%s" title="%s">%s</a></dt>
		<dd>%s</dd>',
			$section['path'],
			$section['desc'],
			$section['title'],
			$section['desc']
		);
	}

	return $details . '</dl>';
}
