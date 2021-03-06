$(document).ready(function(){
  $('.menu-link').click(function(e) {
    e.preventDefault();
    var linkUrl = $(this).attr('href');
    setTimeout(function(url) { window.location = url; }, 3000, linkUrl);
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
gsap.to('.homepage-fullscreen-menu',{
  opacity:1,
  duration:1,
  delay:12
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


var tlOnLoad = new TimelineLite()
// homepage animation
.from(copyPs, {
  duration: 0.6,
  opacity: 0,
  x: 600,
  delay: 7.5
},)
  .from(menuIcons,{
    opacity: 0,
    duration: 0.7,
    x: -50,
    stagger: 0.1,
    ease: "power4.out",
    delay: 8
  }, "-=7");
  // .from(socials, {
  //   duration: 0.7,
  //   opacity: 0,
  //   x: -50,
  //   stagger: 0.1,
  //   delay: 9
  // }, "-=7")
  // .to(menu,  {
  //   duration:0.5,
  //   width: 66,
  //   ease: "power4.out",
  //   delay: 9
  // }, "-=7")
  // .to(menuBg,  {
  //   duration:0.5,
  //   width: 66,
  //   ease: "power4.out",
  //   delay: 9
  // }, "-=7")
  // .from('.content-right',{
  //   duration: 0.5,
  //   x: 600,
  //   delay: 7
  // }, "-=6")
  // .from('.content-title', {
  //   duration: 0.5,
  //   opacity: 0,
  //   x: 600,
  //   delay: 7
  // })
  // .from(contactCta, {
  //   duration: 0.5,
  //   opacity: 0,
  //   x: 600,
  //   delay: 2.1
  // }, "-=3")

  // .from(pricePs, {
  //   duration: 0.7,
  //   opacity: 0,
  //   x: 600,
  //   delay: 2.2
  // }, "-=3")
  // .from(emailPs, {
  //   duration: 0.6,
  //   opacity: 0,
  //   x: 600,
  //   delay: 2.3
  // }, "-=3")
  // .from(phonePs, {
  //   duration: 0.6,
  //   opacity: 0,
  //   x: 600,
  //   delay: 2.4
  // }, "-=3");

// Create a paused timeline with our tweens
// On load timelines


// Hover timelines
// menu bar width on hover
var tl1 = new TimelineLite({ paused: true })
  .to(menu, 0.01, {
    width: 190
  })
  .to(menuBg, 0.01, {
    width: 190
  });
  // menu bar icons move and grow on hover
  var tl2 = new TimelineLite({ paused: true})
    tl2.to(menuIcons, 0.2, {
      width: 24,
      x: 60,
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
  // var tl6 = new TimelineLite({ paused: true})
  //   tl6.to(menu, 0.2, {
  //     width: 0,
  //     x: 0
  //   });


// Trigger animations on different events
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

// select all the buttons individually
for (var i = 0; i < buttons.length; i++) {
  buttons[i].onclick = function(){
    // tl6.play();
    tl1.reverse();
    tlOnLoad.reverse();
    tl2.reverse();
    tl3.reverse();
  }
}


window.onload = init;





















/* =================

author: Karan Mhatre
email: me@karanmhatre.com
website: karanmhatre.com

================= */
function delay(n) {
  n = n || 2000
  // Keep official documentation wording, done -> resolve
  // and make it more concise
  return new Promise(resolve => {
    setTimeout(resolve, n)
  })
}
// Better to traverse the DOM thenleast possible
// you can use `var` instead of `const` for legacy browser support
var select = document.querySelector.bind(document);
// This function will return a node-list of elements
// It's not used in this example, but I included it in case
// you were wondering how to select more than one element
var selectAll = document.querySelectorAll.bind(document);
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
const loadingScreen = document.querySelector('.loading-screen-fade')
const mainNavigation = document.querySelector('.main-navigation')

// Function to add and remove the page transition screen
function pageTransitionIn() {
  // GSAP methods can be chained and return directly a promise
  // but here, a simple tween is enough
    // .timeline()
    // .set(loadingScreen, { transformOrigin: 'bottom left'})
    // .to(loadingScreen, { duration: .5, scaleY: 1 })
    var tlPageIn = new TimelineLite()
    // to(menuIcons,{
    //   duration: .4,
    //   opacity: 0,
    //   x: -100,
    // })
    .to(loadingScreen, {
      duration: .2,
      opacity:1
    });
}
// Function to add and remove the page transition screen
function pageTransitionOut(container) {
  // GSAP methods can be chained and return directly a promise
  // return gsap
  var tlPageOut = new TimelineLite()

  .to(loadingScreen, {
    delay: 1,
    duration: .4,
    opacity:0
  })


  .call(contentAnimation, [container])
}

// Function to animate the content of each page
function contentAnimation(container) {
  // GSAP methods can be chained and return directly a promise
  var tlContentAnim = new TimelineLite()
  .to(menuIcons,{
    opacity: 1,
    duration: 0.5,
    x: 5,
    stagger: 0.1,
    ease: "power4.out",
    delay: 2.5
  })
  .from(socials, {
    duration: 0.7,
    opacity: 0,
    x: -50,
    stagger: 0.1
  })
  .to(menu,  {
    duration:0.5,
    width: 66,
    ease: "power4.out",
    delay: 2
  })
  .to('.background-img', {
    opacity: 1,
    duration: 0.3,
    delay: 0.2
  })
  .from('.content-right',{
    duration: 0.3,
    x: 600,
    delay: 0.5
  })
  .from('.content-title', {
    duration: 0.3,
    opacity: 0,
    x: 600,
    delay: 0.5
  })
  .from(copyPs, {
    duration: 0.3,
    opacity: 0,
    x: 600,
    delay: 0.6
  })
  .from(pricePs, {
    duration: 0.3,
    opacity: 0,
    x: 600,
    delay: 0.8
  })
  .from(contactCta, {
    duration: 0.3,
    opacity: 0,
    x: 600,
    delay: 0.9
  })
  .from(emailPs, {
    duration: 0.3,
    opacity: 0,
    x: 600,
    delay: 0.9
  })
  .from(phonePs, {
    duration: 0.3,
    opacity: 0,
    x: 600,
    delay: 1
  });

}

$(function() {
  barba.init({
    // We don't want "synced transition"
    // because both content are not visible at the same time
    // and we don't need next content is available to start the page transition
    // sync: true,
    transitions: [{
      // NB: `data` was not used.
      // But usually, it's safer (and more efficient)
      // to pass the right container as a paramater to the function
      // and get DOM elements directly from it
      async leave(data) {
        // Not needed with async/await or promises
        // const done = this.async();

        await pageTransitionIn()
        // No more needed as we "await" for pageTransition
        // And i we change the transition duration, no need to update the delay…
        // await delay(1000)

        // Not needed with async/await or promises
        // done()

        // Loading screen is hiding everything, time to remove old content!
        data.current.container.remove()
      },

      async enter(data) {
        await pageTransitionOut(data.next.container)
      },
      // Variations for didactical purpose…
      // Better browser support than async/await
      // enter({ next }) {
      //   return pageTransitionOut(next.container);
      // },
      // More concise way
      // enter: ({ next }) => pageTransitionOut(next.container),

      async once(data) {
        await contentAnimation(data.next.container);
      }
    }]
  });

});






// $(document).ready(function(){
//   $('.menu-link').click(function(e) {
//     e.preventDefault();
//     var linkUrl = $(this).attr('href');
//     setTimeout(function(url) { window.location = url; }, 200, linkUrl);
//   });
// });
//
// // Homepage
// gsap.from('.logo-home',{
//   opacity: 0,
//   duration: 1,
//   ease: "circ.in",
//   delay: 6
// });
// gsap.from('.content-copy-home',{
//   opacity: 0,
//   duration: 1,
//   ease: "circ.in",
//   delay: 6.5
// });
// // gsap.to('.menu',{
// //   width:66,
// //   duration: 0.5
// // });
//
// //LOADING PAGE
// gsap.from('.loading-screen-content',{
//   opacity: 0,
//   duration: 1,
//   ease: "circ.in"
// });
// gsap.to('.loading-screen',{
//   display:'none',
//   opacity:0,
//   duration: 1,
//   delay: 5
// });
// gsap.to('.homepage-fullscreen-menu',{
//   opacity:1,
//   duration:1,
//   delay:12
// });
//
// // create main timeline
// var masterTl = new TimelineMax({paused:true, onComplete:onComplete});
//
// // make this all happen on page load
// function init(){
// masterTl.play();
// }
// // Test play reverse
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
// // on load timeline
//
// var tlMenuLoad = new TimelineLite()
// // Menu bar
//
//   .from(menuIcons,{
//     opacity: 0,
//     duration: 0.5,
//     x: -50,
//     stagger: 0.1,
//     ease: "power4.out",
//     delay: 2.5
//   }, "-=2")
//   .from(socials, {
//     duration: 0.7,
//     opacity: 0,
//     x: -50,
//     stagger: 0.1
//   }, "-=1")
//   .to(menu,  {
//     duration:0.5,
//     width: 66,
//     ease: "power4.out",
//     delay: 2
//   }, "-=2");
//
// var tlOnLoad = new TimelineLite()
//   .to('.background-img', {
//     opacity: 1,
//     duration: 0.3,
//     delay: 0.2
//   })
//   .from('.content-right',{
//     duration: 0.3,
//     x: 600,
//     delay: 0.5
//   }, "-=1")
//   .from('.content-title', {
//     duration: 0.3,
//     opacity: 0,
//     x: 600,
//     delay: 0.5
//   }, "-=1")
//   .from(copyPs, {
//     duration: 0.3,
//     opacity: 0,
//     x: 600,
//     delay: 0.6
//   }, "-=1")
//   .from(pricePs, {
//     duration: 0.3,
//     opacity: 0,
//     x: 600,
//     delay: 0.8
//   }, "-=1")
//   .from(contactCta, {
//     duration: 0.3,
//     opacity: 0,
//     x: 600,
//     delay: 0.9
//   }, "-=1")
//   .from(emailPs, {
//     duration: 0.3,
//     opacity: 0,
//     x: 600,
//     delay: 0.9
//   }, "-=1")
//   .from(phonePs, {
//     duration: 0.3,
//     opacity: 0,
//     x: 600,
//     delay: 1
//   }, "-=1");
//
// // Create a paused timeline with our tweens
// // On load timelines
//
//
// // Hover timelines
// // menu bar width on hover
// var tl1 = new TimelineLite({ paused: true })
//   .to(menu, 0.01, {
//     width: 190
//   });
//   // .to(menuBg, 0.01, {
//   //   width: 190
//   // });
//   // menu bar icons move and grow on hover
//   var tl2 = new TimelineLite({ paused: true})
//     tl2.to(menuIcons, 0.1, {
//       width: 22,
//       x: 40,
//       // y: -20,
//       stagger: 0.1
//     });
//   // menu bar text fade in on hover
//   var tl3 = new TimelineLite({ paused: true})
//     tl3.to(menuItem, 0.1, {
//       display: 'block',
//       width: 150,
//       opacity: 1,
//       stagger: 0.05
//     });
//   // logo fade in on menu hover
//   var tl4 = new TimelineLite({ paused: true})
//     tl4.to(menuLogo, 0.2, {
//       opacity:1
//     });
//   // social media icons move right
//   var tl5 = new TimelineLite({ paused: true})
//     tl5.to(socials, 0.1, {
//       x: 60,
//       stagger: 0.1
//     });
//     var tl7 = new TimelineLite({paused: true})
//       .to(menuItem,{
//         duration: 0.2,
//         stagger: 0.1,
//         opacity: 0,
//         delay: 0.1,
//         x: -100,
//       })
//       .to(menuIcons,{
//         duration: 0.2,
//         stagger: 0.1,
//         opacity: 0,
//         delay: 0.1,
//         x: -100,
//       },"-=1");
//
//   // click timelines
//   // var tl6 = new TimelineLite({ paused: true})
//   //   tl6.to(menu, 0.2, {
//   //     width: 0,
//   //     x: 0
//   //   });
//
//
// // Trigger animations on different events
// function onComplete() {
//     // Add event handlers for mouse enter/leave
//     menu.addEventListener("mouseenter", function() {
//       tl1.play();
//       tl2.play();
//       tl3.play();
//       tl4.play();
//       tl5.play();
//      } );
//     menu.addEventListener("mouseleave", function() {
//       gsap.delayedCall(0.8, function(){
//        tl1.reverse();
//     });
//       tl2.reverse();
//       tl3.reverse();
//       tl4.reverse();
//       tl5.reverse();
//      } );
// }
//
// // select all the buttons individually
// for (var i = 0; i < buttons.length; i++) {
//   buttons[i].onclick = function(){
//     // tl6.play();
//     tl7.play();
//     tlOnLoad.reverse();
//     tl1.reverse();
//     // tl2.reverse();
//     // tl3.reverse();
//     tl5.reverse();
//
//   }
// }
//
//
// window.onload = init;








// WORKING SCRIPT PRE GETTING TERMS PAGE
// // $(document).ready(function(){
// //   $('.menu-link').click(function(e) {
// //     e.preventDefault();
// //     var linkUrl = $(this).attr('href');
// //     setTimeout(function(url) { window.location = url; }, 1200, linkUrl);
// //   });
// // });
//
// // Homepage
// gsap.from('.logo-home',{
//   opacity: 0,
//   duration: 1,
//   ease: "circ.in",
//   delay: 6
// });
// gsap.from('.content-copy-home',{
//   opacity: 0,
//   duration: 1,
//   ease: "circ.in",
//   delay: 6.5
// });
// // gsap.to('.menu',{
// //   width:66,
// //   duration: 0.5
// // });
//
// //LOADING PAGE
// gsap.from('.loading-screen-content',{
//   opacity: 0,
//   duration: 1,
//   ease: "circ.in"
// });
// gsap.to('.loading-screen',{
//   display:'none',
//   opacity:0,
//   duration: 1,
//   delay: 5
// });
// gsap.to('.homepage-fullscreen-menu',{
//   opacity:1,
//   duration:1,
//   delay:12
// });
//
// // create main timeline
// var masterTl = new TimelineMax({paused:true, onComplete:onComplete});
//
// // make this all happen on page load
// function init(){
// masterTl.play();
// }
// // Test play reverse
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
// var loadingScreen = document.querySelector('.loading-screen-fade');
// var contactCta = select(".content-cta");
// var menu = select(".menu");
// var menuBg = select(".menu-bg");
// var menuIcons = selectAll(".menu-icon");
// var menuItem = selectAll(".menu-item");
// var menuLogo = select("#logo-text");
// var socials = selectAll(".social-media-icon");
// // on load timeline
//
// var tlMenuLoad = new TimelineLite()
// // Menu bar
//
//   .from(menuIcons,{
//     opacity: 0,
//     duration: 0.5,
//     x: -50,
//     stagger: 0.1,
//     ease: "power4.out",
//     delay: 2.5
//   }, "-=2")
//   .from(socials, {
//     duration: 0.7,
//     opacity: 0,
//     x: -50,
//     stagger: 0.1
//   }, "-=1")
//   .to(menu,  {
//     duration:0.5,
//     width: 66,
//     ease: "power4.out",
//     delay: 2
//   }, "-=2");
//
// var tlOnLoad = new TimelineLite()
//   .to('.background-img', {
//     opacity: 1,
//     duration: 0.3,
//     delay: 0.3
//   })
//   .from('.content-right',{
//     duration: 0.3,
//     x: 600,
//     delay: 0.5
//   }, "-=1")
//   .from('.content-title', {
//     duration: 0.3,
//     opacity: 0,
//     x: 600,
//     delay: 0.5
//   }, "-=1")
//   .from(copyPs, {
//     duration: 0.3,
//     opacity: 0,
//     x: 600,
//     delay: 0.6
//   }, "-=1")
//   .from(pricePs, {
//     duration: 0.3,
//     opacity: 0,
//     x: 600,
//     delay: 0.8
//   }, "-=1")
//   .from(contactCta, {
//     duration: 0.3,
//     opacity: 0,
//     x: 600,
//     delay: 0.9
//   }, "-=1")
//   .from(emailPs, {
//     duration: 0.3,
//     opacity: 0,
//     x: 600,
//     delay: 0.9
//   }, "-=1")
//   .from(phonePs, {
//     duration: 0.3,
//     opacity: 0,
//     x: 600,
//     delay: 1
//   }, "-=1");
//
// // Create a paused timeline with our tweens
// // On load timelines
//
//
// // Hover timelines
// // menu bar width on hover
// var tl1 = new TimelineLite({ paused: true })
//   .to(menu, 0.01, {
//     width: 190
//   });
//   // .to(menuBg, 0.01, {
//   //   width: 190
//   // });
//   // menu bar icons move and grow on hover
//   var tl2 = new TimelineLite({ paused: true})
//     tl2.to(menuIcons, 0.1, {
//       width: 22,
//       x: 60,
//       // y: -20,
//       stagger: 0.1
//     });
//   // menu bar text fade in on hover
//   var tl3 = new TimelineLite({ paused: true})
//     tl3.to(menuItem, 0.1, {
//       display: 'block',
//       width: 190,
//       opacity: 1,
//       stagger: 0.05
//     });
//   // logo fade in on menu hover
//   var tl4 = new TimelineLite({ paused: true})
//     tl4.to(menuLogo, 0.2, {
//       opacity:1
//     });
//   // social media icons move right
//   var tl5 = new TimelineLite({ paused: true})
//     tl5.to(socials, 0.1, {
//       x: 60,
//       stagger: 0.1
//     });
//     var tl7 = new TimelineLite({paused: true})
//       .to(menuItem,{
//         duration: 0.2,
//         stagger: 0.1,
//         opacity: 0,
//         delay: 0.1,
//         x: -100,
//       })
//       .to(menuIcons,{
//         duration: 0.2,
//         stagger: 0.1,
//         opacity: 0,
//         delay: 0.1,
//         x: -100,
//       },"-=1")
//       .to(loadingScreen,{
//         opacity: 1,
//         duration: 0.5,
//         delay: 0.2
//       });
//
//   // click timelines
//   // var tl6 = new TimelineLite({ paused: true})
//   //   tl6.to(menu, 0.2, {
//   //     width: 0,
//   //     x: 0
//   //   });
//
//
// // Trigger animations on different events
// function onComplete() {
//     // Add event handlers for mouse enter/leave
//     menu.addEventListener("mouseenter", function() {
//       tl1.play();
//       tl2.play();
//       tl3.play();
//       tl4.play();
//       tl5.play();
//      } );
//     menu.addEventListener("mouseleave", function() {
//       gsap.delayedCall(0.8, function(){
//        tl1.reverse();
//     });
//       tl2.reverse();
//       tl3.reverse();
//       tl4.reverse();
//       tl5.reverse();
//      } );
// }
//
// // select all the buttons individually
// for (var i = 0; i < buttons.length; i++) {
//   buttons[i].onclick = function(){
//     // tl6.play();
//     tl7.play();
//     tlOnLoad.reverse();
//     tl1.reverse();
//     // tl2.reverse();
//     // tl3.reverse();
//     tl5.reverse();
//
//   }
// }
//
//
// window.onload = init;
//
// function pageTransitionIn() {
//     tl7.play()
//     var tlPageIn = new TimelineLite()
//     .to(loadingScreen, {
//       duration: .2,
//       opacity:1
//     });
// };
// function pageTransitionOut(container) {
//   var tlPageOut = new TimelineLite()
//   .to(loadingScreen, {
//     delay: 1,
//     duration: .4,
//     opacity:0
//   })
// };
//
// $(function() {
//   barba.init({
//     // We don't want "synced transition"
//     // because both content are not visible at the same time
//     // and we don't need next content is available to start the page transition
//     // sync: true,
//     transitions: [{
//       // NB: `data` was not used.
//       // But usually, it's safer (and more efficient)
//       // to pass the right container as a paramater to the function
//       // and get DOM elements directly from it
//       async leave(data) {
//         // Not needed with async/await or promises
//         // const done = this.async();
//
//         await pageTransitionIn()
//         // No more needed as we "await" for pageTransition
//         // And i we change the transition duration, no need to update the delay…
//         // await delay(1000)
//
//         // Not needed with async/await or promises
//         // done()
//
//         // Loading screen is hiding everything, time to remove old content!
//         data.current.container.remove()
//       },
//
//       async enter(data) {
//         await pageTransitionOut(data.next.container)
//       },
//       // Variations for didactical purpose…
//       // Better browser support than async/await
//       // enter({ next }) {
//       //   return pageTransitionOut(next.container);
//       // },
//       // More concise way
//       // enter: ({ next }) => pageTransitionOut(next.container),
//
//       async once(data) {
//         await contentAnimation(data.next.container);
//       }
//     }]
//   });
//
// });
