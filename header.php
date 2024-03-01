<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=0.9">
    <link type="image/x-icon" href="<?php echo bloginfo('template_url'); ?>/favicon.png" rel="shortcut icon">
    <link type="Image/x-icon" href="<?php echo bloginfo('template_url'); ?>/favicon.png" rel="icon">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="header">
    <!--contacts-section-->
    <div class="contacts-bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="header-contacts">
                        <p class="header-contacts__text">
                            Холодильное оборудование в Казахстане
                        </p>
                        <div class="header-right">
                            <a href="tel:+77781180764" class="header-link">+7 778 118-07-64</a>
                            <a href="tel:+77015353849" class="header-link">+7 701 535-38-49</a>
                            <a href="mailto:karagandaholod@mail.ru" class="header-link">
                                    <svg  viewBox="0 0 47.25 32" width="16px" height="16px"  fill="none" stroke-width="3" stroke="white">
                                        <rect class="cls-1" x="1" y="1" width="45.25" height="30" rx="1"></rect>
                                        <path class="cls-1" d="M46.25,2l-22,17.78a1,1,0,0,1-1.29,0L1,2"></path>
                                        <line class="cls-1" x1="45.5" y1="31" x2="28.95" y2="16"></line>
                                        <line class="cls-1" x1="2" y1="31" x2="18" y2="16.5"></line>
                                    </svg>
                                    karagandaholod@mail.ru</a>
                            <a href="https://instagram.com/tekhnoholod" class="header-link">
                                <svg viewBox="0 0 128 128" width="16px" height="16px" stroke="white" fill="white" stroke-width="2">
                                    <path class="cls-1" d="M83,23a22,22,0,0,1,22,22V83a22,22,0,0,1-22,22H45A22,22,0,0,1,23,83V45A22,22,0,0,1,45,23H83m0-8H45A30.09,30.09,0,0,0,15,45V83a30.09,30.09,0,0,0,30,30H83a30.09,30.09,0,0,0,30-30V45A30.09,30.09,0,0,0,83,15Z"/>
                                    <path class="cls-1" d="M90.14,32a5.73,5.73,0,1,0,5.73,5.73A5.73,5.73,0,0,0,90.14,32Z"/>
                                    <path class="cls-1" d="M64.27,46.47A17.68,17.68,0,1,1,46.6,64.14,17.7,17.7,0,0,1,64.27,46.47m0-8A25.68,25.68,0,1,0,90,64.14,25.68,25.68,0,0,0,64.27,38.47Z"/>
                                </svg>
                                tekhnoholod</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--menu-section-->
    <div class="container-fluid">
        <div class="menu-bg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="menu-grid">
                            <a href="/" class="logo-link">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/logo.png" alt=""
                                     class="logo-link__img">
                            </a>
                            <div class="menu-desktop">
                                <!--header-menu-->
                                <?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
                            </div>
                            <!--mobile-menu-section-->
                            <div class="mobile-wrap">
                                <div class="mobile-nav">
                                    <div class="burger-icon">
                                        <span class="bar"></span>
                                        <span class="bar"></span>
                                        <span class="bar"></span>
                                    </div>
                                </div>
                                <div class="menu-wrap">
                                    <!--mobile-menu-->
                                    <?php wp_nav_menu(array('theme_location' => 'mobile-menu')); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
