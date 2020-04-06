function validEnvoi() {
    if (window.document.querySelector("#i_nom").value === "" && window.document.querySelector("#i_prenom").value === "") {
        alert("Le nom ou le prénom doivent être remplis"); // Affiche une alerte si le nom/prénom n'est pas rempli
    }
    else if (window.document.querySelector("#i_email").value === "") {
        alert("L'email doit être rempli"); // Affiche une alerte si l'email n'est pas rempli
    }
    else { let question = "Souhaitez-vous réellement utiliser l'adresse suivante : " 
                + window.document.querySelector("#i_email").value;
        if (confirm(question)) {
            window.document.querySelector("#form_contact").submit(); // On peut envoyer
        }
    }
}
window.addEventListener("load", function() {
    window.document.querySelector("#btn_envoyer").addEventListener("click", validEnvoi);
});