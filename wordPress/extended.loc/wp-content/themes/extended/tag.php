<?php get_header(); ?>

<div class="page-title">

    	<h1><?php single_cat_title(); ?></h1>

        <p class="page-title-map"><a href="<?php home_url(); ?>">Home</a>  /  <?php single_cat_title(); ?></p>
    </div>
     <!-- Вывод ссылок на теги(метки) и сами теги для каждой отдельной категории  -->
    <?php 
      $categ_id = get_query_var( 'cat' ); // возвращает ID текущей категории, using args - 'cat'
      $tags = get_tags_in_cat($categ_id); // созданная нами  функция возвращает теги в текущей категории
      if($tags) {
        echo '<div class="page-nav">';
          echo '<ul>';
          foreach($tags as $tag_id => $tag_name) {
            echo '<li><a href="'. get_tag_link($tag_id) .'">'. $tag_name .'</a></li>';
          }
          echo '<ul>';
        echo '</div>';  
      }
    ?>
    <div class="content-main">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <div class="artical-anons-main">
      <?php the_post_thumbnail( 'full', array('class' => 'artical-img')); ?>
        <!-- <img src="images/artical1.jpg" alt="" class="artical-img" /> -->
          <div class="artical-head">
            <h1><?php the_title(); ?></h1>
              <p><?php my_list_tags(); ?></p>
          </div>
          <p><?php the_excerpt(); ?></p>
          <p><a href="<?php the_permalink(); ?>" class="read-more">Read more</a></p>
      </div>
      <?php endwhile; ?>
      <?php
        wp_corenavi();
?>
      <?php endif; ?>
    </div>
    </div>

<?php get_footer(); ?>