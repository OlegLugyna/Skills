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
    
    <!-- <div class="page-nav">
    	<ul>
        	<li><a href="#">All</a></li>
          <li><a href="#">Web Design</a></li>
          <li><a href="#">Marketing</a></li>
          <li><a href="#">Logo</a></li>
          <li><a href="#">Branding</a></li>
          <li><a href="#">Print</a></li>
          <li><a href="#">Photography</a></li>
        </ul>
    </div> -->

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

      <!-- Pagination копируем из доков вордпресса-->
      <?php
        // global $wp_query;

        // $big = 999999999; // need an unlikely integer

        // echo paginate_links( array(
        //   'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        //   'format' => '?paged=%#%',
        //   'current' => max( 1, get_query_var('paged') ),
        //   'total' => $wp_query->max_num_pages
        // ) ); 

        wp_corenavi();
?>

      <!-- <ul class="pager">        	
        	<li><a href="#" class="now">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>             
        </ul>-->
      <?php endif; ?> 
    </div>
    
    <!-- <div class="content-main">
    	
        <div class="artical-anons-main">
        	<img src="images/artical1.jpg" alt="" class="artical-img" />
            <div class="artical-head">
            	<h1>Risus Parturient Malesuada</h1>
                <p>Print, Marketing, Branding</p>
            </div>
            <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Nulla vitae elit libero, a pharetra augue. Vestibulum id ligula porta felis euismod semper. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id </p>
            <p><a href="#" class="read-more">Read more</a></p>
        </div>
        
        <div class="artical-anons-main">
        	<img src="images/artical2.jpg" alt="" class="artical-img" />
            <div class="artical-head">
            	<h1>Risus Parturient Malesuada</h1>
                <p>Print, Marketing, Branding</p>
            </div>
            <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Nulla vitae elit libero, a pharetra augue. Vestibulum id ligula porta felis euismod semper. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id </p>
            <p><a href="#" class="read-more">Read more</a></p>
        </div>
        
        <div class="artical-anons-main">
        	<img src="images/artical3.jpg" alt="" class="artical-img" />
            <div class="artical-head">
            	<h1>Risus Parturient Malesuada</h1>
                <p>Print, Marketing, Branding</p>
            </div>
            <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Maecenas sed diam eget risus varius blandit sit amet non magna. Nulla vitae elit libero, a pharetra augue. Vestibulum id ligula porta felis euismod semper. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id </p>
            <p><a href="#" class="read-more">Read more</a></p>
        </div> -->
        
        <!-- <ul class="pager">        	
        	<li><a href="#" class="now">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>             
        </ul> -->
           
    </div>

<?php get_footer(); ?>