<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion - FASAEC</title>

    <!-- Responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SEO Meta -->
    <meta name="description" content="Plateforme officielle de connexion FASAEC. Accédez à votre espace sécurisé.">
    <meta name="keywords" content="FASAEC, connexion, espace membre, RDC, assurance">
    <meta name="author" content="FASAEC">
    <meta name="robots" content="index, follow">

    <!-- Theme Color -->
    <meta name="theme-color" content="#004aad">

    <!-- Open Graph (Facebook / WhatsApp) -->
    <meta property="og:title" content="Connexion - FASAEC">
    <meta property="og:description" content="Accédez à votre espace sécurisé FASAEC.">
    <meta property="og:image" content="https://fasaec.cd/img/logo.png">
    <meta property="og:url" content="https://fasaec.cd/gestion-actualites">
    <meta property="og:type" content="website">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Connexion - FASAEC">
    <meta name="twitter:description" content="Accédez à votre espace sécurisé FASAEC.">
    <meta name="twitter:image" content="https://fasaec.cd/img/logo.png">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="https://fasaec.cd/img/logo.png">
    <link rel="apple-touch-icon" href="https://fasaec.cd/img/logo.png">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(-45deg, #004aad, #0099ff, #003080, #005ce6);
            background-size: 400% 400%;
            animation: gradientMove 10s ease infinite;
            overflow: hidden;
        }

        @keyframes gradientMove {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .login-card {
            background: #fff;
            width: 360px;
            padding: 35px;
            border-radius: 18px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.25);
            text-align: center;
            opacity: 0;
            transform: translateY(40px);
            animation: fadeInUp 1s ease forwards;
        }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .login-card img {
            width: 120px;
            margin-bottom: 20px;
            animation: logoPop 1.2s ease forwards;
            transform: scale(0.7);
            opacity: 0;
        }

        @keyframes logoPop {
            to {
                transform: scale(1);
                opacity: 1;
            }
        }

        .login-card h2 {
            margin-bottom: 25px;
            color: #333;
            font-weight: 600;
            opacity: 0;
            animation: fadeText 1s ease forwards 0.5s;
        }

        @keyframes fadeText {
            to { opacity: 1; }
        }

        .input-group {
            margin-bottom: 20px;
            text-align: left;
            opacity: 0;
            transform: translateX(-20px);
            animation: slideIn 0.8s ease forwards 0.8s;
        }

        @keyframes slideIn {
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .input-group label {
            font-size: 14px;
            color: #555;
            margin-bottom: 5px;
            display: block;
        }

        .input-group input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 10px;
            outline: none;
            transition: 0.3s;
        }

        .input-group input:focus {
            border-color: #004aad;
            box-shadow: 0 0 8px rgba(0, 74, 173, 0.4);
        }

        .btn-login {
            width: 100%;
            padding: 13px;
            border: none;
            border-radius: 10px;
            background: #004aad;
            color: #fff;
            font-weight: 500;
            cursor: pointer;
            transition: 0.3s;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeBtn 0.8s ease forwards 1.2s;
        }

        @keyframes fadeBtn {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .btn-login:hover {
            background: #003080;
            transform: scale(1.05);
        }

        .footer-text {
            margin-top: 18px;
            font-size: 12px;
            color: #888;
            opacity: 0;
            animation: fadeText 1s ease forwards 1.5s;
        }

        @media (max-width: 400px) {
            .login-card {
                width: 90%;
            }
        }
    </style>
</head>
<body>

    <div class="login-card">
        <img src="https://fasaec.cd/img/logo.png" alt="Logo FASAEC">
        <h2>Connexion</h2>

        <form action="/dashboard" method="post">
            @csrf
            @method("POST")
            <div class="input-group">
                <label for="email">Adresse Email</label>
                <input type="email" id="email" name="email" value="@gmail.com" required>
            </div>

            <button type="submit" class="btn-login">Se connecter</button>
        </form>

        <div class="footer-text">
            © 2026 FASAEC
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$(document).ready(function() {

    $("form").on("submit", function(e) {
        e.preventDefault();

        let email = $("#email").val();
        let token = "{{ csrf_token() }}";

        $.ajax({
            url: "{{ route('verifier.email') }}",
            type: "POST",
            data: {
                _token: token,
                email: email
            },
            success: function(response) {

                if(response.status === "success") {
                    // Redirection avec email dynamique
                    window.location.href = "/dashboard/" + encodeURIComponent(response.crypt)
                } else {
                    const Toast = Swal.mixin({
                    toast: true,
                    position: "top-end",
                    showConfirmButton: false,
                    timer: 2000,
                    didOpen: (toast) => {
                        toast.onmouseenter = Swal.stopTimer;
                        toast.onmouseleave = Swal.resumeTimer;
                    }
                    });
                    Toast.fire({
                    icon: "error",
                    title: response.message
                    });

                }
            },
            error: function() {
                alert("Erreur serveur.");
            }
        });
    });

});
</script>

</body>
</html>
