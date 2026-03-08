<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Cambodian Trails</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/auth.css">
</head>
<body>
    <div class="auth-container">
        <div class="auth-card">
            <div class="auth-header">
                <h1><i class="fas fa-mountain"></i> Cambodian Trails</h1>
                <p>Join our travel community</p>
            </div>
            
            <form class="auth-form" id="registerForm">
                <div class="form-group">
                    <label for="fullname">Full Name</label>
                    <input type="text" id="fullname" placeholder="John Doe" required>
                </div>
                
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" placeholder="@username" required>
                </div>
                
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" placeholder="your@email.com" required>
                </div>
                
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" placeholder="••••••••" required>
                </div>
                
                <div class="form-group">
                    <label for="confirmPassword">Confirm Password</label>
                    <input type="password" id="confirmPassword" placeholder="••••••••" required>
                </div>
                
                <button type="submit" class="btn btn-primary btn-full">Sign Up</button>
            </form>
            
            <div class="divider">
                <span>OR</span>
            </div>
            
            <button class="btn btn-google">
                <i class="fab fa-google"></i>
                Continue with Google
            </button>
            
            <p class="auth-footer">
                Already have an account? <a href="login.php">Log in</a>
            </p>
        </div>
    </div>

    <script src="js/app.js"></script>
    <script src="js/auth.js"></script>
</body>
</html>
