<?php
	require '../../inc/functions.php';

	echo page_header( 'Examples - Shuffle Word' );
?>
<div class="container page-wrap">
<div class="row span10 offset1">

<h1>Shuffle Word</h1>

<img src="sketch.jpg" width="270" height="291" class="pull-right" />

<h2>Goal</h2>
<p>Make a game where visitors try to guess a jumbled word.</p>

<p>The system will use <code>str_shuffle</code> to mix the string.</p>

<h2>Flow</h2>

<p>All requests will be channeled through a controller.</p>

<ol>
	<li>test if it is a new game</li>
	<li>test if the guess is correct or not</li>
	<li>show the appropriate message</li>
	<li>show the guess form if it is required</li>
</ol>


<img src="web-app-flow-shuffle-word.png" width="783" height="559" border="0" />

<h2>Pages</h2>

<h3>index.php</h3>
<p>This page will act as a controller for the web site.</p>

<h2>Includes</h2>

<h3>incl/functions.php</h3>
<p>A library or functions used within the application.</p>

<p>It will define a <kbd>MAX_WORD_LENGTH</kbd> constant</p>

<h4>Page Functions</h4>
<p>Functions for creating and closing the HTML template. Also a function for including the page content.</p>

<dl>
	<dt>page_header()</dt>
		<dd>This will create the top of our HTML template.</dd>
	<dt>page_footer()</dt>
		<dd>This will close the page and include a footer.</dd>
</dl>


<h4>Game Functions</h4>
<p>Functions for playing our game.</p>
<dl>
	<dt>get_message( $state )</dt>
		<dd>This will return a message and header based on the state.</dd>
	<dt>get_word()</dt>
		<dd>Returns a word to guess (not shuffled) that is of the required length.</dd>
	<dt>get_form( $attempt, $word, $shuffled_word )</dt>
		<dd>A function that will return an HTML form populated with the supplied varaibles.</dd>
</dl>

<h3>A list of words</h3>
	<p>A csv file of suitable words for the game.</p>




</div>
</div>
<?php
echo page_footer();
?>
