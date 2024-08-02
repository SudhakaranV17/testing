import "./style.scss";
import Swiper from "swiper"
import gsap from "gsap";
import ScrollTrigger from "gsap/dist/ScrollTrigger";
gsap.registerPlugin(ScrollTrigger)

// gsap.set(".cursor", { xPercent: -50, yPercent: -50 })
// let cursor = document.querySelector(".cursor");
// let cursorinner = document.querySelector(".inner-cursor");
// let words = document.querySelector(".main-title");

// let mousex;
// let mousey;

// window.addEventListener("mousemove", (e) => {
//     mousex = e.clientX;
//     mousey = e.clientY;
//     gsap.to(cursor, { x: mousex, y: mousey })
// })
// words.addEventListener("mouseenter", () => {
//     gsap.to(cursorinner, { scale: 1, opacity: 1, top: "-75px", left: "-75px", duration: .5, ease: "slow" })
// })
// words.addEventListener("mousemove", () => {
//     gsap.to(cursorinner, { x: mousex, y: mousey })
// })
// words.addEventListener("mouseleave", () => {
//     gsap.to(cursorinner, { scale: 0, opacity: 0, top: "0", left: "0", duration: .5, ease: "slow" })
// })

// window.addEventListener("click", (e) => {
//     console.log("pageX ", e.pageX);
//     console.log("clientX ", e.clientX);
//     console.log("screenX ", e.screenX);
//     console.log("offsetX ", e.offsetX);
// })
// if (document.querySelector(".home-section")) {
//     const homebanner = document.querySelector(".home")
//     const homeimg = document.querySelector(".home-img-wrap img")
//     homebanner.addEventListener("mousemove", (event) => {
//         console.log(event.pageX);
//         gsap.to(homeimg, {
//             x: event.pageX * -1 / 100,
//             ease: "slow",
//             duration: 0.5
//         });
//     });
// }

// menu
// let headTag = document.querySelector(".header");
// let menuBtn = document.querySelector(".menu-btn");
// let menuTl = gsap.timeline(
//     {
//         paused: true,
//         onStart() {
//             menuBtn.classList.add("active");
//             headTag.classList.add("menu-open");
//             document.querySelector("html").style.overflow = "hidden";
//         },
//         onReverseComplete() {
//             menuBtn.classList.remove("active");
//             headTag.classList.remove("menu-open");
//             document.querySelector("html").style.overflow = "visible";

//         }
//     }
// ).fromTo(".header-wrap", {
//     opacity: 0,
//     backgroundColor: "transparent",
// }, {
//     opacity: 1,
//     backgroundColor: "blue",
//     duration: .5,
//     ease: "slow"
// }).fromTo(
//     [".menu-right-up", ".menu-left", ".menu-right-down"], {
//     clipPath: "polygon(100% 100%, 100% 0%, 100% 0%, 100% 100%)"
// }, {
//     clipPath: "polygon(0% 100%, 0% 0%, 100% 0%, 100% 100%)",
//     stagger: 0.1,
//     ease: "slow(0.7,0.6)"
// }
// )
// menuBtn.addEventListener("click", () => {
//     if (menuBtn.classList.contains("active")) {
//         menuTl.reverse();
//     }
//     else {
//         menuTl.play();
//     }
// })

/**
 * BARN OWL 
 * 
 * 
 * 
 */
// const about_home_content = new Swiper('#about-home-content-swiper', {
//     loop: true,
//     speed: 2000,
//     effect: "fade",
//     pagination: {
//         el: '.swiper-pagination',
//         type: "fraction"
//     },
//     navigation: {
//         nextEl: '.about-home-nav-next',
//         prevEl: '.about-home-nav-prev',
//     },


// });

// const about_home_img = new Swiper('#about-home-img-swiper', {
//     loop: true,
//     slidesPerView: 1,
//     noSwiping: true,
//     noSwipingClass: "swiper-slide"
// });
// about_home_content.controller.control = about_home_img;


// liqium
// if (document.querySelector(".projects-gallery-section")) {
//     console.log("hello");
//     gsap.timeline({
//         scrollTrigger: {
//             trigger: document.querySelector(".projects-gallery-items"),
//             toggleActions: "restart none none reverse",
//             start: "top 50%",
//             end: "bottom",
//             scrub: true,
//             markers: true
//         }
//     }).fromTo(
//         ".wd-20",
//         {
//             transform: "translateY(100px)"
//         }, {
//         transform: "translateY(0px)",
//         ease: "slow"

//     },
//         "projects-gallery"
//     )
//         .fromTo(
//             ".wd-50",
//             {
//                 transform: "translateY(250px)"
//             }, {
//             transform: "translateY(0px)",
//             ease: "slow",

//         },
//             "projects-gallery"
//         )

// }

// let mainSwiper = new Swiper("#mainSwiper", {
//     slidesPerView: 1,
//     centeredSlides: true,
//     speed: 1000,
//     spaceBetween: 100,
//     pagination: {
//         el: ".swiper-pagination-fraction",
//         type: "fraction"
//     },
//     navigation: {
//         nextEl: '.swiper-button-next',
//         prevEl: '.swiper-button-prev',
//     },
// })


// document.addEventListener('DOMContentLoaded', function () {
//     const accordionItems = document.querySelectorAll('.experience-items-item');
//     const sliderItems = document.querySelectorAll('.experience-slider-items-item');
//     let zIndex = 1; // Initialize zIndex

//     // Initially show the first slider item and set its z-index
//     sliderItems[0].classList.add('active');
//     sliderItems[0].style.zIndex = zIndex;

//     accordionItems.forEach((item, index) => {
//         item.addEventListener('click', function () {
//             // Increment z-index for the new active item
//             zIndex++;

//             // Remove 'active' class from all slider items
//             sliderItems.forEach(sliderItem => {
//                 sliderItem.classList.remove('active');
//             });

//             // Add 'active' class to the corresponding slider item
//             const targetSliderItem = sliderItems[index];
//             targetSliderItem.classList.add('active');
//             targetSliderItem.style.zIndex = zIndex; // Set new z-index for the active item

//             // Manage accordion content visibility
//             document.querySelectorAll('.experience-items-item-content').forEach(content => {
//                 content.classList.remove('show');
//             });

//             const targetContent = this.querySelector('.experience-items-item-content');
//             targetContent.classList.add('show');
//         });
//     });
// });
document.addEventListener('DOMContentLoaded', function () {
    // Initialize Swiper
    const swiper = new Swiper('.experience-slider', {
        direction: 'vertical',
        loop: false,
        speed: 1000,
        autoplay: true,
        grabCursor: true,
        watchSlidesProgress: true,

        on: {
            slideChange: function () {
                const activeIndex = this.activeIndex;
                document.querySelectorAll('.experience-items-item').forEach((item, index) => {
                    if (index === activeIndex) {
                        item.classList.add('active');
                    } else {
                        item.classList.remove('active');
                    }
                });
            }
        }
    });

    // Sync Accordion with Swiper
    const accordionItems = document.querySelectorAll('.experience-items-item');
    accordionItems.forEach((item, index) => {
        item.addEventListener('click', function () {
            // Update Swiper's slide to the clicked accordion item
            swiper.slideTo(index);
        });
    });
});




