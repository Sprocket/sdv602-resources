<?php
	require '../inc/functions.php';


if ( isset( $_POST['editor_page']) ){

	$msg = ( save_notes( $_POST['editor_page'], $_POST['editor_content']) )
		? array( 'success','notes saved')
		: array( 'error','there was a problem saving your notes');
}

	echo page_header();
?>
<div class="container page-wrap">
<div class="row">

<div class="span3">

<?php

if ( isset($_GET['page'])) {
	$page = $_GET['page'];
} else {
	$page = "01.intro/01.intro.htm";
}

echo sub_nav('*',$page);

?>
</div>		

<div class="page-content span9">

<?php

if ( isset($msg) ) echo show_msg($msg);


include "{$page}";

if ( SHOW_NOTES == 'EDIT'){

	$notes = '../_notes/'.$page;

	if ( file_exists( $notes )){
		echo '<div id="notes">';

		echo edit_form( $notes );
		// include $notes;
		echo '</div>';
	}

}

?>
</div>
</div><!-- row -->
</div><!-- page-wrap -->

<?php
echo page_footer();
?>
