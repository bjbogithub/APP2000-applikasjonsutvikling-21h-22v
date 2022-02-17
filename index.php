<!DOCTYPE html>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <link rel="stylesheet" href="main.css" />
    <title>Finance Budget App</title>
  </head>
  <body>
    <header class="block" style="margin-top: 30px;">
      <!-- <h1 class="myTextFont">Finance Budget App</h1> -->
      <img src="pictures/logo.png" alt="logo" width="300" height="300" />
    </header>

    <main class="block" style="flex-wrap: wrap-reverse;">
      <div class="contentBox" style="max-width: 640px;">
        <h2>Why finance budgeting app</h2>
        <p>
          Are you not able to keep track of your economy and spendings? Do 
            you want to save more money? Or do you just need a place to organize your spendings?
             Then Finance Budgeting App is for you!
        </p>
        <p>
          The Finance Budgeting App was created 2022 and are maintained by six IT
             students attending USN Ringerike. Students are known to have a tight budget,
              which is something we all had experienced
        </p>
        <p>
          Therefore, we wanted to make this app so we could both help ourselves and others
             wether you are a student or not. If you have any questions about The Finance Budgeting
              App, please feel free to <a href="contactForm/index.php"><u>contact and ask us!</u></a>
        </p>
      </div>
      <form class="block" action="login/login.php" method="post">
        <div class="contentBox" style="max-width: 320px;">
          <label style="margin-top: 50px;">E-mail</label>
          <input type="text" name='email'>
          <label>Password</label>
          <input type="password" name='password'>
          <a><button type="submit" value="login" class="loginButton">Log in</button></a>
          <a><button type="submit" formaction="register/register.html" class="loginButton">Register</button></a>
          <h3 style="margin-top: 100px;"><a href="forgot-password/forgot-password.php">Forgot password</a></h3>
        </div>
      </form>
    </main>

    <footer>
      <ul>
        <li>
          <a href="home.html">Home</a>
        </li>
        <li>
          <a href="faq.html">FAQ</a>
        </li>
        <li>
          <a href="about.html">About</a>
        </li>
        <li>
          <a href='contactForm/index.php'>Contact</a>
        </li>
      </ul>
      <p>&copy; 2021 Finance Budget App AS</p>
    </footer>
  </body>
</html>