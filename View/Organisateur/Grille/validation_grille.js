const labelError = document.createElement('label');
labelError.id = "error";
labelError.className = "text-sm text-red-500";



const closeError = (error) => {
    //delete the div error
    const divError = document.getElementById('error');
    divError.remove();
}


const getGrille = (id) => {

    console.log("L'id est de : " + id)
    console.log(document.getElementById('grille-input').value)

    //Check if the input is empty
    if(document.getElementById('grille-input').value == "")
    {
        labelError.innerHTML = "Le champs identifiant de la grille est vide";
        document.getElementById('button-validation').parentNode.insertBefore(labelError, document.getElementById('button-validation'));
        return;
    }

    //Check if the input is a number
    if(isNaN(document.getElementById('grille-input').value))
    {
        labelError.innerHTML = "Veuillez saisir un identifiant de grille valide";
        document.getElementById('button-validation').parentNode.insertBefore(labelError, document.getElementById('button-validation'));
        return;
    }

    //Ajax query
    $.ajax({
        url: './View/Organisateur/Grille/grille_request.php',
        type: 'POST',
        data: {id_user: id, id_grille: document.getElementById('grille-input').value},
        dataType: 'json',
        success: function (data) {
            console.log(data);
            const divContainer = document.createElement('div');
            const buttonValider = document.createElement('button');
            const buttonAnnuler = document.createElement('button');

            divContainer.className = "flex flex-col items-center justify-center";
            buttonValider.className = "bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline";
            buttonValider.type = "button";
            buttonValider.innerHTML = "Valider";
            buttonValider.addEventListener('click', () => {
                divContainer.remove();
                window.location.href = "./index.php?action=grille&id=" + document.getElementById('grille-input').value;
            });
            buttonAnnuler.className = "bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline";
            buttonAnnuler.type = "button";
            buttonAnnuler.innerHTML = "Annuler";
            buttonAnnuler.addEventListener('click', () => {
                divContainer.remove();
            });

            divContainer.appendChild(buttonAnnuler);
            divContainer.appendChild(buttonValider);

            document.getElementById('grille-container').appendChild(divContainer);
        },
        error: function (data) {
            labelError.innerHTML = "Aucune grille n'a été trouvée";
            document.getElementById('button-validation').parentNode.insertBefore(labelError, document.getElementById('button-validation'));
        }
    })
}

const validerGrille = () => {

}