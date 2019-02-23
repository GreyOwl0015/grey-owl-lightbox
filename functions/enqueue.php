<?php

/* style css */
wp_register_style('gol-style', GOL_MAIN_DIR_URL . 'css/gol-style.css', array(), GOL_VER );
wp_register_style('gol-font-style', GOL_MAIN_DIR_URL . 'css/grey-owl-icon-font-style.css', array(), '1.4' );
wp_enqueue_style('gol-style');
wp_enqueue_style('gol-font-style');

/* javascript */
wp_register_script( 'grey-owl-lightbox', GOL_MAIN_DIR_URL . 'js/grey-owl-lightbox.min.js', array('jquery'), GOL_VER, true );
wp_enqueue_script( 'grey-owl-lightbox' );
