<template>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 6</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/custom.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a href="index.html" class="navbar-brand">
                    <img class="logo" src="img/logo.png" alt="logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Menu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">Tentang Kami</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Produk
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Pakaian</a></li>
                                <li><a class="dropdown-item" href="#">Celana</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Apa lagi hayo</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="berita.html">Berita</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="informasi.html">Informasi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="kontak.html">Kontak</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <section id="hero" class="d-flex align-items-center pt-lg-5">
        <div class="container pt-lg-5">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1">
                    <h1>Better Solutions For Your RAMBUT</h1>
                    <h2>We are a team of talented designers making websites with Bootstrap</h2>
                    <div class="d-flex justify-content-center justify-content-lg-start pt-3">
                        <a href="#about" class="btn-get-started scrollto btn btn-success">Get Started</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img">
                    <h1>Gillette Core</h1>
                    <dotlottie-player src="..assets/hero-img.lottie" background="transparent" speed="1" style="width: 600px; height: 350px" direction="1" playMode="normal" loop autoplay></dotlottie-player>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <h1>Judul</h1>
            <p>Isi kontent</p>
        </div>
    </section>

    <footer class="bg-body-tertiary text-center">
        <div class="container p-4">
            <section class="mb-4">
                <!-- Facebook -->
                <a class="btn btn-outline btn-floating m-1" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>
                <!-- Twitter -->
                <a class="btn btn-outline btn-floating m-1" href="#!" role="button"><i class="fab fa-twitter"></i></a>
                <!-- Google -->
                <a class="btn btn-outline btn-floating m-1" href="#!" role="button"><i class="fab fa-google"></i></a>
                <!-- Instagram -->
                <a class="btn btn-outline btn-floating m-1" href="#!" role="button"><i class="fab fa-instagram"></i></a>
                <!-- Linkedin -->
                <a class="btn btn-outline btn-floating m-1" href="#!" role="button"><i class="fab fa-linkedin-in"></i></a>
                <!-- Github -->
                <a class="btn btn-outline btn-floating m-1" href="#!" role="button"><i class="fab fa-github"></i></a>
            </section>

            <section class="mb-4">
                <form action="">
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-5 col-12">
                            <div class="form-outline mb-4">
                                <input type="email" id="form5Example24" class="form-control" placeholder="Email Kamu" />
                            </div>
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-outline mb-4">Sign Up</button>
                        </div>
                    </div>
                </form>
            </section>

            <section class="mb-4">
                <p>By proceeding, I agree to receive emails from Gillette and other trusted P&G brands and programs. Click to read P&G Terms & Conditions and P&G Privacy Policy.</p>
            </section>

            <section class="">
                <div class="row">
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <a href="#"><h5 class="text-uppercase">Links</h5></a>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <a href="#"><h5 class="text-uppercase">Links</h5></a>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <a href="#"><h5 class="text-uppercase">Links</h5></a>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                        <a href="#"><h5 class="text-uppercase">Links</h5></a>
                    </div>
                </div>
            </section>
        </div>

        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2024 Copyright:
            <a class="text-reset fw-bold" href="index.html">Gillette.com</a>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>
</body>

</template>

<script>

</script>

<style scoped>
    .logo {
        width: 100px;
    }

    #hero {
        background-color: #f8f9fa;
        padding: 100px 0;
    }

    .hero-img {
        text-align: center;
    }

    .btn-get-started {
        font-size: 16px;
        padding: 10px 24px;
        border-radius: 50px;
        transition: 0.5s;
    }

    .btn-get-started:hover {
        background-color: #28a745;
        color: white;
    }

    .btn-outline {
        border: 1px solid #28a745;
        color: #28a745;
        transition: 0.5s;
    }

    .btn-outline:hover {
        background-color: #28a745;
        color: white;
    }

    .bg-body-tertiary {
        background-color: #f8f9fa;
    }
