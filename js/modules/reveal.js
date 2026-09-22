const reveals = document.querySelectorAll(".reveal, .reveal-left");

const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            entry.target.classList.add("active");
        }
    });
});

reveals.forEach((reveal) => {
    observer.observe(reveal);
});