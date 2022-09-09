const header = document.querySelector('.header')

const redSelector = document.querySelector('.selector-red');
const blueSelector = document.querySelector('.selector-blue');
const greenSelector = document.querySelector('.selector-green');

redSelector.addEventListener('click', () => {
    header.style.backgroundColor = "rgb(255, 124, 124)"
})

blueSelector.addEventListener('click', () => {
    header.style.backgroundColor = "rgba(124, 194, 255)"
})

greenSelector.addEventListener('click', () => {
    header.style.backgroundColor = "rgb(182, 246, 182)"
})

