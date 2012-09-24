<?php
	require '../../inc/functions.php';
	echo page_header('SDV602 Assessment 3 - Helper - FAQs');
?>
<div class="container page-wrap">
<div class="row">

<div class="page-content span8 offset1">

<h1>Helper Documentation</h1>

<p>There will be required to created user documentation for your helper so others can learn how to use it.</p>

<p><span class="label label-info">Note</span> It's reccomended you work on your documentation after you have finished writing your code. It will be easier and you won't have to update it so much when you change your code.</p>

<h2>Comments</h2>

<p>Your code will have to be well commented as your code will be read by others. Please do not comment for the sake of commenting: for instance, when your code is self explanatory.</p>



<h2>Doc Blocks</h2>

<p>Look at the page on 'docblocks' within the class notes.</p>

<p>Each function will require its own documentation. You will also need to have a docblock at the top of your helper. Include entries for <kbd>author, package</kbd> and <kbd>version.</kbd> </p>

<pre class="prettyprint linenums languague-php">
&lt;?php
/**
 * LOGGER! a logging helper
 * create and access log files with style
 *
 * @author Duncan Heal &lt;duncan@sprocket.co.nz&gt;
 * @package Logger
 * @version 0.6
 */

// function definitions, etc.
...
</pre>


<h3>Docblockr Sublime Text Plug in</h3>

<p>There is a great Sublime Text plug in that help automate the creation of your docblocks. Here's how to install it.</p>

<dl>
<dt>1. Open the Command Palette</dt>
	<dd>From within Sublime, press <kbd>ctrl-p</kbd></dd>
<dt>2. Search for <kbd>"Install Package"</kbd></dt>
	<dd>Type <kbd>'install'</kbd> hit return to select it, you will need to wait a few seconds for it to update the repositories</dd>
<dt>3. Search for <kbd>"DocBlockr"</kbd></dt>
	<dd>And select it to install</dd>
</dl>

<p>Now you can automatically create docblocks by moving your cursor to the line above a function or variable, typing <kbd>/**</kbd> and hitting tab. It should now create a new comment block and prepopulate it with the appropriate fields.</p>

<p><a href="http://www.youtube.com/watch?v=WaQk9QZNaOY">YouTube: Creating Docblocks Using DocBlockr</a></p>

<h2>User Documentation</h2>

<p>Each helper will be required to be documentated and include examples so others can quickly learn how to code with your helper.</p>

<p><span class="label label-info">Note</span> Do not document private functions and variables as they are not considered part of the public <abbr title="Application Programming Interface">API</abbr>.</p>

<p>Create a separate HTML page that has no dependencies such as CSS and JS.

List each of your public functions within h4 headers. I suggest you simply copy the first line including your parameters and default values. Below this write a brief description of the function. Make sure to explain each of the parameters.</p>

<p>Below this include some examples of how users could use the function within a <kbd>pre</kbd> tag. Provide comments on the outcome and suggestions on how your functions could be used.</p>


<div class="well">
<h3>Writing log entries</h3>

<h4>helper_log_write( $msg, $lvl = 'ERROR' )</h4>
<p>Adds a new entry to the current log. It accepts the message and an optional level ('error' [default], 'warning', and 'info').</p>

<pre>
helper_log_write( &#039;File not found&#039; );
helper_log_write( &#039;Another file not found&#039;, &#039;error&#039; );

// LOG FILE:
//
// ERROR	2012-09-23	12:08:25	File not found
// ERROR	2012-09-23	12:08:25	Another file not found
</pre>
</div>

<p>Functions do not need to be documented in the order they are defined in your code. It can be a good idea to group your functions into related groups.</p>


</div><!-- page-content -->
</div><!-- row -->
</div><!-- page-wrap -->

<?php
echo page_footer();
?>
