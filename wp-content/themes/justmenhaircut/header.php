<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo wp_get_document_title(); ?></title>
    <link rel="stylesheet" href="./index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster+Two:ital@1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');  ?>">

</head>
<body>
<div id="wrap">
    <header class="header">
        <div class="site__title">

            <div class="container">
                <div class="header__inner">
                    <div class="hamburger-menu"
                    ">
                    <input id="menu__toggle" type="checkbox"/>
                    <label class="menu__btn" for="menu__toggle">
                        <span></span>
                    </label>

                    <?php wp_nav_menu(['container' => 'li', 'menu_class' => 'menu__box']) ?>
                </div>
                <div class="wrap-logo">
                    <a href="<?php echo home_url(); ?>" class="site__title__nav_link"><span class="site__title__nav_link_logo"> <?= get_bloginfo( 'name' ); ?></span></a>
                </div>
            </div>
        </div>
        <div class="navbar-wrap">
            <div class="container">
                <nav class="navigation__menu">
                    <div class="navbar">
                        <?php wp_nav_menu(['container' => 'li', 'menu_class' => 'navbar__items']) ?>
<!--                            <li><a href="index.php" class="navbar__item__link">HOME</a></li>-->
<!--                            <li><a href="page-our-services.php" class="navbar__item__link">OUR SERVICES</a></li>-->
<!--                            <li><a href="shedule-appointment.php" class="navbar__item__link">Schedule an Appointment</a>-->
<!--                            </li>-->
<!--                            <li><a href="meetOurTeam.php" class="navbar__item__link">MEET OUR TEAM</a></li>-->
                    </div>
                </nav>
            </div>
        </div>
    </header>
