<?php



add_action( 'gol_page_start', 'gol_page_fields_list_start', 10 );
function gol_page_fields_list_start(){
    ?>
    <div class="page-fields-settin-list-wrapper">
        <div class="settin-container">
    <?php
}

add_action( 'gol_page_header', 'gol_setting_page_title', 10 );
function gol_setting_page_title(){
    ?>
    <div class="title-wrapper">
        <div class="main-title-box">
            <h1 class="main-title"><span class="goi-grey-owl"></span> Grey Owl lightbox</h1>
        </div>
    </div>
    <?php
}

add_action( 'gol_page_documentation', 'gol_element_attributes_section', 10 );
function gol_element_attributes_section(){
    ?>
    <section class="">
        <h2 class="section-title">jQuery events</h2>

        <table class="documentation-tbl">

            <tr>
                <td class="event-name">image_url</td>
                <td class="description"><?php esc_html_e('opens image in lightbox', 'greyowl'); ?></td>
            </tr>
            <tr>
                <td class="example-code" colspan="2">
                    <div class="example-code-wrapper">
                        <pre class="example-code-box" data-page-type="script.js">
<code>
jQuery('.button-class').GreyOwlLightbox('click', {

    image_url : 'https://your.site/image-path/image.jpg'
});</code>
                        </pre>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="event-name">gallery</td>
                <td class="description"><?php esc_html_e('opens images in lightbox gallery', 'greyowl'); ?></td>
            </tr>
            <tr>
                <td class="event-name">current_img</td>
                <td class="description"><?php esc_html_e('current image can also be set', 'greyowl'); ?></td>
            </tr>
            <tr>
                <td class="example-code" colspan="2">
                    <div class="example-code-wrapper">
                        <pre class="example-code-box" data-page-type="script.js">
<code>
jQuery('.button-class').GreyOwlLightbox('click', {

    gallery : {
        1 : 'https://your.site/image-path/image-1.jpg',
        2 : 'https://your.site/image-path/image-2.jpg',
        3 : 'https://your.site/image-path/image-3.jpg',
    },
    current_img : 2
});</code>
                        </pre>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="event-name">embed_url</td>
                <td class="description"><?php esc_html_e('opens video in lightbox, returns an embed, works on the basis of a wordpress object', 'greyowl'); ?></td>
            </tr>
            <tr>
                <td class="event-name">max_width</td>
                <td class="description"><?php esc_html_e('maximum video width', 'greyowl'); ?></td>
            </tr>
            <tr>
                <td class="example-code" colspan="2">
                    <div class="example-code-wrapper">
                        <pre class="example-code-box" data-page-type="script.js">
<code>
jQuery('.button-class').GreyOwlLightbox('click', {

    embed_url : 'https://www.youtube.com/example_youtube_video',
    max_width : 1200
});

//-----------------  OR  --------------------//

jQuery('.button-class').on( 'click', function(){

    var this_url = jQuery(this).attr('data-url-video'); // data attribute with video address can be added to the button

    jQuery( this ).GreyOwlLightbox({
        embed_url : this_url,
        max_width : 1200
    });
});</code>
                        </pre>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="event-name">dom_html_element</td>
                <td class="description">
                    <?php esc_html_e('opens html element in lightbox (does not copy javascript events)', 'greyowl'); ?>
                </td>
            </tr>
            <tr>
                <td class="event-name">before_open</td>
                <td class="description">
                    <?php esc_html_e('This event has one parameter: is parameter returns the code as a jQuery object', 'greyowl'); ?>
                </td>
            </tr>
            <tr>
                <td class="event-name">variables</td>
                <td class="description">
                    <?php esc_html_e('replaces variables in html code ( %1%, %example% )', 'greyowl'); ?>
                </td>
            </tr>
            <tr>
                <td class="event-name">html element attribute [data-gol-content]</td>
                <td class="description">
                    <?php esc_html_e('hides an html element on the page', 'greyowl'); ?>
                </td>
            </tr>
            <tr>
                <td class="example-code" colspan="2">
                    <div class="example-code-wrapper">
                        <pre class="example-code-box" data-page-type="example.html">
<code>
&#60;div class="inside-element-class" data-gol-content&#62;
    &#60;p&#62; Your name: %1% &#60;/p&#62;
    &#60;p&#62; Your age: %2% &#60;/p&#62;
    &#60;p&#62; Your description: %var_desc% &#60;/p&#62;
&#60;/div&#62;
</code>
                        </pre>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="example-code" colspan="2">
                    <div class="example-code-wrapper">
                        <pre class="example-code-box" data-page-type="script.js">
<code>
jQuery('.button-class').GreyOwlLightbox('click', {

    dom_html_element : 'inside-element-class',

    variables : {
        1 : 'Example Name',
        2 : 21,
        var_desc : 'example text'
    },

    before_open : function( content ){

        content.find('.inside-element-class p').on('click', function(){
            jQuery(this).css('color', 'red');
        });
    },
});</code>
                        </pre>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="event-name">callback_ajax</td>
                <td class="description">
                    <?php esc_html_e('This event makes an Ajax request, to register the request, in the function.php file use the function', 'greyowl'); ?> gol_set_callback ( 'event_name', 'your_function' );
                </td>
            </tr>
            <tr>
                <td class="event-name">callback_ajax_params</td>
                <td class="description"><?php esc_html_e('this event serves to transfer parameters to the php function.', 'greyowl'); ?></td>
            </tr>
            <tr>
                <td class="event-name">before_open</td>
                <td class="description">
                    <?php esc_html_e('This event has two parameters:', 'greyowl'); ?><br>
                    1) <?php esc_html_e('the first parameter returns the code as a jQuery object', 'greyowl'); ?><br>
                    2) <?php esc_html_e('transfer data from the php file to the second parameter of the event using this function "gol_callback_parameters( array() )"', 'greyowl'); ?>
                </td>
            </tr>
            <tr>
                <td class="example-code" colspan="2">
                    <div class="example-code-wrapper">
                        <pre class="example-code-box" data-page-type="script.js">
