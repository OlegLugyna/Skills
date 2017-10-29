<div class="sidebar">
        	<div>
            <?php $args= array(
                            'post_type' => 'post',
                            'orderby' => 'rand',
                            'category_name' => 'Exhibition, Photo Soot',
                            'posts_per_page' => 1
                                ); ?>
            <?php $rand_post = new WP_Query($args); ?>

            <?php if($rand_post -> have_posts()) : while($rand_post -> have_posts()) : $rand_post -> the_post(); ?>
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
            <?php the_excerpt(); ?>
            <p><a href="<?php the_permalink(); ?>" class="read-more">read more</a></p>

            <?php endwhile; ?>
            <!-- Вывод на экран сообщения, если не удается вывести случайный пост -->
            <?php else: ?>
              <div>
                <p>Cюда выводится случайная запись (пост).</p>
              </div>
            <?php endif; ?>

            	<!-- <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/side-img1.jpg" alt="" /></a>
                <h1><a href="#">Skill Set</a></h1>
                <p>Sed dolor ligula, tempus vitae malesuada utescu
                congue vitae diam. Integer non nisl est. Suspen
                isse at diam turpis, ut mattis velit. Praesent vel est non augue pretium condimentum at in mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur in varius ante. Etiam et nisi eget velit dignissim gravida ac nec quam. Aenean imperdiet massa quis diam tempunec.</p>
                <p><a href="#" class="read-more">read more</a></p> -->
            </div>
        </div>