gsap.from('.menu-icon',{
  opacity: 0,
  duration: 1,
  x: -50,
  ease: "circ.inOut"
});
gsap.from('.logo-home',{
  opacity: 0,
  duration: 1,
  y: -50,
  ease: "circ.in",
  delay: 4
});
gsap.from('.content-copy-home',{
  opacity: 0,
  duration: 1,
  y: +50,
  ease: "circ.in",
  delay: 4.5
});