<code>
jQuery('.button-class').GreyOwlLightbox('click', {

    callback_ajax : 'your_example_function_1',

    callback_ajax_params : function(){
        return { name : 'Your Name', age : 21 };
    },

    before_open : function( content, params ){

        var returned_value = params.your_key;

        content.find('.inside-element-class').on('click', function(){
            // your code ...
        });
    },
});</code>
                        </pre>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="example-code" colspan="2">
                    <div class="example-code-wrapper">
                        <pre class="example-code-box" data-page-type="function.php">
<code>
if( function_exists('gol_set_callback') ){ // in order to avoid errors if suddenly the plugin will be disabled
    gol_set_callback( 'your_example_function_1', function( $params ){

        gol_callback_parameters( array( 'your_key' => 'yout value' ) );  // returns data to the second parameter of the "before_open" event

        echo '&#60;p&#62; your name: ' . $params['name'] . '&#60;/p&#62;';
        echo '&#60;p&#62; your age: ' . $params['age'] . '&#60;/p&#62;';
    });
}</code>
                        </pre>
                    </div>
                </td>
            </tr>

            <tr>
                <td class="event-name">GreyOwlLightbox( 'set_content', your_html_content );</td>
                <td class="description">
                    <?php esc_html_e('add content to (open) lightbox', 'greyowl'); ?>
                </td>
            </tr>
            <tr>
                <td class="example-code" colspan="2">
                    <div class="example-code-wrapper">
                        <pre class="example-code-box" data-page-type="script.js">
