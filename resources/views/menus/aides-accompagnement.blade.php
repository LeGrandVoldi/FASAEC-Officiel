<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="canonical" href="https://fasaec.cd/aides-accompagnement" />
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
    <title>Aides & Accompagnement des Artistes en RDC | FASAEC</title>
    <meta property="og:title" content="Fonds d'Assistance Sociale aux Artistes et Ecrivains Congolais (FASAEC)" />
    <meta property="og:url" content="https://fasaec.cd" />
    <meta property="og:image" content="{{ asset('img/logo-couleur.png') }}" />
    <meta name="description" content="Découvrez les aides et programmes d’accompagnement du FASAEC en RDC : assistance sociale, soutien financier, encadrement professionnel et appui aux artistes et écrivains congolais.">
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800;900&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">

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

        /* Digital Cards */
        .digital-icon-box {
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
            width: 80px;
            height: 80px;
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            box-shadow: 0 10px 30px rgba(23, 102, 209, 0.3);
            transition: all 0.3s ease;
        }

        .digital-icon-box i {
            font-size: 2rem;
            color: var(--white);
        }

        .digital-card {
            background: var(--white);
            border-radius: 20px;
            padding: 40px 30px;
            height: 100%;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.4s ease;
            border: 2px solid transparent;
        }

        .digital-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(23, 102, 209, 0.2);
            border-color: rgba(23, 102, 209, 0.2);
        }

        .digital-card:hover .digital-icon-box {
            transform: scale(1.1) rotate(5deg);
        }

        .digital-title {
            font-weight: 700;
            font-size: 1.4rem;
            color: var(--primary);
            margin-bottom: 15px;
        }

        .digital-text {
            color: var(--muted);
            line-height: 1.8;
            font-size: 1.05rem;
        }

        /* Image Gallery */
        .image-gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            margin: 40px 0;
        }

        .gallery-item {
            position: relative;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            transition: all 0.4s ease;
        }

        .gallery-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(23,102,209,0.3);
        }

        .gallery-item img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            display: block;
            transition: all 0.4s ease;
        }

        .gallery-item:hover img {
            transform: scale(1.1);
        }

        .gallery-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(180deg, transparent 50%, rgba(23,102,209,0.9) 100%);
            display: flex;
            align-items: flex-end;
            padding: 20px;
            color: var(--white);
            font-weight: 700;
            font-size: 1.1rem;
        }

        /* Banner */
        .ai-banner {
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
            border-radius: 25px;
            padding: 50px;
            color: var(--white);
            position: relative;
            overflow: hidden;
        }

        .ai-banner::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -10%;
            width: 400px;
            height: 400px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
        }

        .ai-banner::after {
            content: '';
            position: absolute;
            bottom: -30%;
            left: -5%;
            width: 300px;
            height: 300px;
            background: rgba(255, 255, 255, 0.08);
            border-radius: 50%;
        }

        .ai-banner-content {
            position: relative;
            z-index: 1;
        }

        /* Tools Grid */
        .tool-item {
            background: var(--white);
            border-radius: 15px;
            padding: 25px;
            margin-bottom: 20px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            border-left: 4px solid var(--primary);
            position: relative;
        }

        .tool-item:hover {
            transform: translateX(10px);
            box-shadow: 0 8px 25px rgba(23, 102, 209, 0.15);
        }

        .tool-item::before {
            content: "";
            position: absolute;
            inset: 0;
            border-radius: 15px;
            background: linear-gradient(120deg, transparent, rgba(255,255,255,0.2), transparent);
            opacity: 0;
            transition: opacity 0.4s ease;
            pointer-events: none;
        }

        .tool-item:hover::before {
            opacity: 1;
        }

        .tool-icon {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            font-size: 1.3rem;
            float: left;
            margin-right: 20px;
            transition: all 0.6s ease;
        }

        .tool-item:hover .tool-icon {
            transform: rotate(360deg) scale(1.2);
        }

        .tool-content h4 {
            font-weight: 700;
            color: var(--primary);
            font-size: 1.2rem;
            margin-bottom: 8px;
        }

        .tool-content p {
            color: var(--muted);
            margin: 0;
            line-height: 1.6;
        }

        /* Process Steps */
        .process-step {
            text-align: center;
            position: relative;
            padding: 30px 20px;
        }

        .process-number {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            font-size: 2rem;
            font-weight: 800;
            color: var(--white);
            box-shadow: 0 10px 30px rgba(23, 102, 209, 0.3);
            position: relative;
            z-index: 2;
        }

        .process-step h4 {
            font-weight: 700;
            color: var(--dark);
            font-size: 1.3rem;
            margin-bottom: 15px;
        }

        .process-step p {
            color: var(--muted);
            line-height: 1.7;
        }

        @media (min-width: 768px) {
            .process-step:not(:last-child)::after {
                content: '→';
                position: absolute;
                right: -30px;
                top: 50%;
                transform: translateY(-50%);
                font-size: 2.5rem;
                color: var(--primary);
                z-index: 1;
            }
        }



        /* FAQ */
        .faq-item {
            background: var(--white);
            border-radius: 15px;
            margin-bottom: 15px;
            overflow: hidden;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.06);
            transition: all 0.3s ease;
        }

        .faq-item:hover {
            box-shadow: 0 8px 25px rgba(23, 102, 209, 0.12);
        }

        .faq-question {
            padding: 25px 30px;
            font-weight: 700;
            color: var(--dark);
            font-size: 1.15rem;
            cursor: pointer;
            position: relative;
            transition: all 0.3s ease;
        }

        .faq-question::after {
            content: '+';
            position: absolute;
            right: 30px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 1.8rem;
            color: var(--primary);
            transition: all 0.3s ease;
            margin-left: 20px;
        }

        .faq-question:hover {
            background: var(--light-bg);
            color: var(--primary);
        }

        .faq-answer {
            padding: 0 30px;
            max-height: 0;
            overflow: hidden;
            transition: all 0.4s ease;
            color: var(--muted);
            line-height: 1.8;
        }

        .faq-item.active .faq-question::after {
            content: '−';
            transform: translateY(-50%) rotate(180deg);
        }

        .faq-item.active .faq-answer {
            padding: 0 30px 25px;
            max-height: 500px;
        }

        /* CTA */
        .cta-card {
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
            border-radius: 25px;
            padding: 60px 40px;
            text-align: center;
            color: var(--white);
            position: relative;
            overflow: hidden;
        }

        .cta-card::before {
            content: '';
            position: absolute;
            top: -100px;
            right: -100px;
            width: 300px;
            height: 300px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
        }

        .cta-card h3 {
            font-weight: 800;
            font-size: clamp(1.8rem, 5vw, 2.8rem);
            margin-bottom: 20px;
            position: relative;
            z-index: 1;
            color: var(--white);
            letter-spacing: 1px;
            text-shadow: 0 4px 15px rgba(0,0,0,0.3);
        }

        .cta-card p {
            font-size: 1.2rem;
            margin-bottom: 30px;
            opacity: 0.95;
            position: relative;
            z-index: 1;
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

<script>
// Page Loader
window.addEventListener("load", function() {
    const loader = document.getElementById("page-loader");
    loader.classList.add("fade-out");
    setTimeout(() => {
        loader.style.display = "none";
    }, 600);
});

// FAQ Accordion
document.addEventListener('DOMContentLoaded', function() {
    // Scroll animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    document.querySelectorAll('.card-appear').forEach(el => {
        observer.observe(el);
    });

    // Stats counter animation
    const startCounter = (counter) => {
        const target = parseInt(counter.getAttribute('data-target'));
        let count = 0;
        const speed = target / 200;

        const updateCount = () => {
            count += speed;
            if (count < target) {
                counter.textContent = Math.floor(count);
                requestAnimationFrame(updateCount);
            } else {
                counter.textContent = target.toLocaleString() + '+';
            }
        };
        updateCount();
    };

    const artistsCounter = document.getElementById('artists-counter');
    if (artistsCounter) {
        const counterObserver = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    startCounter(entry.target);
                    counterObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.6 });

        counterObserver.observe(artistsCounter);
    }

    // FAQ Toggle
    document.querySelectorAll('.faq-question').forEach(question => {
        question.addEventListener('click', function() {
            const parent = this.parentElement;
            const wasActive = parent.classList.contains('active');

            document.querySelectorAll('.faq-item').forEach(item => {
                item.classList.remove('active');
            });

            if (!wasActive) {
                parent.classList.add('active');
            }
        });
    });

    // Smooth scroll
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

    // Mobile nav
    const mobileNavTogglers = document.querySelectorAll('.mobile-nav-toggler');
    const mobileNavWrapper = document.querySelector('.mobile-nav-wrapper');

    mobileNavTogglers.forEach(toggler => {
        toggler.addEventListener('click', function() {
            mobileNavWrapper.classList.toggle('expanded');
            document.body.classList.toggle('locked');
        });
    });

    // Clone menu for mobile
    const mainMenu = document.querySelector('.main-menu-list');
    const mobileNavContainer = document.querySelector('.mobile-nav-container');
    if (mainMenu && mobileNavContainer) {
        mobileNavContainer.innerHTML = mainMenu.outerHTML;
    }

    // Sticky header
    window.addEventListener('scroll', function() {
        const header = document.querySelector('.sticky-header');
        if (header) {
            if (window.scrollY > 230) {
                header.classList.add('sticky-fixed');
            } else {
                header.classList.remove('sticky-fixed');
            }
        }
    });
});
</script>

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
<div class="hero-section" id="aides">
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
                                <i class="fas fa-hands-helping me-3"></i>
                                Aides & Accompagnement
                            </h1>
                            <p class="hero-sub">Un soutien complet pour tous les artistes et écrivains congolais à chaque étape de leur parcours professionnel</p>
                            <div class="d-md-flex flex-md-nowrap">
                                <a href="#types-aides" class="btn btn-light btn-lg me-3 mss">
                                    <i class="fas fa-gift me-2"></i>
                                    Types d'aides
                                </a><br>
                                <a href="#comment-beneficier" class="btn btn-primary-custom btn-lg mss">
                                    <i class="fas fa-question-circle me-2"></i>
                                    Comment bénéficier
                                </a>
                            </div>
                        </div>

                        <div class="col-md-4 text-md-end mt-4 mt-md-0">
                            <div style="display:inline-block">
                                <div class="icon-circle mb-3" title="Appelez-nous">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div style="color:#fff;font-weight:700;font-size:1.2rem">+243 830 681 299</div>
                                <div style="color:rgba(255,255,255,0.8);font-size:0.9rem">Disponible 24/7</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- TYPES D'AIDES -->
