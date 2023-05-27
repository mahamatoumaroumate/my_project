let hotels = [
  {
    img: './images/hotelx1.jpg',
    h1: 'Book Your Hotel Now',
  },
  {
    img: './images/hotel_12.jpg',
    h1: 'Have A great time',
  },
  {
    img: './images/hotelx2.jpg',
    h1: 'Enjoy your time',
  },
  {
    img: './images/hotel_15.jpg',
    h1: 'The best time of your life',
  },
  {
    img: './images/hotel_16.jpg',
    h1: 'live is beautifulls',
  },
]
let rooms = [
  {
    room: './images/roomx1.jpg',
  },
  {
    room: './images/roomx2.jpg',
  },
  {
    room: './images/roomx3.jpg',
  },
  {
    room: './images/roomx4.jpg',
  },
  {
    room: './images/hotel3.jpg',
  },
  {
    room: './images/hotel4.jpg',
  },
  {
    room: 'https://images.unsplash.com/photo-1578683010236-d716f9a3f461?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzUwfHxyb29tc3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60',
  },
  {
    room: 'https://images.unsplash.com/photo-1540518614846-7eded433c457?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzQ2fHxyb29tc3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60',
  },
  {
    room: 'https://plus.unsplash.com/premium_photo-1678297269980-16f4be3a15a6?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzI1fHxyb29tc3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60',
  },
  {
    room: 'https://plus.unsplash.com/premium_photo-1675615649180-045cc3567554?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjQxfHxyb29tc3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60pg',
  },
  {
    room: 'https://images.unsplash.com/photo-1493809842364-78817add7ffb?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTQ3fHxyb29tc3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60',
  },
  {
    room: 'https://plus.unsplash.com/premium_photo-1675615667748-83da03046d30?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTIxfHxyb29tc3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60',
  },
  {
    room: 'https://images.unsplash.com/photo-1546555648-fb7876c40c58?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTE2fHxyb29tc3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60',
  },
  {
    room: 'https://plus.unsplash.com/premium_photo-1675615949743-6ec930d87410?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTA5fHxyb29tc3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60',
  },
  {
    room: 'https://images.unsplash.com/photo-1603423979248-befb6898ba7b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzR8fHJvb21zfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60',
  },
  {
    room: 'https://images.unsplash.com/photo-1583847268964-b28dc8f51f92?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cm9vbXN8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60',
  },
  {
    room: 'https://images.unsplash.com/photo-1598928506311-c55ded91a20c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80',
  },
  {
    room: 'https://images.unsplash.com/photo-1594130139005-3f0c0f0e7c5e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NDJ8fGhvdGVsJTIwcm9vbXN8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60',
  },
]
let index = 0
const center = document.querySelector('.main-center')
const btn = document.querySelector('.btn')
const divload = document.querySelector('.div1-1')
window.addEventListener('DOMContentLoaded', function () {
  center.innerHTML = `<div class="main-center1">
         <img src="${hotels[2].img}" class="image1" alt="">
          <h1>${hotels[2].h1}</h1>
          <br />
        </div>`
  for (let i = 0; i < 6; i++) {
    let element = document.createElement('div')
    element.classList.add('div1-1-1')
    element.innerHTML = ` <img src="${rooms[i].room}" class="image2" alt="">
     <article>
      <h3>Room${i + 1}</h3>
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium, exercitationem.</p>
      <br>
      <button type="button"><a href="login-hotels.php">Book Now</a></button>
     </article>`
    divload.appendChild(element)
  }
})
function make() {
  index++
  if (index > hotels.length - 1) {
    index = 0
  }
  center.innerHTML = `<div class="main-center1">
         <img src="${hotels[index].img}" class="image1" alt="">
          <h1>${hotels[index].h1}</h1>
          <br />
        </div>`
}

let flag = false
btn.addEventListener('click', function () {
  if (flag == false) {
    for (let i = divload.childElementCount; i < rooms.length; i++) {
      let element = document.createElement('div')
      element.classList.add('div1-1-1')
      element.innerHTML = ` <img src="${rooms[i].room}" class="image2" alt="">
     <article>
      <h3>Room${i + 1}</h3>
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium, exercitationem.</p>
      <br>
      <button type="button"><a href="#">Book Now</a></button>
     </article>`
      divload.appendChild(element)
    }
  }
  btn.style.display = 'none'
})
const Allimages = document.querySelectorAll('.div2-1-1')
let items = document.querySelectorAll('.items')
let id
items.forEach(function (item) {
  item.addEventListener('click', function (e) {
    id = e.currentTarget.dataset.id
    console.log(e.currentTarget.dataset.id)
    Allimages.forEach(function (image) {
      if (image.classList.contains(id)) {
        image.classList.remove('hide')
      } else {
        image.classList.add('hide')
      }
    })
  })
})
const centerdiv = document.querySelector('.center')
const toggle = document.querySelector('.btn-toggle')
toggle.addEventListener('click', function () {
  centerdiv.classList.toggle('show')
})
const scrolldiv = document.querySelectorAll('.scroll')
scrolldiv.forEach(function (scr) {
  scr.addEventListener('click', function (e) {
    e.preventDefault()
    let id = e.currentTarget.getAttribute('href').slice(1)
    let element2 = document.getElementById(id)
    let position = element2.offsetTop - 60
    window.scrollTo({
      left: 0,
      top: position,
    })
    centerdiv.classList.remove('show')
  })
})
const toplink = document.querySelector('.top')
window.addEventListener('scroll', function () {
  let h = window.scrollY
  if (h > 300) {
    toplink.classList.add('show2')
  } else {
    toplink.classList.remove('show2')
  }
})
