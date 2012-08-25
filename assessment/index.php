<?php
	require '../inc/functions.php';
	echo page_header('SDV602 Resources');
?>
<div class="container page-wrap">
<div class="row">	

<div class="page-content span10 offset1">


<h1>Assessment</h1>


<table class="table table-bordered table-striped">

<thead>
	<tr>
		<th>&nbsp;</th>
		<th>Assessment
		</th>
		<th>Marks</th>
	</tr>
</thead>
<tbody>
	<tr>
		<th>1</th>
		<td>
			<h4>Presentation</h4>
			<p>Brief presentation to the class based on notes</p>
		</td>
		<td>5</td>
	</tr>
	<tr>
		<th>2</th>
		<td>
			<h4>Syntax Test</h4>
			<p>A written exam testing knowledge of fundamental syntax</p>
		</td>
		<td>5</td>
	</tr>
	<tr>
		<th>3</th>
		<td>
			<h4>Helper</h4>
			<p>Build a helper that can be incorporated into other projects</p>
		</td>
		<td>30</td>
	</tr>
	<tr>
		<th>4</th>
		<td>
			<h4>Major Project</h4>
			<p>A functional web application that *does* something</p>
		</td>
		<td>60</td>
	</tr>
	<tr>
		<th colspan="2">total</th>
		<td>100</td>
	</tr>
</tbody>
</table>



<h2>Presentation</h2>
<p>Each student will make a short presentation of approximately 10 minutes to the whole class. Their talk will be explaining how a particular aspect of fundamental PHP.</p>

<p>They will be encouraged to perform some self-initiated research and extend on class notes they have been given.</p>

<p>The idea is to provide the class with a refresher on most aspects while letting students extend their understanding in an area that interests them or that they have had trouble with before.</p>

<p>They will create an HTML page of supporting material that will then be made available as a study aid to the whole class.</p>

<h2>Syntax Test</h2>

<p>A brief and largely multi-choice test on the fundamentals of PHP syntax.</p>

<p>The focus is on their understanding, not on the tools available to them.</p>

<p>The test will be short and not particularly challenging due to the limitations of not using laptops.</p>

<p>This is ensure they are suitably prepared for the larger coding assingments.</p>

<h2>Helper</h2>

<p>A 'helper function' will be developed by each student. This will perform a limited range of tasks and be self-contained but will be built in a way that will allow it to be easily incorporated into other larger projects.</p>

<p>The idea is to prepare them for coding a larger project specifically, thinking of it as a collection of interconnecting smaller parts.
</p>

<ol>
	<li>Design a basic API</li>
	<li>Application design (code structure, application flow, etc.)</li>
	<li>Project Managment</li>
	<li>Writing documentation</li>
</ol>


<p>It will hopefully help them begin to appreciate the pragmatic nature of application development.</p>


<h2>Major Project</h2>

<p>Each student will create a functional web application that performs a number of tasks.</p>

<p>It could be a game, an administration system, a site that allows users to search a database, etc.</p>


</div>
</div><!-- row -->
</div><!-- page-wrap -->

<?php
echo page_footer();
?>
