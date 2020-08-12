<?php $title = "Index"; ?>

<?php ob_start(); ?>

<nav id="nav">
     <!-- I need navBar file require include  -->
    <img src="public/pictures/header.png" id="header" alt="">       
</nav>

<section>
        <ul>
            <li>
                <p>Préparer vos équation</p>
                <img src="http://prepajeanbart.free.fr/images/chimie.gif" alt="">
                <p class="info">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore id quidem iste architecto natus, reiciendis corporis minima, eos nostrum aperiam, aspernatur explicabo hic. Reiciendis aspernatur, dolores rem earum in maiores!</p>                    
                
                <div class="btn-a">
                    <!-- <button><a href="">Préparer</a></button> -->
                    <select name="pets" id="pet-select" class="preparer">
                        <option value="">Préparer</option>
                        <option value="dog"><a href="reac.php">Dilution</a></option>
                        <option value="dog"><a href="">Disolution</a></option>
                        <option value="dog"><a href="">Précipitation</a></option>
                    </select>
                    </div>
                </li>

                <li>
                <p>Acceder à la paillasse</p>
                    <img src="img/imgPaillasse" alt="">
                    <p class="info">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore id quidem iste architecto natus, reiciendis corporis minima, eos nostrum aperiam, aspernatur explicabo hic. Reiciendis aspernatur, dolores rem earum in maiores!</p>
                    <div class="btn-a">
                    <button><a href="index.php?action=paillasse">Acceder</a></button>         
                </li>

                <li id="presentation">
                    <!-- citation en php -->
                    <p id="citation">Quand on est arrivé à la certitude, on éprouve l'une des plus grandes joies que puisse ressentir l'âme humaine.</p>
                </li>
            </ul>
        </section>

<?php $content = ob_get_clean(); ?>
<?php require "template.php"; ?>