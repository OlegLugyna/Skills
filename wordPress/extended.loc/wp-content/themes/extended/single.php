<?php 
$category = 3;
if(in_category( $category )) {
  include 'portfolio-single.php';
  exit;
}

?>

<?php get_header() ?>
    
  <div class="page-title">
  <?php $categ = get_the_category();?>
    <h1><?php echo $categ[0] -> cat_name; ?></h1>

    <!-- Хлебные крошки -->
      <p class="page-title-map"> 
        <a href="<?php echo home_url(); ?>">Home</a>  / 
        <a href="<?php echo get_category_link($categ[0] -> cat_ID); ?>"><?php echo $categ[0] -> cat_name; ?></a> / 
        <?php the_title(); ?>
      </p>
  </div>
  
  <div class="content-main">
  <!-- Стандартный цикл Вордпреса вывода записи -->
  <?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
    <?php the_post_thumbnail( 'full', array('class' => 'img-lefter') ); ?>
    <h1 class="center-n"><span class="hnc"><?php the_title(); ?></span></h1>
    <p><?php the_content(); ?></p>
  <?php endwhile; ?>
  <?php endif; ?>


    	
      <!-- <img src="images/about-img.jpg" class="img-lefter" alt="" />
      <h1 class="center-n"><span class="hnc">Why Choose Extended?</span></h1>
      <p>Extended is a very powerful premium WordPress theme created with the users point of view in mind and with a lot of attention to details. It has what we believe the most unique and advance front-end admin to help anyone looking to create a website in no time and with simplicity. </p>

      <p>We have created this tool to avoid users going back and forth between the back-end and the front-end side to add pages or to update some settings for example, which could take a lot of time. We also believe that seeing what you want while building the page is very powerful and avoid mistakes and frustrations.</p>

      <p>With our front-end admin you can create new pages with all the necessary field like the title, excerpt, images, categories or even the page layout with the choice of the sidebar you want, you can publish, unpublished or even delete the pages you’ve created directly on the front-end.</p> 

      <p>You can create unlimited sidebars with our sidebar generator. You can change the background of your site or even upload one, choose between more than 500 Google fonts for most of the typo elements. We have also create a drag & drop functionality to re-size the header as wide and high as you want, you can move around the logo and the menu where you’d like. And all of that still without leaving the front-end of your site.</p> -->
      
      
      <!-- Block Our team START -->
  <?php $id = 12; //id рубрики определим в переменную
    $posts_teams = new WP_Query(array(
    'post_type' => 'post',
    'order' => 'ASC', // sort from ahead to back
    'cat' => $id, //вместо category_name можно писать ID рубрики
    //'category_name' => 'Our Services',
    'posts_per_page' => 3 )); ?>

  <?php if ($posts_teams -> have_posts()) : ?>
    <h1 class="center-n"><span class="hnc">Meet Our Team</span> <span class="hnl">/ <a href="<?php echo get_category_link( $id ); ?>">View The Team</a></span></h1>
    <div class="our-team-main">
  <?php  while ($posts_teams -> have_posts()) : $posts_teams -> the_post(); ?>
    <div>
        <h2><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a> 
        <br /> 
        <?php the_title(); ?><br />
        <span><?php my_list_tags(); ?></span></h2>
        <p><?php the_excerpt(); ?></p>
    </div>
      

  <?php endwhile; ?>
    </div>
  <?php endif; ?>

      <!-- Block Our team OVER -->

      
                
        <!-- <h1 class="center-n"><span class="hnc">Meet Our Team</span> <span class="hnl">/ <a href="#">View The Team</a></span></h1>
        <div class="our-team-main">
            <div>
                <h2><a href="#"><img src="images/team1.jpg" alt="Darren Kimbell" /></a>
                <br />
                Darren Kimbell<br />
                <span>Business Marketing</span></h2>
                <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas faucibus mollis interdum. Fusce dapibus, tellus ac cursus commodo, tortor </p>
            </div>
            <div>
            	<h2><a href="#"><img src="images/team2.jpg" alt="Darren Kimbell" /></a>
                <br />
                Allan Pesola<br />
                <span>Developer</span></h2>
                <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas faucibus mollis interdum. Fusce dapibus, tellus ac cursus commodo, tortor </p>
            </div>
            <div>
            	<h2><a href="#"><img src="images/team3.jpg" alt="Darren Kimbell" /></a>
                <br />
                Lenore Hilker<br />
                <span>Designer</span></h2>
                <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas faucibus mollis interdum. Fusce dapibus, tellus ac cursus commodo, tortor </p>
            </div>
       	</div> -->
        
        <h1 class="center-n"><span class="hnc">Our Clients</span></h1>
        <div class="our-clients">
        <?php if(dynamic_sidebar( 'clients' )) {

        } else { ?>
          <span>Здесь блок наших партнеров и клиентов</span>
        <?php } ?>
        	<!-- <a href="#"><img src="images/client1.jpg" alt="" /></a>
          <a href="#"><img src="images/client2.jpg" alt="" /></a>
          <a href="#"><img src="images/client3.jpg" alt="" /></a>
          <a href="#"><img src="images/client4.jpg" alt="" /></a>
          <a href="#"><img src="images/client5.jpg" alt="" /></a>
          <a href="#"><img src="images/client6.jpg" alt="" /></a> -->
        </div>
           
    </div>
    
    <?php get_footer(); ?>