import $ from 'jquery';
import lightGallery from 'lightgallery';
// core version + navigation, pagination modules:
import Swiper from 'swiper/bundle';
import AOS from 'aos';

// Plugins
import lgThumbnail from 'lightgallery/plugins/thumbnail';
import lgZoom from 'lightgallery/plugins/zoom';
import validate from 'jquery-validation/dist/jquery.validate.min';
window.jQuery = $;
window.$ = $;
AOS.init();
$(document).ready(function ($) {
  // HTML SCSS JSResult Skip Results Iframe
  const swiper = new Swiper('.swiper', {
    effect: 'cube',
    grabCursor: true,
    cubeEffect: {
      shadow: true,
      slideShadows: true,
      shadowOffset: 20,
      shadowScale: 0.94
    },
    autoplay: {
      delay: 5000
    },
    pagination: {
      el: '.swiper-pagination'
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev'
    }
  });

  new Swiper('.swiper_blog', {
    slidesPerView: 4,
    spaceBetween: 30,
    grabCursor: true,
    autoplay: {
      delay: 5000
    },
    pagination: {
      el: '.swiper-pagination'
    },
    breakpoints: {
      // when window width is >= 320px
      320: {
        slidesPerView: 2,
        spaceBetween: 20
      },
      // when window width is >= 480px
      480: {
        slidesPerView: 2,
        spaceBetween: 30
      },
      // when window width is >= 640px
      640: {
        slidesPerView: 4,
        spaceBetween: 40
      }
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev'
    }
  });

  new Swiper('.swiper_whyus', {
    slidesPerView: 12,
    spaceBetween: 5,
    grabCursor: true,
    pagination: {
      el: '.swiper-pagination'
    },
    breakpoints: {
      // when window width is >= 320px
      320: {
        slidesPerView: 2,
        spaceBetween: 20
      },
      // when window width is >= 480px
      480: {
        slidesPerView: 2,
        spaceBetween: 30
      },
      // when window width is >= 640px
      640: {
        slidesPerView: 4,
        spaceBetween: 40
      }
    },
    autoplay: {
      delay: 5000
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev'
    }
  });

  new Swiper('.swiper_demarcation', {
    slidesPerView: 2,
    spaceBetween: 5,
    grabCursor: true,
    pagination: {
      el: '.swiper-pagination'
    },
    breakpoints: {
      // when window width is >= 320px
      320: {
        slidesPerView: 1,
        spaceBetween: 20
      },
      // when window width is >= 480px
      480: {
        slidesPerView: 1,
        spaceBetween: 30
      },
      // when window width is >= 640px
      640: {
        slidesPerView: 2,
        spaceBetween: 40
      }
    },
    autoplay: {
      delay: 5000
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev'
    }
  });
  new Swiper('.swiper_deed_registration', {
    slidesPerView: 2,
    spaceBetween: 5,
    grabCursor: true,
    pagination: {
      el: '.swiper-pagination'
    },
    breakpoints: {
      // when window width is >= 320px
      320: {
        slidesPerView: 1,
        spaceBetween: 20
      },
      // when window width is >= 480px
      480: {
        slidesPerView: 1,
        spaceBetween: 30
      },
      // when window width is >= 640px
      640: {
        slidesPerView: 2,
        spaceBetween: 40
      }
    },
    autoplay: {
      delay: 5000
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev'
    }
  });

  $('.view_pdf').click(function () {
    $('.preview_pdf').show();
    $('#pdf_iframe').attr('src', $(this).attr('data-link'));
  });

  $('#hidePdfViewerBtn').click(function () {
    $('.preview_pdf').hide();
    $('#pdf_iframe').attr('src', '');
  });

  function addStyle (styles) {
    const css = document.createElement('style');
    css.type = 'text/css';
    if (css.styleSheet) { css.styleSheet.cssText = styles; } else { css.appendChild(document.createTextNode(styles)); }
    document.getElementsByTagName('head')[0].appendChild(css);
  }

  const screenWidth = $(window).width();
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

  const ajaxCall = function (type, data, callback) {
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
  };
  // Contact Form Submit
  const successElement = $('#form-message-success');
  const warningElement = $('#form-message-warning');
  const contactFormElement = $('#contactForm');
  warningElement.hide();
  successElement.hide();
  const contactForm = function () {
    if (contactFormElement.length > 0) {
      contactFormElement.validate({
        rules: {
          name: 'required',
          subject: 'required',
          phone: {
            required: true,
            minlength: 10,
            maxlength: 10,
            number: true
          },
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
          const $submit = $('.submitting');
          const waitText = 'Submitting...';
          ajaxCall('POST', $(form).serialize(), function (response) {
            if (response.status === true) {
              successElement.html(response.msg);
              successElement.show();
              contactFormElement.trigger('reset');
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
  const floatingContactFormElement = $('#floatingcontactForm');
  const floatingContactForm = function () {
    if (floatingContactFormElement.length > 0) {
      floatingContactFormElement.validate({
        rules: {
          name: 'required',
          phone: {
            required: true,
            minlength: 10,
            maxlength: 10,
            number: true
          },
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
          const $submit = $('.submitting');
          const waitText = 'Submitting...';
          ajaxCall('POST', $(form).serialize(), function (response) {
            if (response.status === true) {
              successElement.html(response.msg);
              successElement.show();
              floatingContactFormElement.trigger('reset');
            } else {
              warningElement.html(response.msg);
              warningElement.show();
            }
          });
        }
      });
    }
  };
  floatingContactForm();
  const successSubscriberElement = $('#form-message-subcriber-success');
  const warningSubscriberElement = $('#form-message-subcriber-warning');
  warningSubscriberElement.hide();
  successSubscriberElement.hide();
  const subscriberFormElement = $('#subcribeForm');
  const subcribeMainForm = function () {
    if (subscriberFormElement.length > 0) {
      subscriberFormElement.validate({
        rules: {
          email: {
            required: true,
            email: true
          }
        },
        /* submit via ajax */

        submitHandler: function (form) {
          const $submit = $('.submitting');
          const waitText = 'Submitting...';
          ajaxCall('POST', $(form).serialize(), function (response) {
            if (response.status === true) {
              successSubscriberElement.html(response.msg);
              successSubscriberElement.show();
              subscriberFormElement.trigger('reset');
            } else {
              warningSubscriberElement.html(response.msg);
              warningSubscriberElement.show();
            }
          });
        }
      });
    }
  };
  subcribeMainForm();

  $('.readmore-link').click(function (e) {
    // record if our text is expanded
    const isExpanded = $(e.target).hasClass('expand');

    // close all open paragraphs
    $('.readmore.expand').removeClass('expand');
    $('.readmore-link.expand').removeClass('expand');

    // if target wasn't expand, then expand it
    if (!isExpanded) {
      $(e.target).parent('.readmore').addClass('expand');
      $(e.target).addClass('expand');
    }
  });
});
