
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register & Login</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="css/auth.css">
  <script type="module" src="js/firebaseauth.js"></script>
</head>

<body>
  <div class="container" id="signup" style="display:none;">
    <h1 class="form-title">Register</h1>
    <form method="" action="">
      <div id="signUpMessage" class="messageDiv" style="display:none;"></div>
      <div class="input-group">
        <i class="fas fa-user"></i>
        <input type="text" id="fName" name="fName" placeholder="First Name" required>
        <label for="fName">First Name</label>
      </div>
      <div class="input-group">
        <i class="fas fa-user"></i>
        <input type="text" id="lName" name="lName" placeholder="Last Name" required>
        <label for="lName">Last Name</label>
      </div>
      <div class="input-group">
        <i class="fas fa-envelope"></i>
        <input type="email" id="rEmail" name="rEmail" placeholder="Email" required>
        <label for="rEmail">Email</label>
      </div>
      <div class="input-group">
        <i class="fas fa-lock"></i>
        <input type="password" id="rPassword" name="rPassword" placeholder="Password" required>
        <label for="rPassword">Password</label>
      </div>
      <button class="btn" id="submitSignUp" type="submit" name="register">Sign Up</button>
    </form>
    <p class="or">
      ----------or--------
    </p>
    <div class="icons">
      <a href="https://accounts.google.com" target="_blank" aria-label="Sign in with Google">
        <i class="fab fa-google"></i>
      </a>
      <a href="https://www.facebook.com" target="_blank" aria-label="Sign in with Facebook">
        <i class="fab fa-facebook"></i>
      </a>
    </div>
    <div class="links">
      <p>Already Have Account ?</p>
      <button id="signInButton" type="button">Sign In</button>
    </div>
  </div>

  <div class="container" id="signIn">
    <h1 class="form-title">Sign In</h1>
    <form method="" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
      <div id="signInMessage" class="messageDiv" style="display:none;"></div>
      <div class="input-group">
        <i class="fas fa-envelope"></i>
        <input type="email" id="email" name="email" placeholder="Email" required>
        <label for="email">Email</label>
      </div>
      <div class="input-group">
        <i class="fas fa-lock"></i>
        <input type="password" id="password" name="password" placeholder="Password" required>
        <label for="password">Password</label>
      </div>
      <p class="recover">
        <a href="#">Recover Password</a>
      </p>
      <button class="btn" id="submitSignIn" type="submit" name="login">Sign In</button>
    </form>
    <p class="or">
      ----------or--------
    </p>
    <div class="icons">
      <a href="https://accounts.google.com" target="_blank" aria-label="Sign in with Google">
        <i class="fab fa-google"></i>
      </a>
      <a href="https://www.facebook.com" target="_blank" aria-label="Sign in with Facebook">
        <i class="fab fa-facebook"></i>
      </a>
    </div>
    <div class="links">
      <p>Don't have account yet?</p>
      <button id="signUpButton" type="button">Sign Up</button>
    </div>
  </div>

  <script src="js/script.js"></script>
  <script src="js/firebaseauth.js"></script>
  <script>
    const signUpButton = document.getElementById('signUpButton');
    const signInButton = document.getElementById('signInButton');
    const signInForm = document.getElementById('signIn');
    const signUpForm = document.getElementById('signup');

    signUpButton.addEventListener('click', function () {
      signInForm.style.display = "none";
      signUpForm.style.display = "block";
    });

    signInButton.addEventListener('click', function () {
      signInForm.style.display = "block";
      signUpForm.style.display = "none";
    });

    firebase.auth().createUserWithEmailAndPassword(email, password)
  .then((userCredential) => {
    const user = userCredential.user;
    firebase.database().ref("users/" + user.uid).set({
      name: name,
      email: email,
      createdAt: Date.now()
    });
  });

  firebase.auth().createUserWithEmailAndPassword(email, password)
  .then((userCredential) => {
    const user = userCredential.user;
    firebase.firestore().collection("users").doc(user.uid).set({
      name: name,
      email: email,
      createdAt: firebase.firestore.FieldValue.serverTimestamp()
    });
  });
  </script>
</body>

</html>