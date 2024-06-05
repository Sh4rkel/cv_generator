window.onload = function() {
    const addSkillButton = document.getElementById('add-skill');
    const skillsDiv = document.getElementById('skills');

    addSkillButton.addEventListener('click', function() {
        const newInput = document.createElement('input');
        newInput.type = 'text';
        newInput.name = 'skills[]';
        skillsDiv.appendChild(newInput);
    });
};