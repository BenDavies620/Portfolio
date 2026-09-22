const fields = document.querySelectorAll('.contact-form input[required]');
const submit = document.querySelector('.btn-submit');
const emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
const successMsg = document.getElementById('successMsg');

function isFieldEmpty(field) {
    return !field.value.trim();
}

function showError(field, message) {
    field.classList.add('error');
    const parent = field.parentElement;
    let errorEl = parent.querySelector('.error-message');

    if (!errorEl) {
        errorEl = document.createElement('p');
        errorEl.classList.add('error-message');
        parent.appendChild(errorEl);
    }
    errorEl.textContent = message;
}

function clearError(field) {
    field.classList.remove('error');
    const parent = field.parentElement;
    const errorEl = parent.querySelector('.error-message');

    if (errorEl) {
        errorEl.remove();
    }
}

if (submit) {
    submit.addEventListener('click', function(event) {
        event.preventDefault();
        successMsg.classList.remove('show');

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

        if (formIsValid) {
            successMsg.classList.add('show');
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