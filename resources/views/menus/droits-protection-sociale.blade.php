<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    {{-- JS --}}
    @verbatim
    <script type="application/ld+json?v={{ time() }}">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "FASAEC",
            "url": "https://fasaec.cd",
            "logo": "https://fasaec.cd/img/logo.png",
            "sameAs": [
                "https://www.facebook.com/share/17noYupcVM/",
                "https://www.linkedin.com/company/fonds-d’assistance-sociale-aux-artistes-et-écrivains-congolais-fasaec/"
            ]
        }
    </script>
    <script type="application/ld+json?v={{ time() }}">
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
                "https://fasaec.cd/identification-artistes",
                "https://fasaec.cd/le-fasaec",
                "https://fasaec.cd/droits-protection-sociale",
                "https://fasaec.cd/artistes-numerique-ia",
                "https://fasaec.cd/aides-accompagnement",
                "https://fasaec.cd/actualites",
                "https://fasaec.cd/contact"
            ]
        }
    </script>
    @endverbatim

    <title>Droits & Protection Sociale | FASAEC</title>
    <meta name="description" content="Le FASAEC accompagne, protège et soutient les artistes et écrivains congolais en République Démocratique du Congo.">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css?v=<?= time() ?>">
    <link rel="stylesheet" href="assets/css/templatemo-edu-meeting.css?v=<?= time() ?>">
    <link rel="stylesheet" href="assets/css/owl.css?v=<?= time() ?>">
    <link rel="stylesheet" href="assets/css/lightbox.css?v=<?= time() ?>">

    <meta property="og:title" content="Fonds d'Assistance Sociale aux Artistes et Ecrivains Congolais (FASAEC)" />
    <meta property="og:url" content="https://fasaec.cd" />
    <meta property="og:image" content="{{ asset('img/logo-couleur.png') }}" />

    <link rel="icon" type="image/png" sizes="32x32" href={{ asset('img/logo.png') }}>

    {{-- header & menu --}}



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

    <style>
        .rights-icon-box {
            background: linear-gradient(135deg, #1766d1 0%, #0d4a9f 100%);
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

        .rights-icon-box i {
            font-size: 2rem;
            color: #fff;
        }

        .rights-card {
            background: #fff;
            border-radius: 20px;
            padding: 40px 30px;
            height: 100%;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.4s ease;
            border: 2px solid transparent;
        }

        .rights-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(23, 102, 209, 0.2);
            border-color: rgba(23, 102, 209, 0.2);
        }

        .rights-card:hover .rights-icon-box {
            transform: scale(1.1) rotate(5deg);
        }

        .rights-title {
            font-family: 'Outfit', sans-serif;
            font-weight: 700;
            font-size: 1.4rem;
            color: #1766d1;
            margin-bottom: 15px;
        }

        .rights-text {
            color: #5a6c7d;
            line-height: 1.8;
            font-size: 1.05rem;
        }

        .protection-banner {
            background: linear-gradient(135deg, #1766d1 0%, #0d4a9f 100%);
            border-radius: 25px;
            padding: 50px;
            color: #fff;
            position: relative;
            overflow: hidden;
        }

        .protection-banner::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -10%;
            width: 400px;
            height: 400px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
        }

        .protection-banner::after {
            content: '';
            position: absolute;
            bottom: -30%;
            left: -5%;
            width: 300px;
            height: 300px;
            background: rgba(255, 255, 255, 0.08);
            border-radius: 50%;
        }

        .protection-banner-content {
            position: relative;
            z-index: 1;
        }

        .benefit-item {
            background: #fff;
            border-radius: 15px;
            padding: 25px;
            margin-bottom: 20px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            border-left: 4px solid #1766d1;
        }

        .benefit-item:hover {
            transform: translateX(10px);
            box-shadow: 0 8px 25px rgba(23, 102, 209, 0.15);
        }

        .benefit-icon {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, #1766d1 0%, #0d4a9f 100%);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 1.3rem;
            float: left;
            margin-right: 20px;
        }

        .benefit-content h4 {
            font-family: 'Outfit', sans-serif;
            font-weight: 700;
            color: #1766d1;
            font-size: 1.2rem;
            margin-bottom: 8px;
        }

        .benefit-content p {
            color: #5a6c7d;
            margin: 0;
            line-height: 1.6;
        }

        .process-step {
            text-align: center;
            position: relative;
            padding: 30px 20px;
        }

        .process-number {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #1766d1 0%, #0d4a9f 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            font-size: 2rem;
            font-weight: 800;
            color: #fff;
            box-shadow: 0 10px 30px rgba(23, 102, 209, 0.3);
            position: relative;
            z-index: 2;
        }

        .process-step h4 {
            font-family: 'Outfit', sans-serif;
            font-weight: 700;
            color: #1a2332;
            font-size: 1.3rem;
            margin-bottom: 15px;
        }

        .process-step p {
            color: #5a6c7d;
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
                color: #1766d1;
                z-index: 1;
            }
        }

        .faq-item {
            background: #fff;
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
            font-family: 'Outfit', sans-serif;
            font-weight: 700;
            color: #1a2332;
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
            color: #1766d1;
            transition: all 0.3s ease;
        }

        .faq-question:hover {
            background: #f8faff;
            color: #1766d1;
        }

        .faq-answer {
            padding: 0 30px;
            max-height: 0;
            overflow: hidden;
            transition: all 0.4s ease;
            color: #5a6c7d;
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

        .cta-box {
            background: linear-gradient(135deg, #1766d1 0%, #0d4a9f 100%);
            border-radius: 25px;
            padding: 60px 40px;
            text-align: center;
            color: #fff;
            position: relative;
            overflow: hidden;
        }

        .cta-box::before {
            content: '';
            position: absolute;
            top: -100px;
            right: -100px;
            width: 300px;
            height: 300px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
        }

        .cta-box h3 {
            font-family: 'Outfit', sans-serif;
            font-weight: 800;
            font-size: 2.5rem;
            margin-bottom: 20px;
            position: relative;
            z-index: 1;
        }

        .cta-box p {
            font-size: 1.2rem;
            margin-bottom: 30px;
            opacity: 0.95;
            position: relative;
            z-index: 1;
        }

        .stat-highlight {
            background: linear-gradient(135deg, #f8faff 0%, #fff 100%);
            border-radius: 20px;
            padding: 40px 30px;
            text-align: center;
            border: 2px solid rgba(23, 102, 209, 0.1);
            transition: all 0.3s ease;
        }

        .stat-highlight:hover {
            transform: translateY(-5px);
            border-color: rgba(23, 102, 209, 0.3);
            box-shadow: 0 10px 30px rgba(23, 102, 209, 0.15);
        }

        .stat-number-big {
            font-size: 3.5rem;
            font-weight: 800;
            color: #1766d1;
            font-family: 'Outfit', sans-serif;
            line-height: 1;
            margin-bottom: 10px;
        }

        .stat-label-big {
            font-size: 1.1rem;
            color: #5a6c7d;
            font-weight: 600;
        }
    </style>
</head>

<body>
<!-- Loader -->
<div id="page-loader">
    <div class="loader-content">
        <img src="img/logo1.png?v={{ time() }}" alt="FASAEC Logo" class="loader-logo">
    </div>
</div>

<script>
    window.addEventListener("load", function() {
        const loader = document.getElementById("page-loader");
        loader.classList.add("fade-out");
        setTimeout(() => {
            loader.style.display = "none";
        }, 600);
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
            <div class="col-lg-4 col-sm-4">
                <div class="right-icons">
                    <ul>
                        <li><a href="https://www.facebook.com/share/17noYupcVM/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a href="https://www.linkedin.com/company/fonds-d%E2%80%99assistance-sociale-aux-artistes-et-%C3%A9crivains-congolais-fasaec/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fa-brands fa-tiktok"></i></a></li>
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
                                    <a href="https://enregistrement.capcongo.online/" style="white-space: nowrap;">S'IDENTIFIER</a>
                                </li>
                                <li>
                                    <a href="/le-fasaec">LE FASAEC</a>
                                </li>
                                <li class="active">
                                    <a href="/droits-protection-sociale" style="white-space: nowrap;">DROITS & PROTECTION SOCIALE</a>
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
<div class="header-text hero-section" id="droits">
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
                                <i class="fas fa-balance-scale me-3"></i>
                                Droits & Protection Sociale
                            </h1>
                            <p class="hero-sub">Garantir la dignité, protéger les droits et assurer l'avenir des artistes et écrivains congolais</p>
                            <div class="d-md-flex flex-md-nowrap">
                                <a href="#vos-droits" class="btn btn-light btn-lg me-3 mss">
                                    <i class="fas fa-shield-alt me-2"></i>
                                    Vos droits
                                </a><br>
                                <a href="#prestations" class="btn btn-primary-custom btn-lg mss">
                                    <i class="fas fa-hands-helping me-2"></i>
                                    Nos prestations
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

<!-- VOS DROITS FONDAMENTAUX -->
<section class="content-section" id="vos-droits">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title" style="display:inline-block">Vos Droits Fondamentaux</h2>
            <p class="section-sub">Le FASAEC garantit et protège vos droits en tant qu'artiste ou écrivain</p>
        </div>

        <div class="row g-4 text-center">
            <div class="col-lg-4 col-md-6">
                <div class="rights-card card-appear" style="animation-delay:.1s">
                    <div class="rights-icon-box">
                        <i class="fas fa-copyright"></i>
                    </div>
                    <h3 class="rights-title">Propriété Intellectuelle</h3>
                    <p class="rights-text">Protection juridique de vos créations artistiques et littéraires. Vos œuvres sont protégées par le droit d'auteur dès leur création.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="rights-card card-appear" style="animation-delay:.2s">
                    <div class="rights-icon-box">
                        <i class="fas fa-file-contract"></i>
                    </div>
                    <h3 class="rights-title">Statut Professionnel</h3>
                    <p class="rights-text">Reconnaissance officielle de votre activité artistique avec un cadre légal protecteur et des droits sociaux garantis.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="rights-card card-appear" style="animation-delay:.3s">
                    <div class="rights-icon-box">
                        <i class="fas fa-coins"></i>
                    </div>
                    <h3 class="rights-title">Rémunération Équitable</h3>
                    <p class="rights-text">Droit à une juste rémunération pour l'exploitation de vos œuvres et prestations artistiques.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="rights-card card-appear" style="animation-delay:.4s">
                    <div class="rights-icon-box">
                        <i class="fas fa-user-shield"></i>
                    </div>
                    <h3 class="rights-title">Protection Sociale</h3>
                    <p class="rights-text">Accès à la couverture santé, aux allocations familiales et à une protection en cas de difficultés.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="rights-card card-appear" style="animation-delay:.5s">
                    <div class="rights-icon-box">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3 class="rights-title">Formation Continue</h3>
                    <p class="rights-text">Accès à des formations professionnelles pour développer vos compétences et vous adapter aux évolutions.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="rights-card card-appear" style="animation-delay:.6s">
                    <div class="rights-icon-box">
                        <i class="fas fa-landmark"></i>
                    </div>
                    <h3 class="rights-title">Représentation</h3>
                    <p class="rights-text">Droit à être représenté dans les instances de décision concernant le secteur culturel et artistique.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- PROTECTION SOCIALE BANNER -->
<section class="content-section"
    style="background:linear-gradient(180deg,transparent,rgba(23,102,209,0.2),transparent)">

    <div class="container">
        <div class="protection-banner card-appear">
            <div class="protection-banner-content">
                <div class="row align-items-center">

                    <div class="col-lg-8">
                        <h2 style="font-family:'Outfit',sans-serif;
                                   font-weight:800;
                                   font-size:2.5rem;
                                   margin-bottom:20px;
                                   color:#ffffff;">
                            Une Protection Sociale Complète
                        </h2>

                        <p style="font-size:1.2rem;
                                  color:#ffffff;
                                  opacity:0.95;
                                  line-height:1.8;
                                  margin-bottom:0;">
                            Le FASAEC assure une couverture sociale intégrale pour tous les artistes et écrivains identifiés,
                            garantissant sécurité et dignité tout au long de votre carrière.
                        </p>
                    </div>

                    <div class="col-lg-4 text-center mt-4 mt-lg-0">
                        <div style="background:rgba(255,255,255,0.15);
                                    border-radius:20px;
                                    padding:30px;
                                    backdrop-filter:blur(10px);
                                    color:#ffffff;">

                            <div class="stat-numberU" id="counter"
                                 style="font-size:4rem;
                                        font-weight:800;
                                        margin-bottom:10px;" data-target="7000">
                                0
                            </div>

                            <div style="font-size:1.2rem;opacity:0.95;">
                                Artistes protégés
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script>
        const countersU = document.querySelectorAll('.stat-numberU');

        const startCounterU = (counter) => {
            const target = +counter.getAttribute('data-target');
            let count = 0;
            const speed = target / 200;
            const updateCount = () => {
                count += speed;
                if(count < target){
                    counter.innerText = Math.floor(count);
                    requestAnimationFrame(updateCount);
                } else {
                    const plusValues = [7000]; // valeurs qui doivent avoir +
                    counter.innerText = target.toLocaleString() +
                        (plusValues.includes(target) ? "+" : "");
                }
            }
            updateCount();
        };

        const observerU = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if(entry.isIntersecting){
                    startCounterU(entry.target);
                    observerU.unobserve(entry.target);
                }
            });
        }, { threshold: 0.6 });

        countersU.forEach(counter => {
            observerU.observe(counter);
        });
    </script>
</section>


<!-- NOS PRESTATIONS -->
<section class="content-section" id="prestations">
    <style>
        /* Animation générale des cartes */
        .benefit-item{
            transition: all 0.4s ease;
            cursor: pointer;
        }

        /* Effet hover sur le bloc */
        .benefit-item:hover{
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }

        /* Animation de l’icône */
        .benefit-icon i{
            transition: transform 0.6s ease, color 0.4s ease;
        }

        /* Rotation + effet couleur */
        .benefit-item:hover .benefit-icon i{
            transform: rotate(360deg) scale(1.2);
            color: #FAFBFC;
        }

        /* Optionnel : petit effet lumineux subtil */
        .benefit-item::before{
            content:"";
            position:absolute;
            inset:0;
            border-radius:15px;
            background:linear-gradient(120deg,transparent,rgba(255,255,255,0.2),transparent);
            opacity:0;
            transition:opacity 0.4s ease;
            pointer-events:none;
        }

        .benefit-item:hover::before{
            opacity:1;
        }
    </style>
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title" style="display:inline-block">Nos Prestations</h2>
            <p class="section-sub">Un accompagnement concret au quotidien</p>
        </div>

        <div class="row g-4">
            <div class="col-lg-6">
                <div class="benefit-item card-appear" style="animation-delay:.1s">
                    <div class="benefit-icon">
                        <i class="fas fa-heartbeat"></i>
                    </div>
                    <div class="benefit-content">
                        <h4>Assistance Santé</h4>
                        <p>Prise en charge des soins médicaux, hospitalisation d'urgence, et accès à des consultations spécialisées pour vous et votre famille.</p>
                    </div>
                    <div style="clear:both"></div>
                </div>

                <div class="benefit-item card-appear" style="animation-delay:.2s">
                    <div class="benefit-icon">
                        <i class="fas fa-home"></i>
                    </div>
                    <div class="benefit-content">
                        <h4>Aide au Logement</h4>
                        <p>Soutien financier pour le loyer en cas de difficultés temporaires et accompagnement dans l'accès à un logement décent.</p>
                    </div>
                    <div style="clear:both"></div>
                </div>

                <div class="benefit-item card-appear" style="animation-delay:.3s">
                    <div class="benefit-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <div class="benefit-content">
                        <h4>Bourses de Formation</h4>
                        <p>Accès à des formations professionnelles, ateliers spécialisés et programmes de perfectionnement artistique.</p>
                    </div>
                    <div style="clear:both"></div>
                </div>

                <div class="benefit-item card-appear" style="animation-delay:.4s">
                    <div class="benefit-icon">
                        <i class="fas fa-baby"></i>
                    </div>
                    <div class="benefit-content">
                        <h4>Allocations Familiales</h4>
                        <p>Soutien financier pour l'éducation des enfants, aide à la scolarité et assistance en cas de naissance.</p>
                    </div>
                    <div style="clear:both"></div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="benefit-item card-appear" style="animation-delay:.5s">
                    <div class="benefit-icon">
                        <i class="fas fa-hands-helping"></i>
                    </div>
                    <div class="benefit-content">
                        <h4>Aide d'Urgence</h4>
                        <p>Assistance financière immédiate en cas de situation critique : décès, maladie grave, accident ou catastrophe naturelle.</p>
                    </div>
                    <div style="clear:both"></div>
                </div>

                <div class="benefit-item card-appear" style="animation-delay:.6s">
                    <div class="benefit-icon">
                        <i class="fas fa-gavel"></i>
                    </div>
                    <div class="benefit-content">
                        <h4>Conseil Juridique</h4>
                        <p>Accompagnement dans vos démarches juridiques, protection de vos droits d'auteur et médiation en cas de litiges.</p>
                    </div>
                    <div style="clear:both"></div>
                </div>

                <div class="benefit-item card-appear" style="animation-delay:.7s">
                    <div class="benefit-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <div class="benefit-content">
                        <h4>Accompagnement Professionnel</h4>
                        <p>Structuration de votre activité, aide à la création d'entreprise culturelle et accès aux circuits professionnels.</p>
                    </div>
                    <div style="clear:both"></div>
                </div>

                <div class="benefit-item card-appear" style="animation-delay:.8s">
                    <div class="benefit-icon">
                        <i class="fas fa-laptop"></i>
                    </div>
                    <div class="benefit-content">
                        <h4>Transition Numérique</h4>
                        <p>Formation aux outils numériques, aide à la digitalisation de vos œuvres et protection contre le piratage.</p>
                    </div>
                    <div style="clear:both"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- PROCESSUS D'ACCÈS -->
<section class="content-section" style="background:linear-gradient(135deg,#f8faff,#fff)">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title" style="display:inline-block">Comment Accéder à Vos Droits ?</h2>
            <p class="section-sub">Un processus simple en 4 étapes</p>
        </div>

        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="process-step card-appear" style="animation-delay:.1s">
                    <div class="process-number">1</div>
                    <h4>Identification</h4>
                    <p>Inscrivez-vous sur notre plateforme d'enregistrement en ligne avec vos documents justificatifs & veuillez à entrer correctement votre mail et numéro de télephone. cliquez <a href="https://enregistrement.capcongo.online/" target="_blank" rel="noopener noreferrer" style="color: #69ADF0">ici</a></p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="process-step card-appear" style="animation-delay:.2s">
                    <div class="process-number">2</div>
                    <h4>Validation</h4>
                    <p>Votre dossier est étudié et validé par nos équipes dans un délai d'une semaine.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="process-step card-appear" style="animation-delay:.3s">
                    <div class="process-number">3</div>
                    <h4>Activation</h4>
                    <p>Recevez votre carte professionnelle et accédez à tous vos droits et prestations.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="process-step card-appear" style="animation-delay:.4s">
                    <div class="process-number">4</div>
                    <h4>Accompagnement</h4>
                    <p>Bénéficiez d'un suivi personnalisé et d'une assistance continue tout au long de votre carrière.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- STATISTIQUES -->

<section class="container my-5">
        <div class="stats-section container">
            <div class="row text-center g-4">

                <div class="col-6 col-md-3">
                    <div class="stat-card">
                        <span class="stat-number" data-target="7000">0</span>
                        <span class="stat-label">Artistes protégés</span>
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="stat-card">
                        <span class="stat-number" data-target="40">0</span>
                        <span class="stat-label">Parrainages sociaux</span>
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="stat-card">
                        <span class="stat-number" data-target="100">0</span>
                        <span class="stat-label">Urgences traitées</span>
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="stat-card">
                        <span class="stat-number" data-target="50">0</span>
                        <span class="stat-label">Années d'expérience</span>
                    </div>
                </div>

            </div>
        </div>
        <script>
            const counters = document.querySelectorAll('.stat-number');

            const startCounter = (counter) => {
                const target = +counter.getAttribute('data-target');
                let count = 0;
                const speed = target / 200;
                const updateCount = () => {
                    count += speed;
                    if(count < target){
                        counter.innerText = Math.floor(count) +
                            (target === 100 ? "%" : "");
                        requestAnimationFrame(updateCount);
                    } else {

                        const plusValues = [7000, 40, 50]; // valeurs avec +

                        let suffix = "";

                        if(target === 100){
                            suffix = "%";
                        }
                        else if(plusValues.includes(target)){
                            suffix = "+";
                        }

                        counter.innerText = target.toLocaleString() + suffix;
                    }

                }
                updateCount();
            };

            const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if(entry.isIntersecting){
                        startCounter(entry.target);
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.6 });

            counters.forEach(counter => {
                observer.observe(counter);
            });
        </script>
