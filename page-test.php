<?php get_header(); ?>

<?php
/* Template Name: Test */ 
?>
<!-- <?php echo get_post_meta(get_the_ID(), 'descr', true) ?> -->
    <section class="container">
        <div class="test">
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
                            <div class="test-1">
                                <a class="" href="<?php the_permalink(); ?>">
                                <figure>
                                <img class="img-fluid" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="free">
                                </figure>
                                <div class="test-txt-max">
                                <h2><?php the_title(); ?></h2>
                                <span><?php the_content(); ?></span>
                                </div>
                                </a>
                            </div>
                        <?php
                    }

                    wp_reset_postdata(); // сброс 
                ?>
        </div>           
    </section>
<?php get_footer(); ?>