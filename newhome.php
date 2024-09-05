<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUY HOME - Home Page</title>
    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">
    <link rel="stylesheet" href="newhome.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;600;700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>

    <header class="header" data-header>
        <div class="overlay" data-overlay></div>

        <div class="header-bottom">
            <div class="container">
                <a href="#" class="logo">
                    <img src="images/Rent_Hub.png" alt="rent me logo white">
                </a>
                <nav class="navbar" data-navbar>
                    <div class="navbar-top">
                        <a href="#" class="logo">
                            <img src="images/Rent_Hub.png" alt="rent me logo">
                        </a>
                        <button class="nav-close-btn" data-nav-close-btn aria-label="Close Menu">
                            <ion-icon name="close-outline"></ion-icon>
                        </button>
                    </div>

                    <div class="navbar-bottom">
                        <ul class="navbar-list">

                            <li>
                                <a href="#home" class="navbar-link" data-nav-link>Home</a>
                            </li>

                            <li>
                                <a href="#about" class="navbar-link" data-nav-link>About</a>
                            </li>

                            <li>
                                <a href="#service" class="navbar-link" data-nav-link>Service</a>
                            </li>

                            <li>
                                <a href="#property" class="navbar-link" data-nav-link>Property</a>
                            </li>

                            <li>
                                <a href="#blog" class="navbar-link" data-nav-link>Article</a>
                            </li>
                        </ul>
                    </div>
                </nav>

                <div class="header-bottom-actions">
                    <ul>
                        <li><a href="#">Saved <i class="far fa-heart"></i></a></li>
                        <li><a href="#">Account <i class="fas fa-angle-down"></i></a>
                            <ul>
                                <li><a href="Student.php">Student</a></li>
                                <li><a href="Landlord.php">Landlord</a></li>
                                <li><a href="Warden.php">Warden</a></li>
                                <li><a href="Admin.php">Admin</a></li>
                            </ul>
                        </li>
                        <li><a href="#">User Profile <i class="fa-solid fa-user"></i></a></li>
                    </ul>
                    <button class="header-bottom-actions-btn" data-nav-open-btn aria-label="Open Menu">
                        <ion-icon name="menu-outline"></ion-icon>
                        <span>Menu</span>
                    </button>
                </div>
            </div>
        </div>
    </header>


    <main>
        <article>
            <!-- 
        - #HERO
      -->
            <section class="hero" id="home">
                <div class="container">
                    <div class="hero-content">
                        <p class="hero-subtitle">
                            <ion-icon name="home"></ion-icon>
                            <span>BUY HOME</span>
                        </p>
                        <h2 class="h1 hero-title"> Find Your Next <br> Perfect Place To <br> Live </h2>
                        <p class="hero-text">
                            "Buy Home: Where Your Perfect Home Awaits!"
                        </p>
                        <button class="btn">Sign Up</button>
                    </div>
                </div>
            </section>


            <!-- 
        - #ABOUT
      -->
            <section class="about" id="about">
                <div class="container">
                    <figure class="about-banner">
                        <img src="images/about-banner-1.png" alt="House interior">
                        <img src="images/about-banner-2.jpg" alt="House interior" class="abs-img">
                    </figure>

                    <div class="about-content">
                        <p class="section-subtitle">About Us</p>
                        <h2 class="h2 section-title">Why Choose Us?</h2>
                        <p class="about-text">
                            "Choose us for hassle-free house renting and finding rented houses. We offer a wide range of rental properties, ensuring
                            you find the perfect home to suit your needs. Our user-friendly platform makes searching and renting houses easy and
                            convenient. With our responsive customer service, we're here to assist you every step of the way. Experience a seamless
                            renting process with us!"
                        </p>

                        <ul class="about-list">
                            <li class="about-item">
                                <div class="about-item-icon">
                                    <ion-icon name="home-outline"></ion-icon>
                                </div>
                                <p class="about-item-text">Responsive Customer Service</p>
                            </li>

                            <li class="about-item">
                                <div class="about-item-icon">
                                    <ion-icon name="leaf-outline"></ion-icon>
                                </div>
                                <p class="about-item-text">Property Management Services</p>
                            </li>

                            <li class="about-item">
                                <div class="about-item-icon">
                                    <ion-icon name="wine-outline"></ion-icon>
                                </div>
                                <p class="about-item-text">High-Quality Maintenance</p>
                            </li>

                            <li class="about-item">
                                <div class="about-item-icon">
                                    <ion-icon name="shield-checkmark-outline"></ion-icon>
                                </div>
                                <p class="about-item-text">Complete 24/7 Security</p>
                            </li>
                        </ul>

                        <p class="callout">
                            "Rent Hub: Where Your Perfect Home Awaits!"
                        </p>
                        <a href="#service" class="btn">Our Services</a>
                    </div>
                </div>
            </section>


            <!-- 
        - #SERVICE
      -->
            <section class="service" id="service">
                <div class="container">
                    <p class="section-subtitle">Our Services</p>
                    <h2 class="h2 section-title">Our Main Focus</h2>
                    <ul class="service-list">
                        <li>
                            <div class="service-card">
                                <div class="card-icon">
                                    <img src="images/service-2.png" alt="Service icon">
                                </div>
                                <h3 class="h3 card-title">
                                    <a href="#">Rent a home</a>
                                </h3>
                                <p class="card-text">
                                    over 100 homes for rent available on the website, we can match you with a
                                    house you will want
                                    to call home.
                                </p>
                                <a href="#" class="card-link">
                                    <span>Find A Home</span>
                                    <ion-icon name="arrow-forward-outline"></ion-icon>
                                </a>
                            </div>
                        </li>

                        <li>
                            <div class="service-card">
                                <div class="card-icon">
                                    <img src="images/service-3.png" alt="Service icon">
                                </div>
                                <h3 class="h3 card-title">
                                    <a href="#">Buy a home</a>
                                </h3>
                                <p class="card-text">
                                    over 100 homes for rent available on the website, we can match you with a
                                    house you will want
                                    to call home.
                                </p>
                                <a href="#" class="card-link">
                                    <span>Find A Home</span>
                                    <ion-icon name="arrow-forward-outline"></ion-icon>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>


            <!-- 
        - #PROPERTY
      -->
            <section class="property" id="property">
                <div class="container">
                    <p class="section-subtitle">Properties</p>
                    <h2 class="h2 section-title">Featured Listings</h2>
                    <ul class="property-list has-scrollbar">
                        <li>
                            <div class="property-card">
                                <figure class="card-banner">
                                    <a href="#">
                                        <img src="images/property-1.jpg" alt="New Apartment Nice View" class="w-100">
                                    </a>
                                    <div class="card-badge green">For Rent</div>
                                    <div class="banner-actions">
                                        <button class="banner-actions-btn">
                                            <ion-icon name="location"></ion-icon>
                                            <address>Homagama,Colombo</address>
                                        </button>

                                        <button class="banner-actions-btn">
                                            <ion-icon name="camera"></ion-icon>
                                            <span>4</span>
                                        </button>

                                        <button class="banner-actions-btn">
                                            <ion-icon name="film"></ion-icon>
                                            <span>2</span>
                                        </button>
                                    </div>
                                </figure>

                                <div class="card-content">
                                    <div class="card-price">
                                        <strong>Rs.34,900</strong>/Month
                                    </div>
                                    <h3 class="h3 card-title">
                                        <a href="#">House for rent in homagama</a>
                                    </h3>
                                    <p class="card-text">
                                        Private room available in a shared house located within a short commute to Homagama University. Fully furnished with shared kitchen and common areas. Fully furnished with essential amenities, perfect for student living.
                                    </p>
                                </div>

                                <div class="card-footer">
                                    <div class="card-author">
                                        <figure class="author-avatar">
                                            <img src="images/author.jpg" alt="William Seklo" class="w-100">
                                        </figure>

                                        <div>
                                            <p class="author-name">
                                                <a href="#">William Seklo</a>
                                            </p>
                                            <p class="author-title">Mr.Raju Silva</p>
                                        </div>
                                    </div>

                                    <div class="card-footer-actions">
                                        <button class="card-footer-actions-btn">
                                            <ion-icon name="resize-outline"></ion-icon>
                                        </button>

                                        <button class="card-footer-actions-btn">
                                            <ion-icon name="heart-outline"></ion-icon>
                                        </button>

                                        <button class="card-footer-actions-btn">
                                            <ion-icon name="add-circle-outline"></ion-icon>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="property-card">
                                <figure class="card-banner">
                                    <a href="#">
                                        <img src="images/property-2.jpg" alt="Modern Apartments" class="w-100">
                                    </a>
                                    <div class="card-badge orange">For Rent</div>

                                    <div class="banner-actions">
                                        <button class="banner-actions-btn">
                                            <ion-icon name="location"></ion-icon>
                                            <address> Kottawa,Colombo</address>
                                        </button>

                                        <button class="banner-actions-btn">
                                            <ion-icon name="camera"></ion-icon>
                                            <span>4</span>
                                        </button>

                                        <button class="banner-actions-btn">
                                            <ion-icon name="film"></ion-icon>
                                            <span>2</span>
                                        </button>
                                    </div>
                                </figure>

                                <div class="card-content">
                                    <div class="card-price">
                                        <strong>RS.28,900</strong>/Month
                                    </div>
                                    <h3 class="h3 card-title">
                                        <a href="#">House for rent in kottawa</a>
                                    </h3>
                                    <p class="card-text">
                                        Student-Friendly House in Kottava. Spacious three-bedroom house situated in a convenient location near Kottawa town center. Close to shops, restaurants, and public transportation, making it ideal for students.
                                    </p>

                                </div>

                                <div class="card-footer">
                                    <div class="card-author">
                                        <figure class="author-avatar">
                                            <img src="images/author.jpg" alt="William Seklo" class="w-100">
                                        </figure>

                                        <div>
                                            <p class="author-name">
                                                <a href="#">William Seklo</a>
                                            </p>
                                            <p class="author-title">Mr.Nimal Silva</p>
                                        </div>
                                    </div>

                                    <div class="card-footer-actions">
                                        <button class="card-footer-actions-btn">
                                            <ion-icon name="resize-outline"></ion-icon>
                                        </button>

                                        <button class="card-footer-actions-btn">
                                            <ion-icon name="heart-outline"></ion-icon>
                                        </button>

                                        <button class="card-footer-actions-btn">
                                            <ion-icon name="add-circle-outline"></ion-icon>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="property-card">
                                <figure class="card-banner">
                                    <a href="#">
                                        <img src="images/property-3.jpg" alt="Comfortable Apartment" class="w-100">
                                    </a>
                                    <div class="card-badge green">For Rent</div>
                                    <div class="banner-actions">

                                        <button class="banner-actions-btn">
                                            <ion-icon name="location"></ion-icon>
                                            <address>Pitipana,Colombo</address>
                                        </button>

                                        <button class="banner-actions-btn">
                                            <ion-icon name="camera"></ion-icon>
                                            <span>4</span>
                                        </button>

                                        <button class="banner-actions-btn">
                                            <ion-icon name="film"></ion-icon>
                                            <span>2</span>
                                        </button>
                                    </div>
                                </figure>

                                <div class="card-content">

                                    <div class="card-price">
                                        <strong>Rs.34,900</strong>/Month
                                    </div>
                                    <h3 class="h3 card-title">
                                        <a href="#">House for rent in pitipana</a>
                                    </h3>
                                    <p class="card-text">
                                        Comfortable Apartment near Homagama Campus.Cozy one-bedroom apartment located within walking distance to Homagama University Campus. Fully furnished with essential amenities, perfect for student living.
                                    </p>
                                </div>

                                <div class="card-footer">
                                    <div class="card-author">
                                        <figure class="author-avatar">
                                            <img src="images/author.jpg" alt="William Seklo" class="w-100">
                                        </figure>
                                        <div>
                                            <p class="author-name">
                                                <a href="#">William Seklo</a>
                                            </p>
                                            <p class="author-title">Mr.Dilruksha Perera</p>
                                        </div>
                                    </div>

                                    <div class="card-footer-actions">
                                        <button class="card-footer-actions-btn">
                                            <ion-icon name="resize-outline"></ion-icon>
                                        </button>

                                        <button class="card-footer-actions-btn">
                                            <ion-icon name="heart-outline"></ion-icon>
                                        </button>

                                        <button class="card-footer-actions-btn">
                                            <ion-icon name="add-circle-outline"></ion-icon>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="property-card">
                                <figure class="card-banner">
                                    <a href="#">
                                        <img src="images/property-4.png" alt="Luxury villa in Rego Park" class="w-100">
                                    </a>
                                    <div class="card-badge green">For Rent</div>
                                    <div class="banner-actions">
                                        <button class="banner-actions-btn">
                                            <ion-icon name="location"></ion-icon>
                                            <address>Belmont Gardens, Chicago</address>
                                        </button>

                                        <button class="banner-actions-btn">
                                            <ion-icon name="camera"></ion-icon>
                                            <span>4</span>
                                        </button>

                                        <button class="banner-actions-btn">
                                            <ion-icon name="film"></ion-icon>
                                            <span>2</span>
                                        </button>
                                    </div>
                                </figure>

                                <div class="card-content">
                                    <div class="card-price">
                                        <strong>Rs.44,900</strong>/Month
                                    </div>
                                    <h3 class="h3 card-title">
                                        <a href="#">Homely Boarding House for Female Students</a>
                                    </h3>
                                    <p class="card-text">
                                        Well-maintained boarding house exclusively for female students. Offering comfortable rooms with shared facilities and a friendly atmosphere conducive to studying.
                                    </p>
                                </div>

                                <div class="card-footer">
                                    <div class="card-author">
                                        <figure class="author-avatar">
                                            <img src="images/author.jpg" alt="William Seklo" class="w-100">
                                        </figure>
                                        <div>
                                            <p class="author-name">
                                                <a href="#">William Seklo</a>
                                            </p>
                                            <p class="author-title">Priyanka Rajapaksha</p>
                                        </div>
                                    </div>

                                    <div class="card-footer-actions">
                                        <button class="card-footer-actions-btn">
                                            <ion-icon name="resize-outline"></ion-icon>
                                        </button>

                                        <button class="card-footer-actions-btn">
                                            <ion-icon name="heart-outline"></ion-icon>
                                        </button>

                                        <button class="card-footer-actions-btn">
                                            <ion-icon name="add-circle-outline"></ion-icon>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>



            <!-- 
        - #ARTICLE
      -->

            <section class="blog" id="blog">
                <div class="container">

                    <p class="section-subtitle">Article</p>
                    <h2 class="h2 section-title">Latest News Feeds</h2>
                    <ul class="blog-list has-scrollbar">
                        <li>
                            <div class="blog-card">
                                <figure class="card-banner">
                                    <img src="images/blog-1.png" alt="The Most Inspiring Interior Design Of 2021" class="w-100">
                                </figure>

                                <div class="blog-content">
                                    <div class="blog-content-top">
                                        <ul class="card-meta-list">
                                            <li>
                                                <a href="#" class="card-meta-link">
                                                    <ion-icon name="person"></ion-icon>
                                                    <span>by: Admin</span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#" class="card-meta-link">
                                                    <ion-icon name="pricetags"></ion-icon>
                                                    <span>Interior</span>
                                                </a>
                                            </li>
                                        </ul>

                                        <h3 class="h3 blog-title">
                                            <a href="#">The Most Inspiring Interior Design Of 2024</a>
                                        </h3>
                                    </div>

                                    <div class="blog-content-bottom">
                                        <div class="publish-date">
                                            <ion-icon name="calendar"></ion-icon>
                                            <time datetime="2022-27-04">Apr 27, 2022</time>
                                        </div>

                                        <a href="#" class="read-more-btn">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="blog-card">
                                <figure class="card-banner">
                                    <img src="images/blog-2.jpg" alt="Recent Commercial Real Estate Transactions" class="w-100">
                                </figure>

                                <div class="blog-content">
                                    <div class="blog-content-top">
                                        <ul class="card-meta-list">

                                            <li>
                                                <a href="#" class="card-meta-link">
                                                    <ion-icon name="person"></ion-icon>
                                                    <span>by: Admin</span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#" class="card-meta-link">
                                                    <ion-icon name="pricetags"></ion-icon>
                                                    <span>Estate</span>
                                                </a>
                                            </li>
                                        </ul>

                                        <h3 class="h3 blog-title">
                                            <a href="#">Recent Commercial Real Estate Transactions</a>
                                        </h3>
                                    </div>

                                    <div class="blog-content-bottom">
                                        <div class="publish-date">
                                            <ion-icon name="calendar"></ion-icon>
                                            <time datetime="2022-27-04">Apr 27, 2022</time>
                                        </div>
                                        <a href="#" class="read-more-btn">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="blog-card">

                                <figure class="card-banner">
                                    <img src="images/blog-3.jpg" alt="Renovating a Living Room? Experts Share Their Secrets" class="w-100">
                                </figure>

                                <div class="blog-content">
                                    <div class="blog-content-top">
                                        <ul class="card-meta-list">
                                            <li>
                                                <a href="#" class="card-meta-link">
                                                    <ion-icon name="person"></ion-icon>
                                                    <span>by: Admin</span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#" class="card-meta-link">
                                                    <ion-icon name="pricetags"></ion-icon>
                                                    <span>Room</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <h3 class="h3 blog-title">
                                            <a href="#">Renovating a Living Room? Experts Share Their Secrets</a>
                                        </h3>
                                    </div>

                                    <div class="blog-content-bottom">
                                        <div class="publish-date">
                                            <ion-icon name="calendar"></ion-icon>
                                            <time datetime="2022-27-04">Apr 27, 2022</time>
                                        </div>
                                        <a href="#" class="read-more-btn">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>





            <!-- 
        - #CTA
      -->

            <section class="cta">
                <div class="container">
                    <div class="cta-card">
                        <div class="card-content">
                            <h2 class="h2 card-title">Looking for a home?</h2>
                            <p class="card-text">Where Your Perfect Home Awaits!</p>
                        </div>
                        <button class="btn cta-btn">
                            <span>Explore Properties</span>
                            <ion-icon name="arrow-forward-outline"></ion-icon>
                        </button>
                    </div>
                </div>
            </section>
        </article>
    </main>


    <!-- 
    - #FOOTER
  -->

    <footer class="footer">
        <div class="footer-top">
            <div class="container">
                <div class="footer-content">
                    <div class="footer-links">
                        <h3 class="footer-list-title">Sitemap</h3>
                        <a href="#" class="footer-link">About</a>
                        <a href="#" class="footer-link">Article</a>
                        <a href="#" class="footer-link">Properties</a>
                        <a href="#" class="footer-link">Locations Map</a>
                        <a href="#" class="footer-link">FAQ</a>
                        <a href="#" class="footer-link">Contact us</a>
                    </div>
                    <div class="footer-info">
                        <div class="contact-info">
                            <div class="contact-link">
                                <ion-icon name="location-outline"></ion-icon>
                                <address>10/C, Pitipana Junction, Homagama, SriLanka.</address>
                            </div>
                            <div class="contact-link">
                                <ion-icon name="call-outline"></ion-icon>
                                <span>+94 71 58 32 474</span>
                            </div>
                            <div class="contact-link">
                                <ion-icon name="mail-outline"></ion-icon>
                                <span>info@renthub.com</span>
                            </div>
                        </div>
                        <div class="social-media">
                            <h3 class="footer-list-title">Follow Us</h3>
                            <ul class="social-list">
                                <li>
                                    <a href="#" class="social-link">
                                        <ion-icon name="logo-facebook"></ion-icon>
                                        <span>Facebook</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="social-link">
                                        <ion-icon name="logo-instagram"></ion-icon>
                                        <span>Instagram</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="company-description">
                        <p>
                            "Buy Home: Where Your Perfect Home Awaits!"
                        </p>
                    </div>
                </div>
            </div>
            <p class="copyright">
                &copy; 2024 <a href="#">Batch 11 PLY Group 22</a>. All Rights Reserved
            </p>
        </div>

    </footer>

    <!-- 
    - custom js link
  -->
    <script src="newhome.js"></script>

    <!-- 
    - ionicon link
  -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>