<?php
require_once('component/header.php');
require_once('component/navbar.php');
?>

<section class="contact">
    <div class="container">
        <div class="info_contact">
            <div>
                <h1>Contactez nous</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste quia quasi consequatur veniam accusantium laborum minima odio mollitia nostrum eligendi debitis explicabo nam, perspiciatis quo placeat rerum ut libero sapiente!</p>
            </div>
            <div class="contain_question">
                <h1>F.A.Q</h1>
                <div class="box_question">
                    <div class="question">
                        <p>Une question</p>
                        <img src="img/right_arrow.png" alt="ARROW" data-question='0' class='active'>
                    </div>
                    <div class="reponse active">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, rerum voluptate? Nisi fugit, provident sapiente dolorem dolore ipsam sed eveniet veritatis distinctio maiores cupiditate non nesciunt expedita eos fuga quas!#1</p>
                    </div>
                </div>
                <div class="box_question">
                    <div class="question">
                        <p>Une question</p>
                        <img src="img/right_arrow.png" alt="ARROW" data-question='1'>
                    </div>
                    <div class="reponse">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, rerum voluptate? Nisi fugit, provident sapiente dolorem dolore ipsam sed eveniet veritatis distinctio maiores cupiditate non nesciunt expedita eos fuga quas!#2</p>
                    </div>
                </div>
                <div class="box_question">
                    <div class="question">
                        <p>Une question</p>
                        <img src="img/right_arrow.png" alt="ARROW" data-question='2'>
                    </div>
                    <div class="reponse">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, rerum voluptate? Nisi fugit, provident sapiente dolorem dolore ipsam sed eveniet veritatis distinctio maiores cupiditate non nesciunt expedita eos fuga quas!#3</p>
                    </div>
                </div>
            </div>
        </div>
        <form action="#" method="POST">
            <select name="civilite">
                <option value="Monsieur">Mr</option>
                <option value="Madame">Mme</option>
            </select>
            <div>
                <input type="text" placeholder="Nom" required>
                <input type="text" placeholder="Prenom" required>
            </div>
            <input type="email" name="email" placeholder="aze@contact.fr" required>
            <input type="text" placeholder="Objet" required>
            <textarea name="message" cols="30" rows="10" placeholder="Message..."></textarea>
            <button type="submit">Envoyer</button>
        </form>
    </div>
</section>

<?php
require_once('component/footer.php');
?>