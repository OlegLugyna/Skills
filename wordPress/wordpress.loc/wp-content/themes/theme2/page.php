<?php get_header('page'); ?>

    <div class="content-main">
    
    	<div class="content-left">
      <!-- Цикл для вывода записи-->
      <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
      <?php endwhile; ?>
      <?php endif; ?>

        	<!-- <h1><a href="#">Hi, My Name Is Anne Photographer, I’m A UK Freelance Photographer</a></h1>
        	<img src="<?php bloginfo('template_url'); ?>/images/mail-news1.jpg" class="img-left" alt="" />            
            <p>Nam egestas sapien molestie lorem auctor eget scelerisque neque tincidunt. Ut iaculis leo non sem consectetur placerat. Maecenas mi massa, interdum at sagittis eu, imperdiet a dui. Duis sit amet tortor leo. Fusce tempor pellentesque mollis. Sed tincidunt elit sit amet ipsum fermentum venenatis.</p>
            
            <p>Proin nec purus nibh, eget suscipit libero. Duis tincidunt cursus egestas. Suspendisse commodo nisl at purus euismod sit amet pharetra dolor laoreet. In placerat sapien consectetur nulla posuere eget lobortis felis hendrerit. Mauris volutpat purus eget velit placerat tincidunt. Duis nulla eros, lacinia et malesuada quis, varius vitae nunc. Quisque a turpis sed leo sagittis iaculis. In eget risus et risus auctor hendrerit. Duis at est ligula, eu ultricies elit. Sed sapien quam, dignissim ut faucibus at, fringilla vitae leo. Praesent tristique aliquet nisl, eget sodales risus hendrerit iaculis.</p>

			<p>Mauris arcu eros, suscipit a sodales venenatis, rutrum sit amet justo. Cras neque neque, mollis in molestie ac, ultrices eget felis. Pellentesque neque mauris, scelerisque a tincidunt eu, ultrices at urna. </p>
            
            <p><a href="#" class="read-more">read more</a></p> -->
        </div>

        <!-- Выводим сайдбар в отдельный файл -->
        <?php get_sidebar(); ?>
        <!-- <div class="sidebar">
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
        </div> -->
                
    </div>  
</div>

<?php get_footer('page'); ?>
