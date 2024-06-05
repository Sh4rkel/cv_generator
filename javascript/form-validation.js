const loginForm = document.querySelector('.form-container form[action="../Scripts/login.php"]');
loginForm.addEventListener('submit', function(event) {
    const username = document.getElementById('login-username');
    const password = document.getElementById('login-password');

    if (username.value === '' || password.value === '') {
        event.preventDefault();
        alert('Please fill in all fields.');
    }
});

const registerForm = document.querySelector('.form-container form[action="../Scripts/register.php"]');
registerForm.addEventListener('submit', function(event) {
    const username = document.getElementById('register-username');
    const password = document.getElementById('register-password');

    if (username.value === '' || password.value === '') {
        event.preventDefault();
        alert('Please fill in all fields.');
    }
});

const cvForm = document.querySelector('.form-container form[action="../Scripts/cv.php"]');
cvForm.addEventListener('submit', function(event) {
    const name = document.getElementById('name');
    const contact = document.getElementById('contact');
    const objective = document.getElementById('objective');
    const education = document.getElementById('education');
    const skills = document.querySelector('input[name="skills[]"]');
    const experience = document.getElementById('experience');
    const references = document.getElementById('references');

    if (name.value === '' || contact.value === '' || objective.value === '' || education.value === '' || skills.value === '' || experience.value === '' || references.value === '') {
        event.preventDefault();
        alert('Please fill in all fields.');
    }
});