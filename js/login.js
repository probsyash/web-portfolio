const loginBtn = document.getElementById('loginBtn');
const modal = document.getElementById('id01');

if (loginBtn) {
    loginBtn.addEventListener('click', () => { modal.style.display = 'block'; });
}

if (modal) {
    window.addEventListener('click', function(event) { 
        if (event.target == modal) {
            modal.style.display = 'none';
        }
    });
}