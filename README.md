## jQuery events
### image_url : opens image in lightbox

```javascript
jQuery('.button-class').GreyOwlLightbox('click', {

    image_url : 'https://your.site/image-path/image.jpg'
});
```
---
### gallery : opens images in lightbox gallery
### current_img : current image can also be set

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
