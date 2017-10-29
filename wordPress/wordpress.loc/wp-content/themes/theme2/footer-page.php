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
        </div>
    </div>
</div>
<?php wp_footer(); ?>
</body>
</html>