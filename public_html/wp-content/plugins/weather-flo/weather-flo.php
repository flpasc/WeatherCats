<?php
/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/flpasc
 * @since             1.0.0
 * @package           Weather_Flo
 *
 * @wordpress-plugin
 * Plugin Name:       weather-flo
 * Plugin URI:        https://github.com/flpasc
 * Description:       Custom weather wp plugin. OpenWeatherAPI
 * Version:           1.0.0
 * Author:            flpasc
 * Author URI:        https://github.com/flpasc
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       weather-flo
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// Enqueue your CSS file
function weatherflo_enqueue_styles() {
    wp_enqueue_style( 'weatherflo-styles', plugin_dir_url( __FILE__ ) . 'weather-flo-styles.css' );
}
add_action( 'wp_enqueue_scripts', 'weatherflo_enqueue_styles' );

// Define a shortcode function
function display_weather() {
    // Container HTML markup
    $weather_container = '
    <div class="custom-weather-container">
        <h3>Current Weather Guess</h3>

        <div class="custom-weather-inputs">
            <input id="custom-weather-input" type="text" value="Jena">
            <button id="custom-weather-button">Guess</button>
        </div>

        <!-- Display grid -->
        <div class="custom-weather-head-row">
            <div class="custom-weather-icon"></div>
            <div class="custom-weather-location"></div>
            <div class="custom-weather-conditions"></div>
            <div class="custom-weather-temperature"></div>
        </div>

        <!-- Display grid -->
        <div class="custom-weather-info">
            <div class="custom-weather-sunrise"></div>
            <div class="custom-weather-sunset"></div>
            <div class="custom-weather-humidity"></div>
            <div class="custom-weather-wind"></div>
        </div>
    </div>';

    return $weather_container;
}

// Register the shortcode
function register_display_weather() {
    add_shortcode( 'custom_weather', 'display_weather' );
}
add_action( 'init', 'register_display_weather' );

// Load the plugin scripts
function weatherflo_load_scripts() {
    wp_enqueue_script(
        'weatherflo-script',
        plugin_dir_url( __FILE__ ) . 'weather-flo-script.js',
        array(),
        '1.0.0',
        true
    );
}
add_action( 'wp_enqueue_scripts', 'weatherflo_load_scripts' );


/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'WEATHER_FLO_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-weather-flo-activator.php
 */
function activate_weather_flo() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-weather-flo-activator.php';
	Weather_Flo_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-weather-flo-deactivator.php
 */
function deactivate_weather_flo() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-weather-flo-deactivator.php';
	Weather_Flo_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_weather_flo' );
register_deactivation_hook( __FILE__, 'deactivate_weather_flo' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-weather-flo.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_weather_flo() {

	$plugin = new Weather_Flo();
	$plugin->run();

}
run_weather_flo();