<code>
var your_html_content = '&#60;p&#62;Your demo content&#60;/p&#62;';
GreyOwlLightbox( 'set_content', your_html_content );</code>
                        </pre>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="event-name">GreyOwlLightbox( 'close' );</td>
                <td class="description">
                    <?php esc_html_e('close the (open) lightbox', 'greyowl'); ?>
                </td>
            </tr>

        </table>
    </section>
    <?php
}
add_action( 'gol_page_documentation', 'gol_jquery_event_section', 15 );
function gol_jquery_event_section(){
    ?>
    <section class="">
        <h2 class="section-title">Element attributes</h2>

        <table class="documentation-tbl">
            <tr>
                <td class="event-name">go-lightbox</td>
                <td class="description"><?php esc_html_e('To activate the html attributes in the button you need to add the attribute “go-lightbox”', 'greyowl'); ?></td>
            </tr>
            <tr>
                <td class="example-code" colspan="2">
                    <div class="example-code-wrapper">
                        <pre class="example-code-box" data-page-type="example.html">
<code>&#60;button go-lightbox&#62; click me &#60;/button&#62;</code>
                        </pre>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="event-name">data-go-image</td>
                <td class="description"><?php esc_html_e('opens image in lightbox', 'greyowl'); ?></td>
            </tr>
            <tr>
                <td class="example-code" colspan="2">
                    <div class="example-code-wrapper">
                        <pre class="example-code-box" data-page-type="example.html">
<code>&#60;button go-lightbox data-go-image="https://your.site/image-path/image.jpg"&#62; click me &#60;/button&#62;</code>
                        </pre>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="event-name">data-go-video-url</td>
                <td class="description"><?php esc_html_e('opens video in lightbox, returns an embed, works on the basis of a wordpress object', 'greyowl'); ?></td>
            </tr>
            <tr>
                <td class="event-name">data-go-video-widt</td>
                <td class="description"><?php esc_html_e('maximum video width', 'greyowl'); ?></td>
            </tr>
            <tr>
                <td class="example-code" colspan="2">
                    <div class="example-code-wrapper">
                        <pre class="example-code-box" data-page-type="example.html">
<code>&#60;button go-lightbox data-go-video-url="https://www.example-tube.com/your-video" data-go-video-width="1200"&#62; click me &#60;/button&#62;</code>
                        </pre>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="event-name">data-go-ajax-callback</td>
                <td class="description"><?php esc_html_e('Creates the request ajax and returns the data from the function na in the file function.php', 'greyowl'); ?></td>
            </tr>
            <tr>
                <td class="example-code" colspan="2">
                    <div class="example-code-wrapper">
                        <pre class="example-code-box" data-page-type="example.html">
<code>&#60;button go-lightbox data-go-ajax-callback="example_callback_1"&#62; click me &#60;/button&#62;</code>
                        </pre>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="example-code" colspan="2">
                    <div class="example-code-wrapper">
                        <pre class="example-code-box" data-page-type="function.php">
<code>
gol_set_callback( 'example_callback_1', function( $params ){
    // your code ( return or echo )
});</code>
                        </pre>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="event-name">data-go-callback-params</td>
                <td class="description"><?php esc_html_e('With this attribute, you can pass parameters to the callback function', 'greyowl'); ?></td>
            </tr>
            <tr>
                <td class="example-code" colspan="2">
                    <div class="example-code-wrapper">
                        <pre class="example-code-box" data-page-type="example.html">
<code>&#60;button go-lightbox data-go-ajax-callback="example_callback_2" data-go-callback-params="example_params_2"&#62; click me &#60;/button&#62;</code>
                        </pre>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="example-code" colspan="2">
                    <div class="example-code-wrapper">
                        <pre class="example-code-box" data-page-type="script.js">
<code>
function example_params_2(){
    var obj_params = { param_key : 'param_value' };
    return obj_params;
};</code>
                        </pre>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="example-code" colspan="2">
                    <div class="example-code-wrapper">
                        <pre class="example-code-box" data-page-type="function.php">
<code>
gol_set_callback( 'example_callback_2', function( $params ){
    echo $params['param_key'];
});</code>
                        </pre>
                    </div>
                </td>
            </tr>
        </table>
    </section>
    <?php
}

add_action( 'gol_page_header', 'gol_setting_tabs_nav_page', 10 );
function gol_setting_tabs_nav_page(){

    $links_array = gol_get_page_links_array();

    $current = ( isset( $_GET['part'] ) && $_GET['part'] ) ? $_GET['part'] : 'settings';
    $current = ( array_key_exists( $current, $links_array ) ) ? $current : 'settings';

    ?>
    <div class="nav-tabs-wrapper">

        <nav class="tabs-nav-wrapp">
            <ul class="tabs-nav clear-block">

                <?php foreach ( $links_array as $key => $value ): ?>
                    <?php $current_class = ( $current == $key ) ? ' current' : ''; ?>

                    <li class="item-nav">
                        <a href="<?php echo $value['url']; ?>" class="link-btn<?php echo $current_class; ?>" title="<?php echo $value['name']; ?>" aria-label="<?php echo $value['name']; ?>"><?php echo $value['name']; ?></a>
                    </li>

                <?php endforeach; ?>

            </ul>
        </nav>

    </div>
    <?php
}

add_action( 'gol_page_setting', 'gol_field_blocks_start', 10 );
function gol_field_blocks_start(){

    $page_url = gol_get_page_links_array();

    ?>
    <div class="setting-blocks-wrapper">
        <div class="setting-blocks clear-block">
            <form class="" action="<?php echo $page_url['settings']['url']; ?>" method="post">
    <?php
    if ( function_exists('wp_nonce_field') ) {
        wp_nonce_field('grey_owl_lightbox_setup_form');
    }
}

