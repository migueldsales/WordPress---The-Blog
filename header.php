<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <!-- <link rel="stylesheet" href="./style.css" /> -->
    <?php wp_head(); ?>
    <!-- Built-in na ni WordPress para tawagin si CSS -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    />
  </head>
  <body>
<header class="header">
      <div class="container">
        <div class="header__wrapper">
          <div class="inner">
            <div class="branding">
              <a href="#"> BLOG</a>
              <?php
                  if(function_exists('the_custom_logo')){
                    the_custom_logo();
                  }
              ?>
            </div>
            <nav>
              <ul>
                <!-- <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li> -->
                <?php wp_menu_li();?>
              </ul>
            </nav>
          </div>
          <button id="themeToggle"><i class="fas fa-sun"></i></button>
        </div>
      </div>
    </header>