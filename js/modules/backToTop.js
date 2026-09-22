const backTop = document.querySelector(".back-top-btn");

backTop.addEventListener('click', () => {
    event.preventDefault();
    window.scrollTo({
        top:0,
        behavior: 'smooth'
    });
});

window.addEventListener('scroll', () => {
    if (window.scrollY > 300) {
        backTop.classList.add("show"); 
    } else {
        backTop.classList.remove("show");
    }
});
