<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="canonical" href="https://fasaec.cd/actualites" />
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    @verbatim
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "FASAEC",
            "url": "https://fasaec.cd",
            "logo": "https://fasaec.cd/img/logo.png",
            "sameAs": [
                "https://www.facebook.com/share/17noYupcVM/",
                "https://www.instagram.com/fasaec_officiel?igsh=MWo0d21ubnhsb254bA==",
                "https://www.linkedin.com/company/fonds-d%E2%80%99assistance-sociale-aux-artistes-et-%C3%A9crivains-congolais-fasaec/",
                "https://x.com/fasaecofficiel"
            ]
        }
    </script>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "SiteNavigationElement",
            "name": [
                "Accueil",
                "Le FASAEC",
                "Droits & Protection sociale",
                "Artistes & Numérique / IA",
                "Aides & Accompagnement",
                "Actualités & Ressources",
                "Contact & Orientation"
            ],
            "url": [
                "https://fasaec.cd/",
                "https://fasaec.cd/le-fasaec/",
                "https://fasaec.cd/droits-protection-sociale/",
                "https://fasaec.cd/artistes-numerique-ia/",
                "https://fasaec.cd/aides-accompagnement/",
                "https://fasaec.cd/actualites/",
                "https://fasaec.cd/contact/"
            ]
        }
    </script>
    @endverbatim
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Actualités & Ressources | FASAEC</title>
    <meta property="og:title" content="Actualités & Ressources | FASAEC" />
    <meta property="og:url" content="https://fasaec.cd/actualites" />
    <meta property="og:image" content="img/logo-couleur.png" />
    <meta name="description" content="Découvrez les dernières actualités, événements et ressources du FASAEC pour les artistes et écrivains congolais.">

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800;900&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="32x32" href="img/logo.png">

    <style>
        :root {
            --primary: #1766d1;
            --primary-dark: #0d4a9f;
            --secondary: #69ADF0;
            --dark: #1a2332;
            --muted: #5a6c7d;
            --light-bg: #f8faff;
            --white: #ffffff;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Manrope', sans-serif;
            line-height: 1.6;
            color: var(--dark);
            background: var(--white);
            overflow-x: hidden;
        }

        /* Article Card */
        .article-card {
            background: var(--white);
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
            transition: all 0.4s ease;
            cursor: pointer;
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .article-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(23,102,209,0.2);
        }

        .article-image-container {
            position: relative;
            height: 250px;
            overflow: hidden;
        }

        .article-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: all 0.4s ease;
        }

        .article-card:hover .article-image {
            transform: scale(1.1);
        }

        .article-badge {
            position: absolute;
            top: 15px;
            left: 15px;
            background: var(--primary);
            color: var(--white);
            padding: 8px 20px;
            border-radius: 50px;
            font-size: 0.85rem;
            font-weight: 700;
            z-index: 2;
        }

        .article-date {
            position: absolute;
            top: 15px;
            right: 15px;
            background: rgba(0,0,0,0.7);
            color: var(--white);
            padding: 8px 15px;
            border-radius: 50px;
            font-size: 0.85rem;
            font-weight: 600;
            z-index: 2;
        }

        .carousel-indicators {
            position: absolute;
            bottom: 15px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 8px;
            z-index: 2;
        }

        .carousel-indicator {
            width: 8px;
            height: 8px;
            background: rgba(255,255,255,0.5);
            border-radius: 50%;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .carousel-indicator.active {
            background: var(--white);
            width: 25px;
            border-radius: 4px;
        }

        .article-content {
            padding: 25px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .article-title {
            font-size: 1.4rem;
            font-weight: 700;
            color: var(--dark);
            margin-bottom: 15px;
        }

        .article-excerpt {
            color: var(--muted);
            line-height: 1.7;
            margin-bottom: 20px;
            flex-grow: 1;
        }

        .article-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 15px;
            border-top: 1px solid #eee;
        }

        .article-author {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 0.9rem;
            color: var(--muted);
        }

        .read-more {
            color: var(--primary);
            font-weight: 700;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 5px;
            transition: all 0.3s ease;
        }

        .read-more:hover {
            gap: 10px;
        }

        /* Video Card */
        .video-card {
            background: var(--white);
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
            transition: all 0.4s ease;
            cursor: pointer;
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .video-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(23,102,209,0.2);
        }

        .video-thumbnail {
            position: relative;
            height: 250px;
            overflow: hidden;
        }

        .video-thumbnail img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: all 0.4s ease;
        }

        .video-card:hover .video-thumbnail img {
            transform: scale(1.1);
        }

        .video-play-btn {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 70px;
            height: 70px;
            background: rgba(255,255,255,0.9);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary);
            font-size: 1.5rem;
            z-index: 2;
            transition: all 0.3s ease;
        }

        .video-card:hover .video-play-btn {
            transform: translate(-50%, -50%) scale(1.1);
            background: var(--white);
        }

        .video-duration {
            position: absolute;
            bottom: 15px;
            right: 15px;
            background: rgba(0,0,0,0.8);
            color: var(--white);
            padding: 5px 12px;
            border-radius: 5px;
            font-size: 0.85rem;
            font-weight: 600;
            z-index: 2;
        }

        /* Pagination */
        .pagination-container {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
            margin-top: 50px;
        }

        .pagination-btn {
            width: 45px;
            height: 45px;
            border: 2px solid var(--primary);
            background: var(--white);
            color: var(--primary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            font-weight: 700;
            transition: all 0.3s ease;
        }

        .pagination-btn:hover,
        .pagination-btn.active {
            background: var(--primary);
            color: var(--white);
            transform: scale(1.1);
        }

        .pagination-btn:disabled {
            opacity: 0.3;
            cursor: not-allowed;
        }

        .pagination-btn:disabled:hover {
            transform: none;
        }

        /* Modal */
        .modal {
            display: none;
            position: fixed;
            z-index: 199999999999999;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.8);
            animation: fadeIn 0.3s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .modal.active {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .modal-content {
            background-color: var(--white);
            margin: auto;
            padding: 0;
            border-radius: 20px;
            width: 90%;
            max-width: 900px;
            max-height: 90vh;
            overflow-y: auto;
            position: relative;
            animation: slideUp 0.3s ease;
        }

        @keyframes slideUp {
            from {
                transform: translateY(50px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .modal-close {
            position: absolute;
            top: 20px;
            right: 20px;
            width: 40px;
            height: 40px;
            background: var(--white);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            font-size: 1.5rem;
            color: var(--dark);
            z-index: 10;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
            transition: all 0.3s ease;
        }

        .modal-close:hover {
            background: var(--primary);
            color: var(--white);
            transform: rotate(90deg);
        }

        .modal-image-container {
            position: relative;
            width: 100%;
            height: 400px;
            overflow: hidden;
        }

        .modal-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .modal-carousel-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 50px;
            height: 50px;
            background: rgba(255,255,255,0.9);
            border: none;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            font-size: 1.2rem;
            color: var(--dark);
            transition: all 0.3s ease;
            z-index: 5;
        }

        .modal-carousel-btn:hover {
            background: var(--white);
            transform: translateY(-50%) scale(1.1);
        }

        .modal-carousel-btn.prev {
            left: 20px;
        }

        .modal-carousel-btn.next {
            right: 20px;
        }

        .modal-body {
            padding: 40px;
        }

        .modal-title {
            font-size: 2rem;
            font-weight: 800;
            color: var(--dark);
            margin-bottom: 20px;
        }

        .modal-meta {
            display: flex;
            gap: 30px;
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 2px solid #eee;
        }

        .modal-meta-item {
            display: flex;
            align-items: center;
            gap: 10px;
            color: var(--muted);
        }

        .modal-meta-item i {
            color: var(--primary);
        }

        .modal-description {
            color: var(--dark);
            line-height: 1.8;
            font-size: 1.1rem;
        }

        .modal-video-container {
            position: relative;
            width: 100%;
            padding-bottom: 56.25%;
            border-radius: 20px 20px 0 0;
            overflow: hidden;
            background: #000;
        }

        .modal-video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        /* Filter Tabs */
        .filter-tabs {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-bottom: 50px;
            flex-wrap: wrap;
        }

        .filter-tab {
            padding: 12px 30px;
            background: var(--white);
            border: 2px solid var(--primary);
            color: var(--primary);
            border-radius: 50px;
            cursor: pointer;
            font-weight: 700;
            transition: all 0.3s ease;
        }

        .filter-tab:hover,
        .filter-tab.active {
            background: var(--primary);
            color: var(--white);
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(23,102,209,0.3);
        }

        /* Scroll to Top */
        .scroll-to-top {
            position: fixed;
            right: 25px;
            bottom: 25px;
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            color: var(--white);
            border: none;
            border-radius: 50%;
            font-size: 18px;
            cursor: pointer;
            display: none;
            align-items: center;
            justify-content: center;
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
            transition: all 0.3s ease;
            z-index: 9;
        }

        .scroll-to-top:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 30px rgba(0,0,0,0.25);
        }

        /* Social Floating */
        .social-floating {
            position: fixed;
            left: 20px;
            top: 50%;
            transform: translateY(-50%);
            display: flex;
            flex-direction: column;
            gap: 15px;
            opacity: 0;
            visibility: hidden;
            transition: all 0.4s ease;
            z-index: 9;
        }

        .social-floating.active {
            opacity: 1;
            visibility: visible;
        }

        .social-btn {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 18px;
            text-decoration: none;
            box-shadow: 0 8px 20px rgba(0,0,0,0.15);
            transition: all 0.3s ease;
        }

        .social-btn.facebook {
            background: #1877f2;
        }

        .social-btn.instagram {
            background: linear-gradient(45deg, #f58529, #dd2a7b, #8134af);
        }

        .social-btn.linkedin {
            background: #0077b5;
        }

        .social-btn.x {
            background: #000;
        }

        .social-btn:hover {
            transform: translateX(5px) scale(1.1);
        }

        /* Page Loader */
        #page-loader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: var(--white);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 999999;
            transition: opacity 0.6s ease;
        }

        #page-loader.fade-out {
            opacity: 0;
        }

        .loader-content {
            text-align: center;
        }

        .loader-logo {
            max-width: 200px;
            animation: pulse 1.5s ease-in-out infinite;
        }

        @keyframes pulse {
            0%, 100% { opacity: 1; transform: scale(1); }
            50% { opacity: 0.7; transform: scale(0.95); }
        }

        /* Animations */
        .card-appear {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease;
        }

        .card-appear.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Responsive */
        @media (max-width: 991px) {
            .topbar-one-middle {
                flex-direction: column;
                gap: 15px;
            }

            .topbar-right {
                text-align: center;
            }

            .main-menu-list {
                display: none;
            }

            .mobile-nav-toggler {
                display: flex;
            }

            .hero-card {
                padding: 30px;
            }

            .hero-title {
                font-size: 2rem;
            }

            .content-section {
                padding: 50px 0;
            }

            .section-title {
                font-size: 2rem;
            }

            .modal-content {
                width: 95%;
            }

            .modal-body {
                padding: 25px;
            }

            .modal-title {
                font-size: 1.5rem;
            }
        }

        @media (max-width: 768px) {
            .sub-header .left-content p {
                font-size: 0.75rem;
            }

            .topbar-one {
                display: none;
            }

            .topbar-one-left {
                text-align: center;
                margin-bottom: 15px;
            }

            .hero-section {
                padding: 60px 0 40px;
            }

            .btn {
                width: 100%;
                text-align: center;
                margin-bottom: 10px;
            }

            .social-floating {
                left: -10px;
            }

            .social-btn {
                border-top-right-radius: 2000px;
                border-bottom-right-radius: 2000px;
            }

            .modal-image-container {
                height: 250px;
            }

            .modal-carousel-btn {
                width: 40px;
                height: 40px;
            }

            .filter-tabs {
                gap: 10px;
            }

            .filter-tab {
                padding: 10px 20px;
                font-size: 0.9rem;
            }
        }
    </style>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css?v=<?= time() ?>">
    <link rel="stylesheet" href="assets/css/templatemo-edu-meeting.css?v=<?= time() ?>">
    <link rel="stylesheet" href="assets/css/owl.css?v=<?= time() ?>">
    <link rel="stylesheet" href="assets/css/lightbox.css?v=<?= time() ?>">

    <link rel="icon" type="image/png" sizes="32x32" href={{ asset('img/logo.png') }}>

    <!-- google font -->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}?v={{ time() }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}?v={{ time() }}">
    <link rel="stylesheet" href="{{ asset('css/page-loader.css') }}?v={{ time() }}">
    <link rel="stylesheet" href="{{ asset('css/banner.css') }}?v={{ time() }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}?v={{ time() }}">
    <link rel="stylesheet" href="{{ asset('css/style-1.css') }}?v={{ time() }}">

</head>

<body>
<!-- Loader -->
<div id="page-loader">
    <div class="loader-content">
        <img src="img/logo1.png" alt="FASAEC Logo" class="loader-logo">
    </div>
</div>

<!-- Sub Header -->
<div class="sub-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-sm-8">
                <div class="left-content">
                    <p>Fonds d'Assistance Sociale aux Artistes et Ecrivains Congolais (FASAEC)</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4" style="z-index: 1000;">
                <div class="right-icons">
                    <ul>
                        <li><a href="https://www.facebook.com/share/17noYupcVM/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a href="https://www.instagram.com/fasaec_officiel?igsh=MWo0d21ubnhsb254bA==" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="https://www.linkedin.com/company/fonds-d%E2%80%99assistance-sociale-aux-artistes-et-%C3%A9crivains-congolais-fasaec/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a></li>
                        <li><a href="https://x.com/fasaecofficiel" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Header -->
<header class="header header-area header-sticky">
    <div class="topbar-one">
        <div class="topbar-one-left">
            <div class="menu-logo">
                <a href="/">
                    <img id="logo-transparent" src="img/logo-transparant.png" width="160" alt="logo transparent">
                    <img id="logo-couleur" src="img/logo-couleur.png" width="160" alt="logo couleur">
                </a>
            </div>
        </div>

        <div class="container">
            <div class="topbar-one-middle">
                <div class="topbar-info">
                    <ul>
                        <li>
                            <div class="topbar-icon">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div class="topbar-text">
                                <a href="mailto:info@fasaec.cd">info@fasaec.cd</a>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="topbar-right">
                    <ul>
                        <li>124 avenue Mbomu, Quartier Gbaka, Commune Kinshasa, Ville Kinshasa, République Démocratique du Congo</li>
                    </ul>
                </div>
            </div>

            <div class="main-menu menu-two sticky-header">
                <div class="main-menu-one-inner">
                    <div class="main-menu-left">
                        <nav class="navigation">
                            <ul class="main-menu-list list-unstyled">
                                <li>
                                    <a href="/">ACCUEIL</a>
                                </li>
                                <li>
                                    <a href="/le-fasaec">LE FASAEC</a>
                                </li>
                                <li class="active">
                                    <a href="/droits-protection-sociale" style="white-space: nowrap;">DROITS & PROTECTION SOCIALE</a>
                                </li>
                                <li>
									<a href="/artistes-numerique-ia">ARTISTES & NUMÉRIQUE / IA</a>
								</li>
                                <li>
									<a href="/aides-accompagnement">AIDES & ACCOMPAGNEMENT</a>
								</li>
                                <li>
									<a href="/actualites">ACTUALITÉS & RESSOURCES</a>
								</li>
                                <li></li><br>
                            </ul>
                        </nav>
                    </div>

                    <div class="main-menu-right">
                        <div class="mobile-menu-button mobile-nav-toggler">
                            <span class="span"></span>
                            <span class="span"></span>
                            <span class="span"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- HERO SECTION -->
<div class="hero-section">
    <div class="hero-bg" aria-hidden="true"></div>
    <div class="hero-shape s1" aria-hidden="true"></div>
    <div class="hero-shape s2" aria-hidden="true"></div>
    <div class="hero-shape s3" aria-hidden="true"></div>
    <style>
        .hero-bg {
            position: absolute;
            inset: 0;
            background: url("img/mission-couleur.jpg") center/cover no-repeat;
            opacity: 0.08;
            transform: scale(1.1);
            filter: grayscale(.2) contrast(1.1);
            animation: slowZoom 20s ease-in-out infinite alternate;
        }
    </style>

    <div class="container">
        <br><br>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="hero-card">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h1 class="hero-title">
                                <i class="fas fa-newspaper me-3"></i>
                                Actualités & Ressources
                            </h1>
                            <p class="hero-sub">Restez informés des dernières nouvelles, événements et ressources pour la communauté artistique congolaise</p>
                            <div class="d-md-flex flex-md-nowrap">
                                <a href="#actualites" class="btn btn-light btn-lg me-3 mss">
                                    <i class="fas fa-images me-2"></i>
                                    Actualités
                                </a><br>
                                <a href="#videos" class="btn btn-primary-custom btn-lg">
                                    <i class="fas fa-video me-2"></i>
                                    Vidéos
                                </a>
                            </div>
                        </div>

                        <div class="col-md-4 text-md-end mt-4 mt-md-0">
                            <div style="display:inline-block">
                                <div class="icon-circle mb-3">
                                    <i class="fas fa-rss"></i>
                                </div>
                                <div style="color:#fff;font-weight:700;font-size:1.2rem">Actualités</div>
                                <div style="color:rgba(255,255,255,0.8);font-size:0.9rem">Mises à jour quotidiennes</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- FILTER TABS -->
<section class="content-section" style="padding-bottom: 0;">
    <div class="container">
        <div class="filter-tabs">
            <div class="filter-tab active" data-filter="all">
                <i class="fas fa-th me-2"></i>Tout
            </div>
            <div class="filter-tab" data-filter="article">
                <i class="fas fa-newspaper me-2"></i>Articles
            </div>
            <div class="filter-tab" data-filter="video">
                <i class="fas fa-video me-2"></i>Vidéos
            </div>
        </div>
    </div>
</section>

<!-- ACTUALITÉS -->
<section class="content-section" id="actualites" style="padding-top: 30px;">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title" style="display:inline-block">Dernières Actualités</h2>
            <p class="section-sub">Découvrez les événements et nouvelles qui façonnent le monde culturel congolais</p>
        </div>

        <div class="row g-4" id="articles-container">
            <!-- Les articles seront injectés ici par JavaScript -->
        </div>

        <!-- Pagination -->
        <div class="pagination-container" id="articles-pagination">
            <!-- La pagination sera injectée ici par JavaScript -->
        </div>
    </div>
</section>

<!-- VIDÉOS -->
<section class="content-section" id="videos" style="background: linear-gradient(180deg, transparent, rgba(23,102,209,0.02), transparent);">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title" style="display:inline-block">Vidéos & Reportages</h2>
            <p class="section-sub">Plongez dans l'univers artistique congolais à travers nos vidéos exclusives</p>
        </div>

        <div class="row g-4" id="videos-container">
            <!-- Les vidéos seront injectées ici par JavaScript -->
        </div>

        <!-- Pagination -->
        <div class="pagination-container" id="videos-pagination">
            <!-- La pagination sera injectée ici par JavaScript -->
        </div>
    </div>
</section>

<!-- MODAL -->
<div id="contentModal" class="modal">
    <div class="modal-content">
        <span class="modal-close">&times;</span>
        <div id="modal-inner-content">
            <!-- Le contenu sera injecté ici par JavaScript -->
        </div>
    </div>
</div>

<!-- FOOTER -->
<div class="footer">
    <div class="footer-inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="footer-widget-logo">
                        <a href="/"><img src="img/logo-transparant.png" alt="FASAEC Logo"></a>
                    </div>
                    <div class="footer-widget-text">
                        <p>FASAEC : Pont Numérique de la Culture & du Social</p>
                    </div>
                    <div class="footer-widget-socials">
                        <a href="https://www.facebook.com/share/17noYupcVM/" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                        <a href="https://www.instagram.com/fasaec_officiel?igsh=MWo0d21ubnhsb254bA==" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/company/fonds-d%E2%80%99assistance-sociale-aux-artistes-et-%C3%A9crivains-congolais-fasaec/" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                        <a href="https://x.com/fasaecofficiel" target="_blank"><i class="fa-brands fa-x-twitter"></i></a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="footer-widget">
                        <div class="footer-widget-explore">
                            <h4 class="footer-widget-title">Explorer</h4>
                            <ul class="list-unstyled">
                                <li><a href="/le-fasaec">LE FASAEC</a></li>
                                <li><a href="/droits-protection-sociale" style="white-space: nowrap;">DROITS & PROTECTION SOCIALE</a></li>
                                <li><a href="/artistes-numerique-ia">ARTISTES & NUMÉRIQUE / IA</a></li>
                                <li><a href="/aides-accompagnement">AIDES & ACCOMPAGNEMENT</a></li>
                                <li><a href="/actualites">ACTUALITÉS & RESSOURCES</a></li>
                                <li><a href="/contact">CONTACT & ORIENTATION</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="footer-widget">
                        <div class="footer-widget-department">
                            <h4 class="footer-widget-title">Organismes</h4>
                            <ul class="list-unstyled">
                                <li><a href="https://culture.gouv.cd/" target="_blank">LE MINISTERE DE LA CULTURE, ARTS & PATRIMOINE</a></li>
                                <li><a href="https://enregistrement.capcongo.online/" target="_blank">PLATEFORME D'ENREGISTREMENT D'ARTISTES</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="footer-widget">
                        <div class="footer-widget-contact">
                            <h4 class="footer-widget-title">Contact</h4>
                            <p style="text-align:left">124 avenue Mbomu Quartier : Gbaka Commune : Kinshasa Ville Kinshasa République Démocratique du Congo</p>
                        </div>
                        <div class="footer-widget-contact-list">
                            <i class="fa-solid fa-envelope"></i>
                            <div class="footer-widget-contact-item">
                                <a href="mailto:info@fasaec.cd">info@fasaec.cd</a>
                            </div>
                        </div>
                        <div class="footer-widget-contact-list">
                            <i class="fa-solid fa-phone"></i>
                            <div class="footer-widget-contact-item">
                                <a href="tel:+243830681299">+243830681299</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-footer">
        <div class="conatiner">
            <p>© FASAEC – Tous droits réservés</p>
        </div>
    </div>
</div>

<!-- MOBILE NAV -->
<div class="mobile-nav-wrapper">
    <div class="mobile-nav-overlay mobile-nav-toggler"></div>
    <div class="mobile-nav-content">
        <a href="#" class="mobile-nav-close mobile-nav-toggler">
            <span></span>
            <span></span>
        </a>
        <div class="logo-box">
            <a href="/"><img src="img/logo-transparant.png" width="160" alt="FASAEC"></a>
        </div>
        <div class="mobile-nav-container"></div>
        <ul class="mobile-nav-contact list-unstyled">
            <li>
                <i class="fa-solid fa-phone"></i>
                <a href="tel:+243830681299">+243830681299</a>
            </li>
            <li>
                <i class="fa-solid fa-envelope"></i>
                <a href="mailto:info@fasaec.cd">info@fasaec.cd</a>
            </li>
            <li>
                <i class="fa-solid fa-map-marker-alt"></i>
                124 avenue Mbomu, Quartier Gbaka, Commune Kinshasa, Ville Kinshasa, République Démocratique du Congo
            </li>
        </ul>
        <ul class="mobile-nav-social list-unstyled">
            <li><a href="https://www.facebook.com/share/17noYupcVM/" target="_blank"><i class="fa-brands fa-facebook"></i></a></li>
            <li><a href="https://www.linkedin.com/company/fonds-d%E2%80%99assistance-sociale-aux-artistes-et-%C3%A9crivains-congolais-fasaec/" target="_blank"><i class="fa-brands fa-linkedin"></i></a></li>
            <li><a href="https://x.com/fasaecofficiel" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></li>
            <li><a href="https://www.instagram.com/fasaec_officiel?igsh=MWo0d21ubnhsb254bA==" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
        </ul>
    </div>
</div>

<!-- Scroll To Top Button -->
<button class="scroll-to-top" id="scrollToTopBtn">
    <i class="fa-solid fa-arrow-up"></i>
</button>

<!-- Social Floating Buttons -->
<div class="social-floating" id="socialFloating">
    <a href="https://www.facebook.com/share/17noYupcVM/" target="_blank" class="social-btn facebook">
        <i class="fa-brands fa-facebook-f"></i>
    </a>
    <a href="https://www.instagram.com/fasaec_officiel?igsh=MWo0d21ubnhsb254bA==" target="_blank" class="social-btn instagram">
        <i class="fa-brands fa-instagram"></i>
    </a>
    <a href="https://www.linkedin.com/company/fonds-d%E2%80%99assistance-sociale-aux-artistes-et-%C3%A9crivains-congolais-fasaec/" target="_blank" class="social-btn linkedin">
        <i class="fa-brands fa-linkedin-in"></i>
    </a>
    <a href="https://x.com/fasaecofficiel" target="_blank" class="social-btn x">
       <i class="fa-brands fa-x-twitter"></i>
    </a>
</div>


<script>
    // ========================================
// DONNÉES
// ========================================
const articles = [
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1763075/pexels-photo-1763075.jpeg',
            'https://images.pexels.com/photos/1864637/pexels-photo-1864637.jpeg',
            'https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg'
        ],
        badge: 'Événement',
        date: '15 Fév 2026',
        title: 'Grande soirée culturelle à Kinshasa',
        excerpt: 'La communauté artistique congolaise se réunit pour célébrer la richesse culturelle de notre pays. Un événement exceptionnel qui rassemble musiciens, danseurs et artistes visuels.',
        author: 'FASAEC',
        content: 'La communauté artistique congolaise se réunit pour célébrer la richesse culturelle de notre pays. Un événement exceptionnel qui rassemble musiciens, danseurs et artistes visuels.\n\nCet événement majeur, organisé par le FASAEC, mettra en lumière le talent et la créativité des artistes congolais. Au programme : concerts, expositions, performances de danse, et bien plus encore.\n\nLes participants auront également l\'opportunité de réseauter avec des professionnels de l\'industrie culturelle et de découvrir les nouvelles initiatives de soutien aux artistes.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/356043/pexels-photo-356043.jpeg'
        ],
        badge: 'Formation',
        date: '12 Fév 2026',
        title: 'Atelier de formation sur les droits d\'auteur',
        excerpt: 'Le FASAEC organise un atelier gratuit pour sensibiliser les artistes sur leurs droits et la protection de leurs œuvres.',
        author: 'FASAEC',
        content: 'Le FASAEC organise un atelier gratuit pour sensibiliser les artistes sur leurs droits et la protection de leurs œuvres.\n\nCette formation intensive couvrira tous les aspects des droits d\'auteur : comment protéger vos créations, négocier des contrats équitables, et faire valoir vos droits en cas de litige.\n\nNos experts juridiques partageront leurs connaissances et répondront à toutes vos questions. Places limitées, inscription obligatoire.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1109197/pexels-photo-1109197.jpeg',
            'https://images.pexels.com/photos/2102568/pexels-photo-2102568.jpeg'
        ],
        badge: 'Aide Sociale',
        date: '10 Fév 2026',
        title: 'Distribution d\'aides médicales aux artistes',
        excerpt: 'Le FASAEC lance une campagne de distribution d\'aides médicales pour soutenir les artistes en difficulté sanitaire.',
        author: 'FASAEC',
        content: 'Le FASAEC lance une campagne de distribution d\'aides médicales pour soutenir les artistes en difficulté sanitaire.\n\nDans le cadre de notre mission d\'assistance sociale, nous proposons une prise en charge médicale complète : consultations gratuites, fourniture de médicaments, et accompagnement dans les démarches hospitalières.\n\nTous les artistes enregistrés auprès du FASAEC peuvent bénéficier de cette aide. Contactez-nous pour plus d\'informations.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1047442/pexels-photo-1047442.jpeg'
        ],
        badge: 'Technologie',
        date: '8 Fév 2026',
        title: 'Intelligence Artificielle et Création Artistique',
        excerpt: 'Découvrez comment l\'IA transforme le paysage créatif et comment les artistes peuvent en tirer parti.',
        author: 'FASAEC',
        content: 'Découvrez comment l\'IA transforme le paysage créatif et comment les artistes peuvent en tirer parti.\n\nL\'intelligence artificielle ouvre de nouvelles possibilités pour la création artistique. De la génération d\'images à la composition musicale, les outils IA deviennent des alliés précieux pour les créateurs.\n\nCependant, cette révolution technologique soulève également des questions sur l\'authenticité, les droits d\'auteur et l\'avenir du métier d\'artiste. Le FASAEC accompagne les artistes dans cette transition numérique.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1144176/pexels-photo-1144176.jpeg',
            'https://images.pexels.com/photos/1190297/pexels-photo-1190297.jpeg',
            'https://images.pexels.com/photos/1190298/pexels-photo-1190298.jpeg'
        ],
        badge: 'Exposition',
        date: '5 Fév 2026',
        title: 'Exposition d\'art contemporain congolais',
        excerpt: 'Une exposition exceptionnelle mettant en vedette les œuvres des artistes visuels congolais les plus talentueux.',
        author: 'FASAEC',
        content: 'Une exposition exceptionnelle mettant en vedette les œuvres des artistes visuels congolais les plus talentueux.\n\nCette exposition présente plus de 50 œuvres d\'art contemporain créées par des artistes congolais de renom. Peintures, sculptures, installations... une diversité de techniques et de styles qui reflète la richesse de notre scène artistique.\n\nL\'exposition est ouverte au public du lundi au samedi de 10h à 18h. Entrée gratuite.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1370295/pexels-photo-1370295.jpeg'
        ],
        badge: 'Musique',
        date: '2 Fév 2026',
        title: 'Festival de musique urbaine de Kinshasa',
        excerpt: 'Le plus grand festival de musique urbaine de l\'année revient avec une programmation explosive.',
        author: 'FASAEC',
        content: 'Le plus grand festival de musique urbaine de l\'année revient avec une programmation explosive.\n\nRap, hip-hop, afrobeat... tous les styles de musique urbaine seront représentés lors de ce festival qui promet d\'être inoubliable. Plus de 30 artistes se produiront sur scène pendant trois jours de célébration musicale.\n\nBillets disponibles en ligne et dans les points de vente habituels.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1144176/pexels-photo-1144176.jpeg',
            'https://images.pexels.com/photos/1190297/pexels-photo-1190297.jpeg'
        ],
        badge: 'Culture',
        date: '1 Fév 2026',
        title: 'Semaine de la culture congolaise',
        excerpt: 'Une semaine entière dédiée à la promotion de la culture et des arts congolais.',
        author: 'FASAEC',
        content: 'Une semaine entière dédiée à la promotion de la culture et des arts congolais.\n\nAu programme : expositions, concerts, conférences, ateliers et bien plus encore. Un événement incontournable pour tous les passionnés de culture.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg'
        ],
        badge: 'Actualité',
        date: '29 Jan 2026',
        title: 'Nouvelles mesures de soutien aux artistes',
        excerpt: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.',
        author: 'FASAEC',
        content: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.\n\nCes nouvelles initiatives visent à améliorer les conditions de vie et de travail des artistes, à protéger leurs droits et à promouvoir leur talent.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg'
        ],
        badge: 'Actualité',
        date: '29 Jan 2026',
        title: 'Nouvelles mesures de soutien aux artistes',
        excerpt: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.',
        author: 'FASAEC',
        content: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.\n\nCes nouvelles initiatives visent à améliorer les conditions de vie et de travail des artistes, à protéger leurs droits et à promouvoir leur talent.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg'
        ],
        badge: 'Actualité',
        date: '29 Jan 2026',
        title: 'Nouvelles mesures de soutien aux artistes',
        excerpt: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.',
        author: 'FASAEC',
        content: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.\n\nCes nouvelles initiatives visent à améliorer les conditions de vie et de travail des artistes, à protéger leurs droits et à promouvoir leur talent.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg'
        ],
        badge: 'Actualité',
        date: '29 Jan 2026',
        title: 'Nouvelles mesures de soutien aux artistes',
        excerpt: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.',
        author: 'FASAEC',
        content: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.\n\nCes nouvelles initiatives visent à améliorer les conditions de vie et de travail des artistes, à protéger leurs droits et à promouvoir leur talent.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg'
        ],
        badge: 'Actualité',
        date: '29 Jan 2026',
        title: 'Nouvelles mesures de soutien aux artistes',
        excerpt: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.',
        author: 'FASAEC',
        content: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.\n\nCes nouvelles initiatives visent à améliorer les conditions de vie et de travail des artistes, à protéger leurs droits et à promouvoir leur talent.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg'
        ],
        badge: 'Actualité',
        date: '29 Jan 2026',
        title: 'Nouvelles mesures de soutien aux artistes',
        excerpt: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.',
        author: 'FASAEC',
        content: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.\n\nCes nouvelles initiatives visent à améliorer les conditions de vie et de travail des artistes, à protéger leurs droits et à promouvoir leur talent.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg'
        ],
        badge: 'Actualité',
        date: '29 Jan 2026',
        title: 'Nouvelles mesures de soutien aux artistes',
        excerpt: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.',
        author: 'FASAEC',
        content: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.\n\nCes nouvelles initiatives visent à améliorer les conditions de vie et de travail des artistes, à protéger leurs droits et à promouvoir leur talent.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg'
        ],
        badge: 'Actualité',
        date: '29 Jan 2026',
        title: 'Nouvelles mesures de soutien aux artistes',
        excerpt: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.',
        author: 'FASAEC',
        content: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.\n\nCes nouvelles initiatives visent à améliorer les conditions de vie et de travail des artistes, à protéger leurs droits et à promouvoir leur talent.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg'
        ],
        badge: 'Actualité',
        date: '29 Jan 2026',
        title: 'Nouvelles mesures de soutien aux artistes',
        excerpt: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.',
        author: 'FASAEC',
        content: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.\n\nCes nouvelles initiatives visent à améliorer les conditions de vie et de travail des artistes, à protéger leurs droits et à promouvoir leur talent.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg'
        ],
        badge: 'Actualité',
        date: '29 Jan 2026',
        title: 'Nouvelles mesures de soutien aux artistes',
        excerpt: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.',
        author: 'FASAEC',
        content: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.\n\nCes nouvelles initiatives visent à améliorer les conditions de vie et de travail des artistes, à protéger leurs droits et à promouvoir leur talent.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg'
        ],
        badge: 'Actualité',
        date: '29 Jan 2026',
        title: 'Nouvelles mesures de soutien aux artistes',
        excerpt: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.',
        author: 'FASAEC',
        content: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.\n\nCes nouvelles initiatives visent à améliorer les conditions de vie et de travail des artistes, à protéger leurs droits et à promouvoir leur talent.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg'
        ],
        badge: 'Actualité',
        date: '29 Jan 2026',
        title: 'Nouvelles mesures de soutien aux artistes',
        excerpt: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.',
        author: 'FASAEC',
        content: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.\n\nCes nouvelles initiatives visent à améliorer les conditions de vie et de travail des artistes, à protéger leurs droits et à promouvoir leur talent.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg'
        ],
        badge: 'Actualité',
        date: '29 Jan 2026',
        title: 'Nouvelles mesures de soutien aux artistes',
        excerpt: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.',
        author: 'FASAEC',
        content: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.\n\nCes nouvelles initiatives visent à améliorer les conditions de vie et de travail des artistes, à protéger leurs droits et à promouvoir leur talent.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg'
        ],
        badge: 'Actualité',
        date: '29 Jan 2026',
        title: 'Nouvelles mesures de soutien aux artistes',
        excerpt: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.',
        author: 'FASAEC',
        content: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.\n\nCes nouvelles initiatives visent à améliorer les conditions de vie et de travail des artistes, à protéger leurs droits et à promouvoir leur talent.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg'
        ],
        badge: 'Actualité',
        date: '29 Jan 2026',
        title: 'Nouvelles mesures de soutien aux artistes',
        excerpt: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.',
        author: 'FASAEC',
        content: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.\n\nCes nouvelles initiatives visent à améliorer les conditions de vie et de travail des artistes, à protéger leurs droits et à promouvoir leur talent.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg'
        ],
        badge: 'Actualité',
        date: '29 Jan 2026',
        title: 'Nouvelles mesures de soutien aux artistes',
        excerpt: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.',
        author: 'FASAEC',
        content: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.\n\nCes nouvelles initiatives visent à améliorer les conditions de vie et de travail des artistes, à protéger leurs droits et à promouvoir leur talent.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg'
        ],
        badge: 'Actualité',
        date: '29 Jan 2026',
        title: 'Nouvelles mesures de soutien aux artistes',
        excerpt: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.',
        author: 'FASAEC',
        content: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.\n\nCes nouvelles initiatives visent à améliorer les conditions de vie et de travail des artistes, à protéger leurs droits et à promouvoir leur talent.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg'
        ],
        badge: 'Actualité',
        date: '29 Jan 2026',
        title: 'Nouvelles mesures de soutien aux artistes',
        excerpt: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.',
        author: 'FASAEC',
        content: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.\n\nCes nouvelles initiatives visent à améliorer les conditions de vie et de travail des artistes, à protéger leurs droits et à promouvoir leur talent.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg'
        ],
        badge: 'Actualité',
        date: '29 Jan 2026',
        title: 'Nouvelles mesures de soutien aux artistes',
        excerpt: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.',
        author: 'FASAEC',
        content: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.\n\nCes nouvelles initiatives visent à améliorer les conditions de vie et de travail des artistes, à protéger leurs droits et à promouvoir leur talent.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg'
        ],
        badge: 'Actualité',
        date: '29 Jan 2026',
        title: 'Nouvelles mesures de soutien aux artistes',
        excerpt: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.',
        author: 'FASAEC',
        content: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.\n\nCes nouvelles initiatives visent à améliorer les conditions de vie et de travail des artistes, à protéger leurs droits et à promouvoir leur talent.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg'
        ],
        badge: 'Actualité',
        date: '29 Jan 2026',
        title: 'Nouvelles mesures de soutien aux artistes',
        excerpt: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.',
        author: 'FASAEC',
        content: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.\n\nCes nouvelles initiatives visent à améliorer les conditions de vie et de travail des artistes, à protéger leurs droits et à promouvoir leur talent.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg'
        ],
        badge: 'Actualité',
        date: '29 Jan 2026',
        title: 'Nouvelles mesures de soutien aux artistes',
        excerpt: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.',
        author: 'FASAEC',
        content: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.\n\nCes nouvelles initiatives visent à améliorer les conditions de vie et de travail des artistes, à protéger leurs droits et à promouvoir leur talent.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg'
        ],
        badge: 'Actualité',
        date: '29 Jan 2026',
        title: 'Nouvelles mesures de soutien aux artistes',
        excerpt: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.',
        author: 'FASAEC',
        content: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.\n\nCes nouvelles initiatives visent à améliorer les conditions de vie et de travail des artistes, à protéger leurs droits et à promouvoir leur talent.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg'
        ],
        badge: 'Actualité',
        date: '29 Jan 2026',
        title: 'Nouvelles mesures de soutien aux artistes',
        excerpt: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.',
        author: 'FASAEC',
        content: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.\n\nCes nouvelles initiatives visent à améliorer les conditions de vie et de travail des artistes, à protéger leurs droits et à promouvoir leur talent.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg'
        ],
        badge: 'Actualité',
        date: '29 Jan 2026',
        title: 'Nouvelles mesures de soutien aux artistes',
        excerpt: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.',
        author: 'FASAEC',
        content: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.\n\nCes nouvelles initiatives visent à améliorer les conditions de vie et de travail des artistes, à protéger leurs droits et à promouvoir leur talent.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg'
        ],
        badge: 'Actualité',
        date: '29 Jan 2026',
        title: 'Nouvelles mesures de soutien aux artistes',
        excerpt: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.',
        author: 'FASAEC',
        content: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.\n\nCes nouvelles initiatives visent à améliorer les conditions de vie et de travail des artistes, à protéger leurs droits et à promouvoir leur talent.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg'
        ],
        badge: 'Actualité',
        date: '29 Jan 2026',
        title: 'Nouvelles mesures de soutien aux artistes',
        excerpt: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.',
        author: 'FASAEC',
        content: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.\n\nCes nouvelles initiatives visent à améliorer les conditions de vie et de travail des artistes, à protéger leurs droits et à promouvoir leur talent.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg'
        ],
        badge: 'Actualité',
        date: '29 Jan 2026',
        title: 'Nouvelles mesures de soutien aux artistes',
        excerpt: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.',
        author: 'FASAEC',
        content: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.\n\nCes nouvelles initiatives visent à améliorer les conditions de vie et de travail des artistes, à protéger leurs droits et à promouvoir leur talent.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg'
        ],
        badge: 'Actualité',
        date: '29 Jan 2026',
        title: 'Nouvelles mesures de soutien aux artistes',
        excerpt: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.',
        author: 'FASAEC',
        content: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.\n\nCes nouvelles initiatives visent à améliorer les conditions de vie et de travail des artistes, à protéger leurs droits et à promouvoir leur talent.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg'
        ],
        badge: 'Actualité',
        date: '29 Jan 2026',
        title: 'Nouvelles mesures de soutien aux artistes',
        excerpt: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.',
        author: 'FASAEC',
        content: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.\n\nCes nouvelles initiatives visent à améliorer les conditions de vie et de travail des artistes, à protéger leurs droits et à promouvoir leur talent.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg'
        ],
        badge: 'Actualité',
        date: '29 Jan 2026',
        title: 'Nouvelles mesures de soutien aux artistes',
        excerpt: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.',
        author: 'FASAEC',
        content: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.\n\nCes nouvelles initiatives visent à améliorer les conditions de vie et de travail des artistes, à protéger leurs droits et à promouvoir leur talent.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg'
        ],
        badge: 'Actualité',
        date: '29 Jan 2026',
        title: 'Nouvelles mesures de soutien aux artistes',
        excerpt: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.',
        author: 'FASAEC',
        content: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.\n\nCes nouvelles initiatives visent à améliorer les conditions de vie et de travail des artistes, à protéger leurs droits et à promouvoir leur talent.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg'
        ],
        badge: 'Actualité',
        date: '29 Jan 2026',
        title: 'Nouvelles mesures de soutien aux artistes',
        excerpt: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.',
        author: 'FASAEC',
        content: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.\n\nCes nouvelles initiatives visent à améliorer les conditions de vie et de travail des artistes, à protéger leurs droits et à promouvoir leur talent.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg'
        ],
        badge: 'Actualité',
        date: '29 Jan 2026',
        title: 'Nouvelles mesures de soutien aux artistes',
        excerpt: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.',
        author: 'FASAEC',
        content: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.\n\nCes nouvelles initiatives visent à améliorer les conditions de vie et de travail des artistes, à protéger leurs droits et à promouvoir leur talent.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg'
        ],
        badge: 'Actualité',
        date: '29 Jan 2026',
        title: 'Nouvelles mesures de soutien aux artistes',
        excerpt: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.',
        author: 'FASAEC',
        content: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.\n\nCes nouvelles initiatives visent à améliorer les conditions de vie et de travail des artistes, à protéger leurs droits et à promouvoir leur talent.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg'
        ],
        badge: 'Actualité',
        date: '29 Jan 2026',
        title: 'Nouvelles mesures de soutien aux artistes',
        excerpt: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.',
        author: 'FASAEC',
        content: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.\n\nCes nouvelles initiatives visent à améliorer les conditions de vie et de travail des artistes, à protéger leurs droits et à promouvoir leur talent.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg'
        ],
        badge: 'Actualité',
        date: '29 Jan 2026',
        title: 'Nouvelles mesures de soutien aux artistes',
        excerpt: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.',
        author: 'FASAEC',
        content: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.\n\nCes nouvelles initiatives visent à améliorer les conditions de vie et de travail des artistes, à protéger leurs droits et à promouvoir leur talent.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg'
        ],
        badge: 'Actualité',
        date: '29 Jan 2026',
        title: 'Nouvelles mesures de soutien aux artistes',
        excerpt: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.',
        author: 'FASAEC',
        content: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.\n\nCes nouvelles initiatives visent à améliorer les conditions de vie et de travail des artistes, à protéger leurs droits et à promouvoir leur talent.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg'
        ],
        badge: 'Actualité',
        date: '29 Jan 2026',
        title: 'Nouvelles mesures de soutien aux artistes',
        excerpt: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.',
        author: 'FASAEC',
        content: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.\n\nCes nouvelles initiatives visent à améliorer les conditions de vie et de travail des artistes, à protéger leurs droits et à promouvoir leur talent.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg'
        ],
        badge: 'Actualité',
        date: '29 Jan 2026',
        title: 'Nouvelles mesures de soutien aux artistes',
        excerpt: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.',
        author: 'FASAEC',
        content: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.\n\nCes nouvelles initiatives visent à améliorer les conditions de vie et de travail des artistes, à protéger leurs droits et à promouvoir leur talent.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg'
        ],
        badge: 'Actualité',
        date: '29 Jan 2026',
        title: 'Nouvelles mesures de soutien aux artistes',
        excerpt: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.',
        author: 'FASAEC',
        content: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.\n\nCes nouvelles initiatives visent à améliorer les conditions de vie et de travail des artistes, à protéger leurs droits et à promouvoir leur talent.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg'
        ],
        badge: 'Actualité',
        date: '29 Jan 2026',
        title: 'Nouvelles mesures de soutien aux artistes',
        excerpt: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.',
        author: 'FASAEC',
        content: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.\n\nCes nouvelles initiatives visent à améliorer les conditions de vie et de travail des artistes, à protéger leurs droits et à promouvoir leur talent.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg'
        ],
        badge: 'Actualité',
        date: '29 Jan 2026',
        title: 'Nouvelles mesures de soutien aux artistes',
        excerpt: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.',
        author: 'FASAEC',
        content: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.\n\nCes nouvelles initiatives visent à améliorer les conditions de vie et de travail des artistes, à protéger leurs droits et à promouvoir leur talent.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg'
        ],
        badge: 'Actualité',
        date: '29 Jan 2026',
        title: 'Nouvelles mesures de soutien aux artistes',
        excerpt: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.',
        author: 'FASAEC',
        content: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.\n\nCes nouvelles initiatives visent à améliorer les conditions de vie et de travail des artistes, à protéger leurs droits et à promouvoir leur talent.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg'
        ],
        badge: 'Actualité',
        date: '29 Jan 2026',
        title: 'Nouvelles mesures de soutien aux artistes',
        excerpt: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.',
        author: 'FASAEC',
        content: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.\n\nCes nouvelles initiatives visent à améliorer les conditions de vie et de travail des artistes, à protéger leurs droits et à promouvoir leur talent.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg'
        ],
        badge: 'Actualité',
        date: '29 Jan 2026',
        title: 'Nouvelles mesures de soutien aux artistes',
        excerpt: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.',
        author: 'FASAEC',
        content: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.\n\nCes nouvelles initiatives visent à améliorer les conditions de vie et de travail des artistes, à protéger leurs droits et à promouvoir leur talent.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg'
        ],
        badge: 'Actualité',
        date: '29 Jan 2026',
        title: 'Nouvelles mesures de soutien aux artistes',
        excerpt: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.',
        author: 'FASAEC',
        content: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.\n\nCes nouvelles initiatives visent à améliorer les conditions de vie et de travail des artistes, à protéger leurs droits et à promouvoir leur talent.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg'
        ],
        badge: 'Actualité',
        date: '29 Jan 2026',
        title: 'Nouvelles mesures de soutien aux artistes',
        excerpt: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.',
        author: 'FASAEC',
        content: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.\n\nCes nouvelles initiatives visent à améliorer les conditions de vie et de travail des artistes, à protéger leurs droits et à promouvoir leur talent.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg'
        ],
        badge: 'Actualité',
        date: '29 Jan 2026',
        title: 'Nouvelles mesures de soutien aux artistes',
        excerpt: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.',
        author: 'FASAEC',
        content: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.\n\nCes nouvelles initiatives visent à améliorer les conditions de vie et de travail des artistes, à protéger leurs droits et à promouvoir leur talent.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg'
        ],
        badge: 'Actualité',
        date: '29 Jan 2026',
        title: 'Nouvelles mesures de soutien aux artistes',
        excerpt: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.',
        author: 'FASAEC',
        content: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.\n\nCes nouvelles initiatives visent à améliorer les conditions de vie et de travail des artistes, à protéger leurs droits et à promouvoir leur talent.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg'
        ],
        badge: 'Actualité',
        date: '29 Jan 2026',
        title: 'Nouvelles mesures de soutien aux artistes',
        excerpt: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.',
        author: 'FASAEC',
        content: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.\n\nCes nouvelles initiatives visent à améliorer les conditions de vie et de travail des artistes, à protéger leurs droits et à promouvoir leur talent.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg'
        ],
        badge: 'Actualité',
        date: '29 Jan 2026',
        title: 'Nouvelles mesures de soutien aux artistes',
        excerpt: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.',
        author: 'FASAEC',
        content: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.\n\nCes nouvelles initiatives visent à améliorer les conditions de vie et de travail des artistes, à protéger leurs droits et à promouvoir leur talent.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg'
        ],
        badge: 'Actualité',
        date: '29 Jan 2026',
        title: 'Nouvelles mesures de soutien aux artistes',
        excerpt: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.',
        author: 'FASAEC',
        content: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.\n\nCes nouvelles initiatives visent à améliorer les conditions de vie et de travail des artistes, à protéger leurs droits et à promouvoir leur talent.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg'
        ],
        badge: 'Actualité',
        date: '29 Jan 2026',
        title: 'Nouvelles mesures de soutien aux artistes',
        excerpt: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.',
        author: 'FASAEC',
        content: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.\n\nCes nouvelles initiatives visent à améliorer les conditions de vie et de travail des artistes, à protéger leurs droits et à promouvoir leur talent.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg'
        ],
        badge: 'Actualité',
        date: '29 Jan 2026',
        title: 'Nouvelles mesures de soutien aux artistes',
        excerpt: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.',
        author: 'FASAEC',
        content: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.\n\nCes nouvelles initiatives visent à améliorer les conditions de vie et de travail des artistes, à protéger leurs droits et à promouvoir leur talent.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg'
        ],
        badge: 'Actualité',
        date: '29 Jan 2026',
        title: 'Nouvelles mesures de soutien aux artistes',
        excerpt: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.',
        author: 'FASAEC',
        content: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.\n\nCes nouvelles initiatives visent à améliorer les conditions de vie et de travail des artistes, à protéger leurs droits et à promouvoir leur talent.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg'
        ],
        badge: 'Actualité',
        date: '29 Jan 2026',
        title: 'Nouvelles mesures de soutien aux artistes',
        excerpt: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.',
        author: 'FASAEC',
        content: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.\n\nCes nouvelles initiatives visent à améliorer les conditions de vie et de travail des artistes, à protéger leurs droits et à promouvoir leur talent.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg'
        ],
        badge: 'Actualité',
        date: '29 Jan 2026',
        title: 'Nouvelles mesures de soutien aux artistes',
        excerpt: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.',
        author: 'FASAEC',
        content: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.\n\nCes nouvelles initiatives visent à améliorer les conditions de vie et de travail des artistes, à protéger leurs droits et à promouvoir leur talent.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg'
        ],
        badge: 'Actualité',
        date: '29 Jan 2026',
        title: 'Nouvelles mesures de soutien aux artistes',
        excerpt: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.',
        author: 'FASAEC',
        content: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.\n\nCes nouvelles initiatives visent à améliorer les conditions de vie et de travail des artistes, à protéger leurs droits et à promouvoir leur talent.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg'
        ],
        badge: 'Actualité',
        date: '29 Jan 2026',
        title: 'Nouvelles mesures de soutien aux artistes',
        excerpt: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.',
        author: 'FASAEC',
        content: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.\n\nCes nouvelles initiatives visent à améliorer les conditions de vie et de travail des artistes, à protéger leurs droits et à promouvoir leur talent.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg'
        ],
        badge: 'Actualité',
        date: '29 Jan 2026',
        title: 'Nouvelles mesures de soutien aux artistes',
        excerpt: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.',
        author: 'FASAEC',
        content: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.\n\nCes nouvelles initiatives visent à améliorer les conditions de vie et de travail des artistes, à protéger leurs droits et à promouvoir leur talent.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg'
        ],
        badge: 'Actualité',
        date: '29 Jan 2026',
        title: 'Nouvelles mesures de soutien aux artistes',
        excerpt: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.',
        author: 'FASAEC',
        content: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.\n\nCes nouvelles initiatives visent à améliorer les conditions de vie et de travail des artistes, à protéger leurs droits et à promouvoir leur talent.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg'
        ],
        badge: 'Actualité',
        date: '29 Jan 2026',
        title: 'Nouvelles mesures de soutien aux artistes',
        excerpt: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.',
        author: 'FASAEC',
        content: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.\n\nCes nouvelles initiatives visent à améliorer les conditions de vie et de travail des artistes, à protéger leurs droits et à promouvoir leur talent.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg'
        ],
        badge: 'Actualité',
        date: '29 Jan 2026',
        title: 'Nouvelles mesures de soutien aux artistes',
        excerpt: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.',
        author: 'FASAEC',
        content: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.\n\nCes nouvelles initiatives visent à améliorer les conditions de vie et de travail des artistes, à protéger leurs droits et à promouvoir leur talent.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg'
        ],
        badge: 'Actualité',
        date: '29 Jan 2026',
        title: 'Nouvelles mesures de soutien aux artistes',
        excerpt: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.',
        author: 'FASAEC',
        content: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.\n\nCes nouvelles initiatives visent à améliorer les conditions de vie et de travail des artistes, à protéger leurs droits et à promouvoir leur talent.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg'
        ],
        badge: 'Actualité',
        date: '29 Jan 2026',
        title: 'Nouvelles mesures de soutien aux artistes',
        excerpt: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.',
        author: 'FASAEC',
        content: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.\n\nCes nouvelles initiatives visent à améliorer les conditions de vie et de travail des artistes, à protéger leurs droits et à promouvoir leur talent.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg'
        ],
        badge: 'Actualité',
        date: '29 Jan 2026',
        title: 'Nouvelles mesures de soutien aux artistes',
        excerpt: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.',
        author: 'FASAEC',
        content: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.\n\nCes nouvelles initiatives visent à améliorer les conditions de vie et de travail des artistes, à protéger leurs droits et à promouvoir leur talent.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg'
        ],
        badge: 'Actualité',
        date: '29 Jan 2026',
        title: 'Nouvelles mesures de soutien aux artistes',
        excerpt: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.',
        author: 'FASAEC',
        content: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.\n\nCes nouvelles initiatives visent à améliorer les conditions de vie et de travail des artistes, à protéger leurs droits et à promouvoir leur talent.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg'
        ],
        badge: 'Actualité',
        date: '29 Jan 2026',
        title: 'Nouvelles mesures de soutien aux artistes',
        excerpt: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.',
        author: 'FASAEC',
        content: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.\n\nCes nouvelles initiatives visent à améliorer les conditions de vie et de travail des artistes, à protéger leurs droits et à promouvoir leur talent.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg'
        ],
        badge: 'Actualité',
        date: '29 Jan 2026',
        title: 'Nouvelles mesures de soutien aux artistes',
        excerpt: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.',
        author: 'FASAEC',
        content: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.\n\nCes nouvelles initiatives visent à améliorer les conditions de vie et de travail des artistes, à protéger leurs droits et à promouvoir leur talent.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg'
        ],
        badge: 'Actualité',
        date: '29 Jan 2026',
        title: 'Nouvelles mesures de soutien aux artistes',
        excerpt: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.',
        author: 'FASAEC',
        content: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.\n\nCes nouvelles initiatives visent à améliorer les conditions de vie et de travail des artistes, à protéger leurs droits et à promouvoir leur talent.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg'
        ],
        badge: 'Actualité',
        date: '29 Jan 2026',
        title: 'Nouvelles mesures de soutien aux artistes',
        excerpt: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.',
        author: 'FASAEC',
        content: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.\n\nCes nouvelles initiatives visent à améliorer les conditions de vie et de travail des artistes, à protéger leurs droits et à promouvoir leur talent.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg'
        ],
        badge: 'Actualité',
        date: '29 Jan 2026',
        title: 'Nouvelles mesures de soutien aux artistes',
        excerpt: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.',
        author: 'FASAEC',
        content: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.\n\nCes nouvelles initiatives visent à améliorer les conditions de vie et de travail des artistes, à protéger leurs droits et à promouvoir leur talent.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg'
        ],
        badge: 'Actualité',
        date: '29 Jan 2026',
        title: 'Nouvelles mesures de soutien aux artistes',
        excerpt: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.',
        author: 'FASAEC',
        content: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.\n\nCes nouvelles initiatives visent à améliorer les conditions de vie et de travail des artistes, à protéger leurs droits et à promouvoir leur talent.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg'
        ],
        badge: 'Actualité',
        date: '29 Jan 2026',
        title: 'Nouvelles mesures de soutien aux artistes',
        excerpt: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.',
        author: 'FASAEC',
        content: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.\n\nCes nouvelles initiatives visent à améliorer les conditions de vie et de travail des artistes, à protéger leurs droits et à promouvoir leur talent.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg'
        ],
        badge: 'Actualité',
        date: '29 Jan 2026',
        title: 'Nouvelles mesures de soutien aux artistes',
        excerpt: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.',
        author: 'FASAEC',
        content: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.\n\nCes nouvelles initiatives visent à améliorer les conditions de vie et de travail des artistes, à protéger leurs droits et à promouvoir leur talent.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg'
        ],
        badge: 'Actualité',
        date: '29 Jan 2026',
        title: 'Nouvelles mesures de soutien aux artistes',
        excerpt: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.',
        author: 'FASAEC',
        content: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.\n\nCes nouvelles initiatives visent à améliorer les conditions de vie et de travail des artistes, à protéger leurs droits et à promouvoir leur talent.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg'
        ],
        badge: 'Actualité',
        date: '29 Jan 2026',
        title: 'Nouvelles mesures de soutien aux artistes',
        excerpt: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.',
        author: 'FASAEC',
        content: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.\n\nCes nouvelles initiatives visent à améliorer les conditions de vie et de travail des artistes, à protéger leurs droits et à promouvoir leur talent.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg'
        ],
        badge: 'Actualité',
        date: '29 Jan 2026',
        title: 'Nouvelles mesures de soutien aux artistes',
        excerpt: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.',
        author: 'FASAEC',
        content: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.\n\nCes nouvelles initiatives visent à améliorer les conditions de vie et de travail des artistes, à protéger leurs droits et à promouvoir leur talent.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg'
        ],
        badge: 'Actualité',
        date: '29 Jan 2026',
        title: 'Nouvelles mesures de soutien aux artistes',
        excerpt: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.',
        author: 'FASAEC',
        content: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.\n\nCes nouvelles initiatives visent à améliorer les conditions de vie et de travail des artistes, à protéger leurs droits et à promouvoir leur talent.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg'
        ],
        badge: 'Actualité',
        date: '29 Jan 2026',
        title: 'Nouvelles mesures de soutien aux artistes',
        excerpt: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.',
        author: 'FASAEC',
        content: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.\n\nCes nouvelles initiatives visent à améliorer les conditions de vie et de travail des artistes, à protéger leurs droits et à promouvoir leur talent.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg'
        ],
        badge: 'Actualité',
        date: '29 Jan 2026',
        title: 'Nouvelles mesures de soutien aux artistes',
        excerpt: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.',
        author: 'FASAEC',
        content: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.\n\nCes nouvelles initiatives visent à améliorer les conditions de vie et de travail des artistes, à protéger leurs droits et à promouvoir leur talent.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg'
        ],
        badge: 'Actualité',
        date: '29 Jan 2026',
        title: 'Nouvelles mesures de soutien aux artistes',
        excerpt: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.',
        author: 'FASAEC',
        content: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.\n\nCes nouvelles initiatives visent à améliorer les conditions de vie et de travail des artistes, à protéger leurs droits et à promouvoir leur talent.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg'
        ],
        badge: 'Actualité',
        date: '29 Jan 2026',
        title: 'Nouvelles mesures de soutien aux artistes',
        excerpt: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.',
        author: 'FASAEC',
        content: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.\n\nCes nouvelles initiatives visent à améliorer les conditions de vie et de travail des artistes, à protéger leurs droits et à promouvoir leur talent.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg'
        ],
        badge: 'Actualité',
        date: '29 Jan 2026',
        title: 'Nouvelles mesures de soutien aux artistes',
        excerpt: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.',
        author: 'FASAEC',
        content: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.\n\nCes nouvelles initiatives visent à améliorer les conditions de vie et de travail des artistes, à protéger leurs droits et à promouvoir leur talent.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg'
        ],
        badge: 'Actualité',
        date: '29 Jan 2026',
        title: 'Nouvelles mesures de soutien aux artistes',
        excerpt: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.',
        author: 'FASAEC',
        content: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.\n\nCes nouvelles initiatives visent à améliorer les conditions de vie et de travail des artistes, à protéger leurs droits et à promouvoir leur talent.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg'
        ],
        badge: 'Actualité',
        date: '29 Jan 2026',
        title: 'Nouvelles mesures de soutien aux artistes',
        excerpt: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.',
        author: 'FASAEC',
        content: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.\n\nCes nouvelles initiatives visent à améliorer les conditions de vie et de travail des artistes, à protéger leurs droits et à promouvoir leur talent.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg'
        ],
        badge: 'Actualité',
        date: '29 Jan 2026',
        title: 'Nouvelles mesures de soutien aux artistes',
        excerpt: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.',
        author: 'FASAEC',
        content: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.\n\nCes nouvelles initiatives visent à améliorer les conditions de vie et de travail des artistes, à protéger leurs droits et à promouvoir leur talent.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg'
        ],
        badge: 'Actualité',
        date: '29 Jan 2026',
        title: 'Nouvelles mesures de soutien aux artistes',
        excerpt: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.',
        author: 'FASAEC',
        content: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.\n\nCes nouvelles initiatives visent à améliorer les conditions de vie et de travail des artistes, à protéger leurs droits et à promouvoir leur talent.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg'
        ],
        badge: 'Actualité',
        date: '29 Jan 2026',
        title: 'Nouvelles mesures de soutien aux artistes',
        excerpt: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.',
        author: 'FASAEC',
        content: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.\n\nCes nouvelles initiatives visent à améliorer les conditions de vie et de travail des artistes, à protéger leurs droits et à promouvoir leur talent.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg'
        ],
        badge: 'Actualité',
        date: '29 Jan 2026',
        title: 'Nouvelles mesures de soutien aux artistes',
        excerpt: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.',
        author: 'FASAEC',
        content: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.\n\nCes nouvelles initiatives visent à améliorer les conditions de vie et de travail des artistes, à protéger leurs droits et à promouvoir leur talent.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg'
        ],
        badge: 'Actualité',
        date: '29 Jan 2026',
        title: 'Nouvelles mesures de soutien aux artistes',
        excerpt: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.',
        author: 'FASAEC',
        content: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.\n\nCes nouvelles initiatives visent à améliorer les conditions de vie et de travail des artistes, à protéger leurs droits et à promouvoir leur talent.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg'
        ],
        badge: 'Actualité',
        date: '29 Jan 2026',
        title: 'Nouvelles mesures de soutien aux artistes',
        excerpt: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.',
        author: 'FASAEC',
        content: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.\n\nCes nouvelles initiatives visent à améliorer les conditions de vie et de travail des artistes, à protéger leurs droits et à promouvoir leur talent.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg'
        ],
        badge: 'Actualité',
        date: '29 Jan 2026',
        title: 'Nouvelles mesures de soutien aux artistes',
        excerpt: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.',
        author: 'FASAEC',
        content: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.\n\nCes nouvelles initiatives visent à améliorer les conditions de vie et de travail des artistes, à protéger leurs droits et à promouvoir leur talent.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg'
        ],
        badge: 'Actualité',
        date: '29 Jan 2026',
        title: 'Nouvelles mesures de soutien aux artistes',
        excerpt: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.',
        author: 'FASAEC',
        content: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.\n\nCes nouvelles initiatives visent à améliorer les conditions de vie et de travail des artistes, à protéger leurs droits et à promouvoir leur talent.'
    },
    {
        type: 'article',
        images: [
            'https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg'
        ],
        badge: 'Actualité',
        date: '29 Jan 2026',
        title: 'Nouvelles mesures de soutien aux artistes',
        excerpt: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.',
        author: 'FASAEC',
        content: 'Le FASAEC annonce de nouvelles mesures pour soutenir les artistes congolais.\n\nCes nouvelles initiatives visent à améliorer les conditions de vie et de travail des artistes, à protéger leurs droits et à promouvoir leur talent.'
    }
];

