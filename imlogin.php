<?php require_once("res/x5engine.php"); ?>
<?php
$pa = Configuration::getPrivateArea();
$pa->admin_email = '';
if (isset($_POST['imUname']) && isset($_POST['imPwd'])) {
	$result = $pa->login($_POST['imUname'], $_POST['imPwd']);
	if ($result < 0) {
		header('Location: imlogin.php?loginstatus=' . $result);
		exit();
	}
	$page = $pa->getSavedPage() ? $pa->getSavedPage() : $pa->getLandingPage();
	if (!$page) {
		if(isset($_SERVER["HTTP_REFERER"]) && strlen($_SERVER["HTTP_REFERER"]) && strpos($_SERVER["HTTP_REFERER"], 'imlogin.php') === false) {
			$page = preg_replace('/\?.*/', '', $_SERVER["HTTP_REFERER"]) . '?loginstatus=1';
		} else {
			$page = 'imlogin.php?loginstatus=1';
		}
	}
	$pa->clearSavedPage();
	$pa->sessionSafeRedirect($page);
}
if (isset($_GET['landing_page'])) {
	$pa->savePage($_GET['landing_page']);
}
?><!DOCTYPE html><!-- HTML5 -->
<html prefix="og: http://ogp.me/ns#" lang="en-GB" dir="ltr">
	<head>
		<title>Reserved Access - IMAGLOBECREATIVE</title>
		<meta charset="utf-8" />
		<!--[if IE]><meta http-equiv="ImageToolbar" content="False" /><![endif]-->
		<meta name="author" content="AustinPower" />
		<meta name="generator" content="Incomedia WebSite X5 Professional 14.0.6.1 - www.websitex5.com" />
		<meta property="og:locale" content="en" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="http://imaglobecreative.com/imlogin.php" />
		<meta property="og:title" content="Reserved Access" />
		<meta property="og:site_name" content="IMAGLOBECREATIVE" />
		<meta property="og:image" content="http://imaglobecreative.com/favImage.png" />
		<meta property="og:image:type" content="image/png">
		<meta property="og:image:width" content="1103">
		<meta property="og:image:height" content="1103">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		
		<link rel="stylesheet" type="text/css" href="style/reset.css?14-0-6-1" media="screen,print" />
		<link rel="stylesheet" type="text/css" href="style/print.css?14-0-6-1" media="print" />
		<link rel="stylesheet" type="text/css" href="style/style.css?14-0-6-1" media="screen,print" />
		<link rel="stylesheet" type="text/css" href="style/template.css?14-0-6-1" media="screen" />
		<link rel="stylesheet" type="text/css" href="imHeader_pluginAppObj_03/custom.css" media="screen, print" />
		<link rel="stylesheet" type="text/css" href="imFooter_pluginAppObj_09/custom.css" media="screen, print" />
		<link rel="stylesheet" type="text/css" href="pcss/imlogin.css?14-0-6-1-637918464345376334" media="screen,print" />
		<script type="text/javascript" src="res/jquery.js?14-0-6-1"></script>
		<script type="text/javascript" src="res/x5engine.js?14-0-6-1" data-files-version="14-0-6-1"></script>
		<script type="text/javascript" src="imHeader_pluginAppObj_03/main.js"></script>
		<script type="text/javascript" src="imFooter_pluginAppObj_09/main.js"></script>
		<script type="text/javascript">
			window.onload = function(){ checkBrowserCompatibility('Your browser does not support the features necessary to display this website.','Your browser may not support the features necessary to display this website.','[1]Update your browser[/1] or [2]continue without updating[/2].','http://outdatedbrowser.com/'); };
			x5engine.utils.currentPagePath = 'imlogin.php';
			x5engine.boot.push(function () { x5engine.imPageToTop.initializeButton({}); });
		</script>
		<meta name="apple-itunes-app" content="app-id=665879631, app-argument=http://imaglobecreative.com/x5feedready.xml">
		<link rel="icon" href="favicon.png?14-0-6-1-637918464345261213" type="image/png" />
		<link rel="alternate" type="application/rss+xml" title="IMAGLOBECREATIVE" href="x5feedready.php" />
		<link rel="alternate" type="application/rss+xml" title="GrassRoot Communities" href="blog/x5feed.php" />
	</head>
	<body>
		<div id="imPageExtContainer">
			<div id="imPageIntContainer">
				<div id="imHeaderBg"></div>
				<div id="imFooterBg"></div>
				<div id="imPage">
					<div id="imHeader">
						<h1 class="imHidden">Reserved Access - IMAGLOBECREATIVE</h1>
						<div id="imHeaderObjects"><div id="imHeader_pluginAppObj_03_wrapper" class="template-object-wrapper"><div id="imHeader_imCell_3" class="" > <div id="imHeader_imCellStyleGraphics_3"></div><div id="imHeader_imCellStyle_3" ><div id="imHeader_pluginAppObj_03">
            <div id="soc_imHeader_pluginAppObj_03">
                <div class="wrapper horizontal flat shake">
                	<div class='social-icon flat'><a href='https://www.facebook.com/Imaglobecreative/photos/?ref=page_internal' target='_blank'><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><path d="M57,93V54H70.14l2-15H57V29.09c0-4.39.94-7.39,7.24-7.39H72V8.14a98.29,98.29,0,0,0-11.6-.6C48.82,7.54,41,14.61,41,27.59V39H27V54H41V93H57Z"/></svg><span class='fallbacktext'>Fb</span></a></div><div class='social-icon flat'><a href='https://www.youtube.com/channel/UC4PUHmJkckWGGTsX-HAH-2A' target='_blank'><svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><g><path d="M89.2,34S88.42,28.49,86,26.06c-3-3.19-6.45-3.14-8-3.32C66.81,21.93,50,22,50,22h0s-16.79-.07-28,0.74c-1.56.19-5,.17-8,3.36C11.58,28.53,10.8,34,10.8,34A120.47,120.47,0,0,0,10,47V53A121,121,0,0,0,10.8,66s0.78,5.51,3.18,7.94c3,3.19,7,3.09,8.82,3.42,6.4,0.61,27.2.8,27.2,0.8s16.81,0,28-.83a11.44,11.44,0,0,0,8-3.39C88.42,71.48,89.2,66,89.2,66A121.16,121.16,0,0,0,90,53V47A121.16,121.16,0,0,0,89.2,34ZM41.74,60.38V37.9L63.35,49.18Z"/></g></svg><span class='fallbacktext'>Yt</span></a></div><div class='social-icon flat'><a href='https://www.instagram.com/afrodiastv/' target='_blank'><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><g><path d="M50,15.16c11.35,0,12.69,0,17.17.25a23.52,23.52,0,0,1,7.89,1.46,14.07,14.07,0,0,1,8.07,8.07,23.52,23.52,0,0,1,1.46,7.89c0.2,4.48.25,5.83,0.25,17.17s0,12.69-.25,17.17a23.52,23.52,0,0,1-1.46,7.89,14.07,14.07,0,0,1-8.07,8.07,23.52,23.52,0,0,1-7.89,1.46c-4.48.2-5.82,0.25-17.17,0.25s-12.69,0-17.17-.25a23.52,23.52,0,0,1-7.89-1.46,14.07,14.07,0,0,1-8.07-8.07,23.52,23.52,0,0,1-1.46-7.89c-0.2-4.48-.25-5.83-0.25-17.17s0-12.69.25-17.17a23.52,23.52,0,0,1,1.46-7.89,14.07,14.07,0,0,1,8.07-8.07,23.52,23.52,0,0,1,7.89-1.46c4.48-.2,5.83-0.25,17.17-0.25M50,7.5c-11.54,0-13,0-17.52.26a31.19,31.19,0,0,0-10.32,2A21.73,21.73,0,0,0,9.73,22.16a31.19,31.19,0,0,0-2,10.32C7.55,37,7.5,38.46,7.5,50s0,13,.26,17.52a31.19,31.19,0,0,0,2,10.32A21.73,21.73,0,0,0,22.16,90.27a31.19,31.19,0,0,0,10.32,2c4.53,0.21,6,.26,17.52.26s13,0,17.52-.26a31.19,31.19,0,0,0,10.32-2A21.73,21.73,0,0,0,90.27,77.84a31.19,31.19,0,0,0,2-10.32c0.21-4.53.26-6,.26-17.52s0-13-.26-17.52a31.19,31.19,0,0,0-2-10.32A21.73,21.73,0,0,0,77.84,9.73a31.19,31.19,0,0,0-10.32-2C63,7.55,61.54,7.5,50,7.5h0Z"/><path d="M50,28.18A21.82,21.82,0,1,0,71.82,50,21.82,21.82,0,0,0,50,28.18Zm0,36A14.17,14.17,0,1,1,64.17,50,14.17,14.17,0,0,1,50,64.17Z"/><circle cx="72.69" cy="27.31" r="5.1"/></g></svg><span class='fallbacktext'>Ig</span></a></div>
                </div>

            </div>
                <script type="text/javascript">
                    socialicons_imHeader_pluginAppObj_03();
                </script>
        </div></div></div></div><div id="imHeader_imTextObject_05_wrapper" class="template-object-wrapper"><div id="imHeader_imCell_5" class="" > <div id="imHeader_imCellStyleGraphics_5"></div><div id="imHeader_imCellStyle_5" ><div id="imHeader_imTextObject_05">
	<div class="text-tab-content"  id="imHeader_imTextObject_05_tab0" style="">
		<div class="text-inner">
			<div style="text-align: center;"><span class="fs12 cf1"><b>Kindly Click the Menus on leftside bar, to Navigate &nbsp;any Section of Our &nbsp;Services</b></span><br></div>
		</div>
	</div>

