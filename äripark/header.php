<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_theme_file_uri('images/favicon/apple-touch-icon.png')?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_theme_file_uri('images/favicon/favicon-32x32.png')?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_theme_file_uri('images/favicon/favicon-16x16.png')?>">
    <link rel="manifest" href="<?php echo get_theme_file_uri('images/favicon/site.webmanifest')?>">
    <link rel="mask-icon" href="<?php echo get_theme_file_uri('images/favicon/safari-pinned-tab.svg')?>" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#ee164b">
    <meta name="theme-color" content="#ffffff">
    <?php wp_head(); ?>
    <title>Ringi äripark</title>
</head>
<body>
<header class="border--16 border--8-mobile border--white site-header">
    <div class="d-flex flex-column justify-content-between background background--gradient-dark">
        <nav class="d-flex flex-row justify-content-between">
            <div id="logo">
                <a href="<?php echo get_bloginfo('url')?>"><img src="<?php echo get_theme_file_uri('images/icons%20and%20logos/logo-white.svg')?>"
                                alt="Ringi äripargi logo - kaks sõõri alguses ja teksti 'Ringi äripark'"></a>
            </div>
            <ul id="language" class="nav">
                <li><a href="" class="nav-item nav-link">Est</a></li>
                <li><a href="" class="nav-item nav-link">Eng</a></li>
            </ul>
        </nav>
        <div id="title" class="d-flex flex-column align-items-center justify-content-center text-center">
            <h1 class="h1 text--fw-700 mb-5"><?php echo html_entity_decode( get_bloginfo('description')) ?></h1>
            <a href="<?php echo get_bloginfo('url')?>#contact" class="cta text--fw-700">Eelmüük alanud - võta ühendust</a>
        </div>
    </div>
    <div id="scroll-down">
        <a href="<?php echo get_bloginfo('url')?>#contact" class="d-flex justify-content-end w-100 h-100">
            <span class="icon icon--caret-down"></span>
        </a>
    </div>
</header>