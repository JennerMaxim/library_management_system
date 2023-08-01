<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
    <link rel="stylesheet" href="assets/style/login.css" />
  </head>
  <body>
    <center>
      <form class="form-login" action="index.php">
        <input type="text" placeholder="First Name" required />
        <input type="text" placeholder="Last Name" required />
        <input class="email-login" type="email" placeholder="Email" required />
        <input
          class="password-login"
          type="password"
          placeholder="password"
          required
        />
        <input type="password" placeholder="Confirm Password" required />
        <button>Register</button>
        <span>Already have an account? <a href="login.php">login</a></span>
      </form>
    </center>
  </body>
</html>