</div>
</div></div></div><div id="imHeader_imObjectSearch_07_wrapper" class="template-object-wrapper"><div id="imHeader_imCell_7" class="" > <div id="imHeader_imCellStyleGraphics_7"></div><div id="imHeader_imCellStyle_7" ><div id="imHeader_imObjectSearch_07"><form id="imHeader_imObjectSearch_07_form" action="imsearch.php" method="get"><fieldset><input type="text" id="imHeader_imObjectSearch_07_field" name="search" value="" placeholder="Product..." /><button id="imHeader_imObjectSearch_07_button">Search</button></fieldset></form><script>$('#imHeader_imObjectSearch_07_button').click(function() { $(this).prop('disabled', true); setTimeout(function(){ $('#imHeader_imObjectSearch_07_button').prop('disabled', false);}, 900); $('#imHeader_imObjectSearch_07_form').submit(); return false; });</script></div></div></div></div><div id="imHeader_imObjectTitle_09_wrapper" class="template-object-wrapper"><div id="imHeader_imCell_9" class="" > <div id="imHeader_imCellStyleGraphics_9"></div><div id="imHeader_imCellStyle_9" ><div id="imHeader_imObjectTitle_09"><span id ="imHeader_imObjectTitle_09_text" >Imaglobecreative</span > </div></div></div></div><div id="imHeader_imObjectTitle_11_wrapper" class="template-object-wrapper"><div id="imHeader_imCell_11" class="" > <div id="imHeader_imCellStyleGraphics_11"></div><div id="imHeader_imCellStyle_11" ><div id="imHeader_imObjectTitle_11"><span id ="imHeader_imObjectTitle_11_text" >PHOTOSHOOTING GRAPHIC VIDEO PRODUCTION & NEWS</span > </div></div></div></div><div id="imHeader_imMenuObject_12_wrapper" class="template-object-wrapper"><div id="imHeader_imCell_12" class="" > <div id="imHeader_imCellStyleGraphics_12"></div><div id="imHeader_imCellStyle_12" ><div id="imHeader_imMenuObject_12"><div class="hamburger-button hamburger-component"><div><div><div class="hamburger-bar"></div><div class="hamburger-bar"></div><div class="hamburger-bar"></div></div></div></div><div class="hamburger-menu-background-container hamburger-component">
	<div class="hamburger-menu-background menu-mobile menu-mobile-animated hidden">
		<div class="hamburger-menu-close-button"><span>&times;</span></div>
	</div>
