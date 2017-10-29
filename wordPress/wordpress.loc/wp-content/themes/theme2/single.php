<?php get_header('portfolio-page'); ?>

<div style="color:#cecece; font-size: 15px;"class="content-main">
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
  <!-- <p> -->
  <h1><?php the_title() ?></a></h1>
  <!-- Условие вывода картинки. Для категории портфолио, она не будет выводиться. Для остальных будет-->
  <?php $category = get_the_category(); 
  //var_dump($category);  это вывод возвращаемого массива для 
  ?>
  <?php if($category[0] -> category_nicename !== 'portfolio') :?>
  <?php the_post_thumbnail(); ?>
  <?php endif; ?>
  
  <!-- <div style="clear:both;"></div> -->
   <p><?php the_content(); ?>
  <!-- </p>  -->
<?php endwhile; ?>
<?php endif; ?>

</div>

<?php get_footer(); ?>