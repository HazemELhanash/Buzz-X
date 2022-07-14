<?php
include"back.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="loginsignstyle.css" />
    <title>Sign in & Sign up Form</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="back.php" method="post" class="sign-in-form">
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Email"  name="email"/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="pass" />
            </div>
            <input type="submit" value="Login" class="btn solid"  name="login"/>
            <a class="btn solid" href="index.php" style="text-decoration:none; text-align:center; padding-top:12px;"> Go To Event</a>
            <p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
          <form  method="post" action="back.php" class="sign-up-form">
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" required  name="name"/>
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" required name="email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password"  required name="pass" />
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Phone number"  required name="phone"/>
            </div>
            <div class="input-field">
              <i class="fas fa-city"></i>
              <select name = "cities" aria-placeholder="City" required >
                <option> Alexandria </option>
                <option> Aswan </option>
                <option> Asyut </option>
                <option> Beheira </option>
                <option> Beni Suef</option>
                <option> Cairo</option>
                <option> Dakahlia </option>
                <option> Damietta </option>
                <option> Faiyum</option>
                <option> Gharbia </option>
                <option> Giza </option>
                <option> Ismailia </option>
                <option> Kafr El Sheikh </option>
                <option> Luxor </option>
                <option> Matruh</option>
                <option> Minya </option>
                <option> Monufia </option>
                <option> New Valley </option>
                <option> North Sinai </option>
                <option> Port Said </option>
                <option> Qalyubia</option>
                <option> Qena </option>
                <option> Red Sea </option>
                <option> Sharqia </option>
                <option> Sohag </option>
                <option> South Sinai </option>
                <option> Suez </option>
              </select>
            </div>
            <input type="submit" class="btn" value="Sign up" name="insert" />
            <p class="social-text">Or Sign up with social platforms</p>
            <div class="social-media">
              <a href="https://www.facebook.com/MrBuzzX/" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="buzzx2020@gmail.com" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
               Don't have an account yet ? Sign up and get access to all our services.
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
              Already made an account here? Sign in and get access to all our services.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="register.svg" class="image" alt="" />
        </div>
      </div>
    </div>
    <script src="test2.js"></script>
  </body>
</html>