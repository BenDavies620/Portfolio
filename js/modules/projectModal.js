
const projectcards = document.querySelectorAll('.project-card');
const projectModal = document.querySelector('.project-modal');

if (projectModal) {
    const modalImage = document.querySelector('.project-modal img');
    const modalTitle = document.querySelector('.project-modal h2');
    const modalDescription = document.querySelector('.project-modal p');
    const modalClose = document.querySelector('.modal-close');
    const modalLive = document.querySelector('.modal-links a');
    const modalGithub = document.querySelector('.modal-links a:last-child');

    projectcards.forEach(function(card) {
        const viewLink = card.querySelector('.view-link');

        viewLink.addEventListener('click', function(event) {
            event.preventDefault();
        });

        card.addEventListener('click', () => {
            projectModal.classList.add('show');
            document.documentElement.classList.add('modal-open');

            modalTitle.textContent = card.querySelector('h3').textContent;
            modalImage.src = card.querySelector('img').src;
            modalImage.alt = card.querySelector('img').alt;
            modalDescription.textContent = card.dataset.description;
            modalLive.href = card.dataset.live;
            modalGithub.href = card.dataset.github;
        });
    });

    modalClose.addEventListener('click', function() {
        projectModal.classList.remove('show');
        document.documentElement.classList.remove('modal-open');
    });

    projectModal.addEventListener('click', function(event) {
        if (event.target === projectModal) {
            projectModal.classList.remove('show');
            document.documentElement.classList.remove('modal-open');
        }
    });

    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape') {
            projectModal.classList.remove('show');
            document.documentElement.classList.remove('modal-open');
        }
    });
}