const videos = [
    {
        type: 'video',
        thumbnail: 'https://images.pexels.com/photos/1190298/pexels-photo-1190298.jpeg',
        videoId: 'dQw4w9WgXcQ',
        duration: '12:45',
        badge: 'Interview',
        date: '14 Fév 2026',
        title: 'Interview exclusive avec les artistes congolais',
        excerpt: 'Rencontre avec les figures emblématiques de la scène artistique congolaise qui partagent leur vision et leurs défis.',
        author: 'FASAEC TV',
        content: 'Rencontre avec les figures emblématiques de la scène artistique congolaise qui partagent leur vision et leurs défis.\n\nDans cette interview exclusive, nous donnons la parole aux artistes qui façonnent la culture congolaise. Ils nous parlent de leur parcours, de leurs inspirations et des obstacles qu\'ils ont dû surmonter.\n\nUne conversation authentique et inspirante qui révèle la passion et la détermination de nos créateurs.'
    },
    {
        type: 'video',
        thumbnail: 'https://images.pexels.com/photos/1181406/pexels-photo-1181406.jpeg',
        videoId: 'dQw4w9WgXcQ',
        duration: '8:30',
        badge: 'Reportage',
        date: '11 Fév 2026',
        title: 'Reportage sur les ateliers d\'artistes à Kinshasa',
        excerpt: 'Plongez dans l\'univers créatif des ateliers d\'artistes de la capitale et découvrez leur processus de création.',
        author: 'FASAEC TV',
        content: 'Plongez dans l\'univers créatif des ateliers d\'artistes de la capitale et découvrez leur processus de création.\n\nCe reportage vous emmène dans les coulisses des ateliers d\'artistes à Kinshasa. Vous découvrirez leurs espaces de travail, leurs techniques, et les œuvres en cours de réalisation.\n\nUne immersion fascinante dans le quotidien des créateurs congolais.'
    },
    {
        type: 'video',
        thumbnail: 'https://images.pexels.com/photos/1327430/pexels-photo-1327430.jpeg',
        videoId: 'dQw4w9WgXcQ',
        duration: '15:20',
        badge: 'Tutoriel',
        date: '9 Fév 2026',
        title: 'Comment protéger ses œuvres artistiques',
        excerpt: 'Un guide pratique pour comprendre et protéger vos droits d\'auteur en République Démocratique du Congo.',
        author: 'FASAEC TV',
        content: 'Un guide pratique pour comprendre et protéger vos droits d\'auteur en République Démocratique du Congo.\n\nCe tutoriel détaillé vous explique étape par étape comment enregistrer vos œuvres, quels documents préparer, et comment faire valoir vos droits en cas de plagiat ou d\'utilisation non autorisée.\n\nUn outil indispensable pour tous les créateurs soucieux de protéger leur travail.'
    },
    {
        type: 'video',
        thumbnail: 'https://images.pexels.com/photos/1481309/pexels-photo-1481309.jpeg',
        videoId: 'dQw4w9WgXcQ',
        duration: '10:15',
        badge: 'Concert',
        date: '6 Fév 2026',
        title: 'Highlights du concert solidaire du FASAEC',
        excerpt: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.',
        author: 'FASAEC TV',
        content: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.\n\nCe concert exceptionnel a réuni les plus grandes stars de la musique congolaise pour une soirée de solidarité et de partage. Les fonds collectés ont été redistribués aux artistes dans le besoin.\n\nUne soirée mémorable qui témoigne de la force de notre communauté artistique.'
    },
    {
        type: 'video',
        thumbnail: 'https://images.pexels.com/photos/1481309/pexels-photo-1481309.jpeg',
        videoId: 'dQw4w9WgXcQ',
        duration: '10:15',
        badge: 'Concert',
        date: '6 Fév 2026',
        title: 'Highlights du concert solidaire du FASAEC',
        excerpt: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.',
        author: 'FASAEC TV',
        content: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.\n\nCe concert exceptionnel a réuni les plus grandes stars de la musique congolaise pour une soirée de solidarité et de partage. Les fonds collectés ont été redistribués aux artistes dans le besoin.\n\nUne soirée mémorable qui témoigne de la force de notre communauté artistique.'
    },
    {
        type: 'video',
        thumbnail: 'https://images.pexels.com/photos/1481309/pexels-photo-1481309.jpeg',
        videoId: 'dQw4w9WgXcQ',
        duration: '10:15',
        badge: 'Concert',
        date: '6 Fév 2026',
        title: 'Highlights du concert solidaire du FASAEC',
        excerpt: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.',
        author: 'FASAEC TV',
        content: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.\n\nCe concert exceptionnel a réuni les plus grandes stars de la musique congolaise pour une soirée de solidarité et de partage. Les fonds collectés ont été redistribués aux artistes dans le besoin.\n\nUne soirée mémorable qui témoigne de la force de notre communauté artistique.'
    },
    {
        type: 'video',
        thumbnail: 'https://images.pexels.com/photos/1481309/pexels-photo-1481309.jpeg',
        videoId: 'dQw4w9WgXcQ',
        duration: '10:15',
        badge: 'Concert',
        date: '6 Fév 2026',
        title: 'Highlights du concert solidaire du FASAEC',
        excerpt: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.',
        author: 'FASAEC TV',
        content: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.\n\nCe concert exceptionnel a réuni les plus grandes stars de la musique congolaise pour une soirée de solidarité et de partage. Les fonds collectés ont été redistribués aux artistes dans le besoin.\n\nUne soirée mémorable qui témoigne de la force de notre communauté artistique.'
    },
    {
        type: 'video',
        thumbnail: 'https://images.pexels.com/photos/1481309/pexels-photo-1481309.jpeg',
        videoId: 'dQw4w9WgXcQ',
        duration: '10:15',
        badge: 'Concert',
        date: '6 Fév 2026',
        title: 'Highlights du concert solidaire du FASAEC',
        excerpt: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.',
        author: 'FASAEC TV',
        content: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.\n\nCe concert exceptionnel a réuni les plus grandes stars de la musique congolaise pour une soirée de solidarité et de partage. Les fonds collectés ont été redistribués aux artistes dans le besoin.\n\nUne soirée mémorable qui témoigne de la force de notre communauté artistique.'
    },
    {
        type: 'video',
        thumbnail: 'https://images.pexels.com/photos/1481309/pexels-photo-1481309.jpeg',
        videoId: 'dQw4w9WgXcQ',
        duration: '10:15',
        badge: 'Concert',
        date: '6 Fév 2026',
        title: 'Highlights du concert solidaire du FASAEC',
        excerpt: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.',
        author: 'FASAEC TV',
        content: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.\n\nCe concert exceptionnel a réuni les plus grandes stars de la musique congolaise pour une soirée de solidarité et de partage. Les fonds collectés ont été redistribués aux artistes dans le besoin.\n\nUne soirée mémorable qui témoigne de la force de notre communauté artistique.'
    },
    {
        type: 'video',
        thumbnail: 'https://images.pexels.com/photos/1481309/pexels-photo-1481309.jpeg',
        videoId: 'dQw4w9WgXcQ',
        duration: '10:15',
        badge: 'Concert',
        date: '6 Fév 2026',
        title: 'Highlights du concert solidaire du FASAEC',
        excerpt: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.',
        author: 'FASAEC TV',
        content: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.\n\nCe concert exceptionnel a réuni les plus grandes stars de la musique congolaise pour une soirée de solidarité et de partage. Les fonds collectés ont été redistribués aux artistes dans le besoin.\n\nUne soirée mémorable qui témoigne de la force de notre communauté artistique.'
    },
    {
        type: 'video',
        thumbnail: 'https://images.pexels.com/photos/1481309/pexels-photo-1481309.jpeg',
        videoId: 'dQw4w9WgXcQ',
        duration: '10:15',
        badge: 'Concert',
        date: '6 Fév 2026',
        title: 'Highlights du concert solidaire du FASAEC',
        excerpt: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.',
        author: 'FASAEC TV',
        content: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.\n\nCe concert exceptionnel a réuni les plus grandes stars de la musique congolaise pour une soirée de solidarité et de partage. Les fonds collectés ont été redistribués aux artistes dans le besoin.\n\nUne soirée mémorable qui témoigne de la force de notre communauté artistique.'
    },
    {
        type: 'video',
        thumbnail: 'https://images.pexels.com/photos/1481309/pexels-photo-1481309.jpeg',
        videoId: 'dQw4w9WgXcQ',
        duration: '10:15',
        badge: 'Concert',
        date: '6 Fév 2026',
        title: 'Highlights du concert solidaire du FASAEC',
        excerpt: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.',
        author: 'FASAEC TV',
        content: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.\n\nCe concert exceptionnel a réuni les plus grandes stars de la musique congolaise pour une soirée de solidarité et de partage. Les fonds collectés ont été redistribués aux artistes dans le besoin.\n\nUne soirée mémorable qui témoigne de la force de notre communauté artistique.'
    },
    {
        type: 'video',
        thumbnail: 'https://images.pexels.com/photos/1481309/pexels-photo-1481309.jpeg',
        videoId: 'dQw4w9WgXcQ',
        duration: '10:15',
        badge: 'Concert',
        date: '6 Fév 2026',
        title: 'Highlights du concert solidaire du FASAEC',
        excerpt: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.',
        author: 'FASAEC TV',
        content: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.\n\nCe concert exceptionnel a réuni les plus grandes stars de la musique congolaise pour une soirée de solidarité et de partage. Les fonds collectés ont été redistribués aux artistes dans le besoin.\n\nUne soirée mémorable qui témoigne de la force de notre communauté artistique.'
    },
    {
        type: 'video',
        thumbnail: 'https://images.pexels.com/photos/1481309/pexels-photo-1481309.jpeg',
        videoId: 'dQw4w9WgXcQ',
        duration: '10:15',
        badge: 'Concert',
        date: '6 Fév 2026',
        title: 'Highlights du concert solidaire du FASAEC',
        excerpt: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.',
        author: 'FASAEC TV',
        content: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.\n\nCe concert exceptionnel a réuni les plus grandes stars de la musique congolaise pour une soirée de solidarité et de partage. Les fonds collectés ont été redistribués aux artistes dans le besoin.\n\nUne soirée mémorable qui témoigne de la force de notre communauté artistique.'
    },
    {
        type: 'video',
        thumbnail: 'https://images.pexels.com/photos/1481309/pexels-photo-1481309.jpeg',
        videoId: 'dQw4w9WgXcQ',
        duration: '10:15',
        badge: 'Concert',
        date: '6 Fév 2026',
        title: 'Highlights du concert solidaire du FASAEC',
        excerpt: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.',
        author: 'FASAEC TV',
        content: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.\n\nCe concert exceptionnel a réuni les plus grandes stars de la musique congolaise pour une soirée de solidarité et de partage. Les fonds collectés ont été redistribués aux artistes dans le besoin.\n\nUne soirée mémorable qui témoigne de la force de notre communauté artistique.'
    },
    {
        type: 'video',
        thumbnail: 'https://images.pexels.com/photos/1481309/pexels-photo-1481309.jpeg',
        videoId: 'dQw4w9WgXcQ',
        duration: '10:15',
        badge: 'Concert',
        date: '6 Fév 2026',
        title: 'Highlights du concert solidaire du FASAEC',
        excerpt: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.',
        author: 'FASAEC TV',
        content: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.\n\nCe concert exceptionnel a réuni les plus grandes stars de la musique congolaise pour une soirée de solidarité et de partage. Les fonds collectés ont été redistribués aux artistes dans le besoin.\n\nUne soirée mémorable qui témoigne de la force de notre communauté artistique.'
    },
    {
        type: 'video',
        thumbnail: 'https://images.pexels.com/photos/1481309/pexels-photo-1481309.jpeg',
        videoId: 'dQw4w9WgXcQ',
        duration: '10:15',
        badge: 'Concert',
        date: '6 Fév 2026',
        title: 'Highlights du concert solidaire du FASAEC',
        excerpt: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.',
        author: 'FASAEC TV',
        content: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.\n\nCe concert exceptionnel a réuni les plus grandes stars de la musique congolaise pour une soirée de solidarité et de partage. Les fonds collectés ont été redistribués aux artistes dans le besoin.\n\nUne soirée mémorable qui témoigne de la force de notre communauté artistique.'
    },
    {
        type: 'video',
        thumbnail: 'https://images.pexels.com/photos/1481309/pexels-photo-1481309.jpeg',
        videoId: 'dQw4w9WgXcQ',
        duration: '10:15',
        badge: 'Concert',
        date: '6 Fév 2026',
        title: 'Highlights du concert solidaire du FASAEC',
        excerpt: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.',
        author: 'FASAEC TV',
        content: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.\n\nCe concert exceptionnel a réuni les plus grandes stars de la musique congolaise pour une soirée de solidarité et de partage. Les fonds collectés ont été redistribués aux artistes dans le besoin.\n\nUne soirée mémorable qui témoigne de la force de notre communauté artistique.'
    },
    {
        type: 'video',
        thumbnail: 'https://images.pexels.com/photos/1481309/pexels-photo-1481309.jpeg',
        videoId: 'dQw4w9WgXcQ',
        duration: '10:15',
        badge: 'Concert',
        date: '6 Fév 2026',
        title: 'Highlights du concert solidaire du FASAEC',
        excerpt: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.',
        author: 'FASAEC TV',
        content: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.\n\nCe concert exceptionnel a réuni les plus grandes stars de la musique congolaise pour une soirée de solidarité et de partage. Les fonds collectés ont été redistribués aux artistes dans le besoin.\n\nUne soirée mémorable qui témoigne de la force de notre communauté artistique.'
    },
    {
        type: 'video',
        thumbnail: 'https://images.pexels.com/photos/1481309/pexels-photo-1481309.jpeg',
        videoId: 'dQw4w9WgXcQ',
        duration: '10:15',
        badge: 'Concert',
        date: '6 Fév 2026',
        title: 'Highlights du concert solidaire du FASAEC',
        excerpt: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.',
        author: 'FASAEC TV',
        content: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.\n\nCe concert exceptionnel a réuni les plus grandes stars de la musique congolaise pour une soirée de solidarité et de partage. Les fonds collectés ont été redistribués aux artistes dans le besoin.\n\nUne soirée mémorable qui témoigne de la force de notre communauté artistique.'
    },
    {
        type: 'video',
        thumbnail: 'https://images.pexels.com/photos/1481309/pexels-photo-1481309.jpeg',
        videoId: 'dQw4w9WgXcQ',
        duration: '10:15',
        badge: 'Concert',
        date: '6 Fév 2026',
        title: 'Highlights du concert solidaire du FASAEC',
        excerpt: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.',
        author: 'FASAEC TV',
        content: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.\n\nCe concert exceptionnel a réuni les plus grandes stars de la musique congolaise pour une soirée de solidarité et de partage. Les fonds collectés ont été redistribués aux artistes dans le besoin.\n\nUne soirée mémorable qui témoigne de la force de notre communauté artistique.'
    },
    {
        type: 'video',
        thumbnail: 'https://images.pexels.com/photos/1481309/pexels-photo-1481309.jpeg',
        videoId: 'dQw4w9WgXcQ',
        duration: '10:15',
        badge: 'Concert',
        date: '6 Fév 2026',
        title: 'Highlights du concert solidaire du FASAEC',
        excerpt: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.',
        author: 'FASAEC TV',
        content: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.\n\nCe concert exceptionnel a réuni les plus grandes stars de la musique congolaise pour une soirée de solidarité et de partage. Les fonds collectés ont été redistribués aux artistes dans le besoin.\n\nUne soirée mémorable qui témoigne de la force de notre communauté artistique.'
    },
    {
        type: 'video',
        thumbnail: 'https://images.pexels.com/photos/1481309/pexels-photo-1481309.jpeg',
        videoId: 'dQw4w9WgXcQ',
        duration: '10:15',
        badge: 'Concert',
        date: '6 Fév 2026',
        title: 'Highlights du concert solidaire du FASAEC',
        excerpt: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.',
        author: 'FASAEC TV',
        content: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.\n\nCe concert exceptionnel a réuni les plus grandes stars de la musique congolaise pour une soirée de solidarité et de partage. Les fonds collectés ont été redistribués aux artistes dans le besoin.\n\nUne soirée mémorable qui témoigne de la force de notre communauté artistique.'
    },
    {
        type: 'video',
        thumbnail: 'https://images.pexels.com/photos/1481309/pexels-photo-1481309.jpeg',
        videoId: 'dQw4w9WgXcQ',
        duration: '10:15',
        badge: 'Concert',
        date: '6 Fév 2026',
        title: 'Highlights du concert solidaire du FASAEC',
        excerpt: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.',
        author: 'FASAEC TV',
        content: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.\n\nCe concert exceptionnel a réuni les plus grandes stars de la musique congolaise pour une soirée de solidarité et de partage. Les fonds collectés ont été redistribués aux artistes dans le besoin.\n\nUne soirée mémorable qui témoigne de la force de notre communauté artistique.'
    },
    {
        type: 'video',
        thumbnail: 'https://images.pexels.com/photos/1481309/pexels-photo-1481309.jpeg',
        videoId: 'dQw4w9WgXcQ',
        duration: '10:15',
        badge: 'Concert',
        date: '6 Fév 2026',
        title: 'Highlights du concert solidaire du FASAEC',
        excerpt: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.',
        author: 'FASAEC TV',
        content: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.\n\nCe concert exceptionnel a réuni les plus grandes stars de la musique congolaise pour une soirée de solidarité et de partage. Les fonds collectés ont été redistribués aux artistes dans le besoin.\n\nUne soirée mémorable qui témoigne de la force de notre communauté artistique.'
    },
    {
        type: 'video',
        thumbnail: 'https://images.pexels.com/photos/1481309/pexels-photo-1481309.jpeg',
        videoId: 'dQw4w9WgXcQ',
        duration: '10:15',
        badge: 'Concert',
        date: '6 Fév 2026',
        title: 'Highlights du concert solidaire du FASAEC',
        excerpt: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.',
        author: 'FASAEC TV',
        content: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.\n\nCe concert exceptionnel a réuni les plus grandes stars de la musique congolaise pour une soirée de solidarité et de partage. Les fonds collectés ont été redistribués aux artistes dans le besoin.\n\nUne soirée mémorable qui témoigne de la force de notre communauté artistique.'
    },
    {
        type: 'video',
        thumbnail: 'https://images.pexels.com/photos/1481309/pexels-photo-1481309.jpeg',
        videoId: 'dQw4w9WgXcQ',
        duration: '10:15',
        badge: 'Concert',
        date: '6 Fév 2026',
        title: 'Highlights du concert solidaire du FASAEC',
        excerpt: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.',
        author: 'FASAEC TV',
        content: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.\n\nCe concert exceptionnel a réuni les plus grandes stars de la musique congolaise pour une soirée de solidarité et de partage. Les fonds collectés ont été redistribués aux artistes dans le besoin.\n\nUne soirée mémorable qui témoigne de la force de notre communauté artistique.'
    },
    {
        type: 'video',
        thumbnail: 'https://images.pexels.com/photos/1481309/pexels-photo-1481309.jpeg',
        videoId: 'dQw4w9WgXcQ',
        duration: '10:15',
        badge: 'Concert',
        date: '6 Fév 2026',
        title: 'Highlights du concert solidaire du FASAEC',
        excerpt: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.',
        author: 'FASAEC TV',
        content: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.\n\nCe concert exceptionnel a réuni les plus grandes stars de la musique congolaise pour une soirée de solidarité et de partage. Les fonds collectés ont été redistribués aux artistes dans le besoin.\n\nUne soirée mémorable qui témoigne de la force de notre communauté artistique.'
    },
    {
        type: 'video',
        thumbnail: 'https://images.pexels.com/photos/1481309/pexels-photo-1481309.jpeg',
        videoId: 'dQw4w9WgXcQ',
        duration: '10:15',
        badge: 'Concert',
        date: '6 Fév 2026',
        title: 'Highlights du concert solidaire du FASAEC',
        excerpt: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.',
        author: 'FASAEC TV',
        content: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.\n\nCe concert exceptionnel a réuni les plus grandes stars de la musique congolaise pour une soirée de solidarité et de partage. Les fonds collectés ont été redistribués aux artistes dans le besoin.\n\nUne soirée mémorable qui témoigne de la force de notre communauté artistique.'
    },
    {
        type: 'video',
        thumbnail: 'https://images.pexels.com/photos/1481309/pexels-photo-1481309.jpeg',
        videoId: 'dQw4w9WgXcQ',
        duration: '10:15',
        badge: 'Concert',
        date: '6 Fév 2026',
        title: 'Highlights du concert solidaire du FASAEC',
        excerpt: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.',
        author: 'FASAEC TV',
        content: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.\n\nCe concert exceptionnel a réuni les plus grandes stars de la musique congolaise pour une soirée de solidarité et de partage. Les fonds collectés ont été redistribués aux artistes dans le besoin.\n\nUne soirée mémorable qui témoigne de la force de notre communauté artistique.'
    },
    {
        type: 'video',
        thumbnail: 'https://images.pexels.com/photos/1481309/pexels-photo-1481309.jpeg',
        videoId: 'dQw4w9WgXcQ',
        duration: '10:15',
        badge: 'Concert',
        date: '6 Fév 2026',
        title: 'Highlights du concert solidaire du FASAEC',
        excerpt: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.',
        author: 'FASAEC TV',
        content: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.\n\nCe concert exceptionnel a réuni les plus grandes stars de la musique congolaise pour une soirée de solidarité et de partage. Les fonds collectés ont été redistribués aux artistes dans le besoin.\n\nUne soirée mémorable qui témoigne de la force de notre communauté artistique.'
    },
    {
        type: 'video',
        thumbnail: 'https://images.pexels.com/photos/1481309/pexels-photo-1481309.jpeg',
        videoId: 'dQw4w9WgXcQ',
        duration: '10:15',
        badge: 'Concert',
        date: '6 Fév 2026',
        title: 'Highlights du concert solidaire du FASAEC',
        excerpt: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.',
        author: 'FASAEC TV',
        content: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.\n\nCe concert exceptionnel a réuni les plus grandes stars de la musique congolaise pour une soirée de solidarité et de partage. Les fonds collectés ont été redistribués aux artistes dans le besoin.\n\nUne soirée mémorable qui témoigne de la force de notre communauté artistique.'
    },
    {
        type: 'video',
        thumbnail: 'https://images.pexels.com/photos/1481309/pexels-photo-1481309.jpeg',
        videoId: 'dQw4w9WgXcQ',
        duration: '10:15',
        badge: 'Concert',
        date: '6 Fév 2026',
        title: 'Highlights du concert solidaire du FASAEC',
        excerpt: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.',
        author: 'FASAEC TV',
        content: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.\n\nCe concert exceptionnel a réuni les plus grandes stars de la musique congolaise pour une soirée de solidarité et de partage. Les fonds collectés ont été redistribués aux artistes dans le besoin.\n\nUne soirée mémorable qui témoigne de la force de notre communauté artistique.'
    },
    {
        type: 'video',
        thumbnail: 'https://images.pexels.com/photos/1481309/pexels-photo-1481309.jpeg',
        videoId: 'dQw4w9WgXcQ',
        duration: '10:15',
        badge: 'Concert',
        date: '6 Fév 2026',
        title: 'Highlights du concert solidaire du FASAEC',
        excerpt: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.',
        author: 'FASAEC TV',
        content: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.\n\nCe concert exceptionnel a réuni les plus grandes stars de la musique congolaise pour une soirée de solidarité et de partage. Les fonds collectés ont été redistribués aux artistes dans le besoin.\n\nUne soirée mémorable qui témoigne de la force de notre communauté artistique.'
    },
    {
        type: 'video',
        thumbnail: 'https://images.pexels.com/photos/1481309/pexels-photo-1481309.jpeg',
        videoId: 'dQw4w9WgXcQ',
        duration: '10:15',
        badge: 'Concert',
        date: '6 Fév 2026',
        title: 'Highlights du concert solidaire du FASAEC',
        excerpt: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.',
        author: 'FASAEC TV',
        content: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.\n\nCe concert exceptionnel a réuni les plus grandes stars de la musique congolaise pour une soirée de solidarité et de partage. Les fonds collectés ont été redistribués aux artistes dans le besoin.\n\nUne soirée mémorable qui témoigne de la force de notre communauté artistique.'
    },
    {
        type: 'video',
        thumbnail: 'https://images.pexels.com/photos/1481309/pexels-photo-1481309.jpeg',
        videoId: 'dQw4w9WgXcQ',
        duration: '10:15',
        badge: 'Concert',
        date: '6 Fév 2026',
        title: 'Highlights du concert solidaire du FASAEC',
        excerpt: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.',
        author: 'FASAEC TV',
        content: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.\n\nCe concert exceptionnel a réuni les plus grandes stars de la musique congolaise pour une soirée de solidarité et de partage. Les fonds collectés ont été redistribués aux artistes dans le besoin.\n\nUne soirée mémorable qui témoigne de la force de notre communauté artistique.'
    },
    {
        type: 'video',
        thumbnail: 'https://images.pexels.com/photos/1481309/pexels-photo-1481309.jpeg',
        videoId: 'dQw4w9WgXcQ',
        duration: '10:15',
        badge: 'Concert',
        date: '6 Fév 2026',
        title: 'Highlights du concert solidaire du FASAEC',
        excerpt: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.',
        author: 'FASAEC TV',
        content: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.\n\nCe concert exceptionnel a réuni les plus grandes stars de la musique congolaise pour une soirée de solidarité et de partage. Les fonds collectés ont été redistribués aux artistes dans le besoin.\n\nUne soirée mémorable qui témoigne de la force de notre communauté artistique.'
    },
    {
        type: 'video',
        thumbnail: 'https://images.pexels.com/photos/1481309/pexels-photo-1481309.jpeg',
        videoId: 'dQw4w9WgXcQ',
        duration: '10:15',
        badge: 'Concert',
        date: '6 Fév 2026',
        title: 'Highlights du concert solidaire du FASAEC',
        excerpt: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.',
        author: 'FASAEC TV',
        content: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.\n\nCe concert exceptionnel a réuni les plus grandes stars de la musique congolaise pour une soirée de solidarité et de partage. Les fonds collectés ont été redistribués aux artistes dans le besoin.\n\nUne soirée mémorable qui témoigne de la force de notre communauté artistique.'
    },
    {
        type: 'video',
        thumbnail: 'https://images.pexels.com/photos/1481309/pexels-photo-1481309.jpeg',
        videoId: 'dQw4w9WgXcQ',
        duration: '10:15',
        badge: 'Concert',
        date: '6 Fév 2026',
        title: 'Highlights du concert solidaire du FASAEC',
        excerpt: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.',
        author: 'FASAEC TV',
        content: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.\n\nCe concert exceptionnel a réuni les plus grandes stars de la musique congolaise pour une soirée de solidarité et de partage. Les fonds collectés ont été redistribués aux artistes dans le besoin.\n\nUne soirée mémorable qui témoigne de la force de notre communauté artistique.'
    },
    {
        type: 'video',
        thumbnail: 'https://images.pexels.com/photos/1481309/pexels-photo-1481309.jpeg',
        videoId: 'dQw4w9WgXcQ',
        duration: '10:15',
        badge: 'Concert',
        date: '6 Fév 2026',
        title: 'Highlights du concert solidaire du FASAEC',
        excerpt: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.',
        author: 'FASAEC TV',
        content: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.\n\nCe concert exceptionnel a réuni les plus grandes stars de la musique congolaise pour une soirée de solidarité et de partage. Les fonds collectés ont été redistribués aux artistes dans le besoin.\n\nUne soirée mémorable qui témoigne de la force de notre communauté artistique.'
    },
    {
        type: 'video',
        thumbnail: 'https://images.pexels.com/photos/1481309/pexels-photo-1481309.jpeg',
        videoId: 'dQw4w9WgXcQ',
        duration: '10:15',
        badge: 'Concert',
        date: '6 Fév 2026',
        title: 'Highlights du concert solidaire du FASAEC',
        excerpt: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.',
        author: 'FASAEC TV',
        content: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.\n\nCe concert exceptionnel a réuni les plus grandes stars de la musique congolaise pour une soirée de solidarité et de partage. Les fonds collectés ont été redistribués aux artistes dans le besoin.\n\nUne soirée mémorable qui témoigne de la force de notre communauté artistique.'
    },
    {
        type: 'video',
        thumbnail: 'https://images.pexels.com/photos/1481309/pexels-photo-1481309.jpeg',
        videoId: 'dQw4w9WgXcQ',
        duration: '10:15',
        badge: 'Concert',
        date: '6 Fév 2026',
        title: 'Highlights du concert solidaire du FASAEC',
        excerpt: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.',
        author: 'FASAEC TV',
        content: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.\n\nCe concert exceptionnel a réuni les plus grandes stars de la musique congolaise pour une soirée de solidarité et de partage. Les fonds collectés ont été redistribués aux artistes dans le besoin.\n\nUne soirée mémorable qui témoigne de la force de notre communauté artistique.'
    },
    {
        type: 'video',
        thumbnail: 'https://images.pexels.com/photos/1481309/pexels-photo-1481309.jpeg',
        videoId: 'dQw4w9WgXcQ',
        duration: '10:15',
        badge: 'Concert',
        date: '6 Fév 2026',
        title: 'Highlights du concert solidaire du FASAEC',
        excerpt: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.',
        author: 'FASAEC TV',
        content: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.\n\nCe concert exceptionnel a réuni les plus grandes stars de la musique congolaise pour une soirée de solidarité et de partage. Les fonds collectés ont été redistribués aux artistes dans le besoin.\n\nUne soirée mémorable qui témoigne de la force de notre communauté artistique.'
    },
    {
        type: 'video',
        thumbnail: 'https://images.pexels.com/photos/1481309/pexels-photo-1481309.jpeg',
        videoId: 'dQw4w9WgXcQ',
        duration: '10:15',
        badge: 'Concert',
        date: '6 Fév 2026',
        title: 'Highlights du concert solidaire du FASAEC',
        excerpt: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.',
        author: 'FASAEC TV',
        content: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.\n\nCe concert exceptionnel a réuni les plus grandes stars de la musique congolaise pour une soirée de solidarité et de partage. Les fonds collectés ont été redistribués aux artistes dans le besoin.\n\nUne soirée mémorable qui témoigne de la force de notre communauté artistique.'
    },
    {
        type: 'video',
        thumbnail: 'https://images.pexels.com/photos/1481309/pexels-photo-1481309.jpeg',
        videoId: 'dQw4w9WgXcQ',
        duration: '10:15',
        badge: 'Concert',
        date: '6 Fév 2026',
        title: 'Highlights du concert solidaire du FASAEC',
        excerpt: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.',
        author: 'FASAEC TV',
        content: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.\n\nCe concert exceptionnel a réuni les plus grandes stars de la musique congolaise pour une soirée de solidarité et de partage. Les fonds collectés ont été redistribués aux artistes dans le besoin.\n\nUne soirée mémorable qui témoigne de la force de notre communauté artistique.'
    },
    {
        type: 'video',
        thumbnail: 'https://images.pexels.com/photos/1481309/pexels-photo-1481309.jpeg',
        videoId: 'dQw4w9WgXcQ',
        duration: '10:15',
        badge: 'Concert',
        date: '6 Fév 2026',
        title: 'Highlights du concert solidaire du FASAEC',
        excerpt: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.',
        author: 'FASAEC TV',
        content: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.\n\nCe concert exceptionnel a réuni les plus grandes stars de la musique congolaise pour une soirée de solidarité et de partage. Les fonds collectés ont été redistribués aux artistes dans le besoin.\n\nUne soirée mémorable qui témoigne de la force de notre communauté artistique.'
    },
    {
        type: 'video',
        thumbnail: 'https://images.pexels.com/photos/1481309/pexels-photo-1481309.jpeg',
        videoId: 'dQw4w9WgXcQ',
        duration: '10:15',
        badge: 'Concert',
        date: '6 Fév 2026',
        title: 'Highlights du concert solidaire du FASAEC',
        excerpt: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.',
        author: 'FASAEC TV',
        content: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.\n\nCe concert exceptionnel a réuni les plus grandes stars de la musique congolaise pour une soirée de solidarité et de partage. Les fonds collectés ont été redistribués aux artistes dans le besoin.\n\nUne soirée mémorable qui témoigne de la force de notre communauté artistique.'
    },
    {
        type: 'video',
        thumbnail: 'https://images.pexels.com/photos/1481309/pexels-photo-1481309.jpeg',
        videoId: 'dQw4w9WgXcQ',
        duration: '10:15',
        badge: 'Concert',
        date: '6 Fév 2026',
        title: 'Highlights du concert solidaire du FASAEC',
        excerpt: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.',
        author: 'FASAEC TV',
        content: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.\n\nCe concert exceptionnel a réuni les plus grandes stars de la musique congolaise pour une soirée de solidarité et de partage. Les fonds collectés ont été redistribués aux artistes dans le besoin.\n\nUne soirée mémorable qui témoigne de la force de notre communauté artistique.'
    },
    {
        type: 'video',
        thumbnail: 'https://images.pexels.com/photos/1481309/pexels-photo-1481309.jpeg',
        videoId: 'dQw4w9WgXcQ',
        duration: '10:15',
        badge: 'Concert',
        date: '6 Fév 2026',
        title: 'Highlights du concert solidaire du FASAEC',
        excerpt: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.',
        author: 'FASAEC TV',
        content: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.\n\nCe concert exceptionnel a réuni les plus grandes stars de la musique congolaise pour une soirée de solidarité et de partage. Les fonds collectés ont été redistribués aux artistes dans le besoin.\n\nUne soirée mémorable qui témoigne de la force de notre communauté artistique.'
    },
    {
        type: 'video',
        thumbnail: 'https://images.pexels.com/photos/1481309/pexels-photo-1481309.jpeg',
        videoId: 'dQw4w9WgXcQ',
        duration: '10:15',
        badge: 'Concert',
        date: '6 Fév 2026',
        title: 'Highlights du concert solidaire du FASAEC',
        excerpt: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.',
        author: 'FASAEC TV',
        content: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.\n\nCe concert exceptionnel a réuni les plus grandes stars de la musique congolaise pour une soirée de solidarité et de partage. Les fonds collectés ont été redistribués aux artistes dans le besoin.\n\nUne soirée mémorable qui témoigne de la force de notre communauté artistique.'
    },
    {
        type: 'video',
        thumbnail: 'https://images.pexels.com/photos/1481309/pexels-photo-1481309.jpeg',
        videoId: 'dQw4w9WgXcQ',
        duration: '10:15',
        badge: 'Concert',
        date: '6 Fév 2026',
        title: 'Highlights du concert solidaire du FASAEC',
        excerpt: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.',
        author: 'FASAEC TV',
        content: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.\n\nCe concert exceptionnel a réuni les plus grandes stars de la musique congolaise pour une soirée de solidarité et de partage. Les fonds collectés ont été redistribués aux artistes dans le besoin.\n\nUne soirée mémorable qui témoigne de la force de notre communauté artistique.'
    },
    {
        type: 'video',
        thumbnail: 'https://images.pexels.com/photos/1481309/pexels-photo-1481309.jpeg',
        videoId: 'dQw4w9WgXcQ',
        duration: '10:15',
        badge: 'Concert',
        date: '6 Fév 2026',
        title: 'Highlights du concert solidaire du FASAEC',
        excerpt: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.',
        author: 'FASAEC TV',
        content: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.\n\nCe concert exceptionnel a réuni les plus grandes stars de la musique congolaise pour une soirée de solidarité et de partage. Les fonds collectés ont été redistribués aux artistes dans le besoin.\n\nUne soirée mémorable qui témoigne de la force de notre communauté artistique.'
    },
    {
        type: 'video',
        thumbnail: 'https://images.pexels.com/photos/1481309/pexels-photo-1481309.jpeg',
        videoId: 'dQw4w9WgXcQ',
        duration: '10:15',
        badge: 'Concert',
        date: '6 Fév 2026',
        title: 'Highlights du concert solidaire du FASAEC',
        excerpt: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.',
        author: 'FASAEC TV',
        content: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.\n\nCe concert exceptionnel a réuni les plus grandes stars de la musique congolaise pour une soirée de solidarité et de partage. Les fonds collectés ont été redistribués aux artistes dans le besoin.\n\nUne soirée mémorable qui témoigne de la force de notre communauté artistique.'
    },
    {
        type: 'video',
        thumbnail: 'https://images.pexels.com/photos/1481309/pexels-photo-1481309.jpeg',
        videoId: 'dQw4w9WgXcQ',
        duration: '10:15',
        badge: 'Concert',
        date: '6 Fév 2026',
        title: 'Highlights du concert solidaire du FASAEC',
        excerpt: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.',
        author: 'FASAEC TV',
        content: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.\n\nCe concert exceptionnel a réuni les plus grandes stars de la musique congolaise pour une soirée de solidarité et de partage. Les fonds collectés ont été redistribués aux artistes dans le besoin.\n\nUne soirée mémorable qui témoigne de la force de notre communauté artistique.'
    },
    {
        type: 'video',
        thumbnail: 'https://images.pexels.com/photos/1481309/pexels-photo-1481309.jpeg',
        videoId: 'dQw4w9WgXcQ',
        duration: '10:15',
        badge: 'Concert',
        date: '6 Fév 2026',
        title: 'Highlights du concert solidaire du FASAEC',
        excerpt: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.',
        author: 'FASAEC TV',
        content: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.\n\nCe concert exceptionnel a réuni les plus grandes stars de la musique congolaise pour une soirée de solidarité et de partage. Les fonds collectés ont été redistribués aux artistes dans le besoin.\n\nUne soirée mémorable qui témoigne de la force de notre communauté artistique.'
    },
    {
        type: 'video',
        thumbnail: 'https://images.pexels.com/photos/1481309/pexels-photo-1481309.jpeg',
        videoId: 'dQw4w9WgXcQ',
        duration: '10:15',
        badge: 'Concert',
        date: '6 Fév 2026',
        title: 'Highlights du concert solidaire du FASAEC',
        excerpt: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.',
        author: 'FASAEC TV',
        content: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.\n\nCe concert exceptionnel a réuni les plus grandes stars de la musique congolaise pour une soirée de solidarité et de partage. Les fonds collectés ont été redistribués aux artistes dans le besoin.\n\nUne soirée mémorable qui témoigne de la force de notre communauté artistique.'
    },
    {
        type: 'video',
        thumbnail: 'https://images.pexels.com/photos/1481309/pexels-photo-1481309.jpeg',
        videoId: 'dQw4w9WgXcQ',
        duration: '10:15',
        badge: 'Concert',
        date: '6 Fév 2026',
        title: 'Highlights du concert solidaire du FASAEC',
        excerpt: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.',
        author: 'FASAEC TV',
        content: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.\n\nCe concert exceptionnel a réuni les plus grandes stars de la musique congolaise pour une soirée de solidarité et de partage. Les fonds collectés ont été redistribués aux artistes dans le besoin.\n\nUne soirée mémorable qui témoigne de la force de notre communauté artistique.'
    },
    {
        type: 'video',
        thumbnail: 'https://images.pexels.com/photos/1481309/pexels-photo-1481309.jpeg',
        videoId: 'dQw4w9WgXcQ',
        duration: '10:15',
        badge: 'Concert',
        date: '6 Fév 2026',
        title: 'Highlights du concert solidaire du FASAEC',
        excerpt: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.',
        author: 'FASAEC TV',
        content: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.\n\nCe concert exceptionnel a réuni les plus grandes stars de la musique congolaise pour une soirée de solidarité et de partage. Les fonds collectés ont été redistribués aux artistes dans le besoin.\n\nUne soirée mémorable qui témoigne de la force de notre communauté artistique.'
    },
    {
        type: 'video',
        thumbnail: 'https://images.pexels.com/photos/1481309/pexels-photo-1481309.jpeg',
        videoId: 'dQw4w9WgXcQ',
        duration: '10:15',
        badge: 'Concert',
        date: '6 Fév 2026',
        title: 'Highlights du concert solidaire du FASAEC',
        excerpt: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.',
        author: 'FASAEC TV',
        content: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.\n\nCe concert exceptionnel a réuni les plus grandes stars de la musique congolaise pour une soirée de solidarité et de partage. Les fonds collectés ont été redistribués aux artistes dans le besoin.\n\nUne soirée mémorable qui témoigne de la force de notre communauté artistique.'
    },
    {
        type: 'video',
        thumbnail: 'https://images.pexels.com/photos/1481309/pexels-photo-1481309.jpeg',
        videoId: 'dQw4w9WgXcQ',
        duration: '10:15',
        badge: 'Concert',
        date: '6 Fév 2026',
        title: 'Highlights du concert solidaire du FASAEC',
        excerpt: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.',
        author: 'FASAEC TV',
        content: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.\n\nCe concert exceptionnel a réuni les plus grandes stars de la musique congolaise pour une soirée de solidarité et de partage. Les fonds collectés ont été redistribués aux artistes dans le besoin.\n\nUne soirée mémorable qui témoigne de la force de notre communauté artistique.'
    },
    {
        type: 'video',
        thumbnail: 'https://images.pexels.com/photos/1481309/pexels-photo-1481309.jpeg',
        videoId: 'dQw4w9WgXcQ',
        duration: '10:15',
        badge: 'Concert',
        date: '6 Fév 2026',
        title: 'Highlights du concert solidaire du FASAEC',
        excerpt: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.',
        author: 'FASAEC TV',
        content: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.\n\nCe concert exceptionnel a réuni les plus grandes stars de la musique congolaise pour une soirée de solidarité et de partage. Les fonds collectés ont été redistribués aux artistes dans le besoin.\n\nUne soirée mémorable qui témoigne de la force de notre communauté artistique.'
    },
    {
        type: 'video',
        thumbnail: 'https://images.pexels.com/photos/1481309/pexels-photo-1481309.jpeg',
        videoId: 'dQw4w9WgXcQ',
        duration: '10:15',
        badge: 'Concert',
        date: '6 Fév 2026',
        title: 'Highlights du concert solidaire du FASAEC',
        excerpt: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.',
        author: 'FASAEC TV',
        content: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.\n\nCe concert exceptionnel a réuni les plus grandes stars de la musique congolaise pour une soirée de solidarité et de partage. Les fonds collectés ont été redistribués aux artistes dans le besoin.\n\nUne soirée mémorable qui témoigne de la force de notre communauté artistique.'
    },
    {
        type: 'video',
        thumbnail: 'https://images.pexels.com/photos/1481309/pexels-photo-1481309.jpeg',
        videoId: 'dQw4w9WgXcQ',
        duration: '10:15',
        badge: 'Concert',
        date: '6 Fév 2026',
        title: 'Highlights du concert solidaire du FASAEC',
        excerpt: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.',
        author: 'FASAEC TV',
        content: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.\n\nCe concert exceptionnel a réuni les plus grandes stars de la musique congolaise pour une soirée de solidarité et de partage. Les fonds collectés ont été redistribués aux artistes dans le besoin.\n\nUne soirée mémorable qui témoigne de la force de notre communauté artistique.'
    },
    {
        type: 'video',
        thumbnail: 'https://images.pexels.com/photos/1481309/pexels-photo-1481309.jpeg',
        videoId: 'dQw4w9WgXcQ',
        duration: '10:15',
        badge: 'Concert',
        date: '6 Fév 2026',
        title: 'Highlights du concert solidaire du FASAEC',
        excerpt: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.',
        author: 'FASAEC TV',
        content: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.\n\nCe concert exceptionnel a réuni les plus grandes stars de la musique congolaise pour une soirée de solidarité et de partage. Les fonds collectés ont été redistribués aux artistes dans le besoin.\n\nUne soirée mémorable qui témoigne de la force de notre communauté artistique.'
    },
    {
        type: 'video',
        thumbnail: 'https://images.pexels.com/photos/1481309/pexels-photo-1481309.jpeg',
        videoId: 'dQw4w9WgXcQ',
        duration: '10:15',
        badge: 'Concert',
        date: '6 Fév 2026',
        title: 'Highlights du concert solidaire du FASAEC',
        excerpt: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.',
        author: 'FASAEC TV',
        content: 'Revivez les meilleurs moments du concert solidaire organisé pour soutenir les artistes en difficulté.\n\nCe concert exceptionnel a réuni les plus grandes stars de la musique congolaise pour une soirée de solidarité et de partage. Les fonds collectés ont été redistribués aux artistes dans le besoin.\n\nUne soirée mémorable qui témoigne de la force de notre communauté artistique.'
    }
];

