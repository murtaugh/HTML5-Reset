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
	
                                                                                                            
	The HTML5 Reset Template Set :: v0.1 20100809		:: http://html5reset.org
	Based in good part on Ethan Marcotte's work			:: http://unstoppablerobotninja.com
	Also based in no small part on on Eric Meyer's work	:: http://meyerweb.com/eric/tools/css/reset/

	The site is copyright (c) 2010 Monkey Do, LLC 		:: http://monkeydo.biz
	
	The templates are free; if you like them, please do pass them along.


-->

<!DOCTYPE html>

<html lang="en">

<head>

	<meta charset="utf-8">
	
	<title>HTML5 Reset</title>
	
	<meta name="description" content="HTML5 Reset is a set of baseline templates to get your new project off on the right foot." />
	<!-- Google will often use this as its description of your page/site. Make it good. -->
	
	<meta name="google-site-verification" content="eZEnJYptPgEDsL202PwuIwmQWxXblu5t2O9XZ8SizxI" />
	<!-- Speaking of Google, don't forget to set your site up: http://google.com/webmasters -->
	
	<link rel="shortcut icon" href="favicon.gif"/>
	<!-- the traditional favicon
		 - size: 16x16 or 32x32
		 - transparency is OK
	-->
	
	<link rel="apple-touch-icon" href="img/custom_icon.png"/>
	<!-- the icon for iOS's Web Clip
		 - size: 57x57 for older iPhones, 72x72 for iPads, 114x114 for iPhone4's retina display (IMHO, just go ahead and use the biggest one)
		 - Transparency is not recommended (iOS will put a black BG behind the icon)
		 - To prevent iOS from applying it's styles to the icon name it thusly: apple-touch-icon-precomposed.png
	-->

	<link rel="stylesheet" href="-/css/main.css" media="all" />
	<link rel="stylesheet" href="-/css/_print/main.css" media="print" />
	
	<!--[if IE]><link rel="stylesheet" href="-/css/_patches/win-ie-all.css" media="all" /><![endif]-->
	<!--[if IE 7]><link rel="stylesheet" href="-/css/_patches/win-ie7.css" media="all" /><![endif]-->
	<!--[if lt IE 7]><link rel="stylesheet" href="-/css/_patches/win-ie-old.css" media="all" /><![endif]-->

	
	<!--[if lt IE 9]><script src="http://ie7-js.googlecode.com/svn/version/2.0(beta3)/IE8.js"></script><![endif]-->

	<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	
	<!-- TypeKit -->
	<script src="http://use.typekit.com/lvd3bfg.js"></script>
	<script>try{Typekit.load();}catch(e){}</script>
	
	<!-- jQuery -->
	<script src="http://code.jquery.com/jquery.min.js"></script>
	<script src="-/js/functions.js"></script>
	
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

<section>

	<header>
	
		<h1><a href="/" data-twitter="html5reset">HTML5 <strong>Reset</strong></a></h1>
	
	</header>
	
	<article id="about">
		
		<p>This is a thing that is coming. It will be real.</p>
	
	</article>
	
		
	<footer style="position: absolute; bottom: 40px;">
		
		<p><a href="http://monkeydo.biz"><img src="-/img/md-logo.png" alt="Monkey Do!" /></a> Copyright 2010 <a href="http://monkeydo.biz" data-twitter="monkeydobiz">Monkey Do, LLC</a>. All Rights Reserved.</p>
		
	</footer>

</section>

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

</body>
</html>
