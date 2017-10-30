<header class="masthead-a">
</header>

<section class="bg-primary" id="services">
    <div class="container">
        <div class="row text-center">
            <form id="FormContact" style="background: white;color: black" onsubmit="return(SendMail())">
                <h3>VOTRE DEMANDE:</h3>
                    <select ID="Contact" name='Raison'><
                    <option>Veuillez sélectionner...</option>
                    <option>Question</option>
                    <option>Information</option>
                    <option>Suggestion</option>
                </select><br><br>

                Nom:<br>
                <input type="text" id="Nom" name="Nom"><br>
                Mail:<br>
                <input type="text" id="Mail" name="Mail"><br>
                Commentaire:<br>
                <textarea name="Commentaire" id="Commentaire" cols="25" rows="10"></textarea><br><br>
                <input type="submit" value="Envoyer le mail">
                <input type="reset" value="Reset">
            </form>
        </div>
    </div>
</section>
    