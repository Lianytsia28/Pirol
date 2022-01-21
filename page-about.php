<?php get_header(); ?>

<?php
/* Template Name: about */ 
?>

    <section class="container-100" id="about">
        <div class="container">
            <div class="title-container">
                <p class="title-txt"><?php the_title(); ?></p>
                <span><?php the_content(); ?></span>
                <p class="title_content-txt"><?php echo get_post_meta(get_the_ID(), 'descr', true) ?></p> 
                <img class="about_img-a" src="<?php echo get_template_directory_uri() . '/assets/img/about_a.png' ?>" alt="about">
            </div>        
        </div>
        <div class="about_container">
            <div class="container">
                <div class="about_left-content">
                    <p class="about_left-content-txt">Professional Skills</p>
                    <p class="about_left-content-txt-min">UI/UX Design    75%</p>
                    <div class="about_left-content-line">
                        <div class="about_left-content-line-col" style="width: 75%;"></div>
                    </div>
                    <p class="about_left-content-txt-min">Web Development    90%</p>
                    <div class="about_left-content-line">
                        <div class="about_left-content-line-col" style="width: 90%;"></div>
                    </div>
                    <p class="about_left-content-txt-min">Marketing    65%</p>
                    <div class="about_left-content-line">
                        <div class="about_left-content-line-col" style="width: 65%;"></div>
                    </div>
                </div>
            </div>
            <img class="about_img" src="<?php echo get_the_post_thumbnail_url(); ?>" />
        </div>
    </section>
<?php get_footer(); ?>