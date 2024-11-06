<!DOCTYPE html>
<body>
<head>
    <title>Verification Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <div class="container">
        <div class="left-section">
            <div class="verification-box">
                <i class="fas fa-user-check"></i>
                <h2>Verify it's you</h2>
                <p>We sent a verification code to your email address. Please check your inbox and enter the code below.</p>
                <input type="text" placeholder="Enter 6-Digits Code">
                <button>Verify Code</button>
                <p>Didn't receive an email? <a href="#">Try Again</a></p>
            </div>
        </div>
        <div class="right-section"></div>
    </div>
</head>
</body>
</html>
<style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
            height: 100vh;
        }
        .container {
            display: flex;
            width: 100%;
        }
        .left-section {
            background-color: #2d2d2d;
            width: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .verification-box {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            text-align: center;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 400px;
        }
        .verification-box i {
            font-size: 50px;
            margin-bottom: 20px;
        }
        .verification-box h2 {
            margin: 0;
            margin-bottom: 20px;
        }
        .verification-box p {
            color: #666;
            margin-bottom: 20px;
        }
        .verification-box input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .verification-box button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .verification-box button:hover {
            background-color: #0056b3;
        }
        .verification-box a {
            color: #007bff;
            text-decoration: none;
        }
        .verification-box a:hover {
            text-decoration: underline;
        }
        .right-section {
            width: 50%;
            background: url('https://placehold.co/600x800') no-repeat center center;
            background-size: cover;
        }
    </style>