</div>
<ul class="menu-mobile-animated hidden">
	<li class=" imPage" data-link-paths="/index.html,/">
<div class="label-wrapper">
<div class="label-inner-wrapper">
		<a class="label" href="index.html">
CLICK ON PRODUCTS		</a>
</div>
</div>
	</li></ul></div><script type="text/javascript">
x5engine.boot.push(function(){x5engine.initMenu('imHeader_imMenuObject_12',1000)});
$(function () {$('#imHeader_imMenuObject_12 ul li').each(function () {    var $this = $(this), timeout = 0;    $this.on('mouseenter', function () {        if($(this).parents('#imHeader_imMenuObject_12-menu-opened').length > 0) return;         clearTimeout(timeout);        setTimeout(function () { $this.children('ul, .multiple-column').stop(false, false).fadeIn(); }, 250);    }).on('mouseleave', function () {        if($(this).parents('#imHeader_imMenuObject_12-menu-opened').length > 0) return;         timeout = setTimeout(function () { $this.children('ul, .multiple-column').stop(false, false).fadeOut(); }, 250);    });});});

</script>
</div></div></div><div id="imHeader_imTableObject_13_wrapper" class="template-object-wrapper"><div id="imHeader_imCell_13" class="" > <div id="imHeader_imCellStyleGraphics_13"></div><div id="imHeader_imCellStyle_13" ><div id="imHeader_imTableObject_13">
	<div id="imHeader_imTableObject_13_tab0" style="text-align: left; overflow: hidden;"><div class="text-tab-content text-inner"><table data-minrequestedwidth="230" data-computedwidth="230" style="width: 230px;"><tbody><tr><td style="width: 220px; height: 58px; margin-top: 0px; margin-left: 0px; background-color: rgb(128, 0, 255);" class="imVc"><ul><li style="text-align: left;"><span class="fs14 cf1"><a href="our-services.html" onmouseover="x5engine.imTip.Show(this, { text: 'Our Service', width: 180});" class="imCssLink" onclick="return x5engine.utils.location('our-services.html', null, false)">Our Services</a></span></li></ul></td></tr><tr><td style="width: 220px; height: 58px; margin-top: 0px; margin-left: 0px; background-color: rgb(128, 0, 255);" class="imVc"><ul><li style="text-align: left;"><span class="fs14 cf1"><a href="photoshooting.html" onmouseover="x5engine.imTip.Show(this, { text: 'Photoshooting', width: 180});" class="imCssLink" onclick="return x5engine.utils.location('photoshooting.html', null, false)">Photoshooting</a></span></li></ul></td></tr><tr><td style="width: 220px; height: 58px; margin-top: 0px; margin-left: 0px; background-color: rgb(128, 0, 255);" class="imVc"><ul><li style="text-align: left;"><span class="fs14 cf1"><a href="graphic-designs.html" onmouseover="x5engine.imTip.Show(this, { text: 'Graphic Designs', width: 180});" class="imCssLink" onclick="return x5engine.utils.location('graphic-designs.html', null, false)">Graphic Designs</a></span></li></ul></td></tr><tr><td style="width: 220px; height: 56px; margin-top: 0px; margin-left: 0px; background-color: rgb(128, 0, 255);" class="imVc"><ul><li style="text-align: left;"><span class="fs14 cf1"><a href="photos-gallery.html" onmouseover="x5engine.imTip.Show(this, { text: 'Photos Gallery', width: 180});" class="imCssLink" onclick="return x5engine.utils.location('photos-gallery.html', null, false)">Photos Gallery</a></span></li></ul></td></tr><tr><td style="width: 220px; height: 56px; margin-top: 0px; margin-left: 0px; background-color: rgb(128, 0, 255);" class="imVc"><div style="text-align: left;"><ul><li style="text-align: left;"><span class="fs14"><a href="photos-gallery.html" onmouseover="x5engine.imTip.Show(this, { text: 'Photos Gallery', width: 180});" class="imCssLink" onclick="return x5engine.utils.location('photos-gallery.html', null, false)"><span class="fs12 cf1">Ocassions Videos</span></a></span></li></ul></div></td></tr><tr><td style="width: 220px; height: 56px; margin-top: 0px; margin-left: 0px; background-color: rgb(128, 0, 255);" class="imVc"><ul><li style="text-align: left;"><span class="fs14 cf1"><a href="movie-and-drama.html" onmouseover="x5engine.imTip.Show(this, { text: 'Movie and Drama', width: 180});" class="imCssLink" onclick="return x5engine.utils.location('movie-and-drama.html', null, false)">Movie and Drama</a></span></li></ul></td></tr><tr><td style="width: 220px; height: 58px; margin-top: 0px; margin-left: 0px; background-color: rgb(128, 0, 255);" class="imVc"><div data-line-height="1" class="lh1"><ul><li style="text-align: left;"><span class="fs14 cf1"><a href="blog/" onmouseover="x5engine.imTip.Show(this, { text: 'News and offers of the week!', width: 180});" class="imCssLink">News and offers of the week!</a></span></li></ul></div></td></tr></tbody></table></div></div>
