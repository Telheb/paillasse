

// class  ArmoiresForm extends CreateElement{
//     constructor(){

//      super(element, parent, attributType, nomAttribut);
//     }
// }
// // mon fonction crée element va permettre sur l'action d'un clic de crée mon objet.

// function createElement(cible, variable, type, attribut, name){

//     // cible element parent
//     const action = document.querySelector(cible);
//     variable = new CreateElement(type, action, attribut, name);

//     action.addEventListener('click', function(e){
//         const info = document.querySelector("." + variable.nomAttribut);
//         // e.preventDefault();
//         if(info == null){  
//             variable.create();
//         }

//     })
// }


// je selection tout mes armoires

// console.log(links);

// une boucle pour selectionner mes liens
// for(var i = 0; i<links.length; i++){
//     var link = links[i];
// }

// 



                    // je crée mon objet.

                    // je lui assign ma reponse du serveur pour chaque élément
                    // const reponses = JSON.parse(reqAjax.responseText);
                    // reponses.innerHTML = "";

                    // for(var i = 0; i < reponses.length; i++){
                    //     var div = new ArmoiresForm("div", "elementUtilitaire", "class", "formElement");
                    //     div.create()
                    //     div.innerHTML = reponses[i].nom_outil;
                    // }

                    
                    // console.log(reponses)
                    // reponses.innerHTML = '';

                    // var a1 = document.querySelector("#a1");
                    // console.log(a1)
                    // for(var i = 0; i < reponses.length; i++){

                    //     var div = document.createElement('div');

                    //     div.innerHTML = reponses[i].nom_outil;
                    //     a1.appendChild(div);
                // }
                    
                // var ul = document.createElement('ul');
                // ul.appendChild(link)
                // reponse.append(ul);
                
                // for(var i = 0; i < reponse.length; i++){
                //     var li = document.createElement('li')
                //     li.innerHTML = reponse[i].nom_outil;
                //     ul.appendChild(li);



                addEventListener("click", function(e){
                    const test = document.getElementById(e);
                    console.log(test)
                    
                 })
                 // console.log(target);
                 
                 
                 // j'ai besoin de connaitre mon dom
                 // quand je clic sur quelque chose du dom.
                 // je dois le selection
                 // puis je dois l'afficher
                 
                 

        






                  


        

    
