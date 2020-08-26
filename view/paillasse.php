<?php $title = "paillasse"; ?>

<?php ob_start(); ?>

    <div class="room">

        <aside id="element" class="has-closeLeft">
            <div id="contentElement"></div>
            <button id="buttonLeft">clic here to open</button>
        </aside>

        <!-- <aside id="outil" class="has-closeRight">
        <button id="buttonRight">clic here to open</button>
            <div id="contentTool"></div>
        </aside> -->

        <!-- block elements -->
        <!-- <div class="element" id="e1"></div>
        <div class="element" id="e2"></div>
        <div class="element" id="e3"></div>
        <div class="element" id="e4"></div>
        <div class="element" id="e5"></div> -->


        <!-- block ouTil -->
        <!-- <div class="outil" id="o1"></div>
        <div class="outil" id="o2"></div>
        <div class="outil" id="o3"></div>
        <div class="outil" id="o4"></div>
        <div class="outil" id="o5"></div> -->


        <!-- armoire des éléments -->
        <a href="model/req.php?action=a1" class="armoire" id="a1"></a>

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