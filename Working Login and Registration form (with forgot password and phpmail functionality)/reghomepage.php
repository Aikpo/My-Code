<html lang="en">
<head>
  <title>loginreg</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header></header>
    <section class="loginreg-container">
        <h2>Register</h2>
        <form action="loginreg.php" method="post">
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
          </div>
          <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" required>
          </div>
          <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>
          </div>
          <div class="form-actions">
            <button class="button" type="submit" name="register">Register</button>
          </div>
        </form>
    </section>
  </header>
</body>
</html>
