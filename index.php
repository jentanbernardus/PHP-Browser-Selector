<?php require('css_browser_selector.php') ?>
<!DOCTYPE html>
<html class="<?php echo css_browser_selector() ?>">
<head>

<title>PHP CSS Browser Selector</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="author" content="Bastian Allgeier" />

<style type="text/css">

body {
	font-family: Georgia, serif;
	font-size: 16px;
	line-height: 24px;
}

a {
	color: #fff;
	background: #555;
	text-decoration: none;
	padding: 2px 5px;
}
a:hover {
	background: #888;
}

cite {
	display: block;
	margin-bottom: 20px;
}

code {
	display: block;
	font-size: 14px;
	white-space: nowrap;
	background: #f9f9f9;
	margin: 20px 0px;
	padding: 5px 10px;
	border: 1px solid #dedede;
}

pre {
	font-size: 14px;
	background: #f9f9f9;
	margin: 20px 0px;
	padding: 5px 10px;
	border: 1px solid #dedede;
}

#content {
	width: 500px;
	padding: 5px 20px 30px 20px;
	background: #fff;
	margin: 50px auto;
}

h1 {
	text-transform: uppercase;
	font-size: 29px;
	white-space: nowrap;
	color: #000;
}

h2 {
	font-family: Arial;
	text-transform: uppercase;
	font-size: 18px; 
	text-align: left;
	margin: 40px 0px 20px;
	border-bottom: 1px solid #dedede;
	font-weight: normal;
}


#colors {
	margin-bottom: 50px;
}
#colors dt {
	float: left;
	width: 50px;
	margin-right: 10px;
	text-indent: -6000px;
	border-bottom: 1px solid #fff;
	padding: 5px 0px;
}
#colors dd {
	border-bottom: 1px solid #dedede;
	padding: 5px 0px;
}


.ie body {
  background-color: yellow
}
.ie7 body {
  background-color: orange
}
.gecko body {
  background-color: gray
}
.win.gecko body {
  background-color: red
}
.linux.gecko body {
  background-color: pink
}
.opera body {
  background-color: green
}
.konqueror body {
  background-color: blue
}
.webkit body {
  background-color: black
}

</style>

</head>

<body>

<div id="content">

<h1>PHP CSS Browser Selector</h1>

<h2>Rafael Lima's CSS Browser Selector in PHP</h2>

<cite>
	CSS Browser Selector is a very small <del>javascript with just one line</del> php function which empower CSS selectors. It gives you the ability to write specific CSS code for each operating system and each browser.
</cite>

<a href="http://rafael.adm.br/css_browser_selector/">Quoted from Rafael's website</a>

<h2>Example</h2>

<p>

The background of this page will change on different os/browsers:

<dl id="colors">
	<dt style="background: yellow">yellow</dt>
	<dd>Internet Explorer</dd>
	
	<dt style="background: orange">orange</dt>
	<dd>Internet Explorer 7</dd>	
	
	<dt style="background: red">red</dt>
	<dd>Gecko Engine on Windows (Firefox, Mozilla, Camino)</dd>		
	
	<dt style="background: pink">pink</dt>
	<dd>Gecko Engine on Linux (Firefox, Mozilla, Camino)</dd>			
	
	<dt style="background: gray">gray</dt>
	<dd>Gecko Engine on Other OS (Firefox, Mozilla, Camino)</dd>				

	<dt style="background: green">green</dt>
	<dd>Opera</dd>				
	
	<dt style="background: blue">blue</dt>
	<dd>Konqueror</dd>					
	
	<dt style="background: black">black</dt>
	<dd>Safari</dd>						
	
	<dt style="background: cyan">cyan</dt>
	<dd>Chrome</dd>						
	
</dl>
		
<h2>CSS of this example</h2>		
		
<pre>.ie body {
  background-color: yellow
}
.ie7 body {
  background-color: orange
}
.gecko body {
  background-color: gray
}
.win.gecko body {
  background-color: red
}
.linux.gecko body {
  background-color: pink
}
.opera body {
  background-color: green
}
.konqueror body {
  background-color: blue
}
.webkit body {
  background-color: black
}
</pre>
		
