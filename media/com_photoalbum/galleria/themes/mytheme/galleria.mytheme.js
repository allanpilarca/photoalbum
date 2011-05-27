/**
 * @preserve Galleria Classic Theme 2011-02-14
 * http://galleria.aino.se
 *
 * Copyright (c) 2011, Aino
 * Licensed under the MIT license.
 */
 
/*global jQuery, Galleria */

(function($) {

Galleria.addTheme({
    name: 'mytheme',
    author: 'John Doe, http://example.com',
    version: 1,
    css: 'galleria.mytheme.css',
    defaults: {
        // add your own default options here
        transition: 'fade',
        imagecrop: true,
    },
    init: function(options) {

        var touch = Galleria.TOUCH;

        /*
        // add some elements
        this.addElement('thumb-description');
        this.append({
            'thumbnails' : 'thumb-description'
        });
        */

        /*
        this.bind('image', function(e) {
            $(e.imageTarget).css('display', 'none');
        });
        */
        // bind some stuff
        /*
        this.bind('thumbnail', function(e) {
            $(e.thumbTarget).click(this.proxy(function() {
               this.openLightbox();
            }));
        });
        */
        
        this.bind('thumbnail', function(e) {
            $(e.thumbTarget).addElement('thumb-description');
            $(e.thumbTarget).append({'thumbnails' : 'thumb-description'});
        });

        // bind a loader animation:
        this.bind('loadstart', function(e) {
            if (!e.cached) {
                this.$('loader').show();
            }
        });

        this.bind('loadfinish', function(e) {
            this.$('loader').hide();
        });
    }
});
}(jQuery));
