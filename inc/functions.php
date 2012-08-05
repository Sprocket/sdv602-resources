<?php

require 'configs.php';

// PAGE FUNCTIONS

function page_header( $title = 'sdv602'){
	return '<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>'.$title.'</title>
</head>
	<link rel="stylesheet" href="'.BASE_URL.'/inc/css/sitewide.css">
</head>
<body>'
. main_nav();
}

function page_footer(){
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
function main_nav(){
	global $sections;

	$nav = '<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <ul class="nav">
      <li><a class="brand" href="'.BASE_URL.'">'.PROJ_NAME.'</a></li>';

      foreach ($sections as $title => $url) {
      	$nav .= sprintf('<li><a href="'.BASE_URL.'%s">%s</a></li>', $url, $title);
      }

    $nav .= '</div>
  </div>
</div>';

	return $nav;

}

function sub_nav($directory, $current = NULL) {
	$subnav = '<ol>';

	$directories = glob($directory, GLOB_ONLYDIR);

	$subnav .= "<ul class=\"nav nav-list\">";

	foreach ($directories as $dir) {

		$subnav .= "<li class=\"nav-header\">".clean_linktext($dir)."</li>";

		$files = glob("$dir/*.htm");

		foreach ($files as $file) {
			
			if ( isset($current) AND $file == $current ) $subnav .= '<li class="active">';
			else $subnav .= '<li>';

			$subnav .= "<a href=\"index.php?page="
			. $file
			. "\">"
			. clean_linktext($file)
			. '</a></li>';
		}

	}

	return $subnav . '</ol>';
}

// LINK FUNCTIONS
function clean_linktext( $link_text ) {
	$cleaned = preg_replace("/[0-9.]/", "", basename($link_text,'.htm'));
	return str_replace('_', ' ', $cleaned);
}

/* MESSAGES */
function show_msg( $msg ) {

	$alert = sprintf('<div class="alert alert-%s">%s</div>',
		$msg[0],
		$msg[1]
		);

	return $alert;

}


/* EDITOR FUNCTIONS */

function edit_form( $page ){

	$form = "<form action=\"\" method=\"post\">
	<input type=\"hidden\" value=\"{$page}\" id=\"editor_page\" name=\"editor_page\">
	<textarea id=\"editor_content\" name=\"editor_content\">"	. file_get_contents($page) . "</textarea>";

	$form .= "<div id=\"editor-buttons\"><a href=\"index.php\" class=\"btn\">Cancel</a><input type=\"submit\" class=\"btn btn-primary\" value=\"save\"></div></form>";

	return $form;
}


function save_notes( $page, $content ){

	return TRUE;
	return file_put_contents($page, $content);


}
