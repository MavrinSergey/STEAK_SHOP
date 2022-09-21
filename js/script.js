const swiper = new Swiper('.swiper', {
    // Optional parameters
    loop: true,
    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    // And if we need scrollbar
    scrollbar: {
        el: '.swiper-scrollbar',
    },
    // Default parameters
    slidesPerView: 4,
    spaceBetween: 30,
    // Responsive breakpoints
    breakpoints: {
        // when window width is >= 320px
        320: {
            slidesPerView: 2,
            spaceBetween: 10
        },
        // when window width is >= 480px
        992: {
            slidesPerView: 3,
            spaceBetween: 30
        },
        // when window width is >= 640px
        1200: {
            slidesPerView: 4,
            spaceBetween: 30
        }
    }
});





// Анимируем модальное окноqqq


    $(document).ready(function () {
    //Скрыть PopUp при загрузке страницы
    PopUpHide();
});

    //Функция отображения PopUp
    function PopUpShow() {
    $("#popup1").show();
}

    //Функция скрытия PopUp
    function PopUpHide() {
    $("#popup1").hide();
}