
const handleChangeUser = (role) => {

    deleteElement();

    let previousdiv = document.getElementById('button-container');

    
    const div = document.createElement('div');
    const label = document.createElement('label');
    const input = document.createElement('input');

    div.className="mb-4";
    label.className = "block text-gray-700 text-sm font-bold mb-2";
    input.className = "shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline";
    
    if(role == "animateur")
    {
        input.name="stand"
        label.innerHTML = "Stand";
        input.placeholder = "Stand";
        div.id="stand-container"
        div.appendChild(label);
        div.appendChild(input);
        
    }
    else if(role == "exposant")
    {
        input.name="type_exposant"
        label.innerHTML = "Type exposant";
        input.placeholder="Type d'exposant";
        div.id="type-exposant-container"
        div.appendChild(label);
        div.appendChild(input);

        const divjeux = document.createElement('div');
        const labeljeux = document.createElement('label');
        const inputjeux = document.createElement('input');

        divjeux.className = "mb-4";
        divjeux.id="jeux-container"
        labeljeux.className = "block text-gray-700 text-sm font-bold mb-2";
        inputjeux.className = "shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline";

        inputjeux.name = "id_jeux"
        labeljeux.innerHTML = "Identifiant du jeux";
        inputjeux.placeholder = "Id jeux";

        divjeux.appendChild(labeljeux);
        divjeux.appendChild(inputjeux);
        previousdiv.parentNode.insertBefore(divjeux, previousdiv);

        
    }
    previousdiv.parentNode.insertBefore(div, previousdiv);

}

const deleteElement = () => {
    //Delete all the div added previously in the form
    const divExposant = document.getElementById('type-exposant-container');
    const divStand = document.getElementById('stand-container');
    const divJeux = document.getElementById('jeux-container');
    
    let div = document.getElementById('form-ajout');
    try{
        div.removeChild(divExposant);
    }
    catch(e){}
    try{
        div.removeChild(divStand);
    }
    catch(e){}
    try{
        div.removeChild(divJeux);
    }
    catch(e){}
}

const closeError = () => {
    //delete the div error
    const divError = document.getElementById('error');
    divError.remove();
}

const closeSuccess = () => {
    //delete the div success
    const divError = document.getElementById('success');
    divError.remove();
}