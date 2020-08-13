//  class qui crée un élément pour les armoires
class CreateElement{
    constructor(element, parent, attributType, nomAttribut){
        this.element = element;
        this.parent = parent;
        this.attributType = attributType;
        this.nomAttribut = nomAttribut;
    }
     create(){
        const modal = document.createElement(this.element);
        modal.setAttribute(this.attributType, this.nomAttribut);
        this.parent.append(modal); 
              
     }
}

function createElement(cible, variable, type, attribut, name){

    const action = document.querySelector(cible);
    variable = new CreateElement(type, action, attribut, name);

    action.addEventListener('click', function(e){
        const info = document.querySelector("." + variable.nomAttribut);
        console.log(info)
        e.preventDefault();
        if(info == null){  
            variable.create();
            console.log(info)
        }

    })
}

createElement("#a1", "armoire", "div", "class", "elementOutil");
createElement("#a2", "armoire2", "div", "class", "elementUtilitaire");



const reqAjax = new XMLHttpRequest();