// ========================================
// UTILITAIRES DE PERFORMANCE
// ========================================

// Throttle function - limite le nombre d'exécutions
function throttle(func, delay) {
    let lastCall = 0;
    let timeoutId = null;

    return function(...args) {
        const now = Date.now();
        const timeSinceLastCall = now - lastCall;

        if (timeSinceLastCall >= delay) {
            lastCall = now;
            func.apply(this, args);
        } else {
            clearTimeout(timeoutId);
            timeoutId = setTimeout(() => {
                lastCall = Date.now();
                func.apply(this, args);
            }, delay - timeSinceLastCall);
        }
    };
}

// Debounce function - attend que l'utilisateur arrête d'agir
function debounce(func, delay) {
    let timeoutId;
    return function(...args) {
        clearTimeout(timeoutId);
        timeoutId = setTimeout(() => func.apply(this, args), delay);
    };
}

// RequestAnimationFrame optimisé pour les animations
function smoothScroll(callback) {
    let ticking = false;

    return function(...args) {
        if (!ticking) {
            window.requestAnimationFrame(() => {
                callback.apply(this, args);
                ticking = false;
            });
            ticking = true;
        }
    };
}

// ========================================
// CACHE DOM
// ========================================
const DOMCache = {
    articlesContainer: null,
    videosContainer: null,
    articlesPagination: null,
    videosPagination: null,
    scrollBtn: null,
    socialFloating: null,
    modal: null,
    modalContent: null,
    modalClose: null,
    header: null,
    loader: null,
    mobileNavWrapper: null,

    init() {
        this.articlesContainer = document.getElementById('articles-container');
        this.videosContainer = document.getElementById('videos-container');
        this.articlesPagination = document.getElementById('articles-pagination');
        this.videosPagination = document.getElementById('videos-pagination');
        this.scrollBtn = document.getElementById('scrollToTopBtn');
        this.socialFloating = document.getElementById('socialFloating');
        this.modal = document.getElementById('contentModal');
        this.modalContent = document.getElementById('modal-inner-content');
        this.modalClose = document.querySelector('.modal-close');
        this.header = document.querySelector('.sticky-header');
        this.loader = document.getElementById('page-loader');
        this.mobileNavWrapper = document.querySelector('.mobile-nav-wrapper');
    }
};

