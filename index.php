<!-- 


	_|    _|  _|_|_|_|_|  _|      _|  _|        _|_|_|_|  
	_|    _|      _|      _|_|  _|_|  _|        _|        
	_|_|_|_|      _|      _|  _|  _|  _|        _|_|_|    
	_|    _|      _|      _|      _|  _|              _|  
	_|    _|      _|      _|      _|  _|_|_|_|  _|_|_|    
	
	_|_|_|    _|_|_|_|    _|_|_|  _|_|_|_|  _|_|_|_|_|  
	_|    _|  _|        _|        _|            _|      
	_|_|_|    _|_|_|      _|_|    _|_|_|        _|      
	_|    _|  _|              _|  _|            _|      
	_|    _|  _|_|_|_|  _|_|_|    _|_|_|_|      _|      
	
                                                                                                            
	The HTML5 Reset Template Set :: v1.1 20100810		:: http://html5reset.org
	The site is copyright (c) 2010 Monkey Do, LLC 		:: http://monkeydo.biz
	
	The templates are free and released under the BSD license; if you like them, please pass them along.


-->

<!DOCTYPE html>

<html lang="en" class="no-js">

<head>

	<script>var _sf_startpt=(new Date()).getTime()</script>

	<meta charset="utf-8">

	<!--[if IE]><![endif]-->
	
	<title>HTML5 Reset</title>
	
	<meta name="description" content="A simple set of best practices to get your HTML5 project off on the right foot. " />
	<!-- Google will often use this as its description of your page/site. Make it good. -->
	
	<meta name="author" content="Tim Murtaugh, Monkey Do, LLC" />
	<meta name="Copyright" content="Copyright Monkey Do, LLC 2010. All Rights Reserved." />

	<meta name="DC.title" content="HTML5 Reset" />
	<meta name="DC.subject" content="A simple set of best practices to get your HTML5 project off on the right foot." />
	<meta name="DC.creator" content="Monkey Do, LLC" />
	
	<meta name="google-site-verification" content="eZEnJYptPgEDsL202PwuIwmQWxXblu5t2O9XZ8SizxI" />
	<!-- Speaking of Google, don't forget to set your site up: http://google.com/webmasters -->
	
	<meta name="viewport" width="device-width">
	<!-- define the width of the page as no wider than the width of the viewport -->
	
	<link rel="shortcut icon" href="_/img/favicon.png"/>
	<!-- the traditional favicon
		 - size: 16x16 or 32x32
		 - transparency is OK
	-->
	
	<link rel="apple-touch-icon" href="_/img/webclip-icon.png"/>
	<!-- the icon for iOS's Web Clip
		 - size: 57x57 for older iPhones, 72x72 for iPads, 114x114 for iPhone4's retina display
		 - Transparency is not recommended (iOS will put a black BG behind the icon)
		 - To prevent iOS from applying it's styles to the icon name it thusly: apple-touch-icon-precomposed.png
	-->

	<link rel="stylesheet" href="_/css/main.css" media="all" />
	<link rel="stylesheet" href="_/css/_print/main.css" media="print" />
	
	<!--[if IE]><link rel="stylesheet" href="_/css/_patches/win-ie-all.css" media="all" /><![endif]-->
	<!--[if IE 7]><link rel="stylesheet" href="_/css/_patches/win-ie7.css" media="all" /><![endif]-->
	<!--[if lt IE 7]><link rel="stylesheet" href="_/css/_patches/win-ie-old.css" media="all" /><![endif]-->

	
	<!--[if lt IE 9]><script src="http://ie7-js.googlecode.com/svn/version/2.0(beta3)/IE8.js"></script><![endif]-->

	<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	
	<!-- TypeKit -->
	<script src="http://use.typekit.com/lvd3bfg.js"></script>
	<script>try{Typekit.load();}catch(e){}</script>
	
	<!-- jQuery -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script src="_/js/functions.js"></script>
	
	<!-- Analytics -->
	<script>
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-615784-22']);
	_gaq.push(['_trackPageview']);
	
	(function() {
	var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();
	</script>

</head>

<body id="www-html5reset-org">

<div class="wrapper">

	<header>
	
		<h1><a href="/" data-twitter="html5reset">HTML5 <strong>Reset</strong></a></h1>
		
		<nav>
		
			<ol>
				<li><a href="#about">About</a></li>
				<li><a href="#code">The Code</a></li>
				<li><a href="#download">Download</a></li>
				<li><a href="#documentation">Documentation</a></li>
				<li><a href="#contact">Get in Touch</a></li>
			</ol>
		
		</nav>
	
	</header>
	
	<article id="about">
	
		<h1>About</h1>
		
		<p>Like a lot of developers, we start every HTML project with the same set of HTML and CSS templates. We've been using these files for a long time and we've progressively added bits and pieces to them as our own personal best practices have evolved.</p>
		
		<p>Now that modern browsers are starting to support some of the really useful parts of HTML5 and CSS3, it's time for an update, and we thought we'd put it out there for everyone to use. By no means do we see this as the end-all and beat-all, but we think it's a fairly good starting place that anyone can take and make their own.</p>
	
	</article>
	
	<article id="code">
	
		<h1>The Code</h1>
		
		<p>What's in the package is a folder structure representing an embryo of a web site:</p>
		
		<ul class="screenshots">
			<li><a href="_/img/tree-large.png"><span><img src="_/img/tree.png" alt="screenshot: the folder structure" /></span></a></li>
			<li><a href="_/img/screenshot-html-large.png"><span><img src="_/img/screenshot-html.png" alt="screenshot: the HTML template" /></span></a></li>
			<li><a href="_/img/screenshot-css-large.png"><span><img src="_/img/screenshot-css.png" alt="screenshot: the CSS template" /></span></a></li>
		</ul>
		
		<p>The HTML file contains a rudimentary HTML5 document structure, with all the every day stuff like <code>title</code>, <code>header</code>, <code>footer</code>, etc. It also uses conditional comments to call about half a dozen IE-specific CSS files, as well as a couple popular IE-correcting javascript files.</p>
		
		<p>All supporting files are stored in a parent &ldquo;<code>_</code>&rdquo; folder &mdash; this keeps the view in our file manager uncluttered. We could call it something like &ldquo;<code>assets</code>,&rdquo; but we prefer to give it a name that ensures it stays at the top of the list (which is why the CSS folders are prefixed with underscores).</p>
		
		<p>In the CSS folders are baseline styles designed to reduce the visual design in any browser to its most basic state. This frees you from the annoyance of overcoming the native styling that each browser wants to apply to HTML elements such as <code>h1</code>, <code>p</code>, and <code>ul</code>. From this starting point it's very easy to establish your own standards for type size, margins, and other measurements.</p>
		
		<p>Included in <code>_/css/core.css</code> is a little class that has been in use for a long time, and everyone should know about it: <code>.mod:after</code>. This class is the key to clearing floats simply. (If you look in <code>_/css/patches/win-ie-all.css</code> you'll find a class that performs the same task for Internet Explorer.) [Update: <a href="http://mky.be/littlethings/css/mod/">here's how to use <code>.mod</code></a>]</p>
		
		<h2>Two Flavors</h2>
		
		<p>We've created two versions of the template set. The <b>Bare Bones</b> version is stripped down to the essentials. The <b>Kitchen Sink</b> version is the version we use when we want the option to <em>remove</em> features, rather than <em>add</em> them. There is some sample content, plus a few fun things, some of which are good habits to get into, and some you'll rarely use (but we like to look for excuses to use fun stuff).</p>
	
	</article>
	
	<article id="download">
	
		<h1>Download the Templates</h1>
		
		<ul class="download">
			<li><a href="_/downloads/html5reset-kitchensink-20100915.zip">The Kitchen Sink version (fully commented)</a></li>
			<li><a href="_/downloads/html5reset-kitchensink-clean-20100915.zip">The Kitchen Sink version (no comments)</a></li>
			<li><a href="_/downloads/html5reset-barebones-20100915.zip">The Bare Bones version</a></li>
		</ul>

		<p>Preview the templates: <a href="_/preview/html5reset-kitchensink/">Kitchen Sink (fully commented)</a>, <a href="_/preview/html5reset-kitchensink-clean/">Kitchen Sink (no comments)</a>, <a href="_/preview/html5reset-barebones/">Bare Bones</a> (these are very uninteresting unless you view the source)</p>
	
	</article>
	
	<article id="documentation">
	
		<h1>Documentation</h1>
		
		<p>We hope, over time, to source back as many of the techniques we've used in these templates as we can. For now, I hope it suffices to say that we owe <a href="http://meyerweb.com/" data-twitter="meyerweb">Eric Meyer</a> a great debt, that <a href="http://unstoppablerobotninja.com/" data-twitter="beep">Ethan Marcotte</a> deserves a generous share of huzzas, and that a few happy meals go out to <a href="http://twitter.com/mpaige" data-twitter="mpaige">Michael Paige</a> for taking a look at the files and making them better. We should also give a shout out to <a href="http://alistapart.com" data-twitter="alistapart">A List Apart</a>, as well as Jeremy Keith's fantastic primer, <a href="http://books.alistapart.com/product/html5-for-web-designers" data-twitter="abookapart">HTML5 for Web Designers</a>.</p>
		
		<h2>Milestones / Changes</h2>
		
		<ul>
			<li><time>2010.09.15</time> Added <a href="http://www.phpied.com/conditional-comments-block-downloads/" data-twitter="stoyanstefanov">phpied.com's</a> conditional comment fix (see it on line 10 of the Kitchen Sink version)</li>
			<li><time>2010.08.17</time> Changed <code>section</code> to <code>div.wrapper</code></li>
			<li><time>2010.08.17</time> Fixed some typos</li>
			<li><time>2010.08.17</time> Changed the name of the "-" folder to "_"</li>
			<li><time>2010.08.17</time> Removed the Typekit body font from this page</li>
			<li><time>2010.08.10</time> The Google Analytics note has been moved into the <code>head</code></li>
			<li><time>2010.08.10</time> The main jQuery file is now called from Google's server instead of jQuery's</li>
			<li><time>2010.08.10</time> Fixed improperly closed <code>h2</code> tags</li>
			<li><time>2010.08.10</time> Added <code>:focus {outline: 1;}</code> for better accessbility</li>
			<li><time>2010.08.10</time> Replaced original reset.css with the <a href="http://html5doctor.com/html-5-reset-stylesheet/" data-twitter="html5doctor">HTML5 Doctor version</a></li>
			<li><time>2010.08.10</time> Added <code>small</code> to the footer text</li>
			<li><time>2010.08.10</time> Added BSD licensing information</li>
			<li><time>2010.08.09</time> Version 1.0 release</li>
		</ul>
		
		<h2>Licensing</h2>
		
		<p>Some of this is original, much of it is not. In order to respect the original sources, we have chosen to release these templates under the <a href="http://creativecommons.org/licenses/BSD/">BSD license</a>.</p>
		
		<h2>Influential Projects & Articles</h2>
		
		<ul class="links">
			<li>Eric Meyer's <a href="http://meyerweb.com/eric/tools/css/reset/">&ldquo;Reset CSS&rdquo;</a></li>
			<li>A List Apart's <a href="http://www.alistapart.com/articles/responsive-web-design/">&ldquo;Responsive Web Design&rdquo;</a> by Ethan Marcotte</li>
			<li>John Resig's <a href="http://ejohn.org/blog/html5-shiv/">&ldquo;HTML5 Shiv&rdquo;</a></li>
			<li>The <a href="http://www.modernizr.com" data-twitter="modernizr">Modernizr</a> script</li>
			<li>Dean Edwards' <a href="http://code.google.com/p/ie7-js/">IE7.js</a></li>
			<li>Ethan Marcotte's <a href="http://unstoppablerobotninja.com/entry/fluid-images/">&ldquo;Fluid Images&rdquo;</a></li>
			<li>Apple's <a href="http://developer.apple.com/safari/library/documentation/AppleApplications/Reference/SafariWebContent/Introduction/Introduction.html#//apple_ref/doc/uid/TP40002051">Safari Web Content Guide</a></li>
			<li>Paul Irish's <a href="http://paulirish.com/2009/bulletproof-font-face-implementation-syntax/">Bulletproof @font-face syntax</a></li>
			<li>QuirksMode.org's <a href="http://www.quirksmode.org/blog/archives/2010/04/a_pixel_is_not.html">&ldquo;A pixel is not a pixel is not a pixel&rdquo;</a></li>
			<li>HTML5 Doctor's <a href="http://html5doctor.com/html-5-reset-stylesheet/">HTML5 Reset Stylesheet</a></li>
		</ul>
	
	</article>
	
	<article id="contact">
	
		<h1>Get in Touch</h1>
		
		<p>Surely we missed something / forgot your favorite technique / did something stupid. Perhaps the semantics aren't up to snuff, or you've found a new technique that should be included. We'd love for these documents to evolve, so please <a class="userVoicelink" href="http://html5reset.uservoice.com">let us know what you think</a>!</p>
		
		<p>You might also consider <a href="http://twitter.com/html5reset">following us on Twitter</a> to keep on top of updates and new releases.</p>
	
	</article>
	
	<footer>
		
		<p><small>Copyright 2010 <a href="http://monkeydo.biz" data-twitter="monkeydobiz">Monkey Do, LLC</a>. All Rights Reserved.</small></p>
		
	</footer>

</div>

<div id="overlay"><div id="inner"></div></div>

<script>
var uservoiceOptions = {
  /* required */
  key: 'html5reset',
  host: 'html5reset.uservoice.com', 
  forum: '70327',
  showTab: true,  
  /* optional */
  alignment: 'right',
  background_color:'#f00', 
  text_color: 'white',
  lang: 'en'
};

function _loadUserVoice() {
  var s = document.createElement('script');
  s.setAttribute('type', 'text/javascript');
  s.setAttribute('src', ("https:" == document.location.protocol ? "https://" : "http://") + "cdn.uservoice.com/javascripts/widgets/tab.js");
  document.getElementsByTagName('head')[0].appendChild(s);
}
_loadSuper = window.onload;
window.onload = (typeof window.onload != 'function') ? _loadUserVoice : function() { _loadSuper(); _loadUserVoice(); };
</script>

<script>
var _sf_async_config={uid:10803,domain:"html5reset.org"};
(function(){
  function loadChartbeat() {
    window._sf_endpt=(new Date()).getTime();
    var e = document.createElement('script');
    e.setAttribute('language', 'javascript');
    e.setAttribute('type', 'text/javascript');
    e.setAttribute('src',
       (("https:" == document.location.protocol) ? "https://s3.amazonaws.com/" : "http://") +
       "static.chartbeat.com/js/chartbeat.js");
    document.body.appendChild(e);
  }
  var oldonload = window.onload;
  window.onload = (typeof window.onload != 'function') ?
     loadChartbeat : function() { oldonload(); loadChartbeat(); };
})();

</script>

</body>
</html>
