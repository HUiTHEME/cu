<?php get_header(); ?>
<section class="">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="index_box">
                    <div class="index_box_img">
                        <img src="<?php echo get_theme_mod('ds_logo') ?>" alt="">
                    </div>
                    <h1><?php echo get_theme_mod('ds_site_name') ?></h1>
                    <p><?php echo get_theme_mod('ds_site_txt') ?></p>
                    <address>

                        <?php if( get_theme_mod('ds_beian_url') ): ?>
                        <a href="http://beian.miit.gov.cn/" rel="external nofollow" target="_blank">
                        <?php endif; ?>
                            <svg t="1669988156759" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="3471" width="200" height="200"><path d="M512 967.111111c170.666667-68.266667 284.444444-164.977778 341.333333-284.444444 73.955556-142.222222 91.022222-307.2 56.888889-500.622223L512 56.888889 113.777778 187.733333c-34.133333 187.733333-17.066667 352.711111 51.2 494.933334C227.555556 802.133333 341.333333 898.844444 512 967.111111z m-295.822222-307.2C153.6 534.755556 136.533333 392.533333 164.977778 227.555556L512 113.777778l347.022222 113.777778c22.755556 164.977778 5.688889 307.2-56.888889 426.666666-51.2 102.4-147.911111 182.044444-290.133333 244.622222-147.911111-56.888889-244.622222-142.222222-295.822222-238.933333z" fill="#333333" p-id="3472"></path><path d="M512 631.466667L318.577778 438.044444l45.511111-39.822222L512 546.133333 716.8 341.333333l45.511111 39.822223z" fill="#333333" p-id="3473"></path></svg>
                            <span><?php echo get_theme_mod('ds_beian') ?></span>
                        <?php if( get_theme_mod('ds_beian_url') ): ?>
                        </a>
                        <?php endif; ?>
                    </address>
                    <?php wp_nav_menu(
                        array(
                        'theme_location'  => 'main',
                        'container'       => 'nav',
                        'container_class' => 'primary',
                        'menu_class'      => 'menu-ul',
                        'menu_id'         => 'menu-ul',
                        'depth'           => 1,
                        )
                    );
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>

