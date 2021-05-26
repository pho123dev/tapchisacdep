<?php
 /*
 *  GLOBAL VARIABLES
 */
 define('THEME_DIR', get_stylesheet_directory());
 define('THEME_URL', get_stylesheet_directory_uri());
 define('THEME_URL_IMG', THEME_URL.'/assets/images/');
 define('THEME_URL_JS', THEME_URL.'/assets/js/');
 define('THEME_URL_CSS', THEME_URL.'/assets/css/');
 define('THEME_URL_CSS_IMG', THEME_URL.'/assets/css/images/');
 define('THEME_URL_FONTS', THEME_URL.'/assets/fonts/');
 define('THEME_URL_FORM', THEME_URL.'/templates/form/');
 
/*
 *  INCLUDED FILES
 */

$file_includes = [
    'admin/functions.php',
    'includes/custom-post.php',
    'includes/theme-shortcode.php',
    'includes/theme-assets.php',             
    'includes/theme-setup.php',                       
    'includes/frontend.php',                 
    'includes/helpers.php',              
    'includes/optimize.php',           
    'includes/remove-url.php',
];

foreach ($file_includes as $file) {
    if (!$filePath = locate_template($file)) {
        trigger_error(sprintf(__('Missing included file'), $file), E_USER_ERROR);
    }
    require_once $filePath;
}
unset($file, $filePath);

if (is_user_logged_in()) {
    show_admin_bar(true);
}

function devvn_comment($comment, $args, $depth)    {
    $GLOBALS['comment'] = $comment; ?>
    <li <?php comment_class();?> id="li-comment-<?=get_comment_ID();?>">    
        <div id="comment-<?=get_comment_ID();?>" class="clearfix row-grid-2">
             <div class="comment-author vcard">
                <?php echo get_avatar($comment, $size='70', ''); ?>  
             </div><!-- end comment autho vcard-->
        
             <div class="commentBody">
                 <div class="comment-meta commentmetadata">
                  <?php printf(__('<p class="fn">%s</p>'), get_comment_author_link()); ?>	              
                 </div><!--end .comment-meta-->
                <?php if($comment->comment_approved == '0') : ?>
                    <em><?php echo 'Your coment is waiting for moderation.';?></em>
                    <?php endif; ?>
                <div class="noidungcomment">
                    <?php comment_text(); ?>
                </div>
                <div class="tools_comment">	                
                    <?php comment_reply_link(array_merge($args,array('respond_id' => 'formcmmaxweb','depth' => $depth, 'max_depth'=> $args['max_depth'])));?>		            
                      <?php edit_comment_link(__('Sửa'),' ',''); ?>
                      <?php //printf(__('<a href="#comment-%d" class="ngaythang">%s</a>'),get_comment_ID(),get_comment_date('d/m/Y'));?>
                </div>
                    
            </div><!--end #commentBody-->
        </div><!--end #comment-author-vcard-->
    </li>
<?php }
//validate comments
function comment_validation_init() {
    if(is_singular() && comments_open() ) { ?>
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
    <script type="text/javascript">
    jQuery(document).ready(function($) {
        $('#commentform').validate({		 
            onfocusout: function(element) {
              this.element(element);
            },
            rules: {
              author: {
                required: true,
                minlength: 2
              },
              email: {
                required: true,
                email: true
              },
              comment: {
                required: true,
              }
            },
            messages: {
              author: "Ô họ và tên là bắt buộc.",
              email: "Ô Email là bắt buộc.",
              comment: "Ô bình luận là bắt buộc."
            },
            errorElement: "div",
            errorPlacement: function(error, element) {
              element.after(error);
            }
        });
    });
    </script>
    <?php
    }
}
