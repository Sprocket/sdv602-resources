<?php
	require '../../inc/functions.php';

	echo page_header( 'Examples - Sessions' );
?>
<div class="container page-wrap">
<div class="row span10 offset1">

<h1>Form Helper</h1>

<h2>Goal</h2>
<p>A simple log in system for an administration area.</p>

<p>The system will use <code>sessions</code> to authenticate users on multiple pages.</p>


<h2>Pages</h2>

<h3>index.php</h3>
<p>A log in page with a basic form that submits to <em>admin.php</em>.</p>

<h3>admin.php</h3>
<p>The admin area home page that tests that users are logged in.</p>

<h3>logout.php</h3>
<p>Log users out using <code>session_destroy()</code> and redirect them back to the home page.</p>

<h3>userdetails.php</h3>
<p>A simple list of session data using <code>print_r()</code></p>


<h2>Flow</h2>

<img src="session-app-flow.png" width="783" height="559" alt="" />

</div>
</div>
<?php
echo page_footer();
?>
