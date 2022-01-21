    <?php get_header() ?>
    <section class="container-100">
        <div class="container-txt">
        <div class="container">
            <div class="container_home">
                <p class="home_max-txt"><?php the_title(); ?></p>
                <span class="home_min-txt"><?php the_content(); ?></span>
                <button class="button-home">CONTACT US</button>
            </div>
        </div>
        </div>
        <div class="test_img-1"><img class="img_test" src="<?php echo get_the_post_thumbnail_url(); ?>" /></div>
    </section>
    <?php get_footer() ?>
    