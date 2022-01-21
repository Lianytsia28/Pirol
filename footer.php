<footer>
    <section class="container">
        <div class="footer-100">
        <div class="container_footer">
        
                            <div class="container_footer-content">
                                <div class="container_footer-content_txt">
                                    <p><?php the_field('footer_content'); ?></p>
                                </div>
                                <div class="container_footer-content_txt">
                                    <p><?php the_field('footer_contact'); ?></p>
                                </div>
                            </div>
                     
        </div>
        <div class="container_footer">
            <div class="container_footer-right">
            <?php wp_nav_menu([
                    'theme_location' => 'header',
                    'container' => true,
                    'menu_class' => 'menu-footer'
                ]) ?>
            </div>
            <div class="container_footer-right-social">
                <div class="">
                <?php if(have_rows('footer_social')):?>
            <div class="">
                    <?php while(have_rows('footer_social')): the_row();?>    
                <div class="">
                        <p class="container-right-social-txt"><?php the_sub_field('social_txt');?></p>  
                </div>
                <?php endwhile;?>
            </div>
            <?php endif;?>
                </div>
            </div>
        </div>        
        </div>   
    </section>        
</footer>
    <?php wp_footer() ?>
</body>
</html>