<script type="text/javascript">function loadimHeader_imTableObject_13() {
	var box = $("#imHeader_imTableObject_13_tab0 .text-inner");
	var data = box.data('imRollover');
	if (data != null) { data.disable(); }
		var bp = x5engine.responsive.getCurrentBreakPoint();
		if (bp.hash == 'ea2f0ee4d5cbb25e1ee6c7c4378fee7b') {
			x5engine.imRollover({"id": "#imHeader_imTableObject_13_tab0 .text-inner", "movement": "CONTINUE", "direction": "UP", "effect": "LINEAR", "height": 200, "time": 7, "autostart": true, "mouselock": true});
		}
		$('#imContent').off('breakpointChanged').on('breakpointChanged', loadimHeader_imTableObject_13);
}
x5engine.boot.push(loadimHeader_imTableObject_13);
</script>
</div>
</div></div></div></div>
					</div>
					<div id="imStickyBarContainer">
						<div id="imStickyBarGraphics"></div>
						<div id="imStickyBar">
							<div id="imStickyBarObjects"><div id="imStickyBar_imMenuObject_01_wrapper" class="template-object-wrapper"><div id="imStickyBar_imCell_1" class="" > <div id="imStickyBar_imCellStyleGraphics_1"></div><div id="imStickyBar_imCellStyle_1" ><div id="imStickyBar_imMenuObject_01"><div class="hamburger-button hamburger-component"><div><div><div class="hamburger-bar"></div><div class="hamburger-bar"></div><div class="hamburger-bar"></div></div></div></div><div class="hamburger-menu-background-container hamburger-component">
	<div class="hamburger-menu-background menu-mobile menu-mobile-animated hidden">
		<div class="hamburger-menu-close-button"><span>&times;</span></div>
	</div>
