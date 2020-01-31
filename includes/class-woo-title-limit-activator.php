<?php

/**
 * Fired during plugin activation
 *
 * @link       https://www.dimitri-wolf.de
 * @since      1.0.0
 *
 * @package    Woo_Title_Limit
 * @subpackage Woo_Title_Limit/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      2.0.0
 * @package    Woo_Title_Limit
 * @subpackage Woo_Title_Limit/includes
 * @author     Dima W. <wtl@dimitri-wolf.de>
 */
class Woo_Title_Limit_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    2.0.0
	 */
	public static function activate() {
        add_option('wtl_count_shop', 100);
        add_option('wtl_count_category', 100);
        add_option('wtl_count_product', 100);
        add_option('wtl_count_home', 100);
        add_option('wtl_checkbox_etc_shop', 0);
        add_option('wtl_checkbox_etc_category', 0);
        add_option('wtl_checkbox_etc_product', 0);
        add_option('wtl_checkbox_widgets', 0);
        add_option('wtl_checkbox_wordcutter', 0);
	}

}
