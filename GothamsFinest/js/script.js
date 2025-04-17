let items = document.querySelectorAll('.suit_slideshow .item'); // Fix selector
let next = document.getElementById('next');
let previous = document.getElementById('previous');

let active = Math.floor(items.length / 2);

function loadShow() {
    let stt = 0;

    // Right-side elements (after active)
    for (let i = active + 1; i < items.length; i++) {
        stt++;
        items[i].style.transform = `translateX(${120 * stt}px) scale(${1 - 0.2 * stt}) perspective(500px) rotateY(-3deg)`;
        items[i].style.zIndex = items.length - stt;
        items[i].style.filter = 'blur(5px)';
        items[i].style.opacity = stt > 2 ? 0 : 0.6;
        items[i].style.transition = 'transform 0.5s ease, opacity 0.5s ease, filter 0.5s ease';
    }

    stt = 0;

    // Left-side elements (before active)
    for (let i = active - 1; i >= 0; i--) {
        stt++;
        items[i].style.transform = `translateX(${-120 * stt}px) scale(${1 - 0.2 * stt}) perspective(500px) rotateY(3deg)`;
        items[i].style.zIndex = items.length - stt;
        items[i].style.filter = 'blur(5px)';
        items[i].style.opacity = stt > 2 ? 0 : 0.6;
        items[i].style.transition = 'transform 0.5s ease, opacity 0.5s ease, filter 0.5s ease';
    }

    // Active item stays in the center
    items[active].style.transform = "translateX(0) scale(1) perspective(500px) rotateY(0)";
    items[active].style.zIndex = items.length;
    items[active].style.filter = "blur(0)";
    items[active].style.opacity = 1;
    items[active].style.transition = 'transform 0.5s ease, opacity 0.5s ease, filter 0.5s ease';
}

// Add event listeners for buttons
next.addEventListener("click", function () {
    if (active < items.length - 1) {
        active++;
        loadShow();
    }
});

previous.addEventListener("click", function () {
    if (active > 0) {
        active--;
        loadShow();
    }
});

// Load initial state
loadShow();

document.querySelectorAll('.item').forEach(item => {
    item.addEventListener('click', () => {
        item.querySelector('.card-flip').classList.toggle('flipped')
    });
});

function showLogin() {
    document.getElementById("log_in_modal").style.display = "block";
    document.getElementById("backdrop").style.display = "block";
}

function closeLogin() {
    document.getElementById("log_in_modal").style.display = "none";
    document.getElementById("backdrop").style.display = "none";
}

function signup() {
    const content = document.getElementById("log_in_modal");

    content.innerHTML = `
      <h2>Create New Account</h2>
      <form action="fan_zone.php" method="POST">
            <input type="text" name="username" id="username" placeholder="Username" required>
            <input type="email" name="email" id="email" placeholder="Email" required>
            <input type="password" name="password" id="password" placeholder="Password" required> <br>
            <input type="checkbox" id="agree" name="agree" value="agree" required>
            <label for="agree" id="agree_label">Agree to <a href="#" onclick="terms()">terms & conditions</a></label><br>
            <div class="button-group">
                <button type="submit" name="signup" id="signup_complete">Sign Up</button>
            </div>
            <p id="signup_direct">Already have an account? <a href="#" onclick="login()">Log in</a></p>
        </form>
    `;
}


function terms() {
    const content = document.getElementById("log_in_modal");

    content.innerHTML = `
    <h2>Terms & Conditions</h2>
    <p>I acknowledge that this community consists of individuals of all ages and backgrounds. I agree not to post any content that could be considered offensive or inappropriate. I understand that any breach of this agreement may result in the removal of the post and the possible suspension or deletion of my account.</p>
    <a href="#" onclick="signup()">Back to Sign up</a>
  `;
}

function login() {
    const content = document.getElementById("log_in_modal");

    content.innerHTML = `
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
    `;
}

