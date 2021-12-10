import $ from "jquery";
$(document).ready(function($){
    var _scroll = true, _timer = false, _floatbox = $("#contact_form"), _floatbox_opener = $(".contact-opener") ;
    _floatbox.css("right", "-299px"); //initial contact form position

    //Contact form Opener button
    _floatbox_opener.click(function(){
        if (_floatbox.hasClass('visible')){
            _floatbox.animate({"right":"-299px"}, {duration: 300}).removeClass('visible');
        }else{
            _floatbox.animate({"right":"0px"},  {duration: 300}).addClass('visible');
        }
    });
    //Effect on Scroll
    $(window).scroll(function(){
        if(_scroll){
            _floatbox.animate({"top": "30px"},{duration: 300});
            _scroll = false;
        }
        if(_timer !== false){ clearTimeout(_timer); }
        _timer = setTimeout(function(){_scroll = true;
            _floatbox.animate({"top": "70px"},{easing: "linear"}, {duration: 500});}, 400);
    });
});