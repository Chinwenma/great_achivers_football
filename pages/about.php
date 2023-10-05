<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile-First Landing Page</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/boot.css">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        /* You can keep the existing styles here */

        /* Add the hover effect */
        .col img {
            transition: transform 0.3s ease;
        }

        /* Define the hover state */
        .col img:hover {
            transform: scale(0.9);
        }
    </style>
</head>

<body>
 <header>
        <div class="logo-container">
            <img src="../assets/Logo (5).png" alt="Logo">
            <span class="logo-text">Your Logo Text</span>
        </div>
        <nav>
            <ul class="nav-links">
                <li><a href="../index.html">Home</a></li>
                <li><a href="./about.html">About</a></li>
                <li><a href="./gallery.html">Gallery</a></li>
                <li><a href="./contact.html">Contact</a></li>
            </ul>
        </nav>
        <button class="login-btn">Login</button>

</header>

  <div class="collapse" id="navbarToggleExternalContent11">
    <div class="bg-light shadow-3 p-4">
      <button class="btn btn-link btn-block border-bottom m-0">Link 1</button>
      <button class="btn btn-link btn-block border-bottom m-0">Link 2</button>
      <button class="btn btn-link btn-block m-0">Link 3</button>
    </div>
  </div>
</section> 
 
    <div class=" bg-image d-flex justify-content-center align-items-center" style="
            background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.50) 0%, rgba(0, 0, 0, 0.50) 100%), url('../assets/hero.png');
            height: 40vh;
            ">
        <h1 class="text-white">About Us</h1>

    </div>





    <section class="features">
        <div class="feature">
            <div class="image-container">
                <img src="../assets/ion_football.png" alt="Image 2">
            </div>
            <div class="feature-content">
                <div class="counter">90+</div>
                <p>Players</p>
            </div>
        </div>
        <div class="feature">
            <div class="image-container">
                <img src="../assets/gridicons_trophy.png" alt="Image 2">
            </div>
            <div class="feature-content">
                <div class="counter">90+</div>
                <p>Players</p>
            </div>
        </div>
        <div class="feature">
            <div class="image-container">
                <img src="../assets/teamwork.png" alt="Image 1">
            </div>
            <div class="feature-content">
                <div class="counter">90+</div>
                <p>Teams</p>
            </div>
        </div>
        <div class="feature">
            <div class="image-container">
                <img src="../assets/maki_soccer.png" alt="Image 2">
            </div>
            <div class="feature-content">
                <div class="counter">90+</div>
                <p>Players</p>
            </div>
        </div>

</section>

        <footer class="footer-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3">
                        <img src="../assets/logo.png" alt="Brand Logo" class="footer-logo">
                        <p class="footer-brand">My Brand</p>
                    </div>
                    <div class="col-lg-6">
                        <div class="footer-nav">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 text-lg-right">
                        <button type="button" class="btn btn-primary footer-login-btn">Login</button>
                    </div>
                </div>
                <hr style="background-color: #fff; height: 1px; margin: 20px 0;">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <p class="footer-copyright">&copy; 2023 My Website. All rights reserved.</p>
                    </div>
                    <div class="col-lg-6 text-lg-right">
                        <div class="footer-social-icons">
                            <a href="#"><i class="bi bi-facebook"></i></a>
                            <a href="#"><i class="bi bi-twitter"></i></a>
                            <a href="#"><i class="bi bi-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>












        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
            crossorigin="anonymous"></script>
            <script src="../scripts/index.js"></script>
</body>

</html>