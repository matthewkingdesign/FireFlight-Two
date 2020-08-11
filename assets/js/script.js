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
  ease: "circ.in",
  delay: 6
});
gsap.from('.content-copy-home',{
  opacity: 0,
  duration: 1,
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
gsap.from('.content-title', {
  duration: 0.5,
  opacity: 0,
  x: 600
});
gsap.from('.content-copy', {
  duration: 0.6,
  opacity: 0,
  x: 600,
  delay: 0.1
});
gsap.from('.content-prices', {
  duration: 0.7,
  opacity: 0,
  x: 600,
  delay: 0.2
});


// create main timeline
var masterTl = new TimelineMax({paused:true, onComplete:onComplete});

// create a function returning first timeline
function firstTl() {
  var tl = new TimelineMax()

  return tl;
}

// create a function returning second timeline
function secondTl() {
  var tl = new TimelineMax()
    .fromTo(".menu", 1, {background: "red"}, {background: "blue"}, "+=0.0")
  return tl;
}


// make this all happen on page load
function init(){
// add sub timeline to main timeline
masterTl
.add(firstTl(), "+=0.0")
// .add(secondTl(), "+=0.0")
.play();
}

// Test play reverse

// This function will return one element
var select = document.querySelector.bind(document);

// This function will return a node-list of elements
// It's not used in this example, but I included it in case
// you were wondering how to select more than one element
var selectAll = document.querySelectorAll.bind(document);

// Select our elements
var menu = select(".menu");
var menuIcon = selectAll(".menu-icon");
var menuItem = selectAll(".menu-item");
var menuLogo = select("#logo-text");
var socials = selectAll(".social-media-icon")

// Create a paused timeline with our tweens
var tl1 = new TimelineLite({ paused: true })
  tl1.to(menu, 0.01, {
    width: 200
  });
  var tl2 = new TimelineLite({ paused: true})
    tl2.to(menuIcon, 0.2, {
      height: 35,
      x: 50,
      marginTop: 30,
      stagger: 0.1
    });
  var tl3 = new TimelineLite({ paused: true})
    tl3.to(menuItem, 0.05, {
      opacity: 1,
      stagger: 0.1
    });
  var tl4 = new TimelineLite({ paused: true})
    tl4.to(menuLogo, 0.2, {
      opacity:1
    });
    var tl5 = new TimelineLite({ paused: true})
      tl5.to(socials, 0.2, {
        x: 60,
        stagger: 0.1
      });

function onComplete() {
    // Add event handlers for mouse enter/leave
    menu.addEventListener("mouseenter", function() {
      tl1.play();
      tl2.play();
      tl3.play();
      tl4.play();
      tl5.play();
     } );
    menu.addEventListener("mouseleave", function() {
      gsap.delayedCall(0.8, function(){
       tl1.reverse();
    });
      tl2.reverse();
      tl3.reverse();
      tl4.reverse();
      tl5.reverse();
     } );
}



window.onload = init;
