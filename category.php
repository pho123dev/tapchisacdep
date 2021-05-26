<?php get_header(); ?>
<?php header_page("Tạp chí sắc đẹp","Danh mục"); ?>
<section class="news-category se-news-grid se--block">
    <div class="container">
        <div class="_title-main">
            <?php if (have_posts()) : ?>
            <?php 
		$categories = get_the_category();
				title_section_arr(array(
										'title'	=> 	esc_html( $categories[0]->name ),
										'sub_title'	=> 	"",
				));
				 ?>
            <?php endif; ?>
        </div>
        <div class="list_post row-grid-2">
            <div class="_left">
                <div class="_main">
                    <?php 
                   if (have_posts()) :
                    while (have_posts()) : the_post();
                    post();
                endwhile; else :
                endif;
                    ?>
                </div>
                <div class="_bottom">
                    <?php
					pagination(array(
					'class_div' => 'ereaders-pagination',
					'class_ul' => 'page-numbers',
					'class_li' => 'revious page-numbers',
					'prev_text' => '<span aria-label="Prev"><div class="arrow-more _prev"></div></span>',
					'next_text' => '<span aria-label="Next"><div class="arrow-more _next"></div></span>'
				));
				?>
                </div>
            </div>
            <div class="_right">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>