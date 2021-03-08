<?php
/**
 * Easy Digital Downloads Theme Updater
 *
 * @package EDD Sample Theme
 */

// Includes the files needed for the theme updater
if ( !class_exists( 'EDD_Theme_Updater_Admin' ) ) {
	include( dirname( __FILE__ ) . '/theme-updater-admin.php' );
}

// Loads the updater classes
$updater = new EDD_Theme_Updater_Admin(

	// Config settings
	$config = array(
		'remote_api_url' => 'https://alx.media', // Site where EDD is hosted
		'item_name'      => 'Noteblock', // Name of theme
		'theme_slug'     => 'noteblock', // Theme slug
		'version'        => '1.0.7', // The current version of this theme
		'author'         => 'AlxMedia', // The author of this theme
		'download_id'    => '', // Optional, used for generating a license renewal link
		'renew_url'      => '', // Optional, allows for a custom license renewal link
		'beta'           => false, // Optional, set to true to opt into beta versions
	),

	// Strings
	$strings = array(
		'theme-license'             => __( 'Theme License', 'noteblock' ),
		'enter-key'                 => __( 'Enter your theme license key.', 'noteblock' ),
		'license-key'               => __( 'License Key', 'noteblock' ),
		'license-action'            => __( 'License Action', 'noteblock' ),
		'deactivate-license'        => __( 'Deactivate License', 'noteblock' ),
		'activate-license'          => __( 'Activate License', 'noteblock' ),
		'status-unknown'            => __( 'License status is unknown.', 'noteblock' ),
		'renew'                     => __( 'Renew?', 'noteblock' ),
		'unlimited'                 => __( 'unlimited', 'noteblock' ),
		'license-key-is-active'     => __( 'License key is active.', 'noteblock' ),
		'expires%s'                 => __( 'Expires %s.', 'noteblock' ),
		'expires-never'             => __( 'Lifetime License.', 'noteblock' ),
		'%1$s/%2$-sites'            => __( 'You have %1$s / %2$s sites activated.', 'noteblock' ),
		'license-key-expired-%s'    => __( 'License key expired %s.', 'noteblock' ),
		'license-key-expired'       => __( 'License key has expired.', 'noteblock' ),
		'license-keys-do-not-match' => __( 'License keys do not match.', 'noteblock' ),
		'license-is-inactive'       => __( 'License is inactive.', 'noteblock' ),
		'license-key-is-disabled'   => __( 'License key is disabled.', 'noteblock' ),
		'site-is-inactive'          => __( 'Site is inactive.', 'noteblock' ),
		'license-status-unknown'    => __( 'License status is unknown.', 'noteblock' ),
		'update-notice'             => __( "Updating this theme will lose any customizations you have made. 'Cancel' to stop, 'OK' to update.", 'noteblock' ),
		'update-available'          => __('<strong>%1$s %2$s</strong> is available. <a href="%3$s" class="thickbox" title="%4s">Check out what\'s new</a> or <a href="%5$s"%6$s>update now</a>.', 'noteblock' ),
	)

);
