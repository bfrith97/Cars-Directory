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