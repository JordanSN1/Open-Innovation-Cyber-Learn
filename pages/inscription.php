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

    </nav>

    <container class="formInscription">
        <nav class="section-inscription">
            <form action="">
                <label for="name">Nom:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="password">Mot de passe:</label>
                <input type="password" id="password" name="password" required>

                <label for="password">Confirmer mot de passe:</label>
                <input type="password" id="password" name="password" required>

                <button type="submit">Envoyer</button>
            </form>
        </nav>
    </container>

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