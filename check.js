const form = document.querySelector('.form')
let x = Math.floor(Math.random() * 10 + 1)
let y = Math.floor(Math.random() * 10 + 2)
let z = Math.floor(Math.random() * 10 + 3)
let s = document.createElement('select')
if (x !== y && y !== z) {
  s.innerHTML = `
  <option value="" disabled selected hidden>
              Please Choose A time Conform with You
            </option>
            <option value="${x}:am" name="1">${x}:am</option>
            <option value="${y}:pm" name="2">${y}:pm</option>
            <option value="${z}:am" name="3">${z}:am</option>
          `
} else {
  s.innerHTML = `
  <option value="" disabled selected hidden>
              Please Choose A time Conform with You
            </option>
            <option value="${x + 1}:am" name="1">${x + 1}:am</option>
            <option value="${y + 4}:pm" name="2">${y + 4}:pm</option>
            <option value="${z + 6}:am" name="3">${z + 6}:am</option>
          `
}
let id = document.createAttribute('id')
let name = document.createAttribute('name')
id.nodeValue = 'select'
name.nodeValue = 'select'
s.setAttributeNode(id)
s.setAttributeNode(name)
const price = document.querySelector('#price')
let random = Math.floor(Math.random() * 700 + 400)
window.addEventListener('DOMContentLoaded', function () {
  form.prepend(s)
  price.innerHTML = `${random}`
})
