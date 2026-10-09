//==============================
// Mobile Navigation Demo
//==============================
const demoSidebar = document.querySelector('.demo-sidebar');
const demoBurger = document.querySelector('.demo-burger');

if (demoSidebar && demoBurger) {
    demoBurger.addEventListener('click', () => {
        const isOpen = demoSidebar.classList.toggle('open');

        demoBurger.classList.toggle('open', isOpen);
        demoBurger.setAttribute('aria-expanded', String(isOpen));
        demoSidebar.inert = !isOpen;
    });
}