add_action( 'gol_page_setting', 'gol_save_button_submit_before', 15 );
function gol_save_button_submit_before(){
    if( gol_is_settings_page() ): ?>
        <div class="field-column-12">
            <button class="preview-lightbox" go-lightbox data-go-image="<?php echo plugins_url( 'grey-owl-lightbox/assets/grey_owl_demo_page.jpg' ); ?>" type="button" title="<?php esc_html_e('preview lightbox', 'greyowl'); ?>" aria-label="<?php esc_html_e('preview lightbox', 'greyowl'); ?>">
                <span class="icon-box"><span class="goi-grey-owl"></span></span>
                <span class="text"><?php esc_html_e('preview lightbox', 'greyowl'); ?></span>
            </button>
            <p><?php esc_html_e('You can see the changes after saving the parameters.', 'greyowl'); ?></p>
            <p><span class="caution-m"><span class="goi-attention-filled"></span></span><?php esc_html_e('changes in the CSS file you can see only on the site', 'greyowl'); ?></p>
        </div>
    <?php endif; ?>

    <div class="field-column-12">
        <input type="submit" class="button-primary" name="gol_submit_form" value="<?php esc_html_e('Save options', 'greyowl'); ?>">
    </div>
    <?php
}

add_action( 'gol_page_setting', 'gol_page_fields_content', 20 );
function gol_page_fields_content(){
    $field_list = GreyOwllightboxOBJ::get_fields_list();

    if ( is_array( $field_list ) && $field_list ) {
        foreach ( $field_list as $rows ): ?>

        <div class="block-wrapper">

            <?php if( ( isset( $rows['row_title'] ) && $rows['row_title'] ) || ( isset( $rows['row_subtitle'] ) && $rows['row_subtitle'] ) ): ?>
                <div class="label-title-row">
            <?php endif; ?>

            <?php if( isset( $rows['row_title'] ) && $rows['row_title'] ): ?>
                <div class="label-row">
                    <h2 class="label-title">
                        <?php echo $rows['row_title']; ?>
                    </h2>
                </div>
            <?php endif; ?>

            <?php if( isset( $rows['row_subtitle'] ) && $rows['row_subtitle'] ): ?>
                <div class="label-subtitle-row">
                    <h3 class="label-subtitle">
                        <?php echo $rows['row_subtitle']; ?>
                    </h3>
                </div>
            <?php endif; ?>

            <?php if( ( isset( $rows['row_title'] ) && $rows['row_title'] ) || ( isset( $rows['row_subtitle'] ) && $rows['row_subtitle'] ) ): ?>
                </div>
            <?php endif; ?>

            <div class="fields-row">

                <?php foreach ( $rows['row'] as $field ){
                    gol_field_type( $field );
                } ?>

            </div>
        </div>

        <?php endforeach;
    }
}

//add_action( 'gol_page_setting', 'gol_save_field_input_padding_box', 30 );
function gol_save_field_input_padding_box(){
    ?>
    <div class="fields-row">

        <div class="field-column-3">
            <label for="">
                <span class="label-text">
                    <?php esc_html_e('Box padding top', 'greyowl'); ?>
                </span>
                <div class="input-wrapper">
                    <input id="" type="number" class="" data-alpha="true" name="gol_box_padding_top" value="">
                </div>
            </label>
        </div>

        <div class="field-column-3">
            <label for="">
                <span class="label-text">
                    <?php esc_html_e('Box padding right', 'greyowl'); ?>
                </span>
                <div class="input-wrapper">
                    <input id="" type="number" class="" data-alpha="true" name="gol_box_padding_right" value="">
                </div>
            </label>
        </div>

        <div class="field-column-3">
            <label for="">
                <span class="label-text">
                    <?php esc_html_e('Box padding bottom', 'greyowl'); ?>
                </span>
                <div class="input-wrapper">
                    <input id="" type="number" class="" data-alpha="true" name="gol_box_padding_bottom" value="">
                </div>
            </label>
        </div>

        <div class="field-column-3">
            <label for="">
                <span class="label-text">
                    <?php esc_html_e('Box padding left', 'greyowl'); ?>
                </span>
                <div class="input-wrapper">
                    <input id="" type="number" class="" data-alpha="true" name="gol_box_padding_left" value="">
                </div>
            </label>
        </div>

    </div>
    <?php
}

add_action( 'gol_page_setting', 'gol_save_button_submit_after', 140 );
function gol_save_button_submit_after(){
    ?>
    <div class="field-column-12">
        <input type="submit" class="button-primary" name="gol_submit_form" value="<?php esc_html_e('Save options', 'greyowl'); ?>">
    </div>
    <?php
}

add_action( 'gol_page_setting', 'gol_preview_lightbox_block', 140 );
function gol_preview_lightbox_block(){
    require_once GOL_MAIN_DIR . 'inc/lightbox.php';
}

add_action( 'gol_page_setting', 'gol_field_blocks_end', 145 );
function gol_field_blocks_end(){
    ?>
            </form>
        </div>
    </div>
    <?php
}

add_action( 'gol_page_end', 'gol_page_fields_list_end', 15 );
function gol_page_fields_list_end(){
    ?>
        </div>
    </div>
    <?php
}
