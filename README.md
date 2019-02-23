## jQuery events
### image_url
opens image in lightbox
```javascript
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
<div class="inside-element-class" data-gol-content>
    <p> Your name: %1% </p>
    <p> Your age: %2% </p>
    <p> Your description: %var_desc% </p>
</div>
```
```javascript
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
