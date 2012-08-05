<?php
	require '../functions.php';
	echo page_header();
?>
<div class="container page-wrap">
<div class="row">

<div class="span3">

<?php

if ( isset($_GET['page'])) {
	$page = $_GET['page'];
} else {
	$page = "intro/intro.htm";
}

echo sub_nav('*',$page);

?>
</div>		

<div class="page-content span9">

<?php

	include "{$page}";
?>
</div>
</div><!-- row -->
</div><!-- page-wrap -->

<?php
echo page_footer();
?>
