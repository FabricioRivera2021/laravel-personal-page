'use strict'

//Botones de la navbar
const btn = document.querySelector('.hamburguer-btn');
const menu = document.querySelector('#navbar')
const link = [...document.querySelectorAll('li')];

//Animacion de maquina de escribir
const { childNodes } = document.querySelector('.hero-text')
const li = [...childNodes][1]
const values = ['HTML | CSS | JavaScript | React | PHP | MySQL']
const sleep = (ms) => {
    return new Promise((resolve) => setTimeout(resolve, ms));
}
let sleepTime = 40;
let currentTextIndex = 0;
const write = async() => {
        let currentText = values[currentTextIndex];

        for (let i = 0; i < currentText.length; i++) {
            li.innerText = currentText.substring(0, i + 1);
            if(currentText.substring(i, i + 1) === '|'){
                await sleep(80)
            }else{
                await sleep(sleepTime);
            }
        }
}
write();
//Fin animacion

//menu desplegable
btn.addEventListener('click', () => {
    menu.classList.toggle('active-menu');
    link.map(elem => {
        if (elem.classList.contains('hidden'))
            elem.classList.toggle('active-link')
    })
})
//fin menu desplegable

//scrol de las secciones
//secciones de la pagina
const section = [...document.querySelectorAll('section')];

const checkCurrentSection = () => {
    const triggerBottom = window.innerHeight / 5 * 4;
    section.forEach(currentSection => {
        const currentSectionTop = currentSection.getBoundingClientRect().top;

        if (currentSection.id === 'hero') return

        if(currentSectionTop < triggerBottom){
            currentSection.classList.add('active-fadein');
        }else{
            currentSection.classList.remove('active-fadein');
        }
    })
}

window.addEventListener('scroll', checkCurrentSection);

window.addEventListener('DOMContentLoaded', () => {
    section[0].classList.add('active-fadein');
})

//mostrar flecha UP link
const upArrowLink = document.querySelector('.up-link');

window.addEventListener('scroll', function() {
    // Distance between the top of the document and the bottom of the viewport
    let scrollPosition = window.innerHeight + window.pageYOffset;
    // Total height of the document, including scrollable area
    let documentHeight = document.documentElement.scrollHeight;
    // Check if the user has scrolled to the bottom of the page
    if (scrollPosition > documentHeight - 400) {
      // You have reached the end of the page
      upArrowLink.classList.add('up-link-active')
      // Perform any necessary actions or trigger an event
    }else{
      upArrowLink.classList.remove('up-link-active')
    }
});
