const burger = document.querySelector('.humb');
const burgerNav = document.querySelector('.nav--humb');

burger.addEventListener('click', () => {
    burger.classList.toggle('active');
    burgerNav.classList.toggle('active');
})
