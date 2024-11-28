<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> <?php bloginfo(show: 'name'); ?> </title>
    <meta content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" name="viewport">

    <?php wp_head(); ?>

</head>
<body>
<header class="header-top">
    <div class="headermen  contain">


        <div class="logo">
            <a href="<?php the_permalink() ?>"><img  alt="Alt Img" title="Title Img" src="<?php bloginfo('template_url');?>/img/logo.png"></a>
        </div>
        <nav class="nav-header" id="myTopnav">
        <?php 
        if (has_nav_menu('one_menu')) {
	wp_nav_menu( array(
		'theme_location' => 'one_menu',
		'menu_class' => 'nav-header',
		'container' => false
	) );
}

        ?>
        </nav>
        <div class="call-hed ">
            <a href="#">   09380777108
                <i class="fa-solid fa-phone-volume iconcal "></i></a>
        </div>
        <button href="" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </button>




        <div class="responsive-btn-menu">

        </div>



    </div>

</header>
