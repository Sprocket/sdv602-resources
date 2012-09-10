<?php
	require '../inc/functions.php';
	echo page_header('PHP Fundamental Exercises 2');
?>
<div class="container page-wrap">
<div class="row span11 offset1">
<h1>PHP Fundamental Exercises 2</h1>


<h3>Variables</h3>
<p>What types are the following values</p>
<pre class="prettyprint linenums languague-php">
1
'1'
''
"Hello there"
12.3
'12.4'
['one','two','three']
[]
</pre>


<p>Which of the following values are considered FALSEY (a Boolean false)?</p>
<pre class="prettyprint linenums languague-php">
0
'0'
'zero'
FALSE
'false'
''
""
NULL
</pre>



<h3>Names in PHP</h3>
<p>List whether the following variable names are valid or not and why. Then suggest a reason why it is a good name or not.</p>
<pre class="prettyprint linenums languague-php">
$my_variable
MY_VARIABLE
$my variable
$my-variable
$123
$name
$_person_name
$___name
$VariableForAPersonsName
</pre>


<h3>Strings</h3>

<pre class="prettyprint linenums languague-php">
$name = &#039;Steve&#039;;
$food = &#039;pizza&#039;;
$colour = &#039;blue&#039;;
</pre>

<p>What are three ways of creating the following string using the above variables:<br>
<kbd>Hi, my name is Steve. I love pizza and the colour blue.</kbd>
</p>

<h3>Function</h3>
<p>Create a function that will accept a simple array and return a random value from that array.</p>

<p>Creat three arrays for people's names, types of food and colours. Use the function you created above to echo out the same sentence in the strings example, but populate it with random members of the appropriate arrays.</p>




<h3>Arrays</h3>
<pre class="prettyprint linenums languague-php">
$family = array(
	array(
		&#039;name&#039;	=&gt; &#039;Sue&#039;,
		&#039;age&#039;	=&gt; 42,
		&#039;role&#039;	=&gt; &#039;mother&#039;
		),
	array(
		&#039;name&#039;	=&gt; &#039;John&#039;,
		&#039;age&#039;	=&gt; 44,
		&#039;role&#039;	=&gt; &#039;father&#039;
		),
	array(
		&#039;name&#039;	=&gt; &#039;Sally&#039;,
		&#039;age&#039;	=&gt; 12,
		&#039;role&#039;	=&gt; &#039;daughter&#039;
		),
	array(
		&#039;name&#039;	=&gt; &#039;Jimmy&#039;,
		&#039;age&#039;	=&gt; 14,
		&#039;role&#039;	=&gt; &#039;son&#039;
		)
);
</pre>

<p>Echo out each family member's name and their role.</p>

<p>How would we get the name of the fourth member?</p>

<p>Loop through each family member, when you find the father echo out his name.</p>

<p>Give an example of how you would add up the ages of the family members.</p>

<p>Calculate the average age of the family. (Hint, use the code you used above and the <a href="http://php.net/manual/en/function.count.php">count</a> function</p>

<p>Loop through the family and echo out the names that have more than 3 characters (use <a href="http://php.net/manual/en/function.strlen.php">strlen</a>)</p>



<h3>Application Flow</h3>
<p>Refactor this code to work with a conditional operator:</p>
<pre class="prettyprint linenums languague-php">
if ( $_POST[&#039;guess&#039;] == &#039;apple&#039; ) ) {
	echo &#039;That was the right guess.&#039;;
} else {
	echo &#039;That was not the wrong guess.&#039;;
}
</pre>


<p>Refactor this code to use functions and a post-increment operator:</p>
<pre class="prettyprint linenums languague-php">
if ( correct_guess() ) {
	$correct_guesses = $correct_guesses + 1;
	echo &#039;That was right!&#039;;
} else {
	$wrong_guesses = $wrong_guesses + 1;
	echo &#039;That was not right!&#039;;
}
</pre>

<p>Refactor the answer to the example above to use a conditional operator instead of an if statement.</p>


<h3>Dates</h3>

<p>Show how to create the following date formats (using the current day):</p>

<pre class="prettyprint linenums languague-php">
10:51:04 // time with seconds
11/09/12
Tue 11th September
Tuesday the 11th of Sep 2012
Today is Tuesday
It is day 254 of 2012
</pre>


<h2>Syntax</h2>

<p>List the problems you see with this code</p>
<pre class="linenums languague-php">
function test-guess {
	correct_guesses = $correct_guesses + 1
	if ( correct_guesses = 5 )
		return 'That's all the guesses you get!';
	else return 'You win';
}
Test-guess();
</pre>




</div><!-- row -->
</div><!-- page wrap -->


<?php echo page_footer(); ?>
