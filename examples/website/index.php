<?php
	require '../../inc/functions.php';

	echo page_header( 'Examples - Sessions' );
?>
<div class="container page-wrap">
<div class="row span10 offset1">

<h1>Website system</h1>

<h2>Goal</h2>
<p>Make a system that will allow us to add pages to a web site.</p>

<p>The system will use <code>configs</code> to set default settings.</p>


<h2>Pages</h2>

<h3>index.php</h3>
<p>This page will act as a controller for the web site.</p>



<h3>Web pages</h3>
<p>Two or three simple HTML pages to be used as content for the website. These should be HTML fragments stored in a <em>pages</em> directory. The names should reflect the topic of each page.</p>

<h2>Includes</h2>

<h3>incl/functions.php</h3>
<p>A library or functions used within the application.</p>

<h4>Page Functions</h4>
<p>Functions for creating and closing the HTML template. Also a function for including the page content.</p>

<dl>
	<dt>page_header()</dt>
		<dd>This will create the top of our HTML template. It will accept an optional <code>title</code> parameter but we won't use it for now.</dd>
	<dt>page_footer()</dt>
		<dd>This will close the page and include a footer.</dd>
	<dt>get_page()</dt>
		<dd>This will retrieve the HTML page, if it exists.</dd>
</dl>

<h4>Navigation Functions</h4>
<p>Functions for creating our nav bar and formatting the links</p>

<dl>
	<dt>nav</dt>
	<dd>A function that will create a list of links based on our content pages</dd>
	<dt>clean_linktext</dt>
	<dd>A function that return a cleaned string</dd>

</dl>

<h3>incl/configs.php</h3>
<p>A page of defined constants that we can use within our project. They should be constants declared using <code>define()</code>.</p>
<h4>incl/configs.php</h4>
<dl>
<dt>PROJ_NAME</dt>
	<dd>The name of the web site</dd>
<dt>STYLESHEET</dt>
	<dd>A file name for a stylesheet</dd>
<dt>DEFAULT_PAGE</dt>
	<dd>The content page we want to show by default</dd>
<dt>COPYRIGHT</dt>
	<dd>A copyright message</dd>
</dl>

<h2>Assets</h2>
<p>We will also need an assets directory for storying our stylesheets and images in appropriate directories.</p>


</div>
</div>
<?php
echo page_footer();
?>
