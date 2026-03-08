// Login form
document.getElementById('loginForm')?.addEventListener('submit', (e) => {
    e.preventDefault();
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
    
    // Simulate login
    if (email && password) {
        localStorage.setItem('user', JSON.stringify({ email }));
        window.location.href = 'index.html';
    }
});

// Register form
document.getElementById('registerForm')?.addEventListener('submit', (e) => {
    e.preventDefault();
    const fullname = document.getElementById('fullname').value;
    const username = document.getElementById('username').value;
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirmPassword').value;
    
    if (password !== confirmPassword) {
        alert('Passwords do not match!');
        return;
    }
    
    // Simulate registration
    if (fullname && username && email && password) {
        localStorage.setItem('user', JSON.stringify({ fullname, username, email }));
        window.location.href = 'index.html';
    }
});

// Forgot password form
document.getElementById('forgotPasswordForm')?.addEventListener('submit', (e) => {
    e.preventDefault();
    const email = document.getElementById('email').value;
    
    if (email) {
        alert('Password reset link has been sent to your email!');
        window.location.href = 'login.html';
    }
});
