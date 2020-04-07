/* Calcul de la rémunération */
function validCalcul() {
    // Constantes utilisées pour les calculs de la simulation
    const fixe = 1100;
    
    // calcul de la rémunération
    if (window.document.querySelector("#num_ancien").value === "") {
        alert("Les années d'ancienneté doivent être indiquées");
    } else {
        let prx_final = recupPrimeAnciennete(parseInt(window.document.querySelector("#num_ancien").value), fixe) 
                + recupComS20(parseInt(window.document.querySelector("#num_s20").value))
                + recupComXS(parseInt(window.document.querySelector("#num_xspirit").value))
                + recupComMulti(parseInt(window.document.querySelector("#num_multitec").value))
                + recupIndKm(parseInt(window.document.querySelector("#num_km").value));
        
        // affichage du prix final
        window.document.querySelector("#resultat").innerHTML = prx_final + " €";
    }
}

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
    if (nb >= nbcasq_s20 && window.document.querySelector("#num_s20").value !== "") {
        return nb * prx_s20 * com_s20;
    }
    else return 0;
}

function recupComXS(nb) {
    const prx_xspirit = 350;
    const com_xspirit = 0.06;
    const nbcasq_xspirit = 50;

    // casques X-Spirit
    if (nb >= nbcasq_xspirit && window.document.querySelector("#num_xspirit").value !== "") {
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
    if (window.document.querySelector("#num_multitec").value !== "") {
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
    if (window.document.querySelector("#num_km").value !== "") {
        let indemn_total = nb * indemn_parKm;
        if (indemn_total > 350) indemn_total = 350;
        return indemn_total;
    }
    else return 0;
}

window.addEventListener("load", function () {
    window.document.querySelector("#btn_calculer").addEventListener("click", validCalcul);
});