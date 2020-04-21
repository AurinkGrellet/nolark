import {recupValeur} from './remuneration.js';

/***************************
 *    Fonctions métiers    *
 ***************************/

/**
 * Fonction retournant la prime de distance
 * 
 * @param {type} nb
 * @returns {undefined}
 */
function recupPrimeDist(nb) {
    const primeMax = 900, primeKm =  0.01;
    let indem = nb * primeKm;
    if (indem > primeMax) {
        return primeMax;
    } else {
        return indem;
    }
}

/**
 * Fonction retournant la prime d'ancienneté
 * 
 * @param {type} nb
 * @returns {undefined}
 */
function recupPrimeAncien(nb) {
    const nbMin = 4, primeMin = 300, primeSupp = 30;
    if (nb >= nbMin) {
        return primeMin + (nb - nbMin) * primeSupp;
    } else {
        return 0.0;
    }
}

function recupPrimeAnnuelle(primeDist, primeAncien, nbAccidents) {
    if (nbAccidents > 3) {
        return 0;
    } else {
        return Number(((primeDist + primeAncien) / (1 + nbAccidents)).toFixed(2));
    }
}



/***************************
 *        Listeners        *
 ***************************/

window.addEventListener('load', function() {
    // tabEvent collection d'événements
    let tabEvents = ['keuyp', 'click'];
    // tabInputs collection de <input>
    let tabInputs = window.document.querySelectorAll('input[type="number"]');
    // Parcours de tabInputs en s'appuyant sur le nombre de <input> et sur tabEvents
    for (let i = 0; i < tabInputs.length; i++) {
        for (let j = 0; j < tabEvents.length; j++) {
            // Ajout des listeners sur tous les <input> des events listés dans tabEvents
            tabInputs[i].addEventListener(tabEvents[j], calculerPrime);
        }
    }
    // Gestion de l'input de type range (recopie de la valeur dans l'output)
    window.document.querySelector('#nb_accidents').addEventListener('change', function() {
        window.document.querySelector('#o_nb_accidents').value = recupValeur('#nb_accidents');
        calculerPrime();
    });
});



/***************************
 *         Calculs         *
 ***************************/

/**
 * Procédure s'occupant du recueil des paramètres de calcul de la prime et de l'affichage
 * @returns {void}
 */
function calculerPrime() {
    let nbAccidents = recupValeur('#nb_accidents');
    let nbAncien = recupValeur('#nb_ancien');
    let nbKm = recupValeur('#nb_km');
    let primeAnnuelleSansAccident = recupPrimeAnnuelle(recupPrimeDist(nbKm), recupPrimeAncien(nbAncien),0);
    let primeAnnuelle = recupPrimeAnnuelle(recupPrimeDist(nbKm), recupPrimeAncien(nbAncien),nbAccidents);
    // Gestion de l'affichage de la prime en fonction du nombre d'accidents
    gestionNbAccidents(nbAccidents, primeAnnuelleSansAccident, primeAnnuelle);
}

/**
 * Procédure gérant l'affichage selon le nombre d'accidents
 * 
 * @param {type} nbAccidents
 * @param {type} primeAnnuelleSansAccident
 * @param {type} primeAnnuelle
 * @returns {undefined}
 */
function gestionNbAccidents(nbAccidents, primeAnnuelleSansAccident, primeAnnuelle) {
    let elH2 = window.document.querySelector('#remuneration');
    // Si #remuneration (balise h2 avec id 'remuneration) n'existe pas, le créer)
    if (!elH2) {
        elH2 = window.document.createElement('h2');
        elH2.id = 'remuneration';
        window.document.querySelector('#recueilinfos').appendChild(elH2);
    }
    
    // Gestion de l'affichage avec gestion spéciale pour 0 et 1 accident
    if (nbAccidents === 0) {
        elH2.innderHTML = 'Votre prime sera de ' + primeAnnuelle + '€';
    } else if (nbAccidents === 1) {
        elH2.innerHTML = 'Votre prime sera de ' + primeAnnuelle
                       + ' € alors qu\'elle aurait pu être de '
                       + primeAnnuelleSansAccident + ' € sans ' + nbAccidents
                       + ' accident responsable...';
    }
}

/**
 * Fonction retournant un entier depuis une valeur prise dans le DOM et 
 * replaçant le champ à 0 sur la valeur saisie n'est pas un nombre
 * 
 * @param {type} id
 * @returns {undefined}
 */
function recupValeur(id) {
    var valeur = parseInt(window.document.querySelector(id).value);
    if (isNaN(valeur)) {
        window.document.querySelector(id).value = 0;
        return 0;
    } else {
        return valeur;
    }
}