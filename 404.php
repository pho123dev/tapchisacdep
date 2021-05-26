<?php
/**
 * template name: 404
 */
?>
<?php get_header(); ?>
<?php get_template_part( 'templates/page-header' ); ?>
<section id="page-content" class="mc--page" style="padding-bottom: 60px;">
	<div style="display: none;" class="breckcrum">
		<div class="container">
			<div class="row">
				<span><i class="fas fa-home"></i></span>
				<span><a href="<?php echo get_home_url(); ?>" style="color: #DAA402;">Home</a></span>
				<span><i class="fas fa-angle-double-right"></i></span>
				<span><?php the_title(); ?></span>
			</div>
		</div>
	</div>
	 <div class="container">
	     <div class="row">
	        <h3 style="text-align: center;">Trang bạn tìm kiếm không tồn tại ! Nhấn vào <a style="color: #caa966;" href="<?php echo get_home_url(); ?>">đây</a> để quay về trang chủ hoặc nhấn vào <a style="color: #caa966;" href="<?php echo get_home_url(); ?>">đây</a> để đọc tin tức mới nhất !</h3>
	     </div>
	 </div>
</section>
<?php
get_footer();
?>
