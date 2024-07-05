// Выбор формы и добавление обработчика события
const callForm = document.querySelector('#call__form');
if (callForm) {
    callForm.addEventListener('submit', (event) => {
        event.preventDefault();
        const target = callForm.querySelector('.call__form_btn').dataset.target;
        const phone = callForm.querySelector('#call__phone').value;
        const modal = document.querySelector(target);
        modal.querySelector("#modal-phone").value = phone;
        openModal(target);
    });
}

// Функция для открытия модального окна по селектору
function openModal(targetSelector) {
    $(targetSelector).fadeIn();
}

// Проверка, находится ли элемент внутри модального окна
function isInModal(element) {
    return $(element).closest('.modal__container').length > 0;
}

// Обработчик клика на кнопку
$('[data-modal="open"]').click(function () {
    const target = $(this).data('target');
    // Если кнопка находится в модальном окне, закрываем текущее окно и открываем новое
    if (isInModal(this)) {
        $('.modal').hide();
        openModal(target);
    } else {
        openModal(target);
    }
});



// Закрытие окна на крестик
$('.close-popup').click(function () {
    $(this).closest('.modal').fadeOut();
});

// Закрытие окна на поле
$(document).mouseup(function (e) {
    const modalContainer = $('.modal__container');
    const lightboxContainer = $('#lightbox');
    // Проверяем, является ли целевой элемент частью модального окна или lightbox2
    if (!modalContainer.is(e.target) && modalContainer.has(e.target).length === 0 &&
        !lightboxContainer.is(e.target) && lightboxContainer.has(e.target).length === 0) {
        $('.modal').fadeOut();
    }
});

