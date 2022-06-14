<<<<<<< HEAD
/*BACK TO TOP BUTTON*/
const toTop = document.querySelector(".to-top");

window.addEventListener("scroll", () => {
    if(window.pageYOffset > 100) {
        toTop.classList.add("active");
    } else {
        toTop.classList.remove("active");
    }
})

/*MOBILE MENU BUTTON*/
const toggleButton = document.getElementsByClassName('toggle-button')[0]
const navbarLinks = document.getElementsByClassName('navbar-links')[0]

toggleButton.addEventListener("click", () => {
    navbarLinks.classList.toggle('active')
=======
/*BACK TO TOP BUTTON*/
const toTop = document.querySelector(".to-top");

window.addEventListener("scroll", () => {
    if(window.pageYOffset > 100) {
        toTop.classList.add("active");
    } else {
        toTop.classList.remove("active");
    }
})

/*MOBILE MENU BUTTON*/
const toggleButton = document.getElementsByClassName('toggle-button')[0]
const navbarLinks = document.getElementsByClassName('navbar-links')[0]

toggleButton.addEventListener("click", () => {
    navbarLinks.classList.toggle('active')
>>>>>>> 7091f54bc340f3278e55c1bbf3768b466350532e
})