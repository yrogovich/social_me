'use strict';

document.addEventListener("DOMContentLoaded", () => {
    const headerTimeline = gsap.timeline();
    headerTimeline.from(".navbar-logo .logo-img", .5, { scale: 0, duration: .8 })
                .from(".navbar-logo .logo-text", 1, { opacity: 0, translateX: -200 })
                .from(".header-divider", 1, { height: 0, ease: "circ.out" })
                .from(".main-image", 1, { scale: 0, y: 10, ease: "power3.out" }, "-=.5")
                .from(".instagram", .8, {opacity: 0, scale: 0, y: 150, ease: "power2.out" }, "-=.6")
                .from(".respect", .8, { opacity: 0, scale: 0, y: 100, ease: "power2.out" }, "-=.5")
                .from(".facebook", .8, { opacity: 0, scale: 0, y: 200, ease: "power2.out" }, "-=.5")
                .from(".like", .8, { opacity: 0, scale: 0, y: 300, ease: "power2.out" }, "-=.5")
                .to(".main-image", 4, {
                    y: -10,
                    yoyo: true, 
                    repeat: -1, 
                    ease: Sine.easeInOut
                }, "-=2")
                .to(".instagram", 3, {
                    y: 15,
                    yoyo: true, 
                    repeat: -1, 
                    ease: Sine.easeInOut
                }, "-=3")
                .to(".respect", 3, {
                    y: 5,
                    yoyo: true, 
                    repeat: -1, 
                    ease: Sine.easeInOut
                }, "-=2")
                .to(".facebook", 3, {
                    y: -20,
                    yoyo: true, 
                    repeat: -1, 
                    ease: Sine.easeInOut
                }, "-=2")
                .to(".like", 3, {
                    y: -50,
                    yoyo: true, 
                    repeat: -1, 
                    ease: Sine.easeInOut
                }, "-=2")

});