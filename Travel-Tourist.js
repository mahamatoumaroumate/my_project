const togglebtn = document.querySelector('.bars')
const listItems = document.querySelector('.center')
const div1 = document.querySelector('.right-1')
const maincenter = document.querySelector('.main-center')
const toplink = document.querySelector('.top')
togglebtn.addEventListener('click', function () {
  listItems.classList.toggle('show')
  div1.classList.toggle('show')
  maincenter.classList.add('hw')
})
window.addEventListener('scroll', function () {
  let h = window.scrollY
  if (h > 300) {
    toplink.classList.add('show')
  } else {
    toplink.classList.remove('show')
  }
})
const scrolldiv = document.querySelectorAll('.scroll')
scrolldiv.forEach(function (scr) {
  scr.addEventListener('click', function (e) {
    e.preventDefault()
    let id = e.currentTarget.getAttribute('href').slice(1)
    let element2 = document.getElementById(id)
    let position = element2.offsetTop - 55
    window.scrollTo({
      left: 0,
      top: position,
    })
    listItems.classList.remove('show')
    div1.classList.remove('show')
  })
})
