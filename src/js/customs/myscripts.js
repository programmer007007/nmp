import $ from "jquery";
import lightGallery from 'lightgallery';
// core version + navigation, pagination modules:
import Swiper from 'swiper/bundle';

// Plugins
import lgThumbnail from 'lightgallery/plugins/thumbnail';
import lgZoom from 'lightgallery/plugins/zoom';
import validate from 'jquery-validation/dist/jquery.validate.min';

$(document).ready(function ($) {
    //HTML SCSS JSResult Skip Results Iframe
    var swiper = new Swiper(".swiper", {
        effect: "cube",
        grabCursor: true,
        cubeEffect: {
            shadow: true,
            slideShadows: true,
            shadowOffset: 20,
            shadowScale: 0.94,
        },
        pagination: {
            el: ".swiper-pagination",
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });

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
    // if ($("#v").length) {
    //     let video_height = document.getElementById("v").offsetHeight;
    //     let m_top1 = document.getElementById("main_first_top").offsetHeight;
    //     let m_top2 = document.getElementById("header-wrapper").offsetHeight;
    //     let start_from = m_top1 + m_top2;
    //     // if (screenWidth >= 426) {
    //     //     video_height = video_height - 10;
    //     // }
    //     var styles = '.video_overlay:after {height: ' + video_height + 'px;top:' + start_from + 'px;}';
    //     addStyle(styles);
    // }
    lightGallery(document.getElementById('lightgallery'), {
        plugins: [lgZoom, lgThumbnail],
        speed: 500,
        licenseKey: '1234-1234-123-1234'
    });

    var ajaxCall = function (type, data, callback) {
        jQuery.ajax({
            type: type,
            url: window.ajaxurl,
            dataType: 'JSON',
            data: data,
            success: function (res) {
                callback(res);
            },
            error: function (error) {
                console.log(error);
            }
        });
    }
    // Contact Form Submit
    let successElement = $('#form-message-success');
    let warningElement = $('#form-message-warning');
    let contactFormElement = $("#contactForm");
    warningElement.hide();
    successElement.hide();
    var contactForm = function () {
        if (contactFormElement.length > 0) {
            contactFormElement.validate({
                rules: {
                    name: "required",
                    subject: "required",
                    phone: "required",
                    email: {
                        required: true,
                        email: true
                    },
                    message: {
                        required: true,
                        minlength: 5
                    }
                },
                /* submit via ajax */

                submitHandler: function (form) {
                    debugger;
                    var $submit = $('.submitting'),
                        waitText = 'Submitting...';
                    ajaxCall("POST", $(form).serialize(), function (response) {
                        if (response.status === true) {
                            successElement.html(response.msg);
                            successElement.show();
                            contactFormElement.trigger("reset");
                        } else {
                            warningElement.html(response.msg);
                            warningElement.show();
                        }
                    });
                }
            });
        }
    };
    contactForm();

});