</div>
<ul class="menu-mobile-animated hidden">
	<li class=" imPage" data-link-paths="/index.html,/">
<div class="label-wrapper">
<div class="label-inner-wrapper">
		<a class="label" href="index.html">
CLICK ON PRODUCTS		</a>
</div>
</div>
	</li></ul></div><script type="text/javascript">
x5engine.boot.push(function(){x5engine.initMenu('imStickyBar_imMenuObject_01',1000)});
$(function () {$('#imStickyBar_imMenuObject_01 ul li').each(function () {    var $this = $(this), timeout = 0;    $this.on('mouseenter', function () {        if($(this).parents('#imStickyBar_imMenuObject_01-menu-opened').length > 0) return;         clearTimeout(timeout);        setTimeout(function () { $this.children('ul, .multiple-column').stop(false, false).fadeIn(); }, 250);    }).on('mouseleave', function () {        if($(this).parents('#imStickyBar_imMenuObject_01-menu-opened').length > 0) return;         timeout = setTimeout(function () { $this.children('ul, .multiple-column').stop(false, false).fadeOut(); }, 250);    });});});

</script>
</div></div></div><div id="imStickyBar_imObjectTitle_02_wrapper" class="template-object-wrapper"><div id="imStickyBar_imCell_2" class="" > <div id="imStickyBar_imCellStyleGraphics_2"></div><div id="imStickyBar_imCellStyle_2" ><div id="imStickyBar_imObjectTitle_02"><span id ="imStickyBar_imObjectTitle_02_text" >Store</span > </div></div></div></div><div id="imStickyBar_imObjectTitle_03_wrapper" class="template-object-wrapper"><div id="imStickyBar_imCell_3" class="" > <div id="imStickyBar_imCellStyleGraphics_3"></div><div id="imStickyBar_imCellStyle_3" ><div id="imStickyBar_imObjectTitle_03"><span id ="imStickyBar_imObjectTitle_03_text" >S U P E R M A R K E T</span > </div></div></div></div></div>
						</div>
					</div>
					<a class="imHidden" href="#imGoToCont" title="Skip the main menu">Go to content</a>
					<div id="imSideBarContainer">
						<div id="imSideBarGraphics"></div>
						<div id="imSideBar">
							<div id="imSideBarObjects"></div>
						</div>
					</div>
					<div id="imContentContainer">
						<div id="imContentGraphics"></div>
						<div id="imContent">
							<a id="imGoToCont"></a>
				<div id="imLoginPage">
				<?php if (!isset($_GET['cart'])): ?>
					<h2 id="imPgTitle" class="imTitleMargin">Reserved Access</h2>
					<div style="height: 15px;">&nbsp;</div>
				<?php else: ?>
					<h2 id ="imPgTitle" class="imTitleMargin">Step 2 - Customer data</h2>
					<script>x5engine.boot.push(function () {
					if (x5engine.cart.ui.steps.active) {
						$('#imPgTitle').before(x5engine.cart.ui.getStepStyleDom(1));
					}
					});</script>
				<?php endif; ?>
					<?php if (isset($_GET['loginstatus']) && $_GET['loginstatus'] == 1): ?>
					<div class="alert alert-green"><?php echo $pa->messageFromStatusCode(1) ?></div>
					<?php else: ?>
								<div id="imLoginDescription"><?php echo isset($_GET['cart']) ? Configuration::getLocalizations()->get('cart_step2_descr_login', 'To set the order you are required to login or register.' ) : 'To access this WebSite section you have to enter your login details.'; ?></div>
								<div class="imLogin">
									<?php
										if (isset($_GET['loginstatus']) && $pa->messageFromStatusCode($_GET['loginstatus']) != '') {
											echo '<div class="alert alert-' . ($_GET['loginstatus'] >= 0 ? 'green' : 'red') . '">' . $pa->messageFromStatusCode($_GET['loginstatus']) . '</div>';
										}
									?>
									<form method="post" action="imlogin.php" id="imLoginForm">
										<div class="imLoginBlock">
											<label for="imUname"><span>E-mail:</span></label><br />
											<input type="text" name="imUname" id="imUname" class="mandatory"><br />
										</div>
										<div class="imLoginBlock">
											<label for="imPwd"><span>Password:</span></label><br />
											<input type="password" name="imPwd" id="imPwd" class="mandatory"><br />
										</div>
										<div class="imLoginBlock" style="text-align: right;">
											<input type="submit" value="Log in" class="imLoginSubmit">
										</div>
									</form>
									<script type="text/javascript">x5engine.boot.push(function() { x5engine.imForm.initForm('#imLoginForm', false, { 'jsid': '80D84B0BC17A5932FDF10BFC1B28579F', showAll: true, offlineMessage: 'When you test your WebSite you will not be asked for the Username and Password, that will only happen once you have uploaded your WebSite.' }); });</script>
								</div>
								<script>$(function () { $("#imUname").focus(); });</script>	<?php endif; ?>
				</div>
				
							<div class="imClear"></div>
						</div>
					</div>
					<div id="imFooter">
						<div id="imFooterObjects"><div id="imFooter_imObjectForm_13_wrapper" class="template-object-wrapper"><div id="imFooter_imCell_13" class="" > <div id="imFooter_imCellStyleGraphics_13"></div><div id="imFooter_imCellStyle_13" ><form id="imObjectForm_13" action="imemail/imEmailForm.php" method="post" enctype="multipart/form-data">
	<fieldset class="first">
		<div>
			<div id="imObjectForm_13_1_container" class="imObjectFormFieldContainer"><div id="imObjectForm_13_1_field">
