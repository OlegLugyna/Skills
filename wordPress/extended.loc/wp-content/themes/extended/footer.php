<div class="footer">
    	<p class="copy">Copyright 2017. All Right Reserved MonkeeThemes.</p>
      <?php wp_nav_menu(array(
            'theme_location' => 'footer_menu',
            'container_class'       => 'ftrmenu',
            'menu_class'      => ''
        )); ?>
        <!-- <p class="ftrmenu">
            <a href="#">Home</a> |     
            <a href="#">About</a> |     
            <a href="#">Sitemap</a> |     
            <a href="#">Contact</a>
        </p>  -->
    </div>
</div>
  <!-- jQuery -->
  <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script> подключили-->
  <!-- <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')</script> -->

  <!-- FlexSlider -->
  <!-- <script defer src="js/jquery.flexslider.js"></script>подключили -->

<script type="text/javascript">
    $(function(){
      $( "#accordion" ).accordion();
	  $( "#tabs" ).tabs();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>
  
  <!-- Optional FlexSlider Additions -->
  <!-- <script src="js/jquery.easing.js"></script>
  <script src="js/jquery.mousewheel.js"></script>
  <script defer src="js/demo.js"></script>
  <script src="js/jquery-ui-1.9.2.custom.js"></script> подключили function.php -->

  <?php wp_footer(); ?>
</body>
</html>