<section class="content-section" id="types-aides">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title" style="display:inline-block">Types d'Aides Disponibles</h2>
            <p class="section-sub">Le FASAEC vous soutient dans tous les aspects de votre vie d'artiste</p>
        </div>

        <div class="row g-4 text-center">
            <div class="col-lg-4 col-md-6">
                <div class="digital-card card-appear" style="animation-delay:.1s">
                    <div class="digital-icon-box">
                        <i class="fas fa-heartbeat"></i>
                    </div>
                    <h3 class="digital-title">Aide Médicale</h3>
                    <p class="digital-text">Accès aux soins de santé, hospitalisation, médicaments, consultations spécialisées et couverture médicale d'urgence.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="digital-card card-appear" style="animation-delay:.2s">
                    <div class="digital-icon-box">
                        <i class="fas fa-money-bill-wave"></i>
                    </div>
                    <h3 class="digital-title">Aide Financière</h3>
                    <p class="digital-text">Soutien financier d'urgence, micro-crédits pour projets artistiques, bourses de création et fonds de solidarité.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="digital-card card-appear" style="animation-delay:.3s">
                    <div class="digital-icon-box">
                        <i class="fas fa-gavel"></i>
                    </div>
                    <h3 class="digital-title">Aide Juridique</h3>
                    <p class="digital-text">Conseil juridique gratuit, assistance dans les litiges, protection des droits d'auteur et rédaction de contrats.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="digital-card card-appear" style="animation-delay:.4s">
                    <div class="digital-icon-box">
                        <i class="fas fa-brain"></i>
                    </div>
                    <h3 class="digital-title">Soutien Psychologique</h3>
                    <p class="digital-text">Accompagnement psychologique, gestion du stress, prévention du burn-out et suivi personnalisé avec des professionnels.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="digital-card card-appear" style="animation-delay:.5s">
                    <div class="digital-icon-box">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3 class="digital-title">Formation Continue</h3>
                    <p class="digital-text">Ateliers de perfectionnement, formation aux nouvelles technologies, masterclasses avec des experts internationaux.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="digital-card card-appear" style="animation-delay:.6s">
                    <div class="digital-icon-box">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <h3 class="digital-title">Accompagnement Professionnel</h3>
                    <p class="digital-text">Coaching de carrière, mise en réseau, recherche d'opportunités et développement de votre activité artistique.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- BANNER ACCOMPAGNEMENT -->
