<?php $title = "reac"; ?>

<?php ob_start(); ?>

<section>
        <div class="tableau">
            <h3>Données:</h3>
            <ol>
                <li>CH4</li>
                <li>O2</li>
            </ol>
            <h3>Réaction:</h3>
            <ul>
                <li>Combustion</li>
            </ul>
        </div>

        <div class="bloc">
            <form action="">
                <input type="text" name="réactif" placeholder="Réactif">+
                <input type="text" name="réactif" placeholder="Réactif">=
                <input type="text" name="résultat" placeholder="Résultat">+
                <input type="text" name="résultat" placeholder="Résultat">+<br>
                <input type="submit" value="Vérifier">
            </form>
        </div>
    </section>

    <div class="note">
        <p>Le Lundi 15/Avril/2020</p>
        <p>-Eléments choisi: le gaz de méthan et déoxygène </p>
        <p class="f">CH4 + 2CO2 → CO2 + 2 H2O</p>
        <p>apres avoir équilibré mon équation</p>
        <p>CH4 + 2 O2 → CO2 + 2 H2O</p>
    </div>
    <div class="dropper">

        <div class="draggable">CH4</div>
        <div class="draggable">2 O2</div>

    </div>

    <div class="dropper">

        <div class="draggable">CO2</div>
        <div class="draggable">2H2O</div>

    </div>

<?php $content = ob_get_clean(); ?>
<?php require "template.php"; ?>

