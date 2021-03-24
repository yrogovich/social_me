'use strict';

document.addEventListener("DOMContentLoaded", () => {
    const templateUrl = wp.templateUrl;

    // Vanilla-lazyload init
    try {
        let lazyLoadInstance = new LazyLoad();
    } catch (error) {
        console.log(`Vanilla-lazyload plugin error: ${error}`);
    }

    // MicroModal init
    try {
        MicroModal.init();
    } catch (error) {
        console.log(`MicroModal plugin error: ${error}`);
    }

    // Swiper
    try {
        const casesSlider = new Swiper('.cases-slider', {
            effect: 'fade',
            speed: 800,
            navigation: {
                nextEl: '.cases-slider .swiper-button-next',
                prevEl: '.cases-slider .swiper-button-prev',
            },
            pagination: {
                el: '.cases-slider .swiper-pagination',
            },
        });
    } catch (error) {
        console.log(`Swiper plugin error: ${error}`);
    }

    // Cookie check script
    let cookieAlert = document.querySelector(".cookie-alert");
    let cookieAlertButton = document.querySelector(".cookie-alert button");

    if (!localStorage.getItem('cookie')) {
    setTimeout(() => cookieAlert.classList.add('not-accepted'), 3000);
    } 

    cookieAlertButton.addEventListener('click', () => {
    localStorage.setItem('cookie', 'accepted');
    cookieAlert.classList.remove('not-accepted');
    });

    // Form handler
    let forms = document.querySelectorAll('form');
    let url = `${templateUrl}/send.php`;

    forms.forEach((form) => {
        form.addEventListener('submit', function(event) {
            event.preventDefault ? event.preventDefault() : event.returnValue = false;
            
            let modalName = this.closest('.modal') ? this.closest('.modal').id  : '';

            console.log('Form send request');
            let req = new XMLHttpRequest();
            req.open('POST', url, true);
            req.onload = function() {
                if (req.status >= 200 && req.status < 400) {
                    json = JSON.parse(this.response);
                    
                    if (json.send) {
                        // Если сообщение отправлено
                        MicroModal.close(modalName);
                        swal("Form sent!", "We will contact you as soon as possible!", "success");
                    } else {
                        // Если произошла ошибка
                        MicroModal.close(modalName);
                        swal("The form has not been sent!", "Mistake. Message not sent", "error");
                    }
                // Если не удалось связаться с php файлом
                } else { 
                    MicroModal.close(modalName);
                    swal("The form has not been sent!", "Server error: " + req.status, "error");
                }
            }; 
            
            // Если не удалось отправить запрос. Стоит блок на хостинге
            req.onerror = () => swal("The form has not been sent!", "Error sending request");
            req.send(new FormData(event.target));
        });
    });
});