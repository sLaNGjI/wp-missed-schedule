<?php 
/*
 Plugin Name: WP Missed Schedule (The Original)
 Plugin URI:  http://slangjis.org/plugins/wp-missed-schedule/
 Description: The Original Plugin for WordPress WP Missed Schedule Fix only <strong>scheduled failed future posts</strong>, that have this bug, and republish correctly fixed 10 items each session, every 15 minutes, without wasting resources. The others will be solved on next sessions, until no longer exist. Work with virtual or real cron job on WordPress from 2.1+ to 4.8+ and 4.9-beta single or multisite install - The configuration is automatic and plugin nologo! - <a href="https://slangji.wordpress.com/wp-missed-schedule/">Stable Branche 2014</a> - Build 2017-05-31 - Reloaded 2017-10-05 - <a href="https://slangji.wordpress.com/wp-missed-schedule-beta/">Beta Branche 2017</a> - <a href="https://slangji.wordpress.com/wp-missed-schedule-alpha/">Alpha Branche 2018</a> - This plugin is no longer available on WordPress.org plugins repository for explicit author request, but only on <a href="https://github.com/sLaNGjI/wp-missed-schedule/">GitHub</a>. Miss link is for verify if exist this issue. Cron link requires <a href="https://wordpress.org/plugins/wp-crontrol/">WP Crontrol</a> activated and WP 2.7+ or later. Do not install into mu-plugins directory because need to run functions activation, deactivation, install, uninstall, to work properly!
 Version:     2014.1231.2017.5
 Author:      sLaNGjIs Team
 Author URI:  http://slangjis.org/plugins/
 License:     GPLv3 or later (license.txt)
 License URI: https://www.gnu.org/licenses/gpl-3.0.html
 Network:     true
 *
 GitHub Plugin URI: https://github.com/sLaNGjI/wp-missed-schedule/
 GitHub Branch:     master
 GitHub Languages:  https://github.com/sLaNGjI/wp-missed-schedule/
 Requires WP:       2.1
 Requires PHP:      5.2
 *
 * Requires at least 2.1
 * Tested up to      4.9
 * Contributors      sLaNGjIs Team
 * Donate link       http://slangjis.org/donate/
 * Indentation       GNU style coding standard
 * Indentation URI   https://www.gnu.org/prep/standards/standards.html
 * Humans            We are the humans behind
 * Humans URI        https://humanstxt.org/Standard.html
 *
 * KeyTag 787c178ab89b0f4378c345b2024af8e2a2aaf1fe
 *
 *  OLDER Branche Release 2013 Build 1231 - (branche)
 * STABLE Branche Release 2014 Build 1231 - (tags)
 *    DEV Branche 2015 and 2016 all Build - (deprecated)
 *   BETA Branche Release 2017 Build 1231 - (trunk)
 *  ALPHA Branche Release 2018 Build 1231 - (code in becoming)
 *
 * Approved                  @ 2007-08-18 (on wordpress.org repository)
 * Retired                   @ 2016-04-13 (on wordpress.org repository)
 * Active Downloads 275.000+ @ 2016-04-12 (on wordpress.org repository)
 * Active Installs   90.000+ @ 2016-04-12 (on wordpress.org repository)
 *
 * This plugin was undeveloped from wordpress.org on 2016-04-13 to insanity of this directory
 * for explicit author request and is now actively developed and maintained only on github.com
 *
 * USAGE
 *
 * No configuration necessary. Upload, activate, and done. For advanced features check out WPMS Pro.
 *
 * REQUIREMENTS
 *
 * To run this plugin on your WordPress host just needs a couple of things:
 *
 *   PHP version 5.2+ or   later (minimun)   PHP 5.4+ or   later (recommended)
 * MySQL version 5.0+ or greater (minumun) MySQL 5.5+ or greater (recommended) MySQL 5.6+ or greater (Best)
 *
 * We recommend Apache or Nginx as the most robust and featureful server for running WordPress,
 * but any server that supports PHP and MySQL or MariaDB will do.
 *
 * Use of PHP 5.5+ or 5.6+ or 7.0+ or 7.1+ is considered a custom user choice not recommended for now.
 *
 * Use of MariaDB is considered a custom user choice not recommended for now.
 *
 * Work also with PHP 4.0+ or later and MySQL 4.0+ or greater (depending of hosting features and WordPress version)
 *
 * CONFIGURATION
 *
 * The configuration of this plugin is automatic: settings is only to modify default values on WP 2.7+ or later.
 *
 * LICENSING - license.txt
 *
 * [WP Missed Schedule](https://github.com/sLaNGjI/wp-missed-schedule/)
 *
 * Fix Missed Schedule Failed Scheduled Future Posts Virtual or Real Cron Job.
 *
 * This plugin patched an important big problem unfixed since WordPress 2.5+ to date.
 *
 * This plugin work on all versions of WordPress 2.1+ to date.
 *
 * Copyright (C) 2007-2017 [sLaNGjIs Team](http://slangjis.org/) (email: <slangjis [at] googlegmail [dot] com>))
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the [GNU General Public License](https://wordpress.org/about/gpl/)
 * as published by the Free Software Foundation; either version 3
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * on an "AS IS", but WITHOUT ANY WARRANTY; without even the implied
 * warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 * See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, see [GNU General Public Licenses](https://www.gnu.org/licenses/),
 * or write to the Free Software Foundation, Inc., 51 Franklin Street,
 * Fifth Floor, Boston, MA 02110-1301, USA.
 *
 * DISCLAIMER
 *
 * This program is distributed "AS IS" in the hope that it will be useful, but:
 * without any warranty of function, without any warranty of merchantability,
 * without any fitness for a particular or specific purpose, without any type
 * of future assistance from your own author or the others authors.
 *
 * The license under which the WordPress software is released is the GPLv3 (or later) from the
 * Free Software Foundation. A copy of the license is included with every copy of WordPress.
 *
 * Part of this license outlines requirements for derivative works, such as plugins or themes.
 * Derivatives of WordPress code inherit the GPL license.
 *
 * There is some legal grey area regarding what is considered a derivative work, but we feel
 * strongly that plugins and themes are derivative work and thus inherit the GPL license.
 *
 * The license for this software can be found on [Free Software Foundation](https://www.gnu.org/licenses/gpl-3.0.html)
 * and as license.txt into this plugin package.
 *
 * The author of plugin is available at any time, to make changes, or corrections, to respect specifications.
 *
 * THERMS
 *
 * This uses (or it parts) code derived from:
 *
 * wp-header-footer-login-log.php by sLaNGjIs Team <slangjis [at] googlemail [dot] com>
 * Copyright (C) 2007-2009 [sLaNGjIs Team](http://slangjis.org/) (email: <slangjis [at] googlemail [dot] com>)
 *
 * according to the terms of the GNU General Public License version 3 (or later).
 *
 * This wp-header-footer-login-log.php uses (or it parts) code derived from:
 *
 * wp-login-log.php by sLaNGjIs Team <slangjis [at] googlemail [dot] com>
 * Copyright (C) 2009 [sLaNGjIs Team](http://slangjis.org/) (email: <slangjis [at] googlemail [dot] com>)
 *
 * wp-header-log.php by sLaNGjIs Team <slangjis [at] googlemail [dot] com>
 * Copyright (C) 2008 [sLaNGjIs Team](http://slangjis.org/) (email: <slangjis [at] googlemail [dot] com>)
 *
 * wp-footer-log.php by sLaNGjIs Team <slangjis [at] googlemail [dot] com>
 * Copyright (C) 2007 [sLaNGjIs Team](http://slangjis.org/) (email: <slangjis [at] googlemail [dot] com>)
 *
 * according to the terms of the GNU General Public License version 3 (or later).
 *
 * According to the Terms of the GNU General Public License version 3 (or later) part of Copyright
 * belongs to your own author and part belongs to their respective others authors:
 *
 * Copyright (C) 2007-2009 [sLaNGjIs Team](http://slangjis.org/) (email: <slangjis [at] googlemail [dot] com>)
 *
 * VIOLATIONS
 *
 * [Violations of the GNU Licenses](https://www.gnu.org/licenses/gpl-violation.en.html)
 * The author of plugin is available at any time, to make changes, or corrections, to respect specifications.
 *
 * GUIDELINES
 *
 * This software meet [Detailed Plugin Guidelines](https://developer.wordpress.org/plugins/wordpress-org/detailed-plugin-guidelines/)
 * paragraphs 1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17 quality requirements.
 * The author of plugin is available at any time, to make changes, or corrections, to respect specifications.
 *
 * CODING
 *
 * This software implement [GNU style](https://www.gnu.org/prep/standards/standards.html) coding standard indentation.
 * The author of plugin is available at any time, to make changes, or corrections, to respect specifications.
 *
 * VALIDATION
 *
 * This readme.txt rocks. Seriously. Flying colors. It meet the specifications according to
 * WordPress [Readme Validator](https://wordpress.org/plugins/about/validator/) directives.
 * The author of plugin is available at any time, to make changes, or corrections, to respect specifications.
 *
 * HUMANS - humans.txt
 *
 * We are the Humans behind this project [humanstxt.org](https://humanstxt.org/Standard.html)
 *
 * This software meet detailed humans rights belongs to your own author and to their respective others authors.
 * The author of plugin is available at any time, to make changes, or corrections, to respect specifications.
 *
 * THANKS
 *
 * [nicokaiser](https://wordpress.org/support/topic/plugin-uses-post_date_gmt-which-is-not-indexed)
 * Jack Hayhurst <jhayhurst [at] liquidweb [dot] com> MySQL Queries with Server Load Optimization and Index Suggestion.
 * [Arkadiusz Rzadkowolski](https://profiles.wordpress.org/fliespl/) HyperDB table_name from query broken in select query.
 * [milewis1](https://profiles.wordpress.org/milewis1/) WordPress blog's timezone implementation instead of the MySQL time.
 *
 * CHANGELOG
 *
 * [to-do list and changelog](https://github.com/sLaNGjI/wp-missed-schedule/changelog.txt)
 *
 * TODO
 *
 * Anti bad procedure: activate, deactivate, install, uninstall plugin routines by WordPress "dummies" or "genius" ...
 * Improved WordPress version identification mechanism if $wp_version is not present, hidden, or identificable ...
 * Cosmetic plugin Control Panel: only if it is trendy, but is not really necessary, because WPMS is automatic ...
 * More Social Posting Plugins Compatibility: NextScripts plugin for example ...
 */

	/**
	 * WP Missed Schedule (The Original)
	 *
	 * @package     WP Missed Schedule
	 * @subpackage  WordPress PlugIn
	 * @link        https://github.com/sLaNGjI/wp-missed-schedule/
	 * @description Fix only Missed Schedule Failed Scheduled Future Posts on Virtual or Real Cron Job.
	 * @noted       This plugin patched an important big problem unfixed since WordPress 2.5+ to date.
	 * @install     The configuration is Automatic and plugin NoLogo!
	 * @usage       No configuration necessary. Upload, activate, and done.
	 * @author      sLaNGjIs Team
	 * @status      STABLE
	 * @requires    2.1+
	 * @since       2.5+
	 * @tested      4.8+ (old 3.6+)
	 * @compatible  4.9-beta
	 * @branche     2014
	 * @revision    2017
	 * @update      5
	 * @release     2014.1231
	 * @version     2014.1231.2017.5
	 * @build       2017-05-31
	 * @reloaded    2017-10-05
	 * @approved    2007-08-18
	 * @license     GPLv3 or later
	 * @indentation GNU style coding standard
	 * @keybit      g46FsK338kT29FPANa8lC62b79H8651411574J4YQCb3eLCQM540z78BbFMtmFXj3
	 * @keysum      7D6B6E6B01008EC2CA6A5B17D5F6164E98E73CE0
	 * @keytag      787c178ab89b0f4378c345b2024af8e2a2aaf1fe
	 */

	defined( 'ABSPATH' ) or exit;

	defined( 'WPINC' ) or exit;

	if ( ! function_exists( 'add_action' ) )
		{
			header( 'HTTP/0.9 403 Forbidden' );
			header( 'HTTP/1.0 403 Forbidden' );
			header( 'HTTP/1.1 403 Forbidden' );
			header( 'HTTP/1.2 403 Forbidden' );
			header( 'HTTP/1.3 403 Forbidden' );
			header( 'Status: 403 Forbidden'  );
			header( 'Connection: Close'      );

			exit;
		}

	global $wp_version;

	if ( $wp_version < 2.1 )
		{
			wp_die( __( 'This plugin requires WordPress 2.1+ or greater: Activation Stopped!' ) );
		}
	else
		{
	if ( version_compare( '5.2.0', PHP_VERSION, '>=' ) )
		{
			wp_die( __( 'You can no longer run this plugin in PHP version prior to 5.2+ contact your hosting provider for system upgrade!<br />
			<br />Please note that to continue using a PHP version below 5.2+ need to install the 2013.1231 version of this plugin.' ) );
		}
	else
		{
	if ( defined( 'WPMSP_INTERVAL' ) or defined( 'WPMSP_POST_LIMIT' ) or defined( 'UPDATE_INTERVAL' ) or defined( 'UPDATE_POSTS' ) )
		{
			wp_die( __( '1 - This WordPress installation is infected with a malware variant of WP Missed Schedule: Activation Stopped!<br />
			<br />Uninstall all not original or forked versions of this plugin and retry: read more on the <a href="http://slangjis.org/unauthorized-code-use-and-copy-of-slangjis-plugins-or-themes/">cause of infection</a><br />
			<br /><br /><strong>This is because you used, or have used, an unpublished version of this plugin, and have another similar plugin installed and activated, or you have installed an unauthorized forked version, or have installed a copy of this plugin that does not respect the trademark, and assigning the license to the authors who created it.</strong><br />
			<br /><br />It may also happen that you did not perform the correct uninstallation procedure of the previous version, and the correct installation of the latest current version, or have another similar plugin activated.<br />
			<br />The correct procedure to use is only this:<br />
			<br />- Deactivate all similar plugins that have previously installed and activated.<br />
			<br />- Decide if you need to uninstall all similar plugins to resolve the issue, if this message persists.<br />
			<br />- Clean manually the options table if the similar plugins not cleaning your options data automatically.<br />
			<br />- Deactivate the old version, or the version to be need to update, of plugin WP Missed Schedule.<br />
			<br />- Flushing cache, and wait for the necessary time.<br />
			<br />- Install, or copy manually via FTP, the new version of plugin WP Missed Schedule.<br />
			<br />- Activate the new version of plugin WP Missed Schedule.<br />
			<br />Overwrite an old version of this plugin directly via FTP, or directly overwrite a version to upgrade, it may also be the cause of this type of error.<br />
			<br /><u>Remember that this plugin does not work properly if installed in the mu-plugin directory!</u>' ) );
		}
	else
		{
//	if ( get_option( 'wp_scheduled_missed' ) )
//		{
//			wp_die( __( '2 - This WordPress installation is infected with a malware variant of WP Missed Schedule: Activation Stopped!<br />
//			<br />Uninstall all not original or forked versions of this plugin and retry: read more on the <a href="http://slangjis.org/unauthorized-code-use-and-copy-of-slangjis-plugins-or-themes/">cause of infection</a><br />
//			<br /><br /><strong>This is because you used, or have used, an unpublished version of this plugin, and have another similar plugin installed and activated, or you have installed an unauthorized forked version, or have installed a copy of this plugin that does not respect the trademark, and assigning the license to the authors who created it.</strong><br />
//			<br /><br />It may also happen that you did not perform the correct uninstallation procedure of the previous version, and the correct installation of the latest current version, or have another similar plugin activated.<br />
//			<br />The correct procedure to use is only this:<br />
//			<br />- Deactivate all similar plugins that have previously installed and activated.<br />
//			<br />- Decide if you need to uninstall all similar plugins to resolve the issue, if this message persists.<br />
//			<br />- Clean manually the options table if the similar plugins not cleaning your options data automatically.<br />
//			<br />- Deactivate the old version, or the version to be need to update, of plugin WP Missed Schedule.<br />
//			<br />- Flushing cache, and wait for the necessary time.<br />
//			<br />- Install, or copy manually via FTP, the new version of plugin WP Missed Schedule.<br />
//			<br />- Activate the new version of plugin WP Missed Schedule.<br />
//			<br />Overwrite an old version of this plugin directly via FTP, or directly overwrite a version to upgrade, it may also be the cause of this type of error.<br />
//			<br /><u>Remember that this plugin does not work properly if installed in the mu-plugin directory!</u>' ) );
//		}
//	else
//		{
	if ( get_option( 'wp_scheduled_missed_time' ) )
		{
			wp_die( __( '3 - This WordPress installation is infected with a malware variant of WP Missed Schedule: Activation Stopped!<br />
			<br />Uninstall all not original or forked versions of this plugin and retry: read more on the <a href="http://slangjis.org/unauthorized-code-use-and-copy-of-slangjis-plugins-or-themes/">cause of infection</a><br />
			<br /><br /><strong>This is because you used, or have used, an unpublished version of this plugin, and have another similar plugin installed and activated, or you have installed an unauthorized forked version, or have installed a copy of this plugin that does not respect the trademark, and assigning the license to the authors who created it.</strong><br />
			<br /><br />It may also happen that you did not perform the correct uninstallation procedure of the previous version, and the correct installation of the latest current version, or have another similar plugin activated.<br />
			<br />The correct procedure to use is only this:<br />
			<br />- Deactivate all similar plugins that have previously installed and activated.<br />
			<br />- Decide if you need to uninstall all similar plugins to resolve the issue, if this message persists.<br />
			<br />- Clean manually the options table if the similar plugins not cleaning your options data automatically.<br />
			<br />- Deactivate the old version, or the version to be need to update, of plugin WP Missed Schedule.<br />
			<br />- Flushing cache, and wait for the necessary time.<br />
			<br />- Install, or copy manually via FTP, the new version of plugin WP Missed Schedule.<br />
			<br />- Activate the new version of plugin WP Missed Schedule.<br />
			<br />Overwrite an old version of this plugin directly via FTP, or directly overwrite a version to upgrade, it may also be the cause of this type of error.<br />
			<br /><u>Remember that this plugin does not work properly if installed in the mu-plugin directory!</u>' ) );
		}
	else
		{
	if ( get_transient( 'wp_scheduled_missed' ) )
		{
			wp_die( __( '4 - This WordPress installation is infected with a malware variant of WP Missed Schedule: Activation Stopped!<br />
			<br />Uninstall all not original or forked versions of this plugin and retry: read more on the <a href="http://slangjis.org/unauthorized-code-use-and-copy-of-slangjis-plugins-or-themes/">cause of infection</a><br />
			<br /><br /><strong>This is because you used, or have used, an unpublished version of this plugin, and have another similar plugin installed and activated, or you have installed an unauthorized forked version, or have installed a copy of this plugin that does not respect the trademark, and assigning the license to the authors who created it.</strong><br />
			<br /><br />It may also happen that you did not perform the correct uninstallation procedure of the previous version, and the correct installation of the latest current version, or have another similar plugin activated.<br />
			<br />The correct procedure to use is only this:<br />
			<br />- Deactivate all similar plugins that have previously installed and activated.<br />
			<br />- Decide if you need to uninstall all similar plugins to resolve the issue, if this message persists.<br />
			<br />- Clean manually the options table if the similar plugins not cleaning your options data automatically.<br />
			<br />- Deactivate the old version, or the version to be need to update, of plugin WP Missed Schedule.<br />
			<br />- Flushing cache, and wait for the necessary time.<br />
			<br />- Install, or copy manually via FTP, the new version of plugin WP Missed Schedule.<br />
			<br />- Activate the new version of plugin WP Missed Schedule.<br />
			<br />Overwrite an old version of this plugin directly via FTP, or directly overwrite a version to upgrade, it may also be the cause of this type of error.<br />
			<br /><u>Remember that this plugin does not work properly if installed in the mu-plugin directory!</u>' ) );
		}
	else
		{
	if ( get_transient( 'wp_scheduled_missed_time' ) )
		{
			wp_die( __( '5 - This WordPress installation is infected with a malware variant of WP Missed Schedule: Activation Stopped!<br />
			<br />Uninstall all not original or forked versions of this plugin and retry: read more on the <a href="http://slangjis.org/unauthorized-code-use-and-copy-of-slangjis-plugins-or-themes/">cause of infection</a><br />
			<br /><br /><strong>This is because you used, or have used, an unpublished version of this plugin, and have another similar plugin installed and activated, or you have installed an unauthorized forked version, or have installed a copy of this plugin that does not respect the trademark, and assigning the license to the authors who created it.</strong><br />
			<br /><br />It may also happen that you did not perform the correct uninstallation procedure of the previous version, and the correct installation of the latest current version, or have another similar plugin activated.<br />
			<br />The correct procedure to use is only this:<br />
			<br />- Deactivate all similar plugins that have previously installed and activated.<br />
			<br />- Decide if you need to uninstall all similar plugins to resolve the issue, if this message persists.<br />
			<br />- Clean manually the options table if the similar plugins not cleaning your options data automatically.<br />
			<br />- Deactivate the old version, or the version to be need to update, of plugin WP Missed Schedule.<br />
			<br />- Flushing cache, and wait for the necessary time.<br />
			<br />- Install, or copy manually via FTP, the new version of plugin WP Missed Schedule.<br />
			<br />- Activate the new version of plugin WP Missed Schedule.<br />
			<br />Overwrite an old version of this plugin directly via FTP, or directly overwrite a version to upgrade, it may also be the cause of this type of error.<br />
			<br /><u>Remember that this plugin does not work properly if installed in the mu-plugin directory!</u>' ) );
		}
	else
		{
	if ( false === ( $wp_scheduled_missed = ! get_transient( 'wp_scheduled_missed' ) ) or false === ( $wp_scheduled_missed_time = ! get_transient( 'wp_scheduled_missed_time' ) ) )
		{
			wp_die( __( 'This WordPress installation is infected with a malware variant of WP Missed Schedule: Activation Stopped!<br />
			<br />Uninstall all not original or forked versions of this plugin and retry: read more on the <a href="http://slangjis.org/unauthorized-code-use-and-copy-of-slangjis-plugins-or-themes/">cause of infection</a><br />
			<br /><br /><strong>This is because you used, or have used, an unpublished version of this plugin, and have another similar plugin installed and activated, or you have installed an unauthorized forked version, or have installed a copy of this plugin that does not respect the trademark, and assigning the license to the authors who created it.</strong><br />
			<br /><br />It may also happen that you did not perform the correct uninstallation procedure of the previous version, and the correct installation of the latest current version, or have another similar plugin activated.<br />
			<br />The correct procedure to use is only this:<br />
			<br />- Deactivate all similar plugins that have previously installed and activated.<br />
			<br />- Decide if you need to uninstall all similar plugins to resolve the issue, if this message persists.<br />
			<br />- Clean manually the options table if the similar plugins not cleaning your options data automatically.<br />
			<br />- Deactivate the old version, or the version to be need to update, of plugin WP Missed Schedule.<br />
			<br />- Flushing cache, and wait for the necessary time.<br />
			<br />- Install, or copy manually via FTP, the new version of plugin WP Missed Schedule.<br />
			<br />- Activate the new version of plugin WP Missed Schedule.<br />
			<br />Overwrite an old version of this plugin directly via FTP, or directly overwrite a version to upgrade, it may also be the cause of this type of error.<br />
			<br /><u>Remember that this plugin does not work properly if installed in the mu-plugin directory!</u>' ) );
		}
	else
		{
	if ( get_option( 'byrev_fixshedule_next_verify' ) )
		{
			wp_die( __( 'Before use WP Missed Schedule deactivate the plugin <strong>ByREV Fix Missed Shedule Plugin</strong>: Activation Stopped!<br />
			<br /><u>Only one instance of the plugin with the same functionality or task is allowed and recommended to avoid conflicts.</u><br />
			<br /><br /><i>If this message persists, the plugin has not been properly deactivated, or the uninstall procedure has not been successfully performed, and conflicting options are still present in this WordPress installation.</i><br />
			<br /><br />The correct procedure to use is only this:<br />
			<br />- Deactivate the plugin that have previously installed and activated, and try again.<br />
			<br />- Decide if you need to uninstall the plugin to resolve the issue, if this message persists, and try again.<br />
			<br />- Clean manually the options table if the plugin not cleaning your options data automatically.<br />
			<br />- Delete the plugin directly via FTP, if you have manually cleaned your options data, but this message persists.<br />
			<br />- Flushing cache, wait for the necessary time, and try again.<br />
			<br />Deleting it directly via FTP without performing properly deactivation, may also be the cause of this type of error.<br />
			<br />Another cause is the low programming quality of the plugin, which does not erase its options when deactivated.<br />
			<br /><center><strong>ByREV Fix Missed Shedule NOT erase your options data when deactivated or uninstalled!</strong></center>' ) );
		}
	else
		{
	if ( function_exists( 'fix_missed_shedule' ) )
		{
			function wpms_psd_fms()
				{
					deactivate_plugins( plugin_basename( 'missed-schedule-wordpress-plugin-fix/byrev_fix_missed_schedule.php' ) );
				}
			add_action( 'admin_init', 'wpms_psd_fms', 0 );
			
			function wpms_ant_fms()
				{
?>
<div class="notice notice-warning is-dismissible">
<p>Only one instance of the plugin with the same functionality or task is allowed and recommended to avoid conflicts: <strong>Plugin ByREV Fix Missed Shedule NOT activated</strong>.</p>
</div>
<div class="updated notice is-dismissible">
<p>Plugin <strong>deactivated</strong>.</p>
</div>
<?php 
				}
			add_action( 'admin_notices', 'wpms_ant_fms' );
		}
	else
		{
	if ( get_option( 'scheduled_post_guardian_next_run' ) )
		{
			wp_die( __( 'Before use WP Missed Schedule deactivate the plugin <strong>Scheduled Post Guardian</strong>: Activation Stopped!<br />
			<br /><u>Only one instance of the plugin with the same functionality or task is allowed and recommended to avoid conflicts.</u><br />
			<br /><br /><i>If this message persists, the plugin has not been properly deactivated, or the uninstall procedure has not been successfully performed, and conflicting options are still present in this WordPress installation.</i><br />
			<br /><br />The correct procedure to use is only this:<br />
			<br />- Deactivate the plugin that have previously installed and activated, and try again.<br />
			<br />- Decide if you need to uninstall the plugin to resolve the issue, if this message persists, and try again.<br />
			<br />- Clean manually the options table if the plugin not cleaning your options data automatically.<br />
			<br />- Delete the plugin directly via FTP, if you have manually cleaned your options data, but this message persists.<br />
			<br />- Flushing cache, wait for the necessary time, and try again.<br />
			<br />Deleting it directly via FTP without performing properly deactivation, may also be the cause of this type of error.<br />
			<br />Another cause is the low programming quality of the plugin, which does not erase its options when deactivated.<br />
			<br /><center><strong>Scheduled Post Guardian NOT erase your options data when deactivated or uninstalled!</strong></center>' ) );
		}
	else
		{
	if ( get_option( 'wpt_scheduled_check' ) )
		{
			wp_die( __( 'Before use WP Missed Schedule deactivate the plugin <strong>WP TimeZone</strong>: Activation Stopped!<br />
			<br /><u>Only one instance of the plugin with the same functionality or task is allowed and recommended to avoid conflicts.</u><br />
			<br /><br /><i>If this message persists, the plugin has not been properly deactivated, or the uninstall procedure has not been successfully performed, and conflicting options are still present in this WordPress installation.</i><br />
			<br /><br />The correct procedure to use is only this:<br />
			<br />- Deactivate the plugin that have previously installed and activated, and try again.<br />
			<br />- Decide if you need to uninstall the plugin to resolve the issue, if this message persists, and try again.<br />
			<br />- Clean manually the options table if the plugin not cleaning your options data automatically.<br />
			<br />- Delete the plugin directly via FTP, if you have manually cleaned your options data, but this message persists.<br />
			<br />- Flushing cache, wait for the necessary time, and try again.<br />
			<br />Deleting it directly via FTP without performing properly deactivation, may also be the cause of this type of error.<br />
			<br />Another cause is the low programming quality of the plugin, which does not erase its options when deactivated.<br />
			<br /><center><strong>WP TimeZone NOT erase your options data when deactivated or uninstalled!</strong></center>' ) );
		}
	else
		{
	if ( function_exists( 'missed_schedule' ) )
		{
			wp_die( __( 'Before use WP Missed Schedule deactivate the plugin <strong>MY Missed Schedule</strong>: Activation Stopped!<br />
			<br /><u>Only one instance of the plugin with the same functionality or task is allowed and recommended to avoid conflicts.</u><br />
			<br /><br /><i>If this message persists, the plugin has not been properly deactivated, or the uninstall procedure has not been successfully performed, and conflicting options are still present in this WordPress installation.</i><br />
			<br /><br />The correct procedure to use is only this:<br />
			<br />- Deactivate the plugin that have previously installed and activated, and try again.<br />
			<br />- Decide if you need to uninstall the plugin to resolve the issue, if this message persists, and try again.<br />
			<br />- Clean manually the options table if the plugin not cleaning your options data automatically.<br />
			<br />- Delete the plugin directly via FTP, if you have manually cleaned your options data, but this message persists.<br />
			<br />- Flushing cache, wait for the necessary time, and try again.<br />
			<br />Deleting it directly via FTP without performing properly deactivation, may also be the cause of this type of error.<br />
			<br />Another cause is the low programming quality of the plugin, which does not erase its options when deactivated.<br />
			<br /><center><strong>WARNING: MY Missed Schedule NOT erase your options data when uninstalled!</strong></center>' ) );
		}
	else
		{
	if ( wp_get_schedule( 'missed_schedule_cron' ) )
		{
			function wpms_psd_mms()
				{
					deactivate_plugins( plugin_basename( 'my-missed-schedule/my-missed-schedule.php' ) );
				}
			add_action( 'admin_init', 'wpms_psd_mms', 0 );

			function wpms_ant_mms()
				{
?>
<div class="notice notice-warning is-dismissible">
<p>Only one instance of the plugin with the same functionality or task is allowed and recommended to avoid conflicts: <strong>Plugin My Missed Schedule NOT activated</strong>.</p>
</div>
<div class="updated notice is-dismissible">
<p>Plugin <strong>deactivated</strong>.</p>
</div>
<?php 
				}
			add_action( 'admin_notices', 'wpms_ant_mms' );
		}
	else
		{
	if ( class_exists( 'SimpulMissedSchedule' ) )
		{
			wp_die( __( 'Before use WP Missed Schedule deactivate the plugin <strong>Simpul Missed Schedule by Esotech</strong>: Activation Stopped!<br />
			<br /><u>Only one instance of the plugin with the same functionality or task is allowed and recommended to avoid conflicts.</u><br />
			<br /><br /><i>If this message persists, the plugin has not been properly deactivated, or the uninstall procedure has not been successfully performed, and conflicting options are still present in this WordPress installation.</i><br />
			<br /><br />The correct procedure to use is only this:<br />
			<br />- Deactivate the plugin that have previously installed and activated, and try again.<br />
			<br />- Decide if you need to uninstall the plugin to resolve the issue, if this message persists, and try again.<br />
			<br />- Clean manually the options table if the plugin not cleaning your options data automatically.<br />
			<br />- Delete the plugin directly via FTP, if you have manually cleaned your options data, but this message persists.<br />
			<br />- Flushing cache, wait for the necessary time, and try again.<br />
			<br />Deleting it directly via FTP without performing properly deactivation, may also be the cause of this type of error.<br />
			<br />Another cause is the low programming quality of the plugin, which does not erase its options when deactivated.<br />
			<br /><center><strong>Simpul Missed Schedule NOT erase your options data when uninstalled!</strong></center>' ) );
		}
	else
		{
	if ( function_exists( 'pubScheduledPost' ) )
		{
			wp_die( __( 'Before use WP Missed Schedule deactivate the plugin <strong>Scheduled Post Trigger</strong>: Activation Stopped!<br />
			<br /><u>Only one instance of the plugin with the same functionality or task is allowed and recommended to avoid conflicts.</u><br />
			<br /><br /><i>If this message persists, the plugin has not been properly deactivated, or the uninstall procedure has not been successfully performed, and conflicting options are still present in this WordPress installation.</i><br />
			<br /><br />The correct procedure to use is only this:<br />
			<br />- Deactivate the plugin that have previously installed and activated, and try again.<br />
			<br />- Decide if you need to uninstall the plugin to resolve the issue, if this message persists, and try again.<br />
			<br />- Clean manually the options table if the plugin not cleaning your options data automatically.<br />
			<br />- Delete the plugin directly via FTP, if you have manually cleaned your options data, but this message persists.<br />
			<br />- Flushing cache, wait for the necessary time, and try again.<br />
			<br />Deleting it directly via FTP without performing properly deactivation, may also be the cause of this type of error.<br />
			<br />Another cause is the low programming quality of the plugin, which does not erase its options when deactivated.<br />
			<br /><center><strong>Scheduled Post Trigger NOT erase your options data when deactivated or uninstalled!</strong></center>' ) );
		}
	else
		{
	function wpms_activation()
		{
			if ( ! current_user_can( 'activate_plugins' ) )
				return;

			global $wp_version;

			if ( $wp_version >= 2.1 )
				{
					flush_rewrite_rules();
					delete_option( 'byrev_fixshedule_next_verify' );
					delete_option( 'scheduled_post_guardian_next_run' );
					//delete_option( 'simpul_missed_schedule' );
					delete_option( 'wpt_scheduled_check' );
					delete_option( 'wp_missed_schedule' );
					delete_option( 'wp_missed_scheduled' );
					delete_option( 'wp_schedule_missed' );
					delete_option( 'wp_scheduled_missed' );                                                               # Future ALPHA conding reserved
					delete_option( 'missed_schedule' );
					delete_option( 'missed_scheduled' );
					delete_option( 'schedule_missed' );
					delete_option( 'scheduled_missed' );
				}

			if ( $wp_version >= 3.0 )
				{
					flush_rewrite_rules();
					delete_site_option( 'byrev_fixshedule_next_verify' );
					delete_site_option( 'scheduled_post_guardian_next_run' );
					//delete_site_option( 'simpul_missed_schedule' );
					delete_site_option( 'wpt_scheduled_check' );
					delete_site_option( 'wp_missed_schedule' );
					delete_site_option( 'wp_missed_scheduled' );
					delete_site_option( 'wp_schedule_missed' );
					delete_site_option( 'wp_scheduled_missed' );                                                          # Future ALPHA conding reserved
					delete_site_option( 'missed_schedule' );
					delete_site_option( 'missed_scheduled' );
					delete_site_option( 'schedule_missed' );
					delete_site_option( 'scheduled_missed' );
				}

			if ( $wp_version >= 2.8 )
				{
					flush_rewrite_rules();
					delete_transient( 'wp_missed_schedule' );
					delete_transient( 'wp_missed_scheduled' );
					delete_transient( 'timeout_wp_missed_schedule' );
					delete_transient( 'timeout_wp_missed_scheduled' );
					delete_transient( 'wp_schedule_missed' );
					delete_transient( 'wp_scheduled_missed' );                                                            # Future ALPHA conding reserved
					delete_transient( 'timeout_wp_schedule_missed' );
					delete_transient( 'timeout_wp_scheduled_missed' );                                                    # Future ALPHA conding reserved
					delete_transient( 'missed_schedule' );
					delete_transient( 'missed_scheduled' );
					delete_transient( 'timeout_missed_schedule' );
					delete_transient( 'timeout_missed_scheduled' );
					delete_transient( 'schedule_missed' );
					delete_transient( 'scheduled_missed' );
					delete_transient( 'timeout_schedule_missed' );
					delete_transient( 'timeout_scheduled_missed' );
				}

			if ( $wp_version >= 3.0 )
				{
					flush_rewrite_rules();
					delete_site_transient( 'wp_missed_schedule' );
					delete_site_transient( 'wp_missed_scheduled' );
					delete_site_transient( 'timeout_wp_missed_schedule' );
					delete_site_transient( 'timeout_wp_missed_scheduled' );
					delete_site_transient( 'wp_schedule_missed' );
					delete_site_transient( 'wp_scheduled_missed' );                                                       # Future ALPHA conding reserved
					delete_site_transient( 'timeout_wp_schedule_missed' );
					delete_site_transient( 'timeout_wp_scheduled_missed' );                                               # Future ALPHA conding reserved
					delete_site_transient( 'missed_schedule' );
					delete_site_transient( 'missed_scheduled' );
					delete_site_transient( 'timeout_missed_schedule' );
					delete_site_transient( 'timeout_missed_scheduled' );
					delete_site_transient( 'schedule_missed' );
					delete_site_transient( 'scheduled_missed' );
					delete_site_transient( 'timeout_schedule_missed' );
					delete_site_transient( 'timeout_scheduled_missed' );
				}

			flush_rewrite_rules();
			wp_clear_scheduled_hook( 'missed_schedule' );
			wp_clear_scheduled_hook( 'missed_scheduled' );
			wp_clear_scheduled_hook( 'missed_schedule_cron' );
			wp_clear_scheduled_hook( 'missed_scheduled_cron' );
			wp_clear_scheduled_hook( 'wp_missed_schedule' );
			wp_clear_scheduled_hook( 'wp_missed_scheduled' );
			wp_clear_scheduled_hook( 'wp_missed_schedule_cron' );
			wp_clear_scheduled_hook( 'wp_missed_scheduled_cron' );
			wp_clear_scheduled_hook( 'wp_schedule_missed' );
			wp_clear_scheduled_hook( 'wp_scheduled_missed' );
			wp_clear_scheduled_hook( 'wp_schedule_missed_cron' );
			wp_clear_scheduled_hook( 'wp_scheduled_missed_cron' );
			wp_clear_scheduled_hook( 'schedule_missed' );
			wp_clear_scheduled_hook( 'scheduled_missed' );
			wp_clear_scheduled_hook( 'schedule_missed_cron' );
			wp_clear_scheduled_hook( 'scheduled_missed_cron' );
		}
	register_activation_hook( __FILE__, 'wpms_activation', 0 );

	function wpms_1st()
		{
			if ( ! current_user_can( 'activate_plugins' ) )
				return;

			$wp_path_to_this_file = preg_replace( '/(.*)plugins\/(.*)$/', WP_PLUGIN_DIR . "/$2", __FILE__ );
			$this_plugin          = plugin_basename( trim( $wp_path_to_this_file ) );
			$active_plugins       = get_option( 'active_plugins' );
			$this_plugin_key      = array_search( $this_plugin, $active_plugins );

			if ( $this_plugin_key )
				{
					array_splice( $active_plugins, $this_plugin_key, 1 );
					array_unshift( $active_plugins, $this_plugin );
					update_option( 'active_plugins', $active_plugins );
				}
		}
	add_action( 'activated_plugin', 'wpms_1st', 0 );

	define( 'WPMS_OPTION', 'scheduled_missed' );

	function wpms_init()
		{
			global $wp_version;

			if ( $wp_version < 2.8 )
				{
					$scheduled_missed = get_option( WPMS_OPTION, false );

					if ( ( $scheduled_missed !== false ) && ( $scheduled_missed > ( time() - ( 900 ) ) ) )
						return;
				}

			if ( $wp_version >= 2.8 )
				{
					if ( $wp_version < 3.0 )
						{
							$scheduled_missed = get_option( WPMS_OPTION, false );

							get_transient( 'scheduled_missed', $scheduled_missed, 900 );

							if ( ( $scheduled_missed !== false ) && ( $scheduled_missed > ( time() - ( 900 ) ) ) )
								return;

							set_transient( 'scheduled_missed', $scheduled_missed, 900 );
						}

					if ( $wp_version >= 3.0 )
						{
							if ( ! is_multisite() )
								{
									$scheduled_missed = get_option( WPMS_OPTION, false );

									get_transient( 'scheduled_missed', $scheduled_missed, 900 );

									if ( ( $scheduled_missed !== false ) && ( $scheduled_missed > ( time() - ( 900 ) ) ) )
										return;

									set_transient( 'scheduled_missed', $scheduled_missed, 900 );
								}

							if ( is_multisite() )
								{
									$scheduled_missed = get_option( WPMS_OPTION, false );

									get_site_transient( 'scheduled_missed', $scheduled_missed, 900 );

									if ( ( $scheduled_missed !== false ) && ( $scheduled_missed > ( time() - ( 900 ) ) ) )
										return;

									set_site_transient( 'scheduled_missed', $scheduled_missed, 900 );
								}
						}
				}

			update_option( WPMS_OPTION, time() );

			if ( $wp_version >= 2.3 )
				{
					global $wpdb;

					$qry = <<<SQL
 SELECT ID FROM {$wpdb->posts} WHERE ( ( post_date > 0 && post_date <= %s ) ) AND post_status = 'future' LIMIT 0,10 
SQL;

					$sql = $wpdb->prepare( $qry, current_time( 'mysql', 0 ) );

					$scheduledIDs = $wpdb->get_col( $sql );
				}

			if ( $wp_version < 2.3 )
				{
					global $wpdb;

					$scheduledIDs = $wpdb->get_col( "SELECT`ID`FROM `{$wpdb->posts}` " . " WHERE ( " . " ( ( `post_date` > 0 ) && ( `post_date` <= CURRENT_TIMESTAMP() ) ) OR " . " ( ( `post_date_gmt` > 0 ) && ( `post_date_gmt` <= UTC_TIMESTAMP() ) ) " . " ) AND `post_status` = 'future' LIMIT 0,10" );
				}

			if ( ! count( $scheduledIDs ) )
				return;

			foreach ( $scheduledIDs as $scheduledID )
				{
					if ( ! $scheduledID )
						continue;

					wp_publish_post( $scheduledID );
				}




		}
	add_action( 'init', 'wpms_init', 0 );

	if ( $wp_version < 2.8 )
		{
			function wpms_asal( $links, $file )
				{
					if ( $file == plugin_basename( __FILE__ ) )
						{
							global $wp_version;

							if ( $wp_version >= 2.7 )
								{
									$wpms_settings_action_links_1 = '<a href="edit.php?post_status=future&post_type=post">Miss</a>';
									$wpms_settings_action_links_2 = '<a href="tools.php?page=crontrol_admin_manage_page">Cron</a>';

									array_unshift( $links, $wpms_settings_action_links_1 );
									array_unshift( $links, $wpms_settings_action_links_2 );
								}

							if ( ( $wp_version >= 2.5 ) and ( $wp_version < 2.7 ) )
								{
									$wpms_settings_action_links_1 = '<a href="edit.php?post_status=future&post_type=post">Miss</a>';

									array_unshift( $links, $wpms_settings_action_links_1 );
								}
						}
					return $links;
				}
			add_filter( 'plugin_action_links', 'wpms_asal', null, 2 );
		}

	if ( $wp_version >= 2.8 )
		{
			function wpms_pral( $links )
				{
					$links[] = '<a href="tools.php?page=crontrol_admin_manage_page">Cron</a>';
					$links[] = '<a href="edit.php?post_status=future&post_type=post">Miss</a>';
					$links[] = '<a href="'. esc_url( 'https://slangji.wordpress.com/plugins/wp-missed-schedule-pro/' ) .'" target="_blank" style="color: #3db634">' . __( 'Upgrade', 'widget-options' ) . '</a>';
						return $links;
				}

			global $wp_version;

			if ( $wp_version >= 3.0 )
				{
					if ( ! is_multisite() )
						{
							add_filter( 'plugin_action_links_' . plugin_basename( __FILE__ ), 'wpms_pral', 10, 1 );
						}

					if ( is_multisite() )
						{
							add_filter( 'plugin_action_links_' . plugin_basename( __FILE__ ), 'wpms_pral', 10, 1 );
						}
				}

			if ( $wp_version < 3.0 )
				{
					add_filter( 'plugin_action_links_' . plugin_basename( __FILE__ ), 'wpms_pral', 10, 1 );
				}

			function wpms_prml( $links, $file )
				{
					if ( ! is_admin() && ! current_user_can( 'administrator' ) )
						return;

					if ( $file == plugin_basename( __FILE__ ) )
						{
							$links[] = '<a href="http://slangjis.org/donate/">Donate</a>';
							$links[] = '<a href="http://slangjis.org/contact/">Contact</a>';
							$links[] = '<a href="http://slangjis.org/support/">Support</a>';
						}
					return $links;
				}
			add_filter( 'plugin_row_meta', 'wpms_prml', 10, 2 );
		}

	function wpms_shfl()
		{
			if ( ! is_home() && ! is_front_page() )
				return;

			echo "\r\n<!--Plugin WP Missed Schedule Active - PATCH - Secured with Genuine Authenticity KeyTag-->\r\n";
			echo "\r\n<!-- This site is patched against a big problem not solved since WordPress 2.5 to date -->\r\n\r\n";
		}
	add_action( 'wp_head', 'wpms_shfl', 100 );
	add_action( 'wp_footer', 'wpms_shfl', 100 );

	function wpms_shfl_authag()
		{
			if ( ! is_admin() && ! current_user_can( 'administrator' ) )
				return;

			echo "\r\n<!--Secured AuthTag - ".sha1(sha1("g46FsK338kT29FPANa8lC62b79H8651411574J4YQCb3eLCQM540z78BbFMtmFXj3"."7D6B6E6B01008EC2CA6A5B17D5F6164E98E73CE0"))."-->\r\n";
			echo "\r\n<!--Verified KeyTag - 787c178ab89b0f4378c345b2024af8e2a2aaf1fe-->\r\n";

			if ( sha1(sha1("g46FsK338kT29FPANa8lC62b79H8651411574J4YQCb3eLCQM540z78BbFMtmFXj3"."7D6B6E6B01008EC2CA6A5B17D5F6164E98E73CE0")) == '787c178ab89b0f4378c345b2024af8e2a2aaf1fe' )
				{
					echo "\r\n<!-- Your copy of Plugin WP Missed Schedule (free) is Genuine -->\r\n\r\n";
				}
			else
				{
					echo "\r\n<!-- Your copy of Plugin WP Missed Schedule (free) NO Genuine -->\r\n\r\n";
				}
		}
	add_action( 'admin_head', 'wpms_shfl_authag', 100 );
	add_action( 'admin_footer', 'wpms_shfl_authag', 100 );

	function wpms_deactivation()
		{
			if ( ! current_user_can( 'activate_plugins' ) )
				return;

			global $wp_version;

			if ( $wp_version >= 2.1 )
				{
					flush_rewrite_rules();
					delete_option( 'byrev_fixshedule_next_verify' );
					delete_option( 'scheduled_post_guardian_next_run' );
					//delete_option( 'simpul_missed_schedule' );
					delete_option( 'wpt_scheduled_check' );
					delete_option( 'wp_missed_schedule' );
					delete_option( 'wp_missed_scheduled' );
					delete_option( 'wp_schedule_missed' );
					delete_option( 'wp_scheduled_missed' );                                                               # Future ALPHA conding reserved
					delete_option( 'missed_schedule' );
					delete_option( 'missed_scheduled' );
					delete_option( 'schedule_missed' );
					delete_option( 'scheduled_missed' );
				}

			if ( $wp_version >= 3.0 )
				{
					flush_rewrite_rules();
					delete_site_option( 'byrev_fixshedule_next_verify' );
					delete_site_option( 'scheduled_post_guardian_next_run' );
					//delete_site_option( 'simpul_missed_schedule' );
					delete_site_option( 'wpt_scheduled_check' );
					delete_site_option( 'wp_missed_schedule' );
					delete_site_option( 'wp_missed_scheduled' );
					delete_site_option( 'wp_schedule_missed' );
					delete_site_option( 'wp_scheduled_missed' );                                                          # Future ALPHA conding reserved
					delete_site_option( 'missed_schedule' );
					delete_site_option( 'missed_scheduled' );
					delete_site_option( 'schedule_missed' );
					delete_site_option( 'scheduled_missed' );
				}

			if ( $wp_version >= 2.8 )
				{
					flush_rewrite_rules();
					delete_transient( 'wp_missed_schedule' );
					delete_transient( 'wp_missed_scheduled' );
					delete_transient( 'timeout_wp_missed_schedule' );
					delete_transient( 'timeout_wp_missed_scheduled' );
					delete_transient( 'wp_schedule_missed' );
					delete_transient( 'wp_scheduled_missed' );                                                            # Future ALPHA conding reserved
					delete_transient( 'timeout_wp_schedule_missed' );
					delete_transient( 'timeout_wp_scheduled_missed' );                                                    # Future ALPHA conding reserved
					delete_transient( 'missed_schedule' );
					delete_transient( 'missed_scheduled' );
					delete_transient( 'timeout_missed_schedule' );
					delete_transient( 'timeout_missed_scheduled' );
					delete_transient( 'schedule_missed' );
					delete_transient( 'scheduled_missed' );
					delete_transient( 'timeout_schedule_missed' );
					delete_transient( 'timeout_scheduled_missed' );
				}

			if ( $wp_version >= 3.0 )
				{
					flush_rewrite_rules();
					delete_site_transient( 'wp_missed_schedule' );
					delete_site_transient( 'wp_missed_scheduled' );
					delete_site_transient( 'timeout_wp_missed_schedule' );
					delete_site_transient( 'timeout_wp_missed_scheduled' );
					delete_site_transient( 'wp_schedule_missed' );
					delete_site_transient( 'wp_scheduled_missed' );                                                       # Future ALPHA conding reserved
					delete_site_transient( 'timeout_wp_schedule_missed' );
					delete_site_transient( 'timeout_wp_scheduled_missed' );                                               # Future ALPHA conding reserved
					delete_site_transient( 'missed_schedule' );
					delete_site_transient( 'missed_scheduled' );
					delete_site_transient( 'timeout_missed_schedule' );
					delete_site_transient( 'timeout_missed_scheduled' );
					delete_site_transient( 'schedule_missed' );
					delete_site_transient( 'scheduled_missed' );
					delete_site_transient( 'timeout_schedule_missed' );
					delete_site_transient( 'timeout_scheduled_missed' );
				}

			flush_rewrite_rules();
			wp_clear_scheduled_hook( 'missed_schedule' );
			wp_clear_scheduled_hook( 'missed_scheduled' );
			wp_clear_scheduled_hook( 'missed_schedule_cron' );
			wp_clear_scheduled_hook( 'missed_scheduled_cron' );
			wp_clear_scheduled_hook( 'wp_missed_schedule' );
			wp_clear_scheduled_hook( 'wp_missed_scheduled' );
			wp_clear_scheduled_hook( 'wp_missed_schedule_cron' );
			wp_clear_scheduled_hook( 'wp_missed_scheduled_cron' );
			wp_clear_scheduled_hook( 'wp_schedule_missed' );
			wp_clear_scheduled_hook( 'wp_scheduled_missed' );
			wp_clear_scheduled_hook( 'wp_schedule_missed_cron' );
			wp_clear_scheduled_hook( 'wp_scheduled_missed_cron' );
			wp_clear_scheduled_hook( 'schedule_missed' );
			wp_clear_scheduled_hook( 'scheduled_missed' );
			wp_clear_scheduled_hook( 'schedule_missed_cron' );
			wp_clear_scheduled_hook( 'scheduled_missed_cron' );
		}
	register_deactivation_hook( __FILE__, 'wpms_deactivation', 0 );

	if ( $wp_version >= 2.7 )
		{
			function wpms_uninstall()
				{
					if ( ! current_user_can( 'activate_plugins' ) )
						return;

					global $wp_version;

					if ( $wp_version < 3.0 )
						{
							flush_rewrite_rules();
							delete_option( 'byrev_fixshedule_next_verify' );
							delete_option( 'scheduled_post_guardian_next_run' );
							//delete_option( 'simpul_missed_schedule' );
							delete_option( 'wpt_scheduled_check' );
							delete_option( 'wp_missed_schedule' );
							delete_option( 'wp_missed_scheduled' );
							delete_option( 'wp_schedule_missed' );
							delete_option( 'wp_scheduled_missed' );                                                       # Future ALPHA conding reserved
							delete_option( 'missed_schedule' );
							delete_option( 'missed_scheduled' );
							delete_option( 'schedule_missed' );
							delete_option( 'scheduled_missed' );
						}

					if ( ( $wp_version >= 2.6 ) and ( $wp_version < 3.0 ) )
						{
							flush_rewrite_rules();
							delete_option( 'scheduled_missed_options' );
							delete_option( 'scheduled_missed_cron_options' );
						}

					if ( ( $wp_version >= 2.6 ) and ( $wp_version >= 3.0 ) )
						{
							if ( ! is_multisite() )
								{
									flush_rewrite_rules();
									delete_option( 'scheduled_missed_options' );
									delete_option( 'scheduled_missed_cron_options' );
								}

							if ( is_multisite() )
								{
									flush_rewrite_rules();
									delete_site_option( 'scheduled_missed_options' );
									delete_site_option( 'scheduled_missed_cron_options' );

									global $wpdb;

									$blog_ids = $wpdb->get_col( "SELECT blog_id FROM $wpdb->blogs" );
									$original_blog_id = get_current_blog_id();

									foreach ( $blog_ids as $blog_id )
										{
											switch_to_blog( $blog_id );

											flush_rewrite_rules();
											delete_site_option( 'scheduled_missed_options' );
											delete_site_option( 'scheduled_missed_cron_options' );
										}
									switch_to_blog( $original_blog_id );
								}
						}

					if ( $wp_version >= 3.0 )
						{
							if ( ! is_multisite() )
								{
									flush_rewrite_rules();
									delete_option( 'byrev_fixshedule_next_verify' );
									delete_option( 'scheduled_post_guardian_next_run' );
									//delete_option( 'simpul_missed_schedule' );
									delete_option( 'wpt_scheduled_check' );
									delete_option( 'wp_missed_schedule' );
									delete_option( 'wp_missed_scheduled' );
									delete_option( 'wp_schedule_missed' );
									delete_option( 'wp_scheduled_missed' );                                               # Future ALPHA conding reserved
									delete_option( 'missed_schedule' );
									delete_option( 'missed_scheduled' );
									delete_option( 'schedule_missed' );
									delete_option( 'scheduled_missed' );
								}

							if ( is_multisite() )
								{
									flush_rewrite_rules();
									delete_option( 'byrev_fixshedule_next_verify' );
									delete_option( 'scheduled_post_guardian_next_run' );
									//delete_option( 'simpul_missed_schedule' );
									delete_option( 'wpt_scheduled_check' );
									delete_option( 'wp_missed_schedule' );
									delete_option( 'wp_missed_scheduled' );
									delete_option( 'wp_schedule_missed' );
									delete_option( 'wp_scheduled_missed' );                                               # Future ALPHA conding reserved
									delete_option( 'missed_schedule' );
									delete_option( 'missed_scheduled' );
									delete_option( 'schedule_missed' );
									delete_option( 'scheduled_missed' );

									global $wpdb;

									$blog_ids = $wpdb->get_col( "SELECT blog_id FROM $wpdb->blogs" );
									$original_blog_id = get_current_blog_id();

									foreach ( $blog_ids as $blog_id )
										{
											switch_to_blog( $blog_id );

											flush_rewrite_rules();
											delete_site_option( 'byrev_fixshedule_next_verify' );
											delete_site_option( 'scheduled_post_guardian_next_run' );
											//delete_site_option( 'simpul_missed_schedule' );
											delete_site_option( 'wpt_scheduled_check' );
											delete_site_option( 'wp_missed_schedule' );
											delete_site_option( 'wp_missed_scheduled' );
											delete_site_option( 'wp_schedule_missed' );
											delete_site_option( 'wp_scheduled_missed' );                                  # Future ALPHA conding reserved
											delete_site_option( 'missed_schedule' );
											delete_site_option( 'missed_scheduled' );
											delete_site_option( 'schedule_missed' );
											delete_site_option( 'scheduled_missed' );
										}
									switch_to_blog( $original_blog_id );
								}
						}

					if ( ( $wp_version >= 2.8 ) and ( $wp_version < 3.0 ) )
						{
							flush_rewrite_rules();
							delete_transient( 'wp_missed_schedule' );
							delete_transient( 'wp_missed_scheduled' );
							delete_transient( 'timeout_wp_missed_schedule' );
							delete_transient( 'timeout_wp_missed_scheduled' );
							delete_transient( 'wp_schedule_missed' );
							delete_transient( 'wp_scheduled_missed' );                                                    # Future ALPHA conding reserved
							delete_transient( 'timeout_wp_schedule_missed' );
							delete_transient( 'timeout_wp_scheduled_missed' );                                            # Future ALPHA conding reserved
							delete_transient( 'missed_schedule' );
							delete_transient( 'missed_scheduled' );
							delete_transient( 'timeout_missed_schedule' );
							delete_transient( 'timeout_missed_scheduled' );
							delete_transient( 'schedule_missed' );
							delete_transient( 'scheduled_missed' );
							delete_transient( 'timeout_schedule_missed' );
							delete_transient( 'timeout_scheduled_missed' );
						}

					if ( $wp_version >= 3.0 )
						{
							if ( ! is_multisite() )
								{
									flush_rewrite_rules();
									delete_transient( 'wp_missed_schedule' );
									delete_transient( 'wp_missed_scheduled' );
									delete_transient( 'timeout_wp_missed_schedule' );
									delete_transient( 'timeout_wp_missed_scheduled' );
									delete_transient( 'wp_schedule_missed' );
									delete_transient( 'wp_scheduled_missed' );                                            # Future ALPHA conding reserved
									delete_transient( 'timeout_wp_schedule_missed' );
									delete_transient( 'timeout_wp_scheduled_missed' );                                    # Future ALPHA conding reserved
									delete_transient( 'missed_schedule' );
									delete_transient( 'missed_scheduled' );
									delete_transient( 'timeout_missed_schedule' );
									delete_transient( 'timeout_missed_scheduled' );
									delete_transient( 'schedule_missed' );
									delete_transient( 'scheduled_missed' );
									delete_transient( 'timeout_schedule_missed' );
									delete_transient( 'timeout_scheduled_missed' );
								}

							if ( is_multisite() )
								{
									flush_rewrite_rules();
									delete_transient( 'wp_missed_schedule' );
									delete_transient( 'wp_missed_scheduled' );
									delete_transient( 'timeout_wp_missed_schedule' );
									delete_transient( 'timeout_wp_missed_scheduled' );
									delete_transient( 'wp_schedule_missed' );
									delete_transient( 'wp_scheduled_missed' );                                            # Future ALPHA conding reserved
									delete_transient( 'timeout_wp_schedule_missed' );
									delete_transient( 'timeout_wp_scheduled_missed' );                                    # Future ALPHA conding reserved
									delete_transient( 'missed_schedule' );
									delete_transient( 'missed_scheduled' );
									delete_transient( 'timeout_missed_schedule' );
									delete_transient( 'timeout_missed_scheduled' );
									delete_transient( 'schedule_missed' );
									delete_transient( 'scheduled_missed' );
									delete_transient( 'timeout_schedule_missed' );
									delete_transient( 'timeout_scheduled_missed' );

									global $wpdb;

									$blog_ids = $wpdb->get_col( "SELECT blog_id FROM $wpdb->blogs" );
									$original_blog_id = get_current_blog_id();

									foreach ( $blog_ids as $blog_id )
										{
											switch_to_blog( $blog_id );

											flush_rewrite_rules();
											delete_site_transient( 'wp_missed_schedule' );
											delete_site_transient( 'wp_missed_scheduled' );
											delete_site_transient( 'timeout_wp_missed_schedule' );
											delete_site_transient( 'timeout_wp_missed_scheduled' );
											delete_site_transient( 'wp_schedule_missed' );
											delete_site_transient( 'wp_scheduled_missed' );                               # Future ALPHA conding reserved
											delete_site_transient( 'timeout_wp_schedule_missed' );
											delete_site_transient( 'timeout_wp_scheduled_missed' );                       # Future ALPHA conding reserved
											delete_site_transient( 'missed_schedule' );
											delete_site_transient( 'missed_scheduled' );
											delete_site_transient( 'timeout_missed_schedule' );
											delete_site_transient( 'timeout_missed_scheduled' );
											delete_site_transient( 'schedule_missed' );
											delete_site_transient( 'scheduled_missed' );
											delete_site_transient( 'timeout_schedule_missed' );
											delete_site_transient( 'timeout_scheduled_missed' );
										}
									switch_to_blog( $original_blog_id );
								}
						}

					flush_rewrite_rules();
					wp_clear_scheduled_hook( 'missed_schedule' );
					wp_clear_scheduled_hook( 'missed_scheduled' );
					wp_clear_scheduled_hook( 'missed_schedule_cron' );
					wp_clear_scheduled_hook( 'missed_scheduled_cron' );
					wp_clear_scheduled_hook( 'wp_missed_schedule' );
					wp_clear_scheduled_hook( 'wp_missed_scheduled' );
					wp_clear_scheduled_hook( 'wp_missed_schedule_cron' );
					wp_clear_scheduled_hook( 'wp_missed_scheduled_cron' );
					wp_clear_scheduled_hook( 'wp_schedule_missed' );
					wp_clear_scheduled_hook( 'wp_scheduled_missed' );
					wp_clear_scheduled_hook( 'wp_schedule_missed_cron' );
					wp_clear_scheduled_hook( 'wp_scheduled_missed_cron' );
					wp_clear_scheduled_hook( 'schedule_missed' );
					wp_clear_scheduled_hook( 'scheduled_missed' );
					wp_clear_scheduled_hook( 'schedule_missed_cron' );
					wp_clear_scheduled_hook( 'scheduled_missed_cron' );
				}
			register_uninstall_hook( __FILE__, 'wpms_uninstall', 0 );
		}
	}
	}
	}
	}
	}
	}
	}
	}
	}
	}
	}
	}
	}
	}
	}
//    }
?>