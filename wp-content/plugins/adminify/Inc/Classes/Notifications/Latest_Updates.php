<?php

namespace WPAdminify\Inc\Classes\Notifications;

use WPAdminify\Inc\Classes\Notifications\Model\Notice;

if (!class_exists('Latest_Updates')) {
	/**
	 * Latest Pugin Updates Notice Class
	 *
	 * Jewel Theme <support@jeweltheme.com>
	 */
	class Latest_Updates extends Notice
	{

		/**
		 * Latest Updates Notice
		 *
		 * @return void
		 */
		public function __construct()
		{
			parent::__construct();
		}


		/**
		 * Notice Content
		 *
		 * @author Jewel Theme <support@jeweltheme.com>
		 */
		public function notice_content()
		{
			$jltwp_adminify_changelog_message = sprintf(
				__('%3$s %4$s %5$s %6$s %7$s %8$s <br> <strong>Check Changelogs for </strong> <a href="%1$s" target="__blank">%2$s</a>', 'adminify'),
				esc_url_raw('https://wpadminify.com/updates'),
				__('More Details', 'adminify'),
				/** Changelog Items
				 * Starts from: %3$s
				 */

				'<h3 class="adminify-update-head">' . WP_ADMINIFY . ' <span><small><em>v' . esc_html(WP_ADMINIFY_VER) . '</em></small>' . __(' has some updates..', 'adminify') . '</span></h3><br>', // %3$s
				__('<span class="dashicons dashicons-yes"></span> <span class="adminify-changes-list"> Security issue fixed </span><br>', 'adminify'),
				__('<span class="dashicons dashicons-yes"></span> <span class="adminify-changes-list"> SQuirrly SEO - Navigation error issue fixed </span><br>', 'adminify'),
				__('<span class="dashicons dashicons-yes"></span> <span class="adminify-changes-list"> Login Customizer - Back to Website link not working issue fixed </span><br>', 'adminify'),
				__('<span class="dashicons dashicons-yes"></span> <span class="adminify-changes-list"> Dashboard Widget updated </span><br>', 'adminify'),
				__('<span class="dashicons dashicons-yes"></span> <span class="adminify-changes-list"> Dashboard Welcome Widgets - close button updated and Kadence Theme supports given </span><br>', 'adminify')
			);

			printf(wp_kses_post($jltwp_adminify_changelog_message));
		}

		/**
		 * Intervals
		 *
		 * @author Jewel Theme <support@jeweltheme.com>
		 */
		public function intervals()
		{
			return array(0);
		}
	}
}