<section class="content-section" style="background: linear-gradient(180deg, transparent, rgba(23,102,209,0.02), transparent);">
    <div class="container">
        <div class="ai-banner card-appear">
            <div class="ai-banner-content">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <h2 style="font-weight:800; font-size:2.5rem; margin-bottom:20px; color:#ffffff;">
                            Vous N'êtes Plus Seuls
                        </h2>
                        <p style="font-size:1.2rem; color:#ffffff; opacity:0.95; line-height:1.8; margin-bottom:0;">
                            Le FASAEC est votre partenaire de confiance. Nous mettons tout en œuvre pour que vous puissiez
                            vous concentrer sur votre art pendant que nous prenons soin de vos besoins sociaux et professionnels.
                        </p>
                    </div>

                    <div class="col-lg-4 text-center mt-4 mt-lg-0">
                        <div style="background:rgba(255,255,255,0.15); border-radius:20px; padding:30px; backdrop-filter:blur(10px); color:#ffffff;">
                            <div class="stat-number" id="artists-counter" style="font-size:4rem; font-weight:800; margin-bottom:10px; color:#ffffff;" data-target="1000">0</div>
                            <div style="font-size:1.2rem;opacity:0.95;">Artistes accompagnés</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- PROGRAMMES D'ACCOMPAGNEMENT -->
