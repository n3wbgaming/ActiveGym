<!DOCTYPE html>
<html>
<head>
<title>Sign Up Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <body>
    <div class="container">
        <div class="form-container">
            <h1>Sign Up now!</h1>
            <p>Unlock Your Potential: Join Us Today!</p>
            <input type="text" placeholder="First Name">
            <input type="text" placeholder="Last Name">
            <select>
                <option>Gender</option>
                <option>Male</option>
                <option>Female</option>
                <option>Other</option>
            </select>
            <select>
                <option>Fitness Goal</option>
                <option>Weight Loss</option>
                <option>Muscle Gain</option>
                <option>General Fitness</option>
            </select>
            <input type="email" placeholder="Email Address">
            <div class="password-container">
                <input type="password" placeholder="Password" id="password">
                <i class="fas fa-eye toggle-password" onclick="togglePassword('password')"></i>
            </div>
            <div class="password-container">
                <input type="password" placeholder="Confirm Password" id="confirm-password">
                <i class="fas fa-eye toggle-password" onclick="togglePassword('confirm-password')"></i>
            </div>
            <button>Sign Up</button>
            <p class="login-link">Already have an account? <a href="login.php">Log In</a></p>
        </div>
        <div class="image-container">
            <!-- Image description: Three people in fitness attire posing with gym equipment -->
        </div>
    </div>
    <script>
        function togglePassword(id) {
            var input = document.getElementById(id);
            var icon = input.nextElementSibling;
            if (input.type === "password") {
                input.type = "text";
                icon.classList.remove("fa-eye");
                icon.classList.add("fa-eye-slash");
            } else {
                input.type = "password";
                icon.classList.remove("fa-eye-slash");
                icon.classList.add("fa-eye");
            }
        }
    </script>
</body>
</html>
<style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: Arial, sans-serif;
        }
        .container {
            display: flex;
            height: 100%;
        }
        .form-container {
            background-color: #1c1b1b;
            color: white;
            padding: 50px;
            width: 50%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            position: relative;
        }
        .form-container h1 {
            font-size: 36px;
            margin-bottom: 10px;
        }
        .form-container p {
            font-size: 18px;
            margin-bottom: 30px;
        }
        .form-container input, .form-container select {
            width: 100%;
            padding: 15px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            box-sizing: border-box;
        }
        .form-container .password-container {
            position: relative;
        }
        .form-container .password-container input {
            width: 100%;
            padding-right: 40px;
        }
        .form-container .password-container .toggle-password {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: black;
        }
        .form-container button {
            width: 100%;
            padding: 15px;
            background-color: #4CAF50;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            color: white;
            cursor: pointer;
            box-sizing: border-box;
            margin-top: 20px;
        }
        .form-container button:hover {
            background-color: #45a049;
        }
        .form-container a {
            color: #4CAF50;
            text-decoration: none;
        }
        .form-container a:hover {
            text-decoration: underline;
        }
        .form-container .login-link {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            font-size: 16px;
        }
        .image-container {
            width: 55%;
            background: url('https://placehold.co/600x800') no-repeat center center;
            background-size: cover;
        }
    </style>