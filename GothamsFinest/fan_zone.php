<?php
session_start();
// Database connection script
$servername = "gothamsfinest";
$username = "root";
$password = "root";
$dbname = "gothams_finest_db";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Fan Zone | Gotham's Finest</title>
  <link rel="shortcut icon" href="img/batman logo border_yellow.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="css/style.css" rel="stylesheet">
  <link href="https://fonts.cdnfonts.com/css/broadway" rel="stylesheet">
  <link href="https://fonts.cdnfonts.com/css/agdasima" rel="stylesheet">
</head>

<body>
  <div class="row">
    <div class="col-1">
      <div class="logo">
        <a href="index.php"><img src="img/batman logo yellow writing.png" class="img-thumbnail"
            alt="A logo depicting a Batman silhouette with a yellow outline"></a>
      </div>
    </div>
    <div class="col-11">
      <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item">
              <img src="img/batman-bat-family-cover.png" class="d-block w-100 carousel-img" alt="Heroes of Gotham">
              <div class="carousel-caption d-none d-md-block" id="carousel_text">
                <h2>Hall of Heroes</h2>
                <p>Learn about the many other heroes that work to keep Gotham safe.</p>
                <a href="hall_of_heroes.php" class="card_button">See More...</a>
              </div>
            </div>

            <div class="carousel-item">
              <img src="img/batman_villains.jpg" class="d-block w-100 carousel-img" alt="Gotham's Greatest Villains">
              <div class="carousel-caption d-none d-md-block" id="carousel_text">
                <h2>Room of Rogues</h2>
                <p>Check out some of the less friendly residents of Gotham City
                </p>
                <a href="room_of_rogues.php" class="card_button">See More...</a>
              </div>
            </div>

            <div class="carousel-item active">
              <img src="img/batfans.jpg" class="d-block w-100 carousel-img" alt="Group of Batman fans">
              <div class="carousel-caption d-none d-md-block" id="carousel_text">
                <h2>Fan Zone</h2>
                <p>Upload and view your favourite Batman Fanart.</p>
                <a href="fan_zone.php" class="card_button">See More...</a>
              </div>
            </div>
          </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>

      </div>
    </div>
  </div>

  <div class="row">
    <div class="col">
      <nav class="navbar navbar-expand-lg">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="hall_of_heroes.php">Hall of Heroes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="room_of_rogues.php">Room of Rogues</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="fan_zone.php">Fan Zone</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact</a>
            </li>
          </ul>
        </div>

        <div class="log-in">
          <button onclick="showLogin()">Log In</button>
        </div>

        <!-- Modal and Backdrop -->
        <div id="backdrop" class="backdrop" onclick="closeLogin()"></div>

        <div id="log_in_modal" class="modal" onclick="event.stopPropagation()">
          <h2>Login Form</h2>
          <form action="" method="POST">
            <input type="text" name="username" id="username" placeholder="Username" required>
            <input type="email" name="email" id="email" placeholder="Email" required>
            <input type="password" name="password" id="password" placeholder="Password" required> <br>
            <div class="button-group">
              <button type="submit" name="login" id="login_complete">Log In</button>
            </div>
            <p id="signup_direct">Don't have an account? <a href="#" onclick="signup()">Sign up</a></p>
          </form>
        </div>

        <?php

        if (isset($_POST['signup'])) {
          $new_username = isset($_POST['username']) ? htmlspecialchars($_POST['username']) : '';
          $new_email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
          $new_password = isset($_POST['password']) ? $_POST['password'] : '';

          if (!isset($_POST['agree'])) {
            echo "<script>alert('You must agree to the terms.');</script>";
          } else {
            $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

            $stmt = $conn->prepare("INSERT INTO users (username, email, password_hash) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $new_username, $new_email, $password_hash);

            if ($stmt->execute()) {
              $_SESSION['Username'] = $new_username;
              echo "<script>window.location.href='fan_zone.php';</script>";
              exit();
            } else {
              echo "<script>alert('Signup failed. Try a different email/username.');</script>";
            }

            $stmt->close();
          }
        }

        // --- LOGIN HANDLER ---
        if (isset($_POST['login'])) {
          $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
          $username = isset($_POST['username']) ? htmlspecialchars($_POST['username']) : '';
          $password = isset($_POST['password']) ? $_POST['password'] : '';

          $sql = "SELECT * FROM users WHERE username = ? AND email = ?";
          $stmt = $conn->prepare($sql);
          $stmt->bind_param("ss", $username, $email);
          $stmt->execute();
          $result = $stmt->get_result();

          if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();

            if (password_verify($password, $row['password_hash'])) {
              $_SESSION['Username'] = $username;
              $_SESSION['Email'] = $email;
              echo "<script>window.location.href='fan_zone.php';</script>";
              exit();
            } else {
              echo "<script>alert('Invalid credentials');</script>";
            }
          } else {
            echo "<script>alert('Invalid credentials');</script>";
          }

          $stmt->close();
        }

        $conn->close();
        ?>


      </nav>
    </div>
  </div>

  <div class="heading">
    <h1>Welcome, <?php
    if (isset($_SESSION["Username"]) && !empty($_SESSION["Username"])) {
      echo ucfirst($_SESSION["Username"]);
    } else {
      echo "User"; // Default text if username is not set
    }
    ?>, to the Fan Zone</h1>
    <p>This page is dedicated to the amazing community that has been built around our favourite fictional character. We
      invite users to upload their own artistic creations to our <b>Art Gallery</b> for others to enjoy.
    </p>
  </div>

  <hr>

  <div class="heading">
    <h2>Art Gallery</h2>
    <p></p>
  </div>

  <hr>

  <div class="row">
    <div class="col-12">
      <footer>
        footer
      </footer>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <script src="js/script.js"></script>
</body>

</html>