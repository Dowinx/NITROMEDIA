const ratio = .1
const options = {
    root: null,
    rootMargin: '0px',
    threshold: ratio
  }
  
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

 const txtAnim = document.querySelectorAll('h1')

 new Typewriter(txtAnim, {
    // deleteSpeed: 20
 })
 .typeString('Editing Pack')
  .pauseFor(300)
  .typeString('<strong>,Everything in the shop</strong>')  
  .start()
  





// // animation mot par mot
// const title = document.querySelector
//   function animateTitle(selector) {
//     const title = document.querySelector(selector) 
//     if (title === null ) {
//       console.error('Impossible de triuver l\'élément' + selector)
//       return
//     }
//   }


//   // On construit un tableau contenant la nouvelle structure

//   const children = Array.from(animateTitle.childrenNodes)
//    let elements = []
//   children.forEach(child => {
//     if (child.nodeType === Node.TEXT_NODE) {
//         const words = child.textContent.split(' ')
//         const spans = words.map(wrapWord)
//         console.log(spans)
//         elements =elements.concat(spans)
//   }else {
//       elements.push(child)
//     }
//   })
// // On utilise ce tableau et on injecte les éléments dans title



// function wrapWord (word) {
//   const span = document.createElement('span')
//   const span2 = document.createElement('span')
//   span.appendChild(span2)
//   span2.innerHTML = word
//   return span
// }

// animateTitle('.title')