// ========================================
// VARIABLES GLOBALES
// ========================================
let currentArticlePage = 1;
let currentVideoPage = 1;
const itemsPerPage = 6;
let currentFilter = 'all';
let observerInstance = null;

// ========================================
// FONCTIONS DE RENDU
// ========================================

function renderArticles(page = 1) {
    if (!DOMCache.articlesContainer) return;

    const start = (page - 1) * itemsPerPage;
    const end = start + itemsPerPage;
    const paginatedArticles = articles.slice(start, end);

    // Utiliser DocumentFragment pour optimiser les insertions DOM
    const fragment = document.createDocumentFragment();
    const tempDiv = document.createElement('div');

    tempDiv.innerHTML = paginatedArticles.map((article, index) => {
        const hasMultipleImages = article.images.length > 1;
        const absoluteIndex = start + index;

        return `
            <div class="col-lg-4 col-md-6 card-appear" style="animation-delay:${index * 0.1}s">
                <div class="article-card" data-type="article" data-index="${absoluteIndex}">
                    <div class="article-image-container">
                        ${article.images.map((img, imgIndex) => `
                            <img
                                src="${img}"
                                alt="${article.title}"
                                class="article-image"
                                loading="lazy"
                                style="display: ${imgIndex === 0 ? 'block' : 'none'}"
                                data-index="${imgIndex}">
                        `).join('')}
                        <div class="article-badge">${article.badge}</div>
                        <div class="article-date"><i class="far fa-calendar me-2"></i>${article.date}</div>
                        ${hasMultipleImages ? `
                            <div class="carousel-indicators">
                                ${article.images.map((_, i) => `
                                    <div class="carousel-indicator ${i === 0 ? 'active' : ''}" data-img-index="${i}"></div>
                                `).join('')}
                            </div>
                        ` : ''}
                    </div>
                    <div class="article-content">
                        <h3 class="article-title">${article.title}</h3>
                        <p class="article-excerpt">${article.excerpt}</p>
                        <div class="article-footer">
                            <div class="article-author">
                                <i class="fas fa-user-circle me-2"></i>
                                ${article.author}
                            </div>
                            <a href="#" class="read-more">
                                Lire plus <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        `;
    }).join('');

    // Transférer les éléments au fragment
    while (tempDiv.firstChild) {
        fragment.appendChild(tempDiv.firstChild);
    }

    // Une seule manipulation DOM
    DOMCache.articlesContainer.innerHTML = '';
    DOMCache.articlesContainer.appendChild(fragment);

    renderPagination('articles', articles.length, page);
    setupCardListeners();
    initIntersectionObserver();
}