</section>

<!-- FAQ -->
<section class="content-section" id="faq" style="background:linear-gradient(180deg,transparent,rgba(23,102,209,0.02),transparent)">
    <style>
        /* Si ton + est dans ::after */
        #faq .faq-question::after{
            margin-left: 15px;
        }

        /* Si ton + est un span ou un élément à droite */
        #faq .faq-question span,
        #faq .faq-question i{
            margin-left: 15px;
        }

        /* Version mobile encore plus espacée */
        @media (max-width: 768px){
            #faq .faq-question::after,
            #faq .faq-question span,
            #faq .faq-question i{
                margin-left: 20px;
            }
        }

        </style>

    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title" style="display:inline-block">Questions Fréquentes</h2>
            <p class="section-sub">Tout ce que vous devez savoir sur vos droits</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="faq-item card-appear" style="animation-delay:.1s">
                    <div class="faq-question">Qui peut bénéficier de la protection sociale du FASAEC ?</div>
                    <div class="faq-answer">
                        <p>Tous les artistes et écrivains congolais exerçant une activité artistique ou littéraire de manière professionnelle ou régulière peuvent s'identifier auprès du FASAEC. Cela inclut les musiciens, peintres, sculpteurs, comédiens, danseurs, photographes, écrivains, poètes et tous les créateurs culturels.</p>
                    </div>
                </div>

                <div class="faq-item card-appear" style="animation-delay:.2s">
                    <div class="faq-question">Quels documents sont nécessaires pour l'identification ?</div>
                    <div class="faq-answer">
                        <p>Vous devez fournir : une pièce d'identité valide, un justificatif de résidence, des preuves de votre activité artistique (portfolio, publications, attestations de performances, etc.) et une photo d'identité récente. Pour les écrivains, des copies de vos œuvres publiées ou manuscrits.</p>
                    </div>
                </div>

                <div class="faq-item card-appear" style="animation-delay:.3s">
                    <div class="faq-question">Comment sont protégées mes œuvres artistiques ?</div>
                    <div class="faq-answer">
                        <p>Le FASAEC travaille en collaboration avec les organismes de gestion collective pour assurer la protection juridique de vos créations. Nous vous accompagnons dans le dépôt légal de vos œuvres, la gestion des droits d'auteur et la lutte contre le piratage. Vos œuvres sont protégées dès leur création.</p>
                    </div>
                </div>

                <div class="faq-item card-appear" style="animation-delay:.4s">
                    <div class="faq-question">Comment faire une demande d'aide d'urgence ?</div>
                    <div class="faq-answer">
                        <p>En cas d'urgence (maladie grave, accident, décès dans la famille), contactez immédiatement notre ligne d'urgence au +243 830 681 299. Vous pouvez également vous présenter directement à nos bureaux avec les documents justifiant votre situation. Notre équipe traitera votre demande en priorité.</p>
                    </div>
                </div>

                <div class="faq-item card-appear" style="animation-delay:.5s">
                    <div class="faq-question">Les prestations sont-elles gratuites ?</div>
                    <div class="faq-answer">
                        <p>Oui, l'identification et l'accès aux prestations de base du FASAEC sont entièrement gratuits pour tous les artistes et écrivains congolais. Certains services spécialisés peuvent nécessiter une participation symbolique, mais l'assistance sociale d'urgence reste toujours gratuite.</p>
                    </div>
                </div>

                <div class="faq-item card-appear" style="animation-delay:.6s">
                    <div class="faq-question">Puis-je bénéficier d'une couverture santé pour ma famille ?</div>
                    <div class="faq-answer">
                        <p>Oui, une fois identifié, vous et votre famille proche (conjoint et enfants à charge) bénéficiez d'une couverture santé de base. Cette couverture inclut les consultations médicales, les soins d'urgence et certains médicaments essentiels selon les modalités définies.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->


