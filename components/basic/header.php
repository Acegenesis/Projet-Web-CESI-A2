<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="CESI, Cesi ton stage, offre, stage, alternance, durée, informatique">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Cesi ton stage est une plateforme de recherche de stage pour les étudiants du CESI">
    <title>CTS</title>
    <link rel="stylesheet" href="../assets/CSS/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
    <link rel="icon" href="../assets/img/logoSquare.png">
    <link rel="manifest" href="../manifest.json">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="CTS">
    <link rel="apple-touch-icon" href="../assets/img/logoSquare.png">
    <meta name="theme-color" content="#800080">
    <script>
        if ('serviceWorker' in navigator) {
            window.addEventListener('load', function() {
                navigator.serviceWorker.register('../sw.js')
                    .then(function(registration) {
                        console.log('Service Worker registered: ', registration);
                    })
                    .catch(function(error) {
                        console.log('Service Worker registration failed: ', error);
                    });
            });
        }
    </script>
</head>

<body>

    <?php
    require '../fonctions/bdd.php';
    ?>