function renderVideos(page = 1) {
    if (!DOMCache.videosContainer) return;

    const start = (page - 1) * itemsPerPage;
    const end = start + itemsPerPage;
    const paginatedVideos = videos.slice(start, end);

    const fragment = document.createDocumentFragment();
    const tempDiv = document.createElement('div');

    tempDiv.innerHTML = paginatedVideos.map((video, index) => {
        const absoluteIndex = start + index;

        return `
            <div class="col-lg-4 col-md-6 card-appear" style="animation-delay:${index * 0.1}s">
                <div class="video-card" data-type="video" data-index="${absoluteIndex}">
                    <div class="video-thumbnail">
                        <img src="${video.thumbnail}" alt="${video.title}" loading="lazy">
                        <div class="video-play-btn">
                            <i class="fas fa-play"></i>
                        </div>
                        <div class="video-duration">${video.duration}</div>
                        <div class="article-badge">${video.badge}</div>
                        <div class="article-date"><i class="far fa-calendar me-2"></i>${video.date}</div>
                    </div>
                    <div class="article-content">
                        <h3 class="article-title">${video.title}</h3>
                        <p class="article-excerpt">${video.excerpt}</p>
                        <div class="article-footer">
                            <div class="article-author">
                                <i class="fas fa-video me-2"></i>
                                ${video.author}
                            </div>
                            <a href="#" class="read-more">
                                Voir <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        `;
    }).join('');

    while (tempDiv.firstChild) {
        fragment.appendChild(tempDiv.firstChild);
    }

    DOMCache.videosContainer.innerHTML = '';
    DOMCache.videosContainer.appendChild(fragment);

    renderPagination('videos', videos.length, page);
    setupCardListeners();
    initIntersectionObserver();
}

