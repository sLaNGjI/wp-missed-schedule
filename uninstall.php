<?php 

	/**
	 * WP Missed Schedule (The Original)
	 *
	 * @package     WordPress Plugin
	 * @subpackage  WP Missed Schedule
	 * @description Uninstall Module
	 * @development Code in Becoming!
	 * @license     GPLv3 or later
	 *
	 * @gnu         www.gnu.org/licenses/gpl-3.0.html
	 * @humans      humanstxt.org/Standard.html
	 * @indentation www.gnu.org/prep/standards/standards.html
	 *
	 * @github      github.com/sLaNGjI/wp-missed-schedule
	 * @project     slangjis.org/plugins/wp-missed-schedule
	 *
	 * @author      sLaNGjIs Team
	 * @website     slangjis.org
	 * @contact     slangjis.org/contact
	 * @donate      slangjis.org/donate
	 * @support     slangjis.org/support
	 * @translation slangjis.org/translations
	 * @blog        slangji.wordpress.com
	 *
	 * @build       2017-11-16
	 * @version     2014.1231.2017.11
	 * @requires    WordPress 2.7+
	 * @since       WordPress 2.7+
	 * @tested      WordPress 3.6+
	 * @updated     WordPress 4.9+
	 * @compatible  WordPress 5.0-alpha
	 */

	if ( ! defined(       'ABSPATH'       ) ) exit;

	if ( ! defined(        'WPINC'        ) ) exit;

	if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) exit;

	$hooks_names = array( 
			'missed_schedule',
			'missed_scheduled',
			'missed_scheduled_cron',
			'wp_missed_schedule',
			'wp_missed_scheduled',
			'wp_missed_schedule_cron',
			'wp_missed_scheduled_cron',
			'wp_schedule_missed',
			'wp_scheduled_missed',                                                                                        # Future ALPHA conding reserved
			'wp_schedule_missed_cron',
			'wp_scheduled_missed_cron',
			'schedule_missed',
			'scheduled_missed',
			'schedule_missed_cron',
			'scheduled_missed_cron'
	);

	$options_names = array( 
			'missed_schedule',
			'missed_scheduled',
			'schedule_missed',
			'scheduled_missed',
			'missed_schedule_cron',
			'missed_scheduled_cron',
			'schedule_missed_cron',
			'scheduled_missed_cron',
			'missed_schedule_options',
			'missed_scheduled_options',
			'schedule_missed_options',
			'scheduled_missed_options',
			'missed_schedule_cron_options',
			'missed_scheduled_cron_options',
			'schedule_missed_cron_options',
			'scheduled_missed_cron_options',
			'wp_missed_schedule',
			'wp_missed_scheduled',
			'wp_schedule_missed',
			'wp_scheduled_missed',                                                                                        # Future ALPHA conding reserved
			'wp_missed_schedule_cron',
			'wp_missed_scheduled_cron',
			'wp_schedule_missed_cron',
			'wp_scheduled_missed_cron',
			'wp_missed_schedule_options',
			'wp_missed_scheduled_options',
			'wp_schedule_missed_options',
			'wp_scheduled_missed_options',
			'wp_missed_schedule_cron_options',
			'wp_missed_scheduled_cron_options',
			'wp_schedule_missed_cron_options',
			'wp_scheduled_missed_cron_options'
	);

	$transients_names = array( 
			'wp_missed_schedule',
			'wp_missed_scheduled',
			'timeout_wp_missed_schedule',
			'timeout_wp_missed_scheduled',
			'wp_schedule_missed',
			'wp_scheduled_missed',                                                                                        # Future ALPHA conding reserved
			'timeout_wp_schedule_missed',
			'timeout_wp_scheduled_missed',                                                                                # Future ALPHA conding reserved
			'missed_schedule',
			'missed_scheduled',
			'timeout_missed_schedule',
			'timeout_missed_scheduled',
			'schedule_missed',
			'scheduled_missed',
			'timeout_schedule_missed',
			'timeout_scheduled_missed'
	);

	global $wp_version;

	if ( $wp_version >= 3.0 )
		{
			if ( ! is_multisite() )
				{
					foreach ( $hooks_names as $hook_name )
						{
							flush_rewrite_rules();
							wp_clear_scheduled_hook( $hook_name );
						}

					foreach ( $options_names as $option_name )
						{
							flush_rewrite_rules();
							delete_option( $option_name );
						}

					foreach ( $transients_names as $transient_name )
						{
							flush_rewrite_rules();
							delete_transient( $transient_name );
						}
				}

			if ( is_multisite() )
				{
					foreach ( $hooks_names as $hook_name )
						{
							flush_rewrite_rules();
							wp_clear_scheduled_hook( $hook_name );
						}

					foreach ( $options_names as $option_name )
						{
							flush_rewrite_rules();
							delete_site_option( $option_name );
						}

					foreach ( $transients_names as $transient_name )
						{
							flush_rewrite_rules();
							delete_site_transient( $transient_name );
						}

					global $wpdb;

					$blog_ids = $wpdb->get_col( "SELECT blog_id FROM $wpdb->blogs" );
					$original_blog_id = get_current_blog_id();

					foreach ( $blog_ids as $blog_id )
						{
							switch_to_blog( $blog_id );

							foreach ( $hooks_names as $hook_name )
								{
									flush_rewrite_rules();
									wp_clear_scheduled_hook( $hook_name );
								}

							foreach ( $options_names as $option_name )
								{
									flush_rewrite_rules();
									delete_option( $option_name );
									delete_site_option( $option_name );
								}

							foreach ( $transients_names as $transient_name )
								{
									flush_rewrite_rules();
									delete_transient( $transient_name );
									delete_site_transient( $transient_name );
								}
						}
					switch_to_blog( $original_blog_id );
				}
		}
?>
