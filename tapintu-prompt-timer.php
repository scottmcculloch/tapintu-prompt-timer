<?php
/*
Plugin Name: Tapintu - Journaling Prompt & Timer
Plugin URI: http://tapintu.com
Description: Random writing prompts with timer
Version: 1.0
Author: A. Scott McCulloch, PhD
Author URI: http://tapintu.com
License: GPLv2 or later
*/

define( 'TAPINTU_JORUNAL_PATH', dirname( __FILE__ ) );
define( 'TAPINTU_JORUNAL_RELATIVE_PATH', dirname( plugin_basename( __FILE__ )));
define( 'TAPINTU_JORUNAL_URL', plugin_dir_url( __FILE__ ));

// include libraries and controllers
include TAPINTU_JORUNAL_PATH.'/controllers/init.php';
//include TAPINTU_JORUNAL_PATH.'/controllers/shortcodes.php';
include TAPINTU_JORUNAL_PATH.'/models/journal-prompt.php';

// load scripts required by shortcodes, etc
//wp_enqueue_script('jQuery', '//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js');
wp_enqueue_script('jTimer', TAPINTU_JORUNAL_URL.'js/jtimer.js',array('jquery'));
wp_enqueue_script('Countdown', TAPINTU_JORUNAL_URL.'js/countdown.js',array('jquery'));
wp_enqueue_script('Prompts', TAPINTU_JORUNAL_URL.'js/prompts.js',array('jquery'));
wp_enqueue_style( 'PromptTimerStyle', TAPINTU_JORUNAL_URL.'css/prompt-timer-style.css');
?>