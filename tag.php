<?php 
get_header(); ?>
<?php  get_template_part( 'templates/page-header' );  ?>
<div class="blog-medium">
    <div class="container">
      <div class="row">
        <div class="col-md-9 col-xs-12">
          <div class="list-post row news">
            <?php if (have_posts()) : ?>
              <?php while (have_posts()) : the_post(); ?>
                <?php post('col-md-12'); ?>
              <?php endwhile; else : ?>
              <p>Đang cập nhật</p>
            <?php endif; ?>
            <?php
            pagination(array(
              'class_div' => 'ereaders-pagination',
              'class_ul' => 'page-numbers',
              'class_li' => 'revious page-numbers',
              'prev_text' => '<span aria-label="Prev"><i class="fas fa-chevron-left"></i></span>',
              'next_text' => '<span aria-label="Next"><i class="fas fa-chevron-right"></i></span>'
            ));
            ?>
          </div>
        </div>
        <div class="col-md-3 col-xs-12">
          <?php get_sidebar(); ?>
        </div>
      </div>
    </div>
</div>
<?php get_footer(); ?>