function renderPagination(type, totalItems, currentPage) {
    const container = type === 'articles'
        ? DOMCache.articlesPagination
        : DOMCache.videosPagination;

    if (!container) return;

    const totalPages = Math.ceil(totalItems / itemsPerPage);

    if (totalPages <= 1) {
        container.innerHTML = '';
        return;
    }

    let paginationHTML = '';

    // Bouton précédent
    paginationHTML += `
        <button class="pagination-btn"
            data-type="${type}"
            data-page="${currentPage - 1}"
            ${currentPage === 1 ? 'disabled' : ''}>
            <i class="fas fa-chevron-left"></i>
        </button>
    `;

    const maxVisible = 8;

    if (totalPages <= maxVisible) {
        // Afficher toutes les pages
        for (let i = 1; i <= totalPages; i++) {
            paginationHTML += createPageButton(type, i, currentPage);
        }
    } else {

        // Toujours afficher la première page
        paginationHTML += createPageButton(type, 1, currentPage);

        let start = Math.max(2, currentPage - 2);
        let end = Math.min(totalPages - 1, currentPage + 2);

        // Si on est proche du début
        if (currentPage <= 4) {
            start = 2;
            end = 6;
        }

        // Si on est proche de la fin
        if (currentPage >= totalPages - 3) {
            start = totalPages - 5;
            end = totalPages - 1;
        }

        if (start > 2) {
            paginationHTML += `<span class="pagination-dots">...</span>`;
        }

        for (let i = start; i <= end; i++) {
            paginationHTML += createPageButton(type, i, currentPage);
        }

        if (end < totalPages - 1) {
            paginationHTML += `<span class="pagination-dots">...</span>`;
        }

        // Toujours afficher la dernière page
        paginationHTML += createPageButton(type, totalPages, currentPage);
    }

    // Bouton suivant
    paginationHTML += `
        <button class="pagination-btn"
            data-type="${type}"
            data-page="${currentPage + 1}"
            ${currentPage === totalPages ? 'disabled' : ''}>
            <i class="fas fa-chevron-right"></i>
        </button>
    `;

    container.innerHTML = paginationHTML;
    setupPaginationListeners();
}

