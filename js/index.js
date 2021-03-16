'use strict';

document.addEventListener("DOMContentLoaded", () => {
    // Vanilla-lazyload init
    try {
        let lazyLoadInstance = new LazyLoad();
    } catch (error) {
        console.log(`Vanilla-lazyload plugin error: ${error}`);
    }

    // Menu open
    try {
        const menuOpen = gsap.timeline({ paused: true })
            .to(".mobile-menu",{
                display: 'block'
            }, "<")
            .to(".menu-bar",{
                scaleX: 0
            }, "<")
            .to(".menu-bar.mb1", {
                transformOrigin: "left",
                rotate: 45,
                duration: 0
            })
            .to(".menu-bar.mb2", {
                transformOrigin: "25%",
                rotate: 315,
                duration: 0
            })
            .to(".menu-bg__inner", {
                scaleX: 1,
                stagger: {
                amount: 0.5,
                from: "start",
                ease: "sine.inout"
                }
            })
            .to(".menu-bg__inner2",{
                scaleX: 1,
                stagger: {
                    amount: 0.5,
                    from: "end",
                    ease: "sine.inout"
                }
            }, "<")
            .to(".menu-bar", {
                scaleX: 1,          
                backgroundColor: "#fff"
            })
            .from(".mobile-menu-nav li", {
                y: 50,
                opacity: 0,
                ease: "power3.inout",
                stagger: {
                    amount: 0.3,
                    from: "end"
                }
            }, "-=.8")
            .from(".mobile-menu .support", .5, {
                opacity: 0,
                ease: "power3.inout",
            }, "-=.2")


        document.querySelector('#menu-btn').addEventListener('click', function() {
            if (this.classList.contains("menu-open")) {
                this.classList.remove("menu-open");               
                menuOpen.reverse();           
            } else {
                this.classList.add("menu-open");           
                menuOpen.play();
            }
        });
          
    } catch (error) {
        console.log('Menu error:', error);
    }

    // Form handler
    let forms = document.querySelectorAll('form');
    let url = `${window.location.protocol}//${window.location.host}/send.php`;

    forms.forEach((form) => {
        form.addEventListener('submit', function(event) {
            event.preventDefault ? event.preventDefault() : event.returnValue = false;

            console.log("Отправка запроса");
            let req = new XMLHttpRequest();
            req.open('POST', url, true);
            req.onload = function() {
                if (req.status >= 200 && req.status < 400) {
                    json = JSON.parse(this.response);

                    if (json.send) {
                        // Если сообщение отправлено
                        console.log("Сообщение отправлено");
                    } else {
                        // Если произошла ошибка
                        console.log("Ошибка. Сообщение не отправлено");
                    }
                    // Если не удалось связаться с php файлом
                } else {
                    console.log("Ошибка сервера. Номер: " + req.status);
                }
            };

            // Если не удалось отправить запрос. Стоит блок на хостинге
            req.onerror = () => console.log("Ошибка отправки запроса");
            req.send(new FormData(event.target));
        });
    });
});