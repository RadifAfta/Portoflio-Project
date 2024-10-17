<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--
    - primary meta tags
  -->
    <title>Furqon - I'm Full Stack Developer.</title>
    <meta name="title" content="Julia - I'm User Interface Designer & Developer.">
    <meta name="description" content="This is a personal portfolio html template made by codewithsadee">

    <!--
    - favicon
  -->
    <link rel="shortcut icon" href="/favicon.svg" type="image/svg+xml">

    <!--
    - google font link
  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@500;700&display=swap" rel="stylesheet">

    <!--
    - custom css link
  -->
    <link rel="stylesheet" href="/css/style.css">

    <!--
    - preload images
  -->
    <link rel="preload" as="image" href="/images/hero-banner.jpg">
    <link rel="preload" as="image" href="/images/Blog.svg">

</head>

<body>

    <!--
    - #HEADER
  -->

    <header class="header" data-header>
        <div class="container">
            <div class="logo-header">
                <h2>Furqon</h2>
            </div>

            <nav class="navbar" data-navbar>

                <div class="navbar-top">
                    <a href="#" class="logo">
                        <img src="/images/logo-light.svg" width="64" height="24" alt="Julia home">
                    </a>

                    <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
                        <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
                    </button>
                </div>

                <ul class="navbar-list">

                    <li>
                        <a href="#" class="navbar-link">Home</a>
                    </li>

                    <li>
                        <a href="#link-about" class="navbar-link">About</a>
                    </li>

                    <li>
                        <a href="#link-services" class="navbar-link">Services</a>
                    </li>

                    <li>
                        <a href="#link-project" class="navbar-link">Projects</a>
                    </li>

                    {{-- <li>
                        <a href="#" class="navbar-link">Blog</a>
                    </li> --}}

                    <li>
                        <a href="#link-contact" class="navbar-link">Contact</a>
                    </li>

                </ul>

                <div class="wrapper">
                    <a href="mailto:info@email.com" class="contact-link">info@email.com</a>

                    <a href="tel:001234567890" class="contact-link">00 (123) 456 78 90</a>
                </div>

                <ul class="social-list">

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-twitter"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-facebook"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-dribbble"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-instagram"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-youtube"></ion-icon>
                        </a>
                    </li>

                </ul>

            </nav>

            <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
                <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
            </button>

            <div class="overlay" data-nav-toggler data-overlay></div>

        </div>
    </header>





    <main>
        <article>

            <!--
        - #HERO
      -->

            <section class="section hero" aria-label="home">
                <div class="container">

                    <figure class="hero-banner">
                        <img src="/images/pp.jpg" width="560" height="540" alt="Julia" class="w-100"
                            data-reveal="top">

                        <img src="/images/ttt.jpg" width="203" height="91" alt="250+ Projects Done" class="shape"
                            data-reveal="top" data-reveal-delay="0.25s">
                    </figure>

                    <div class="hero-content">

                        <h1 class="h1 hero-title" data-reveal="top" data-reveal-delay="0.5s">
                            I'm Fullstack Developer.
                        </h1>

                        <p class="section-text" data-reveal="top" data-reveal-delay="0.75s">
                            Hello! I'm Furqon, a fullstack developer based in Indonesian. I’m
                            very
                            passionate
                            about the work that I do.
                        </p>

                        <div class="btn-wrapper" data-reveal="top" data-reveal-delay="1s">
                            <a href="#link-project" class="btn btn-primary">See My Works</a>

                            <a href="#link-contact" class="btn btn-secondary">Contact Me</a>
                        </div>

                    </div>

                </div>
            </section>





            <!--
        - #ABOUT
      -->

            <section class="section about" aria-label="about" id="link-about">
                <div class="container">

                    <div class="wrapper">

                        <div data-reveal="left">
                            <h2 class="h2 section-title">What I Do?</h2>

                            <p class="section-text">
                                Duis mollis est commodo luctus nisi erat porttitor ligula, eget lacinia odio sem nec
                                elit. Nullam quis
                                risus eget urna mollis ornare vel. Nulla vitae elit libero, a pharetra augue. Praesent
                                commodo cursus
                                magna, vel scelerisque nisl.
                            </p>
                        </div>

                        <ul class="progress-list" data-reveal="right">

                            <li class="progress-item">

                                <div class="label-wrapper">
                                    <p>Web Design</p>

                                    <span class="span">100 %</span>
                                </div>

                                <div class="progress">
                                    <div class="progress-fill" style="width: 100%; background-color: #c7b1dd"></div>
                                </div>

                            </li>

                            <li class="progress-item">

                                <div class="label-wrapper">
                                    <p>Mobile Design</p>

                                    <span class="span">80 %</span>
                                </div>

                                <div class="progress">
                                    <div class="progress-fill" style="width: 80%; background-color: #8caeec"></div>
                                </div>

                            </li>

                            <li class="progress-item">

                                <div class="label-wrapper">
                                    <p>Development</p>

                                    <span class="span">85 %</span>
                                </div>

                                <div class="progress">
                                    <div class="progress-fill" style="width: 85%; background-color: #b0d4c1"></div>
                                </div>

                            </li>

                            <li class="progress-item">

                                <div class="label-wrapper">
                                    <p>SEO</p>

                                    <span class="span">90 %</span>
                                </div>

                                <div class="progress">
                                    <div class="progress-fill" style="width: 90%; background-color: #e3a6b6"></div>
                                </div>

                            </li>

                        </ul>

                    </div>

                    <ul class="grid-list">

                        <li data-reveal="bottom">
                            <div class="about-card">

                                <div class="card-icon">
                                    <img src="/images/icon-1.svg" width="52" height="52" loading="lazy"
                                        alt="web design icon">
                                </div>

                                <h3 class="h4 card-title">Web Design</h3>

                                <p class="card-text">
                                    Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at
                                    eget metus. Cras
                                    justo cum sociis natoque magnis.
                                </p>

                            </div>
                        </li>

                        <li data-reveal="bottom" data-reveal-delay="0.25s">
                            <div class="about-card">

                                <div class="card-icon">
                                    <img src="/images/icon-2.svg" width="52" height="52" loading="lazy"
                                        alt="mobile design icon">
                                </div>

                                <h3 class="h4 card-title">Mobile Design</h3>

                                <p class="card-text">
                                    Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at
                                    eget metus. Cras
                                    justo cum sociis natoque magnis.
                                </p>

                            </div>
                        </li>

                        <li data-reveal="bottom" data-reveal-delay="0.5s">
                            <div class="about-card">

                                <div class="card-icon">
                                    <img src="/images/icon-3.svg" width="52" height="52" loading="lazy"
                                        alt="web development icon">
                                </div>

                                <h3 class="h4 card-title">Development</h3>

                                <p class="card-text">
                                    Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at
                                    eget metus. Cras
                                    justo cum sociis natoque magnis.
                                </p>

                            </div>
                        </li>

                        <li data-reveal="bottom" data-reveal-delay="0.75s">
                            <div class="about-card">

                                <div class="card-icon">
                                    <img src="/images/icon-4.svg" width="52" height="52" loading="lazy"
                                        alt="web seo icon">
                                </div>

                                <h3 class="h4 card-title">SEO</h3>

                                <p class="card-text">
                                    Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at
                                    eget metus. Cras
                                    justo cum sociis natoque magnis.
                                </p>

                            </div>
                        </li>

                    </ul>

                </div>
            </section>

            <!--
        - #QUALITY SERVICES
      -->

            <section class="section services" aria-label="services" id="link-services">
                <div class="container">
                    <h2 class="h2 section-title" data-reveal="top">Quality Services</h2>

                    <div class="services-grid">
                        <div class="service-card" data-reveal="bottom">
                            <div class="service-icon">
                                <img src="/images/language.svg" alt="Brand Identity Design" width="44"
                                    height="44">
                            </div>
                            <h3 class="h4 card-title">Brand Identity Design</h3>
                            <p class="card-text">
                                Gives you the blocks & kits you need to create a true website within minutes.
                            </p>
                        </div>

                        <div class="service-card" data-reveal="bottom">
                            <div class="service-icon">
                                <img src="/images/feather.svg" alt="Website Design" width="44" height="44">
                            </div>
                            <h3 class="h4 card-title">Website Design</h3>
                            <p class="card-text">
                                Gives you the blocks & kits you need to create a true website within minutes.
                            </p>
                        </div>

                        <div class="service-card" data-reveal="bottom">
                            <div class="service-icon">
                                <img src="/images/layer.svg" alt="Application Design" width="44" height="44">
                            </div>
                            <h3 class="h4 card-title">Application Design</h3>
                            <p class="card-text">
                                Gives you the blocks & kits you need to create a true website within minutes.
                            </p>
                        </div>
                    </div>
                </div>
            </section>



            <!--
        - #PROJECT
      -->

            <section class="section project" aria-labelledby="project-label" id="link-project">
                <div class="container">

                    <div class="title-wrapper" data-reveal="top">

                        <div>
                            <h2 class="h2 section-title" id="project-label">Latest Projects</h2>

                            <p class="section-text">
                                Check out some of my latest projects with creative ideas.
                            </p>
                        </div>

                        <a href="{{ route('all_project') }}" class="btn btn-secondary">See All Projects</a>

                    </div>

                    <ul class="grid-list">

                        <li>
                            <div class="project-card project-card-1" style="background-color: #f8f5fb"
                                data-images="images/project-2.png,images/project-3.png,images/project-4.png">
                                <div class="card-content" data-reveal="left">
                                    <p class="card-tag" style="color: #a07cc5">Web Design</p>
                                    <h3 class="h3 card-title">Snowlake Theme</h3>
                                    <p class="card-text">Maecenas faucibus mollis interdum sed posuere consectetur est
                                        at lobortis. Scelerisque id ligula porta felis euismod semper.</p>
                                    <a href="#" class="btn-text" style="color: #a07cc5">
                                        <span class="span">See Project</span>
                                        <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                                    </a>
                                </div>
                                <figure class="card-banner" data-reveal="right">
                                    <img src="/images/project-1.png" width="650" height="370" loading="lazy"
                                        alt="Web Design" class="w-100">
                                </figure>
                            </div>
                        </li>

                        <li>
                            <div class="project-card project-card-2" style="background-color: #f1f5fd">

                                <div class="card-content" data-reveal="right">

                                    <p class=" card-tag" style="color: #3f78e0">Mobile Design</p>

                                    <h3 class="h3 card-title">Budget App</h3>

                                    <p class="card-text">
                                        Maecenas faucibus mollis interdum sed posuere consectetur est at lobortis.
                                        Scelerisque id ligula
                                        porta felis euismod semper. Fusce dapibus tellus cursus.
                                    </p>

                                    <a href="#" class="btn-text" style="color: #3f78e0">
                                        <span class="span">See Project</span>

                                        <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                                    </a>

                                </div>

                                <figure class="card-banner" data-reveal="left">
                                    <img src="/images/project-2.png" width="600" height="367" loading="lazy"
                                        alt="Web Design" class="w-100">
                                </figure>

                            </div>
                        </li>

                        <li>
                            <div class="project-card project-card-3" style="background-color: #f5faf7">

                                <div class="card-content" data-reveal="left">

                                    <p class=" card-tag" style="color: #7cb798">Web Design</p>

                                    <h3 class="h3 card-title">Missio Theme</h3>

                                    <p class="card-text">
                                        Maecenas faucibus mollis interdum sed posuere porta consectetur cursus porta
                                        lobortis. Scelerisque
                                        id ligula felis.
                                    </p>

                                    <a href="#" class="btn-text" style="color: #7cb798">
                                        <span class="span">See Project</span>

                                        <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                                    </a>

                                </div>

                                <figure class="card-banner" data-reveal="right">
                                    <img src="/images/project-3.png" width="600" height="367" loading="lazy"
                                        alt="Web Design" class="w-100">
                                </figure>

                            </div>
                        </li>

                        <li>
                            <div class="project-card project-card-4" style="background-color: #fcf4f6">

                                <div class="card-content" data-reveal="left">

                                    <p class=" card-tag" style="color: #d16b86">Mobile Design</p>

                                    <h3 class="h3 card-title">Storage App</h3>

                                    <p class="card-text">
                                        Maecenas faucibus mollis interdum sed posuere consectetur est at lobortis.
                                        Scelerisque id ligula
                                        porta felis euismod semper.
                                    </p>

                                    <a href="#" class="btn-text" style="color: #d16b86">
                                        <span class="span">See Project</span>

                                        <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                                    </a>

                                </div>

                                <figure class="card-banner" data-reveal="right">
                                    <img src="/images/project-4.png" width="620" height="370" loading="lazy"
                                        alt="Mobile Design" class="w-100">
                                </figure>

                            </div>
                        </li>

                    </ul>

                </div>
            </section>

            <!-- Modal Structure -->
            <div id="projectModal" class="modal">
                <button class="modal-close">×</button>
                <img class="modal-content" id="modalImage">
                <div id="caption"></div>
            </div>





            <!--
        - #CONTACT
      -->

            <section class="section contact" aria-label="contact" id="link-contact">
                <div class="container">

                    <div class="contact-card">

                        <div class="contact-content" data-reveal="left">

                            <div class="contact-info">
                                <div class="contact-item">
                                    <div class="card-icon">
                                        <img src="/images/phone.svg" width="30" height="30" loading="lazy"
                                            alt="phone icon">
                                    </div>
                                    <div class="contact-details">
                                        <h3>Phone</h3>
                                        <p>+1 (123) 456-7890</p>
                                    </div>
                                </div>

                                <div class="contact-item">
                                    <div class="card-icon">
                                        <img src="/images/email.svg" width="30" height="30" loading="lazy"
                                            alt="email icon">
                                    </div>
                                    <div class="contact-details">
                                        <h3>Email</h3>
                                        <p>contact@example.com</p>
                                    </div>
                                </div>

                                <div class="contact-item">
                                    <div class="card-icon">
                                        <img src="/images/location.svg" width="30" height="30" loading="lazy"
                                            alt="location icon">
                                    </div>
                                    <div class="contact-details">
                                        <h3>Address</h3>
                                        <p>123 Main Street, City, Country, 12345</p>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <form action="{{ route('contact.submit') }}" method="POST" class="contact-form"
                            data-reveal="right">
                            @csrf
                            <div class="input-wrapper">
                                <input type="text" name="name" placeholder="Name *" required
                                    class="input-field">
                                <input type="email" name="email_address" placeholder="Email *" required
                                    class="input-field">
                            </div>
                            <textarea name="message" placeholder="Message *" required class="input-field"></textarea>
                            <button type="submit" class="btn btn-secondary">Send message</button>
                        </form>

                    </div>

                </div>
            </section>

        </article>
    </main>





    <!--
    - #FOOTER
  -->

    <footer class="footer">
        <div class="container">

            <p class="copyright">
                © 2024 codewithsadee. All rights reserved.
            </p>

            <ul class="social-list">

                <li>
                    <a href="#" class="social-link">
                        <ion-icon name="logo-twitter"></ion-icon>
                    </a>
                </li>

                <li>
                    <a href="#" class="social-link">
                        <ion-icon name="logo-facebook"></ion-icon>
                    </a>
                </li>

                <li>
                    <a href="#" class="social-link">
                        <ion-icon name="logo-dribbble"></ion-icon>
                    </a>
                </li>

                <li>
                    <a href="#" class="social-link">
                        <ion-icon name="logo-instagram"></ion-icon>
                    </a>
                </li>

                <li>
                    <a href="#" class="social-link">
                        <ion-icon name="logo-youtube"></ion-icon>
                    </a>
                </li>

            </ul>

        </div>
    </footer>





    <!--
    - custom js link
  -->
    <script src="/js/script.js"></script>

    <!--
    - ionicon link
  -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>