<section class="content-section" id="programmes">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title" style="display:inline-block">Nos Programmes d'Accompagnement</h2>
            <p class="section-sub">Des solutions adaptées à chaque situation et chaque profil d'artiste</p>
        </div>

        <div class="row g-4">
            <div class="col-lg-6">
                <div class="tool-item card-appear" style="animation-delay:.1s">
                    <div class="tool-icon">
                        <i class="fas fa-ambulance"></i>
                    </div>
                    <div class="tool-content">
                        <h4>Urgence Médicale</h4>
                        <p>Prise en charge immédiate en cas d'hospitalisation, d'accident ou de maladie grave. Intervention rapide dans les 24h.</p>
                    </div>
                    <div style="clear:both"></div>
                </div>

                <div class="tool-item card-appear" style="animation-delay:.2s">
                    <div class="tool-icon">
                        <i class="fas fa-hand-holding-usd"></i>
                    </div>
                    <div class="tool-content">
                        <h4>Fonds de Solidarité</h4>
                        <p>Aide financière pour faire face aux difficultés passagères : loyer, scolarité des enfants, besoins essentiels du quotidien.</p>
                    </div>
                    <div style="clear:both"></div>
                </div>

                <div class="tool-item card-appear" style="animation-delay:.3s">
                    <div class="tool-icon">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <div class="tool-content">
                        <h4>Incubateur de Projets</h4>
                        <p>Accompagnement complet pour développer vos projets artistiques : financement, conseil stratégique, mise en réseau.</p>
                    </div>
                    <div style="clear:both"></div>
                </div>

                <div class="tool-item card-appear" style="animation-delay:.4s">
                    <div class="tool-icon">
                        <i class="fas fa-balance-scale"></i>
                    </div>
                    <div class="tool-content">
                        <h4>Service Juridique</h4>
                        <p>Consultation juridique gratuite, médiation en cas de conflit, défense de vos droits et accompagnement dans les démarches légales.</p>
                    </div>
                    <div style="clear:both"></div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="tool-item card-appear" style="animation-delay:.5s">
                    <div class="tool-icon">
                        <i class="fas fa-user-md"></i>
                    </div>
                    <div class="tool-content">
                        <h4>Cellule d'Écoute</h4>
                        <p>Service d'accompagnement psychologique confidentiel, disponible 24/7 pour vous soutenir dans les moments difficiles.</p>
                    </div>
                    <div style="clear:both"></div>
                </div>

                <div class="tool-item card-appear" style="animation-delay:.6s">
                    <div class="tool-icon">
                        <i class="fas fa-chalkboard-teacher"></i>
                    </div>
                    <div class="tool-content">
                        <h4>Formation & Perfectionnement</h4>
                        <p>Accès gratuit à des formations professionnelles, masterclasses et ateliers pour développer vos compétences artistiques.</p>
                    </div>
                    <div style="clear:both"></div>
                </div>

                <div class="tool-item card-appear" style="animation-delay:.7s">
                    <div class="tool-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="tool-content">
                        <h4>Réseau Professionnel</h4>
                        <p>Mise en relation avec producteurs, galeries, éditeurs et autres professionnels du secteur culturel national et international.</p>
                    </div>
                    <div style="clear:both"></div>
                </div>

                <div class="tool-item card-appear" style="animation-delay:.8s">
                    <div class="tool-icon">
                        <i class="fas fa-home"></i>
                    </div>
                    <div class="tool-content">
                        <h4>Aide au Logement</h4>
                        <p>Assistance pour trouver un logement décent, médiation avec les propriétaires et aide ponctuelle au paiement du loyer.</p>
                    </div>
                    <div style="clear:both"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- IMAGES GALERIE -->


