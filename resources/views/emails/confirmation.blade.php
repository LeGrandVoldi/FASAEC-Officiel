<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Confirmation de réception</title>
</head>
<body style="margin:0; padding:0; background-color:#f4f6f8; font-family:Arial, sans-serif;">

<table width="100%" cellpadding="0" cellspacing="0" style="padding:20px 0;">
    <tr>
        <td align="center">

            <table width="600" cellpadding="0" cellspacing="0" style="background:#ffffff; border-radius:10px; overflow:hidden;">

                <tr>
                    <td style="background:#2563eb; color:#ffffff; padding:20px 30px;">
                        <h2 style="margin:0;">Merci pour votre message</h2>
                    </td>
                </tr>

                <tr>
                    <td style="padding:30px; color:#333; font-size:15px; line-height:1.6;">

                        <p>Bonjour {{ $nom }},</p>

                        <p>
                            Nous avons bien reçu votre message envoyé via le formulaire de contact FASAEC.
                        </p>

                        <p>
                            Notre équipe vous répondra dans les plus brefs délais.
                        </p>

                        <p style="margin-top:20px;">
                            <strong>Rappel de votre message :</strong>
                        </p>

                        <div style="background:#f7f9fb; border-left:4px solid #2563eb; padding:15px; border-radius:5px;">
                            {!! nl2br(e($contenu)) !!}
                        </div>

                        <p style="margin-top:25px;">
                            Cordialement,<br>
                            <strong>L’équipe FASAEC</strong>
                        </p>

                    </td>
                </tr>

                <tr>
                    <td style="background:#f4f6f8; padding:15px 30px; font-size:12px; color:#666; text-align:center;">
                        © {{ date('Y') }} FASAEC — Fonds d’Assistance Sociale aux Artistes et Écrivains Congolais
                    </td>
                </tr>

            </table>

        </td>
    </tr>
</table>

</body>
</html>
