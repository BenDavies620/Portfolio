//====================
//COOKIE CONSENT DEMO
//====================
const cookieDemo = document.querySelector('.cookie-preview');

if (cookieDemo) {
    const notice = cookieDemo.querySelector('.cookie-notice');
    const confirmation = cookieDemo.querySelector('.cookie-confirmation');
    const status = cookieDemo.querySelector('.cookie-status-row strong');
    const acceptBtn = cookieDemo.querySelector('.cookie-accept');
    const resetBtn = cookieDemo.querySelector('.cookie-reset');

    const storageKey = 'portfolioCookieDemoAccepted';
    const savedConsent = localStorage.getItem(storageKey);

    function updateDemo(accepted) {
        notice.hidden = accepted;
        confirmation.hidden = !accepted;

        if (accepted) {
            status.textContent = 'Accepted';
        } else {
            status.textContent = 'Not accepted';
        }

        status.classList.toggle('is-accepted', accepted);
    }
    updateDemo(savedConsent === 'true');

    acceptBtn.addEventListener('click', () => {
        localStorage.setItem(storageKey, 'true');
        updateDemo(true);
    });
    resetBtn.addEventListener('click', () => {
        localStorage.removeItem(storageKey);
        updateDemo(false);
    });
}
