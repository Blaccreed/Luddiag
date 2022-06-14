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
        labelError.innerHTML = "Le champ identifiant de la grille est vide";
        document.getElementById('button-validation').parentNode.insertBefore(labelError, document.getElementById('button-validation'));
        return;
    }

    //Check if the input is a number
    if(isNaN(document.getElementById('grille-input').value))
    {
        labelError.innerHTML = "Veuillez saisir un nombre";
        document.getElementById('button-validation').parentNode.insertBefore(labelError, document.getElementById('button-validation'));
        return;
    }

    if(document.getElementById('grille-input').value === "1")
    {
        console.log("log");

        let divContainer = document.createElement('div');
        let buttonValider = document.createElement('button');
        let buttonAnnuler = document.createElement('button');
        let grilleIdText = document.createElement('p');

        let jeu1 = document.createElement('p');
        let jeu2 = document.createElement('p');
        let jeu3 = document.createElement('p');
        let jeu4 = document.createElement('p');
        let jeu5 = document.createElement('p');

        grilleIdText.innerHTML = "Grille n° " + document.getElementById('grille-input').value;
        grilleIdText.className = "text-xl font-semibold underline text-gray-500 mt-2 mb-4";

        jeu1.innerHTML = "Bouh le loup ! = 18";
        jeu1.className = "text-lg text-gray-500 mb-2";

        jeu2.innerHTML = "Escargot Sprint = 15";
        jeu2.className = "text-lg text-gray-500 mb-2";

        jeu3.innerHTML = "Dragomino = 13";
        jeu3.className = "text-lg text-gray-500 mb-2";

        jeu4.innerHTML = "Frouss'Fantomes = 12";
        jeu4.className = "text-lg text-gray-500 mb-2";

        jeu5.innerHTML = "Patatrap Quest = 16";
        jeu5.className = "text-lg text-gray-500 mb-5";

        divContainer.className = "flex flex-col items-center bg-green-50 shadow-md rounded w-1/3";
            buttonValider.className = "bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mb-5";
            buttonValider.type = "button";
            buttonValider.innerHTML = "Valider";
            buttonValider.addEventListener('click', () => {
                divContainer.remove();
                alert("L'ajout de la grille n° 1 est un succès !");
            });
            buttonAnnuler.className = "bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mb-3";
            buttonAnnuler.type = "button";
            buttonAnnuler.innerHTML = "Annuler";
            buttonAnnuler.addEventListener('click', () => {
                divContainer.remove();
            });

            divContainer.appendChild(grilleIdText);
            divContainer.appendChild(jeu1);
            divContainer.appendChild(jeu2);
            divContainer.appendChild(jeu3);
            divContainer.appendChild(jeu4);
            divContainer.appendChild(jeu5);
            divContainer.appendChild(buttonAnnuler);
            divContainer.appendChild(buttonValider);

            document.getElementById('grille-container').appendChild(divContainer);

            return;
    }
    else if(document.getElementById('grille-input').value === "2")
    {
        console.log("log");

        let divContainer = document.createElement('div');
        let buttonValider = document.createElement('button');
        let buttonAnnuler = document.createElement('button');
        let grilleIdText = document.createElement('p');

        let jeu1 = document.createElement('p');
        let jeu2 = document.createElement('p');
        let jeu3 = document.createElement('p');
        let jeu4 = document.createElement('p');
        let jeu5 = document.createElement('p');

        grilleIdText.innerHTML = "Grille n° " + document.getElementById('grille-input').value;
        grilleIdText.className = "text-xl font-semibold underline text-gray-500 mt-2 mb-4";

        jeu1.innerHTML = "Gorinto = 12";
        jeu1.className = "text-lg text-gray-500 mb-2";

        jeu2.innerHTML = "Lueur = 19";
        jeu2.className = "text-lg text-gray-500 mb-2";

        jeu3.innerHTML = "MicroMacro = 13";
        jeu3.className = "text-lg text-gray-500 mb-2";

        jeu4.innerHTML = "Trek12 = 14";
        jeu4.className = "text-lg text-gray-500 mb-2";

        jeu5.innerHTML = "Visite Royale = 11";
        jeu5.className = "text-lg text-gray-500 mb-5";

        divContainer.className = "flex flex-col items-center bg-green-50 shadow-md rounded w-1/3";
            buttonValider.className = "bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mb-5";
            buttonValider.type = "button";
            buttonValider.innerHTML = "Valider";
            buttonValider.addEventListener('click', () => {
                divContainer.remove();
                alert("L'ajout de la grille n° 2 est un succès !");
            });
            buttonAnnuler.className = "bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mb-3";
            buttonAnnuler.type = "button";
            buttonAnnuler.innerHTML = "Annuler";
            buttonAnnuler.addEventListener('click', () => {
                divContainer.remove();
            });

            divContainer.appendChild(grilleIdText);
            divContainer.appendChild(jeu1);
            divContainer.appendChild(jeu2);
            divContainer.appendChild(jeu3);
            divContainer.appendChild(jeu4);
            divContainer.appendChild(jeu5);
            divContainer.appendChild(buttonAnnuler);
            divContainer.appendChild(buttonValider);

            document.getElementById('grille-container').appendChild(divContainer);

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