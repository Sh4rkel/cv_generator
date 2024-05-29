window.onload = function() {
    var addSkillButton = document.getElementById('add-skill');
    var skillsDiv = document.getElementById('skills');

    addSkillButton.addEventListener('click', function() {
        var newInput = document.createElement('input');
        newInput.type = 'text';
        newInput.name = 'skills[]';
        skillsDiv.appendChild(newInput);
    });
};