<!-- COMMENT BÉNÉFICIER -->
<section class="content-section" id="comment-beneficier" style="background: linear-gradient(180deg, transparent, rgba(23,102,209,0.02), transparent);">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title" style="display:inline-block">Comment Bénéficier de Nos Aides ?</h2>
            <p class="section-sub">Un processus simple et rapide en 4 étapes</p>
        </div>

        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="process-step card-appear" style="animation-delay:.1s">
                    <div class="process-number">1</div>
                    <h4>Inscription</h4>
                    <p>Enregistrez-vous sur la plateforme du FASAEC avec vos documents d'identité et justificatifs de profession artistique.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="process-step card-appear" style="animation-delay:.2s">
                    <div class="process-number">2</div>
                    <h4>Demande</h4>
                    <p>Remplissez le formulaire de demande d'aide en précisant votre situation et vos besoins spécifiques.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="process-step card-appear" style="animation-delay:.3s">
                    <div class="process-number">3</div>
                    <h4>Évaluation</h4>
                    <p>Notre équipe étudie votre dossier sous 48h et vous contacte pour un entretien d'évaluation de vos besoins.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="process-step card-appear" style="animation-delay:.4s">
                    <div class="process-number">4</div>
                    <h4>Accompagnement</h4>
                    <p>Bénéficiez de l'aide accordée et d'un suivi personnalisé tout au long de votre parcours avec le FASAEC.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ -->
