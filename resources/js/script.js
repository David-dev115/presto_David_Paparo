
// console.log('ciao');

let navbar = document.querySelector('#navbar');

window.addEventListener('scroll' , ()=> {

    let scrolled = window.scrollY ;

    if (scrolled > 0){
        navbar.classList.remove('bg-grey');
        navbar.classList.add('bg-blue_2');
    } else {
        navbar.classList.add('bg-grey');
        navbar.classList.remove('bg-blue_2');
        
    }

    
})



