function openNclose(button, nameAttribute, typeAttribute, action_1, action_2){

    const btn = document.querySelector(button) // button

    btn.addEventListener('click', function(e){
        let booleen = document.querySelector(nameAttribute).getAttribute(typeAttribute); //nameAttribute, typeAttribute
        e.preventDefault();

        switch(booleen){
            case action_2 :
                    const actionOpen = document.querySelector(nameAttribute) //nameAttribute
                    actionOpen.removeAttribute(typeAttribute) // typeAttribute
                    actionOpen.setAttribute(typeAttribute, action_1) //typeAttribute, action_1
                break;

            case action_1 :
                    const actionClose = document.querySelector(nameAttribute) //nameAttribute
                    actionClose.removeAttribute(typeAttribute) // typeAttribute
                    actionClose.setAttribute(typeAttribute, action_2) // typeAttribute , action_2
                break;
        }
    })
}

openNclose('#buttonLeft', '#element', 'class', 'has-closeLeft', 'has-openLeft');

