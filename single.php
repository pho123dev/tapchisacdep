<?php get_header(); ?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<?php get_template_part( 'templates/page-header' ); ?>
<?php setPostViews(get_the_ID()); ?>
<div class="main-page se--block">
    <?php get_template_part( 'templates/content', 'single' ); ?>
</div>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>