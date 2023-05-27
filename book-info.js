const price = document.querySelector('#price')
let random = Math.floor(Math.random() * 200 + 100)
window.addEventListener('DOMContentLoaded', function () {
  price.innerHTML = `${random}`
})
