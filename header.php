<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- FONTAWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">


    <?php wp_head(); ?>
    <title>Zob Store</title>
</head>

<header>
    <div class="container">
        <div style="background-image: url('<?php echo get_template_directory_uri() . '/images/logo.png' ?>');" id="logo"></div>
        <div id="menu-mobile">
            <i class="fa-solid fa-bars"></i>
        </div>
        <div id="menu-main" class="close">
            <?php wp_nav_menu(array('menu' => 'Principal', 'menu_id' => 'menu-menu-2', 'ul_class' => 'grid', 'li_class' => 'title')); ?>
        </div>
    </div>
</header>


<body class="poppins-regular">