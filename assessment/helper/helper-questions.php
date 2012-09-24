<?php
	require '../../inc/functions.php';
	echo page_header('SDV602 Assessment 3 - Helper - FAQs');
?>
<div class="container page-wrap">
<div class="row">

<div class="page-content span8 offset1">

<h1>Helper FAQs</h1>

<h2>What is a helper?</h2>

<p>Helpers are separate chunks of code that can be attached to our own code (using <kbd>require</kbd> or <kbd>include</kbd> statements). We can then use the functions that are within this helper script. </p>

<p>A helper isn't part of PHP, it's a technique that helps us write clean code. It is also a nice way to reuse code across pages and even projects.</p>

<h3>An Example Helper</h3>

<p><strong>index.php</strong></p>
<pre class="prettyprint linenums languague-php">
// attach the text helper
require &#039;helpers/text.php&#039;;

echo placeholder_text();
// Lorem ipsum...
</pre>

<p><strong>helpers/text.php</strong></p>
<pre class="prettyprint linenums languague-php">
function placeholder_text(){
	return &#039;Lorem ipsum...&#039;;
}
</pre>

<p>We have access to the functions defined in the string helper once we have included the helper file. Calling the <kbd>helper_txt_lorem()</kbd> function will then return the placeholder text, as defined in the that function.</p>



<h2>Helper and function names</h2>

<p>It is important that the names we use for our functions and variables are consistent and safe. This is because ultimately there could be a lot (100+) functions and we want them to be easy to use.</p>

<p>Helper names will be in all lowercase and use underscores to show word boundaries.</p>

<pre class="prettyprint linenums languague-php">
// good names
helper_htm_page_header();
helper_ema_send_email();
_ema_private_function(); // see 'private functions' below
$_ema_private_var;

// bad names
page_header(); // no helper_code_ prefix
send(); // no prefix, too generic
privateFunction(); // camel case, no prepended underscore
$privateVar(); // camel case, no prepended underscore
</pre>

<p><span class="label label-info">Note</span> It is unlikely you will create variables that will live in the global scope</p>

<h3>Directory Structure</h3>

<p>Each helper will live inside its own directory, even if it is the only file within it. The name of both the directory and the helper will be the same - for instance, email, string, html, form, etc.</p>

<p>You can include other files, such as config files, other functions, text files, documentation, etc.</p>

<p>Ultimately, a collection of helpers will live in a 'helpers' directory, like this:</p>

<p><strong>Directory Layout</strong></p>
<pre class="">
helpers/
	string/
		string.php	// main helper file
		config.php	// string configuration file
</pre>

<h3>Scope</h3>

<p>Helpers will live in the global scope - this is because that is where functions live by default.</p>

<p><strong>Global scope</strong> means that variables and functions are accessible by all of your code. See the section in the class notes.</p>

<p>The problem with global scope is that we are risking name collisions - this happens when we have the same name for more than one thing. For example, we can only have one function called <kbd>start()</kbd>, and one variable called <kbd>$name</kbd>. To fix this we need to have a naming convention that each helper will follow.</p>

<p>All functions should start with <kbd>helper_</kbd> and then a unique three character code based on the name of the helper itself. For instance, a string function that returns placeholder text should be called <kbd>helper_str_placeholder()</kbd>.</p>

<p><span class="label label-info">Note</span> Local variables (those created within your functions) do not live in the global scope and are not subject to any special naming conventions.</p>


<h3>'Private' functions and variables</h3>

<p>Sometimes you might want to create functions and variables that only you can use. You might have a function within your helper that calls another function, but you don't want the second function to used by others. These functions are called 'private'. Functions that anyone can call are called 'public'.</p>

<p>Unlike Object Orientated PHP code, procedural PHP does not have a way that we can actually control the visibility of functions. However, we can use a visual clue to let others know they shouldn't be using certain functions and variables. These functions however live in the global scope so we need to give them unique names. We can do this by prepending the names with an underscore and the 3 character code:</p>

<pre class="prettyprint linenums languague-php">
// a &#039;private&#039; function
function _str_secret_function(){ ... }

// a &#039;private&#039; variable
$_str_secret_var = &#039;sekrit&#039;;
</pre>

<p><span class="label label-info">Note</span> Please note, local variables do not need to follow this convention (see above note).</p>


<h2>Parameters</h2>

<p>Several of your functions will use parameters to let users pass values and change settings. You do this as you would any other function.</p>

<pre class="prettyprint linenums languague-php">
function helper_img_link( $src, $text ){
	return &quot;&lt;a href=\&quot;$src\&quot;&gt;$text&lt;/a&gt;&quot;;
}

// users can then pass values are usual
echo helper_img_link( &#039;images/lolcat.jpg&#039;, &#039;My Cat&#039;);
</pre>

<p>It can be a good idea to have default values for as many parameters as possible - this will make your helper easier and quicker to use. This is the basis of the 'convention over configuration' idea.</p>

<pre class="prettyprint linenums languague-php">
function helper_img_link( $src, $text = NULL ){

	// if no text is set we'll use the file name
	if ( is_null ( $text ) ) $text = basename($src,&#039;.jpg&#039;);

	return &quot;&lt;a href=\&quot;$src\&quot;&gt;$text&lt;/a&gt;&quot;;
}

echo helper_img_link('images/lolcat.jpg');
// &lt;a href=&quot;images/lolcat.jpg&quot;&gt;lolcat&lt;/a&gt;

</pre>
<p><span class="label label-info">Note</span> Remember to put optional parameters last in your function definition. See the Functions notes.</p>


<h2>Configuration Files</h2>

<p>Configs are a way that users can change parts of your helper to suit without having to edit your code directly. This is a good idea because:</p>

<ul>
	<li>It's quick as they don't have to read and understand your code</li>
	<li>It's safer as there is little risk of them breaking your code</li>
	<li>It makes upgrading a helper easier as they're not overwriting any changes</li>
	<li>It shows people what they can change</li>
</ul>

<p>An example is a helper that creates log files. It needs to know where it should save the log files. It also lets users change things like date format and file extensions.</p>

<p>A great way to do this is to use a separate config file that is then included by your helper. Here's a way you could do it:</p>

<p><strong>config.php</strong></p>
<pre class="prettyprint linenums languague-php">
$_log_config = array(
	&#039;log_dir&#039; =&gt; &#039;logs&#039;, // directory from web app
	&#039;log_ext&#039; =&gt; &#039;.php&#039;, // log file extension: .php, .txt, .log etc.
);
</pre>

<p><span class="label label-info">Note</span> It is a good idea to prepopulate your configs with the most likely default settings. Also note what each config does and any possible values, like for the 'log_ext' example above.</p>

<p>This is simply an associative array where each member with a key and a value. To look up a config you can simply include the file and access the value using a key as you would any other array:</p>

<pre class="prettyprint linenums languague-php">
require 'configs.php'; // attaches config file
$log_directory = $_log_config['log_dir']; // logs
</pre>

<p>You could also create a function that will act as an 'accessor' or 'getter' for the configs:</p>

<pre class="prettyprint linenums languague-php">
/**
 * access config items
 *
 * @access private
 * @param string  $key the config key
 * @return string      the value of the config
 */
function _log_config_get( $key ) {

	global $_log_config;
	return $_log_config[$key];

}
</pre>

<p>This is a good technique as you could add code to test any config values.</p>

</div><!-- page-content -->
</div><!-- row -->
</div><!-- page-wrap -->

<?php
echo page_footer();
?>
