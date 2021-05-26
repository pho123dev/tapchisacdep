<?php get_header(); ?>
<section class="news-category">
  <div class="container">
    <div class="list_post row-grid-3">
      <?php echo do_shortcode( '[list-posts type="post" posts="" taxonomy="" terms="" offset="" select=""]' ); ?>
    </div>
  </div>
</section>
<?php get_footer(); ?>