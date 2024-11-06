<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <div class="overlay">
        <div class="header-text">Welcome to Manila Total Fitness Center</div>
        <div class="sub-header-text">Your fitness journey starts here</div>
        <div class="login-container">
            <h2>Log in</h2>
            <input type="text" placeholder="Username or Email">
            <div class="password-container">
                <input type="password" id="password" placeholder="Password">
                <i class="fas fa-eye" id="eye-icon" onclick="togglePasswordVisibility()"></i>
            </div>
            <a href="forgot-password.php" style="font-size: 12px;">Forgot Password?</a>
            <a href="verification.php"><button>Log In</button></a>
            <a href="register.php" class="signup-link">New to ActiveGym? Sign up now</a>
        </div>
    </div>
</body>
<script>
        function togglePasswordVisibility() {
            var passwordInput = document.getElementById("password");
            var eyeIcon = document.getElementById("eye-icon");
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                eyeIcon.classList.remove("fa-eye");
                eyeIcon.classList.add("fa-eye-slash");
            } else {
                passwordInput.type = "password";
                eyeIcon.classList.remove("fa-eye-slash");
                eyeIcon.classList.add("fa-eye");
            }
        }
    </script>

</html>
<style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            background: url('images/group-people-looking-mobile-phone-fitness-club.jpg') no-repeat center center fixed;
            background-size: cover;
        }
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        .header-text {
            color: #fff;
            font-size: 36px;
            margin-bottom: 10px;
            text-align: center;
        }
        .sub-header-text {
            color: #fff;
            font-size: 18px;
            margin-bottom: 20px;
            text-align: center;
        }
        .login-container {
            background: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            width: 300px;
        }
        .login-container h2 {
            margin: 0 0 20px;
            font-size: 24px;
            color: #333;
        }
        .login-container input[type="text"], .login-container input[type="password"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        .login-container .password-container {
            position: relative;
        }
        .login-container .password-container input[type="password"], .login-container .password-container input[type="text"] {
            padding-right: 40px;
        }
        .login-container .password-container .fa-eye, .login-container .password-container .fa-eye-slash {
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
        }
        .login-container a {
            display: block;
            margin: 10px 0;
            color: #333;
            text-decoration: none;
            font-size: 14px;
        }
        .login-container a:hover {
            text-decoration: underline;
        }
        .login-container button {
            width: 100%;
            padding: 15px;
            background: #333;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
            margin-top: 20px;
        }
        .login-container button:hover {
            background: #555;
        }
        .login-container .signup-link {
            margin-top: 50px;
        }
        @media (max-width: 600px) {
            .login-container {
                width: 90%;
                padding: 15px;
            }
            .login-container h2 {
                font-size: 20px;
            }
            .login-container input[type="text"], .login-container input[type="password"] {
                padding: 8px;
                margin: 8px 0;
            }
            .login-container button {
                padding: 12px;
                font-size: 16px;
                margin-top: 15px;
            }
            .login-container .password-container .fa-eye, .login-container .password-container .fa-eye-slash {
                right: 10px;
            }
            .login-container .signup-link {
                margin-top: 20px;
            }
            .header-text {
                font-size: 28px;
            }
            .sub-header-text {
                font-size: 16px;
            }
        }
    </style>