<input type="text" class="" id="imObjectForm_13_1" name="imObjectForm_13_1" data-label="name" /></div>
</div>
			<div id="imObjectForm_13_2_container" class="imObjectFormFieldContainer"><div id="imObjectForm_13_2_field">
<input type="text" class="valEmail" id="imObjectForm_13_2" name="imObjectForm_13_2" data-label="e-mail" /></div>
<div id="imObjectForm_13_2_chkfield">
<input type="text" class="valEmail equalTo[imObjectForm_13_2]" id="imObjectForm_13_2_chk" name="imObjectForm_13_2_chk" data-label="Repeat e-mail" /></div>
</div>
			<div id="imObjectForm_13_3_container" class="imObjectFormFieldContainer"><div id="imObjectForm_13_3_field">
<textarea class="" id="imObjectForm_13_3" name="imObjectForm_13_3"  data-label="message"></textarea></div>
</div>
		</div>
	</fieldset>
	<fieldset>
		<div class="x5captcha-wrap">
			<label>Check word:</label><br />
			<input type="text" class="imCpt" name="imCpt" maxlength="5" />
		</div>
		<input type="text" id="imObjectForm_13_prot" name="imSpProt" />
	</fieldset>
	<div id="imObjectForm_13_buttonswrap">
		<input type="submit" value="Invia" />
	</div>