<section class="content-section" id="contact">
    <style>
        #contact .cta-card h3{
            color: #ffffff;
            font-weight: 800;
            font-family: 'Outfit', sans-serif;
            letter-spacing: 1px;
            text-shadow: 0 4px 15px rgba(0,0,0,0.3);

            /* Taille responsive automatique */
            font-size: clamp(1.8rem, 5vw, 2.8rem);
        }
    </style>
        <div class="container">
            <div class="cta-card text-center card-appear">
                <h3>Protégez Vos Droits Aujourd'hui</h3>
                <p>Rejoignez les milliers d'artistes et écrivains qui bénéficient déjà de la protection du FASAEC</p>
                <div style="max-width:700px;margin:0 auto">
                    <a href="https://enregistrement.capcongo.online/" target="_blank" class="btn btn-primary-custom ppp" style="white-space:nowrap;">
                        <i class="fas fa-user-plus me-2"></i> Je m'identifie
                    </a>
                </div>
            </div>
        </div>
    </section>

<!-- CONTACT INFO -->
<section class="content-section" style="background:linear-gradient(135deg,#f8faff,#fff);padding:60px 0">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="text-center card-appear" style="animation-delay:.1s">
                    <div class="icon-circle mb-3" style="margin:0 auto"><i class="fas fa-phone-alt"></i></div>
                    <h6 class="fw-bold" style="font-family:'Outfit',sans-serif;color:var(--primary);font-size:1.1rem">Téléphone</h6>
                    <p class="mb-0" style="color:var(--muted);font-size:1.05rem"><a href="tel:+243830681299">+243 830 681 299</a></p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="text-center card-appear" style="animation-delay:.2s">
                    <div class="icon-circle mb-3" style="margin:0 auto"><i class="fas fa-envelope"></i></div>
                    <h6 class="fw-bold" style="font-family:'Outfit',sans-serif;color:var(--primary);font-size:1.1rem">Email</h6>
                    <p class="mb-0" style="color:var(--muted);font-size:1.05rem"><a href="mailto:info@fasaec.cd">info@fasaec.cd</a></p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="text-center card-appear" style="animation-delay:.3s">
                    <div class="icon-circle mb-3" style="margin:0 auto"><i class="fas fa-map-marker-alt"></i></div>
                    <h6 class="fw-bold" style="font-family:'Outfit',sans-serif;color:var(--primary);font-size:1.1rem">Adresse</h6>
                    <p class="mb-0" style="color:var(--muted);font-size:1.05rem">124 avenue Mbomu, Quartier Gbaka, Kinshasa</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="text-center card-appear" style="animation-delay:.4s">
                    <div class="icon-circle mb-3" style="margin:0 auto"><i class="fas fa-globe"></i></div>
                    <h6 class="fw-bold" style="font-family:'Outfit',sans-serif;color:var(--primary);font-size:1.1rem">Site Web</h6>
                    <p class="mb-0" style="color:var(--muted);font-size:1.05rem"><a href="http://fasaec.cd" target="_blank">fasaec.cd</a></p>
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
                        <a href="https://www.linkedin.com/company/fonds-d%E2%80%99assistance-sociale-aux-artistes-et-%C3%A9crivains-congolais-fasaec/" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                        <a href="#" target="_blank"><i class="fa-brands fa-x-twitter"></i></a>
                        <a href="#" target="_blank"><i class="fa-brands fa-tiktok"></i></a>
                        <a href="#" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="footer-widget">
                        <div class="footer-widget-explore">
                            <h4 class="footer-widget-title">Explorer</h4>
                            <ul class="list-unstyled">
                                <li><a href="/">ACCUEIL</a></li>
                                <li><a href="/le-fasaec">LE FASAEC</a></li>
                                <li><a href="/droits-protection-sociale">DROITS & PROTECTION SOCIALE</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="footer-widget">
                        <div class="footer-widget-department">
                            <h4 class="footer-widget-title">Organismes</h4>
                            <ul class="list-unstyled">
                                <li><a href="https://culture.gouv.cd/" target="_blank">LE MINISTERE DE LA CULTURE</a></li>
                                <li><a href="https://enregistrement.capcongo.online/" target="_blank">PLATEFORME D'ENREGISTREMENT</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="footer-widget">
                        <div class="footer-widget-contact">
                            <h4 class="footer-widget-title">Contact</h4>
                            <p style="text-align:left">124 avenue Mbomu, Quartier Gbaka, Commune Kinshasa, Ville Kinshasa, République Démocratique du Congo</p>
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
            <li><a href="#" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></li>
            <li><a href="#" target="_blank"><i class="fa-brands fa-tiktok"></i></a></li>
            <li><a href="#" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
        </ul>
    </div>
