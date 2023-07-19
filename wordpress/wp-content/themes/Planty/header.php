<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div id="wrapper" class="hfeed">
<header id="header">
    <div id='logo'>
<?php if ( function_exists( 'the_custom_logo' ) ) {
  the_custom_logo();
}?>
    </div>
<nav>
<div id='navmenu'>
<?php wp_nav_menu([
   'theme_location' => 'header',
   'container' => false,
   'menu_class' => 'navbar-nav'
])
?>


</div>


</nav>
</header>
<div id="container">
<main id="content" role="main">