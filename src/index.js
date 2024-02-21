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