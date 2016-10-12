$(document).ready(function () {
    'use strict';

    /*-----------------------------------------------------------------------------------*/
    /*	ISOTOPE PORTFOLIO GRID
	/*-----------------------------------------------------------------------------------*/
    var $portfoliogrid = $('.portfolio-grid .isotope');
    $portfoliogrid.isotope({
        itemSelector: '.item',
        transitionDuration: '0.7s',
        masonry: {
            columnWidth: $portfoliogrid.width() / 12
        },
        layoutMode: 'masonry'
    });
    $(window).resize(function () {
        $portfoliogrid.isotope({
            masonry: {
                columnWidth: $portfoliogrid.width() / 12
            }
        });
    });
    $('.portfolio-grid .isotope-filter').on('click', '.button', function () {
        var filterValue = $(this).attr('data-filter');
        $portfoliogrid.isotope({
            filter: filterValue
        });
    });
    $('.portfolio-grid .button-group').each(function (i, buttonGroup) {
        var $buttonGroup = $(buttonGroup);
        $buttonGroup.on('click', '.button', function () {
            $buttonGroup.find('.is-checked').removeClass('is-checked');
            $(this).addClass('is-checked');
        });
    });
    $portfoliogrid.imagesLoaded(function () {
        $portfoliogrid.isotope('layout');
    });
    /*-----------------------------------------------------------------------------------*/
    /*	ISOTOPE GRID VIEW COL3
    /*-----------------------------------------------------------------------------------*/
    var $gridviewcol4 = $('.grid-view.col4 .isotope');
    $gridviewcol4.isotope({
        itemSelector: '.grid-view-post',
        transitionDuration: '0.6s',
        masonry: {
            columnWidth: '.col-sm-6.col-md-3'
        },
        layoutMode: 'masonry'
    });
    $(window).resize(function () {
        $gridviewcol4.isotope({
            masonry: {
                columnWidth: '.col-sm-6.col-md-3'
            }
        });
    });
    $gridviewcol4.imagesLoaded(function () {
        $gridviewcol4.isotope('layout');
    });
    /*-----------------------------------------------------------------------------------*/
    /*	ISOTOPE GRID VIEW COL3
    /*-----------------------------------------------------------------------------------*/
    var $gridviewcol3 = $('.grid-view.col3 .isotope');
    $gridviewcol3.isotope({
        itemSelector: '.grid-view-post',
        transitionDuration: '0.6s',
        masonry: {
            columnWidth: '.col-sm-6.col-md-4'
        },
        layoutMode: 'masonry'
    });
    $(window).resize(function () {
        $gridviewcol3.isotope({
            masonry: {
                columnWidth: '.col-sm-6.col-md-4'
            }
        });
    });
    $gridviewcol3.imagesLoaded(function () {
        $gridviewcol3.isotope('layout');
    });
    /*-----------------------------------------------------------------------------------*/
    /*	ISOTOPE GRID VIEW COL2
    /*-----------------------------------------------------------------------------------*/
    var $gridviewcol2 = $('.grid-view.col2 .isotope');
    $gridviewcol2.isotope({
        itemSelector: '.grid-view-post',
        transitionDuration: '0.6s',
        masonry: {
            columnWidth: '.col-md-6.col-sm-12'
        },
        layoutMode: 'masonry'
    });
    $(window).resize(function () {
        $gridviewcol2.isotope({
            masonry: {
                columnWidth: '.col-md-6.col-sm-12'
            }
        });
    });
    $gridviewcol2.imagesLoaded(function () {
        $gridviewcol2.isotope('layout');
    });
    
});