</form>
<script>x5engine.boot.push('x5engine.imForm.initForm(\'#imObjectForm_13\', false, {jsid: \'D82014B190E520B6BDAB8105C255C791\', type: \'tip\', showAll: true, classes: \'validator\', landingPage: \'email-confirmation.html\', labelColor: \'rgba(255, 128, 128, 1)\', fieldColor: \'rgba(0, 0, 0, 1)\', selectedFieldColor: \'rgba(0, 0, 0, 1)\'})');</script>
</div></div></div><div id="imFooter_imTextObject_01_wrapper" class="template-object-wrapper"><div id="imFooter_imCell_1" class="" > <div id="imFooter_imCellStyleGraphics_1"></div><div id="imFooter_imCellStyle_1" ><div id="imFooter_imTextObject_01">
	<div class="text-tab-content"  id="imFooter_imTextObject_01_tab0" style="">
		<div class="text-inner">
			<div style="text-align: center;"><span class="fs12 cf1 cb1"><a href="index.html" class="imCssLink" onclick="return x5engine.utils.location('index.html', null, false)"><b>Home Page</b></a></span></div><div style="text-align: center;"><span class="fs12 cb1"><a href="our-services.html" onmouseover="x5engine.imTip.Show(this, { text: 'Thanks for visiting us!', width: 180});" class="imCssLink" onclick="return x5engine.utils.location('our-services.html', null, false)">Our Services</a></span></div><div style="text-align: center;"><span class="fs12 cf1 cb1"><a href="photoshooting.html" class="imCssLink" onclick="return x5engine.utils.location('photoshooting.html', null, false)">P</a>hotoshooting</span></div><div style="text-align: center;"><span class="fs12 cb1"><a href="graphic-designs.html" class="imCssLink" onclick="return x5engine.utils.location('graphic-designs.html', null, false)">Graphic Designs</a></span></div><div style="text-align: center;"><span class="fs12 cb1"><a href="photos-gallery.html" class="imCssLink" onclick="return x5engine.utils.location('photos-gallery.html', null, false)">Photos Gallery</a></span></div><div style="text-align: center;"><span class="fs12 cb1"><a href="ocassion-pictures-gallery.html" class="imCssLink" onclick="return x5engine.utils.location('ocassion-pictures-gallery.html', null, false)">Ocassions Videos</a></span></div><div style="text-align: center;"><span class="fs12 cb1"><a href="movie-and-drama.html" class="imCssLink" onclick="return x5engine.utils.location('movie-and-drama.html', null, false)">Movie and Dramas</a></span></div><div style="text-align: center;"><span class="fs12 cb1"><a href="news-and-offer-of-the-week.php" onmouseover="x5engine.imTip.Show(this, { text: 'CHECK OUR BLOG SECTION TOO', width: 180});" class="imCssLink" onclick="return x5engine.utils.location('news-and-offer-of-the-week.php', null, false)">News and offer of the Week</a></span></div>
		</div>
	</div>

