function recupPrimeAnciennete(nb, fixe) {
    const maj_ancien1 = 1.03;
    const maj_ancien2 = 1.06;
    const nbannees1 = 5;
    const nbannees2 = 10;

    // majoration années experience
    if (nb >= nbannees2) {
        return fixe * maj_ancien2;
    } else if (nb >= nbannees1) {
        return fixe * maj_ancien1;
    } else {
        return fixe;
    }
}

function recupComS20(nb) {
    const prx_s20 = 140;
    const com_s20 = 0.02;
    const nbcasq_s20 = 0;

    // casques S 20
    if (nb >= nbcasq_s20) {
        return nb * prx_s20 * com_s20;
    }
    else return 0;
}

function recupComXS(nb) {
    const prx_xspirit = 350;
    const com_xspirit = 0.06;
    const nbcasq_xspirit = 50;

    // casques X-Spirit
    if (nb >= nbcasq_xspirit) {
        return (nb - nbcasq_xspirit) * prx_xspirit * com_xspirit;
    }
    else return 0;
}

function recupComMulti(nb) {
    const prx_multitec = 180;
    const com_multitec0 = 0.04;
    const com_multitec1 = 0.06;
    const com_multitec2 = 0.1;
    const nbcasq_multitec1 = 20;
    const nbcasq_multitec2 = 50;

    // casques Multitec
    if (nb !== 0) {
        if (nb <= nbcasq_multitec1) {
            return nb * prx_multitec * com_multitec0;
        } else if (nb <= nbcasq_multitec2) {
            return (nbcasq_multitec1 * prx_multitec * com_multitec0) + (nb - nbcasq_multitec1) * prx_multitec * com_multitec1;
        } else {
            return (nbcasq_multitec1 * prx_multitec * com_multitec0) + ((nbcasq_multitec2 - nbcasq_multitec1) * prx_multitec * com_multitec1) + ((nb - 50) * prx_multitec * com_multitec2);
        }
    }
    else return 0;
}

function recupIndKm(nb) {
    const indemn_parKm = 0.15;

    // calcul de l'indemnité kilométrique
    if (nb !== 0) {
        let indemn_total = nb * indemn_parKm;
        if (indemn_total > 350) indemn_total = 350;
        return indemn_total;
    }
    else return 0;
}

/**
 * Fonction principale récupérant les valeurs, calculant le montant de 
 * la rémunération et qui s'occupe ensuite de l'afficher
 * 
 * @returns {undefined}
 */
function calcRemu() {
    // Constantes utilisées pour les calculs de la simulation
    const fixe = 1100;

    // calcul de la rémunération
    let prx_final = recupPrimeAnciennete(recupValeur("#num_ancien"), fixe)
            + recupComS20(recupValeur("#num_s20"))
            + recupComXS(recupValeur("#num_xs"))
            + recupComMulti(recupValeur("#num_multi"))
            + recupIndKm(recupValeur("#num_km"));

    // affichage du prix final
    afficheRemu(prx_final);
}

function recupValeur(id) {
    let nb = parseInt(window.document.querySelector(id).value);
    if (isNaN(nb)) {
        window.document.querySelector(id).value = 0;
        return 0; 
    }
    else return nb;
}

/**
 * Fonction qui affiche la rémunération dans l'élément d'id "resultat"
 * 
 * @param {type} prx_final
 * @returns {undefined}
 */

function afficheRemu (prx_final) {
    window.document.querySelector("#remuneration").innerHTML = prx_final + " €";
}

window.addEventListener("load", function () {
    let tabInputs = window.document.querySelectorAll("input");
    for (let i=0; i < tabInputs.length ; i++) {
        // ajout d'un listener sur tous les <input> sur l'évènement inKeyUp
        tabInputs[i].addEventListener("keyup", calcRemu);
    }
});