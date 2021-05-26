<?php
/*
* Author http://levantoan.com
*/
if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
	die ('Please do not load this page directly. Thanks!');

if ( post_password_required() ) { ?>
	<p class="nocomments">This post is password protected. Enter the password to view comments.</p>
<?php
	return;
}
?>
<div id="comments" class="comments-area">
	<?php if ( have_comments() ) : ?>
	<span class="title_comment">
	    <?php
			printf( _nx( '1 bình luận', '%1$s bình luận', get_comments_number(), '', 'devvn' ),
				number_format_i18n( get_comments_number() ));
		?>
	</span>
	<?php endif;?>
	<?php
		if ( ! comments_open() && get_comments_number() ) : ?>
		<p class="nocomments"><?php _e( 'Bình luận bị đóng.' , 'devvn' ); ?></p>
	<?php endif; ?>
	<?php if ( have_comments() ) : ?>
		<ol class="commentlist_mw">
			<?php wp_list_comments('type=comment&callback=devvn_comment'); ?>
		</ol><!-- .commentlist -->
		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :?>
		<nav id="comment-nav-below" class="navigation" role="navigation">
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; trước', '' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Tiếp &rarr;', '' ) ); ?></div>
		</nav>
		<?php endif;?>
	<?php endif; // have_comments() ?>
	
	<span class="title_comment">Bình luận của bạn</span>
	<?php if ( comments_open() ) : ?>
	<div id="formcmmaxweb">
	
	    <div class="cancel-comment-reply">
	    	<small><?php cancel_comment_reply_link(); ?></small>
	    </div>
	
	    <?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
	    <p><a href="<?php echo wp_login_url( get_permalink() ); ?>"><?php _e('Đăng nhập','devvn')?></a> để bình luận.</p>
	    <?php else : ?>
	
	<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
	
	    <?php if ( is_user_logged_in() ) : ?>
			<p class="nameuser"><?php _e('Bình luận với tên:','devvn')?> <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a></p>    
	    <?php endif; ?>
	     	<p>
	        	<textarea name="comment" id="comment" cols="50" rows="4" tabindex="4" placeholder="<?php _e('Bình luận','devvn')?>"></textarea>
	        </p>
	    <?php if(!is_user_logged_in()):?>    
			<div class="name-email">
		      <p>
		      	<input placeholder="<?php _e('Họ và tên','devvn')?>" type="text" name="author" id="author" value="<?php echo esc_attr($comment_author);?>" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
		      </p>
		      <p>
		        <input placeholder="<?php _e('Email','devvn')?>" type="text" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
		      </p>
			</div>
	    <?php endif;?>
	        <p><input name="submit" type="submit" id="submit" tabindex="5" value="<?php _e('Gửi','devvn')?>" />
	        <?php comment_id_fields(); ?>
	        </p>
	        <?php do_action('comment_form', $post->ID); ?>	
	    </form>	
	        <?php endif; // If registration required and not logged in ?>	       
	    </div>
	<?php endif; // if you delete this the sky will fall on your head ?>
</div><!-- #comments .comments-area -->