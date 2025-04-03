<?php require ('./addToPage/header.php'); ?>

<!-- main title with image background (if time, make video bg) -->
<section class="title">
    <div>
      <h3>welcome to...</h3>
      <h1>The Space Catalogue</h1>

    </div>

  </section>

<!-- actual content of page -->
<main class='homepage'>

  

  <!-- section explaining info about website -->
  <section class="info">
  <div>
    <h2 class="alt-color">What is the Space Catalogue?</h2>
    <p class="alt-color">The Space Catalogue acts as a public archive for all types of celestial bodies found within space. We have a large variety of Stars, Planets, Meteors, Comets, Asteroids and any other objects found within the vast emptiness of space! Each object entry seen in the catalogue was generously donated by users interested about learning and sharing information about our galaxy. to insure our website doesn't spread misinformation, our site moderators review each and every entry to insure you are getting nothing but the truth about the celestial bodies out there.</p>

  </div>
  <div>
    <h2 class="alt-color">Why you should sign up:</h2>
    <p class="alt-color">Creating an account will unlock a wider range of content available to you as a user! signing up will unlock features such as being able to create and update planet submissions! Any help to expand our catalogue of planets is very apreciated. Signing up is also completely free! no need to worry about any paid subscriptions, we are here to deliver, not take away.</p>

  </div>

  </section>


  <!-- section including signup and login options -->
  <section class="form">
    <div class="signup">
          <h3>No account? Sign up!</h3>
          <form method="post" action="signup.php">
            <div class="side">
              <p><input  name="first_name" type="text" placeholder="First Name" required/></p>
              <p><input  name="last_name" type="text" placeholder="Last Name" required /></p>
            </div>

            <div class="side">
              <p><input  name="email" type="email" placeholder="Email" required /></p>
              <p><input  name="username" type="text" placeholder="Username" required /></p>
            </div>
            <div class="side">
              <p><input  name="password" type="password" placeholder="Password" required /></p>
              <p><input  name="confirm" type="password" placeholder="Confirm Password" required /></p>
            </div>

            
            <input type="submit" name="submit" value="Register" />
          </form>
    </div>

        <!-- login section -->
      <div class="login">
          <h3>Have an account? Log In!</h3>
          <form method="post" action="login.php">
            <div class="side">
            <p><input name="username" type="text" placeholder="Username" required /></p>
            <p><input name="password" type="password" placeholder="Password" required /></p>
            </div>
            <input type="submit" value="Login" />
          </form>
      </div>
    </section>

  </section>



</main>

<!-- import footer -->
<?php require ('./addToPage/footer.php'); ?>