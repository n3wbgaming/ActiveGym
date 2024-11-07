<!DOCTYPE html>
<html>
<title>Forgot Password</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <body>
    <div class="container">
        <div class="left">
            <div class="form-container">
                <i class="fas fa-lock"></i>
                <h2>Forgot Password</h2>
                <p>We sent a verification code to 0948****30<br>Please check your inbox and enter the code below.</p>
                <input type="text" placeholder="Enter 4-digits Code">
                <a href="#" type="submit"><button>Verify Code</button>
                <div class="resend">
                    Didn't receive a text? <a href="#">Try Again</a>
                </div>
            </div>
        </div>
        <div class="right"></div>
    </div>
</body>
</html>

<style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
            height: 100vh;
            background-color: #2E2A2B;
        }
        .container {
            display: flex;
            width: 100%;
        }
        .left {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .right {
            flex: 1;
            background: url('https://placehold.co/600x800') no-repeat center center;
            background-size: cover;
        }
        .form-container {
            background-color: white;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 300px;
        }
        .form-container i {
            font-size: 40px;
            color: #000;
        }
        .form-container h2 {
            margin: 20px 0;
            font-size: 24px;
            color: #000;
        }
        .form-container p {
            font-size: 14px;
            color: #666;
            margin-bottom: 20px;
        }
        .form-container input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .form-container button {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            border: none;
            border-radius: 4px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }
        .form-container button:hover {
            background-color: #0056b3;
        }
        .form-container .resend {
            margin-top: 20px;
            font-size: 14px;
            color: #666;
        }
        .form-container .resend a {
            color: #007BFF;
            text-decoration: none;
        }
        .form-container .resend a:hover {
            text-decoration: underline;
        }
    </style>