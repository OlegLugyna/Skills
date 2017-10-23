<?php
get_header();
?>

<div class="content-wrapper">
	<div class="content-main">
    	
        <div class="content">
            <?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
                <!-- здесь формирование вывода постов, -->
                <!-- где работают теги шаблона относящиеся к the loop -->
            
            <div class="articles">
                <!-- <div class="articles-head">
            		<span class="articles-date"><img src="<?php bloginfo('template_url'); ?>/images/articles-autor.jpg" alt="admin" /> <span><?php the_author(); ?></span> - <?php the_time('M jS Y'); ?></span>
                    <span class="articles-comments"><img src="<?php bloginfo('template_url'); ?>/images/articles-comment.jpg" alt="commets" /> <a href="#"><?php comments_popup_link(); ?></a></span>           
            	</div> -->
                <h1><a href="#"><?php the_title(); ?></a></h1>
                <p><?php the_content(); ?></p>
            </div>

            <?php endwhile; ?>
            <?php endif; ?>
            
            <div class="pager">
              <?php 
              previous_post_link();
              next_post_link();
              ?>
               
            </div>
        
        </div>
        
        <?php
        get_sidebar();
        ?>        
    </div>
    
</div>
<?php
get_footer();
?>
<script>
	$(document).ready( function(){
		$('#slideshowHolder').jqFancyTransitions({ navigation: true, width: 594, height: 279 });
	});
</script>
<?php
wp_footer();
?>
</body>
</html>
