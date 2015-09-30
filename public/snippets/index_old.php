<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, user-scalable=no" />
<meta property="og:title" content="<?php wp_title( '｜', true, 'right' ); ?>">
<meta property="og:site_name" content="snippets.feb19.jp">
<meta property="og:type" content="website">
<meta property="og:url" content="<?php echo "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
<meta property="og:locale" content="ja_JP">
<meta property="og:image" content="<?php echo esc_url( home_url( '/' ) ); ?>images/feb19.png">
<meta property="og:description" content="JavaScript(HTML5)/Objective-C(iOS)/Java(Android)/C#(WinRT,Windows8) 他、ウェブサービス、アプリ開発のチュートリアルメモ。">
<title><?php wp_title( '｜', true, 'right' ); ?></title>

<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@feb19">
<meta name="twitter:creator" content="@feb19">
<meta name="twitter:title" content="<?php wp_title( '｜', true, 'right' ); ?>">

<meta name="twitter:image" content="http://snippets.feb19.jp/images/feb19.png">

<link rel="apple-touch-icon-precomposed" href="<?php echo esc_url( home_url( '/' ) ); ?>images/feb19.png">
<meta name="apple-mobile-web-app-title" content="snippets" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<link rel="shortcut icon" href="<?php echo esc_url( home_url( '/' ) ); ?>favicon.ico">
<link rel="icon" href="<?php echo esc_url( home_url( '/' ) ); ?>favicon.ico">
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<link href="<?php echo esc_url( home_url( '/' ) ); ?>google-code-prettify/prettify.css" rel="stylesheet">
<script type="text/javascript" src="<?php echo esc_url( home_url( '/' ) ); ?>google-code-prettify/prettify.js"></script>
<script type="text/javascript" src="//use.typekit.net/kev3nzt.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
</head>

<body <?php body_class(); ?>>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id; js.async = true;
  js.src = "//connect.facebook.net/ja_JP/all.js#xfbml=1&appId=293830440656612";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<?php
    if(preg_match('/(?i)msie [12345678]\./',$_SERVER['HTTP_USER_AGENT']) || preg_match('/Windows\ NT\ 5./', $_SERVER['HTTP_USER_AGENT'])) {
        // if IE<=8
        get_template_part( 'noie' );
        exit;
    } else {
        // if IE>8
    }
?>
<div id="page" class="hfeed site">
	<header id="masthead" class="site-header" role="banner">
		<hgroup>
			<!-- <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1> -->
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><span class="snippets">snippets</span>.feb19.jp</a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</hgroup>

		<!--
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<h3 class="menu-toggle"><?php _e( 'Menu', 'twentytwelve' ); ?></h3>
			<a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentytwelve' ); ?>"><?php _e( 'Skip to content', 'twentytwelve' ); ?></a>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
		</nav>--><!-- #site-navigation -->

		<?php $header_image = get_header_image();
		if ( ! empty( $header_image ) ) : ?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( $header_image ); ?>" class="header-image" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" /></a>
		<?php endif; ?>
	</header><!-- #masthead -->

	<div id="main" class="wrapper">