</div>
</div></div></div><div id="imFooter_pluginAppObj_09_wrapper" class="template-object-wrapper"><div id="imFooter_imCell_9" class="" > <div id="imFooter_imCellStyleGraphics_9"></div><div id="imFooter_imCellStyle_9" ><div id="imFooter_pluginAppObj_09">
            <div id="soc_imFooter_pluginAppObj_09">
                <div class="wrapper horizontal flat shake">
                	<div class='social-icon flat'><a href='https://www.facebook.com/websitex5' target='_blank'><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><path d="M57,93V54H70.14l2-15H57V29.09c0-4.39.94-7.39,7.24-7.39H72V8.14a98.29,98.29,0,0,0-11.6-.6C48.82,7.54,41,14.61,41,27.59V39H27V54H41V93H57Z"/></svg><span class='fallbacktext'>Fb</span></a></div><div class='social-icon flat'><a href='https://www.youtube.com/user/incomedia' target='_blank'><svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><g><path d="M89.2,34S88.42,28.49,86,26.06c-3-3.19-6.45-3.14-8-3.32C66.81,21.93,50,22,50,22h0s-16.79-.07-28,0.74c-1.56.19-5,.17-8,3.36C11.58,28.53,10.8,34,10.8,34A120.47,120.47,0,0,0,10,47V53A121,121,0,0,0,10.8,66s0.78,5.51,3.18,7.94c3,3.19,7,3.09,8.82,3.42,6.4,0.61,27.2.8,27.2,0.8s16.81,0,28-.83a11.44,11.44,0,0,0,8-3.39C88.42,71.48,89.2,66,89.2,66A121.16,121.16,0,0,0,90,53V47A121.16,121.16,0,0,0,89.2,34ZM41.74,60.38V37.9L63.35,49.18Z"/></g></svg><span class='fallbacktext'>Yt</span></a></div><div class='social-icon flat'><a href='https://twitter.com/WebSiteX5' target='_blank'><svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><path d="M37,78.44c26.42,0,40.86-21.88,40.86-40.86,0-.62,0-1.24,0-1.86A29.22,29.22,0,0,0,85,28.29a28.67,28.67,0,0,1-8.25,2.26,14.41,14.41,0,0,0,6.32-7.94,28.78,28.78,0,0,1-9.12,3.49,14.37,14.37,0,0,0-24.47,13.1,40.77,40.77,0,0,1-29.6-15,14.37,14.37,0,0,0,4.45,19.17,14.26,14.26,0,0,1-6.5-1.8c0,0.06,0,.12,0,0.18A14.37,14.37,0,0,0,29.33,55.82a14.34,14.34,0,0,1-6.49.25A14.38,14.38,0,0,0,36.26,66a28.82,28.82,0,0,1-17.84,6.15A29.24,29.24,0,0,1,15,72a40.66,40.66,0,0,0,22,6.45"/></svg><span class='fallbacktext'>Tw</span></a></div>
                </div>

            </div>
                <script type="text/javascript">
                    socialicons_imFooter_pluginAppObj_09();
                </script>
        </div></div></div></div><div id="imFooter_imTextObject_11_wrapper" class="template-object-wrapper"><div id="imFooter_imCell_11" class="" > <div id="imFooter_imCellStyleGraphics_11"></div><div id="imFooter_imCellStyle_11" ><div id="imFooter_imTextObject_11">
	<div class="text-tab-content"  id="imFooter_imTextObject_11_tab0" style="">
		<div class="text-inner">
			<div style="text-align: center;"><span class="fs10 cf1">Created BY AUSTINPOWER</span></div>
		</div>
	</div>

</div>
</div></div></div><div id="imFooter_imTextObject_14_wrapper" class="template-object-wrapper"><div id="imFooter_imCell_14" class="" > <div id="imFooter_imCellStyleGraphics_14"></div><div id="imFooter_imCellStyle_14" ><div id="imFooter_imTextObject_14">
	<div class="text-tab-content"  id="imFooter_imTextObject_14_tab0" style="">
		<div class="text-inner">
			<div style="text-align: center;"><span class="fs20 cf1">Policy</span></div><div style="text-align: center;"><div style="text-align: start;"><span class="fs11 cf1 ff1">This page is about the various possible way to share our creative skills, VIEWING purpose only, not business oriented money making site. all materials are COPYRIGHT of their respective owner's, coping and downloading without authorization or permission is illegal....</span></div></div>
		</div>
	</div>

</div>
</div></div></div><div id="imFooter_imTextObject_16_wrapper" class="template-object-wrapper"><div id="imFooter_imCell_16" class="" > <div id="imFooter_imCellStyleGraphics_16"></div><div id="imFooter_imCellStyle_16" ><div id="imFooter_imTextObject_16">
	<div class="text-tab-content"  id="imFooter_imTextObject_16_tab0" style="">
		<div class="text-inner">
			<div style="text-align: center;"><span class="fs20 cf1">Terms</span></div><div style="text-align: center;"><div style="text-align: center;"><span class="fs11 cf1 ff1">It's all about creativity..... </span></div><div style="text-align: center;"><span class="fs11 cf1 ff1">Your creative ability determine your mind ability....</span></div><div style="text-align: center;"><span class="fs11 ff1"><br></span></div></div>
		</div>
	</div>

</div>
</div></div></div><div id="imFooter_imTextObject_17_wrapper" class="template-object-wrapper"><div id="imFooter_imCell_17" class="" > <div id="imFooter_imCellStyleGraphics_17"></div><div id="imFooter_imCellStyle_17" ><div id="imFooter_imTextObject_17">
	<div class="text-tab-content"  id="imFooter_imTextObject_17_tab0" style="">
		<div class="text-inner">
			<div style="text-align: center;"><span class="fs20 cf1">Contact Us</span></div>
		</div>
	</div>

</div>
</div></div></div></div>
					</div>
				</div>
				<span class="imHidden"><a href="#imGoToCont" title="Read this page again">Back to content</a></span>
			</div>
		</div>
		
		<noscript class="imNoScript"><div class="alert alert-red">To use this website you must enable JavaScript.</div></noscript>
	</body>
</html>
