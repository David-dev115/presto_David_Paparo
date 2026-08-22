
// console.log('ciao');

let navbar = document.querySelector('#navbar');

// window.addEventListener('scroll' , ()=> {

//     let scrolled = window.scrollY ;

//     if (scrolled > 0){
//         navbar.style.height='80px';
//     } else {
//         navbar.style.height='72px';

//     }


// })

window.addEventListener('scroll', () => {
    navbar.classList.toggle('scrolled', window.scrollY > 10);
});



