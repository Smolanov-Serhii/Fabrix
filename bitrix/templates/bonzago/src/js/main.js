$(document ).ready(function() {

    var catswiper = new Swiper(".categories__list", {
        slidesPerView: 2,
        spaceBetween: 20,
        draggable: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        pagination: {
            el: ".swiper-pagination",
        },
    });

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
        if($(this).hasClass('active')){
            var doAction = 'delete';
        $('.fav_page').find('.favor[data-item="'+favorID+'"]').parents('.cat_list').remove(); // Моментальное удаление, если мы на странице избранного
        }
    else
        {
            var doAction = 'add';

            addFavorite(favorID, doAction);
        }
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
            if(result == 1){ // Если всё чётко, то выполняем действия, которые показывают, что данные отправлены :)
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
        error: function(jqXHR, textStatus, errorThrown){ // Если ошибка, то выкладываем печаль в консоль
            console.log('Error: '+ errorThrown);
        }
    });
}
/* Избранное */

