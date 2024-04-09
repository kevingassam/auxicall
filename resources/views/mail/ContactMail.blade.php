<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de contact - KG CODE+</title>
    <style>
        /* Styles CSS */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .logo {
            text-align: center;
            margin-bottom: 20px;
        }
        .logo img {
            max-width: 200px;
            height: auto;
        }
        .message {
            margin-bottom: 20px;
        }
        .message p {
            line-height: 1.6;
        }
        .signature {
            margin-top: 20px;
            text-align: center;
            color: #777;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="{{ asset('/logo-black.png') }}" alt="Logo KG CODE+">
        </div>
        <div class="message">
            <p>Bonjour {{ $contact->name }},</p>
            <p>Nous vous remercions d'avoir pris le temps de nous contacter à travers notre formulaire de contact. Nous avons bien reçu votre message et nous vous en remercions.</p>
            <p>Voici un récapitulatif des informations que vous avez soumises :</p>
            <ul>
                <li><strong>Nom :</strong> {{ $contact->name }}</li>
                <li><strong>Adresse e-mail :</strong> {{ $contact->email }}</li>
                <li><strong>Sujet :</strong> {{ $contact->sujet }}</li>
                <li><strong>Message :</strong> {{ $contact->message }}</li>
            </ul>
            <p>Nous avons bien noté votre demande et nous y répondrons dans les plus brefs délais. Votre satisfaction est notre priorité et nous ferons de notre mieux pour répondre à vos attentes.</p>
            <p>N'hésitez pas à nous contacter si vous avez d'autres questions ou besoins. Nous sommes là pour vous aider.</p>
            <p>Merci encore de nous avoir choisis.</p>
        </div>
        <div class="signature">
            <p>Cordialement,</p>
            <p><br>KG CODE+</p>
        </div>
    </div>
</body>
</html>
