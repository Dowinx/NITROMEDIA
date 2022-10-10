const ratio = .1
const options = {
    root: null,
    rootMargin: '0px',
    threshold: ratio
  }
  
  const handleIntersect = function (entries, observer) {
    entries.forEach(function (entry) {
    if (entry.intersectionRatio> ratio) {
        entry.target.classList.add('icon1-visible', "icontest")
        observer.unobserve(entry.target)
    }
    })
}  
              

  
  
  const observer = new IntersectionObserver(handleIntersect, options)
  document.querySelectorAll('[class*="icon-"]').forEach(function(r) {
    observer.observe(r)
  })