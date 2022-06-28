# pixel.php

Serves a blank image between 1x1 pixels to 1000x1000 pixels. The image is natively generated .png file.
It is not stretched or shirnked. The content is, howerver, empty. No watermarks, no advertising.

For example, [view how it appears](https://transparent-images.herokuapp.com/) - as deployed manually on Heroku.

## Frequently Asked Questions

**Question**: Can I use image borders?
**Answer**: Rather, Use CSS.

**Question**: How do I install it?
**Answer**: Make src/<image> folder as your image server as the root of your image server, eg. images.example.com.

**Question**: Can it support multiple hosting server?
**Answer**: It currently supports apache via .htaccess. You can change it yourself, if you have a different hosting provider.
