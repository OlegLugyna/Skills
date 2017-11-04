<?php 
/*
Template Name: Страница HOME
*/
?>
<?php get_header(); ?>


<div class="slider">
        <div class="flexslider">
          <ul class="slides">
            <?php $slider = new WP_Query(array('post_type' =>'slider', 'order' => 'ASC')); ?>
            <?php if($slider -> have_posts()) : while($slider -> have_posts()) : $slider -> the_post(); ?>
            <li>
            	<div class="slide-content">
                    <?php the_content(); ?>
                    <!-- <h1>Super Powerful Theme,<br />
                    With High Quality Standards</h1> 
                    <h3>Multi-Purpose Business WordPress Theme</h3>
                    <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Nullam id dolor id<br /> nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in,<br /> egestas eget quam. Donec ullamcorper nulla non metus auctor fringilla.</p>    
                    <p><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/slide-btn.png" /></a></p> -->
                </div>
                <?php the_post_thumbnail('full'); ?>
  	    	    <!-- <img src="<?php bloginfo('template_url'); ?>/images/slide1.jpg" /> -->
            </li>
              <!-- Здесь были блоки для выведения слайдера. Я их удалил. -->
            <?php endwhile ?>
            <?php else: ?>
            <h1>Это место для  картинок слайдера</h1>
            <?php endif ?>
          </ul>
        </div>
      </div>
    
    <div class="under-slider">
        <?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
            <!-- <h1>Extended is immensely powerful, flexible and nicely responsive.</h1>
            <p>You can easily add modules to the page with our Front-end Drag & Drop functionality. Page layouts began to be infinite and you can follow your creativity. The header is very flexible and allow you to upload backgrounds as well as choosing between few header layouts. Creating and updating your theme has never been that easy and it is fun to play with. Take a tour at all the pages and discover what a great and beautiful theme has to offer.</p> -->
        <?php endwhile; ?>
        <?php else: ?>
        <h1>Это место для  primary action</h1>
        <?php endif; ?>
    </div>
    
    <div class="content-main">
        <?php $posts_about = new WP_Query(array(
                        'post_type' => 'post',
                        'category_name' => 'About Us',
                        'posts_per_page' => 4 )); ?>
        <div class="whatwedo">
            <?php if ($posts_about -> have_posts()) :  while ($posts_about -> have_posts()) : $posts_about -> the_post(); ?>
                <div>
                    <a href=" <?php the_permalink(); ?>"><h1><span><?php the_title(); ?></span></h1></a>
                    <p><?php the_excerpt(); ?></p>
                </div> 
            <?php endwhile; ?>
            <?php endif; ?>
        </div>

    	<!-- <div class="whatwedo">
        	<div>
            	<h1><span>Flexibility</span></h1>
                <p>Fusce dapibus, tellus ac cursus como, tortor mauris condimentum nibh, ut fermentum massa justo sit amet isus.</p>
            </div> 
            <div>
            	<h1><span>Mobile Friendly</span></h1>
                <p>Fusce dapibus, tellus ac cursus como, tortor mauris condimentum nibh, ut fermentum massa justo sit amet isus.</p>
            </div>
            <div>
            	<h1><span>Very Powerful</span></h1>
                <p>Fusce dapibus, tellus ac cursus como, tortor mauris condimentum nibh, ut fermentum massa justo sit amet isus.</p>
            </div>
            <div>
            	<h1><span>Drag Modules</span></h1>
                <p>Fusce dapibus, tellus ac cursus como, tortor mauris condimentum nibh, ut fermentum massa justo sit amet isus.</p>
            </div>       
        </div> -->
        
        <?php $posts_about = new WP_Query(array(
                        'post_type' => 'post',
                        'order' => 'DESK', // sort back to ahead
                        'category_name' => 'Our Work',
                        'posts_per_page' => 4 )); ?>
        <?php if ($posts_about -> have_posts()) : ?>
        <h1 class="center-n">
            <span class="hnc">Our Latest Work</span> 
          
            <span class="hnl">
                / <a href="<?php echo get_category_link(get_cat_ID('Our Work')); ?>">View All Portfolio</a>
            </span></h1> 
        <div class="our-works-main">
           <?php while ($posts_about -> have_posts()) : $posts_about -> the_post(); ?>
           <div class="our-works">
            	<a class="our-work-href" href="<?php the_permalink(); ?>">
                    <div class="our-work-short">
                    
                        <img src="<?php bloginfo('template_url'); ?>/images/our-work-pic.png" alt="" />
                        <h3>Parturient Purus Bibendum</h3>
                        <!-- Выводим теги -->
                        <?php my_list_tags(); ?>
                        <!-- <p>Photoshop, Lightroom</p> Сюда выводим теги -->
                    </div>
                    <img class="our-work-img" src="<?php  echo get_post_meta($post->ID, 'portfolio_img', true); ?>" alt="" />
                </a>
            </div>

        <?php endwhile; ?>
           </div>

        
        <?php endif; ?>


        <!-- <div class="our-works-main">
        	<div class="our-works">
            	<a class="our-work-href" href="#">
                    <div class="our-work-short">
                        <img src="<?php bloginfo('template_url'); ?>/images/our-work-pic.png" alt="" />
                        <h3>Parturient Purus Bibendum</h3>
                        <p>Photoshop, Lightroom</p>
                    </div>
                    <img class="our-work-img" src="<?php bloginfo('template_url'); ?>/images/our-work1.jpg" alt="" />
                </a>
            </div>
            <div class="our-works">
                <a class="our-work-href" href="#">
                    <div class="our-work-short">
                        <img src="<?php bloginfo('template_url'); ?>/images/our-work-pic.png" alt="" />
                        <h3>Parturient Purus Bibendum</h3>
                        <p>Photoshop, Lightroom</p>
                    </div>
                    <img class="our-work-img" src="<?php bloginfo('template_url'); ?>/images/our-work2.jpg" alt="" />
                </a>
            </div>
            <div class="our-works">
                <a class="our-work-href" href="#">
                    <div class="our-work-short">
                        <img src="<?php bloginfo('template_url'); ?>/images/our-work-pic.png" alt="" />
                        <h3>Parturient Purus Bibendum</h3>
                        <p>Photoshop, Lightroom</p>
                    </div>
                    <img class="our-work-img" src="<?php bloginfo('template_url'); ?>/images/our-work3.jpg" alt="" />
                </a>
            </div>
            <div class="our-works">
                <a class="our-work-href" href="#">
                    <div class="our-work-short">
                        <img src="<?php bloginfo('template_url'); ?>/images/our-work-pic.png" alt="" />
                        <h3>Parturient Purus Bibendum</h3>
                        <p>Photoshop, Lightroom</p>
                    </div>
                    <img class="our-work-img" src="<?php bloginfo('template_url'); ?>/images/our-work4.jpg" alt="" />
                </a>
            </div>
        </div> -->
        
        <div class="advance">
        <?php $posts_accordion = new WP_Query(array(
                        'post_type' => 'post',
                        'order' => 'ASC', // sort from ahead to back
                        'cat' => 10, //вместо category_name можно писать ID рубрики
                        //'category_name' => 'Why Choose Us',
                        'posts_per_page' => 3 )); ?>
        
        <?php if ($posts_accordion -> have_posts()) : ?>
            <div class="why-us">
                <h1 class="center-n"><span class="hnc">Why Choose Us</span></h1>
                <div id="accordion">
                    <?php while ($posts_accordion -> have_posts()) : $posts_accordion -> the_post(); ?>
                        <h3><?php the_title(); ?></h3>
                        <div><?php the_content(); ?></div>
                    <?php endwhile; ?>
                </div>
            </div>
        <?php else: ?>
        <h3>Здесь посты рубрики Why Choose Us</h3>
        <?php endif; ?>	
            <!-- <div class="why-us">
                
                <h1 class="center-n"><span class="hnc">Why Choose Us</span></h1>
                <div id="accordion">
                    <h3>Accordion Title 1</h3>
                    <div>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas faucibus mollis interdum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas sed diam eget risus varius blandit sit amet non magna.
                </div>
                    
                    <h3>Accordion Title 2</h3>
                    <div>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas faucibus mollis interdum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas sed diam eget risus varius blandit sit amet non magna.</div>
                    
                    <h3>Accordion Title 3</h3>
                    <div>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas faucibus mollis interdum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas sed diam eget risus varius blandit sit amet non magna.</div>                    
                </div>
            
            </div> -->

            
    <?php $id = 11; //id рубрики определим в переменную
        $posts_tabs = new WP_Query(array(
        'post_type' => 'post',
        'order' => 'ASC', // sort from ahead to back
        'cat' => $id, //вместо category_name можно писать ID рубрики
        //'category_name' => 'Our Services',
        'posts_per_page' => 4 )); ?>
    <?php if ($posts_tabs -> have_posts()) : ?>
        <div class="our-services"> 
            <h1 class="center-n"><span class="hnc">Our Services</span></h1>
            <div id="tabs"> 
                <ul>
                    <?php while ($posts_tabs -> have_posts()) : $posts_tabs -> the_post(); ?>
                    <li><a href="#tabs-<?php the_ID(); ?>"><?php the_title(); ?></a></li>
                    <?php endwhile; ?>
                </ul>
                <?php while ($posts_tabs -> have_posts()) : $posts_tabs -> the_post(); ?>
                    <div id="tabs-<?php the_ID(); ?>"><?php the_content(); ?></div>
                <?php endwhile; ?>
            </div>
        </div>
    <?php else: ?>
    <div class="our-services">
        <h1 class="center-n">Здесь записи рубрики Our Services</h1>
    </div>
    <?php endif; ?>
            <!-- <div class="our-services"> 
               
                <h1 class="center-n"><span class="hnc">Our Services</span></h1>
                <div id="tabs">                	
                    <ul>
                        <li><a href="#tabs-1">Tab Title 1</a></li>
                        <li><a href="#tabs-2">Tab Title 2</a></li>
                        <li><a href="#tabs-3">Tab Title 3</a></li>
                        <li><a href="#tabs-4">Tab Title 4</a></li>
                    </ul>
                    <div id="tabs-1"><img class="img-righter" src="<?php bloginfo('template_url'); ?>/images/tabs-img1.jpg" alt="" />Cum sociis natoque penatibus et magnis dis partent montes, nascetur ridiculus mus. Maecenas faucibus mollis interdum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cum sociis natoque penatibus et magnis disamet non magna.</div>
                    <div id="tabs-2">Phasellus mattis tincidunt nibh. Cras orci urna, blandit id, pretium vel, aliquet ornare, felis. Maecenas scelerisque sem non nisl. Fusce sed lorem in enim dictum bibendum.</div>
                    <div id="tabs-3">Nam dui erat, auctor a, dignissim quis, sollicitudin eu, felis. Pellentesque nisi urna, interdum eget, sagittis et, consequat vestibulum, lacus. Mauris porttitor ullamcorper augue.</div>
                    <div id="tabs-4">Nam dui erat, auctor a, dignissim quis, sollicitudin eu, felis. Pellentesque nisi urna, interdum eget, sagittis et, consequat vestibulum, lacus. Mauris porttitor ullamcorper augue.</div>
                </div>
            </div> -->
        
        </div>
<?php get_footer(); ?>