function createPageButton(type, page, currentPage) {
    return `
        <button class="pagination-btn ${page === currentPage ? 'active' : ''}"
            data-type="${type}"
            data-page="${page}">
            ${page}
        </button>
    `;
}
// ========================================
// EVENT LISTENERS OPTIMISÉS
// ========================================

function setupCardListeners() {
    // Event delegation pour les cartes
    if (DOMCache.articlesContainer) {
        DOMCache.articlesContainer.addEventListener('click', handleCardClick);
    }
    if (DOMCache.videosContainer) {
        DOMCache.videosContainer.addEventListener('click', handleCardClick);
    }
}

function handleCardClick(e) {
    const card = e.target.closest('.article-card, .video-card');
    if (!card) return;

    // Vérifier si on a cliqué sur un indicateur de carousel
    const indicator = e.target.closest('.carousel-indicator');
    if (indicator) {
        e.stopPropagation();
        const imgIndex = parseInt(indicator.dataset.imgIndex);
        const imageContainer = card.querySelector('.article-image-container');
        changeImage(imageContainer, imgIndex);
        return;
    }

    const type = card.dataset.type;
    const index = parseInt(card.dataset.index);
    openModal(type, index);
}

function setupPaginationListeners() {
    const paginationBtns = document.querySelectorAll('.pagination-btn[data-page]');
    paginationBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            if (this.disabled) return;

            const type = this.dataset.type;
            const page = parseInt(this.dataset.page);
            changePage(type, page);
        });
    });
}

