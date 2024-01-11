<?php if (is_home()) { } else { ?>
<footer id="footer">
	<div class="banquna">Copyright © <?php bloginfo('name'); ?> by <a href="https://www.huitheme.com/">WordPress</a></div>
	<?php if( get_theme_mod('ds_beian_url') ): ?>
    <a href="http://beian.miit.gov.cn/" rel="external nofollow" target="_blank">
    <?php endif; ?>
    <?php echo get_theme_mod('ds_beian') ?>
    <?php if( get_theme_mod('ds_beian_url') ): ?>
    </a>
    <?php endif; ?>
</footer>
</div><!-- header col-lg-6 -->
</div><!-- header row -->
</div><!-- header container -->
<?php } ?>
<?php echo get_theme_mod('ds_footer'); ?>
<?php wp_footer();?>
</body>
</html>