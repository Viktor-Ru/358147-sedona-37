<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sed
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

  <head>
  	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <!-- <title>HTML Academy: Седона</title> --> <!-- Подставляется автоматически --> 
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
    <link rel="icon" type="<?php echo get_template_directory_uri(); ?>/image/png" href="images/favicon.png">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">

	<?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

    <div class="main-container">
      <header class="main-header" data-test="header">
        <nav class="main-nav">

          <a class="logo" href="/../" aria-current="page">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" width="140" height="70" alt="логотип sedona.">
          </a>
          
          <ul class="main-nav-list">
            <li class="main-nav-item"><a class="main-nav-link main-nav-link--current" href="index.html"
                aria-current="page">Главная</a></li>
            <li class="main-nav-item"><a class="main-nav-link" href="#">О Седоне</a></li>
            <li class="main-nav-item"><a class="main-nav-link" href="catalog.html">Гостиницы</a></li>
          </ul>
          <ul class="search-nav-list">
            <li class="search-nav-item">
              <a class="search-nav-link search-nav-link--search" href="#"><span
                  class="visually-hidden">Поиск.</span></a>
            </li>
            <li class="search-nav-item">
              <a class="search-nav-link search-nav-link--like" href="#"><span
                  class="visually-hidden">Избранное.</span><span class="search-nav-link-quantity">12</span></a>
            </li>
          </ul>
          <a class="search-nav-link-basket" href="#">Хочу сюда!</a>
        </nav>
      </header>