function changePage(type, page) {
    if (type === 'articles') {
        currentArticlePage = page;
        renderArticles(page);
    } else {
        currentVideoPage = page;
        renderVideos(page);
    }

    const targetId = type === 'articles' ? 'actualites' : 'videos';
    const target = document.getElementById(targetId);
    if (target) {
        const offsetTop = target.offsetTop - 100;
        window.scrollTo({
            top: offsetTop,
            behavior: 'smooth'
        });
    }
}

function changeImage(container, imageIndex) {
    const images = container.querySelectorAll('.article-image');
    const indicators = container.querySelectorAll('.carousel-indicator');

    images.forEach((img, i) => {
        img.style.display = i === imageIndex ? 'block' : 'none';
    });

    indicators.forEach((ind, i) => {
        ind.classList.toggle('active', i === imageIndex);
    });
}

// ========================================
// MODAL
// ========================================

function openModal(type, index) {
    if (!DOMCache.modal || !DOMCache.modalContent) return;

    const item = type === 'article' ? articles[index] : videos[index];
    let content = '';

    if (type === 'article') {
        const hasMultipleImages = item.images.length > 1;
        content = `
            <div class="modal-image-container">
                ${item.images.map((img, i) => `
                    <img src="${img}" alt="${item.title}" class="modal-image" loading="lazy" style="display: ${i === 0 ? 'block' : 'none'}" data-modal-index="${i}">
                `).join('')}
                ${hasMultipleImages ? `
                    <button class="modal-carousel-btn prev" data-direction="-1">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button class="modal-carousel-btn next" data-direction="1">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                    <div class="carousel-indicators">
                        ${item.images.map((_, i) => `
                            <div class="carousel-indicator ${i === 0 ? 'active' : ''}" data-modal-indicator="${i}"></div>
                        `).join('')}
                    </div>
                ` : ''}
            </div>
            <div class="modal-body">
                <h2 class="modal-title">${item.title}</h2>
                <div class="modal-meta">
                    <div class="modal-meta-item">
                        <i class="fas fa-tag"></i>
                        <span>${item.badge}</span>
                    </div>
                    <div class="modal-meta-item">
                        <i class="far fa-calendar"></i>
                        <span>${item.date}</span>
                    </div>
                    <div class="modal-meta-item">
                        <i class="fas fa-user"></i>
                        <span>${item.author}</span>
                    </div>
                </div>
                <div class="modal-description">
                    ${item.content.split('\n').map(p => `<p>${p}</p>`).join('')}
                </div>
            </div>
        `;
        window.currentModalImages = item.images;
        window.currentModalImageIndex = 0;
    } else {
        content = `
            <div class="modal-video-container">
                <iframe src="https://www.youtube.com/embed/${item.videoId}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen loading="lazy"></iframe>
            </div>
            <div class="modal-body">
                <h2 class="modal-title">${item.title}</h2>
                <div class="modal-meta">
                    <div class="modal-meta-item">
                        <i class="fas fa-tag"></i>
                        <span>${item.badge}</span>
                    </div>
                    <div class="modal-meta-item">
                        <i class="far fa-calendar"></i>
                        <span>${item.date}</span>
                    </div>
                    <div class="modal-meta-item">
                        <i class="fas fa-video"></i>
                        <span>${item.author}</span>
                    </div>
                    <div class="modal-meta-item">
                        <i class="far fa-clock"></i>
                        <span>${item.duration}</span>
                    </div>
                </div>
                <div class="modal-description">
                    ${item.content.split('\n').map(p => `<p>${p}</p>`).join('')}
                </div>
            </div>
        `;
    }

    DOMCache.modalContent.innerHTML = content;
    DOMCache.modal.classList.add('active');
    document.body.style.overflow = 'hidden';

    // Setup modal carousel listeners
    setupModalCarousel();
}

function setupModalCarousel() {
    const carouselBtns = DOMCache.modalContent.querySelectorAll('.modal-carousel-btn');
    carouselBtns.forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.stopPropagation();
            const direction = parseInt(this.dataset.direction);
            changeModalImage(direction);
        });
    });
}

function changeModalImage(direction) {
    if (!window.currentModalImages) return;

    const totalImages = window.currentModalImages.length;
    window.currentModalImageIndex = (window.currentModalImageIndex + direction + totalImages) % totalImages;

    const images = DOMCache.modalContent.querySelectorAll('.modal-image');
    const indicators = DOMCache.modalContent.querySelectorAll('[data-modal-indicator]');

    images.forEach((img, i) => {
        img.style.display = i === window.currentModalImageIndex ? 'block' : 'none';
    });

    indicators.forEach((ind, i) => {
        ind.classList.toggle('active', i === window.currentModalImageIndex);
    });
}

function closeModal() {
    if (!DOMCache.modal) return;

    DOMCache.modal.classList.remove('active');
    document.body.style.overflow = 'auto';

    // Nettoyer le contenu de la vidéo pour éviter qu'elle continue de jouer
    setTimeout(() => {
        if (DOMCache.modalContent) {
            DOMCache.modalContent.innerHTML = '';
        }
    }, 300);
}

// ========================================
// INTERSECTION OBSERVER OPTIMISÉ
// ========================================

function initIntersectionObserver() {
    // Déconnecter l'ancien observer s'il existe
    if (observerInstance) {
        observerInstance.disconnect();
    }

    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    observerInstance = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                observerInstance.unobserve(entry.target);
            }
        });
    }, observerOptions);

    document.querySelectorAll('.card-appear').forEach(el => {
        observerInstance.observe(el);
    });
}

// ========================================
// GESTION DU SCROLL OPTIMISÉE
// ========================================

const handleScroll = smoothScroll(() => {
    const scrollY = window.scrollY;

    // Bouton scroll to top
    if (DOMCache.scrollBtn) {
        DOMCache.scrollBtn.style.display = scrollY > 300 ? 'flex' : 'none';
    }

    // Social floating
    if (DOMCache.socialFloating) {
        DOMCache.socialFloating.classList.toggle('active', scrollY > 300);
    }

    // Sticky header
    if (DOMCache.header) {
        DOMCache.header.classList.toggle('sticky-fixed', scrollY > 230);
    }
});

// ========================================
// FILTRES
// ========================================

function filterContent(filter) {
    currentFilter = filter;

    const articlesSection = document.getElementById('actualites');
    const videosSection = document.getElementById('videos');

    if (filter === 'all') {
        articlesSection.style.display = 'block';
        videosSection.style.display = 'block';
    } else if (filter === 'article') {
        articlesSection.style.display = 'block';
        videosSection.style.display = 'none';
    } else if (filter === 'video') {
        articlesSection.style.display = 'none';
        videosSection.style.display = 'block';
    }
}

// ========================================
// INITIALISATION
// ========================================

document.addEventListener('DOMContentLoaded', function() {
    // Initialiser le cache DOM
    DOMCache.init();

    // Rendre le contenu initial
    renderArticles(1);
    renderVideos(1);

    // Page Loader
    window.addEventListener("load", function() {
        if (DOMCache.loader) {
            DOMCache.loader.classList.add("fade-out");
            setTimeout(() => {
                DOMCache.loader.style.display = "none";
            }, 600);
        }
    });

    // Scroll events avec throttling
    window.addEventListener("scroll", throttle(handleScroll, 100), { passive: true });

    // Scroll to top
    if (DOMCache.scrollBtn) {
        DOMCache.scrollBtn.addEventListener("click", function() {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        });
    }

    // Mobile nav
    const mobileNavTogglers = document.querySelectorAll('.mobile-nav-toggler');
    mobileNavTogglers.forEach(toggler => {
        toggler.addEventListener('click', function() {
            if (DOMCache.mobileNavWrapper) {
                DOMCache.mobileNavWrapper.classList.toggle('expanded');
                document.body.classList.toggle('locked');
            }
        });
    });

    // Clone menu for mobile
    const mainMenu = document.querySelector('.main-menu-list');
    const mobileNavContainer = document.querySelector('.mobile-nav-container');
    if (mainMenu && mobileNavContainer) {
        mobileNavContainer.innerHTML = mainMenu.outerHTML;
    }

    // Modal events
    if (DOMCache.modalClose) {
        DOMCache.modalClose.addEventListener('click', closeModal);
    }

    if (DOMCache.modal) {
        DOMCache.modal.addEventListener('click', function(e) {
            if (e.target === this) {
                closeModal();
            }
        });
    }

    // Escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && DOMCache.modal && DOMCache.modal.classList.contains('active')) {
            closeModal();
        }
    });

    // Filter tabs
    document.querySelectorAll('.filter-tab').forEach(tab => {
        tab.addEventListener('click', function() {
            document.querySelectorAll('.filter-tab').forEach(t => t.classList.remove('active'));
            this.classList.add('active');

            const filter = this.getAttribute('data-filter');
            filterContent(filter);
        });
    });

    // Smooth scroll for anchors
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            if (href !== '#') {
                const target = document.querySelector(href);
                if (target) {
                    e.preventDefault();
                    const offsetTop = target.offsetTop - 100;
                    window.scrollTo({
                        top: offsetTop,
                        behavior: 'smooth'
                    });
                }
            }
        });
    });

    // Déclencher le premier scroll pour initialiser les états
    handleScroll();
});

// ========================================
// OPTIMISATIONS CSS (à ajouter dans le style)
// ========================================
/*
Ajoutez ces règles CSS pour améliorer les performances:

.article-card, .video-card {
    will-change: transform;
    transform: translateZ(0);
    backface-visibility: hidden;
}

.card-appear {
    will-change: opacity, transform;
}

.modal-image, .article-image {
    will-change: opacity;
}

img {
    image-rendering: -webkit-optimize-contrast;
}
*/

</script>


</body>
</html>
