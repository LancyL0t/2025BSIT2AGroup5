<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - CitiWatch</title>
    <link rel="stylesheet" href="assets/general.css">
    <link rel="stylesheet" href="assets/navfoot.css">
    <link rel="stylesheet" href="assets/login.css">
    <script src="assets/script.js"></script>
</head>
<body">

    <?php require 'view/nav.php'; ?>
    
    <main>  
        <div class="auth-container">
            <div class="auth-tabs">
                <button class="auth-tab active" onclick="showForm('login')">Log In</button>
                <button class="auth-tab" onclick="showForm('signup')">Sign Up</button>
            </div>
            
            <form id="loginForm" class="auth-form active">
                <div class="input-group">
                    <label>Email Address</label>
                    <input type="email" required>
                </div>
                
                <div class="input-group">
                    <label>Password</label>
                    <input type="password" required>
                </div>
                
                <button type="submit" class="auth-btn">Log In</button>
                
                <div class="divider">
                    <span>Or continue with</span>
                </div>
                
                <button type="button" class="google-btn" onclick="googleAuth()">
                    <span class="google-icon">G</span>
                    Continue with Google
                </button>
                
                <div class="auth-footer">
                    <a href="#">Forgot your password?</a>
                </div>
            </form>
            
            <form id="signupForm" class="auth-form">
                <div class="input-group">
                    <label>Full Name</label>
                    <input type="text" required>
                </div>
                
                <div class="input-group">
                    <label>Email Address</label>
                    <input type="email" required>
                </div>
                
                <div class="input-group">
                    <label>Phone Number</label>
                    <input type="tel" required>
                </div>
                
                <div class="input-group">
                    <label>Password</label>
                    <input type="password" required>
                </div>
                
                <div class="input-group">
                    <label>Confirm Password</label>
                    <input type="password" required>
                </div>
                
                <button type="submit" class="auth-btn">Create Account</button>
                
                <div class="divider">
                    <span>Or sign up with</span>
                </div>
                
                <button type="button" class="google-btn" onclick="googleAuth()">
                    <span class="google-icon">G</span>
                    Sign up with Google
                </button>
                
                <div class="auth-footer">
                    <p>By signing up, you agree to our <a href="#">Terms</a> and <a href="#">Privacy Policy</a></p>
                </div>
            </form>
        </div>
    </main>
    
    <?php require 'view/footer.php'; ?>
    

</body>
</html>
