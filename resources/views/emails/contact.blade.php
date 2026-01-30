<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Nouveau message de contact</title>
</head>
<body style="margin:0; padding:0; background-color:#f4f6f8; font-family:Arial, sans-serif;">

    <table width="100%" cellpadding="0" cellspacing="0" style="background-color:#f4f6f8; padding:20px 0;">
        <tr>
            <td align="center">

                <!-- Conteneur principal -->
                <table width="600" cellpadding="0" cellspacing="0" style="background-color:#ffffff; border-radius:10px; overflow:hidden; box-shadow:0 4px 10px rgba(0,0,0,0.05);">

                    <!-- En-tête -->
                    <tr>
                        <td style="background-color:#1f2933; color:#ffffff; padding:20px 30px;">
                            <h2 style="margin:0; font-size:22px;">📩 Nouveau message de contact</h2>
                            <p style="margin:5px 0 0; font-size:14px; opacity:0.9;">
                                Site FASAEC
                            </p>
                        </td>
                    </tr>

                    <!-- Contenu -->
                    <tr>
                        <td style="padding:30px; color:#333333; font-size:15px; line-height:1.6;">

                            <p>Vous avez reçu un nouveau message via le formulaire de contact FASAEC.</p>

                            <table width="100%" cellpadding="0" cellspacing="0" style="margin:20px 0;">

                                <tr>
                                    <td style="padding:10px 0; border-bottom:1px solid #eeeeee;">
                                        <strong>Nom :</strong>
                                    </td>
                                    <td style="padding:10px 0; border-bottom:1px solid #eeeeee;">
                                        {{ $nom }}
                                    </td>
                                </tr>

                                <tr>
                                    <td style="padding:10px 0; border-bottom:1px solid #eeeeee;">
                                        <strong>Email :</strong>
                                    </td>
                                    <td style="padding:10px 0; border-bottom:1px solid #eeeeee;">
                                       <a href="mailto:{{ $email }}">{{ $email }}</a>
                                    </td>
                                </tr>

                                <tr>
                                    <td style="padding:10px 0; border-bottom:1px solid #eeeeee;">
                                        <strong>Sujet :</strong>
                                    </td>
                                    <td style="padding:10px 0; border-bottom:1px solid #eeeeee;">
                                        {{ $sujet }}
                                    </td>
                                </tr>

                            </table>

                            <p style="margin-top:25px;"><strong>Message :</strong></p>

                            <div style="background-color:#f7f9fb; border-left:4px solid #2563eb; padding:15px; border-radius:5px; color:#111827;">
                                {!! nl2br(e($contenu)) !!}
                            </div>

                        </td>
                    </tr>

                    <!-- Pied de page -->
                    <tr>
                        <td style="background-color:#f4f6f8; padding:15px 30px; font-size:12px; color:#666666; text-align:center;">
                            © {{ date('Y') }} FASAEC — Fonds d’Assistance Sociale aux Artistes et Écrivains Congolais
                            <br>
                            Message envoyé depuis le site officiel FASAEC.
                        </td>
                    </tr>

                </table>

            </td>
        </tr>
    </table>

</body>
</html>
