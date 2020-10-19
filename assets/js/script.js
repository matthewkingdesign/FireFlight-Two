
if (document.documentElement.clientWidth > 900) {
// function delay(n) {
//   n = n || 2000
//   // Keep official documentation wording, done -> resolve
//   // and make it more concise
//   return new Promise(resolve => {
//     setTimeout(resolve, n)
//   })
// }

// // barba.init({
// //   transitions: [{
// //     name: 'opacity-transition',
// //     leave(data) {
// //       return gsap.to(data.current.container, {
// //         opacity: 0
// //       });
// //     },
// //     enter(data) {
// //       return gsap.from(data.next.container, {
// //         opacity: 0
// //       });
// //     }
// //   }]
// // });
// // // Test play reverse
// var select = document.querySelector.bind(document);
// // This function will return a node-list of elements
// // It's not used in this example, but I included it in case
// // you were wondering how to select more than one element
// var selectAll = document.querySelectorAll.bind(document);
// // Select our elements
// var buttons = document.getElementsByClassName('menu-link');
// var pricePs = document.getElementsByClassName('content-prices')[0].children;
// var copyPs = document.getElementsByClassName('content-copy')[0].children;
// var emailPs = document.getElementsByClassName('content-email')[0].children;
// var phonePs = document.getElementsByClassName('content-phone')[0].children;
// var contactCta = select(".content-cta");
// var menu = select(".menu");
// var menuBg = select(".menu-bg");
// var menuIcons = selectAll(".menu-icon");
// var menuItem = selectAll(".menu-item");
// var menuLogo = select("#logo-text");
// var socials = selectAll(".social-media-icon");


// barba.init({
//   transitions: [{
//     name: 'default-transition',
//     leave(menuIcons) {
//       gsap.to(menuIcons,{
//         opacity: 0,
//         duration: 0.5,
//         x: -50,
//         stagger: 0.1,
//         ease: "power4.out",
//         delay: 2.5
//       });
//     },
//     enter(menuIcons) {
//       gsap.to(menuIcons,{
//         opacity: 1,
//         duration: 0.5,
//         x: -50,
//         stagger: 0.1,
//         ease: "power4.out",
//         delay: 2.5
//       });
//     }
//   }]
// });


$(document).ready(function(){
  $('.menu-link').click(function(e) {
    e.preventDefault();
    var linkUrl = $(this).attr('href');
    setTimeout(function(url) { window.location = url; }, 1200, linkUrl);
  });
});

// Homepage
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
// gsap.to('.menu',{
//   width:66,
//   duration: 0.5
// });

//LOADING PAGE
gsap.from('.loading-screen-content',{
  opacity: 0,
  duration: 1,
  ease: "circ.in"
});
gsap.to('.loading-screen',{
  display:'none',
  opacity:0,
  duration: 1,
  delay: 5
});


// create main timeline
var masterTl = new TimelineMax({paused:true, onComplete:onComplete});

// make this all happen on page load
function init(){
masterTl.play();
}
// Test play reverse
var select = document.querySelector.bind(document);
// This function will return a node-list of elements
// It's not used in this example, but I included it in case
// you were wondering how to select more than one element
var selectAll = document.querySelectorAll.bind(document);
// Select our elements
var buttons = document.getElementsByClassName('menu-link');
var pricePs = document.getElementsByClassName('content-prices')[0].children;
var copyPs = document.getElementsByClassName('content-copy')[0].children;
var emailPs = document.getElementsByClassName('content-email')[0].children;
var phonePs = document.getElementsByClassName('content-phone')[0].children;
var contactCta = select(".content-cta");
var menu = select(".menu");
var menuBg = select(".menu-bg");
var menuIcons = selectAll(".menu-icon");
var menuItem = selectAll(".menu-item");
var menuLogo = select("#logo-text");
var socials = selectAll(".social-media-icon");
// on load timeline

	var tlMenuLoad = new TimelineLite()
// Menu bar

  .from(menuIcons,{
    opacity: 0,
    duration: 0.5,
    x: -50,
    stagger: 0.1,
    ease: "power4.out",
    delay: 2.5
  }, "-=2")
  .from(socials, {
    duration: 0.7,
    opacity: 0,
    x: -50,
    stagger: 0.1
  }, "-=1")
  .to(menu,  {
    duration:0.5,
    width: 66,
    ease: "power4.out",
    delay: 2
  }, "-=2");

var tlOnLoad = new TimelineLite()
  .to('.background-img', {
    opacity: 1,
    duration: 0.3,
    delay: 0.3
  })
  .from('.content-right',{
    duration: 0.3,
    x: 600,
    delay: 0.5
  }, "-=1")
  .from('.content-title', {
    duration: 0.3,
    opacity: 0,
    x: 600,
    delay: 0.5
  }, "-=1")
  .from(copyPs, {
    duration: 0.3,
    opacity: 0,
    x: 600,
    delay: 0.6
  }, "-=1")
  .from(pricePs, {
    duration: 0.3,
    opacity: 0,
    x: 600,
    delay: 0.8
  }, "-=1")
  .from(contactCta, {
    duration: 0.3,
    opacity: 0,
    x: 600,
    delay: 0.9
  }, "-=1")
  .from(emailPs, {
    duration: 0.3,
    opacity: 0,
    x: 600,
    delay: 0.9
  }, "-=1")
  .from(phonePs, {
    duration: 0.3,
    opacity: 0,
    x: 600,
    delay: 1
  }, "-=1");

// Create a paused timeline with our tweens
// On load timelines


// Hover timelines
var tl1a = new TimelineLite({paused: true})
  .to('.menu-link',0.01,{
    x: 30,
    stagger: 0.1
  });
// menu bar width on hover
var tl1 = new TimelineLite({ paused: true })
  .to(menu, 0.01, {
    width: 100
  });
  // .to(menuBg, 0.01, {
  //   width: 190
  // });
  // menu bar icons move and grow on hover
  var tl2 = new TimelineLite({ paused: true})
    tl2.to(menuIcons, 0.1, {
      // width: 22,

      // // y: -20,
      // stagger: 0.1
    });
  // menu bar text fade in on hover
  var tl3 = new TimelineLite({ paused: true})
    tl3.to(menuItem, 0.1, {
      display: 'block',
      // width: 100,
      opacity: 1,
      stagger: 0.05
    });
  // logo fade in on menu hover
  var tl4 = new TimelineLite({ paused: true})
    tl4.to(menuLogo, 0.2, {
      opacity:1
    });
  // social media icons move right
  var tl5 = new TimelineLite({ paused: true})
    tl5.to(socials, 0.1, {
      x: 30,
      stagger: 0.1
    });
    var tl7 = new TimelineLite({paused: true})
      .to(menuItem,{
        duration: 0.2,
        stagger: 0.1,
        opacity: 0,
        delay: 0.1,
        x: -100,
      })
      .to(menuIcons,{
        duration: 0.2,
        stagger: 0.1,
        opacity: 0,
        delay: 0.1,
        x: -100,
      },"-=1");

  // click timelines
  // var tl6 = new TimelineLite({ paused: true})
  //   tl6.to(menu, 0.2, {
  //     width: 0,
  //     x: 0
  //   });


// Trigger animations on different events
function onComplete() {
    // Add event handlers for mouse enter/leave
    menu.addEventListener("mouseenter", function() {
      tl1a.play();
      tl1.play();
      tl2.play();
      tl3.play();
      tl4.play();
      tl5.play();
     } );
    menu.addEventListener("mouseleave", function() {
      gsap.delayedCall(0.2, function(){
       tl1.reverse();
       tl1a.reverse();
       tl2.reverse();
      tl3.reverse();
      tl4.reverse();
      tl5.reverse();
    });
      
     } );
}

// select all the buttons individually
for (var i = 0; i < buttons.length; i++) {
  buttons[i].onclick = function(){
    // tl6.play();
    tl7.play();
    tlOnLoad.reverse();
    tl1.reverse();
    // tl2.reverse();
    // tl3.reverse();
    tl5.reverse();

  }
}

window.onload = init;
} // end of IF 



// halkaBox.options({
//   hideButtons: true,       // hide buttons on touch devices (true || false)
//   animation: "slide",      // animation type on next/prev ("slide" || "fade")
//   theme: "light",          // lightbox overlay theme ("light" || "dark")
//   preload: 2,              // number of images to preload
//   swipeDownToClose: false, // swipe down to close (true || false)
//   swipeUpToClose: false,   // swipe up to close (true || false)
//   nextPrevOnWheel: true,   // goto next/prev image on wheel (true || false)
//   isZoomable: true         // ability to zoom image (true || false)
// });
// halkaBox.run("gallery1");

document.querySelector('.close-btn').addEventListener('click', function(){
  console.log('you clicke me');
  document.querySelector('.menu').style.display = 'none';
  document.querySelector('.open-btn').style.display = 'block';
});
document.querySelector('.open-btn').addEventListener('click', function(){
  console.log('you clicke me');
  document.querySelector('.open-btn').style.display = 'none';
  document.querySelector('.menu').style.display = 'block';
});