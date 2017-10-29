<?php 
/*
Template Name: Шаблон страницы контактов
*/
?>

<?php get_header('page'); ?>

<div class="content-main">

<!-- Цикл базовый Вордпреса-->
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
  <div class="content-left">
    <h1><?php the_title(); ?></h1>
<!-- <h1>Contact Me - Your Privacy Is Assured</h1> -->
    
    <div class="contact-form">
    <?php the_content(); ?>
      <!-- Форма сформирована плагином Contact Form 7-->
      <!-- <form>
        <p><label for="firstName" >Your Name</label><input type="text" name="name" id="firstName" /></p>
          <p><label for="email" >Your Email*</label><input type="text" name="email" id="email" /></p>
          <p><label for="subject" >Subject</label><input type="text" name="subject" id="subject" /></p>
          <p><label for="message" >Message</label><textarea name="message" id="message"></textarea></p>
          <p><input type="image" src="images/contact-btn.jpg" name="send-msg" />
      </form> -->
    </div>
  </div>
<?php endwhile; ?>
      <?php endif; ?>
  
  <div class="sidebar">
    <div>

      <?php the_post_thumbnail(); ?>
      <!-- <img src="images/contact-img.jpg" alt="" />-->
      <h1><?php the_title(); ?></h1>
      <!-- <h1>Contact Details</h1>-->
      <!-- Формируем базовый цикл фордпресс -->
      <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
      <?php $custom_field = get_post_custom( get_the_ID() ); 
      //var_dump($custom_field);
      ?>
      <?php 
      $pattern = '#^contact-#'; //создаем регулярное выражение для проверки
      foreach($custom_field as $key => $value) {
        if(preg_match( $pattern, $key) ) {
          echo "<p class='{$key}'>{$value[0]}</p>";
        }
      }
      ?>
      <?php endwhile; ?>
      <?php endif; ?>

      <!-- <p class="contact-address">18, Your Street, Yourareaname, Cityname,
      Countyname, DE1 2WX, United Kingdom.</p>
      
      <p class="contact-phone">0800 900 0003</p>
      
      <p class="contact-mail">youremail@yoursite.com</p>
      
      <p class="contact-liciense">Registered photographer No. 09900-CCC</p>
      
      <p class="contact-liciense">VAT registered business number 455-5559-000</p> -->

    </div>
  </div>

</div>





<?php get_footer('page'); ?>