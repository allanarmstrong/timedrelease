<?php
/*
Plugin Name: Timed Release Shortcode
Plugin URI: http://hit3k.net/timedrelease
Description: Adds a shortcode to have sections in posts only display after a specified date
Version: 0.1
Author: Allan Armstrong
Author URI: http://www.hit3k.net
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

defined( 'ABSPATH' ) or die ('no script kiddies please');

function timed_release_shortcode($atts , $content = null) {
	$gmt_offset = get_option('gmt_offset');
	$currentTime = time() + ($gmt_offset * 60 * 60);
	$defaulttime = (int)strtotime(get_the_date()) + 86400;

	$a = shortcode_atts(array(
		'date' => $defaulttime, // Defaults to 24 hours from now
		'time' => '00:00' //Midnight. Doesn't affect default release time.
	), $atts);
	if ($a['date'] != $defaulttime) {
		$date = explode('-', $a['date']);
		$time = explode(':', $a['time']);
		$timestamp = mktime((int)$time[0],(int)$time[1],0,(int)$date[1], (int)$date[0], (int)$date[2]);
	} else {
		$timestamp = $a['date'];
	}
	if ( $currentTime < (int)$timestamp) {
		return '';
	} else {
		return '<p>' . do_shortcode($content) . '</p>';
	}
}

add_shortcode('timed-release', timed_release_shortcode);

?>