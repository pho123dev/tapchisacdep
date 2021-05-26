<?php get_header(); ?>
<?php wp_reset_query();?>
<?php header_page("Tạp chí sắc đẹp","Tác giả"); ?>
<?php $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));?>
<div class="main-page page-author">
    <div class="narrowcolumn se--block text-center">
        <div class="container">
            <?php title_section_arr(array('title' => 'Tìm hiểu về tôi','sub_title' => '')); ?>
            <div class="_avt-author">
                <?php echo get_avatar( get_the_author_meta( 'ID' )); ?>
            </div>
            <div class="_content-author">
                <h2>Tác giả: <?php echo $curauth->nickname; ?></h2>
                <div class="_info_tieu_su">
                    <p><?php echo $curauth->user_description; ?></p>
                </div>
            </div>
            <div class="_list_info_author">
                <?php title_section_arr(array('title' => 'Theo dõi tôi','sub_title' => '')); ?>
                <?php 
                 $author_id = get_the_author_meta('ID');
                 $zalo = get_field('zalo', 'user_'. $author_id );
                 $instagram = get_field('instagram', 'user_'. $author_id );
                    $twitter = get_the_author_meta( 'twitter', $post->post_author );
                    $facebook = get_the_author_meta( 'facebook', $post->post_author );
                    ?>
                <div class="social">
                    <ul>
                        <li><a href="<?php echo $facebook; ?>"><img src="<?php echo THEME_URL_IMG ?>Layer-45.png"
                                    alt="image"></a>
                        </li>
                        <li><a href=" <?php echo $instagram; ?>"><img src="<?php echo THEME_URL_IMG ?>instagram.png"
                                    alt="image"></a>
                        </li>
                        <li><a href=" <?php echo $zalo; ?>"><img src="<?php echo THEME_URL_IMG ?>Layer-4xxz5.png"
                                    alt="image"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="se-news-review se--block se-contaier">
        <div class="bg-news-review bg--primary se--block">
            <div class="container">
                <?php title_section_arr(array('title' => 'Các tin đã viết','sub_title' => '')); ?>
                <div class="custom-btn <?php class_slide(3); ?>">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <?php echo post(); ?>
                    <?php endwhile; else: ?>
                    <p><?php _e('No posts by this author.'); ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
</div>
<?php get_footer(); ?>