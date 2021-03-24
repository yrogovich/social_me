'use strict';

document.addEventListener("DOMContentLoaded", () => {
    gsap.registerPlugin(ScrollTrigger);

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
            .from(".mobile-menu-nav li", 1.5,{
                y: 80,
                opacity: 0,
                ease: "power2.out",
                stagger: {
                    amount: 0.3,
                    from: "end"
                }
            }, "-=1")
            .from(".mobile-menu .support", .5, {
                opacity: 0,
                ease: "power3.inout",
            }, "-=.2")

        const body = document.querySelector('body');
        document.querySelector('#menu-btn').addEventListener('click', function() {
            if (this.classList.contains("menu-open")) {
                this.classList.remove("menu-open");   
                body.classList.remove('overflow-hidden');            
                menuOpen.reverse();           
            } else {
                this.classList.add("menu-open");  
                body.classList.add('overflow-hidden');               
                menuOpen.play();
            }
        });
          
    } catch (error) {
        console.log('Menu error:', error);
    }  

    // Scroll animation
    gsap.to(".decorative-shape", {
        scrollTrigger: { 
            trigger: '#reasons',
            toggleActions: "play pause play pause",
            scrub: 3
        }, 
        y: 100, 
        rotation: 90,
        duration: 1
    });

    gsap.fromTo("#our-cases .background-image", {
        scale: .4,
        translateY: -100,
    },
    {
        scrollTrigger: { 
            trigger: '#ur-cases',
            toggleActions: "play pause play pause",
            scrub: 3
        }, 
        translateY: 100,
        scale: 1,
        duration: 1
    });

    const h2 = document.querySelectorAll('.h2');
    h2.forEach(item => {
        gsap.from(item, .6, {
            scrollTrigger: { 
                trigger: item,
                toggleActions: "play pause play pause",
            }, 
            opacity: 0,
            translateY: 100,
            ease: "power3.out"
        });
    })

    // FAQ
    const faqImage = document.querySelector('.faq-svg');
    if(faqImage) {
        const faqMessageBox = faqImage.querySelector('.message-box');
        const faqMessageQuestion = faqImage.querySelector('.question');

        const faqTl = gsap.timeline({
            scrollTrigger: { 
                trigger: faqMessageBox,
                toggleActions: "play pause play pause",
            }, 
        });

        faqTl.from(faqMessageBox, 2, { 
            scale: 0, 
            transformOrigin: 'bottom left',
            ease: "power3.out" 
        }).from(faqMessageQuestion, 1, {
            scale: 0, 
            rotateZ: 360,
            transformOrigin: 'center',
            ease: "power3.out" 
        });
    } 

    // Cost form
    const costImage = document.querySelector('.cost-svg');
    if(costImage) {
        const costMessageBox = costImage.querySelector('.message-box');
        const costMessageQuestion = costImage.querySelector('.question');

        const costTl = gsap.timeline({
            scrollTrigger: { 
                trigger: costImage,
                toggleActions: "play pause play pause",
            }, 
        });

        costTl.from(costMessageBox, 2, { 
            scale: 0, 
            ease: "power3.out" 
        }).from(costMessageQuestion, 1, {
            scale: 0, 
            rotateZ: 360,
            transformOrigin: 'center',
            ease: "power3.out" 
        });
    } 

    const cardForm = document.querySelector('.card-form');
    if(cardForm) {
        const costFormTl = gsap.timeline({
            scrollTrigger: { 
                trigger: cardForm,
                toggleActions: "play pause play pause",
                scrub: 1
            }, 
        });
        costFormTl.from(cardForm.querySelectorAll('.decor-icon'), 1, { 
            scale: 0,
        })
    }


    // Accordion
    try {
        const accordion = document.querySelectorAll('.accordion');

        accordion.forEach(item => {
            const accordionItems = item.querySelectorAll('.accordion-item');
            const accordionItemsHeader = item.querySelectorAll('.accordion-header');
            const accordionItemsContent = item.querySelectorAll('.accordion-content');

            gsap.set(accordionItemsContent, { height: 0 })
            toggleClass(accordionItems[0]);
            slideToggle(accordionItemsContent[0]);
            
            accordionItemsHeader.forEach(itemHeader => {
                itemHeader.addEventListener('click', function() {
                    const target = this.closest('.accordion-item');
                    const targetContent = target.querySelector('.accordion-content');

                    toggleClass(target);
                    slideToggle(targetContent);       
                })
            })
        });

        function toggleClass(item) {
            if(item.classList.contains('active')) {   
                item.classList.remove('active'); 
                return;          
            }

            item.classList.add('active');  
        }

        function slideToggle(item, speed = .6, ease = "power3.inOut") {
            if(item.dataset.toggle === 'toggled') {           
                gsap.to(item, speed, { height: 0, ease });  
                item.dataset.toggle = ''; 
                return;
            }

            const animateBox = item.querySelector('.animated');
            if(!animateBox) {
                gsap.to(item, speed, { height: "auto", ease })
                item.dataset.toggle = 'toggled';
                return;
            }

            const animatedElements = animateBox.children;
            const tl = gsap.timeline();

            tl.to(item, speed, { height: "auto", ease })
                .from(animatedElements, 1, { stagger: 0.2, translateX: 200, opacity: 0, ease: "power3.out" }); 
            item.dataset.toggle = 'toggled';
        }  
    } catch (error) {
        console.log('Accordion error:', error);
    }  

    // Steps 
    const stepsSection = document.querySelector('.steps');
    if(stepsSection) {
        const steps = stepsSection.querySelectorAll('.step');

        steps.forEach(step => {
            gsap.from(step, { 
                scrollTrigger: { 
                    trigger: step,
                    toggleActions: "play pause play pause",
                }, 
                opacity: 0,
                scale: .4,
                duration: .8,
                ease: "power3.out" 
            });
        })
    }

    // Contacts
    const contactsSection = document.querySelector('#contacts');
    if(contactsSection) {
        const instagramIcon = contactsSection.querySelector('.decor-inst');
        const likeIcon = contactsSection.querySelector('.decor-like');
        const facebookIcon = contactsSection.querySelector('.decor-facebook');
        const respectIcon = contactsSection.querySelector('.decor-respect');

        gsap.to(instagramIcon, { 
            scrollTrigger: { 
                trigger: instagramIcon,
                toggleActions: "play pause play pause",
                scrub: 3
            }, 
            translateY: 100,
            scale: 1,
            duration: 1 
        });
        gsap.to(likeIcon, { 
            scrollTrigger: { 
                trigger: likeIcon,
                toggleActions: "play pause play pause",
                scrub: 3
            }, 
            translateY: 200,
            scale: 1,
            duration: 1 
        });
        gsap.to(facebookIcon, { 
            scrollTrigger: { 
                trigger: facebookIcon,
                toggleActions: "play pause play pause",
                scrub: 3
            }, 
            translateY: -100,
            scale: 1,
            duration: 1 
        });
        gsap.to(respectIcon, { 
            scrollTrigger: { 
                trigger: respectIcon,
                toggleActions: "play pause play pause",
                scrub: 3
            }, 
            translateY: -200,
            scale: 1,
            duration: 1 
        });
    }
});