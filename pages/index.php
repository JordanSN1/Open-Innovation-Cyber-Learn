<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CyberLearn - Home </title>
    <link rel="stylesheet" href="../style/styles.css">
    <script src="https://unpkg.com/typewriter-effect@2.18.0/dist/core.js"></script>

</head>
<body>
    <nav class="navbar">
        <ul class="nav-container">
            <li class="nav-item">
                <a href="index.html" class="nav-link">
                    <img class="home-image" src="../Images/Log_pricipal_large.png" alt="Home">
                </a>
            </li>
            <li class="nav-item"><a class="nav-link" href="Pages/lecons.php">Nos Leçons</a></li>
            <li class="nav-item"><a class="nav-link" href="Pages/apropos.php">À propos</a></li>
            <li class="nav-item"><a class="nav-link" href="Pages/contact.php">Support</a></li>
            <li class="nav-item button-inscription"><a class="nav-link" href="inscription.php">S'inscrire</a></li>
        </ul>
    </nav>

    </nav>

    <nav class="Accroche">


    <h1 id="entete" class="Entete"></h1>
            <script src="https://unpkg.com/typewriter-effect@2.18.0/dist/core.js"></script>
            <script>
                const txtAnim = document.querySelector('.Entete');
                new Typewriter(txtAnim, {
                    loop: true,
                    deleteSpeed: 10
                })
                .changeDelay(40)
                .typeString('CyberLearn : Votre guide essentiel pour maîtriser la cybersécurité. ')
                .pauseFor(5000)
                .deleteChars(55) 
                .pauseFor(500)
                .typeString(' Des profisionnels de la cybersécurité à votre service. ')
                .pauseFor(5000)
                .start()
            </script>
    </nav>
    
</body>
</html>