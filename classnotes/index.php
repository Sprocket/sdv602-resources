<?php
	require '../inc/functions.php';


// save notes if present
if ( isset( $_POST['editor_page']) ){
	$msg = ( save_notes( $_POST['editor_page'], $_POST['editor_content']) )
		? array( 'success','notes saved')
		: array( 'error','there was a problem saving your notes');
}

// set $page var
$page = ( isset($_GET['page'])) ? $_GET['page'] : DEFAULT_NOTE;

	echo page_header( $page );
?>
<div class="container page-wrap">
<div class="row">

<div class="span3" id="sub-nav">

<?php

echo sub_nav('*',$page);

?>
<a href="#" class="btn btn-mini" id="nav-hide" accesskey="n">hide</a>
</div>		

<div class="page-content span9">

<?php

if ( isset($msg) ) echo show_msg($msg);


include "{$page}";

if ( EDIT_CLASS_NOTES ) echo edit_note_link($page);

echo process_notes( $page );

?>
</div>
</div><!-- row -->
</div><!-- page-wrap -->

<?php
echo page_footer();
?>
