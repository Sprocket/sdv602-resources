<?php
	require '../inc/functions.php';
	echo page_header('SDV602 Study');
?>
<div class="container page-wrap">
<div class="row span11 offset1">
<h1>PHP Fundamental Exercises</h1>


<!-- <h4>Variables</h4>
<ol>
	<li>Set and change variables of each of the simple primitive types</li>
	<li>Test that a variable exists and is of a certain type</li>
	<li>Use global and local variables</li>
	<li>Concatenate multiple strings</li>
	<li>Using PHP variables in a string</li>
	<li>Using <code>printf</code> function to format variables into a string</li>
	<li>Create simple, assocative and multi-dimensional arrays</li>
	<li>Add new items to an array</li>
	<li>Select array items based on key and position</li>
	<li>Perform an operation on each array item</li>
	<li>Create and call a user-defined function</li>
	<li>Returning appropriate values from function</li>
	<li>Have a basic understanding of <code>scope</code></li>
	<li>Using <code>if</code> and <code>switch</code> statements to perform tests and control the flow of your application</li>
	<li>Use a location <code>header</code> to redirect browsers</li>
	<li>Know what <code>$_GET</code> and <code>$_POST</code> super globals are and when you can use them. </li>
</ol> -->


<h4>Variables</h4>
<ol>
	<li>Create two variables called <code>firstname</code> and <code>lastname</code> with your names in them</li>
	<li>Create a new string variable by joining the two variables together with a space between them</li>
	<li>Echo a message to the browser that uses the two variables in a string using double quotes</li>
	<li>Do the same using single quotes and joining the variables to the string</li>
</ol>


<h4>Simple Arrays</h4>
<ol>
	<li>Create a simple array of your favourite foods, store it in a variable</li>
	<li>Add a new item to the array</li>
	<li>Change the first item</li>
	<li>Echo the first and second items with a space between them</li>
</ol>

<h4>Array of numbers</h4>
<ol>
	<li>Create an array of random numbers</li>
	<li>Print the sum of the array</li>
	<li>Sort the array in numeric order</li>
	<li>For each item, multiply the number by itself and print it with an html <code>&lt;br&gt;</code> tag after it</li>
</ol>

<h4>Associative Arrays</h4>
<ol>
	<li>Create an associative array of a fictious family, use their names as <strong>keys</strong> and their ages as <strong>values</strong></li>
	<li>Print the array to the browser within <code>&lt;pre&gt;</code> tags</li>
	<li>Sort the array by the names (so, by the key), print it out</li>
	<li>Sort the array by age (sort by value), print it out</li>
</ol>
<!-- <ol>
	<li>Create a string variable that we can use as a template. Make sure it has a place holder for each family member's name and age.</li>
	<li>Iterate over each array item, printing each using the template in a printf function</li>
</ol> -->

<h4>Application Flow</h4>
<ol>
	<li>Create a variable that contains a positive integer</li>
	<li>Create an <code>if</code> statement that tests if the integer is <strong>less</strong> than 100 and prints a message to the browser when it is</li>
	<li>Add an <code>elseif</code> clause that prints another message if the number is <strong>greater</strong> than 100 but less than 200</li>
	<li>And an <code>else</code> clause that prints a message if neither of these conditions are met</li>
</ol>

<h4>Date Functions</h4>
<ol>
	<li>Create a function called <code>today</code> that echos the current day name to the browser, call the function</li>
	<li>Create another function that prints the time with hour, minute and seconds</li>
	<li>Create anther function that returns a boolean whether it is before midday or not</li>
	<li>Use that function to echo a message depending on whether it is morning or not</li>
</ol>


<h4>Switch</h4>
<ol>
	<li>Create a variable that contains a random number between 0 and ten using<code>rand()</code></li>
	<li>Create a <code>switch</code> statement that tests the value and echos a message when it's right</li>
</ol>




</div><!-- row -->
</div><!-- page wrap -->


<?php echo page_footer(); ?>
