<?php

function grey_owl_lightbox_plugin_add_settings_link( $links ) {

    $links_array = gol_get_page_links_array();

    $links['settings'] = '<a href="'.$links_array['settings']['url'].'">'.$links_array['settings']['name'].'</a>';
    $links['documentation'] = '<a href="'.$links_array['documentation']['url'].'">'.$links_array['documentation']['name'].'</a>';

  	return $links;
}

function grey_owl_add_management_page(){
    add_management_page( esc_html__( 'Grey Owl Lightbox', 'greyowl' ), esc_html__( 'Grey Owl Lightbox', 'greyowl' ), 'manage_options', GOL_PAGE_NAME, 'grey_owl_lightbox_settings' );
}

function grey_owl_lightbox_settings(){

    if ( isset( $_POST['gol_submit_form'] ) ) {
        if ( function_exists('current_user_can') && !current_user_can('manage_options') ){
            die( esc_html_e('Error', 'greyowl') );
        }

        if ( function_exists('check_admin_referer') ) {
            check_admin_referer('grey_owl_lightbox_setup_form');

            if( gol_is_settings_page() ){
                GreyOwllightboxOBJ::save_lightbox_data( $_POST );
            }
        }
    }

    require_once GOL_MAIN_DIR . 'functions/enqueue-data.php';

    do_action('gol_page_start');

    do_action('gol_page_header');

    if( isset( $_GET['part'] ) && $_GET['part'] == 'documentation' ){
        do_action('gol_page_documentation');
    } else {
        do_action('gol_page_setting');
    }

    do_action('gol_page_end');
}
