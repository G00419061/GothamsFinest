<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Store | Gotham's Finest</title>
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
            <img src="img/batman-bat-family-cover.png" class="d-block w-100" alt="Heroes of Gotham">
            <div class="carousel-caption d-none d-md-block">
              <h2>Hall of Heroes</h2>
              <p>Learn about the many other heroes that work to keep Gotham safe.</p>
              <a href="hall_of_heroes.php" class="card_button">See More...</a>
            </div>
          </div>

          <div class="carousel-item active">
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
              <a class="nav-link" href="hall_of_heroes.php">Hall of Heroes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="room_of_rogues.php">Room of Rogues</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="art_gallery.php">Art Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="store.php">Store</a>
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
    <h1>Gotham's Finest Gift Shop</h1>
    <p>Browse and shop from our vast collection of Gotham's Finest merchandise.</p>
  </div>

  <div class="row">
    <h1>Apparel</h1> <br><br>
    <div class="col-2">
      <div class="product">
        <img src="img/thumbnail1.jpg" alt="temporary filler image" style="width:100%">
        <h4>Gotham's Finest Baseball Hat</h4>
        <p class="price">€19.99</p>

        <label for="hatColour">Choose a Colour:</label>
        <select name="hatColour" id="hatColour">
          <option value="black">Black</option>
          <option value="gray">Gray</option>
        </select>

        <p><button>Add to Cart</button></p>
      </div>
    </div>

    <div class="col-2">
      <div class="product">
        <img src="img/thumbnail1.jpg" alt="temporary filler image" style="width:100%">
        <h4>Gotham's Finest TShirt</h4>
        <p class="price">€24.99</p>

        <label for="tShirtColour">Choose a Colour:</label>
        <select name="tShirtColour" id="tShirtColour">
          <option value="black">Black</option>
          <option value="gray">Gray</option>
          <option value="white">White</option>
        </select>

        <label for="tShirtSize">Choose a Size:</label>
        <select name="tShirtSize" id="tShirtSize">
          <option value="xl">X-Large</option>
          <option value="l">Large</option>
          <option value="m">Medium</option>
          <option value="s">Small</option>
          <option value="xs">X-Small</option>
        </select>

        <p><button>Add to Cart</button></p>
      </div>
    </div>

    <div class="col-2">
      <div class="product">
        <img src="img/thumbnail1.jpg" alt="temporary filler image" style="width:100%">
        <h4>Gotham's Finest Hoodie</h4>
        <p class="price">€39.99</p>

        <label for="jumperColour">Choose a Colour:</label>
        <select name="jumperColour" id="jumperColour">
          <option value="black">Black</option>
          <option value="gray">Gray</option>
          <option value="white">White</option>
        </select>

        <label for="jumperSize">Choose a Size:</label>
        <select name="jumperSize" id="jumperSize">
          <option value="xl">X-Large</option>
          <option value="l">Large</option>
          <option value="m">Medium</option>
          <option value="s">Small</option>
          <option value="xs">X-Small</option>
        </select>

        <p><button>Add to Cart</button></p>
      </div>
    </div>
  </div>

  <br><br>

  <div class="row">
    <h1>Misc</h1> <br><br>
    <div class="col-2">
      <div class="product">
        <img src="img/thumbnail1.jpg" alt="temporary filler image" style="width:100%">
        <h4>Gotham's Finest Coffee Cup</h4>
        <p class="price">€14.99</p>

        <label for="cupColour">Choose a Colour:</label>
        <select name="cupColour" id="cupColour">
          <option value="black">Black</option>
          <option value="gray">Gray</option>
          <option value="white">White</option>
          <option value="red">Red</option>
          <option value="dblue">Dark Blue</option>
        </select>

        <p><button>Add to Cart</button></p>
      </div>
    </div>

    <div class="col-2">
      <div class="product">
        <img src="img/thumbnail1.jpg" alt="temporary filler image" style="width:100%">
        <h4>Gotham's Finest Notebook</h4>
        <p class="price">€7.99</p>
        <p><button>Add to Cart</button></p>
      </div>
    </div>
  </div>

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