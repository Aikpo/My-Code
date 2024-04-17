<html lang="en">
<head>
  <title>loginreg</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header></header>
  <main>
    <section class="loginreg-container">
      <h2>Login</h2>
      <form action="loginreg.php" method="post">
        <div class="form-group">
          <label for="username">Username:</label>
          <input type="text" name="username" id="username" required>
        </div>
        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" name="password" id="password" required>
        </div>
        <div class="form-actions">
          <button class="button" type="submit">Login</button>
        </div>
      </form>
      <h2>Forgot Password</h2>
      <form action="forgot_password.php" method="post">
        <label for="email">Enter your email address:</label><br>
        <input type="email" id="email" name="email" required><br>
        <button type="submit" name="forgot_password">Submit</button>
      </form>
    </section>
  </main>
  <footer></footer>
</body>
</html>
