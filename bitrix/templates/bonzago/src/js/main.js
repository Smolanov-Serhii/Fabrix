$(document ).ready(function() {

    if ($('.availability__quantity').length){
        $( ".add-button-peace" ).each(function( index ) {
            $(this).click(function(){
                    $(this).closest('.availability__quantity').addClass('added');
                    CurrentValue = $(this).closest('.availability__quantity').find('input').val();
                    CurrentValue++;
                    $(this).closest('.availability__quantity').find('input').val(CurrentValue);
            });
        });

    }

    if ($('.single-product__wrapper').length){

        var prevproduct = new Swiper(".product-item-thumb-slider", {
            spaceBetween: 20,
            slidesPerView: 5,
            loop: true,
            watchSlidesVisibility: true,
            watchSlidesProgress: true,
            navigation: {
                nextEl: ".wrapper-thumb-next",
            },
        });
        var mainproduct = new Swiper(".product-item-detail-slider-container", {
            spaceBetween: 0,
            thumbs: {
                swiper: prevproduct,
            },
        });
    }

    if ($('.js-show-all-property').length){
        $('.js-show-all-property').on('click', function(){
            $(this).toggleClass('active');
            $('.addition-param').toggleClass('hidden');
        });
    }

    if ($('.js-full-description').length){
        $('.js-full-description').on('click', function(){
            $(this).toggleClass('active');
            $('.single-product__about-desc').toggleClass('active');
        });
    }

    function videoId(button) {
        var $videoUrl = button.attr("data-video");
        if ($videoUrl !== undefined) {
            var $videoUrl = $videoUrl.toString();
            var srcVideo;

            if ($videoUrl.indexOf("youtube") !== -1) {
                var et = $videoUrl.lastIndexOf("&");
                if (et !== -1) {
                    $videoUrl = $videoUrl.substring(0, et);
                }
                var embed = $videoUrl.indexOf("embed");
                if (embed !== -1) {
                    $videoUrl =
                        "https://www.youtube.com/watch?v=" +
                        $videoUrl.substring(embed + 6, embed + 17);
                }

                srcVideo =
                    "https://www.youtube.com/embed/" +
                    $videoUrl.substring($videoUrl.length - 11, $videoUrl.length) +
                    "?autoplay=1&mute=1&loop=1&playlist=" +
                    $videoUrl.substring($videoUrl.length - 11, $videoUrl.length) +
                    "";
            } else if ($videoUrl.indexOf("youtu") !== -1) {
                var et = $videoUrl.lastIndexOf("&");
                if (et !== -1) {
                    $videoUrl = $videoUrl.substring(0, et);
                }
                var embed = $videoUrl.indexOf("embed");
                if (embed !== -1) {
                    $videoUrl =
                        "https://youtu.be/" +
                        $videoUrl.substring(embed + 6, embed + 17);
                }

                srcVideo =
                    "https://www.youtube.com/embed/" +
                    $videoUrl.substring($videoUrl.length - 11, $videoUrl.length) +
                    "?autoplay=1&mute=1&loop=1&playlist=" +
                    $videoUrl.substring($videoUrl.length - 11, $videoUrl.length) +
                    "";

            } else if ($videoUrl.indexOf("vimeo") !== -1) {
                srcVideo =
                    "https://player.vimeo.com/video/" +
                    $videoUrl
                        .substring($videoUrl.indexOf(".com") + 5, $videoUrl.length)
                        .replace("/", "") +
                    "?autoplay=1";


            } else if ($videoUrl.indexOf("mp4") !== -1) {
                return (
                    '<video loop playsinline autoplay><source src="' +
                    $videoUrl +
                    '" type="video/mp4"></video>'
                );
            } else {
                alert(
                    "The video assigned is not from Youtube, Vimeo or MP4, remember to enter the correct complete video link .\n - Youtube: https://www.youtube.com/watch?v=43ngkc2Ejgw\n - Vimeo: https://vimeo.com/111939668\n - MP4 https://server.com/file.mp4"
                );
                return false;
            }
            return (
                '<iframe src="' +
                srcVideo +
                '" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'
            );
        } else {
            alert("Не указан файл видео.");
            return false;
        }
    }

    $(".lets-play").click(function (e) {
        e.preventDefault();
        var $theVideo = videoId($(this));
        if ($theVideo) {
            $("#video-wrap")
                .html(
                    '<span class="video-overlay"></span><div class="video-container">' +
                    $theVideo +
                    '</div><button class="close-video">x</button>'
                )
                .addClass("active");
        }
    });

    $(document).on("click", ".close-video, .video-overlay", function () {
        $("#video-wrap").empty().removeClass("active");
    });


    if ($('.single-producer__slider').length){
        var MediGalery = new Swiper(".single-producer__slider", {
            slidesPerView: 3,
            spaceBetween: 20,
            draggable: true,
            loop: true,
            pagination: {
                el: ".categories__navigates .single-producer-pag",
                clickable: true,
            },
            navigation: {
                nextEl: ".categories__navigates .swiper-button-next",
                prevEl: ".categories__navigates .swiper-button-prev",
            },

        });
    }

    if ($('.categories__list').length){
        var catswiper = new Swiper(".categories__list", {
            slidesPerView: 2,
            spaceBetween: 20,
            loop: true,
            draggable: true,
            autoplay: {
                delay: 4000,
            },
            navigation: {
                nextEl: ".categories__container .swiper-button-next",
                prevEl: ".categories__container .swiper-button-prev",
            },
            pagination: {
                el: ".categories__container .swiper-pagination",
                clickable: true,
            },
        });
    }


    if ($('.news-list__item-desc').length){
        $('.news-list__item-desc .shov-more').on('click', function(){
            var Parrent = $(this).closest('.news-list__item-desc');
            Parrent.find('.part').fadeToggle(0);
            Parrent.find('.full').fadeToggle(0);
            $(this).toggleClass('showed');
            // function ShovFull(){
            //     Parrent.find('.full').fadeToggle();
            // }
            // setTimeout(function(){
            //     ShovFull();
            // }, 0);
        });

    }

    if ($('.about-page__map').length){
        if (  jQuery(window).width() >= 1100 ) {
            var FirstCoord = 55.754755;
            var SecondCoord = 37.592680;

            var CenterFirstCoord = 55.754555;
            var CenterSecondCoord = 37.589980;
        } else {
            var FirstCoord = 53.925701;
            var SecondCoord = 30.341069;

            var CenterFirstCoord = FirstCoord;
            var CenterSecondCoord = SecondCoord;
        }

        ymaps.ready(function () {
            var IconUrl = $('.about-page__map').data('icon');
            var myMap = new ymaps.Map('map', {
                    center: [CenterFirstCoord, CenterSecondCoord],
                    controls: [],
                    zoom: 17
                }, {
                    searchControlProvider: true
                }),

                // Создаём макет содержимого.
                MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
                    '<div style="color: #FFFFFF; font-weight: bold;">$[properties.iconContent]</div>'
                ),


                myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
                }, {
                    // Опции.
                    // Необходимо указать данный тип макета.
                    // Своё изображение иконки метки.
                    iconImageHref: "",
                    // Размеры метки.
                    iconImageSize: [0, 0],
                    // Смещение левого верхнего угла иконки относительно
                    // её "ножки" (точки привязки).
                }),
                myPlacemarkWithContent = new ymaps.Placemark([FirstCoord, SecondCoord], {
                }, {
                    // Опции.
                    // Необходимо указать данный тип макета.
                    iconLayout: 'default#imageWithContent',
                    // Своё изображение иконки метки.
                    iconImageHref: IconUrl,
                    // Размеры метки.
                    iconImageSize: [40, 45],
                    // Смещение левого верхнего угла иконки относительно
                    // её "ножки" (точки привязки).
                    iconImageOffset: [-20, -22],
                    // Смещение слоя с содержимым относительно слоя с картинкой.
                    iconContentOffset: [15, 15],
                    // Макет содержимого.
                    iconContentLayout: MyIconContentLayout
                });
            myMap.behaviors.disable('scrollZoom');
            myMap.geoObjects
                // .add(myPlacemark)
                .add(myPlacemarkWithContent);
        });
    }

});

