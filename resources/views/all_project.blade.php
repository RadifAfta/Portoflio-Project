<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Projects</title>
    <link rel="stylesheet" href="/css/style.css">

    <link rel="shortcut icon" href="/favicon.svg" type="image/svg+xml">
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
                        <a href="/#" class="navbar-link">Home</a>
                    </li>

                    <li>
                        <a href="/#link-about" class="navbar-link">About</a>
                    </li>

                    <li>
                        <a href="/#link-project" class="navbar-link">Projects</a>
                    </li>

                    {{-- <li>
                    <a href="#" class="navbar-link">Blog</a>
                </li> --}}

                    <li>
                        <a href="/#link-contact" class="navbar-link">Contact</a>
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
    <section class="section project" aria-labelledby="project-label" style="padding-top: 150px;">
        <div class="container">

            <div class="title-wrapper" data-reveal="top">
                <div>
                    <h2 class="h2 section-title" id="project-label">All Projects</h2>
                    <p class="section-text">
                        Check out some of my all projects with creative ideas.
                    </p>
                </div>
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




    <script src="/js/script.js"></script>

    <!--
    - ionicon link
  -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>
