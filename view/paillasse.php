<?php $title = "paillasse"; ?>

<?php ob_start(); ?>


    <div class="room">

    <?php require "formElement.php";?>

        <aside id="element" class="has-closeLeft">
            <div id="contentElement">
                <ul id="listeElement">
                    <li id="" class="liElements">Eau distillée</li>
                    <li id="" class="liElements">Hydroxyde de sodium</li>
                    <li id="" class="liElements">Acide Sulfurique</li>
                    <li id="" class="liElements">Sulfate de cuivre</li>
                </ul>
            </div>
            <button id="buttonLeft">clic here to open</button>
        </aside>

        <!-- armoire des éléments -->
        <a href= "#openModal" class="armoire" id="a1"></a>

        <!-- hote -->
        <div class="hote"></div>

        <!-- armoire des tools -->
        <a class="armoire" id="a2"></a>

        <!-- empty espaces -->
        <div class="emptyspace" id="es1"></div>
        <div class="emptyspace" id="es2"></div>
        <div class="emptyspace" id="es3"></div>
        <div class="emptyspace" id="es4"></div>
        <div class="emptyspace" id="es5"></div>


        <!-- table de travail -->
        <div class="paillasse"></div>

        <!-- armoire de la paillasse gauche -->
        <div class="armoire_3" id="a3"></div>

        <!-- armoire de la paillasse droite -->
        <div class="armoire_4" id="a4"></div>

        <!-- trash -->
        <div class="trash" id="t1"></div>
        <div class="trash" id="t2"></div>
        <div class="trash" id="t3"></div>
    </div>


<?php $content = ob_get_clean(); ?>
<?php require "template.php"; ?>
