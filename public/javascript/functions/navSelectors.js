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

export function audiActive() {
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
}

export function bmwActive() {
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
}

export function mercActive() {
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
}

export function jagActive() {
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
}

export function fordActive() {
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
}

export function mazdaActive() {
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
}