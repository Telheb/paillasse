<?php ?>

<section id="modal" >
    <form action="" method="POST" id="formElement">
    <!-- controller/paillasseAction.php -->
        <div id="sectionGauche">

            <div>
                <label for="element_number">choissez le nombre d'éléments:</label>

                <select name="elements" id="pet-select">
                    <option value="">--Choissez un nombre d'éléments--</option>
                    <option value="deux">Deux</option>
                    <option value="trois">Trois</option>

                </select>
            </div>

            <div class="wrapper-element">
                <input type="checkbox" id="eau" name="type" value="eau">
                <label for="eau">Eau distillée</label>
            </div>

            <div class="wrapper-element">
                <input type="checkbox" id="naoh" name="type" value="naoh">
                <label for="naoh">Hydroxyde de sodium</label>
            </div>
        </div>

        <div id="sectionDroite">

            <div class="wrapper-element">
                <input type="checkbox" id="h2so4" name="h2so4" value="h2so4">
                <label for="h2so4">Acide sulfurique</label>
            </div>

            <div class="wrapper-element">
                <input type="checkbox" id="cuso4" name="cuso4" value="cuso4">
                <label for="cuso4">Sulfate de cuivre</label>
            </div>
        </div>

    <input type="submit" id="submit" value ="clic faire apparaître les éléments dans le casier">
    </form>
</section>


