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
const audiNavSelector = document.querySelector('.brand-selector-audi');
const bmwNavSelector = document.querySelector('.brand-selector-bmw');
const mercNavSelector = document.querySelector('.brand-selector-mercedes');

audiNavSelector.addEventListener('click', () => {
    audiNavSelector.classList.add("brand-selector-current")
    bmwNavSelector.classList.remove("brand-selector-current")
    mercNavSelector.classList.remove("brand-selector-current")
})

bmwNavSelector.addEventListener('click', () => {
    bmwNavSelector.classList.add("brand-selector-current")
    audiNavSelector.classList.remove("brand-selector-current")
    mercNavSelector.classList.remove("brand-selector-current")
})

mercNavSelector.addEventListener('click', () => {
    mercNavSelector.classList.add("brand-selector-current")
    bmwNavSelector.classList.remove("brand-selector-current")
    audiNavSelector.classList.remove("brand-selector-current")
})