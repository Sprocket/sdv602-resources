<?php
	require '../inc/functions.php';

	echo page_header( 'Examples - Form Helper' );
?>
<div class="container page-wrap">
<div class="row span10 offset1">

<h1>Form Helper</h1>

<h2>Goal</h2>
<p>To make a form helper to allow for easy creation of basic HTML forms.</p>

<p>The helper will live in a page called <code>form_helper.php</code> page. This can then be included into other scripts.</p>


<h2>Pages</h2>

<h3>index.php</h3>
<p>A page that will let us test our helper. Should have a form that submits to:</p>

<h3>process.php</h3>
<p>A page that will accept a submitted form and print out the result using <code>show_form_result()</code></p>


<h3>form_helper.php</h3>
<p>A collection of user defined functions that will drive our helper.</p>
<p>The functions won't <em>echo</em> directly to the browser but return variables to be used by the calling script.</p>

<h4>Form Functions</h4>
<p>Functions for creating and closing the HTML form.</p>

<dl>
	<dt>open_form</dt>
		<dd>The top part of the form. It will accept a <code>settings</code> parameter as an array.</dd>
	<dt>close_form</dt>
		<dd>This will just return the form close tag.</dd>
</dl>

<h4>Input functions</h4>
<p>Functions to make specific form controls:</p>
<dl>
	<dt>input</dt>
		<dd>A 'shortcut' function that will contain a <code>switch</code> statement that will then call the appropriate helper function depending on the type of input.</dd>
	<dt>input_text</dt>
	<dt>input_hidden</dt>
	<dt>input_submit</dt>
		<dd>Each of these will accept a <code>settings</code> array. This will then be merged with a default array using <code>array_merge</code>. The resulting array will then be used to populate a template for the respective input type using <code>sprintf</code> function.</dd>
</dl>

<h4>Data Functions</h4>
<p>Functions for showing form data</p>
<dl>
	<dt>show_form_result</dt>
		<dd>Returns an HTML table showing the results of the submitted form. It will accept an <code>array</code> parameter (that is, the super global containing the form).</dd>
</dl>


<h2>Extras</h2>
<p>Add support for 
<ul>
	<li>textareas</li>
	<li>selects</li>
	<li>reset</li>
	<li>buttons</li>
</ul>

<pre class="prettyprint linenums languague-php">
&lt;textarea name=&quot;message&quot; id=&quot;message&quot; cols=&quot;30&quot; rows=&quot;10&quot;&gt;&lt;/textarea&gt;

&lt;button name=&quot;button&quot; id=&quot;button&quot;&gt;click me&lt;/button&gt;

&lt;input type=&quot;reset&quot; value=&quot;reset form&quot;&gt;

&lt;select name=&quot;my_select&quot; id=&quot;my_select&quot;&gt;
	&lt;option value=&quot;option1&quot;&gt;Option One&lt;/option&gt;
&lt;/select&gt;
</pre>

</p>

</div>
</div>
<?php
echo page_footer();
?>
