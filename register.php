<!DOCTYPE html>
<html>
<head>
  <title>Sign Up</title>
  <body>
  <div class="container">
    <h1>Sign Up now!</h1>
    <p>Unlock Your Potential: Join Us Today!</p>
    <form>
      <input type="text" placeholder="First Name" required>
      <input type="text" placeholder="Last Name" required>
      <select>
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="other">Other</option>
      </select>
      <select>
        <option value="weight loss">Weight Loss</option>
        <option value=" muscle gain">Muscle Gain</option>
        <option value="strength training">Strength Training</option>
      </select>
      <input type="email" placeholder="Email" required>
      <input type="password" placeholder="Password" required>
      <input type="submit" value="Sign Up">
    </form>
    <p>Already have an account? <a href="#">Log In</a></p>
  </div>
  </head>
</body>
</html>
<style>
    body {
      background-color: #333;
      color: #fff;
      font-family: sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }
    .container {
      background-color: #222;
      padding: 30px;
      border-radius: 10px;
    }
    h1 {
      text-align: center;
      margin-bottom: 20px;
    }
    form {
      display: flex;
      flex-direction: column;
    }
    input[type="text"],
    input[type="email"],
    input[type="password"],
    select {
      padding: 10px;
      margin-bottom: 10px;
      border: none;
      border-radius: 5px;
      background-color: #444;
      color: #fff;
    }
    input[type="submit"] {
      padding: 12px 20px;
      border: none;
      border-radius: 5px;
      background-color: #007bff;
      color: #fff;
      cursor: pointer;
    }
    a {
      color: #007bff;
      text-decoration: none;
    }
  </style>