<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Student Login</title>

  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f5f7fb;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .container {
      background: white;
      width: 380px;
      padding: 35px;
      border-radius: 12px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.1);
      text-align: center;
    }

    h2 {
      margin-bottom: 20px;
      font-size: 26px;
      font-weight: bold;
    }

    label {
      font-size: 14px;
      font-weight: 600;
      display: block;
      text-align: left;
      margin: 12px 0 6px;
    }

    input {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 15px;
    }

    .remember {
      display: flex;
      align-items: center;
      margin: 12px 0;
      font-size: 14px;
    }

    .remember input {
      width: auto;
      margin-right: 8px;
    }

    .login-btn {
      width: 100%;
      background: #1877f2;
      color: white;
      padding: 12px;
      border: none;
      font-size: 16px;
      border-radius: 6px;
      margin-top: 10px;
      cursor: pointer;
      font-weight: bold;
    }

    .divider {
      margin: 20px 0;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .divider span {
      margin: 0 10px;
      color: #999;
    }

    hr {
      width: 40%;
      border: 0;
      border-top: 1px solid #ddd;
    }

    .google-btn, .linkedin-btn {
      width: 100%;
      padding: 12px;
      border-radius: 6px;
      border: 1px solid #ddd;
      cursor: pointer;
      font-size: 15px;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 10px;
      background: #fff;
    }

    .linkedin-btn {
      background: #0a66c2;
      color: white;
      border: none;
    }

    .google-btn svg,
    .linkedin-btn svg {
      margin-right: 8px;
    }

    a {
      display: block;
      margin-top: 10px;
      font-size: 14px;
      color: #1877f2;
      text-decoration: none;
    }

    .footer-text {
      margin-top: 12px;
      font-size: 14px;
    }

    .footer-text a {
      color: #1877f2;
    }

  </style>
</head>
<body>

  <div class="container">
    <h2>Student Login</h2>

    <form action="login.php" method="POST">
    <input type="email" name="email" required>
    <input type="password" name="password" required>
    <button type="submit">Login</button>
</form>



    <!-- Google Button -->
    <button class="google-btn">
      <svg width="20" viewBox="0 0 48 48">
        <path fill="#EA4335" d="M24 9.5c3.54 0 6.72 1.23 9.21 3.59l6.85-6.85C35.9 2.09 30.47 0 24 0 14.62 0 6.51 5.34 2.6 13.09l7.98 6.19C12.74 12.09 17.92 9.5 24 9.5z"/>
        <path fill="#4285F4" d="M46.5 24.5c0-1.57-.14-3.08-.41-4.5H24v9h12.62c-.55 2.83-2.22 5.22-4.72 6.89l7.27 5.64c4.23-3.92 6.33-9.69 6.33-16.03z"/>
        <path fill="#FBBC05" d="M10.58 28.91c-.48-1.43-.75-2.97-.75-4.41s.27-2.98.75-4.41l-7.98-6.19C.87 17.21 0 20.51 0 24s.87 6.79 2.6 9.91l7.98-6z"/>
        <path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.79l-7.27-5.64c-2.04 1.37-4.68 2.17-8.62 2.17-6.08 0-11.26-3.59-13.39-8.69l-7.98 6.19C6.51 42.66 14.62 48 24 48z"/>
      </svg>
      Sign in with Google
    </button>

    <!-- LinkedIn Button -->
    <button class="linkedin-btn">
      <svg width="20" viewBox="0 0 24 24" fill="white">
        <path d="M19 0h-14c-2.76 0-5 2.24-5 5v14c0 2.76 2.24 5 5 5h14c2.76 
        0 5-2.24 5-5v-14c0-2.76-2.24-5-5-5zm-11 
        19h-3v-11h3v11zm-1.5-12.25c-.96 0-1.75-.79-1.75-1.75s.79-1.75 
        1.75-1.75 1.75.79 1.75 1.75-.79 1.75-1.75 1.75zm13.5 
        12.25h-3v-5.5c0-1.32-.03-3.03-1.85-3.03-1.85 
        0-2.13 1.45-2.13 2.94v5.59h-3v-11h2.88v1.5h.04c.4-.76 
        1.38-1.56 2.84-1.56 3.04 0 3.6 2 3.6 4.59v6.47z"/>
      </svg>
      Sign in with LinkedIn
    </button>

    <a href="#">Forgot password?</a>

    <div class="footer-text">
      Don't have an account? <a href="#">Create new account</a>
    </div>
  </div>

  <script>
    // Example JS if you want to use Remember Me later
    document.getElementById("rememberCheck").addEventListener("change", () => {
      if (rememberCheck.checked) {
        console.log("Remember me ON");
      } else {
        console.log("Remember me OFF");
      }
    });
  </script>

</body>
</html>
