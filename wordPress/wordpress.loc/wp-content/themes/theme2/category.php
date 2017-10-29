<?php get_header(); ?>

    <div class="content-main">
    <?php if(dynamic_sidebar('slider_index')) { 
        //dynamic_sidebar('slider_index');
        }else {
    ?>     
        <h1>Сюда вставляются картинки карусельки</h1>
    <?php } ?> 
    
    	<div class="content-left">
      <!-- Цикл для вывода записи-->
      <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
      <div class="portfolio-image">
      <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
    </div>
      <?php endwhile; ?>
      <?php endif; ?>

      <div style="clear:both"></div> <!-- Сбрасываем обтекание -->

      <!-- подключаем пагинацию следующей страницы для красоты-->
      <?php
        posts_nav_link('<span> - </span>', '&#9668; Попередня сторінка', 'Наступна сторінка &#9658;');
      ?>  
       

        </div>

        

        <!-- Выводим сайдбар в отдельный файл -->
        <?php get_sidebar(); ?>
        
        <!-- Здесь была верстка сайдбара -->
                
    </div>  

    
      
      
</div>

<?php get_footer(); ?>
