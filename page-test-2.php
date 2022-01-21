<?php get_header(); ?>

<?php
/* Template Name: Test-2 */ 
?>
    <section class="container-100">
        <div class="container-txt">
        <div class="container">
            <h1><?php the_title(); ?></h1>
            <p><?php echo get_post_meta(get_the_ID(), 'descr', true) ?></p>
        </div>
        </div>
        <div class="test_img-1"><img class="img_test" src="<?php echo get_the_post_thumbnail_url(); ?>" /></div>
    </section>
<?php get_footer(); ?>