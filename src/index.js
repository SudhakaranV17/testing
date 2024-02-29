import "./style.scss";
import gsap from "gsap";

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
if (document.querySelector(".home-section")) {
    const homebanner = document.querySelector(".home")
    const homeimg = document.querySelector(".home-img-wrap img")
    homebanner.addEventListener("mousemove", (event) => {
        console.log(event.pageX);
        gsap.to(homeimg, {
            x: event.pageX * -1 / 100,
            ease: "slow",
            duration: 0.5
        });
    });
}

// menu
let headTag = document.querySelector(".header");
let menuBtn = document.querySelector(".menu-btn");
let menuTl = gsap.timeline(
    {
        paused: true,
        onStart() {
            menuBtn.classList.add("active");
            headTag.classList.add("menu-open");
            document.querySelector("html").style.overflow = "hidden";
        },
        onReverseComplete() {
            menuBtn.classList.remove("active");
            headTag.classList.remove("menu-open");
            document.querySelector("html").style.overflow = "visible";

        }
    }
).fromTo(".header-wrap", {
    opacity: 0,
    backgroundColor: "transparent",
}, {
    opacity: 1,
    backgroundColor: "blue",
    duration: .5,
    ease: "slow"
}).fromTo(
    [".menu-right-up", ".menu-left", ".menu-right-down"], {
    clipPath: "polygon(100% 100%, 100% 0%, 100% 0%, 100% 100%)"
}, {
    clipPath: "polygon(0% 100%, 0% 0%, 100% 0%, 100% 100%)",
    stagger: 0.1,
    ease: "slow(0.7,0.6)"
}
)
menuBtn.addEventListener("click", () => {
    if (menuBtn.classList.contains("active")) {
        menuTl.reverse();
    }
    else {
        menuTl.play();
    }
})

/**
 * BARN OWL 
 * 
 * 
 * 
 */
const about_home_content = new Swiper('#about-home-content-swiper', {
    loop: true,
    speed: 2000,
    effect: "fade",
    pagination: {
        el: '.swiper-pagination',
        type: "fraction"
    },
    navigation: {
        nextEl: '.about-home-nav-next',
        prevEl: '.about-home-nav-prev',
    },


});

const about_home_img = new Swiper('#about-home-img-swiper', {
    loop: true,
    slidesPerView: 1,
    noSwiping: true,
    noSwipingClass: "swiper-slide"
});
about_home_content.controller.control = about_home_img;