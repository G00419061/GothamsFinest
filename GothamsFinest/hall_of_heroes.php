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
  <title>Hall of Heroes | Gotham's Finest</title>
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
          <div class="carousel-item active">
            <img src="img/batman-bat-family-cover.png" class="d-block w-100" alt="Heroes of Gotham">
            <div class="carousel-caption d-none d-md-block">
              <h2>Hall of Heroes</h2>
              <p>Learn about the many other heroes that work to keep Gotham safe.</p>
              <a href="#" class="card_button">See More...</a>
            </div>
          </div>

          <div class="carousel-item">
            <img src="img/gift_shop_cover.jpg" class="d-block w-100" alt="shop front">
            <div class="carousel-caption d-none d-md-block">
              <h2>Gift Shop</h2>
              <p>Check out our store for some exciting merch.</p>
              <a href="store.php" class="card_button">See More...</a>
            </div>
          </div>

          <div class="carousel-item">
            <img src="img/art_gallery_cover.jpg" class="d-block w-100" alt="person drawing">
            <div class="carousel-caption d-none d-md-block">
              <h2>Art Gallery</h2>
              <p>View our amazing fan art collection submitted by many talented artists</p>
              <a href="art_gallery.php" class="card_button">See More...</a>
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
              <a class="nav-link active" href="hall_of_heroes.php">Hall of Heroes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="room_of_rogues.php">Room of Rogues</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="art_gallery.php">Art Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="store.php">Store</a>
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
    <h1>HALL OF HEROES</h1>
    <p>Over Batman's long history, he has found many like-minded people to join him in his crucade. These dedicated
      individuals have devoted their lives, much like Bruce Wayne, to ensure the safety Gotham City and all its
      residents, while creating their own legacies as heroes. </p>
  </div>

  <hr>

  <?php
  $sql = "SELECT hero_name, debut_date, bio, hero_image, read_recommendations FROM heroes";
  $result = $conn->query($sql);

  // Check if we have data
  if ($result->num_rows > 0) {
    // Loop through the results and display each hero
    while ($row = $result->fetch_assoc()) {
      echo '<div class="row">';

      // Hero Image (now on the left)
      echo '<div class="col-4">';
      echo '<div class="hero_image">';
      echo '<img src="' . htmlspecialchars($row['hero_image']) . '" alt="image of ' . htmlspecialchars($row['hero_name']) . '" class="img-fluid">'; // Added img-fluid class for responsiveness
      echo '</div>'; // .hero_image
      echo '</div>'; // .col-4
  
      // Hero Biography and Text (now on the right)
      echo '<div class="col-8">';
      echo '<div class="hero_text">';
      echo '<h1>' . htmlspecialchars($row['hero_name']) . '</h1>';
      echo '<p><b>First Appearance: </b>' . htmlspecialchars($row['debut_date']) . '</p>';
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
      echo '</div>'; // .hero_text
      echo '</div>'; // .col-8
  
      echo '</div>'; // .row
      echo '<hr>';
    }
  } else {
    echo "No hero data found!";
  }

  $conn->close();
  ?>



  <hr>


  <div class="row">
    <div class="col-12">
      <footer>
        footer
      </footer>
    </div>
  </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <script src="js/script.js"></script>
</body>

</html>