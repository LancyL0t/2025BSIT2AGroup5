<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css" />
    <title>Document</title>
</head>
<body>
      <?php require 'view/nav.php'; ?>
    <main>
<div class="loginMain">
        <div class="login-container">
            <h1>Create a new account</h1>
            
            <div class="input-group">
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" placeholder="123-456-7890">
            </div>
            
            <div class="input-group">
                <label for="email">Email address</label>
                <input type="email" id="email">
            </div>
            
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password">
            </div>
            
            <button class="signup-btn">Sign up</button>
            
            <div class="login-link">
                Already have an account? <a href="login.html">Log in</a>
            </div>
        </div>
    </div>
    </main>

         <?php require 'view/footer.php'; ?>
</body>
</html>