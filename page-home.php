<?php get_header(); ?>

<?php
/* Template Name: home */ 
?>
<section class="container-100">
        <div class="container-txt">
            <div class="container">
                <div class="container_home">
                    <p class="home_max-txt"><?php the_title(); ?></p>
                    <span class="home_min-txt"><?php the_content(); ?></span>
                    <?php the_field('home_button'); ?>
                </div>
            </div>
        </div>
        <img class="img_test" src="<?php echo get_the_post_thumbnail_url(); ?>" />
    </section>
    
    
    <section class="container-100" id="about">
        <div class="container">
            <div class="title-container">
                <p class="title-txt"><?php the_field('about_title'); ?></p>
                <p class="title-txt-content"><?php the_field('about_content'); ?></p>
                <?php 
                    $image = get_field('image_about');
                    if( !empty( $image ) ): ?>
                    <img class="about_img-a" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
            </div>
        <div class="about_container">
            <div class="container">
                <div class="about_left-content">
                    <p class="about_left-content-txt"><?php the_field('skilss_title'); ?></p>
                    <p class="about_left-content-txt-min"><?php the_field('skilss_1'); ?></p>
                    <div class="about_left-content-line">
                        <div class="about_left-content-line-col" style="width: 75%;"></div>
                    </div>
                    <p class="about_left-content-txt-min"><?php the_field('skilss_2'); ?></p>
                    <div class="about_left-content-line">
                        <div class="about_left-content-line-col" style="width: 90%;"></div>
                    </div>
                    <p class="about_left-content-txt-min"><?php the_field('skilss_3'); ?></p>
                    <div class="about_left-content-line">
                        <div class="about_left-content-line-col" style="width: 65%;"></div>
                    </div>
                </div>
            </div>
            <div>
                <?php 
                    $image = get_field('image_about-2');
                    if( !empty( $image ) ): ?>
                    <img class="about_img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
            </div>
        </div>
        <div class="numbers-100">
            <div class="container">
                <div class="section_numbers1">
                    <?php if(have_rows('about_id')):?>
                    <div class="section_numbers">
                            <?php while(have_rows('about_id')): the_row();
                                    $image = get_sub_field('about_id_img');
                                    $picture = $image['sizes']['thumbnail'];
                                ?>    
                        <div class="section_numbers-post">
                            <div class="section_numbers-left">
                                <img class="section_numbers-post-img" src="<?php echo $picture ?>" alt="<?php echo $image['alt']; ?>">
                            </div>
                            <div class="section_numbers-right">
                                <p class="section_numbers-txtmax"><?php the_sub_field('about_id_number');?></p>
                                <p class="section_numbers-txtmin"><?php the_sub_field('about_id_txt');?></p>
                            </div>  
                        </div>
                        <?php endwhile;?>
                    </div>
                <?php endif;?>
                </div>
            </div>
        </div>
    </section>
    <section class="portfolio" id="work">
        <div class="title-container">
            <p class="title-txt"><?php the_field('portfolio_title_txt'); ?></p>
            <p class="title-txt-content"><?php the_field('portfolio_content_txt'); ?></p>
        </div>
        <div class="work">
                    <?php
                        // параметры по умолчанию
                        $posts = get_posts( array(
                            'numberposts' => -1,
                            'category'    => 0,
                            'orderby'     => 'date',
                            'order'       => 'DESC',
                            'include'     => array(),
                            'exclude'     => array(),
                            'meta_key'    => '',
                            'meta_value'  =>'',
                            'post_type'   => 'work_post',
                            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                        ) );
                        foreach( $posts as $post ){
                            setup_postdata($post);
                            ?>
                                <div class="work_post">
                                    <?php 
                                        $image = get_field('work_img');
                                        if( !empty( $image ) ): ?>
                                            <div class="portfolio_block-flex-x">
                                            <img class="work_image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />   
                                        <?php endif; ?>
                                        <div class="portfolio_flex-y">
                                            <p class="portfolio_txt-max"><?php the_title(); ?></p>
                                            <div class="portfolio_txt-min"><?php the_content(); ?></div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                        }
                        wp_reset_postdata(); // сброс 
                    ?>
        </div>
    </section>
    <section class="our" id="process">
        <div class="container">
            <div class="title-container"><?php the_field('video_title'); ?></div>
            <?php the_field('video'); ?>
        </div>
    </section>
    <section class="serwices-100">
        <div class="container">
            <div class="services" id="services">
                <?php
                    // параметры по умолчанию
                    $posts = get_posts( array(
                        'numberposts' => -1,
                        'category'    => 0,
                        'orderby'     => 'date',
                        'order'       => 'DESC',
                        'include'     => array(),
                        'exclude'     => array(),
                        'meta_key'    => '',
                        'meta_value'  =>'',
                        'post_type'   => 'services_content',
                        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                    ) );

                    foreach( $posts as $post ){
                        setup_postdata($post);
                        ?>
                            <div class="services_content">
                                <a href="<?php the_permalink(); ?>">
                                    <div>
                                        <div class="services_content-icons">
                                        <?php 
                                            $image = get_field('services');
                                            if( !empty( $image ) ): ?>
                                                <img class="am" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                            <?php endif; ?>
                                        </div>
                                        <p class="services_content-txtmax"><?php the_title(); ?></p>
                                        <div class="services_content-txtmin"><?php the_content(); ?></div>
                                    </div>
                                </a>
                            </div>
                        <?php
                    }
                    wp_reset_postdata(); // сброс 
                ?>
            <?php the_field('services'); ?>
            </div>
        </div>
    </section>
    <section class="slick_page" id="testimonials">
                <div>
                        <div class="slick_container" id="jssor_1">
                            <div class="slides" data-u="slides">
                            <?php 
                                $rows = get_field('book_sources');
                                if( $rows ) {
                                    foreach( $rows as $row ) {
                                        // $image = $row['slide_image'];?><div> <?php
                                        $image = $row['slide_image'];
                            ?> 
                            <?php 
                                $title = $row['book_src_title'];
                                if($title){ ?>
                            <p class="slick_txt-1"><?php echo  $title; 
                            ?>
                            </p>
                            <?php } ?>
                                <p class="slick_txt-2"><?php echo $row['book_src_description']; ?><p>
                            <?php 
                                if($image){ $picture = $image['sizes']['large']; ?> 
                                <img class="slide_img" src="<?php echo $picture ?>" alt="<?php echo $image['alt']; ?>">
                            <?php }?>
                    </div>
                            <?php } ?>
    
                            <?php }
                            ?>
                </div>
                            <!-- Bullet Navigator -->
                            <div data-u="navigator" class="jssorb05" data-autocenter="1">
                                <!-- bullet navigator item prototype -->
                                <div data-u="prototype" style="width:16px;height:16px;"></div>
                            </div>
                            <!-- Arrow Navigator -->
                            <span data-u="arrowleft" class="jssora22l" data-autocenter="2"></span>
                            <span data-u="arrowright" class="jssora22r" data-autocenter="2"></span>
                        </div>
                    </div>
                </div>
        </section>
        <section class="clients">
            <div class="container">
                <div class="clients">
                        <?php while(have_rows('clients')): the_row();
                            $image_c = get_sub_field('client_img');
                            $picture_c = $image_c['sizes']['thumbnail'];
                        ?> 
                    <div class="clients-block"><img class="client-img" src="<?php echo $picture_c ?>" alt="<?php echo $image_c['alt']; ?>"></div>
                        <?php endwhile;?>
                </div>
            </div>
        </section>
           <section class="container-100 contact_col">
           <div class="container">
                <div class="contact" id="contact">
                    <p><?php the_field('contact_title'); ?></p>
                    <div class="contact_form"><?php the_field('contact_text'); ?></div>
                    <div class="contact_form"><?php the_field('contact_form'); ?></div>
                </div>
           </div>
           </section>
        <script type="text/javascript">jssor_1_slider_init();</script>
<?php get_footer(); ?>