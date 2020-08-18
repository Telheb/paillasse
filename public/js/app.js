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

// function ajax : 
// @type => class ou id
// @selecteur => le nom de l'attribut que je cible lors du click
// @variable => cible lors du clic pour lancer la function
// @typeAttribute => le lien pour envoyer la req Ajax

const reqAjax = new XMLHttpRequest();

function ajax(type, selecteur, lien){

    const go = document.querySelector(type + selecteur);
    go.addEventListener('click', function(e){
        e.preventDefault();
        reqAjax;
        reqAjax.onreadystatechange = function(){
            if(reqAjax.readyState === 4 && reqAjax.status === 200){
                // mon instruction

                // je récupère tous les résultats
                const results = JSON.parse(reqAjax.responseText);
                console.log(results)


                    const armoireGauche = new CreateArmoire("div", "class", "elementOutil");
                    armoireGauche.create("#a1");


                    const form = new CreateForm("form", "class", "formOutil");
                    form.create(".elementOutil");

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
            // Attention à l'envoi spécifié le type
            reqAjax.open('GET', this.getAttribute(lien), true);
            reqAjax.send();
    })
}

ajax("#", "a1", "href");







