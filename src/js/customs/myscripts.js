import $ from "jquery";
import lightGallery from 'lightgallery';
// Plugins
import lgThumbnail from 'lightgallery/plugins/thumbnail';
import lgZoom from 'lightgallery/plugins/zoom';

$(document).ready(function ($) {
    function addStyle(styles) {
        var css = document.createElement('style');
        css.type = 'text/css';
        if (css.styleSheet)
            css.styleSheet.cssText = styles;
        else
            css.appendChild(document.createTextNode(styles));
        document.getElementsByTagName("head")[0].appendChild(css);
    }

    let screenWidth = $(window).width();
    if ($("#v").length) {
        let video_height = document.getElementById("v").offsetHeight;
        let m_top1 = document.getElementById("main_first_top").offsetHeight;
        let m_top2 = document.getElementById("header-wrapper").offsetHeight;
        let start_from = m_top1 + m_top2;
        // if (screenWidth >= 426) {
        //     video_height = video_height - 10;
        // }
        var styles = '.video_overlay:after {height: ' + video_height + 'px;top:' + start_from + 'px;}';
        addStyle(styles);
    }
    lightGallery(document.getElementById('lightgallery'), {
        plugins: [lgZoom, lgThumbnail],
        speed: 500,
    });
});


