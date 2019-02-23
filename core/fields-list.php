<?php

function gol_fields_list_array(){

    $fields = array(
        // disable / enable options
        array(
            'row_title' => esc_html__('enable / disable options', 'greyowl'),
            'row' => array(
                array(
                    'label'  => esc_html__('Open image media file in lightbox', 'greyowl'),
                    'name'   => 'gol_open_image_media_file',
                    'id'     => 'gol-open-image-media-file',
                    'class'  => '',
                    'column' => '3',
                    'type'   => 'checkbox',
                ),
                array(
                    'label'  => esc_html__('Opening type', 'greyowl'),
                    'name'   => 'gol_lightbox_opening_type',
                    'id'     => 'gol-lightbox-opening-type',
                    'class'  => '',
                    'column' => '3',
                    'type'   => 'select',
                    'select' => array(
                        'single'   => esc_html__('single image', 'greyowl'),
                        'gallery' => esc_html__('gallery', 'greyowl'),
                    ),
                    'default' => 'single_image',
                ),
            ),
        ),
        // Main block
        array(
            'row_title' => esc_html__('Main block', 'greyowl'),
            'row' => array(
                array(
                    'label'   => esc_html__('Background color', 'greyowl'),
                    'name'    => 'gol_main_background_color',
                    'id'      => 'gol-main-background-color',
                    'class'   => '',
                    'column'  => '3',
                    'type'    => 'color',
                    'default' => '#000000',
                ),
                array(
                    'label'   => esc_html__('Color opacity', 'greyowl'),
                    'name'    => 'gol_main_background_color_opacity',
                    'id'      => 'gol-main-background-color-opacity',
                    'class'   => '',
                    'column'  => '9',
                    'type'    => 'text',
                    'default' => '0.5',
                ),
            ),
        ),
        // Media box
        array(
            'row_title' => esc_html__('Media box', 'greyowl'),
            'row' => array(
                array(
                    'label'   => esc_html__('Media box color', 'greyowl'),
                    'name'    => 'gol_media_box_color',
                    'id'      => 'gol-media-box-color',
                    'class'   => '',
                    'column'  => '3',
                    'type'    => 'color',
                    'default' => '#ffffff',
                ),
                array(
                    'label'   => esc_html__('Border radius', 'greyowl'),
                    'name'    => 'gol_border_radius',
                    'id'      => 'gol-border-radius',
                    'class'   => '',
                    'column'  => '3',
                    'type'    => 'number',
                    'default' => '10',
                ),
                array(
                    'label'   => esc_html__('Max width lightbox ( % )', 'greyowl'),
                    'name'    => 'gol_max_width_lightbox',
                    'id'      => 'gol-max-width-lightbox',
                    'class'   => '',
                    'column'  => '3',
                    'type'    => 'number',
                    'default' => '90',
                ),
                array(
                    'label'   => esc_html__('Max height lightbox ( % )', 'greyowl'),
                    'name'    => 'gol_max_height_lightbox',
                    'id'      => 'gol-max-height-lightbox',
                    'class'   => '',
                    'column'  => '3',
                    'type'    => 'number',
                    'default' => '90',
                ),
                array(
                    'label'   => esc_html__('Box padding top', 'greyowl'),
                    'name'    => 'gol_box_padding_top',
                    'id'      => 'gol-box-padding-top',
                    'class'   => '',
                    'column'  => '3',
                    'type'    => 'number',
                    'default' => '20',
                ),
                array(
                    'label'   => esc_html__('Box padding right', 'greyowl'),
                    'name'    => 'gol_box_padding_right',
                    'id'      => 'gol-box-padding-right',
                    'class'   => '',
                    'column'  => '3',
                    'type'    => 'number',
                    'default' => '20',
                ),
                array(
                    'label'   => esc_html__('Box padding bottom', 'greyowl'),
                    'name'    => 'gol_box_padding_bottom',
                    'id'      => 'gol-box-padding-bottom',
                    'class'   => '',
                    'column'  => '3',
                    'type'    => 'number',
                    'default' => '20',
                ),
                array(
                    'label'   => esc_html__('Box padding left', 'greyowl'),
                    'name'    => 'gol_box_padding_left',
                    'id'      => 'gol-box-padding-left',
                    'class'   => '',
                    'column'  => '3',
                    'type'    => 'number',
                    'default' => '20',
                ),
            ),
        ),
        // Button size
        array(
            'row_title' => esc_html__('Close button size', 'greyowl'),
            'row' => array(
                array(
                    'label'   => esc_html__('button width', 'greyowl'),
                    'name'    => 'gol_close_button_width',
                    'id'      => 'gol-close-button-width',
                    'class'   => '',
                    'column'  => '3',
                    'type'    => 'number',
                    'default' => '30',
                ),
                array(
                    'label'   => esc_html__('button height', 'greyowl'),
                    'name'    => 'gol_close_button_height',
                    'id'      => 'gol-close-button-height',
                    'class'   => '',
                    'column'  => '9',
                    'type'    => 'number',
                    'default' => '30',
                ),
            ),
        ),
        // Button position
        array(
            'row_title' => esc_html__('Close button position', 'greyowl'),
            'row' => array(
                array(
                    'label'   => esc_html__('Horizontal button position', 'greyowl'),
                    'name'    => 'gol_horizontal_position',
                    'id'      => 'gol-horizontal-position',
                    'class'   => '',
                    'column'  => '3',
                    'type'    => 'select',
                    'select'  => array(
                        'left'  => 'left',
                        'right' => 'right'
                    ),
                    'default' => 'right',
                ),
                array(
                    'label'   => esc_html__('distance', 'greyowl'),
                    'name'    => 'gol_horizontal_position_distance',
                    'id'      => 'gol-horizontal-position-distance',
                    'class'   => '',
                    'column'  => '3',
                    'type'    => 'number',
                    'default' => '15',
                ),
                array(
                    'label'   => esc_html__('Vertical button position', 'greyowl'),
                    'name'    => 'gol_vertical_position',
                    'id'      => 'gol-vertical-position',
                    'class'   => '',
                    'column'  => '3',
                    'type'    => 'select',
                    'select'  => array(
                        'top'    => 'top',
                        'bottom' => 'bottom'
                    ),
                    'default' => 'top',
                ),
                array(
                    'label'   => esc_html__('distance', 'greyowl'),
                    'name'    => 'gol_vertical_position_distance',
                    'id'      => 'gol-vertical-position-distance',
                    'class'   => '',
                    'column'  => '3',
                    'type'    => 'number',
                    'default' => '15',
                ),
            ),
        ),
        // Button content
        array(
            'row_title' => esc_html__('Button content', 'greyowl'),
            'row_subtitle' => esc_html__('text or path to image or icon HTML', 'greyowl'),
            'row' => array(
                array(
                    'label'   => esc_html__('Close button', 'greyowl'),
                    'name'    => 'gol_close_button_content',
                    'id'      => 'gol-close-button-content',
                    'type'    => 'text',
                    'default' => '<span class="goi-negative"></span>',
                ),
                array(
                    'label'   => esc_html__('Gallery button previous', 'greyowl'),
                    'name'    => 'gol_gallery_button_previous',
                    'id'      => 'gol-gallery-button-previous',
                    'column'  => '6',
                    'type'    => 'text',
                    'default' => '<span class="goi-corner-left"></span>',
                ),
                array(
                    'label'   => esc_html__('Gallery button next', 'greyowl'),
                    'name'    => 'gol_gallery_button_next',
                    'id'      => 'gol-gallery-button-next',
                    'column'  => '6',
                    'type'    => 'text',
                    'default' => '<span class="goi-corner-right"></span>',
                ),
            ),
        ),
    );

    return $fields;
}


// array(
//     'label'  => esc_html__('', 'greyowl'),
//     'name'   => '',
//     'id'     => '',
//     'class'  => '',
//     'value'  => '',
//     'column' => '',
//     'type'   => '',
// ),
