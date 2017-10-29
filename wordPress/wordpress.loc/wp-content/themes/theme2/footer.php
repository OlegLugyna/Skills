<div class="footer-wrapper">
	<div class="footer-main">
    	<div class="foter-left">
            <a href="/"><img src="<?php bloginfo('template_url'); ?>/images/logo-ftr.jpg" alt="" /></a>
            <p>copyright 2011 <a href="#">www.yoururl.com</a></p>
        </div>
        <div class="foter-right">
        <?php if(dynamic_sidebar('social_btn')) { 
            //dynamic_sidebar('social_btn');
        }else {
        ?>     
            <span style="color: #fff">Сюда вставляются ссылки на соц сети</span>
    <?php } ?> 

        	<!-- <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/twitter.jpg" alt="наш твитер" /></a>
            <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/facebook.jpg" alt="мы на facebook" /></a> -->
        </div>
    </div>
</div>
<!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script> -->
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquerypp.custom.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.elastislide.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.liSlidik.js"></script>
<script type="text/javascript">
		
	$( '#carousel' ).elastislide();

    $(function(){
        $(window).load(function(){
            $('#slide_2').liSlidik({
                auto:3000,
                duration: 1000
            });
	})
});
			
</script>
<?php wp_footer(); ?>
</body>
</html>