<section class="content-section" id="faq" style="background: linear-gradient(135deg, #f8faff, #fff);">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title" style="display:inline-block">Questions Fréquentes</h2>
            <p class="section-sub">Tout savoir sur les aides et l'accompagnement du FASAEC</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="faq-item card-appear" style="animation-delay:.1s">
                    <div class="faq-question">Qui peut bénéficier des aides du FASAEC ?</div>
                    <div class="faq-answer">
                        <p>Tous les artistes et écrivains congolais identifiés auprès du FASAEC peuvent bénéficier de nos aides. Que vous soyez musicien, comédien, danseur, plasticien, écrivain ou tout autre professionnel de la culture, nos portes vous sont ouvertes. Il suffit de vous enregistrer sur notre plateforme avec vos justificatifs.</p>
                    </div>
                </div>

                <div class="faq-item card-appear" style="animation-delay:.2s">
                    <div class="faq-question">Les aides sont-elles gratuites ?</div>
                    <div class="faq-answer">
                        <p>Oui, toutes les aides et accompagnements du FASAEC sont entièrement gratuits pour les artistes identifiés. Nous sommes un fonds de solidarité dont la mission est de soutenir la communauté artistique congolaise sans contrepartie financière. Aucun frais ne vous sera jamais demandé.</p>
                    </div>
                </div>

                <div class="faq-item card-appear" style="animation-delay:.3s">
                    <div class="faq-question">Combien de temps faut-il pour obtenir une aide ?</div>
                    <div class="faq-answer">
                        <p>Le délai dépend du type d'aide demandée. Pour les urgences médicales, nous intervenons dans les 24h. Pour les aides financières, le traitement du dossier prend généralement 3 à 5 jours ouvrables. Les accompagnements de longue durée (formation, coaching) démarrent selon un calendrier convenu avec vous.</p>
                    </div>
                </div>

                <div class="faq-item card-appear" style="animation-delay:.4s">
                    <div class="faq-question">Puis-je demander plusieurs types d'aides en même temps ?</div>
                    <div class="faq-answer">
                        <p>Absolument ! Vous pouvez bénéficier simultanément de plusieurs formes d'accompagnement selon vos besoins. Par exemple, vous pouvez recevoir une aide médicale, suivre une formation et bénéficier d'un accompagnement juridique en même temps. Chaque dossier est étudié de manière holistique.</p>
                    </div>
                </div>

                <div class="faq-item card-appear" style="animation-delay:.5s">
                    <div class="faq-question">Que faire en cas d'urgence médicale ?</div>
                    <div class="faq-answer">
                        <p>Contactez immédiatement notre ligne d'urgence au +243 830 681 299 (disponible 24/7). Notre équipe mobilisera rapidement les ressources nécessaires pour votre prise en charge. Vous pouvez aussi nous écrire à info@fasaec.cd en mentionnant "URGENCE" dans l'objet.</p>
                    </div>
                </div>

                <div class="faq-item card-appear" style="animation-delay:.6s">
                    <div class="faq-question">Le FASAEC peut-il m'aider à développer mon projet artistique ?</div>
                    <div class="faq-answer">
                        <p>Oui ! Notre programme d'incubateur de projets offre un accompagnement complet : financement, conseil stratégique, mise en réseau avec des partenaires, formation en gestion de projet. Présentez-nous votre projet et nous vous aiderons à le concrétiser avec un suivi personnalisé de A à Z.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="content-section">
    <div class="container">
        <div class="cta-card text-center card-appear">
            <h3>Besoin d'Aide ? Nous Sommes Là Pour Vous</h3>
            <p>Rejoignez les milliers d'artistes qui font confiance au FASAEC pour les accompagner dans leur parcours</p>
            <div style="max-width:700px;margin:0 auto">
                <a href="https://enregistrement.capcongo.online/" target="_blank" class="btn btn-primary-custom" style="font-size: 1.1rem; padding: 18px 40px;">
                    <i class="fas fa-user-plus me-2"></i> Demander une Aide Maintenant
                </a>
            </div>
        </div>
    </div>
</section>

