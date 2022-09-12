const header = document.querySelector('.header')


// Theme Selectors
const redSelector = document.querySelector('.selector-red');
const blueSelector = document.querySelector('.selector-blue');
const greenSelector = document.querySelector('.selector-green');
const brandSelectors = document.querySelector('.brand-selectors')
const submitBtn = document.querySelector('.submit')

redSelector.addEventListener('click', () => {
    header.style.backgroundColor = "rgb(255, 124, 124)"
    brandSelectors.style.backgroundColor = "rgb(255, 124, 124, 0.5)"
})

blueSelector.addEventListener('click', () => {
    header.style.backgroundColor = "rgba(124, 194, 255)"
    brandSelectors.style.backgroundColor = "rgba(124, 194, 255, 0.5)"

})

greenSelector.addEventListener('click', () => {
    header.style.backgroundColor = "rgb(182, 246, 182)"
    brandSelectors.style.backgroundColor = "rgb(182, 246, 182, 0.5)"

})

// Brand Selectors
const audiNavSelector = document.querySelector('.brand-selector-audi');
const bmwNavSelector = document.querySelector('.brand-selector-bmw');
const mercNavSelector = document.querySelector('.brand-selector-mercedes');
const jagNavSelector = document.querySelector('.brand-selector-jaguar');
const fordNavSelector = document.querySelector('.brand-selector-ford');
const mazdaNavSelector = document.querySelector('.brand-selector-mazda');

// Window Selectors
const audiWindowSelector = document.querySelector('.cars-window-audi');
const bmwWindowSelector = document.querySelector('.cars-window-bmw');
const mercedesWindowSelector = document.querySelector('.cars-window-mercedes');
const jagWindowSelector = document.querySelector('.cars-window-jaguar');
const fordWindowSelector = document.querySelector('.cars-window-ford');
const mazdaWindowSelector = document.querySelector('.cars-window-mazda');

audiNavSelector.addEventListener('click', () => {
    audiNavSelector.classList.add("brand-selector-current");
    bmwNavSelector.classList.remove("brand-selector-current");
    mercNavSelector.classList.remove("brand-selector-current");
    jagNavSelector.classList.remove("brand-selector-current");
    fordNavSelector.classList.remove("brand-selector-current");
    mazdaNavSelector.classList.remove("brand-selector-current");
    audiWindowSelector.style.display = 'block';
    bmwWindowSelector.style.display = 'none';
    mercedesWindowSelector.style.display = 'none';
    jagWindowSelector.style.display = 'none';
    fordWindowSelector.style.display = 'none';
    mazdaWindowSelector.style.display = 'none';
})

bmwNavSelector.addEventListener('click', () => {
    bmwNavSelector.classList.add("brand-selector-current");
    audiNavSelector.classList.remove("brand-selector-current");
    mercNavSelector.classList.remove("brand-selector-current");
    jagNavSelector.classList.remove("brand-selector-current");
    fordNavSelector.classList.remove("brand-selector-current");
    mazdaNavSelector.classList.remove("brand-selector-current");
    bmwWindowSelector.style.display = 'block';
    mercedesWindowSelector.style.display = 'none';
    audiWindowSelector.style.display = 'none';
    jagWindowSelector.style.display = 'none';
    fordWindowSelector.style.display = 'none';
    mazdaWindowSelector.style.display = 'none';
})

mercNavSelector.addEventListener('click', () => {
    mercNavSelector.classList.add("brand-selector-current");
    bmwNavSelector.classList.remove("brand-selector-current");
    audiNavSelector.classList.remove("brand-selector-current");
    jagNavSelector.classList.remove("brand-selector-current");
    fordNavSelector.classList.remove("brand-selector-current");
    mazdaNavSelector.classList.remove("brand-selector-current");
    mercedesWindowSelector.style.display = 'block';
    bmwWindowSelector.style.display = 'none';
    audiWindowSelector.style.display = 'none';
    jagWindowSelector.style.display = 'none';
    fordWindowSelector.style.display = 'none';
    mazdaWindowSelector.style.display = 'none';
})

jagNavSelector.addEventListener('click', () => {
    jagNavSelector.classList.add("brand-selector-current");
    bmwNavSelector.classList.remove("brand-selector-current");
    audiNavSelector.classList.remove("brand-selector-current");
    mercNavSelector.classList.remove("brand-selector-current");
    fordNavSelector.classList.remove("brand-selector-current");
    mazdaNavSelector.classList.remove("brand-selector-current");
    jagWindowSelector.style.display = 'block';
    bmwWindowSelector.style.display = 'none';
    audiWindowSelector.style.display = 'none';
    mercedesWindowSelector.style.display = 'none'
    fordWindowSelector.style.display = 'none';
    mazdaWindowSelector.style.display = 'none';
})

fordNavSelector.addEventListener('click', () => {
    fordNavSelector.classList.add("brand-selector-current");
    bmwNavSelector.classList.remove("brand-selector-current");
    audiNavSelector.classList.remove("brand-selector-current");
    jagNavSelector.classList.remove("brand-selector-current");
    mercNavSelector.classList.remove("brand-selector-current");
    mazdaNavSelector.classList.remove("brand-selector-current");
    fordWindowSelector.style.display = 'block';
    mercedesWindowSelector.style.display = 'none'
    bmwWindowSelector.style.display = 'none';
    audiWindowSelector.style.display = 'none';
    jagWindowSelector.style.display = 'none';
    mazdaWindowSelector.style.display = 'none';
})

mazdaNavSelector.addEventListener('click', () => {
    mazdaNavSelector.classList.add("brand-selector-current");
    bmwNavSelector.classList.remove("brand-selector-current");
    audiNavSelector.classList.remove("brand-selector-current");
    jagNavSelector.classList.remove("brand-selector-current");
    fordNavSelector.classList.remove("brand-selector-current");
    mercNavSelector.classList.remove("brand-selector-current");
    mercedesWindowSelector.style.display = 'none';
    bmwWindowSelector.style.display = 'none';
    audiWindowSelector.style.display = 'none';
    jagWindowSelector.style.display = 'none';
    fordWindowSelector.style.display = 'none';
    mazdaWindowSelector.style.display = 'block';
})

let activeWindow = 'Audi'
