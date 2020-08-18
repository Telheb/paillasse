// Mes class servent à créer les éléments que l'on as besoin.
// Il est possible de changer les méthodes pour une meilleur utilisation.
// CreateArmoire va surtout créer les armoires du haut, cette class peut être extend pour factoriser le code
// et pour créer des éléments autre ayant les mêmes propriétés.



//  class qui crée un élément pour les armoires
// @element => type de balise html
// @parent => élément parent 
// @attributType => le type d'attribut (class ou id)
// @nomAttribut => le nom de l'attribut
class CreateArmoire{
    constructor(element, attributType, nomAttribut){
        this.element = element;
        this.attributType = attributType;
        this.nomAttribut = nomAttribut;
    }
     create(parent){
        const modal = document.createElement(this.element);
        modal.setAttribute(this.attributType, this.nomAttribut);
        const lien = document.querySelector(parent)
        lien.appendChild(modal);         
     }
}


// cette class doit me servir à crée un formulaire pour appeler les éléments alchimique
// elle prend les mêmes param que la class createArmoire.
// elle à besoin de s'extend
class CreateForm{
    constructor(element, attributType, nomAttribut){
        this.element = element;
        this.attributType = attributType;
        this.nomAttribut = nomAttribut;
    }
     create(parent){
        const modal = document.createElement(this.element);
        modal.setAttribute(this.attributType, this.nomAttribut);
        const lien = document.querySelector(parent)
        lien.appendChild(modal);         
     }

}

// sans elle pas de req ajax
const reqAjax = new XMLHttpRequest();

// function ajax : 
// @type => class ou id de l'event au clic
// @selecteur => le nom de l'attribut que je cible lors du click
// @typeAttribute => le lien pour envoyer la req Ajax

function ajax(type, selecteur, lien){

    // cette const selection l'élément de l'écouteur
    const go = document.querySelector(type + selecteur);
    go.addEventListener('click', function(e){
        e.preventDefault();

        // 
        reqAjax.onreadystatechange = function(){
            if(reqAjax.readyState === 4 && reqAjax.status === 200){

                // je récupère tous les résultats
                const results = JSON.parse(reqAjax.responseText);
                // je les affiches dans un console.log
                console.log(results)

                    // j'instancie un objet 
                    const armoireGauche = new CreateArmoire("div", "class", "elementOutil");
                    armoireGauche.create("#a1");

                    // j'instancie un objet 
                    const form = new CreateForm("form", "class", "formOutil");
                    form.create(".elementOutil");

                    /* Warning */
                    // ce qui suit plus bas n'est qu'un test Ahmed
                    // ma boucle for pour afficher les resultats
                    // que je récupère dans ma const results un peu plus 
                    // et crée ainsi le nombre recquis d'élément

                    for(var i = 0; i < results.length; i++){
                        const input = document.createElement('div');
                        input.setAttribute("class", "input");
                        input.setAttribute("name", results[i].nom_outil);
                        input.innerHTML = results[i].nom_outil;
                        const target = document.querySelector(".formOutil");
                        target.append(input);
                        // console.log(input);
                    }
            }
        }
            // Attention to open, spécifié le type par le lien
            reqAjax.open('GET', this.getAttribute(lien), true);
            // envoi la req d'ou le nom.
            reqAjax.send();
    })
}


// cette function appel mon bout de code.
/* Ahmed Warning */
// je suis en train de réfléchir pour ne pas devoir tout mettre ou reécrire tout ce qu'il y a dans la function ajax.
// peut être une structure de contrôle pour servir de rooter vers l'appel ou function nécessaire à l'utilisateur
// pendant ses expériences.
ajax("#", "a1", "href");





/* Ahmed Warning
    Voici deux function fait un peu à la va vite.
    Elle marche mais je pense que tu as mieux
    Si jamais tu veux les reprendre en plus j'ai un
    overflow de merde.
    Il est 23.06. Je commence à tomber
*/    
function openCasier(){
    const a2 = document.querySelector("#a2");
    console.log(a2)
    a2.addEventListener("click", function(e){
        console.log("hello")
        e.preventDefault();
        const armoire3 = document.querySelector("#casier");
        armoire3.setAttribute("class", "has-open");
    })
}

function closeCasier(){
    const buttonLeft = document.querySelector("#buttonLeft");
    console.log(buttonLeft);
    buttonLeft.addEventListener("click", function(e){
        console.log("hello")
        e.preventDefault();
        const armoire3 = document.querySelector("#casier");
        armoire3.removeAttribute(".has-open")
        armoire3.setAttribute("class", "has-close");
    })
}

openCasier()
closeCasier()











