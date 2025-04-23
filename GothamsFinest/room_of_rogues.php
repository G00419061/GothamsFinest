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
  <title>Room of Rogues | Gotham's Finest</title>
  <link rel="shortcut icon" href="img/batman logo border_yellow.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="css/style.css" rel="stylesheet">
  <link href="https://fonts.cdnfonts.com/css/broadway" rel="stylesheet">
  <link href="https://fonts.cdnfonts.com/css/agdasima" rel="stylesheet">
</head>

<body>

  <div class="row" id="logo">
    <div class="logo">
      <a href="index.php">
        <video width="410" height="300" autoplay loop muted playsinline>
          <source src="img/animated_logo.mp4" type="video/mp4">
          Your browser does not support the video tag.
        </video>
      </a>
    </div>
  </div>

  <div class="row">
    <div class="col-12">
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
            <div class="carousel-caption  d-md-block" id="carousel_text">
              <h2>Hall of Heroes</h2>
              <p>Learn about the many other heroes that work to keep Gotham safe.</p>
              <a href="hall_of_heroes.php" class="card_button">See More...</a>
            </div>
          </div>

          <div class="carousel-item active">
            <img src="img/batman_villains.jpg" class="d-block w-100 carousel-img" alt="Gotham's Greatest Villains">
            <div class="carousel-caption  d-md-block" id="carousel_text">
              <h2>Room of Rogues</h2>
              <p>Check out some of the less friendly residents of Gotham City
              </p>
              <a href="room_of_rogues.php" class="card_button">See More...</a>
            </div>
          </div>

          <div class="carousel-item">
            <img src="img/batfans.jpg" class="d-block w-100 carousel-img" alt="Group of Batman fans">
            <div class="carousel-caption  d-md-block" id="carousel_text">
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
              <a class="nav-link active" href="room_of_rogues.php">Room of Rogues</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="fan_zone.php">Fan Zone</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact</a>
            </li>
          </ul>
        </div>

      </nav>
    </div>
  </div>

  <div class="heading">
    <h1>ROOM OF ROGUES</h1>
    <p>When there’s order, chaos always finds a way to creep in. While Batman and his associates work tirelessly to
      defend the good people of Gotham City and keep the streets safe, there are others who will stop at nothing to see
      Gotham brought to its knees. Whether it’s for power, money, personal tragedy or just a desire to see the world
      burn, this exhibit shines a light on the worst that Gotham has to offer and provide a little more insight into
      their histories and what exactly motivates them to a life or crime and destruction. </p>
  </div>

  <hr>

  <?php
  $sql = "SELECT villain_name, debut_date, bio, villain_image, read_recommendations FROM villains";
  $result = $conn->query($sql);

  // Check if we have data
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      echo '<div class="row">';


      // Villian Biography and Text (now on the left)
      echo '<div class="col-8">';
      echo '<div class="villain_text">';
      echo '<h1>' . htmlspecialchars($row['villain_name']) . '</h1>';
      $date = date_create($row['debut_date']);
      echo '<p><b>First Appearance: </b>' . date_format($date, 'F Y') . '</p>';
      echo '<p><b>Biography:</b></p>';
      echo '<p>' . nl2br(htmlspecialchars($row['bio'])) . '</p>'; // nl2br to convert newlines into <br> tags
      echo '<p><b>Reading Recommendations:</b></p>';

      // Split reading recommendations into a list
      $recommendations = explode("\n", $row['read_recommendations']);
      echo '<ul>';
      foreach ($recommendations as $rec) {
        echo '<li>' . htmlspecialchars($rec) . '</li>';
      }
      echo '</ul>';
      echo '</div>'; // .villain_text
      echo '</div>'; // .col-8
  
      echo '<div class="col-4">';
      echo '<div class="villain_image">';
      echo '<img src="' . htmlspecialchars($row['villain_image']) . '" alt="image of ' . htmlspecialchars($row['villain_name']) . '" class="img-fluid">'; // Added img-fluid class for responsiveness
      echo '</div>';
      echo '</div>'; // .col-4
  
      echo '</div>'; // .row
      echo '<hr>';
    }
  } else {
    echo "No villain data found!";
  }

  $conn->close();
  ?>


  <footer class="batman-footer">
    <div class="footer-content">
      <div class="footer-logo">
        <img src="img/batman logo border_yellow.png" alt="Batman Logo">
      </div>
      <div class="footer-text">
        <p>&copy; 2025 Gotham's Finest. All Rights Reserved.</p>
        <p>Follow us on:</p>
        <div class="social-links">
          <a href="#" class="social-icon">Facebook</a>
          <a href="#" class="social-icon">Twitter</a>
          <a href="#" class="social-icon">Instagram</a>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <script src="js/script.js"></script>
</body>

</html>