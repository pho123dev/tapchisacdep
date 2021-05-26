<?php
class EXAM_asset {
	private static $initiated = false;
	public static function init() {
		if ( ! self::$initiated ) {
			self::init_hooks();
		}
	}
	private static function init_hooks() {
		self::$initiated = true;
		add_action( 'admin_enqueue_scripts', array( 'EXAM_asset', 'load_resources' ) );
		add_action( 'wp_footer', array( 'EXAM_asset', 'load_resources' ) );
	}
	public static function load_resources() {
			wp_register_style( 'exam.css', plugin_dir_url( __FILE__ ) . 'css/exam.css', array(), EXAM_VERSION );
			wp_enqueue_style( 'exam.css');
			wp_register_style( 'exam-responsive.css', plugin_dir_url( __FILE__ ) . 'css/exam-responsive.css', array(), EXAM_VERSION );
			wp_enqueue_style( 'exam-responsive.css');

			wp_register_script( 'exam.js', plugin_dir_url( __FILE__ ) . 'js/exam.js', array('jquery'), EXAM_VERSION );
			wp_enqueue_script( 'exam.js','defer', true ); 
	}

}