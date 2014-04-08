$(document).ready(function() {
    $('#slider').nivoSlider({
    	effect: 'fade',
    	pauseTime: 5000
    });

    $('div.gallery_row').each(function() {
    	$(this).find('div.span30').height($(this).find('div.span70').height());
    });

    $('div.news').each(function() {
        var lcol = $(this).find('div.photo');
        var rcol = $(this).find('div.details');
        var hght = (lcol.height() > rcol.height() ? lcol.height() : rcol.height());

        lcol.height(hght);
        rcol.height(hght);
    });

    if (PATH1 == 'ruffin-gallery') {

        var slideshows = $('div.ss').length;

        for (i=0; i<slideshows; i++) {

            $('#slideshow' + i).cycle({
                fx:     'fade',
                speed:   500,
                timeout: 0,
                pager:  '#nav' + i,
                before: function() { 
                    $('#caption' + i).html(this.alt);
                }
            });

        }

    }
});
