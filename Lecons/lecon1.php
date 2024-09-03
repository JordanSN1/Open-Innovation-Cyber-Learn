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

    <div class="lesson-container">
        <h1>Introduction à la Cybersécurité</h1>

        <section class="lesson-section">
            <h2>Qu'est-ce que la cybersécurité?</h2>
            <p>La cybersécurité désigne l'ensemble des technologies, processus et pratiques conçus pour protéger les réseaux, appareils, programmes et données contre les attaques, les dommages ou les accès non autorisés.</p>
            <p>Elle est essentielle pour garantir la confidentialité, l'intégrité et la disponibilité des informations.</p>
        </section>

        <section class="lesson-section quiz-section">
            <h2>Quiz : Pourquoi la cybersécurité est-elle importante?</h2>
            <p>Sélectionnez toutes les raisons qui vous semblent correctes :</p>
            <form id="quiz-form">
                <label>
                    <input type="checkbox" name="quiz" value="1"> Protéger les données personnelles.
                </label><br>
                <label>
                    <input type="checkbox" name="quiz" value="2"> Garantir la sécurité des transactions financières.
                </label><br>
                <label>
                    <input type="checkbox" name="quiz" value="3"> Augmenter la vitesse de l'Internet.
                </label><br>
                <label>
                    <input type="checkbox" name="quiz" value="4"> Prévenir les cyberattaques.
                </label><br>
                <button type="button" onclick="checkQuiz()">Soumettre</button>
            </form>
            <p id="quiz-result"></p>
        </section>

        <section class="lesson-section interaction-section">
            <h2>Simuler une attaque de phishing</h2>
            <p>Vous recevez un email suspect demandant des informations personnelles. Que faites-vous?</p>
            <button onclick="showPhishingResponse()">Voir la réponse</button>
            <p id="phishing-response" style="display:none;">Ne cliquez jamais sur des liens dans des emails suspects, ne téléchargez pas de pièces jointes, et signalez l'email comme spam.</p>
        </section>

        <section class="lesson-section">
            <h2>Bonnes pratiques en cybersécurité</h2>
            <ul>
                <li>Utilisez des mots de passe forts et changez-les régulièrement.</li>
                <li>Activez l'authentification à deux facteurs (2FA) lorsque c'est possible.</li>
                <li>Mettez à jour régulièrement vos logiciels et systèmes d'exploitation.</li>
                <li>Sauvegardez vos données importantes sur un support sécurisé.</li>
            </ul>
        </section>
    </div>

    <script>

        function checkQuiz() {

            let quizForm = document.getElementById('quiz-form');
            let answers = quizForm.querySelectorAll('input[type="checkbox"]:checked');
            let correctAnswers = ["1", "2", "4"];
            let correct = true;


            answers.forEach(answer => {

                if (!correctAnswers.includes(answer.value)) {
                    correct = false;
                }
            });

            if (correct && answers.length === correctAnswers.length) {

                document.getElementById('quiz-result').innerText = "Correct ! Vous avez bien compris l'importance de la cybersécurité.";
                document.getElementById('quiz-result').style.color = "green";

                } else {

                    document.getElementById('quiz-result').innerText = "Réponse incorrecte. Réessayez.";
                    document.getElementById('quiz-result').style.color = "red";
            }
    }

        function showPhishingResponse() {
            document.getElementById('phishing-response').style.display = 'block';
        }
</script>


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