<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Le FASAEC accompagne les artistes congolais dans leur transition numérique et leur appropriation de l'intelligence artificielle.">
    <meta name="author" content="FASAEC">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>Artistes & Numérique / IA | FASAEC</title>

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

        body {
            font-family: 'Manrope', sans-serif;
            color: var(--dark);
            line-height: 1.6;
            overflow-x: hidden;
        }

        /* Page Loader */
        #page-loader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 9999;
            transition: opacity 0.6s ease;
        }

        #page-loader.fade-out {
            opacity: 0;
        }

        .loader-content {
            text-align: center;
        }

        .loader-logo {
            width: 150px;
            animation: pulse 2s ease-in-out infinite;
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); opacity: 1; }
            50% { transform: scale(1.1); opacity: 0.8; }
        }

        /* Sub Header */
        .sub-header {
            background: var(--primary);
            color: var(--white);
            padding: 10px 0;
            font-size: 0.9rem;
        }

        .sub-header .left-content p {
            margin: 0;
            font-weight: 500;
        }

        .sub-header .right-icons ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            gap: 15px;
            justify-content: flex-end;
        }

        .sub-header .right-icons ul li a {
            color: var(--white);
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .sub-header .right-icons ul li a:hover {
            color: var(--secondary);
            transform: translateY(-2px);
        }

        /* Header */
        .header-area {
            background: var(--white);
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            position: sticky;
            top: 0;
            z-index: 999;
        }

        .topbar-one {
            padding: 15px 0;
        }

        .menu-logo img {
            width: 160px;
            transition: all 0.3s ease;
        }

        .topbar-one-middle {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
        }

        .topbar-info ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            gap: 30px;
        }

        .topbar-info ul li {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .topbar-icon {
            width: 40px;
            height: 40px;
            background: var(--light-bg);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary);
        }

        .topbar-text a {
            color: var(--dark);
            text-decoration: none;
            font-weight: 600;
        }

        .topbar-right ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .topbar-right ul li {
            color: var(--muted);
            font-size: 0.9rem;
        }

        /* Navigation */
        .main-menu-list {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            gap: 30px;
        }

        .main-menu-list li a {
            color: var(--dark);
            text-decoration: none;
            font-weight: 600;
            font-size: 0.95rem;
            padding: 10px 0;
            transition: all 0.3s ease;
            position: relative;
        }

        .main-menu-list li a::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--primary);
            transition: width 0.3s ease;
        }

        .main-menu-list li a:hover::after,
        .main-menu-list li.active a::after {
            width: 100%;
        }

        .main-menu-list li a:hover,
        .main-menu-list li.active a {
            color: var(--primary);
        }

        /* Mobile Menu Button */
        .mobile-menu-button {
            display: none;
            flex-direction: column;
            gap: 5px;
            cursor: pointer;
            padding: 10px;
        }

        .mobile-menu-button .span {
            width: 25px;
            height: 3px;
            background: var(--primary);
            transition: all 0.3s ease;
        }

        /* Hero Section */
        .hero-section {
            position: relative;
            padding: 120px 0 80px;
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
            overflow: hidden;
        }

        .hero-bg {
            position: absolute;
            inset: 0;
            background: url("https://images.pexels.com/photos/8438922/pexels-photo-8438922.jpeg?auto=compress&cs=tinysrgb&w=1920") center/cover no-repeat;
            opacity: 0.08;
            transform: scale(1.1);
            filter: grayscale(0.2) contrast(1.1);
            animation: slowZoom 20s ease-in-out infinite alternate;
        }

        @keyframes slowZoom {
            from { transform: scale(1.1); }
            to { transform: scale(1.15); }
        }

        .hero-shape {
            position: absolute;
            border-radius: 50%;
            background: rgba(255,255,255,0.05);
        }

        .hero-shape.s1 {
            width: 400px;
            height: 400px;
            top: -100px;
            right: -100px;
        }

        .hero-shape.s2 {
            width: 300px;
            height: 300px;
            bottom: -50px;
            left: -50px;
        }

        .hero-shape.s3 {
            width: 200px;
            height: 200px;
            top: 50%;
            left: 10%;
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-20px); }
        }

        .hero-card {
            background: rgba(255,255,255,0.95);
            border-radius: 25px;
            padding: 50px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.2);
            backdrop-filter: blur(10px);
            position: relative;
            z-index: 2;
        }

        .hero-title {
            font-family: 'Outfit', sans-serif;
            font-weight: 800;
            font-size: 3rem;
            color: var(--primary);
            margin-bottom: 20px;
            line-height: 1.2;
        }

        .hero-sub {
            font-size: 1.3rem;
            color: var(--muted);
            margin-bottom: 30px;
            line-height: 1.6;
        }

        .btn-primary-custom {
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
            color: var(--white);
            padding: 15px 35px;
            border-radius: 50px;
            font-weight: 700;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
            border: none;
            box-shadow: 0 10px 30px rgba(23,102,209,0.3);
        }

        .btn-primary-custom:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 40px rgba(23,102,209,0.4);
            color: var(--white);
        }

        .btn-light {
            background: var(--white);
            color: var(--primary);
            padding: 15px 35px;
            border-radius: 50px;
            font-weight: 700;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
            border: 2px solid var(--primary);
        }

        .btn-light:hover {
            background: var(--primary);
            color: var(--white);
            transform: translateY(-3px);
        }

        .icon-circle {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            font-size: 2rem;
            box-shadow: 0 10px 30px rgba(23,102,209,0.3);
        }

        /* Content Section */
        .content-section {
            padding: 80px 0;
        }

        .section-title {
            font-family: 'Outfit', sans-serif;
            font-weight: 800;
            font-size: 2.8rem;
            color: var(--dark);
            margin-bottom: 15px;
            position: relative;
            padding-bottom: 15px;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, var(--primary) 0%, var(--secondary) 100%);
            border-radius: 2px;
        }

        .section-sub {
            font-size: 1.2rem;
            color: var(--muted);
            max-width: 700px;
            margin: 0 auto;
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
            font-family: 'Outfit', sans-serif;
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
            font-family: 'Outfit', sans-serif;
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
            font-family: 'Outfit', sans-serif;
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

        /* Stats */
        .stat-card {
            background: linear-gradient(135deg, var(--light-bg) 0%, var(--white) 100%);
            border-radius: 20px;
            padding: 40px 30px;
            text-align: center;
            border: 2px solid rgba(23, 102, 209, 0.1);
            transition: all 0.3s ease;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .stat-card:hover {
            transform: translateY(-5px);
            border-color: rgba(23, 102, 209, 0.3);
            box-shadow: 0 10px 30px rgba(23, 102, 209, 0.15);
        }

        .stat-number {
            font-size: 3.5rem;
            font-weight: 800;
            color: var(--primary);
            font-family: 'Outfit', sans-serif;
            line-height: 1;
        }

        .stat-label {
            font-size: 1.1rem;
            color: var(--muted);
            font-weight: 600;
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
            font-family: 'Outfit', sans-serif;
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
            font-family: 'Outfit', sans-serif;
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

        /* Footer */
        .footer {
            background: var(--dark);
            color: var(--white);
            padding: 60px 0 0;
        }

        .footer-inner {
            padding-bottom: 40px;
        }

        .footer-widget-logo img {
            width: 180px;
            margin-bottom: 20px;
        }

        .footer-widget-text p {
            color: rgba(255,255,255,0.8);
            margin-bottom: 20px;
        }

        .footer-widget-socials {
            display: flex;
            gap: 15px;
        }

        .footer-widget-socials a {
            width: 45px;
            height: 45px;
            background: rgba(255,255,255,0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            transition: all 0.3s ease;
        }

        .footer-widget-socials a:hover {
            background: var(--primary);
            transform: translateY(-3px);
        }

        .footer-widget-title {
            font-family: 'Outfit', sans-serif;
            font-weight: 700;
            font-size: 1.3rem;
            margin-bottom: 25px;
            color: var(--white);
        }

        .footer-widget ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .footer-widget ul li {
            margin-bottom: 12px;
        }

        .footer-widget ul li a {
            color: rgba(255,255,255,0.7);
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .footer-widget ul li a:hover {
            color: var(--primary);
            padding-left: 5px;
        }

        .footer-widget-contact p {
            color: rgba(255,255,255,0.7);
            margin-bottom: 15px;
        }

        .footer-widget-contact-list {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 15px;
        }

        .footer-widget-contact-list i {
            color: var(--primary);
            font-size: 1.2rem;
        }

        .footer-widget-contact-item a {
            color: rgba(255,255,255,0.7);
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .footer-widget-contact-item a:hover {
            color: var(--primary);
        }

        .bottom-footer {
            background: rgba(0,0,0,0.2);
            padding: 25px 0;
            text-align: center;
        }

        .bottom-footer p {
            margin: 0;
            color: rgba(255,255,255,0.6);
        }

        /* Mobile Nav */
        .mobile-nav-wrapper {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 9999;
            pointer-events: none;
        }

        .mobile-nav-overlay {
            position: absolute;
            inset: 0;
            background: rgba(0,0,0,0.7);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .mobile-nav-content {
            position: absolute;
            top: 0;
            right: -100%;
            width: 320px;
            max-width: 90%;
            height: 100%;
            background: var(--white);
            transition: right 0.3s ease;
            overflow-y: auto;
            padding: 30px;
        }

        .mobile-nav-wrapper.expanded {
            pointer-events: all;
        }

        .mobile-nav-wrapper.expanded .mobile-nav-overlay {
            opacity: 1;
        }

        .mobile-nav-wrapper.expanded .mobile-nav-content {
            right: 0;
        }

        .mobile-nav-close {
            position: absolute;
            top: 20px;
            right: 20px;
            width: 35px;
            height: 35px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            gap: 8px;
            cursor: pointer;
        }

        .mobile-nav-close span {
            width: 100%;
            height: 2px;
            background: var(--primary);
            transition: all 0.3s ease;
        }

        .mobile-nav-close span:first-child {
            transform: rotate(45deg) translateY(10px);
        }

        .mobile-nav-close span:last-child {
            transform: rotate(-45deg) translateY(-10px);
        }

        .logo-box {
            margin-bottom: 30px;
        }

        .logo-box img {
            width: 140px;
        }

        .mobile-nav-container ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .mobile-nav-container ul li {
            margin-bottom: 15px;
        }

        .mobile-nav-container ul li a {
            color: var(--dark);
            text-decoration: none;
            font-weight: 600;
            font-size: 1rem;
            display: block;
            padding: 10px 0;
            transition: all 0.3s ease;
        }

        .mobile-nav-container ul li a:hover,
        .mobile-nav-container ul li.active a {
            color: var(--primary);
            padding-left: 10px;
        }

        .mobile-nav-contact {
            margin-top: 30px;
            padding-top: 30px;
            border-top: 1px solid rgba(0,0,0,0.1);
        }

        .mobile-nav-contact li {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            margin-bottom: 15px;
            font-size: 0.9rem;
            color: var(--muted);
        }

        .mobile-nav-contact li i {
            color: var(--primary);
            margin-top: 3px;
        }

        .mobile-nav-contact li a {
            color: var(--muted);
            text-decoration: none;
        }

        .mobile-nav-social {
            display: flex;
            gap: 10px;
            margin-top: 20px;
        }

        .mobile-nav-social li a {
            width: 40px;
            height: 40px;
            background: var(--light-bg);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary);
            transition: all 0.3s ease;
        }

        .mobile-nav-social li a:hover {
            background: var(--primary);
            color: var(--white);
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
                align-items: flex-start;
            }

            .main-menu-list {
                display: none;
            }

            .mobile-menu-button {
                display: flex;
            }

            .hero-title {
                font-size: 2rem;
            }

            .hero-sub {
                font-size: 1.1rem;
            }

            .section-title {
                font-size: 2rem;
            }
        }

        @media (max-width: 768px) {
            .hero-card {
                padding: 30px;
            }

            .content-section {
                padding: 50px 0;
            }

            .sub-header .left-content p {
                font-size: 0.8rem;
            }

            .topbar-right {
                display: none;
            }
        }

        body.locked {
            overflow: hidden;
        }
    </style>
</head>

<body>
<!-- Loader -->
<div id="page-loader">
    <div class="loader-content">
        <img src="https://images.pexels.com/photos/3184292/pexels-photo-3184292.jpeg?auto=compress&cs=tinysrgb&w=150&h=150&fit=crop" alt="FASAEC Logo" class="loader-logo" style="border-radius: 50%;">
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
<header class="header header-area">
    <div class="topbar-one">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <div class="menu-logo">
                    <a href="/">
                        <img src="https://images.pexels.com/photos/3184292/pexels-photo-3184292.jpeg?auto=compress&cs=tinysrgb&w=160&h=60&fit=crop" width="160" alt="logo">
                    </a>
                </div>

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
                            <li>124 avenue Mbomu, Quartier Gbaka, Commune Kinshasa, RDC</li>
                        </ul>
                    </div>
                </div>

                <div class="mobile-menu-button mobile-nav-toggler">
                    <span class="span"></span>
                    <span class="span"></span>
                    <span class="span"></span>
                </div>
            </div>

            <div class="main-menu" style="margin-top: 20px;">
                <nav class="navigation">
                    <ul class="main-menu-list">
                        <li><a href="/">ACCUEIL</a></li>
                        <li><a href="https://enregistrement.capcongo.online/">S'IDENTIFIER</a></li>
                        <li><a href="/le-fasaec">LE FASAEC</a></li>
                        <li><a href="/droits-protection-sociale">DROITS & PROTECTION SOCIALE</a></li>
                        <li class="active"><a href="/artistes-numerique-ia">ARTISTES & NUMÉRIQUE / IA</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>

<!-- HERO SECTION -->
<div class="hero-section">
    <div class="hero-bg"></div>
    <div class="hero-shape s1"></div>
    <div class="hero-shape s2"></div>
    <div class="hero-shape s3"></div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="hero-card">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h1 class="hero-title">
                                <i class="fas fa-laptop-code me-3"></i>
                                Artistes & Numérique / IA
                            </h1>
                            <p class="hero-sub">Embrasser la révolution numérique et l'intelligence artificielle pour propulser votre art vers de nouveaux horizons</p>
                            <div class="d-md-flex flex-md-nowrap gap-3">
                                <a href="#opportunites" class="btn btn-light btn-lg mb-2 mb-md-0">
                                    <i class="fas fa-lightbulb me-2"></i>
                                    Opportunités
                                </a>
                                <a href="#outils" class="btn btn-primary-custom btn-lg">
                                    <i class="fas fa-tools me-2"></i>
                                    Nos outils
                                </a>
                            </div>
                        </div>

                        <div class="col-md-4 text-md-end mt-4 mt-md-0">
                            <div style="display:inline-block">
                                <div class="icon-circle mb-3" title="Contactez-nous">
                                    <i class="fas fa-headset"></i>
                                </div>
                                <div style="color:#1766d1;font-weight:700;font-size:1.2rem">Support 24/7</div>
                                <div style="color:#5a6c7d;font-size:0.9rem">Assistance technique</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- GALERIE D'IMAGES ARTISTES & NUMÉRIQUE -->
<section class="content-section" style="background: linear-gradient(180deg, #f8faff, #fff);">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title" style="display:inline-block">L'Art Rencontre La Technologie</h2>
            <p class="section-sub">Découvrez comment les artistes congolais embrassent le numérique et l'IA</p>
        </div>

        <div class="image-gallery">
            <div class="gallery-item card-appear">
                <img src="https://images.pexels.com/photos/3184292/pexels-photo-3184292.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Artiste digital">
                <div class="gallery-overlay">
                    <span>Création Digitale</span>
                </div>
            </div>
            <div class="gallery-item card-appear">
                <img src="https://images.pexels.com/photos/8438922/pexels-photo-8438922.jpeg?auto=compress&cs=tinysrgb&w=600" alt="IA et Musique">
                <div class="gallery-overlay">
                    <span>IA & Musique</span>
                </div>
            </div>
            <div class="gallery-item card-appear">
                <img src="https://images.pexels.com/photos/7988088/pexels-photo-7988088.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Art numérique">
                <div class="gallery-overlay">
                    <span>Art Numérique</span>
                </div>
            </div>
            <div class="gallery-item card-appear">
                <img src="https://images.pexels.com/photos/3184296/pexels-photo-3184296.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Formation digitale">
                <div class="gallery-overlay">
                    <span>Formation Digitale</span>
                </div>
            </div>
            <div class="gallery-item card-appear">
                <img src="https://images.pexels.com/photos/8438918/pexels-photo-8438918.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Technologie créative">
                <div class="gallery-overlay">
                    <span>Tech Créative</span>
                </div>
            </div>
            <div class="gallery-item card-appear">
                <img src="https://images.pexels.com/photos/7988675/pexels-photo-7988675.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Studio virtuel">
                <div class="gallery-overlay">
                    <span>Studio Virtuel</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- OPPORTUNITÉS NUMÉRIQUES -->
<section class="content-section" id="opportunites">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title" style="display:inline-block">Opportunités du Numérique</h2>
            <p class="section-sub">Le FASAEC vous accompagne dans votre transformation digitale</p>
        </div>

        <div class="row g-4 text-center">
            <div class="col-lg-4 col-md-6">
                <div class="digital-card card-appear" style="animation-delay:.1s">
                    <div class="digital-icon-box">
                        <i class="fas fa-globe-africa"></i>
                    </div>
                    <h3 class="digital-title">Visibilité Mondiale</h3>
                    <p class="digital-text">Partagez vos œuvres avec le monde entier grâce aux plateformes numériques et réseaux sociaux professionnels.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="digital-card card-appear" style="animation-delay:.2s">
                    <div class="digital-icon-box">
                        <i class="fas fa-robot"></i>
                    </div>
                    <h3 class="digital-title">Intelligence Artificielle</h3>
                    <p class="digital-text">Exploitez les outils d'IA pour enrichir votre processus créatif : génération d'idées, optimisation, et nouvelles formes d'art.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="digital-card card-appear" style="animation-delay:.3s">
                    <div class="digital-icon-box">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <h3 class="digital-title">Monétisation en Ligne</h3>
                    <p class="digital-text">Vendez vos créations directement via des plateformes e-commerce, NFT et systèmes de paiement sécurisés.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="digital-card card-appear" style="animation-delay:.4s">
                    <div class="digital-icon-box">
                        <i class="fas fa-video"></i>
                    </div>
                    <h3 class="digital-title">Streaming & Diffusion</h3>
                    <p class="digital-text">Diffusez vos performances en direct, créez du contenu vidéo et atteignez des millions de spectateurs.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="digital-card card-appear" style="animation-delay:.5s">
                    <div class="digital-icon-box">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3 class="digital-title">Protection Digitale</h3>
                    <p class="digital-text">Sécurisez vos œuvres numériques avec blockchain, watermarking et systèmes de droits d'auteur digitaux.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="digital-card card-appear" style="animation-delay:.6s">
                    <div class="digital-icon-box">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3 class="digital-title">Collaboration Virtuelle</h3>
                    <p class="digital-text">Collaborez avec d'autres artistes du monde entier grâce aux outils de travail collaboratif en ligne.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- BANNER IA -->
<section class="content-section" style="background: linear-gradient(180deg, transparent, rgba(23,102,209,0.02), transparent);">
    <div class="container">
        <div class="ai-banner card-appear">
            <div class="ai-banner-content">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <h2 style="font-family:'Outfit',sans-serif; font-weight:800; font-size:2.5rem; margin-bottom:20px; color:#ffffff;">
                            L'IA au Service de Votre Créativité
                        </h2>
                        <p style="font-size:1.2rem; color:#ffffff; opacity:0.95; line-height:1.8; margin-bottom:0;">
                            Le FASAEC met à votre disposition des formations, des outils et un accompagnement personnalisé
                            pour maîtriser l'intelligence artificielle et décupler votre potentiel artistique.
                        </p>
                    </div>

                    <div class="col-lg-4 text-center mt-4 mt-lg-0">
                        <div style="background:rgba(255,255,255,0.15); border-radius:20px; padding:30px; backdrop-filter:blur(10px); color:#ffffff;">
                            <div class="stat-number" id="ai-counter" style="font-size:4rem; font-weight:800; margin-bottom:10px; color:#ffffff;" data-target="500">0</div>
                            <div style="font-size:1.2rem;opacity:0.95;">Artistes formés à l'IA</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- NOS OUTILS & SERVICES -->
<section class="content-section" id="outils">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title" style="display:inline-block">Nos Outils & Services</h2>
            <p class="section-sub">Un écosystème complet pour votre réussite numérique</p>
        </div>

        <div class="row g-4">
            <div class="col-lg-6">
                <div class="tool-item card-appear" style="animation-delay:.1s">
                    <div class="tool-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <div class="tool-content">
                        <h4>Formations Numériques</h4>
                        <p>Ateliers pratiques sur les outils digitaux : montage vidéo, design graphique, production musicale assistée par ordinateur, marketing digital.</p>
                    </div>
                    <div style="clear:both"></div>
                </div>

                <div class="tool-item card-appear" style="animation-delay:.2s">
                    <div class="tool-icon">
                        <i class="fas fa-brain"></i>
                    </div>
                    <div class="tool-content">
                        <h4>Initiation à l'IA</h4>
                        <p>Découvrez les outils d'IA générative pour la création artistique : ChatGPT, Midjourney, DALL-E, Stable Diffusion, et plus encore.</p>
                    </div>
                    <div style="clear:both"></div>
                </div>

                <div class="tool-item card-appear" style="animation-delay:.3s">
                    <div class="tool-icon">
                        <i class="fas fa-laptop"></i>
                    </div>
                    <div class="tool-content">
                        <h4>Accès à l'Équipement</h4>
                        <p>Studios d'enregistrement numériques, ordinateurs performants, tablettes graphiques et logiciels professionnels mis à disposition.</p>
                    </div>
                    <div style="clear:both"></div>
                </div>

                <div class="tool-item card-appear" style="animation-delay:.4s">
                    <div class="tool-icon">
                        <i class="fas fa-globe"></i>
                    </div>
                    <div class="tool-content">
                        <h4>Plateforme de Diffusion</h4>
                        <p>Votre propre portfolio en ligne, galerie virtuelle et présence sur les principales plateformes de streaming et vente d'art.</p>
                    </div>
                    <div style="clear:both"></div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="tool-item card-appear" style="animation-delay:.5s">
                    <div class="tool-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <div class="tool-content">
                        <h4>Protection Anti-Piratage</h4>
                        <p>Outils de détection de contrefaçon, watermarking automatique, enregistrement blockchain et assistance juridique en cas de vol d'œuvres.</p>
                    </div>
                    <div style="clear:both"></div>
                </div>

                <div class="tool-item card-appear" style="animation-delay:.6s">
                    <div class="tool-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <div class="tool-content">
                        <h4>Analytics & Insights</h4>
                        <p>Tableaux de bord pour suivre vos performances en ligne, comprendre votre audience et optimiser votre présence digitale.</p>
                    </div>
                    <div style="clear:both"></div>
                </div>

                <div class="tool-item card-appear" style="animation-delay:.7s">
                    <div class="tool-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <div class="tool-content">
                        <h4>Networking Digital</h4>
                        <p>Connexion avec producteurs, galeries, labels et autres artistes via notre réseau professionnel en ligne sécurisé.</p>
                    </div>
                    <div style="clear:both"></div>
                </div>

                <div class="tool-item card-appear" style="animation-delay:.8s">
                    <div class="tool-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <div class="tool-content">
                        <h4>Support Technique</h4>
                        <p>Assistance 24/7 pour tous vos problèmes techniques, maintenance de vos équipements et conseils personnalisés.</p>
                    </div>
                    <div style="clear:both"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- PLUS D'IMAGES -->
<section class="content-section" style="background: linear-gradient(135deg, #f8faff, #fff);">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title" style="display:inline-block">L'Avenir de la Création</h2>
            <p class="section-sub">Des artistes congolais qui révolutionnent leur art avec le numérique</p>
        </div>

        <div class="image-gallery">
            <div class="gallery-item card-appear">
                <img src="https://images.pexels.com/photos/8728380/pexels-photo-8728380.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Production musicale">
                <div class="gallery-overlay">
                    <span>Production Musicale</span>
                </div>
            </div>
            <div class="gallery-item card-appear">
                <img src="https://images.pexels.com/photos/7988086/pexels-photo-7988086.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Design graphique">
                <div class="gallery-overlay">
                    <span>Design Graphique</span>
                </div>
            </div>
            <div class="gallery-item card-appear">
                <img src="https://images.pexels.com/photos/8438944/pexels-photo-8438944.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Photographie digitale">
                <div class="gallery-overlay">
                    <span>Photo Digitale</span>
                </div>
            </div>
            <div class="gallery-item card-appear">
                <img src="https://images.pexels.com/photos/3184338/pexels-photo-3184338.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Animation 3D">
                <div class="gallery-overlay">
                    <span>Animation 3D</span>
                </div>
            </div>
            <div class="gallery-item card-appear">
                <img src="https://images.pexels.com/photos/7988671/pexels-photo-7988671.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Réalité virtuelle">
                <div class="gallery-overlay">
                    <span>Réalité Virtuelle</span>
                </div>
            </div>
            <div class="gallery-item card-appear">
                <img src="https://images.pexels.com/photos/8728558/pexels-photo-8728558.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Streaming live">
                <div class="gallery-overlay">
                    <span>Streaming Live</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- PROCESSUS D'ACCOMPAGNEMENT -->
<section class="content-section" style="background: linear-gradient(180deg, transparent, rgba(23,102,209,0.02), transparent);">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title" style="display:inline-block">Comment Démarrer ?</h2>
            <p class="section-sub">Votre parcours vers la maîtrise du numérique en 4 étapes</p>
        </div>

        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="process-step card-appear" style="animation-delay:.1s">
                    <div class="process-number">1</div>
                    <h4>Évaluation</h4>
                    <p>Diagnostic de vos compétences numériques actuelles et définition de vos objectifs de transformation digitale.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="process-step card-appear" style="animation-delay:.2s">
                    <div class="process-number">2</div>
                    <h4>Formation</h4>
                    <p>Programme personnalisé d'ateliers pratiques et de formations sur mesure selon votre discipline artistique.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="process-step card-appear" style="animation-delay:.3s">
                    <div class="process-number">3</div>
                    <h4>Pratique</h4>
                    <p>Accès aux équipements et accompagnement pour créer vos premiers projets digitaux avec notre support technique.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="process-step card-appear" style="animation-delay:.4s">
                    <div class="process-number">4</div>
                    <h4>Diffusion</h4>
                    <p>Lancement de votre présence en ligne et promotion de vos œuvres sur les plateformes adaptées à votre art.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- STATISTIQUES -->
<section class="content-section">
    <div class="container">
        <div class="row text-center g-4">
            <div class="col-6 col-md-3">
                <div class="stat-card card-appear">
                    <span class="stat-number" data-target="500">0</span>
                    <span class="stat-label">Artistes formés</span>
                </div>
            </div>

            <div class="col-6 col-md-3">
                <div class="stat-card card-appear">
                    <span class="stat-number" data-target="50">0</span>
                    <span class="stat-label">Ateliers organisés</span>
                </div>
            </div>

            <div class="col-6 col-md-3">
                <div class="stat-card card-appear">
                    <span class="stat-number" data-target="1000">0</span>
                    <span class="stat-label">Œuvres digitalisées</span>
                </div>
            </div>

            <div class="col-6 col-md-3">
                <div class="stat-card card-appear">
                    <span class="stat-number" data-target="95">0</span>
                    <span class="stat-label">Taux de satisfaction</span>
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
            <p class="section-sub">Tout savoir sur le numérique et l'IA pour les artistes</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="faq-item card-appear" style="animation-delay:.1s">
                    <div class="faq-question">Ai-je besoin de compétences techniques pour démarrer ?</div>
                    <div class="faq-answer">
                        <p>Absolument pas ! Nos formations partent de zéro et s'adaptent à votre niveau. Que vous n'ayez jamais touché un ordinateur ou que vous soyez déjà à l'aise avec le numérique, nous avons un programme adapté pour vous. L'essentiel est votre motivation à apprendre.</p>
                    </div>
                </div>

                <div class="faq-item card-appear" style="animation-delay:.2s">
                    <div class="faq-question">L'IA va-t-elle remplacer les artistes ?</div>
                    <div class="faq-answer">
                        <p>Non, l'IA est un outil qui amplifie votre créativité, elle ne la remplace pas. Elle vous aide à explorer de nouvelles idées, à gagner du temps sur les tâches répétitives et à repousser les limites de votre art. L'âme, la vision et l'émotion restent humaines. Nous vous formons à utiliser l'IA comme assistant créatif, pas comme substitut.</p>
                    </div>
                </div>

                <div class="faq-item card-appear" style="animation-delay:.3s">
                    <div class="faq-question">Combien coûtent les formations ?</div>
                    <div class="faq-answer">
                        <p>Toutes nos formations numériques et IA sont entièrement gratuites pour les artistes identifiés auprès du FASAEC. Cela inclut l'accès aux ateliers, aux équipements, aux logiciels et au support technique. Notre mission est de démocratiser l'accès au numérique pour tous les créateurs congolais.</p>
                    </div>
                </div>

                <div class="faq-item card-appear" style="animation-delay:.4s">
                    <div class="faq-question">Puis-je utiliser l'équipement du FASAEC pour mes projets ?</div>
                    <div class="faq-answer">
                        <p>Oui ! Une fois formé, vous avez accès à nos studios équipés : ordinateurs performants, logiciels professionnels, tablettes graphiques, équipement d'enregistrement. Vous pouvez réserver des créneaux pour travailler sur vos projets personnels avec l'assistance de nos techniciens si nécessaire.</p>
                    </div>
                </div>

                <div class="faq-item card-appear" style="animation-delay:.5s">
                    <div class="faq-question">Comment protéger mes créations numériques du piratage ?</div>
                    <div class="faq-answer">
                        <p>Le FASAEC vous forme aux techniques de protection : watermarking invisible, enregistrement blockchain, certificats d'authenticité numériques. Nous vous aidons aussi à surveiller l'utilisation non autorisée de vos œuvres en ligne et à engager des actions en cas de violation de vos droits.</p>
                    </div>
                </div>

                <div class="faq-item card-appear" style="animation-delay:.6s">
                    <div class="faq-question">Puis-je gagner ma vie avec l'art numérique ?</div>
                    <div class="faq-answer">
                        <p>Absolument ! Le numérique ouvre de nombreuses opportunités de monétisation : vente d'œuvres sur les marketplaces, NFT, commandes de designs, production pour des clients internationaux, cours en ligne, streaming. Nous vous accompagnons dans la création de votre activité en ligne et la recherche de clients.</p>
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
            <h3>Prêt à Propulser Votre Art dans l'Ère Numérique ?</h3>
            <p>Rejoignez les centaines d'artistes qui ont déjà transformé leur carrière grâce au numérique et à l'IA</p>
            <div style="max-width:700px;margin:0 auto">
                <a href="https://enregistrement.capcongo.online/" target="_blank" class="btn btn-primary-custom" style="font-size: 1.1rem; padding: 18px 40px;">
                    <i class="fas fa-rocket me-2"></i> Commencer Mon Parcours Digital
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
                    <h6 style="font-family:'Outfit',sans-serif;color:var(--primary);font-size:1.1rem;font-weight:700">Téléphone</h6>
                    <p class="mb-0" style="color:var(--muted);font-size:1.05rem"><a href="tel:+243830681299" style="text-decoration:none;color:var(--muted)">+243 830 681 299</a></p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="text-center card-appear" style="animation-delay:.2s">
                    <div class="icon-circle mb-3" style="margin:0 auto"><i class="fas fa-envelope"></i></div>
                    <h6 style="font-family:'Outfit',sans-serif;color:var(--primary);font-size:1.1rem;font-weight:700">Email</h6>
                    <p class="mb-0" style="color:var(--muted);font-size:1.05rem"><a href="mailto:info@fasaec.cd" style="text-decoration:none;color:var(--muted)">info@fasaec.cd</a></p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="text-center card-appear" style="animation-delay:.3s">
                    <div class="icon-circle mb-3" style="margin:0 auto"><i class="fas fa-map-marker-alt"></i></div>
                    <h6 style="font-family:'Outfit',sans-serif;color:var(--primary);font-size:1.1rem;font-weight:700">Adresse</h6>
                    <p class="mb-0" style="color:var(--muted);font-size:1.05rem">124 avenue Mbomu, Quartier Gbaka, Kinshasa</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="text-center card-appear" style="animation-delay:.4s">
                    <div class="icon-circle mb-3" style="margin:0 auto"><i class="fas fa-globe"></i></div>
                    <h6 style="font-family:'Outfit',sans-serif;color:var(--primary);font-size:1.1rem;font-weight:700">Site Web</h6>
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
                        <a href="/"><img src="https://images.pexels.com/photos/3184292/pexels-photo-3184292.jpeg?auto=compress&cs=tinysrgb&w=180&h=80&fit=crop" alt="FASAEC Logo"></a>
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
                            <ul>
                                <li><a href="/">ACCUEIL</a></li>
                                <li><a href="/le-fasaec">LE FASAEC</a></li>
                                <li><a href="/droits-protection-sociale">DROITS & PROTECTION SOCIALE</a></li>
                                <li><a href="/artistes-numerique-ia">ARTISTES & NUMÉRIQUE / IA</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="footer-widget">
                        <div class="footer-widget-department">
                            <h4 class="footer-widget-title">Organismes</h4>
                            <ul>
                                <li><a href="https://culture.gouv.cd/" target="_blank">MINISTÈRE DE LA CULTURE</a></li>
                                <li><a href="https://enregistrement.capcongo.online/" target="_blank">PLATEFORME D'ENREGISTREMENT</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="footer-widget">
                        <div class="footer-widget-contact">
                            <h4 class="footer-widget-title">Contact</h4>
                            <p style="text-align:left">124 avenue Mbomu, Quartier Gbaka, Commune Kinshasa, Ville Kinshasa, RDC</p>
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
        <div class="container">
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
            <a href="/"><img src="https://images.pexels.com/photos/3184292/pexels-photo-3184292.jpeg?auto=compress&cs=tinysrgb&w=140&h=60&fit=crop" width="140" alt="FASAEC"></a>
        </div>
        <div class="mobile-nav-container">
            <ul>
                <li><a href="/">ACCUEIL</a></li>
                <li><a href="https://enregistrement.capcongo.online/">S'IDENTIFIER</a></li>
                <li><a href="/le-fasaec">LE FASAEC</a></li>
                <li><a href="/droits-protection-sociale">DROITS & PROTECTION SOCIALE</a></li>
                <li class="active"><a href="/artistes-numerique-ia">ARTISTES & NUMÉRIQUE / IA</a></li>
            </ul>
        </div>
        <ul class="mobile-nav-contact">
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
                124 avenue Mbomu, Quartier Gbaka, Commune Kinshasa, RDC
            </li>
        </ul>
        <ul class="mobile-nav-social">
            <li><a href="https://www.facebook.com/share/17noYupcVM/" target="_blank"><i class="fa-brands fa-facebook"></i></a></li>
            <li><a href="https://www.linkedin.com/company/fonds-d%E2%80%99assistance-sociale-aux-artistes-et-%C3%A9crivains-congolais-fasaec/" target="_blank"><i class="fa-brands fa-linkedin"></i></a></li>
            <li><a href="#" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></li>
            <li><a href="#" target="_blank"><i class="fa-brands fa-tiktok"></i></a></li>
            <li><a href="#" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
        </ul>
    </div>
</div>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

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
    const faqQuestions = document.querySelectorAll('.faq-question');

    faqQuestions.forEach(question => {
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

    // Mobile nav toggle
    const mobileNavTogglers = document.querySelectorAll('.mobile-nav-toggler');
    const mobileNavWrapper = document.querySelector('.mobile-nav-wrapper');
    const body = document.body;

    mobileNavTogglers.forEach(toggler => {
        toggler.addEventListener('click', function(e) {
            e.preventDefault();
            mobileNavWrapper.classList.toggle('expanded');
            body.classList.toggle('locked');
        });
    });

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
    const statsCounters = document.querySelectorAll('.stat-number');

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
                const plusValues = [500, 50, 1000];
                const percentValues = [95];

                let suffix = '';
                if (percentValues.includes(target)) {
                    suffix = '%';
                } else if (plusValues.includes(target)) {
                    suffix = '+';
                }

                counter.textContent = target.toLocaleString() + suffix;
            }
        };
        updateCount();
    };

    const statsObserver = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                startCounter(entry.target);
                statsObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.6 });

    statsCounters.forEach(counter => {
        statsObserver.observe(counter);
    });

    // AI Banner counter
    const aiCounter = document.getElementById('ai-counter');
    if (aiCounter) {
        const aiObserver = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    startCounter(entry.target);
                    aiObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.6 });

        aiObserver.observe(aiCounter);
    }

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
});
</script>

</body>
</html>
