document.getElementById('clearBtn').addEventListener('click', function() {
    if (confirm('Are you sure you want to clear all fields?')) {
        document.getElementById('blogTitle').value = '';
        document.getElementById('blogPost').value = '';
        window.location.href = 'clearPreview.php';
    }
});

document.getElementById('blogForm').addEventListener('submit', function(event) {
    const title = document.getElementById('blogTitle');
    const content = document.getElementById('blogPost');
    let hasError = false;

    title.classList.remove('inputError');
    content.classList.remove('inputError');

    if (!title.value.trim()) {
        title.classList.add('inputError');
        hasError = true;
    }

    if (!content.value.trim()) {
        content.classList.add('inputError');
        hasError = true;
    }

    if (hasError) {
        event.preventDefault();
    }
});