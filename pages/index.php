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
        <button class="menu-toggle" aria-label="Toggle navigation">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <ul class="nav-container">
            <li class="nav-item">
                <a href="../Pages/index.php" class="nav-link">
                    <img class="home-image" src="../Images/Log_pricipal_large.png" alt="Home">
                </a>
            </li>
            <li class="nav-item"><a class="nav-link" href="../Pages/lecons.php">Nos Leçons</a></li>
            <li class="nav-item"><a class="nav-link" href="../Pages/apropos.php">À propos</a></li>
            <li class="nav-item"><a class="nav-link" href="../Pages/contact.php">Support</a></li>
            <li class="nav-item button-inscription"><a class="nav-link" href="../Pages/inscription.php">S'inscrire</a></li>
        </ul>
    </nav>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const menuToggle = document.querySelector('.menu-toggle');
            const navContainer = document.querySelector('.nav-container');

            menuToggle.addEventListener('click', function () {
                navContainer.classList.toggle('active');
            });
        });
    </script>

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
    <img class="LogoEntete" src="../Images/White_log.png" alt="Logo Blanc cyberLearn">
    <a href="#section-title" class="more">VOIR PLUS <span> ></span></a>
    </nav>

    <section class="section">
        <h2 class="section-title" id="section-title">Nos Leçons</h2>
        
        <div class="card-container">
            <div class="card">
                <div class="Etiquette">Code</div>
                <h3 class="card-title">Leçon 1</h3>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.</p>
                <a href="Pages/lecons.php" class="card-link">Voir plus</a>
            </div>
            <div class="card">
                <div class="Etiquette">Réseaux</div>
                <h3 class="card-title">Leçon 2</h3>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.</p>
                <a href="Pages/lecons.php" class="card-link">Voir plus</a>
            </div>
            <div class="card">
                <div class="Etiquette">Social</div>
                <h3 class="card-title">Leçon 3</h3>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.</p>
                <a href="Pages/lecons.php" class="card-link">Voir plus</a>
            </div>
        </div>
    </section>

    <footer>
        <div class="content-footer">
                <div class="brand">
                    <a href="index.php"><img class="brand-logo" src="../Images/Log_pricipal_large.png" alt="Logo Minkey"></a>
                    <p class="brand-text"> CyberLearn : Maîtrisez la cybersécurité aux côtés des experts.</p>
        
                </div>
                <div class="bloc footer-produits">
                    <ul class="list-produits">
                        <li><a href="#">Support</a></li>
                        <li><a href="#">A propos</a></li> 
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="bloc footer-social">
                    <ul class="list-social">
                        <li><a href="#"><img src="..\Images\Facebook_F_icon.svg" alt="Facebook"> CyberLearn</a></li>
                        <li><a href="#"><img src="..\Images\instagram.svg"  id="instagram" alt="Instagram"> @CyberLearn</a></li>
                        <li><a href="#"><img src="..\Images\x-social-media-round-icon.svg" alt="Twitter">@CyberLearn</a></li>
                    </ul>
                </div>
            </div>

            <p class="Copyright">&copy; 2024 CyberLearn</p>
    </footer>
    
</body>
</html>