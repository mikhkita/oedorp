$(document).ready(function(){

    var isDesktop = false,
        isTablet = false,
        isMobile = false;

    function resize(){
       if( typeof( window.innerWidth ) == 'number' ) {
            myWidth = window.innerWidth;
            myHeight = window.innerHeight;
        } else if( document.documentElement && ( document.documentElement.clientWidth || 
        document.documentElement.clientHeight ) ) {
            myWidth = document.documentElement.clientWidth;
            myHeight = document.documentElement.clientHeight;
        } else if( document.body && ( document.body.clientWidth || document.body.clientHeight ) ) {
            myWidth = document.body.clientWidth;
            myHeight = document.body.clientHeight;
        }

        if( myWidth > 1024 ){
            isDesktop = true;
            isTablet = false;
            isMobile = false;
        }else if( myWidth > 767 ){
            isDesktop = false;
            isTablet = true;
            isMobile = false;
        }else{
            isDesktop = false;
            isTablet = false;
            isMobile = true;
        }
    }
    $(window).resize(resize);
    resize();

    $.fn.placeholder = function() {
        if(typeof document.createElement("input").placeholder == 'undefined') {
            $('[placeholder]').focus(function() {
                var input = $(this);
                if (input.val() == input.attr('placeholder')) {
                    input.val('');
                    input.removeClass('placeholder');
                }
            }).blur(function() {
                var input = $(this);
                if (input.val() == '' || input.val() == input.attr('placeholder')) {
                    input.addClass('placeholder');
                    input.val(input.attr('placeholder'));
                }
            }).blur().parents('form').submit(function() {
                $(this).find('[placeholder]').each(function() {
                    var input = $(this);
                    if (input.val() == input.attr('placeholder')) {
                        input.val('');
                    }
                });
            });
        }
    }
    $.fn.placeholder();

    $(".b-4-tab-item").on('click', function(){
        if (!$(this).hasClass('active')) {
            $('.b-4-right-item').each(function(){
                $(this).hide();
            });

            $('.b-4-tab-item').each(function(){
                $(this).removeClass('active');
            })

            $(this).addClass('active');
            $($(this).attr('href')).show();

            $(".b-4-right-top").each(function() {
                $(this).slick('setPosition');
            });
            
        }

        return false;
    });

    if($(".sticky").length && isDesktop){
        var elements = document.querySelectorAll('.sticky');
        Stickyfill.add(elements);
    }

    $(".b-4-right-top").each(function() {
        $(this).slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true,
            cssEase: 'ease', 
            speed: 600,
            arrows: true,
            dots: false,
            prevArrow: '<div class="slick-arrow icon-arrow-left"></div>',
            nextArrow: '<div class="slick-arrow icon-arrow-right"></div>',
        });
    });

});

function yandexMapInit (ymaps) {
    if(document.getElementById("b-contacts-map")){
        var myMap = new ymaps.Map("b-contacts-map", {
            center: [56.498310, 84.943989],
            zoom: 16,
            controls: ['default']
        });
        myPlacemark = new ymaps.Placemark([56.498310, 84.943989], {}, {
            // Опции.
            // Необходимо указать данный тип макета.
            iconLayout: 'default#image',
            // Своё изображение иконки метки.
            // iconImageHref: '/local/templates/main/html/i/map-mark.svg',
            // // Размеры метки.
            // iconImageSize: [42, 60],
            // // Смещение левого верхнего угла иконки относительно
            // // её "ножки" (точки привязки).
            // iconImageOffset: [-21, -60]
        });
        myMap.geoObjects.add(myPlacemark)
    }
}