$(document).ready(function() {
    /* Favorites */
    $('.favor').on('click', function(e) {
        var favorID = $(this).attr('data-item');
        if($(this).hasClass('active'))
            var doAction = 'delete';
        else
            var doAction = 'add';

        addFavorite(favorID, doAction);
    });
    /* Favorites */
});
/* Избранное */
function addFavorite(id, action)
{
    var param = 'id='+id+"&action="+action;
    $.ajax({
        url:     '/local/ajax/favorites.php', // URL отправки запроса
        type:     "GET",
        dataType: "html",
        data: param,
        success: function(response) { // Если Данные отправлены успешно
            var result = $.parseJSON(response);
            if(result == 1){ // Если всё чётко, то выполняем действия, которые показывают, что данные отправлены
                $('.favor[data-item="'+id+'"]').addClass('active');
                var wishCount = parseInt($('#want .col').html()) + 1;
                $('#want .col').html(wishCount); // Визуально меняем количество у иконки
            }
            if(result == 2){
                $('.favor[data-item="'+id+'"]').removeClass('active');
                var wishCount = parseInt($('#want .col').html()) - 1;
                $('#want .col').html(wishCount); // Визуально меняем количество у иконки
            }
        },
        error: function(jqXHR, textStatus, errorThrown){ // Ошибка
            console.log('Error: '+ errorThrown);
        }
    });
}
/* Избранное */

