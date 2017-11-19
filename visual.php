<?php 

/**
* 
*/
class Qvisual
{
	public static $icon = null;
	public static $category = null;
	public static $error = false;
	public static $params = [];

	// Set icon and category tab name
	public static function start($icon = '',$category = ''){
		self::$icon = $icon;
		self::$category = $category;
	}

	// Add new vc adons
	public static function add($opt = []){

		if (is_array($opt) && isset($opt['base'])) {
			$icon 		= !isset($opt['icon']) ? self::$icon : $opt['icon'];
			$category 	= !isset($opt['category']) ? self::$category : $opt['category'];
			$opt['icon'] = $icon;
			$opt['category'] = $category;

			self::$params[$opt['base']] = $opt;
			return $opt['base'];
		}else{
			self::$error = true;
		}
		
	}

	/**
	 * All fields excute in this function
	 *
	 */
	public static function end(){
		if (function_exists('add_action') && !self::$error) {
			add_action('vc_before_init',array('QVisual','initial'));
		}
	}
	/**
	 * vc_map
	 */
	public static function initial(){
		if (function_exists('vc_map')) {
			foreach (self::$params as $value) {
				vc_map($value);
			}
		}
	}

	public static function info(){
		$fields = [
				'textfield',
				'textarea',
				'textarea_html',
				'dropdown',
				'attach_image',
				'attach_images',
				'posttypes',
				'colorpicker',
				'exploded_textarea',
				'widgetised_sidebars',
				'textarea_raw_html',
				'vc_link',
				'checkbox',
				'loop',
				'css'
				];
		echo "<pre>";
			print_r($fields);
		echo "</pre>";
	}

	/**
	 * This is the Visual Composer textfield type
	 *
	 * @param      <type>  $base    The base perameter is shortcode name
	 * @param      array   $params  The parameters is fields info
	 */
	public static function textfield($base, $params = []){

		if (!self::$error && isset($params['param_name'])) {
			$params['type'] = 'textfield';
			self::$params[$base]['params'][] = $params;
		}else{
			self::$error = true;
		}
	}

	/**
	 * This is the Visual Composer textarea type
	 *
	 * @param      <type>  $base    The base perameter is shortcode name
	 * @param      array   $params  The parameters is fields info
	 */
	public static function textarea($base, $params = []){

		if (!self::$error && isset($params['param_name'])) {
			$params['type'] = 'textarea';
			self::$params[$base]['params'][] = $params;
		}else{
			self::$error = true;
		}
	}
	/**
	 * This is the Visual Composer textarea_html type
	 *
	 * @param      <type>  $base    The base perameter is shortcode name
	 * @param      array   $params  The parameters is fields info
	 */
	public static function textarea_html($base, $params = []){

		if (!self::$error && isset($params['param_name'])) {
			$params['type'] = 'textarea_html';
			self::$params[$base]['params'][] = $params;
		}else{
			self::$error = true;
		}
	}
	/**
	 * This is the Visual Composer dropdown type
	 *
	 * @param      <type>  $base    The base perameter is shortcode name
	 * @param      array   $params  The parameters is fields info
	 */
	public static function dropdown($base, $params = []){

		if (!self::$error && isset($params['param_name'])) {
			$params['type'] = 'dropdown';
			self::$params[$base]['params'][] = $params;
		}else{
			self::$error = true;
		}
	}
	
	/**
	 * This is the Visual Composer attach_image type
	 *
	 * @param      <type>  $base    The base perameter is shortcode name
	 * @param      array   $params  The parameters is fields info
	 */
	public static function attach_image($base, $params = []){

		if (!self::$error && isset($params['param_name'])) {
			$params['type'] = 'attach_image';
			self::$params[$base]['params'][] = $params;
		}else{
			self::$error = true;
		}
	}

