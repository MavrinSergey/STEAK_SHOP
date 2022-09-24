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

//выбираем нужные элементы
let a = document.querySelectorAll('.link');

//перебираем все найденные элементы и вешаем на них события
[].forEach.call(a, function (el) {
    //вешаем событие
    el.onclick = function (e) {
        //производим действия
        let idStr = el.id;
        let idPopup = 'popup' + idStr
        let close = '.close' + idStr
        let popup = document.getElementById(idPopup),
        popupClose = document.querySelector(close);
        popup.style.display = 'block';
        popupClose.onclick = function () {
            popup.style.display = 'none';
        };
        window.onclick = function (e) {
            if (e.target == popup) {
                popup.style.display = 'none'
            }
        }
    }
});


