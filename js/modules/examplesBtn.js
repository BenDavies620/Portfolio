const demoSidebar = document.querySelector('.demo-sidebar');
const demoBurger = document.querySelector('.demo-burger');

if (demoSidebar && demoBurger) {
    demoBurger.addEventListener('click', () => {
        demoSidebar.classList.toggle('open');
        demoBurger.classList.toggle('open');
    });
}