</div>

<!-- Scripts -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/isotope.min.js"></script>
<script src="assets/js/owl-carousel.js"></script>
<script src="assets/js/lightbox.js"></script>
<script src="assets/js/tabs.js"></script>
<script src="assets/js/video.js"></script>
<script src="assets/js/slick-slider.js"></script>
<script src="assets/js/custom.js"></script>

<script>
$(document).ready(function(){
    "use strict";

    // FAQ Accordion
    $('.faq-question').on('click', function() {
        const parent = $(this).parent();
        const wasActive = parent.hasClass('active');

        $('.faq-item').removeClass('active');

        if (!wasActive) {
            parent.addClass('active');
        }
    });

    // Scroll animations
    if ($('.card-appear').length) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, { threshold: 0.1 });

        $('.card-appear').each(function() {
            $(this).css({
                'opacity': '0',
                'transform': 'translateY(30px)',
                'transition': 'all 0.6s ease'
            });
            observer.observe(this);
        });
    }

    // Mobile nav
    if($('.mobile-nav-wrapper').length) {
        $('.mobile-nav-toggler').on('click',function() {
            $('.mobile-nav-wrapper').toggleClass('expanded');
            $('body').toggleClass('locked');
        });

        var menu_content = $('.main-menu .navigation ul')[0].outerHTML;
        $('.mobile-nav-container').html(menu_content);
        $('.mobile-nav-container .main-menu-list li.has-dropdown > a').append('<button><i class="fa-solid fa-chevron-right"></i></button>');
        $('.mobile-nav-container .main-menu-list li.has-dropdown > a button').on('click',function() {
            $(this).toggleClass('expanded');
            $(this).parents('a').siblings('ul').slideToggle();
        });
    }

    // Sticky header
    $(window).on("scroll", function () {
        if ($(".sticky-header").length) {
            var headerScrollPos = 230;
            var stricky = $(".sticky-header");
            if ($(window).scrollTop() > headerScrollPos) {
                setTimeout(function() {
                    stricky.addClass("sticky-fixed");
                },100);
                stricky.addClass("sticky-header--cloned");
            } else if ($(this).scrollTop() <= headerScrollPos) {
                stricky.removeClass("sticky-fixed");
                stricky.removeClass("sticky-header--cloned");
            }
        }
    });

    // Smooth scroll
    $('a[href^="#"]').on('click', function(e) {
        var target = $(this.getAttribute('href'));
        if(target.length) {
            e.preventDefault();
            $('html, body').stop().animate({
                scrollTop: target.offset().top - 100
            }, 1000);
        }
    });
});

$(window).on('load', function () {
    $('body').addClass('loaded');
});
</script>

</body>
</html>