<h2>Download</h2>

<a href="css_browser_selector.zip">css_browser_selector.zip (4 kb)</a>


<h2>Usage</h2>

<p>

	Include css_browser_selector.php in your app
	
	<code>
	<?php echo htmlspecialchars('<?php require("css_browser_selector.php"); ?>'); ?>
	</code>

	…and add the following to your html template.
	
	<code>
	<?php echo htmlspecialchars('<html class="<?php echo css_browser_selector() ?>">'); ?>
	</code>
			
	HTML-Output (for your browser):
	
	<code>
	<?php echo htmlspecialchars('<html class="' . css_browser_selector() . '">'); ?>
	</code>

</p>

<h2>Available OS Codes</h2>

<ul>		
	<li><strong>win</strong> - Microsoft Windows</li>
	<li><strong>linux</strong> - Linux (x11 and linux)</li>
	<li><strong>mac</strong> - Mac OS</li>
	<li><strong>freebsd</strong> - FreeBSD</li>
	<li><strong>ipod</strong> - iPod Touch</li>
	<li><strong>iphone</strong> - iPhone</li>
	<li><strong>webtv</strong> - WebTV</li>
	<li><strong>mobile</strong> - J2ME Devices (ex: Opera mini)</li>
</ul>

<h2>Available Browser Codes</h2>

<ul>
	<li><strong>ie</strong> - Internet Explorer (All versions)</li>
	<li><strong>ie8</strong> - Internet Explorer 8.x</li>
	<li><strong>ie7</strong> - Internet Explorer 7.x</li>
	<li><strong>ie6</strong> - Internet Explorer 6.x</li>
	<li><strong>ie5</strong> - Internet Explorer 5.x</li>
	<li><strong>gecko</strong> - Mozilla, Firefox (all versions), Camino</li>
	<li><strong>ff2</strong> - Firefox 2</li>
	<li><strong>ff3</strong> - Firefox 3</li>
	<li><strong>ff3_5</strong> - Firefox 3.5 new</li>
	<li><strong>opera</strong> - Opera (All versions)</li>
	<li><strong>opera8</strong> - Opera 8.x</li>
	<li><strong>opera9</strong> - Opera 9.x</li>
	<li><strong>opera10</strong> - Opera 10.x</li>
	<li><strong>konqueror</strong> - Konqueror</li>
	<li><strong>webkit or safari</strong> - Safari, NetNewsWire, OmniWeb, Shiira, Google Chrome</li>
	<li><strong>safari3</strong> - Safari 3.x</li>
	<li><strong>chrome</strong> - Google Chrome</li>
	<li><strong>iron</strong> - SRWare Iron new</li>
</ul>
	
<h2>PHP vs. JS</h2>	
		
<p>
The advantage of this PHP version is that there's no additional request needed
to include the javascript file and the selectors are available immediately. 
</p>		

<p>
The javascript version includes a client javascript detection with the js selector. 
This is not available in the PHP version.
</p>

		
<h2>Inspiration</h2>

<p>
As mentioned above this is just a port to PHP. The original javascript file
has been created by <a href="http://rafael.adm.br/css_browser_selector/">Rafel Lima</a> who's got the idea from a
blog post by <a href="http://37signals.com/svn/archives2/browser_selectors_in_css.php">37signals</a>
</p>

<h2>License</h2>

<p>
Rafel has released his code under the following license and so do I:
<a href="http://creativecommons.org/licenses/by/2.5/">http://creativecommons.org/licenses/by/2.5/</a>
</p>

<h2>Author</h2>

<p>Bastian Allgeier <a href="http://bastian-allgeier.de">bastian-allgeier.de</a></p>
<p>Follow me on Twitter <a href="http://twitter.com/bastianallgeier">twitter.com/bastianallgeier</a></p>

</div>

<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
</script>
<script type="text/javascript">
_uacct = "UA-431401-1";
urchinTracker();
</script>

</body>

</html>