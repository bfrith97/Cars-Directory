const header = document.querySelector('.header')


// Theme Selectors
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

// Brand Selectors
const audiSelector = document.querySelector('.brand-selector-audi');
const bmwSelector = document.querySelector('.brand-selector-bmw');
const mercSelector = document.querySelector('.brand-selector-mercedes');

audiSelector.addEventListener('click', () => {
    audiSelector.classList.add("brand-selector-current")
    bmwSelector.classList.remove("brand-selector-current")
    mercSelector.classList.remove("brand-selector-current")
})

bmwSelector.addEventListener('click', () => {
    bmwSelector.classList.add("brand-selector-current")
    audiSelector.classList.remove("brand-selector-current")
    mercSelector.classList.remove("brand-selector-current")
})

mercSelector.addEventListener('click', () => {
    mercSelector.classList.add("brand-selector-current")
    bmwSelector.classList.remove("brand-selector-current")
    audiSelector.classList.remove("brand-selector-current")
})