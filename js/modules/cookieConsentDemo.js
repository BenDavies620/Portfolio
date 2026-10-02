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

    function updateDemo (accepted) {
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

//====================
//CODE DEMO TOGGLE
//====================
const cookieExample = document.querySelector('.cookie-example');

if (cookieExample) {
    const sourceBtns = cookieExample.querySelectorAll('[data-code-view]');
    const sourcePanels = cookieExample.querySelectorAll('[data-code-panel]');
    const sourceTitle = cookieExample.querySelector('[data-code-filename]');

    sourceBtns.forEach((button) => {
        button.addEventListener('click', () => {
            sourcePanels.forEach((panel) => {
                panel.hidden = panel.dataset.codePanel !== button.dataset.codeView;
            });
            sourceBtns.forEach((sourceBtn) => {
                sourceBtn.setAttribute('aria-pressed', String(sourceBtn === button));
            });
            if (button.dataset.codeView === 'html') {
                sourceTitle.textContent = 'examples.html';
            } else {
                sourceTitle.textContent = 'cookieConsentDemo.js'
            }
        });
    });
}