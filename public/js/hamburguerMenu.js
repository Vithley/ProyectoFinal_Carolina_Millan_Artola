//Menú Hamburguesa 

const navSlide = () => {
    const burger = document.querySelector('.menu-burger');
    const nav = document.querySelector('.nav-links');
    const navLinks = document.querySelectorAll('.nav-links li');

    burger.addEventListener('click', () => {
        //Botón
        nav.classList.toggle('nav-active');

        //Animación de links
        navLinks.forEach((link, index) => {
            if(link.style.animation) {
                link.style.animation = ''
            } else {
                link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.4}s`
            }
        });

        //Animación
        burger.classList.toggle('toggle');

    });
}

navSlide();