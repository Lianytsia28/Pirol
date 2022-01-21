<?php get_header() ?>
<div>
    <div class="container">
        <div class="row">
            <div class="col col-9">
            <?php the_post(); ?>
                <h1><?php the_title() ?></h1>
                <h1><?php the_date('j F Y') ?></h1>
                <div><?php the_content() ?></div>
                <div><?php the_category() ?></div>
                <div><?php the_tags() ?></div>
            </div>
            <?php if (is_active_sidebar('sidebar-post-single')) ?>
            <div class="col col-3">
                <?php dynamic_sidebar('sidebar-post-single'); ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer() ?>