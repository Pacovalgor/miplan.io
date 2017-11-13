<?php
	// Start session.
	session_start();
	
	// Set a key, checked in mailer, prevents against spammers trying to hijack the mailer.
	$security_token = $_SESSION['security_token'] = uniqid(rand());
	
	if ( ! isset($_SESSION['formMessage'])) {
		$_SESSION['formMessage'] = 'if you want to be tester of miplan, sent us your name and email<br />';	
	}
	
	if ( ! isset($_SESSION['formFooter'])) {
		$_SESSION['formFooter'] = '';
	}
	
	if ( ! isset($_SESSION['form'])) {
		$_SESSION['form'] = array();
	}
	
	function check($field, $type = '', $value = '') {
		$string = "";
		if (isset($_SESSION['form'][$field])) {
			switch($type) {
				case 'checkbox':
					$string = 'checked="checked"';
					break;
				case 'radio':
					if($_SESSION['form'][$field] === $value) {
						$string = 'checked="checked"';
					}
					break;
				case 'select':
					if($_SESSION['form'][$field] === $value) {
						$string = 'selected="selected"';
					}
					break;
				default:
					$string = $_SESSION['form'][$field];
			}
		}
		return $string;
	}
?><!doctype html>  

<!--[if IE 7 ]><html lang="en" class="no-js ie7"><![endif]-->
<!--[if IE 8 ]><html lang="en" class="no-js ie8"><![endif]-->
<!--[if IE 9 ]><html lang="en" class="no-js ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en" class="no-js"><!--<![endif]-->

<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="robots" content="index, follow" />
		<meta name="generator" content="RapidWeaver" />
		
		<title>The Storyteller - Contact Us</title>
		<link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/allegro/skeleton.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/allegro/styles.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/allegro/responsive.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/allegro/colour_tags-page2.css" />
		<link href='https://fonts.googleapis.com/css?family=Merriweather:400,400italic' rel='stylesheet' type='text/css'>
		<link href="https://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
		<script type="text/javascript" src="../rw_common/themes/allegro/javascript.js"></script>
		<script type="text/javascript" src="../rw_common/themes/allegro/scripts/function.js"></script>
		<script type="text/javascript" src="../rw_common/themes/allegro/scripts/retina.js"></script>
		
  		<script>RwSet={pathto:"../rw_common/themes/allegro/javascript.js",baseurl:"http://miplan.io/"};</script>
  		<script type="text/javascript" src="../rw_common/themes/allegro/scripts/modernizr.min.js"></script>
  		
		<script type="text/javascript" src="../rw_common/themes/allegro/scripts/slideshow/jquery.easing.1.3.js"></script>
  		
  		<link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/allegro/css/font/title_bold.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/allegro/css/font/title_helvetica.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/allegro/css/font/slogan_normal.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/allegro/css/font/slogan_helvetica.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/allegro/css/font/menu_helvetica.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/allegro/css/font/footer_georgia.css" />
		<script type="text/javascript" src="../rw_common/themes/allegro/scripts/sidebar/right.js"></script>
		<link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/allegro/css/font/headings_helvetica.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/allegro/css/font/content_helvetica.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/allegro/css/font/content_12px.css" />
		
		
		
	    
	    
	    
	<!--[if lt IE 9]>
	<script src="https://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<style>.skiptonav, #menu {display:none;}</style>
	<![endif]-->

<link rel="stylesheet" type="text/css" href="../rw_common/assets/global.css" />
</head>
	
<body>
	<header>	
			<div id="headerWrapper">
				<div class="container">
		   			<a id="logo" href="http://miplan.io/" title="Home"><img src="../rw_common/images/logo.png" width="84" height="86" alt="storytellers"/></a>
					<h1 id="title">storytellers</h1>
					<nav><ul><li><a href="../" rel="">Home</a></li><li><a href="../journal/" rel="">Journal</a></li><li><a href="../photos/" rel="">Gallery</a></li><li><a href="./" rel="" id="current">Contact</a></li></ul></nav>
				</div><!-- end container -->
			</div><!--end headerWrapper-->	
			<nav id="navi-wrap">
				<ul id="navi">
					<ul><li><a href="../" rel="">Home</a></li><li><a href="../journal/" rel="">Journal</a></li><li><a href="../photos/" rel="">Gallery</a></li><li><a href="./" rel="" id="current">Contact</a></li></ul>
				</ul>
			</nav><!-- /nav-wrap -->
		<div id="banner">
			<div id="extraContainer1"></div>
			<div id="freeStyle"></div>
		</div><!-- end banner-->
		<div id="bttmHeader">	
		<div class="container">
			<div class="sixteen columns over">
				<h2 id="slogan">Traveling the World in 365 Days</h2>
			</div><!-- header-inner -->
		</div><!-- end container -->	
		</div><!-- end bttmHeader -->
	</header>
	<section>
		<div class="wrapper_2">
			<div class="container">
				<div id="extraContainer2"></div>
			</div><!-- end container -->
		</div><!-- end wrapper -->
			<div class="container">
				<div class="single twelve columns"  id="main" role="main">
					
