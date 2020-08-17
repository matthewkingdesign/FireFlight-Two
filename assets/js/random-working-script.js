$(document).ready(function(){
  $('.menu-link').click(function(e) {
    e.preventDefault();
    var linkUrl = $(this).attr('href');
    setTimeout(function(url) { window.location = url; }, 5000, linkUrl);
  });
});




// create main timeline
var masterTl = new TimelineMax({paused:true, onComplete:onComplete});

// create a function returning first timeline
function firstTl() {
  var tl = new TimelineMax()

  return tl;
}

// create a function returning second timeline
// function secondTl() {
//   var tl = new TimelineMax()
//     .fromTo(".menu", 1, {
//       width:0
//     }, {
//       width: 66
//     }, "+=0.0")
//   return tl;
// }


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
// var menuLink = select(".menu-link");
var menuIcons = selectAll(".menu-icon");
var menuItem = selectAll(".menu-item");
var menuLogo = select("#logo-text");
var socials = selectAll(".social-media-icon")
var menuLink = document.getElementsByClassName("menu-link");
// Create a paused timeline with our tweens



// Hover timelines
// menu bar width on hover
var tl1 = new TimelineLite({ paused: true })
  tl1.to(menu, 0.01, {
    width: 200
  });
  // menu bar icons move and grow on hover
  var tl2 = new TimelineLite({ paused: true})
    tl2.to(menuIcons, 0.2, {
      height: 35,
      x: 50,
      marginTop: 10,
      stagger: 0.1
    });
  // menu bar text fade in on hover
  var tl3 = new TimelineLite({ paused: true})
    tl3.to(menuItem, 0.05, {
      opacity: 1,
      stagger: 0.1
    });
  // logo fade in on menu hover
  var tl4 = new TimelineLite({ paused: true})
    tl4.to(menuLogo, 0.2, {
      opacity:1
    });
  // social media icons move right
  var tl5 = new TimelineLite({ paused: true})
    tl5.to(socials, 0.2, {
      x: 60,
      stagger: 0.1
    });
  // click timelines
  var tl6 = new TimelineLite({ paused: true})
    tl6.to(menu, 0.2, {
      width: 0
    });
    var value;
    var buttons = document.getElementsByClassName('menu-link');

    for (var i = 0; i < buttons.length; i++) {
      buttons[i].onclick = function(){
        tl6.play()
      }
    }



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
   // buttons.addEventListener("click", function() {
   //   tl6.play();
   // } );
}
function clickFunction(){
  tl6.play();
}
// function onComplete() {
//
// }



window.onload = init;
