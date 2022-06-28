# pixel.php

Serves a blank image between 1x1 pixels to 1000x1000 pixels. The image is natively generated .png file.
It is not stretched, nor shrinked. The content is, howerver, empty. No watermarks, no advertising.

For example, [view how it appears](https://transparent-images.herokuapp.com/) - as deployed manually on Heroku.

## Frequently Asked Questions

**Question**: Can I use image borders?<br/>
**Answer**: Rather, Use CSS.

**Question**: How do I install it?<br/>
**Answer**: Make src/image/ folder as the root of your image server, eg. image.example.com.

Then, you will be able to use: `<img src="DOMAIN/?w=100&amp;h=100" />` for a 100x100 sized image.

**Question**: Can it support multiple hosting server?<br/>
**Answer**: It currently supports apache via .htaccess. You can change it yourself, if you have a different hosting provider.
