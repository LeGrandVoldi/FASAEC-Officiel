<!DOCTYPE html>
<html lang="en">
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

    <title>FASAEC – Fonds d’Assistance Sociale aux Artistes et Écrivains Congolais</title>
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

  </head>
<body>
<!-- Loader -->
<div id="page-loader">
    <div class="loader-content">
        <img src="{{ asset('img/logo1.png') }}" alt="FASAEC Logo" class="loader-logo">
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
            <li><a href="#"><i class="fa-brands fa-tiktok" target="_blank"></i></a></li>
            </ul>
        </div>
        </div>
    </div>
    </div>
  </div>

  <header class="header header-area header-sticky">
	<div class="topbar-one">
		<div class="topbar-one-left">
			<div class="menu-logo">
                <a href="{{ route('accueil') }}">
                    <img id="logo-transparent" src="{{ asset('img/logo-transparant.png') }}?v={{ time() }}" width="160" alt="logo transparent">
                    <img id="logo-couleur" src="{{ asset('img/logo-couleur.png') }}?v={{ time() }}" width="160" alt="logo couleur">
                </a>
            </div>

		</div><!-- topbar-one-left -->
		<div class="container">
			<div class="topbar-one-middle">
				<div class="topbar-info">
					<ul>
						<li>
							<div class="topbar-icon">
								<i class="fa-solid fa-envelope"></i>
							</div><!-- topbar-icon -->
							<div class="topbar-text">
								<a href="mailto:info@fasaec.cd">info@fasaec.cd</a>
							</div><!-- topbar-text -->
						</li><!-- li -->

					</ul><!-- ul -->
				</div><!--topbar-info-->
				<div class="topbar-right">
					<ul>
						<li>124 avenue Mbomu
                            Quartier : Gbaka
                            Commune : Kinshasa
                            Ville Kinshasa
                            République Démocratique du Congoe</li>

					</ul><!-- ul -->
				</div><!--topbar-right-->
			</div><!--topbar-one-middle-->
			<div class="main-menu menu-two sticky-header">
				<div class="main-menu-one-inner">
					<div class="main-menu-left">
						<nav class="navigation">
							<ul class="main-menu-list list-unstyled">
								<li class="active">
									<a href="/">ACCUEIL</a>
								</li><!-- has-dropdown -->
                                <li>
									<a href="https://enregistrement.capcongo.online/" style="white-space: nowrap;">S'IDENTIFIER EN TANT QU'ARTISTES</a>
								</li><!-- has-dropdowfn -->
								<li>
									<a href="/le-fasaec">LE FASAEC</a>
								</li><!-- has-dropdowfn -->
								{{-- <li>
									<a href="/droits-protection-sociale" style="white-space: nowrap; ">DROITS & PROTECTION SOCIALE</a>
								</li><!-- has-dropdown -->
								<li>
									<a href="/artistes-numerique-ia">ARTISTES & NUMÉRIQUE / IA</a>
								</li><!-- has-dropdown -->
								<li>
									<a href="/aides-accompagnement">AIDES & ACCOMPAGNEMENT</a>
								</li><!--has-dropdown-->
								<li>
									<a href="/actualites">ACTUALITÉS & RESSOURCES</a>
								</li>
                                <li>
									<a href="/contact">CONTACT & ORIENTATION</a>
								</li> --}}
                                <li></li><br><!-- li -->
							</ul><!-- main-menu-list -->
						</nav><!-- navigation -->
					</div><!-- main-menu-left -->

					<div class="main-menu-right">
						<div class="mobile-menu-button mobile-nav-toggler">
							<span class="span"></span>
							<span class="span"></span>
							<span class="span"></span>
						</div><!-- mobile-menu-button -->

					</div><!-- main-menu-right -->
				</div><!-- main-menu-one-inner -->
			</div><!-- main-menu menu-two -->
		</div><!-- container -->

	</div><!-- topbar-one -->
  </header>

  <!-- HERO -->
  <div class="header-text hero-section" id="accueil">
    <div class="hero-bg" aria-hidden="true"></div>
    <div class="hero-shape s1" aria-hidden="true"></div>
    <div class="hero-shape s2" aria-hidden="true"></div>
    <div class="hero-shape s3" aria-hidden="true"></div>

    <div class="container">
        <br><br>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="hero-card">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                           <h1 class="hero-title">
                                <img class="logo-small" src="{{ asset('img/logo1.png') }}" alt="Logo" />
                                LE FASAEC
                            </h1>
                            <p class="hero-sub">Fonds d'Assistance Sociale aux Artistes et Écrivains Congolais  Pont Numérique de la Culture &amp; du Social</p>
                            <div class="d-md-flex flex-md-nowrap">
                                <a href="#missions" class="btn btn-light btn-lg me-3 mss">
                                    <i class="fas fa-compass me-2"></i>
                                    Nos missions
                                </a><br>
                                <a href="#contact" class="btn btn-primary-custom btn-lg mss">
                                    <i class="fas fa-user-check me-2"></i>S'identifier
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

      <!-- ABOUT -->
    <section class="content-section" id="qui-sommes-nous">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="about-image" style="animation-delay:.1s;">
                        <img src="https://fasaec.cd/img/mission1-couleur.jpg" style="border-radius: 10px;" alt="Artistes et Écrivains">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card-appear" style="animation-delay:.2s">
                        <h2 class="section-title" style="white-space: nowrap"><i class="fas fa-info-circle me-3"></i>Qui sommes-nous ?</h2>
                        <p class="section-sub" style="text-align:justify;">Le FASAEC est un service public spécialisé sous la tutelle du Ministère de la Culture, Arts et Patrimoine.</p>
                        <p style="color:var(--muted);line-height:1.8;font-size:1.05rem; text-align:justify;">
                            Nous assurons la <strong style="color:var(--primary)">protection sociale</strong>,
                            l'<strong style="color:var(--primary)">accompagnement professionnel</strong> et
                            l'<strong style="color:var(--primary)">intégration durable</strong> des artistes et écrivains congolais
                            dans la vie économique et culturelle. Nous aidons aussi à la transition numérique et à la protection juridique des œuvres.
                        </p>
                        <div class="mt-4 p-4 d-flex align-items-center gap-3" style="background:linear-gradient(135deg,#f8faff,#fff);border-radius:15px;border:1px solid rgba(23,102,209,0.1)">
                            <img src="https://fasaec.cd/img/logo1.png" alt="Logo" style="max-width:120px;opacity:.95">
                            <div>
                                <div style="font-weight:800;color:var(--primary);font-size:1.1rem;font-family:'Outfit',sans-serif">
                                    <i class="fas fa-bridge me-2"></i>Pont Numérique de la Culture &amp; du Social
                                </div>
                                <div style="color:var(--muted);font-size:1rem;margin-top:5px">
                                    <i class="fas fa-map-marker-alt me-2"></i>124 avenue Mbomu, Quartier Gbaka, Kinshasa
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- MISSIONS -->
    <section class="content-section" id="missions" style="background:linear-gradient(180deg,transparent,rgba(23,102,209,0.02),transparent)">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title" style="display:inline-block">Nos Missions</h2>
                <p class="section-sub">Le FASAEC intervient autour de cinq axes majeurs</p>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="mission-card card-appear" style="animation-delay:.1s">
                        <div class="mission-icon"><i class="fas fa-hands-helping"></i></div>
                        <div>
                            <h3 class="mission-title">Assistance sociale</h3>
                            <p class="mission-text">Soutenir les artistes et écrivains dans les situations de vulnérabilité (santé, famille, urgences).</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="mission-card card-appear" style="animation-delay:.2s">
                        <div class="mission-icon"><i class="fas fa-balance-scale"></i></div>
                        <div>
                            <h3 class="mission-title">Statut de l'Artiste</h3>
                            <p class="mission-text">Mettre en œuvre le cadre légal qui protège les droits et devoirs des artistes en RDC.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="mission-card card-appear" style="animation-delay:.3s">
                        <div class="mission-icon"><i class="fas fa-user-graduate"></i></div>
                        <div>
                            <h3 class="mission-title">Accompagnement professionnel</h3>
                            <p class="mission-text">Formation, structuration des activités et accès aux circuits professionnels.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="mission-card card-appear" style="animation-delay:.4s">
                        <div class="mission-icon"><i class="fas fa-laptop-code"></i></div>
                        <div>
                            <h3 class="mission-title">Transition numérique</h3>
                            <p class="mission-text">Soutenir l'adoption des outils numériques et l'usage éthique de l'IA dans la création.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="mission-card card-appear" style="animation-delay:.5s">
                        <div class="mission-icon"><i class="fas fa-shield-alt"></i></div>
                        <div>
                            <h3 class="mission-title">Protection des œuvres</h3>
                            <p class="mission-text">Protéger juridiquement, économiquement et numériquement les créations artistiques.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- VISION -->
    <section class="content-section" id="vision">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title" style="display:inline-block">Notre Vision</h2>
                <p class="section-sub">Un secteur culturel congolais d'excellence</p>
            </div>

            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="vision-card card-appear" style="animation-delay:.1s">
                        <div class="vision-icon"><i class="fas fa-heart"></i></div>
                        <h4 class="vision-title">Socialement protégé</h4>
                        <p class="vision-text">Une protection sociale complète pour tous les artistes et écrivains.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="vision-card card-appear" style="animation-delay:.2s">
                        <div class="vision-icon"><i class="fas fa-briefcase"></i></div>
                        <h4 class="vision-title">Professionnellement structuré</h4>
                        <p class="vision-text">Un secteur organisé avec des standards professionnels reconnus.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="vision-card card-appear" style="animation-delay:.3s">
                        <div class="vision-icon"><i class="fas fa-rocket"></i></div>
                        <h4 class="vision-title">Numériquement préparé</h4>
                        <p class="vision-text">Des artistes équipés pour l'ère numérique et l'intelligence artificielle.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="vision-card card-appear" style="animation-delay:.4s">
                        <div class="vision-icon"><i class="fas fa-trophy"></i></div>
                        <h4 class="vision-title">Reconnu comme levier</h4>
                        <p class="vision-text">Un pilier du développement et de la cohésion nationale.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- STATS -->
    <section class="container my-5">
        <div class="stats-section container">
            <div class="row text-center g-4">

                <div class="col-6 col-md-3">
                    <div class="stat-card">
                        <span class="stat-number" data-target="7000">0</span>
                        <span class="stat-label">Identifications</span>
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
                        <span class="stat-number" data-target="50">0</span>
                        <span class="stat-label">Années d'expérience</span>
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="stat-card">
                        <span class="stat-number" data-target="9">0</span>
                        <span class="stat-label">Directions provinciales</span>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <script>
        const counters = document.querySelectorAll('.stat-number');

        const startCounter = (counter) => {
            const target = +counter.getAttribute('data-target');
            let count = 0;
            const speed = target / 200;
            const updateCount = () => {
                count += speed;
                if(count < target){
                    counter.innerText = Math.floor(count);
                    requestAnimationFrame(updateCount);
                } else {
                    const plusValues = [7000, 40, 50]; // valeurs qui doivent avoir +
                    counter.innerText = target.toLocaleString() +
                        (plusValues.includes(target) ? "+" : "");
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

    <!-- CTA -->
    <section class="content-section" id="contact">
        <div class="container">
            <div class="cta-card text-center card-appear">
                <div style="max-width:700px;margin:0 auto">
                   <h3 class="cta-title">
                        <i class="fas fa-users me-3"></i>
                        Rejoignez la Communauté FASAEC
                    </h3>
                    <p class="ppp" style="color:rgba(255,255,255,0.9);margin-bottom:30px;font-size:1.15rem;line-height:1.7">
                        Ensemble, construisons un avenir meilleur pour les artistes et écrivains congolais.
                        Bénéficiez d'une protection sociale, d'un accompagnement professionnel et d'une reconnaissance officielle.
                    </p>
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
                            <a href="{{ route('accueil') }}"><img src="{{ asset('img/logo-transparant.png') }}?v={{ time() }}"  alt="img-25"></a>
                        </div><!-- footer-widget-logo -->
                        <div class="footer-widget-text">
                            <p>FASAEC : Pont Numérique de la Culture & du Social</p>
                        </div><!-- footer-widget-text -->
                        <div class="footer-widget-socials">
                            <a href="https://www.facebook.com/share/17noYupcVM/" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                            <a href="https://www.linkedin.com/company/fonds-d%E2%80%99assistance-sociale-aux-artistes-et-%C3%A9crivains-congolais-fasaec/" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                            <a href="#" target="_blank"><i class="fa-brands fa-x-twitter"></i></a>
                            <a href="#" target="_blank"><i class="fa-brands fa-tiktok"></i></a>
                            <a href="#" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                        </div><!-- footer-widget-socials -->
                    </div><!--col-lg-4-->
                    <div class="col-lg-3">
                        <div class="footer-widget">
                            <div class="footer-widget-explore">
                                <h4 class="footer-widget-title">Explorer</h4>
                                <ul class="list-unstyled">
                                    <li>
									<a href="#">LE FASAEC</a>
								</li><!-- has-dropdowfn -->
								<li>
									<a href="#" style="white-space: nowrap; ">DROITS & PROTECTION SOCIALE</a>
								</li><!-- has-dropdown -->
								<li>
									<a href="#">ARTISTES & NUMÉRIQUE / IA</a>
								</li><!-- has-dropdown -->
								<li>
									<a href="#">AIDES & ACCOMPAGNEMENT</a>
								</li><!--has-dropdown-->
								<li>
									<a href="#">ACTUALITÉS & RESSOURCES</a>
								</li>
                                <li>
									<a href="#">CONTACT & ORIENTATION</a>
								</li>
                                </ul><!-- list-unstyled -->
                            </div><!-- footer-widget-explore -->
                        </div><!--footer-widget-->
                    </div><!--col-lg-3-->
                    <div class="col-lg-2">
                        <div class="footer-widget">
                            <div class="footer-widget-department">
                                <h4 class="footer-widget-title">Organismes</h4>
                                <ul class="list-unstyled">
                                    <li><a href="https://culture.gouv.cd/" target="_blank">LE MINISTERE DE LA CULTURE, ARTS & PATRIMOINE</a></li>
                                    <li><a href="https://enregistrement.capcongo.online/" target="_blank">PLATEFORME D'ENREGISTREMENT D'ARTISTES </a></li>

                                </ul><!-- list-unstyled -->
                            </div><!-- footer-widget-department -->
                        </div><!--footer-widget-->
                    </div><!--col-lg-2-->
                    <div class="col-lg-3">
                        <div class="footer-widget">
                            <div class="footer-widget-contact">
                                <h4 class="footer-widget-title">Contact</h4>
                                <p style="text-align:left">124 avenue Mbomu Quartier : Gbaka Commune : Kinshasa Ville Kinshasa République Démocratique du Congo</p>
                            </div><!-- footer-widget-contact -->
                            <div class="footer-widget-contact-list">
                                <i class="fa-solid fa-envelope"></i>
                                <div class="footer-widget-contact-item">
                                    <a href="mailto:info@fasaec.cd">info@fasaec.cd</a>
                                </div><!-- footer-widget-contact-item -->
                            </div><!-- footer-widget-contact-list -->
                            <div class="footer-widget-contact-list">
                                <i class="fa-solid fa-phone"></i>
                                <div class="footer-widget-contact-item">
                                    <a href="tel:+243830681299">+243830681299</a>
                                </div><!-- footer-widget-contact-item -->
                            </div><!-- footer-widget-contact-list -->
                        </div><!--footer-widget-->
                    </div><!--col-lg-3-->
                </div><!-- row -->
            </div><!-- container -->
        </div><!--footer-inner-->
        <div class="bottom-footer">
            <div class="conatiner">
                <p>© FASAEC – Tous droits réservés</p>
            </div><!-- container -->
        </div><!--bottom-footer-->
    </div>



  <div class="mobile-nav-wrapper">
	<div class="mobile-nav-overlay mobile-nav-toggler"></div><!-- mobile-nav-overlay -->
	<div class="mobile-nav-content">
		<a href="#" class="mobile-nav-close mobile-nav-toggler">
			<span></span>
			<span></span>
		</a><!-- mobile-nav-close -->
		<div class="logo-box" >
			<a href="{{ route('accueil') }}"><img src="{{ asset('img/logo-transparant.png') }}?v={{ time() }}" width="160"  alt="191"></a>
		</div><!-- logo-box -->
		<div class="mobile-nav-container"></div><!-- mobile-nav-container -->
		<ul class="mobile-nav-contact list-unstyled">
			<li>
				<i class="fa-solid fa-phone"></i>
				<a href="tel:+243830681299">+243830681299</a>
			</li><!-- li -->
			<li>
				<i class="fa-solid fa-envelope"></i>
				<a href="mailto:info@fasaec.cd">info@fasaec.cd</a>
			</li><!-- li -->
			<li>
				<i class="fa-solid fa-map-marker-alt"></i>
                    124 avenue Mbomu
                    Quartier : Gbaka
                    Commune : Kinshasa
                    Ville Kinshasa
                    République Démocratique du Congo
			</li><!-- li -->
		</ul><!-- /.mobile-nav-contact -->
		<ul class="mobile-nav-social list-unstyled">
			<li><a href="https://www.facebook.com/share/17noYupcVM/" target="_blank"><i class="fa-brands fa-facebook"></i></a></li>
            <li><a href="https://www.linkedin.com/company/fonds-d%E2%80%99assistance-sociale-aux-artistes-et-%C3%A9crivains-congolais-fasaec/" target="_blank"><i class="fa-brands fa-linkedin"></i></a></li>
            <li><a href="#" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></li>
			<li><a href="#" target="_blank"><i class="fa-brands fa-tiktok"></i></a></li>
			<li><a href="#" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
		</ul><!-- mobile-nav-social -->
	</div><!-- mobile-nav-content -->
  </div>




    <script src="vendor/jquery/jquery.min.js?v={{ time() }}"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js?v={{ time() }}"></script>
    <script src="assets/js/isotope.min.js?v={{ time() }}"></script>
    <script src="assets/js/owl-carousel.js?v={{ time() }}"></script>
    <script src="assets/js/lightbox.js?v={{ time() }}"></script>
    <script src="assets/js/tabs.js?v={{ time() }}"></script>
    <script src="assets/js/video.js?v={{ time() }}"></script>
    <script src="assets/js/slick-slider.js?v={{ time() }}"></script>
    <script src="assets/js/custom.js?v={{ time() }}"></script>
    <script>
        (function(){
            // Animation des compteurs: démarrer à 0, compter jusqu'à data-target quand la section apparaît
            const observerOptions = { root: null, rootMargin: '0px', threshold: 0.4 };
            const missionSection = document.querySelector('#mission');
            if (!missionSection) return;

            let started = false;
            const animateCounters = () => {
            const counters = missionSection.querySelectorAll('.stat-number');
            counters.forEach(counter => {
                const target = parseInt(counter.getAttribute('data-target')) || 0;
                const suffix = counter.getAttribute('data-suffix') || '';
                const duration = 1500; // durée en ms
                const start = 0;
                let startTime = null;

                const step = (timestamp) => {
                if (!startTime) startTime = timestamp;
                const progress = Math.min((timestamp - startTime) / duration, 1);
                const value = Math.floor(progress * (target - start) + start);
                counter.textContent = value.toLocaleString('fr-FR') + suffix;
                if (progress < 1) {
                    window.requestAnimationFrame(step);
                } else {
                    // assurer l'affichage exact de la cible
                    counter.textContent = target.toLocaleString('fr-FR') + suffix;
                }
                };
                window.requestAnimationFrame(step);
            });
            };

            const io = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting && !started) {
                started = true;
                animateCounters();
                io.unobserve(missionSection);
                }
            });
            }, observerOptions);

            io.observe(missionSection);
        })();
    </script>
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
            var
            direction = section.replace(/#/, ''),
            reqSection = $('.section').filter('[data-section="' + direction + '"]'),
            reqSectionPos = reqSection.offset().top - 0;

            if (isAnimate) {
            $('body, html').animate({
                scrollTop: reqSectionPos },
            800);
            } else {
            $('body, html').scrollTop(reqSectionPos);
            }

        };

        var checkSection = function checkSection() {
            $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
                var
                currentId = $this.data('section'),
                reqLink = $('a').filter('[href*=\\#' + currentId + ']');
                reqLink.closest('li').addClass('active').
                siblings().removeClass('active');
            }
            });
        };

        $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function (e) {
            e.preventDefault();
            showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
            checkSection();
        });
    </script>
    <script>
        $(document).ready(function(){
            "use strict";
            if ($(".scroll-to-target").length) {
                $(".scroll-to-target").on("click", function () {
                    var target = $(this).attr("data-target");
                    $("html, body").animate({
                            scrollTop: $(target).offset().top,
                        },
                        1000
                    );
                    return false;
                });
            }
            // mobile nav
            if($('.mobile-nav-wrapper').length) {
                $('.mobile-nav-toggler').on('click',function() {
                    $('.mobile-nav-wrapper').toggleClass('expanded')
                    $('body').toggleClass('locked')
                })
                var menu_content = $('.main-menu .navigation ul')[0].outerHTML
                $('.mobile-nav-container').html(menu_content)
                $('.mobile-nav-container .main-menu-list li.has-dropdown > a').append('<button><i class="fa-solid fa-chevron-right"></i></button>')
                $('.mobile-nav-container .main-menu-list li.has-dropdown > a button').on('click',function() {
                    $(this).toggleClass('expanded')
                    $(this).parents('a').siblings('ul').slideToggle()
                })
            }

            //    button click

        //    $('button').click(function(){
            // $(".donate-amount input:text").val('');
        //    });

            if($('.main-slider-swiper').length) {
                $('.main-slider-swiper').owlCarousel({
                    loop:true,
                    autoplay:true,
                    nav:true,
                    items: 1,
                    dots:false,
                    navText: ['<i class="fa-solid fa-arrow-left-long"></i>','<i class="fa-solid fa-arrow-right-long"></i>']
                })
            }
            if($('.main-slider-two-swiper').length) {
                $('.main-slider-two-swiper').owlCarousel({
                    loop:true,
                    nav:true,
                    items: 1,
                    dots:false,
                    navText: ['<i class="fa-solid fa-arrow-left-long"></i>','<i class="fa-solid fa-arrow-right-long"></i>']
                })
            }
            if ($('.counter-number').length) {
                    $('.counter-number').counterUp({
                            delay: 10,
                            time: 1000
                    });
            }
                if ($(".search-toggler").length) {
                $(".search-toggler").on("click", function (e) {
                    e.preventDefault();
                    $(".search-popup").toggleClass("active");
                    $(".mobile-nav-wrapper").removeClass("expanded");
                    $("body").toggleClass("locked");
                });
            }
            $(function() {
            $('.video-popup, .video-popup').YouTubePopUp({
                disableOn: 700,
                type: 'iframe',
                mainClass: 'mfp-fade',
                removalDelay: 160,
                preloader: false,
                fixedContentPos: false
            });
        });
            $(window).on("scroll", function () {
                if ($(".sticky-header").length) {
                    var headerScrollPos = 230;
                    var stricky = $(".sticky-header");
                    if ($(window).scrollTop() > headerScrollPos) {
                        setTimeout(function() {
                        stricky.addClass("sticky-fixed");
                        },100)
                            stricky.addClass("sticky-header--cloned");
                    } else if ($(this).scrollTop() <= headerScrollPos) {
                        stricky.removeClass("sticky-fixed");
                        stricky.removeClass("sticky-header--cloned");
                    }
                }
                if ($(".scroll-to-top").length) {
                    var strickyScrollPos = 100;
                    if ($(window).scrollTop() > strickyScrollPos) {
                        $(".scroll-to-top").fadeIn(500);
                    } else if ($(this).scrollTop() <= strickyScrollPos) {
                        $(".scroll-to-top").fadeOut(500);
                    }
                }
            });
            // Owl Carousel
            if ($(".portfolio-carousel").length) {
                var owl = $(".portfolio-carousel");
                owl.owlCarousel({
                    items: 4,
                    nav:false,
                    margin:30,
                    loop: true,
                    autoplay:true,
                    smartSpeed:2000,
                    responsive:{
                        0:{
                                items:1,
                        },
                        575:{
                                items:2,
                        },
                        767:{
                                items:3,
                        },
                        991: {
                            items:4,
                        }
                    }
                });
            }
            // Owl Carousel
            if ($(".portfolio-two-carousel").length) {
                var owl = $(".portfolio-two-carousel");
                owl.owlCarousel({
                    items: 4,
                    nav:false,
                    margin:30,
                    loop: true,
                    dots:false,
                    autoplay:true,
                    smartSpeed:2000,
                    responsive:{
                        0:{
                                items:1,
                        },
                        575:{
                                items:2,
                        },
                        767:{
                                items:2,
                        },
                        991: {
                            items:3,
                        }
                    }
                });
            }
            // Owl Carousel
            if ($(".client-carousel").length) {
                var owl = $(".client-carousel");
                owl.owlCarousel({
                    items: 1,
                    nav:false,
                    margin: 80,
                    loop: true,
                    autoplay:true,
                    smartSpeed:2000,
                    responsive:{
                        0:{
                                items:1,
                        },
                        375:{
                                items:2,
                        },
                        767:{
                                items:3,
                        },
                        991:{
                                items:4,
                        },
                        1199: {
                            items:5
                        }
                    }
                });
            }
                // Owl Carousel
            if ($(".event-details-carousel").length) {
                var owl = $(".event-details-carousel");
                owl.owlCarousel({
                    items: 3,
                    nav:false,
                    loop: true,
                    margin:10,
                    autoplay:true,
                    smartSpeed:2000,
                    responsive:{
                        0:{
                                items:1,
                        },
                        767:{
                                items:2
                        },
                        1199: {
                            items:3
                        }
                    }
                });
            }
            if ($('.testimonial-thumb').length) {
                var review_thumb = new Swiper(".testimonial-thumb",{
                    slidesPerView: 3,
                    spaceBetween: 0,
                })
            }
            if ($('.testimonial-reviews').length) {
                var review_swiper = new Swiper(".testimonial-reviews",{
                    slidesPerView:1,
                    loop:true,
                    spaceBetween: 60,
                    autoplay: {
                        delay: 2500,
                        disableOnInteraction: false,
                    },
                    pagination: {
                        el: ".swiper-pagination",
                        clickable: true,
                    },
                    thumbs: {
                        swiper: review_thumb,
                    },
                })
            }
            if ($('.author-thumb-carousel').length) {
                var review_two_thumb = new Swiper(".author-thumb-carousel",{
                    slidesPerView: 3,
                    spaceBetween:0,
                    // allowTouchMove: false,
                })
            }
            if ($('.author-review-carousel').length) {
                var review_two_swiper = new Swiper(".author-review-carousel",{
                    slidesPerView:1,
                    loop:true,
                    spaceBetween: 60,
                    autoplay: {
                        delay: 2500,
                        disableOnInteraction: false,
                    },
                    pagination: {
                        el: ".swiper-pagination",
                        clickable: true,
                    },
                    thumbs: {
                        swiper: review_two_thumb,
                    },
                })
            }
            if ($('.responsive-map').length) {
                var window_width = $(window).width();
                $('.responsive-map').each(function() {
                    var this_column = $(this);
                    var section_width = this_column.closest('.container').width();
                    var extra_width = ((window_width - section_width)/2);
                    var column_width = $(this).width();
                    var total_width = column_width + extra_width
                    $(this).css('width',total_width+'px')
                })
            }
            if ($('.count-box').length) {
                $('.count-box').appear(function () {
                    var el = $(this);
                    var percent = el.data("percentage");
                    $(el).css("width", percent)
                    $(el).find('.count-text').html(percent)
                },{
                    accY: 0
                });
            }
            if ($('.accordian-box').length) {
                $('.accordian-box-item .accordian-content').hide()
                $('.accordian-box-item.active .accordian-content').show()
                $('.accordian-title').on('click',function() {
                $('.accordian-title').siblings('.accordian-content').stop().slideUp()
                    $(this).siblings('.accordian-content').stop().slideDown()
                    $('.accordian-box-item').removeClass('active')
                    $(this).parent().addClass('active')
                })
            }
        });
            var $btns = $('.nav-link').click(function() {
            if (this.id == 'all') {
                $('.tab-pane > div').fadeIn(450);
            } else {
                var $el = $('.' + this.class).fadeIn(450);
                $('tab-pane > div').not($el).hide();
            }
            $btns.removeClass('active');
            $(this).addClass('active');
        });
        if ($(".contact-form-validated").length) {
            $(".contact-form-validated").validate({
                // initialize the plugin
                rules: {
                    name: {
                        required: true
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    message: {
                        required: true
                    },
                    subject: {
                        required: true
                    }
                },
                submitHandler: function (form) {
                    // sending value with ajax request
                    $.post(
                        $(form).attr("action"),
                        $(form).serialize(),
                        function (response) {
                            $(form).parent().find(".result").append(response);
                            $(form).find('input[type="text"]').val("");
                            $(form).find('input[type="email"]').val("");
                            $(form).find("textarea").val("");
                        }
                    );
                    return false;
                }
            });
        }
        $(window).on('load', function () {
        $('body').addClass('loaded');
        });
    </script>


</body>
</html>


