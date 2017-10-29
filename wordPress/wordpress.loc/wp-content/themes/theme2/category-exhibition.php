<?php get_header(); ?>

    <div class="content-main">
    <!-- <?php if(dynamic_sidebar('slider_index')) { 
        //dynamic_sidebar('slider_index');
        }else {
    ?>     
        <h1>Сюда вставляются картинки карусельки</h1>
    <?php } ?>  -->
    
    	<div class="content-main-blocks">
      <!-- Цикл для вывода записи-->
      <?php $i = 1; ?>
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
      <div>
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
        <h1><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h1>
        <!-- выводим произвольные поля. спец функция get_post_custom();-->
        <?php $customs_field = get_post_custom( get_the_ID() );
        //var_dump($customs_field);
        ?>
        <!-- вывод метаданных: place, data, tickets-->
        <?php if($customs_field['place'][0]):?>
        <p class="ex-place"><?php echo $customs_field['place'][0] ?></p>
        <?php endif; ?>
        <?php if($customs_field['date'][0]):?>
        <p class="ex-date"><?php echo $customs_field['date'][0] ?></p>
        <?php endif; ?>
        <?php if($customs_field['ticket'][0]):?>
        <p class="ex-ticket"><?php echo $customs_field['ticket'][0] ?></p>
        <?php endif; ?>

        <!-- <p class="ex-place">King’s Museum, Kensington, London</p>
				<p class="ex-date">Tues 26th April 2011 - Sat 30th April 2011
          8am to 9pm with free refreshments.</p>
				<p class="ex-ticket">Buy tickets from <a href="#">TicketMaster</a></p> -->
        <p><?php the_excerpt(); ?></p>
        <p><a href="<?php the_permalink(); ?>" class="read-more"> reed more</a></p>
      </div>
    <?php 
    //сброс обтекания если три записи
    if($i==3) {
      echo "<div style='clear:both'></div>";
      $i=0;
    }
    $i++;
    ?>
<?php endwhile; ?>
<?php endif; ?>

      <!-- <div style="clear:both"></div> Сбрасываем обтекание -->

      <!-- подключаем пагинацию следующей страницы для красоты-->
      <?php
        posts_nav_link('<span> - </span>', '&#9668; Попередня сторінка', 'Наступна сторінка &#9658;');
      ?>  
       

        </div>

    </div>  
</div>

<?php get_footer(); ?>
