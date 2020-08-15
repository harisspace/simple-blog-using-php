// selector
const navToggle = document.querySelector('.nav-toggle');
const list = document.querySelector('.container-list');
const closes = document.querySelectorAll('.nav-toggle i');
// eventlistener
navToggle.addEventListener('click', showMenu);






// function
function showMenu(event) {
    list.classList.toggle('show');
    for (let i = 0; i < closes.length; i++) {
        if (i === 0) {
            closes[i].classList.toggle('close-top');
        }
        if (i === 1) {
            closes[i].classList.toggle('close-center');
        }
        if (i === 2) {
            closes[i].classList.toggle('close-bottom');
        }
    }
}