<!-- CONTACT INFO -->
<section class="content-section" style="background: linear-gradient(135deg, #f8faff, #fff); padding: 60px 0;">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="text-center card-appear" style="animation-delay:.1s">
                    <div class="icon-circle mb-3" style="margin:0 auto"><i class="fas fa-phone-alt"></i></div>
                    <h6 style="color:var(--primary);font-size:1.1rem;font-weight:700">Téléphone</h6>
                    <p class="mb-0" style="color:var(--muted);font-size:1.05rem"><a href="tel:+243830681299" style="text-decoration:none;color:var(--muted)">+243 830 681 299</a></p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="text-center card-appear" style="animation-delay:.2s">
                    <div class="icon-circle mb-3" style="margin:0 auto"><i class="fas fa-envelope"></i></div>
                    <h6 style="color:var(--primary);font-size:1.1rem;font-weight:700">Email</h6>
                    <p class="mb-0" style="color:var(--muted);font-size:1.05rem"><a href="mailto:info@fasaec.cd" style="text-decoration:none;color:var(--muted)">info@fasaec.cd</a></p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="text-center card-appear" style="animation-delay:.3s">
                    <div class="icon-circle mb-3" style="margin:0 auto"><i class="fas fa-map-marker-alt"></i></div>
                    <h6 style="color:var(--primary);font-size:1.1rem;font-weight:700">Adresse</h6>
                    <p class="mb-0" style="color:var(--muted);font-size:1.05rem">124 avenue Mbomu, Quartier Gbaka, Kinshasa</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="text-center card-appear" style="animation-delay:.4s">
                    <div class="icon-circle mb-3" style="margin:0 auto"><i class="fas fa-globe"></i></div>
                    <h6 style="color:var(--primary);font-size:1.1rem;font-weight:700">Site Web</h6>
                    <p class="mb-0" style="color:var(--muted);font-size:1.05rem"><a href="http://fasaec.cd" target="_blank" style="text-decoration:none;color:var(--muted)">fasaec.cd</a></p>
                </div>
            </div>
        </div>
    </div>
</section>

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

<!-- Scripts -->
{{-- <script src={{ asset("vendor/jquery/jquery.min.js") }}></script>
<script src={{ asset("vendor/bootstrap/js/bootstrap.bundle.min.js") }}></script>
<script src={{ asset("assets/js/isotope.min.js") }}></script>
<script src={{ asset("assets/js/owl-carousel.js") }}></script>
<script src={{ asset("assets/js/lightbox.js") }}></script>
<script src={{ asset("assets/js/tabs.js") }}></script>
<script src={{ asset("assets/js/video.js") }}></script>
<script src={{ asset("assets/js/slick-slider.js") }}></script>
<script src={{ asset("assets/js/custom.js") }}></script> --}}




<!-- Scroll To Top Button -->
<button class="scroll-to-top" id="scrollToTopBtn">
    <style>
            /* Scroll To Top Button */
        .scroll-to-top {
            position: fixed;
            right: 25px;
            bottom: 25px;
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, #1766d1, #0d47a1);
            color: #fff;
            border: none;
            border-radius: 50%;
            font-size: 18px;
            cursor: pointer;
            display: none;
            align-items: center;
            justify-content: center;
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
            transition: all 0.3s ease;
            z-index: 9999;
        }

        .scroll-to-top:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 30px rgba(0,0,0,0.25);
        }

    </style>
    <i class="fa-solid fa-arrow-up"></i>
    <script>
        const scrollBtn = document.getElementById("scrollToTopBtn");

        window.addEventListener("scroll", function () {
            if (window.scrollY > 300) {
                scrollBtn.style.display = "flex";
            } else {
                scrollBtn.style.display = "none";
            }
        });

        scrollBtn.addEventListener("click", function () {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        });
    </script>
</button>
<!-- Social Floating Buttons -->
<div class="social-floating" id="socialFloating">
    <style>
        /* Floating Social Buttons */
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
            z-index: 9999;
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

        /* Couleurs officielles */
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
            transition: 0.3s;
        }

        .social-btn.x:hover {
            background: #222;
            transform: translateX(5px);
        }
        .social-btn:hover {
            transform: translateX(5px) scale(1.1);
        }

        @media (max-width: 768px) {
            .social-btn {/* réduit l’espace interne */
                font-size: 14px;     /* réduit la taille du texte */
                border-top-right-radius: 2000px;
                border-bottom-right-radius: 2000px;


            }
            .social-floating{
                 left: -10px;
            }
        }


    </style>
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
    <script>
        const socialFloating = document.getElementById("socialFloating");

        window.addEventListener("scroll", function () {
            if (window.scrollY > 300) {
                socialFloating.classList.add("active");
            } else {
                socialFloating.classList.remove("active");
            }
        });
    </script>

</div>


</body>
</html>
