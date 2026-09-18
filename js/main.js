//=================
//Typing effect
//=================
const text1 = "My Name is Benjamin Davies";
const text2 = "I'm a Web Developer";
const typingH1 = document.querySelector('#typing-text-h1');
const typingP = document.querySelector('#typing-text-p');
const cursor = document.querySelector('.cursor');

if (typingH1 && typingP && cursor) {
    function type() {
        for(let i = 0; i < text1.length; i++) {
        setTimeout(function(){
            document.querySelector('#typing-text-h1').innerHTML += text1[i];
        }, 150 * i); 
        }
        setTimeout(function(){
            document.querySelector('p').appendChild(document.querySelector('.cursor'));
            typeP()
        }, 150 * text1.length);
    }
    type();

    function typeP() {
        for(let i = 0; i < text2.length; i++) {
        setTimeout(function(){
            document.querySelector('#typing-text-p').innerHTML += text2[i];
        }, 150 * i); 
        }
    };
}

//=================
//Nav menu slide
//=================
const sidebar = document.querySelector('.sidebar');
const burger = document.querySelector('.burger-btn');

burger.addEventListener('click', () => {
    if (sidebar.className === 'sidebar') {
        sidebar.classList.add('open');
    } else {
        sidebar.classList.remove('open');
    }
});
//=================
//Form validation
//=================
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

// Clear errors as user types
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
//==================
//Scroll Animations
//==================
const reveals = document.querySelectorAll(".reveal, .reveal-left");

console.log(reveals);
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