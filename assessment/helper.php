<?php
	require '../inc/functions.php';
	echo page_header('SDV602 Assessment 3 - Helper');
?>
<div class="container page-wrap">
<div class="row">

<div class="page-content span8 offset1">


<h1>Assessment 3: Helper</h1>

<p>The majority of PHP applications use external software of some sort; whether it is a complete framework, libraries or stand alone helper functions.</p>

<h2>Specification</h2>

<h3>Goal</h3>
<p>Build a PHP 'helper' that can be incorporated into other projects. Each helper will include approximately a dozen functions - this does not include 'private' functions used by the helper itself.</p>

<p>Students will be incouraged to follow the 'convention over configuration' paradigm, though configuration will be required where appropriate.</p>

<h2>Requirements</h2>

<h3>Conventions</h3>
<p>Each helper will need to abide strictly to preset requirements. These will cover:</p>
<ul>
	<li>Naming of functions, constants and variables</li>
	<li>Error reporting</li>
	<li>Code formatting</li>
	<li>Versioning</li>
</ul>

<h3>Documentation</h3>
<p>Each helper must be well documented and code commented accordingly.</p>

<h3>Presentation</h3>
<p>A class presentation will help introduce others to your helper.</p>

<h3>Examples</h3>
<p>Each helper should include real world examples of how it can be used.</p>

<h3>Dependencies</h3>
<p>Each helper must operate independently of any other software (including other helpers) and non-standard PHP libraries. Helpers will live in their own directory with any other supporting files.</p>

<p>Each helper will work with a supplied 'loader' to help others incorporate it into their projects.</p>

<h2>Features</h2>

<p>Each helper must be unique and cover a specified scope.</p>

<p>It is up to students to create useful functions that are likely to be used. You will be encouraged to work with other developers to help identify possible features.</p>

<h2>Suggested topics</h2>

<dl>
	<dt>Templates</dt>
		<dd>Easily create HTML pages and incorporate content</dd>
	<dt>HTML</dt>
		<dd>Common functions for constructing HTML elements</dd>
	<dt>Forms</dt>
		<dd>Create and process forms</dd>
	<dt>Uploader</dt>
		<dd>Easily upload and process files</dd>
	<dt>Authentication</dt>
		<dd>Allow users to access private areas</dd>
	<dt>Logging</dt>
		<dd>Create and process log files</dd>
	<dt>Config</dt>
		<dd>Create and access configuration settings</dd>
	<dt>Sessions</dt>
		<dd>Add session functionality to apps</dd>
	<dt>Strings</dt>
		<dd>Common string functions</dd>
	<dt>Arrays</dt>
		<dd>A selection of array functions</dd>
	<dt>Image</dt>
		<dd>Resize and manipulate image files</dd>
	<dt>XML</dt>
		<dd>Allow users to incorporate XML files into their apps</dd>
	<dt>Twitter</dt>
		<dd>Connect to and retrieve tweets</dd>
	<dt>Files</dt>
		<dd>Retrieve information about the filesystem</dd>
</dl>


<h2>Due Date</h2>
<p>First week back after break - 16th Oct 2012 - and it counts for 30% of your final grade</p>

</div><!-- page-content -->
</div><!-- row -->
</div><!-- page-wrap -->

<?php
echo page_footer();
?>
