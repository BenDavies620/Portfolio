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