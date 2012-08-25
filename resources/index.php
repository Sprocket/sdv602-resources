<?php
	require '../inc/functions.php';
	echo page_header('SDV602 Resources');
?>
<div class="container page-wrap">
<div class="row">

<div class="span3">&nbsp;
	<ul class="nav nav-tabs nav-stacked fixed span3">
		<li><a href="#docs">Documentation</a></li>
		<li><a href="#courses">Online Courses</a></li>
		<li><a href="#articles">Articles</a></li>
		<li><a href="#downloads">Downloads</a></li>
		<li><a href="#libraries">Libraries</a></li>
		<li><a href="#sublime">Sublime Text</a></li>
		<li><a href="#sublimepackages">Sublime Text Packages</a></li>
	</ul>
</div>		

<div class="page-content span9">
<h1>SDV602 Resources</h1>
<small>External links will open in a new tab.</small>

<h3 id="docs">Documentation</h3>
<dl>
	<dt><a href="http://php.net/">php.net</a></dt>
		<dd>The PHP site</dd>
	<dt><a href="http://nz.php.net/docs.php">PHP Documentation</a></dt>
		<dd>PHP Documentation from php.net</dd>
	<dt><a href="http://net.tutsplus.com/category/tutorials/php/">PHP Tutorials at NetTuts+</a></dt>
		<dd>A variety of PHP Tuts</dd>
	<dt><a href="http://stackoverflow.com/questions/tagged/php">Stack Overflow</a></dt>
		<dd>A great place to ask a question and see answers to others</dd>
</dl>

<h3 id="courses">Online Courses</h3>
<dl>
	<dt><a href="https://tutsplus.com/course/php-fundamentals/">PHP Fundamentals at TutsPlus</a></dt>
		<dd>A great introduction to PHP (first few videos are free)</dd>
	<dt><a href="http://www.phptherightway.com/">PHP The Right Way</a></dt>
		<dd>"an easy-to-read, quick reference for PHP best practices" (Available in a number of languages)</dd>
	<dt><a href="http://sheriframadan.com/php-101/">PHP 101</a></dt>
	<dd>A great introductory course on PHP</dd>
	<dt><a href="http://phpmaster.com/category/php-tutorials/beginner/">PHP Master</a></dt>
	<dd>A collection of PHP tutes from Benginger to Expert</dd>
</dl>


<h3 id="articles">General Articles</h3>
<dl>
	<dt><a href="http://net.tutsplus.com/tutorials/php/quick-tip-loop-through-folders-with-phps-glob/">Glob</a></dt>
	<dd>Loop through folders with glob</dd>
	<dt><a href="http://www.developerdrive.com/2012/07/php-error-checking/">Error Checking</a></dt>
	<dd>An small article on some advanced error checking techniques</dd>
	<dt><a href="http://net.tutsplus.com/tutorials/php/quick-tip-7-super-handy-php-functions-for-beginners/">7 Super-Handy PHP Functions for Beginners</a></dt>
	<dd>Some very useful hidden treasures</dd>
	<dt><a href="http://www.homeandlearn.co.uk/php/php10p6.html">homeandlearn CSV</a></dt>
	<dd>Tutorial on Comma Separated Values</dd>
</dl>

<h3 id="downloads">Downloads</h3>
<dl>
	<dt><a href="http://nz.php.net/download-docs.php">PHP Documentation</a></dt>
		<dd>PHP Docs from php.net in a variety of formats</dd>
</dl>

<h3 id="libraries">Libraries, frameworks, etc.</h3>
<dl>
	<dt><a href="http://www.webresourcesdepot.com/php-libraries-for-working-with-excel-word-and-powerpoint-files/">Working with Office Files</a></dt>
	<dd>php libraries for working with excel word and powerpoint files</dd>
</dl>

<h3 id="sublime">Sublime Text</h3>
<dl>
	<dt><a href="http://www.sublimetext.com/">sublimetext.com</a></dt>
	<dd>Where to get Sublime Text editor</dd>
	<dt><a href="http://steverandytantra.com/thoughts/three-months-with-sublime-text-2">3 Months with Sublime Text</a></dt>
	<dd>'Cool things' and some mods</dd>
	<dt><a href="http://docs.sublimetext.info/en/latest/index.html">Unoffical Documentation</a></dt>
	<dd>Pretty much anything you'd ever want to know about Sublime</dd>
</dl>

<h3 id="sublimepackages">Sublime Packages</h3>
<dl>
	<dt><a href="http://wbond.net/sublime_packages/package_control">Package Control</a></dt>
	<dd>A very handy package manager for discovering, installing, updating and removing packages (see below)</dd>
	<dt><a href="http://wbond.net/sublime_packages/community">Sublime Packages</a></dt>
	<dd>An extensive list of Sublime Packages</dd>
	<dt><a href="http://net.tutsplus.com/tutorials/tools-and-tips/essential-sublime-text-2-plugins-and-extensions/">Essential Plugins</a></dt>
	<dd>'Some of the plugins and extensions that I’ve found quite useful'</dd>
	<dt><a href="http://www.ericmartel.com/2012/01/12/sublime-text-2-stack-overflow-plugin/">Search Stackoverflow</a></dt>
	<dd>A very useful plugin for research</dd>
	<dt><a href="https://github.com/buymeasoda/soda-theme/">Soda Theme</a></dt>
	<dd>Dark and light custom UI themes for Sublime Text 2.</dd>
	<dt><a href="http://steverandytantra.com/gridfs/4fff140b1c1cc6a0cc0000b2-pastie-tmtheme.tmtheme">Pastie Colour Theme</a></dt>
	<dd>Download this to your <code>Packages &gt; Themes</code> directory</dd>
	<dt><a href="https://github.com/titoBouzout/SideBarEnhancements">SideBarEnhancements Plug in</a></dt>
	<dd>Provides enhancements to the operations on Side Bar of Files and Folders</dd>
</dl>

<p>To install Package Control copy and paste this code into your Sublime Text console - accessed using ctrl ~</p>
<pre class="prettyprint languague-php">
import urllib2,os;pf='Package Control.sublime-package';ipp=sublime.installed_packages_path();os.makedirs(ipp) if not os.path.exists(ipp) else None;open(os.path.join(ipp,pf),'wb').write(urllib2.urlopen('http://sublime.wbond.net/'+pf.replace(' ','%20')).read())
</pre>

</div>
</div><!-- row -->
</div><!-- page-wrap -->

<?php
echo page_footer();
?>
