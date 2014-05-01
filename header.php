<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

<!-- Design and dev by WeAreGiants.com -->

<meta charset="utf-8">
<title><?php wp_title(' | ', true, 'right'); ?></title>
<meta name="description" content="<?php bloginfo( 'description' ) ?>">
<meta name="author" content="Craig Fowler | WeAreGiants.com">

<meta property="og:title" content="<?php bloginfo( 'name' ) ?>">
<meta property="og:url" content="<?php bloginfo( 'wpurl' ) ?>">
<meta property="og:image" content="<?php bloginfo('template_directory'); ?>/images/facebook.jpg">
<meta property="og:description" content="<?php bloginfo( 'description' ) ?>">

<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<link href="http://redbull.com/cs/RedBull2/stylesheets/shared-modules/shared-footer-20140410122137.css" media="screen" rel="stylesheet" type="text/css" />
<link href="http://redbull.com/cs/RedBull2/stylesheets/shared-modules/shared-footer-desktop-20140410122137.css" media="only screen and (min-width: 640px)" rel="stylesheet" type="text/css" />

<!--[if lte IE 8]>
<link href="http://redbull.com/cs/RedBull2/stylesheets/shared-modules/shared-footer-IE-lte8-20140410122137.css" media="screen" rel="stylesheet" type="text/css" />
<![endif]-->


<?php wp_head(); ?>

</head>
<body>

<script type="text/javascript">
window.rbwidgets = window.rbwidgets || {};
window.rbwidgets.iframeURL = 'http://www.redbull.com/en/RedBullCollection/1331580848687/GlobalNav?template=GlobalNavigation&todim=en_INT&logo=false';
</script>
<script type="text/javascript" src="http://www.redbull.com/cs/RedBull2Misc/global-nav/global-nav.js"></script>
<noscript>
<iframe src="http://www.redbull.com/en/RedBullCollection/1331580848687/GlobalNav?template=GlobalNavigation&todim=en_INT&logo=false" style="width:100%;height:37px;"
frameborder="0" scrolling="no"></iframe>
</noscript>

<header id="header">
<div class="frame">
<nav class="bit-1 item center">
<h1 class="bit-4"><a href="<?php bloginfo( 'wpurl' ) ?>"><?php bloginfo( 'name' ) ?></a></h1>
<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container_class' => 'menu bit-75',)); ?>

</nav>
</div>
</header>

<div id="wrapper-outter">
<div id="wrapper">
