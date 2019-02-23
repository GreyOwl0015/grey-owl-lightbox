## jQuery events
### image_url
opens image in lightbox
```javascript
// javascript

jQuery('.button-class').GreyOwlLightbox('click', {

    image_url : 'https://your.site/image-path/image.jpg'
});
```
---
### gallery
opens images in lightbox gallery
### current_img
current image can also be set
```javascript
// javascript

jQuery('.button-class').GreyOwlLightbox('click', {

    gallery : {
        1 : 'https://your.site/image-path/image-1.jpg',
        2 : 'https://your.site/image-path/image-2.jpg',
        3 : 'https://your.site/image-path/image-3.jpg',
    },
    current_img : 2
});
```
---
### embed_url
opens video in lightbox, returns an embed, works on the basis of a wordpress object
### max_width
maximum video width
```javascript
// javascript

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
});
```
---
### dom_html_element
opens html element in lightbox (does not copy javascript events)
### before_open
This event has one parameter: is parameter returns the code as a jQuery object
### variables
replaces variables in html code ( %1%, %example% )
### html element attribute [data-gol-content]
hides an html element on the page
```html
/* html */

<div class="inside-element-class" data-gol-content>
    <p> Your name: %1% </p>
    <p> Your age: %2% </p>
    <p> Your description: %var_desc% </p>
</div>
```
```javascript
// javascript

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
});
```
---
### callback_ajax
This event makes an Ajax request, to register the request, in the function.php file use the function gol_set_callback ( 'event_name', 'your_function' );
### callback_ajax_params
this event serves to transfer parameters to the php function.
### before_open
This event has two parameters:
1. the first parameter returns the code as a jQuery object
2. transfer data from the php file to the second parameter of the event using this function "gol_callback_parameters( array() )"
```javascript
// javascript

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
});
```
```php
// php

if( function_exists('gol_set_callback') ){ // in order to avoid errors if suddenly the plugin will be disabled
    gol_set_callback( 'your_example_function_1', function( $params ){

        gol_callback_parameters( array( 'your_key' => 'yout value' ) );  // returns data to the second parameter of the "before_open" event

        echo '<p> your name: ' . $params['name'] . '</p>';
        echo '<p> your age: ' . $params['age'] . '</p>';
    });
}
```
---
### GreyOwlLightbox( 'set_content', your_html_content );
add content to (open) lightbox
```javascript
// javascript

var your_html_content = '<p>Your demo content</p>';
GreyOwlLightbox( 'set_content', your_html_content );
```
---
### GreyOwlLightbox( 'close' );
close the (open) lightbox
---
## Element attributes
### go-lightbox
To activate the html attributes in the button you need to add the attribute “go-lightbox”
```html
/* html */

<button go-lightbox> click me </button>
```
---
### data-go-image
opens image in lightbox
```html
/* html */

<button go-lightbox data-go-image="https://your.site/image-path/image.jpg"> click me </button>
```
### data-go-video-url
opens video in lightbox, returns an embed, works on the basis of a wordpress object
### data-go-video-widt
maximum video width
```html
/* html */

<button go-lightbox data-go-video-url="https://www.example-tube.com/your-video" data-go-video-width="1200"> click me </button>
```
---
### data-go-ajax-callback
Creates the request ajax and returns the data from the function na in the file function.php
```html
/* html */

<button go-lightbox data-go-ajax-callback="example_callback_1"> click me </button>
```
```php
// php

gol_set_callback( 'example_callback_1', function( $params ){
    // your html code ( return or echo )
});
```
---
### data-go-callback-params
With this attribute, you can pass parameters to the callback function
```html
/* html */

<button go-lightbox data-go-ajax-callback="example_callback_2" data-go-callback-params="example_params_2"> click me </button>
```
```javascript
// javascript

function example_params_2(){
    var obj_params = { param_key : 'param_value' };
    return obj_params;
};
```
```php
// php

gol_set_callback( 'example_callback_2', function( $params ){
    echo $params['param_key'];
});
```
