<footer id="footer" class="site-footer bg--primary" role="contentinfo">
    <div id="footer-area" class="footer-area-5">
        <div class="footer-main">
            <div class="container">
                <div class="row-grid-3">
                    <div class="_item_footer">
                        <?php echo get_field('footer_1', 'option')?>
                    </div>
                    <div class="_item_footer">
                        <?php echo get_field('thong_tin_them', 'option')?>
                        <?php social(); ?>
                    </div>
                    <div class="_item_footer">
                        <div class="title-footer">
                            <h4>THEO DÕI CHÚNG TÔI</h4>
                        </div>
                        <div class="_fanpage-custom position--relative bg--style"
                            style="background-image: url('https://tapchisacdep.org/wp-content/uploads/2021/05/Layer-51.png')">
                            <div class="position--absolute">
                                <div class="_top flex--center">
                                    <div class="_image"><img
                                            src="https://tapchisacdep.org/wp-content/uploads/2021/05/Layer-51-copy.png"
                                            alt="image"></div>
                                    <div class="_text font--Snell">Tạp chí sắc đẹp</div>
                                </div>
                                <div class="_main flex--center">
                                    <div class="_icon"><img
                                            src="https://tapchisacdep.org/wp-content/uploads/2021/05/facebook.png"
                                            alt="image"></div>
                                    <div class="_text">Thích trang</div>
                                </div>
                                <div class="_bottom">
                                    15k lượt thích
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php do_action( 'pho_after_footer' ); ?>
<!-- <div class="m-backtotop" aria-hidden="true">
	<div class="text">
		<span class=" iconmoon-house relative" id="btn-vibrate"></span><span><img src="<?php //echo THEME_URL_IMG ?>backtoptop.png"></span>
	</div>
</div> -->
<?php wp_footer(); ?>
</body>

</html>