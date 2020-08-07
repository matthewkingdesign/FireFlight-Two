gsap.from('.menu-icon',{
  opacity: 0,
  duration: 0.7,
  x: -50,
  stagger: 0.1,
  ease: "power4.out"
});
gsap.from('.logo-home',{
  opacity: 0,
  duration: 1,
  x: -500,
  ease: "circ.in",
  delay: 6
});
gsap.from('.content-copy-home',{
  opacity: 0,
  duration: 1,
  x: -500,
  ease: "circ.in",
  delay: 6.5
});
gsap.from('.loading-screen-content',{
  opacity: 0,
  duration: 1,
  ease: "circ.in"
});
gsap.to('.loading-screen',{
  opacity:0,
  duration: 1,
  delay: 5
});
gsap.to('.homepage-fullscreen-menu',{
  opacity:1,
  duration:1,
  delay:12
});

// document.querySelector(".content-title").addEventListener("click", function() {
//   var tl = new TimelineLite();
//     tl.to(".content-prices", 1, {x:200, y:0})
//       .to(".content-prices", 1, {rotation:360, backgroundColor: "red"});
// });
document.querySelector(".content-title").addEventListener("mouseenter", function() {
  var tl = new TimelineLite();
    tl.to(".content-prices", 1, {x:200, y:0})
      .to(".content-prices", 1, {rotation:360, backgroundColor: "red"});
});