	/**
	 * This is the Visual Composer attach_images type
	 *
	 * @param      <type>  $base    The base perameter is shortcode name
	 * @param      array   $params  The parameters is fields info
	 */
	public static function attach_images($base, $params = []){

		if (!self::$error && isset($params['param_name'])) {
			$params['type'] = 'attach_images';
			self::$params[$base]['params'][] = $params;
		}else{
			self::$error = true;
		}
	}
	/**
	 * This is the Visual Composer posttypes type
	 *
	 * @param      <type>  $base    The base perameter is shortcode name
	 * @param      array   $params  The parameters is fields info
	 */
	public static function posttypes($base, $params = []){

		if (!self::$error && isset($params['param_name'])) {
			$params['type'] = 'posttypes';
			self::$params[$base]['params'][] = $params;
		}else{
			self::$error = true;
		}
	}
	/**
	 * This is the Visual Composer colorpicker type
	 *
	 * @param      <type>  $base    The base perameter is shortcode name
	 * @param      array   $params  The parameters is fields info
	 */
	public static function colorpicker($base, $params = []){

		if (!self::$error && isset($params['param_name'])) {
			$params['type'] = 'colorpicker';
			self::$params[$base]['params'][] = $params;
		}else{
			self::$error = true;
		}
	}
	/**
	 * This is the Visual Composer exploded_textarea type
	 *
	 * @param      <type>  $base    The base perameter is shortcode name
	 * @param      array   $params  The parameters is fields info
	 */
	public static function exploded_textarea($base, $params = []){

		if (!self::$error && isset($params['param_name'])) {
			$params['type'] = 'exploded_textarea';
			self::$params[$base]['params'][] = $params;
		}else{
			self::$error = true;
		}
	}
	/**
	 * This is the Visual Composer widgetised_sidebars type
	 *
	 * @param      <type>  $base    The base perameter is shortcode name
	 * @param      array   $params  The parameters is fields info
	 */
	public static function widgetised_sidebars($base, $params = []){

		if (!self::$error && isset($params['param_name'])) {
			$params['type'] = 'widgetised_sidebars';
			self::$params[$base]['params'][] = $params;
		}else{
			self::$error = true;
		}
	}
	/**
	 * This is the Visual Composer textarea_raw_html type
	 *
	 * @param      <type>  $base    The base perameter is shortcode name
	 * @param      array   $params  The parameters is fields info
	 */
	public static function textarea_raw_html($base, $params = []){

		if (!self::$error && isset($params['param_name'])) {
			$params['type'] = 'textarea_raw_html';
			self::$params[$base]['params'][] = $params;
		}else{
			self::$error = true;
		}
	}
	/**
	 * This is the Visual Composer vc_link type
	 *
	 * @param      <type>  $base    The base perameter is shortcode name
	 * @param      array   $params  The parameters is fields info
	 */
	public static function vc_link($base, $params = []){

		if (!self::$error && isset($params['param_name'])) {
			$params['type'] = 'vc_link';
			self::$params[$base]['params'][] = $params;
		}else{
			self::$error = true;
		}
	}
	/**
	 * This is the Visual Composer checkbox type
	 *
	 * @param      <type>  $base    The base perameter is shortcode name
	 * @param      array   $params  The parameters is fields info
	 */
	public static function checkbox($base, $params = []){

		if (!self::$error && isset($params['param_name'])) {
			$params['type'] = 'checkbox';
			self::$params[$base]['params'][] = $params;
		}else{
			self::$error = true;
		}
	}
	/**
	 * This is the Visual Composer loop type
	 *
	 * @param      <type>  $base    The base perameter is shortcode name
	 * @param      array   $params  The parameters is fields info
	 */
	public static function loop($base, $params = []){

		if (!self::$error && isset($params['param_name'])) {
			$params['type'] = 'loop';
			self::$params[$base]['params'][] = $params;
		}else{
			self::$error = true;
		}
	}
	/**
	 * This is the Visual Composer css type
	 *
	 * @param      <type>  $base    The base perameter is shortcode name
	 * @param      array   $params  The parameters is fields info
	 */
	public static function css($base, $params = []){

		if (!self::$error && isset($params['param_name'])) {
			$params['type'] = 'css';
			self::$params[$base]['params'][] = $params;
		}else{
			self::$error = true;
		}
	}

}
