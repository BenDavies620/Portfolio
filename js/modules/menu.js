const sidebar = document.querySelector('.sidebar');
const burger = document.querySelector('.burger-btn');

burger.addEventListener('click', () => {
    if (sidebar.className === 'sidebar') {
        sidebar.classList.add('open');
        burger.classList.add('open');
    } else {
        sidebar.classList.remove('open');
        burger.classList.remove('open');
    }
});

document.addEventListener('click', (event) => {
    if (
        sidebar.classList.contains('open') &&
        !sidebar.contains(event.target) &&
        !burger.contains(event.target)
    ) {
        sidebar.classList.remove('open');
        burger.classList.remove('open');
    }
});

document.addEventListener('keydown', (event) => {
    if (event.key === 'Escape' && sidebar.classList.contains('open')) {
        sidebar.classList.remove('open');
        burger.classList.remove('open');
    }
});