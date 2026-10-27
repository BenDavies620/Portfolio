const fields = document.querySelectorAll('.contact-form [required]');
const submitForm = document.querySelector('.contact-form');
const emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

function isFieldEmpty(field) {
    return !field.value.trim();
}

function showError(field, message) {
    field.classList.add('error');
    const parent = field.parentElement;
    let errorE1 = parent.querySelector('.error-message');

    if (!errorE1) {
        errorE1 = document.createElement('p');
        errorE1.classList.add('error-message');
        parent.appendChild(errorE1);
    }
    errorE1.textContent = message;
}

function clearError(field) {
    field.classList.remove('error');
    const parent = field.parentElement;
    const errorE1 = parent.querySelector('.error-message');

    if (errorE1) {
        errorE1.remove();
    }
}

if (submitForm) {
    submitForm.addEventListener('submit', function(event) {
        let formIsValid = true;

        for (let i = 0; i < fields.length; i++) {
            const field = fields[i];
        
            if (isFieldEmpty(field)) {
                showError(field, 'This field is required!');
                formIsValid = false;
            } else {
                if (field.name === 'email' && !emailRegex.test(field.value.trim())) {
                    showError(field, 'Please enter a valid email address.');
                    formIsValid = false;
                } else {
                    clearError(field);
                }
            }
        }

        if (!formIsValid) {
            event.preventDefault();
        } else {
            sessionStorage.setItem('returnToContact', 'true');
        }
    });
}

fields.forEach(function(field) {
    field.addEventListener('input', function() {
        if (field.classList.contains('error')) {
            if (!isFieldEmpty(field)) {
                if (field.name === 'email') {
                    if (emailRegex.test(field.value.trim())) {
                        clearError(field);
                    }
                } else {
                    clearError(field);
                }
            }
        }
    });
});

const successMessage = document.querySelector('.success-message');

if (successMessage) {
    setTimeout(function () {
        successMessage.remove();
    }, 5000);
}

if (sessionStorage.getItem('returnToContact') === 'true') {
    sessionStorage.removeItem('returnToContact');

    const contactSection = document.getElementById('contact');

    if (contactSection) {
        contactSection.scrollIntoView({ behavior: 'instant' });
    }

    document.documentElement.classList.remove('restore-contact');
}