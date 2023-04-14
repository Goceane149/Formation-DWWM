let form = document.querySelector("#loginForm");

// Ecouter la modification de l'email 
form.email.addEventListener('change', function(){ //la fonction pour validé l'email
  validEmail(this);
}); 

const validEmail = function (inputEmail) { // la fonction du RegExp 
  // création de la reg exp pour validation Email
    let emailRegExp = new RegExp(
    '^[a-zA-Z0-9.-]+[@]{1}[a-zA-Z0-9.-]+[.]{1}[a-z]{2,10}$', 'g' //RexExp de l'adresse mail [a-z] => prend les minuscule [A-Z] => prend les Majuscule [0-9] => Prend les chiffres ^ => début $ => Fin [@]{1} => Retrouvé le @ 1 fois {2,10} => il y a entre 2 et 10 lettres 'g' => un flag qui permet de lire la Regexp
);

let testEmail = emailRegExp.test(inputEmail.value);
let small = inputEmail.nextElementSibling; // NexElementSibling -> attraper la balise qui est juste après 
 
if(testEmail){
 small.innerHTML = "Adresse valide" //si l'adresse mail est valide 
 small.classList.remove("text-danger"); 
 small.classList.add("text-success"); // change la couleur en vert

}

 else {
    small.innerHTML = "Adresse n'est pas valide"; // sinon l'adresse mail n'est pas valide 
    small.classList.remove("text-success");
    small.classList.add("text-danger"); // change la couleur en rouge
 }
}