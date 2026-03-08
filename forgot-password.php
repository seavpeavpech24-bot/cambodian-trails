<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password - Cambodian Trails</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/auth.css">
</head>
<body>
    <div class="auth-container">
        <div class="auth-card">
            <div class="auth-header">
                <h1><i class="fas fa-mountain"></i> Cambodian Trails</h1>
                <p>Reset your password</p>
            </div>
            
            <form class="auth-form" id="forgotPasswordForm">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" placeholder="your@email.com" required>
                </div>
                
                <button type="submit" class="btn btn-primary btn-full">Send Reset Link</button>
            </form>
            
            <p class="auth-footer">
                Remember your password? <a href="login.php">Log in</a>
            </p>
        </div>
    </div>

    <script src="js/app.js"></script>
    <script src="js/auth.js"></script>
</body>
</html>
