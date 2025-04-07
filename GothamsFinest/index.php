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
  <title>Welcome to Gotham's Finest</title>
  <link rel="shortcut icon" href="img/batman logo border_yellow.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="css/style.css" rel="stylesheet">
  <link href="https://fonts.cdnfonts.com/css/broadway" rel="stylesheet">
  <link href="https://fonts.cdnfonts.com/css/agdasima" rel="stylesheet">

</head>

<body>
  <div class="main">
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
                <a href="hall_of_heroes.php" class="card_button">See More...</a>
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
                <a class="nav-link active" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="hall_of_heroes.php">Hall of Heroes</a>
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

    <div class="d-flex">
      <div class="flex-grow-1">
        <div class="row">
          <div class="col-8">
            <div class="origin">
              <h2>Explore the Beginning</h2>
              <p><b>Bruce Wayne</b> was just eight years old when his life was shattered forever. Raised in wealth and
                privilege,
                he was the only son of <b>Thomas and Martha Wayne</b>, a powerful and charitable couple who were among
                Gotham’s
                elite. The Waynes led a life of luxury, often attending high-society events, charity galas, and nights
                at
                the theater.<br>

                <br>One fateful evening, after watching The Mark of Zorro at a grand Gotham theater, the family decided
                to
                take a shortcut through Crime Alley on their way home. There, they were confronted by a desperate mugger
                named <b>Joe Chill</b>, who demanded their money and valuables. Despite their compliance, Chill
                ruthlessly
                gunned
                down both Thomas and Martha before fleeing into the night, leaving young Bruce alone, horrified, and
                forever changed.<br>

                <br>That night, Bruce made a silent vow: he would dedicate his life to ensuring no one else suffered the
                same tragedy. Over the years, he pushed himself to the limits, training in martial arts, criminology,
                and
                advanced technology. When a bat crashed through his study window, he saw it as a symbol of fear and
                rebirth—thus, <b>Batman</b> was born.<br>

                <br>Though he initially worked alone, Batman has since taken on many allies in his crusade. He mentored
                multiple Robins, including <b>Dick Grayson</b>, <b>Jason Todd</b>, <b>Tim Drake</b>, and <b>Damian
                  Wayne</b>, and formed strong bonds
                with <b>Alfred Pennyworth</b>, his ever-loyal butler, and <b>Commissioner Jim Gordon</b>, one of
                Gotham’s
                few
                incorruptible cops. He also fought alongside the <b>Justice League</b>, standing alongside heroes like
                <b>Superman</b>
                and <b>Wonder Woman</b>.<br>

                <br>Despite his vast resources and unmatched skill, Bruce Wayne remains defined by the tragedy of that
                night in Crime Alley—forever walking the line between vengeance and justice as Gotham’s <b>Dark
                  Knight</b>.
              </p>
            </div>
          </div>

          <div class="col-4">
            <div class="origin-video">
              <img src="img/thumbnail1.jpg" alt="">
            </div>
            Origin Video
          </div>
        </div>

        <hr>

        <div class="row">
          <div class="col-12">
            <div class="timeline">
              <h2>The Best of Batman</h2>
              <p>With over 80 years of publication history, Batman has been the star of many iconic and memorable
                stories.
                We have compiled a list of some of the most notable ones—essential for truly understanding the
                character,
                his world, and his vast supporting cast.</p>
              <p>From his first appearance in 1939 to the modern day, explore the rich and complex timeline of the Dark
                Knight. See how Batman has evolved from the creation of Bob Kane and Bill Finger into the multi-layered,
                household name he is today.</p>

              <div id="timeline_background">
                <div class="view">
                  <?php
                  $sql = "SELECT comic_title, release_date, comic_img, comic_sum FROM comics";
                  $result = $conn->query($sql);

                  // Display results
                  if ($result->num_rows > 0) {
                    echo '<div class="comic-container">';
                    $count = 0;
                    while ($row = $result->fetch_assoc()) {
                      $block_class = ($count % 2 == 0) ? "block-1" : "block-2";
                      echo '<div class="' . $block_class . '">';
                      echo '<img src="' . $row["comic_img"] . '" alt="' . htmlspecialchars($row["comic_title"]) . '">';
                      echo '<p>' . htmlspecialchars($row["comic_title"]) . ' (' . date("F Y", strtotime($row["release_date"])) . ')<br>' . htmlspecialchars($row["comic_sum"]) . '</p>';
                      echo '</div>';
                      $count++;
                    }
                    echo '</div>';
                  } else {
                    echo "No comics found.";
                  }
                  ?>
                  
                </div>
              </div>

              <p>Continue to check this space as we will continue to add entries as new stories are released</p>
            </div>
          </div>
        </div>

        <hr>

        <div class="row">
          <div class="col-12">
            <div class="suit-showcase">
              <h2>Suit Showcase</h2>
              <p>Does the man make the suit, or does the suit make the man?</p>
              <p>Take a deep dive into the many outfits worn by Bruce Wayne and others who have taken up the mantle of
                <b>Batman</b>.
              </p>
              <p>Hover over each card to learn more.</p>
              <div class="suit_slideshow">

                <div class="item">
                  <div class="card-flip">
                    <div class="card-front">
                      <img src="img/suits/proto_batsuit.jpg" alt="original Batman design created by Bob Kane">
                    </div>
                    <div class="card-back">
                      <p><b>Debut: </b><br>1939(Conceptualized but never used)</p>
                      <p><b>History: </b><br>Designed by artist <b>Bob Kane</b>, this suit takes inspiration from
                        popular
                        characters of the time, such as <b>Zorro</b> and <b>The Phantom</b>. It features a vastly
                        different design from the more traditional look seen in modern comics.<br>Before publication,
                        writer <b>Bill Finger</b> suggested several changes, resulting in the darker, more intimidating
                        character design most fans are familiar with today.</p>
                    </div>
                  </div>
                </div>

                <div class="item">
                  <div class="card-flip">
                    <div class="card-front">
                      <img src="img/suits/first_batsuit.jpg" alt="first appearance suit">
                    </div>
                    <div class="card-back">
                      <p><b>Debut: </b><br>Detective Comics #27 (March 1939)</p>
                      <p><b>History: </b><br>The first Batsuit to appear in the comics, this design laid the groundwork
                        for many future iterations. Over time, various artists introduced several changes, including the
                        removal of the purple gloves, the shortening of the ears, and alterations to the shape of the
                        cape.</p>
                    </div>
                  </div>
                </div>

                <div class="item">
                  <div class="card-flip">
                    <div class="card-front">
                      <img src="img/suits/batman_beyond_suit.jpg" alt="futuristic batsuit worn by Terry McGinnis">
                    </div>
                    <div class="card-back">
                      <p><b>Debut: </b><br>Batman Beyond Episode #1 (January 1999)</p>
                      <p><b>History: </b><br>An aging Bruce Wayne, forced to step away from crime-fighting due to health
                        issues, reluctantly takes on <b>Terry McGinnis</b> as his successor. This new suit deviates from
                        the classic Batman look, featuring a sleek, all-black design with a full-face mask, larger ears,
                        a
                        large red bat emblem on the chest, and retractable red underarm wings. It also boasts advanced
                        technology, including rocket-powered boots and stealth cloaking, designed to assist both the
                        older
                        Bruce and the less-experienced Terry in battle.
                    </div>
                  </div>
                </div>

                <div class="item">
                  <div class="card-flip">
                    <div class="card-front">
                      <img src="img/suits/dickGrayson_suit.jpg"
                        alt="Suit worn by Dick Grayson while operating as Batman">
                    </div>
                    <div class="card-back">
                      <p><b>Debut: </b><br>Batman and Robin #1 (June 2009)</p>
                      <p><b>History: </b><br>Following the supposed death of Bruce Wayne in Final Crisis (2008) and
                        Battle
                        for the Cowl (2009), Dick Grayson—the original Robin and, at the time, Nightwing—took up the
                        mantle of Batman. <br>This comic also marks the debut of Bruce Wayne’s biological son, Damian
                        Wayne, as Robin, becoming the partner to Dick’s Batman. The two would become a formidable pair,
                        right up until the return of Bruce Wayne and his retaking of the Batman mantle.</p>
                    </div>
                  </div>
                </div>

                <div class="item">
                  <div class="card-flip">
                    <div class="card-front">
                      <img src="img/suits/lewis_wilson_first_live_suit.jpg"
                        alt="First live action Batsuit, worn by actor Lewis Wilson">
                    </div>
                    <div class="card-back">
                      <p><b>Debut: </b><br>The Batman Chapter #1(1943)</p>
                      <p><b>History: </b><br>Debuting just 4 years after Batman's introduction in the comics, The Dark
                        Knight first appeared on television in 1943 played my actor Lewis Wilson. Wilson is still the
                        youngest actor to play Batman in live acton, at only 23 years old when fisrt taking on the role.
                      </p>
                    </div>
                  </div>
                </div>

                <button id="next">></button>
                <button id="previous">
                  <</button>
              </div>
            </div>
          </div>
        </div>

        <hr>
      </div>
    </div>
  </div>

  <div class="sidebar">
    <h2>Newsfeed</h2>
    <div class="articles">
      <?php
      
      $sql = "SELECT article_img, title, text, created_at FROM news ORDER BY created_at DESC";
      $result = $conn->query($sql);
      
      // Display news cards
      if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
              echo '<div class="card" style="width: 18rem; margin: 1rem;">';
              echo '<h4 class="card-title" style="padding: 0.5rem;">' . htmlspecialchars($row["title"]) . '</h4>';
              echo '<img src="' . htmlspecialchars($row["article_img"]) . '" class="card-img-top" alt="title card">';
              echo '<div class="card-body">';
              echo '<p class="card-text">' . htmlspecialchars($row["text"]) . '</p>';
              echo '<small class="text-muted">Published on: ' . date("F j, Y", strtotime($row["created_at"])) . '</small>';
              echo '</div>';
              echo '</div>';
          }
      } else {
          echo "No news articles found.";
      }
      
      $conn->close();

      ?>
    </div>
  </div>

  <div class="row">
    <div class="col-12">
      <div class="footer-index">
        footer
      </div>
    </div>
  </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <script src="js/script.js"></script>
</body>

</html>