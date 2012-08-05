<?php

define('BASE_URL', '/_nmit/sdv602-resources');


$sections = array(
	"Class notes"		=> "/classnotes/",
	"Resources" 		=> "/resources/",

	);



function page_header( $title = 'sdv602'){
	return '<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>'.$title.'</title>
</head>
	<link rel="stylesheet" href="'.BASE_URL.'/assets/css/sitewide.css">
</head>
<body>'
. main_nav();
}

function page_footer(){
	return '<script type="text/javascript" src="'.BASE_URL.'/assets/js/prettify.js"></script>
<script type="text/javascript">
prettyPrint();
</script>
</body>
</html>
';
}



function main_nav(){
	global $sections;

	$nav = '<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <ul class="nav">
      <li><a class="brand" href="'.BASE_URL.'">SDV602 PHP</a></li>';

      foreach ($sections as $title => $url) {
      	
      	$nav .= sprintf('<li><a href="'.BASE_URL.'%s">%s</a></li>', $url, $title);

      }
              // <li class=""><a class="brand" href="'.BASE_URL.'">SDV602 PHP</a></li>
              // <li class=""><a href="'.BASE_URL.'">Overview</a></li>
              // <li class=""><a href="'.BASE_URL.'/notes/">Notes</a></li>
              // <li class=""><a href="'.BASE_URL.'/resources/">Resources</a></li>
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

		// echo "<h6>{$dir}</h6><ul class=\"nav nav-tabs nav-stacked\">";
		$subnav .= "<li class=\"nav-header\">{$dir}</li>";

		$files = glob("$dir/*.htm");

		foreach ($files as $file) {
			
			if ( isset($current) AND $file == $current ) $subnav .= '<li class="active">';
			else $subnav .= '<li>';

			$subnav .= "<a href=\"index.php?page="
			. $file
			. "\">"
			. basename($file,'.htm')
			. '</a></li>';
		}

	}

	return $subnav . '</ol>';
}

