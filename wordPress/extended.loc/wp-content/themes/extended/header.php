<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- <link rel="stylesheet" type="text/css" href="style.css" /> подключили -->
<!-- <link rel="stylesheet" href="flexslider.css" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/jquery-ui-1.9.2.custom.css" /> podkluchili v function.php-->
<title><?php bloginfo('name'); wp_title(); ?></title>
<?php wp_head(); ?>
</head>

<body>
<div class="karkas">
	<div class="header">
    	<a href="<?php home_url(); ?>"><img class="logo" src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="Extendet" /></a>
        <p class="head-contakt">
        	<img src="<?php bloginfo('template_url'); ?>/images/head-mail.png" alt="" /> <a href="mailto:<?php bloginfo('admin_email'); ?>"><?php bloginfo('admin_email'); ?></a>&nbsp;&nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;&nbsp;<img src="<?php bloginfo('template_url'); ?>/images/head-mail.png" alt="" /> <?php echo get_option('my_phone'); ?>
        </p>
        <div class="head-soc">
        <?php if(!dynamic_sidebar('social')): ?>
        <span style="color: #fff;">Это область иконок соц сетей</span>
        <?php endif; ?>
        	<!-- <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/head-soc1.png" alt="" /></a>
            <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/head-soc2.png" alt="" /></a>
            <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/head-soc3.png" alt="" /></a>
            <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/head-soc4.png" alt="" /></a>
            <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/head-soc5.png" alt="" /></a>
            <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/head-soc6.png" alt="" /></a>             -->
        </div>
        <div class="menu">
        <?php wp_nav_menu(array(
            'theme_location' => 'header_menu',
            'container'       => '',
            'menu_class'      => ''
        )); ?>
            <!-- <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">The Team</a></li>
                <li><a href="#">Testimonials</a></li>
                <li><a href="#">Our Work</a></li>
                <li><a href="#">Our Videos</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Contact</a></li>
            </ul>     -->
            <div class="serach">
            	<form action="">
                	<input name="s" class="search-txt" type="text" value="Search" onBlur="if(this.value=='')this.value='Search'" onFocus="if(this.value=='Search')this.value=''" />
                    <input type="image" src="<?php bloginfo('template_url'); ?>/images/search-bg.png" name="go" />
                </form>
            </div>
        </div>
    </div>