function ajouter(){

    var valid = true;

    panier=document.getElementById("panier").value
    if (document.getElementById('number').value < 0 || document.getElementById('number').value == '' ){
        alert("Veuillez entrer un nombre positif dans ce champ.");
        valid = false;
    }
    else{
        panier.onclick=alert("Vos produits ont été ajouté au panier.");
        
    }
    return valid;
    

}
function incrementValue(){
    var value = parseInt(document.getElementById('number').value, 10);
    value = isNaN(value) ? 0 : value;
    value++;
    document.getElementById('number').value = value;
}
function decrementValue(){
    var value = parseInt(document.getElementById('number').value, 10);
    value = isNaN(value) ? 0 : value;
    value--;
    document.getElementById('number').value = value;
}

function valider(){
    
    var isValid = true;
    
    

    var prenom = $("#prenom").val();
    var nom = $("#nom").val();
    var mail = $("#email").val();
    var adresse = $("#adresse").val();
    var carte = $("#carte").val();

    if (prenom == "") {
        $("#prenom").css('border', '#fb0505 1px solid');
        isValid = false;
    }
    if (nom == "") {
        $("#nom").css('border', '#fb0505 1px solid');
        isValid = false;
    }
    if (!mail.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
        $("#info").html("(Adresse email non valide)");
        $("#email").css('border', '#fb0505 1px solid');
        isValid = false;
    }
    if (mail == "") {
        $("#email").css('border', '#fb0505 1px solid');
        isValid = false;
    }
    if (adresse == "") {
        $("#adresse").css('border', '#fb0505 1px solid');
        isValid = false;
    }
    if (carte == "") {
        $("#carte").css('border', '#fb0505 1px solid');
        isValid = false;
    }
    return isValid;
    
}
function prix(){
    var pris= 10.99;
    var quantite = document.getElementById("variableAPasser").value;

    resultat = pris*quantite;
    document.getElementById('total').value = resultat + " €";

}
function validation(){

    var message = true;
    var message = "Merci de votre commande ! ";
    
    

    var prenom = $("#prenom").val();
    var nom = $("#nom").val();
    var mail = $("#email").val();
    var adresse = $("#adresse").val();
    var carte = $("#carte").val();

    if (prenom == "") {
        message = false;
        message = "Veuillez remplir tous les champs.";
    }
    if (nom == "") {
        message = false;
        message = "Veuillez remplir tous les champs.";
    }
    if (!mail.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
        message = false;
        message = "Veuillez remplir tous les champs.";
    }
    if (mail == "") {
        message = false;
        message = "Veuillez remplir tous les champs.";
    }
    if (adresse == "") {
        message = false;
        message = "Veuillez remplir tous les champs.";
    }
    if (carte == "") {
        message = false;
        message = "Veuillez remplir tous les champs.";
    }
    alert(message);
    
}

