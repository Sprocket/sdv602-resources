<?php
	require 'inc/functions.php';
	$page = $_GET['page'];
	echo page_header('edit - '.$page);

	$back_link = BASE_URL."/classnotes/index.php?page={$page}"
?>
<div class="container page-wrap">
<div class="row">

<div class="span3">

</div>		

<div class="page-content span9">

<h1>SDV602 Overview</h1>
<div id="notes">
<?php
// echo file_get_contents('classnotes/'.$page);

echo "<form action=\"\" method=\"post\">
	<input type=\"hidden\" value=\"{$page}\" id=\"page\" name=\"page\">
	<textarea id=\"editor_content\" name=\"editor_content\">".
	file_get_contents('classnotes/'.$page)
	. "</textarea><a href=\"{$back_link}\">Cancel</a> <input type=\"submit\"></form>";


?>
</div>
</div>
</div><!-- row -->
</div><!-- page-wrap -->

<?php
echo page_footer();
?>
