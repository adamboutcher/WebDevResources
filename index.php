<?PHP 
if (!empty($_GET['ssi'])) {
	switch (strtolower($_GET['ssi'])) {
		case "hash":
			header("Content-Type: application/json");
			if(!empty($_GET['value'])) {
				$val = htmlspecialchars($_GET['value']);
				$md5 = md5($_GET['value']);
				$sh1 = sha1($_GET['value']);
				$b64 = base64_encode($_GET['value']);
			} else {
				$val = NULL;
				$md5 = NULL;
				$sh1 = NULL;
				$b64 = NULL;
			}
			?>
				{
				"val": "<?PHP echo $val; ?>",
				"md5": "<?PHP echo $md5; ?>",
				"sh1": "<?PHP echo $sh1; ?>",
				"b64": "<?PHP echo $b64; ?>"
				}
			<?PHP
			break;
		case "string":
			header("Content-Type: application/json");
			if(!empty($_GET['value'])) {
				$val = htmlspecialchars($_GET['value']);
				$strlen = strlen($_GET['value']);
				$strrev = strrev($_GET['value']);
			} else {
				$val = NULL;
				$strlen = NULL;
				$strrev = NULL;
			}
			?>
				{
				"val": "<?PHP echo $val; ?>",
				"len": "<?PHP echo $strlen; ?>",
				"rev": "<?PHP echo $strrev; ?>"
				}
			<?PHP
			break;
		default;
			header($_SERVER['SERVER_PROTOCOL']." 404 Not Found");
			echo "Unknown SSI given";
			break;
	}
	die();
}
?>
<!DOCTYPE html>
<html lang='en-GB'>
<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="A list of useful links for Website Developers and Designers." />
	<meta name="author" content="Adam Boutcher" />

	<title>Web Dev Resources &middot; &lt; aboutcher /&gt;;</title>

	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-combined.min.css" />

	<script type="text/javascript">(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','//www.google-analytics.com/analytics.js','ga');ga('create', 'UA-33322555-3', 'aboutcher.co.uk');ga('send', 'pageview');</script>
</head>
<body>
	
	<header role="banner" class="container-fluid">
		<div class="row-fluid">

		<div class="span6 pull-right">
			<div class="nametag"><h1><a href="http://www.aboutcher.co.uk" title="Guides, Code and Other Ramblings">&lt;&nbsp;aboutcher&nbsp;/&gt;;</a></h1></div>
		</div>

		<div class="span6 pull-left" style="margin:0;">
			<h2>Web Dev Resources</h2>
		</div>

		</div>
	</header>

	<div class="container-fluid" role="main">
		<div class="row-fluid">

			<div class="span2">
				<h4>Communities</h4>
				<small class="muted">Reddit</small>
				<ul class="unstyled">
					<li><a href="http://reddit.com/r/webdev">/r/webdev</a></li>
					<li><a href="http://reddit.com/r/web_design">/r/web_design</a></li>
					<li><a href="http://reddit.com/r/sysadmin">/r/sysadmin</a></li>
					<li><a href="http://reddit.com/r/php">/r/php</a></li>
					<li><a href="http://reddit.com/r/lolphp">/r/lolphp</a></li>
				</ul>
				<small class="muted">Other</small>
				<ul class="unstyled">
					<li><a href="http://stackoverflow.com">StackOverflow</a></li>
					<li><a href="http://pineapple.io">PineApple</a></li>
				</ul>
			</div>
			<div class="span2">
				<h4>News / Blogs</h4>
				<small class="muted">Blog</small>
				<ul class="unstyled">
					<li><a href="http://css-tricks.com">CSS Tricks</a></li>
					<li><a href="http://alistapart.com">A List Apart</a></li>
					<li><a href="http://boagworld.com">BoagWorld</a></li>
					<li><a href="http://www.zeldman.com">Jeffrey Zeldman</a></li>
				</ul>
				<small class="muted">News</small>
				<ul class="unstyled">
					<li><a href="http://theregister.co.uk">El Reg</a></li>
				</ul>
			</div>
			<div class="span2">
				<h4>Inspiration</h4>
				<ul class="unstyled">
					<li><a href="http://kuler.adobe.com">Adobe kuler</a></li>
					<li><a href="http://www.awwwards.com">awwwards</a></li>
					<li><a href="http://dribbble.com">Dribble</a></li>
					<li><a href="http://webcolourdata.com">Web Colour Data</a></li>
				</ul>
			</div>
			<div class="span2">
				<h4>Prototyping / Coding</h4>
				<small class="muted">Prototyping</small>
				<ul class="unstyled">
					<li><a href="http://codepen.io">CodePen</a></li>
					<li><a href="http://jsfiddle.net">JSFiddle</a></li>
					<li><a href="http://cssdeck.com">CSS Deck</a></li>
					<li><a href="http://thecodeplayer.com">CodePlayer</a></li>
					<li><a href="http://inkpen.in">inkpen</a></li>
				</ul>
				<small class="muted">Coding</small>
				<ul class="unstyled">
					<li><a href="http://c9.io">Cloud9</a></li>
					<li><a href="http://github.com">GitHub</a></li>
					<li><a href="http://bitbucket.com">BitBucket</a></li>
				</ul>
			</div>
			<div class="span2">
				<h4>Design</h4>
				<small class="muted">Colour</small>
				<ul class="unstyled">
					<li><a href="http://www.colorhexa.com">ColorHexa</a></li>
				</ul>
				<small class="muted">Fonts</small>
				<ul class="unstyled">
					<li><a href="http://html.adobe.com/edge/webfonts">Adobe Edge Fonts</a></li>
					<li><a href="http://www.fontsquirrel.com">Font Squirrel</a></li>
					<li><a href="http://www.google.com/fonts/">Google Web Fonts</a></li>
				</ul>
				<small class="muted">Icons</small>
				<ul class="unstyled">
					<li><a href="http://iconfinder.net">Iconfinder</a></li>
					<li><a href="http://fontello.com">Fontello</a></li>
					<li><a href="http://glyphicons.com">Glyphicons</a></li>
					<li><a href="http://one-div.com">One div</a></li>
				</ul>
			</div>
			

		</div>
		<div class="row-fluid">

			<div class="span2">
				<h4>Frameworks / Generators</h4>
				<small class="muted">HTML / CSS</small>
				<ul class="unstyled">
					<li><a href="http://foundation.zurb.com">Foundation</a></li>
					<li><a href="http://getbootstrap.com">Bootstrap</a></li>
					<li><a href="http://purecss.io">Pure</a></li>
					<li><a href="http://html5boilerplate.com">HTML5 Boilerplate</a></li>
					<li><a href="http://www.colorzilla.com/gradient-editor/">CSS3 Gradient Generator</a></li>
					<li><a href="http://css3gen.com/box-shadow/">CSS3 Box Shadow Generator</a></li>
				</ul>
				<small class="muted">Javascript</small>
				<ul class="unstyled">
					<li><a href="http://jquery.com">jQuery</a></li>
					<li><a href="http://zeptojs.com">Zepto</a></li>
				</ul>
				<small class="muted">PHP</small>
				<ul class="unstyled">
					<li><a href="http://www.openwall.com/phpass/">phpass</a></li>
				</ul>
			</div>
			<div class="span2">
				<h4>Compress / Minify</h4>
				<small class="muted">Images</small>
				<ul class="unstyled">
					<li><a href="http://www.smushit.com/ysmush.it">Smush.it</a></li>
					<li><a href="http://tinypng.org">TinyPNG</a></li>
					<li><a href="http://www.jpegmini.com">JPEGmini</a></li>
					<li><a href="http://clippingmagic.com">ClippingMagic</a></li>
				</ul>
				<small class="muted">Code</small>
				<ul class="unstyled">
					<li><a href="http://refresh-sf.com/yui/">YUI Compressor</a></li>
					<li><a href="http://cssminifier.com">CSS Minifier</a></li>
					<li><a href="http://jscompress.com">JS Compress</a></li>
					<li><a href="http://www.willpeavy.com/minifier">HTML Minifier</a></li>
				</ul>
				<small class="muted">Encode</small>
				<ul class="unstyled">
					<li><a href="http://duri.me">duri.me</a></li>
				</ul>
			</div>
			<div class="span2">
				<h4>Optimisation &amp; Testing</h4>
				<small class="muted">Optimisation</small>
				<ul class="unstyled">
					<li><a href="http://gtmetrix.com">GTMetrix</a></li>
					<li><a href="http://nibbler.silktide.com">Nibbler</a></li>
					<li><a href="http://tools.pingdom.com">PingDom</a></li>
				</ul>
				<small class="muted">Testing</small>
				<ul class="unstyled">
					<li><a href="http://validator.w3.org">W3 Validator</a></li>
					<li><a href="http://caniuse.com">Can I Use</a></li>
					<li><a href="http://browsershots.org/">Browsershots</a></li>
					<li><a href="http://ctrlq.org/screenshots">Web Screenshots</a></li>
				</ul>
				<small class="muted">Google</small>
				<ul class="unstyled">
					<li><a href="https://developers.google.com/speed/pagespeed/insights">Google PageSpeed</a></li>
					<li><a href="http://adwords.google.com/o/KeywordTool">Google Adwords Keyword Search</a></li>
					<li><a href="http://www.google.com/analytics/">Google Analytics</a></li>
					<li><a href="http://www.google.com/trends/">Google Trends</a></li>
					<li><a href="http://www.google.com/webmasters/">Google Webmasters</a></li>
				</ul>
			</div>
			<div class="span2">
				<h4>Docs</h4>
				<small class="muted">HTML</small>
				<ul class="unstyled">
					<li><a href="http://www.w3.org/TR/">W3C Specs</a></li>
					<li><a href="http://developer.mozilla.org">Mozilla Dev. Network</a></li>
					<li><a href="http://www.webplatform.org/">Web Platform Docs</a></li>
				</ul>
				<small class="muted">Socal Networks</small>
				<ul class="unstyled">
					<li><a href="http://dev.twitter.com">Twitter</a></li>
					<li><a href="http://developers.facebook.com">Facebook</a></li>
				</ul>
				<small class="muted">Auth</small>
				<ul class="unstyled">
					<li><a href="http://openid.net/developers/">OpenID</a></li>
				</ul>
			</div>
			<div class="span2">
				<h4>Client Software <small>(Windows)</small></h4>
				<small class="muted">Editors</small>
				<ul class="unstyled">
					<li><a href="http://www.sublimetext.com">Sublime</a></li>
					<li><a href="http://brackets.io">Brackets</a></li>
					<li><a href="http://www.flos-freeware.ch/notepad2.html">Nodepad2</a></li>
				</ul>
				<small class="muted">Other</small>
				<ul class="unstyled">
					<li><a href="http://www.chiark.greenend.org.uk/~sgtatham/putty/">PuTTY</a></li>
					<li><a href="http://git-scm.com/download">Git</a></li>
					<li><a href="http://livereload.com">Live Reload</a></li>
					<li><a href="http://mhs.github.io/scout-app">SCOUT App</a></li>
					<li><a href="http://alphapixels.com/prepros/">Prepros</a> (CodeKit Clone)</li>
				</ul>
			</div>
			
		</div>
		<div class="row-fluid">
			<div class="span4 hashes">
				<h4>Hashes</h4>
				<small class="muted">Don't use for passwords!</small><br/>
				<form>
					<input type="text" id="hinput" style="margin-bottom:0;"/> <a class="btn" id="hbtn"><i class="icon-refresh"></i></a>
				</form>
				<div><strong>Input:</strong> <span id="hval"></span></div>
				<div><strong>MD5:</strong> <span id="hmd5"></span></div>
				<div><strong>SHA1:</strong> <span id="hsh1"></span></div>
				<div><strong>Base64:</strong> <span id="hb64"></span></div>
			</div>
			<div class="span4 hashes">
				<h4>String Tools</h4>
				<small class="muted">Don't use for passwords!</small><br/>
				<form>
					<input type="text" id="sinput" style="margin-bottom:0;"/> <a class="btn" id="sbtn"><i class="icon-refresh"></i></a>
				</form>
				<div><strong>Input:</strong> <span id="sval"></span></div>
				<div><strong>Length:</strong> <span id="slen"></span></div>
				<div><strong>Reverse:</strong> <span id="srev"></span></div>
			</div>
			<div class="span4 hashes">

			</div>
		</div>
	</div>
	<hr/>
	<footer class="container-fluid">
		<div class="row-fluid">
			<div class="span6">
				<a href="http://creativecommons.org/licenses/by-sa/3.0/">
					<img style="width:88px;height:31px;" title='Attribution-ShareAlike 3.0 Unported' alt='Attribution-ShareAlike 3.0 Unported' src='data:image/png;base64,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'>
				</a>
			</div>
			<div class="span6 text-right">
				<strong>Updated:</strong> <em>May 2013</em><br/>
				<a href="http://www.webdesignrepo.com/">Web Design Repo</a> &amp; <a href="http://www.aboutcher.co.uk">Adam Boutcher</a>
			</div>
		</div>
	</footer>
	<!-- JS -->
	<script type="text/javascript" src="assets/js/jquery-bootstrap-combined.min.js"></script>
	<script type="text/javascript">
		function gethash(value) {
			$.getJSON("<?PHP echo $_SERVER['PHP_SELF']; ?>?ssi=hash&value="+value, function(data){  
    			$.each(data, function(i,j) { 
	   				if(i == "md5") { $('#hmd5').html(j); }
   					if(i == "sh1") { $('#hsh1').html(j); }
   					if(i == "b64") { $('#hb64').html(j); }
   					if(i == "val") { $('#hval').html(j); }
				});
			});
		}
		function getstr(value) {
			$.getJSON("<?PHP echo $_SERVER['PHP_SELF']; ?>?ssi=string&value="+value, function(data){  
    			$.each(data, function(i,j) { 
	   				if(i == "len") { $('#slen').html(j); }
	   				if(i == "rev") { $('#srev').html(j); }
   					if(i == "val") { $('#sval').html(j); }
				});
			});
		}
		$('#hbtn').click(function(){gethash($('#hinput').val());});$('#hinput').keyup(function(){ gethash($(this).val()); });
		$('#sbtn').click(function(){getstr($('#sinput').val());});$('#sinput').keyup(function(){ getstr($(this).val()); });
	</script>
</body>
</html>