<div class="message-text"><?php echo $_SESSION['formMessage']; unset($_SESSION['formMessage']); ?></div><br />

<form class="rw-contact-form" action="./files/mailer.php" method="post" enctype="multipart/form-data">
	 <div>
		<label>Your Name</label> *<br />
		<input class="form-input-field" type="text" value="<?php echo check('element0'); ?>" name="form[element0]" size="40"/><br /><br />

		<label>Your Email</label> *<br />
		<input class="form-input-field" type="text" value="<?php echo check('element1'); ?>" name="form[element1]" size="40"/><br /><br />

		<div style="display: none;">
			<label>Spam Protection: Please don't fill this in:</label>
			<textarea name="comment" rows="1" cols="1"></textarea>
		</div>
		<input type="hidden" name="form_token" value="<?php echo $security_token; ?>" />
		<input class="form-input-button" type="reset" name="resetButton" value="Reset" />
		<input class="form-input-button" type="submit" name="submitButton" value="Submit" />
	</div>
</form>

<br />
<div class="form-footer"><?php echo $_SESSION['formFooter']; unset($_SESSION['formFooter']); ?></div><br />

<?php unset($_SESSION['form']); ?>

				</div><!-- end single twelve column -->		
				<div class="sidebar four columns offset-by-one">
					<aside>
						<span id="asideTitle">Sidebar Title</span>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam non ligula ipsum. Curabitur arcu felis, suscipit nec fermentum venenatis, bibendum eget lacus. Nunc eget dolor leo. Etiam dui ipsum, aliquam et interdum a, volutpat eu ligula. Ut eu elit augue, sit amet feugiat quam.
						<div id="asidePlug"></div>
					</aside>
				</div><!-- sidebar four columns offset-by-one -->
			</div><!-- end container -->
		<div class="wrapper_3">
			<div class="container">
				<div id="extraContainer3"></div>
			</div><!-- end container -->
		</div><!-- end wrapper -->
		<div class="clear"></div>
	</section>
	<footer>
		<div class="wrapper">
			<div class="container">
				<div id="extraContainer4"></div>
			</div><!-- end container -->
		</div><!-- end wrapper -->
		<div class="container">
				<div id="extraContainer5"></div>
				<div id="breadcrumb"><ul><li><a href="../">Home</a>&nbsp;>&nbsp;</li><li><a href="./">Contact</a>&nbsp;>&nbsp;</li></ul></div>
				<div id="left">&copy; 2014 Brandon Lee Theme Design <a href="#" id="rw_email_contact">Contact Me</a><script type="text/javascript">var _rwObsfuscatedHref0 = "mai";var _rwObsfuscatedHref1 = "lto";var _rwObsfuscatedHref2 = ":ni";var _rwObsfuscatedHref3 = "k.f";var _rwObsfuscatedHref4 = "let";var _rwObsfuscatedHref5 = "che";var _rwObsfuscatedHref6 = "r@m";var _rwObsfuscatedHref7 = "e.c";var _rwObsfuscatedHref8 = "om";var _rwObsfuscatedHref = _rwObsfuscatedHref0+_rwObsfuscatedHref1+_rwObsfuscatedHref2+_rwObsfuscatedHref3+_rwObsfuscatedHref4+_rwObsfuscatedHref5+_rwObsfuscatedHref6+_rwObsfuscatedHref7+_rwObsfuscatedHref8; document.getElementById("rw_email_contact").href = _rwObsfuscatedHref;</script></div>
		</div><!-- end container -->
	</footer>		
	</body>
</html>