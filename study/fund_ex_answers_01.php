<?php
require '../inc/functions.php';
echo page_header('SDV602 Study');
?>
<div class="container page-wrap">
<div class="row span10 offset1">
<h1>PHP Fundamental Exercises</h1>



<ul class="nav nav-tabs">
<li class="active"><a href="#variables" data-toggle="tab">variables</a></li>
<li><a href="#arrays" data-toggle="tab">arrays</a></li>
<li><a href="#numbered-arrays" data-toggle="tab">array of numbers</a></li>
<li><a href="#assoc-arrays" data-toggle="tab">assoc arrays</a></li>
<li><a href="#flow" data-toggle="tab">app flow</a></li>
</ul>

<div class="tab-content">

<div class="tab-pane active" id="variables">
<h2>Variables</h2>
<h4>Create two variables called firstname and lastname with your names in them</h4>
<pre class="prettyprint linenums languague-php">
$firstname = &#039;Duncan&#039;;
$lastname = &#039;Heal&#039;;
</pre>

<h4>Create a new string variable by joining the two variables together with a space between them</h4>
<pre class="prettyprint linenums languague-php">
$name = $firstname . &#039; &#039; . $lastname;
</pre>

<h4>Echo a message to the browser that uses the two variables in a string using double quotes</h4>
<pre class="prettyprint linenums languague-php">
echo &quot;Hello there, my name is {$firstname} {$lastname}&quot;;
// Hello there, my name is Duncan Heal
</pre>

<h4>Do the same using single quotes and joining the variables to the string</h4>
<pre class="prettyprint linenums languague-php">
echo &#039;Hello there, my name is &#039;.$firstname.&#039; &#039;.$lastname;
// Hello there, my name is Duncan Heal
</pre>
</div>


<div class="tab-pane" id="arrays">

<h2>Simple Arrays</h2>

<h4>Create a simple array of your favourite foods, store it in a variable</h4>
<pre class="prettyprint linenums languague-php">
$fav_foods = array(&#039;steak&#039;,&#039;sagawala&#039;,&#039;salmon&#039;);

[0] =&gt; steak
[1] =&gt; sagawala
[2] =&gt; salmon
</pre>

<h4>Add a new item to the array</h4>
<pre class="prettyprint linenums languague-php">
$fav_foods[] = &#039;peas&#039;;

[0] =&gt; steak
[1] =&gt; sagawala
[2] =&gt; salmon
[3] =&gt; peas
</pre>

<h4>Change the first item</h4>
<pre class="prettyprint linenums languague-php">
$fav_foods[0] = &#039;chops&#039;;

[0] =&gt; chops
[1] =&gt; sagawala
[2] =&gt; salmon
[3] =&gt; peas
</pre>

<h4>Echo the first and second items with a space between them</h4>
<pre class="prettyprint linenums languague-php">
echo $fav_food[0] . &#039; &#039; . $fav_food[1];

// chops sagawala
</pre>

</div>


<div class="tab-pane" id="numbered-arrays">

<h2>Array of Numbers</h2>
<h4>Create an array of random numbers</h4>
<pre class="prettyprint linenums languague-php">
$numbers = array(1, 3, 99, -42, 11, 174, -2);
</pre>

<h4>Print the sum of the array</h4>
<pre class="prettyprint linenums languague-php">
echo array_sum( $numbers );
// 244
</pre>

<h4>Sort the array in numeric order</h4>
<pre class="prettyprint linenums languague-php">
sort( $numbers );

[0] =&gt; -42
[1] =&gt; -2
[2] =&gt; 1
[3] =&gt; 3
[4] =&gt; 11
[5] =&gt; 99
[6] =&gt; 174
</pre>

<h4>For each item, multiply the number by itself and print it with an html &lt;br&gt; tag after it</h4>
<pre class="prettyprint linenums languague-php">
foreach( $numbers as $number ){
	echo &quot;{$number} * {$number} = &quot; . $number * $number . &quot;&lt;br&gt;&quot;;
}

-42 * -42 = 1764
-2 * -2 = 4
1 * 1 = 1
3 * 3 = 9
11 * 11 = 121
99 * 99 = 9801
174 * 174 = 30276
</pre>
</div>

<div class="tab-pane active" id="assoc-arrays">

<h2>Associative Arrays</h2>
<h4>Create an associative array of a fictious family,<br>use their names as keys and their ages as values</h4>
<pre class="prettyprint linenums languague-php">
$family = array(
	&#039;Ben&#039;	=&gt; 10,
	&#039;Sally&#039;	=&gt; 8,
	&#039;John&#039;	=&gt; 40,
	&#039;Sue&#039;	=&gt; 38
);
</pre>

<h4>Print the array to the browser within &lt;pre&gt; tags</h4>
<pre class="prettyprint linenums languague-php">
echo &#039;&lt;pre&gt;&#039;;
print_r( $family );
echo &#039;&lt;/pre&gt;&#039;;

[Ben] =&gt; 10
[Sally] =&gt; 8
[John] =&gt; 40
[Sue] =&gt; 38
</pre>

<h4>Sort the array by the names (so, by the key), print it out</h4>
<pre class="prettyprint linenums languague-php">
ksort( $family );

[Ben] =&gt; 10
[John] =&gt; 40
[Sally] =&gt; 8
[Sue] =&gt; 38
</pre>

<p>If we'd have used <kbd>sort</kbd> we would have got:</p>
<pre class="prettyprint linenums languague-php">
[0] => 8
[1] => 10
[2] => 38
[3] => 40
</pre>

<h4>Sort the array by age (sort by value), print it out</h4>
<pre class="prettyprint linenums languague-php">
asort( $family );
print_r( $family );

[Sally] =&gt; 8
[Ben] =&gt; 10
[Sue] =&gt; 38
[John] =&gt; 40
</pre>
</div>


<div class="tab-pane active" id="flow">

<h2>APPLICATION FLOW</h2>

<h4>Create a variable that contains a positive integer</h4>
<pre class="prettyprint linenums languague-php">
$int = 70;
</pre>

<h4>Create an if statement that tests if the integer is less than 100 and prints a message to the browser when it is</h4>
<pre class="prettyprint linenums languague-php">
if ( $int &lt; 100 ){
	echo 'The integer is less than 100';
}

</pre>

<h4>Add an elseif clause that prints another message if the number is greater than 100 but less than 200</h4>
<pre class="prettyprint linenums languague-php">
if ( $int &lt; 100 ){
	echo 'The integer is less than 100';
} else if ( $int &lt; 100 AND $int &gt; 200 ) {
	echo 'The number is greater than 100 but less than 200';
}
</pre>

<h4>And an else clause that prints a message if neither of these conditions are met</h4>
<pre class="prettyprint linenums languague-php">
if ( $int &lt; 100 ){
	echo 'The integer is less than 100';
} else if ( $int &lt; 100 AND $int &gt; 200 ) {
	echo 'The number is greater than 100 but less than 200';
} else {
	echo 'The number is greater than 200';
}
</pre>




</div>




</div><!-- tab content -->
<?php echo page_footer(); ?>
