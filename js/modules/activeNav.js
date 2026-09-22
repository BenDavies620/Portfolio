const portfolioSection = document.querySelector('#portfolio');
const contactSection = document.querySelector('#contact');

const portfolioLink = document.querySelector('a[href="#portfolio"]');
const contactLink = document.querySelector('a[href="#contact"]');

if (portfolioSection && contactSection && portfolioLink && contactLink) {
    const navObserver = new IntersectionObserver(function(entries) {
        entries.forEach(function(entry) {
            if (entry.isIntersecting) {
                portfolioLink.classList.remove('active');
                contactLink.classList.remove('active');

                if (entry.target === portfolioSection) {
                    portfolioLink.classList.add('active');
                }

                if (entry.target === contactSection) {
                    contactLink.classList.add('active');
                }
            }

            if (!entry.isIntersecting) {

                if (entry.target === portfolioSection) {
                    portfolioLink.classList.remove('active');
                }

                if (entry.target === contactSection) {
                    contactLink.classList.remove('active');
                }
            }
        });
    }, {
        threshold: 0.4
    });
    navObserver.observe(portfolioSection);
    navObserver.observe(contactSection);
}