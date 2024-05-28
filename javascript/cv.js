window.onload = function() {
    var textareas = document.querySelectorAll('textarea');

    textareas.forEach(function(textarea) {
        var charCount = document.createElement('span');
        charCount.className = 'char-count';
        charCount.textContent = '0 characters';
        textarea.parentNode.appendChild(charCount);

        textarea.addEventListener('input', function() {
            charCount.textContent = textarea.value.length + ' characters';
        });
    });
};