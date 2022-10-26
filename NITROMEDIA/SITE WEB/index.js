const ratio = .1
const options = {
    root: null,
    rootMargin: '0px',
    threshold: ratio
  }
  
  // ANIMATION HOME
  const handleIntersect = function (entries, observer) {
    entries.forEach(function (entry) {
    if (entry.intersectionRatio > ratio) {
       entry.target.classList.add('icon1-visible')
        observer.unobserve(entry.target)
        
    }     
    })
    
}
            
const observer = new IntersectionObserver(handleIntersect, options)
  document.querySelectorAll('[class*="icon-"]').forEach(function(r) {
    observer.observe(r)
  })

// ANIM IMG EDITING PACK
const handleIntersect2 = function (entries, observer) {
  entries.forEach(function (entry) {
  if (entry.intersectionRatio > ratio) {
     entry.target.classList.add('icon2-visible')
      observer.unobserve(entry.target)
      
  }     
  })
  
}

            
const observer2 = new IntersectionObserver(handleIntersect2, options)
document.querySelectorAll('[class*="icon2-"]').forEach(function(r2) {
  observer2.observe(r2)
})



// // ANIM TITLE PACK
const txtAnime = document.querySelector('#h1');
new Typewriter(txtAnime, {
  deleteSpeed: 20
})
.changeDelay(5)
.typeString ('<strong>EDITING PACKS</strong></br>')
.pauseFor(300)
.typeString('EVERYTHING IN THE SHOP')
.pause(1000)
.deleteChars(50)
.typeString ('<strong>EDITING PACKS</strong></br>')
.pauseFor(300)
.typeString('EVERYTHING IN THE SHOP')
.pause(650)
.start()

// ANIMATION TITLE SERVICES
const txtAnime1 = document.querySelector("#h2");
new Typewriter(txtAnime1, {
  deleteSpeed: 20
})
.changeDelay(5)
.typeString ('<strong>SERVICES DE MONTAGES</strong></br>')
.pauseFor(300)
.typeString('POUR VOUS')
.pause(1000)
.deleteChars(50)
.typeString ('<strong>CHOISISSEZ BIEN</strong></br>')
.pauseFor(300)
.typeString('VOS SERVICES')
.pause(650)
.start()





//ANIM FORMULAIRE SIGN UP - SIGN IN

var textWrapper = document.querySelector('.ml16');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
  .add({
    targets: '.ml16 .letter',
    translateY: [100,0],
    translateZ: 0,
    opacity: [0,1],
    easing: "easeOutExpo",
    duration: 1400,
    delay: (el, i) => 300 + 30 * i
  }).add({
    targets: '.ml16 .letter',
    translateY: [0,-100],
    opacity: [1,0],
    easing: "easeInExpo",
    duration: 1200,
    delay: (el, i) => 100 + 30 * i
  });


var textWrapper = document.querySelector('.ml17');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
  .add({
    targets: '.ml17 .letter',
    translateY: [100,0],
    translateZ: 0,
    opacity: [0,1],
    easing: "easeOutExpo",
    duration: 1400,
    delay: (el, i) => 300 + 30 * i
  }).add({
    targets: '.ml17 .letter',
    translateY: [0,-100],
    opacity: [1,0],
    easing: "easeInExpo",
    duration: 1200,
    delay: (el, i) => 100 + 30 * i
  });


//  const titre = document.querySelectorAll('.form')[0];
//  const titrefinal = titre.innerHTML;
//  let number = titrefinal.length
//  var intervalId = null;
//  function finish() {
//    clearInterval(intervalId);
//  }
//  function bip() {
//     number--;
//      if(number < 0) finish();
//      else {
//       titre.innerHTML = titrefinal.substring(0, titrefinal.length - number )
//      }
//  }
//  function start(){
//    intervalId = setInterval(bip, 300);
//  }

//  start()



// ANIM SIGN IN FORMULAIRE

// // ANIM TITLE FAQ
// const txtAnime2 = document.querySelector('#h3');
// new Typewriter(txtAnime2, {
//   deleteSpeed: 20
// })
// .changeDelay(5)
// .typeString ('<strong>FAQ</strong></br>')
// .pauseFor(300)
// .typeString('AND')
// .pause(1000)
// .deleteChars(20)
// .typeString ('<strong>CONTACT</strong></br>')
// .pauseFor(300)
// .typeString('IN THIS PAGE')
// .pause(650)
// .start()