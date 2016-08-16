<?php

/* Plugin Name: Front-end Editor for l'Opendoc */

if ( ! class_exists( 'FEE' ) ) {
	require_once 'class-fee.php';
	$GLOBALS['wp_front_end_editor'] = new FEE;
}
