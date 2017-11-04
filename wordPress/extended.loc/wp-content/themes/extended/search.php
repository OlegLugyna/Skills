<?php get_header(); ?>

<div class="page-title">
  <h1>Результаты поиска</h1>
    <!-- <p class="page-title-map"><a href="<?php home_url(); ?>">Home</a>  /  <?php single_cat_title(); ?></p> -->
</div>
<div class="content-main">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="artical-anons-main">
      <?php the_post_thumbnail( 'full', array('class' => 'artical-img')); ?>
        <div class="artical-head">
          <h1><?php the_title(); ?></h1>
          <p><?php my_list_tags(); ?></p>
        </div>
        <p><?php the_excerpt(); ?></p>
        <p><a href="<?php the_permalink(); ?>" class="read-more">Read more</a></p>
    </div>
  <?php endwhile; ?>

  <!-- Pagination-->
  <?php wp_corenavi(); ?> <!-- Пагинация --> 

  <?php else: ?>
    <div class="content-main">
      <p>В результате поиска ничего не найдено</p>
    </div>
  <?php endif; ?>
</div>
</div>
<?php get_footer(); ?>