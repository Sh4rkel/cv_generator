window.onload = function() {
    var inputs = document.querySelectorAll('input, textarea');

    inputs.forEach(function(input) {
        input.addEventListener('focus', function() {
            this.style.borderColor = '#5cb85c';
        });

        input.addEventListener('blur', function() {
            this.style.borderColor = '#ddd';
        });
    });

    // ...
    document.getElementById('add-objective').addEventListener('click', function() {
        var objectiveValue = document.getElementById('objective-input').value;
        var newObjective = document.createElement('li');
        newObjective.textContent = objectiveValue;
        document.getElementById('objectives').appendChild(newObjective);
    });

    document.getElementById('add-education').addEventListener('click', function() {
        var educationValue = document.getElementById('education-input').value;
        var newEducation = document.createElement('li');
        newEducation.textContent = educationValue;
        document.getElementById('educations').appendChild(newEducation);
    });

    document.getElementById('add-skill').addEventListener('click', function() {
        var skillValue = document.getElementById('skill-input').value;
        var newSkill = document.createElement('li');
        newSkill.textContent = skillValue;
        document.getElementById('skills').appendChild(newSkill);
    });
// ...
};