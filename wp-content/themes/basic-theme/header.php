<!DOCTYPE html>
<html <?php language_attributes(); ?>">

<head>
  <meta charset="<? bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body>
  <div class="wrapper">

    <div class="header">
      <img src="images/logo.svg" alt="Basic WP Website">
    </div>

    <div class="mobile-menu">
      <img src="images/menu.svg" alt="Menu">Menu
    </div>

    <div id="toggleMyMenu" style="display: none;">
      <ul>
        <li><a href="#">HOME</a></li>
        <li><a href="#">ABOUT</a></li>
        <li><a href="#">GALLERY</a></li>
        <li><a href="#">CONTACT</a></li>
        <li><a href="#">BLOG</a></li>
        <li><a href="#">PODCAST</a></li>
        <li><a href="#">DONATE</a></li>
      </ul>
    </div>

    <div class="slogan">Everything a writer needs.</div>


    <div class="container">