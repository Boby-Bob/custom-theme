jQuery(document).ready(function() {
    let container = document.querySelector(".all_benefits");
    console.log(container);
    let presta = document.querySelector(".presta");
    let buttons = document.querySelectorAll(".details");
    let separator = document.createElement("div");
    let prestaSeparator = document.querySelector("#presta_separator");
    let benefits = document.querySelector(".benefit");
    let buttonForm = document.querySelector(".wpcf7-submit");
    separator.className = 'benefits__separator--horizontal';


    let bienfaits = document.createElement("div");
    bienfaits.className = 'bienfaits';
    let titleBienfaits = document.createElement("h3");
    titleBienfaits.className = 'bienfaits--title';
    titleBienfaits.textContent = 'Bienfaits';
    let contentBienfaits = document.createElement("p");
    contentBienfaits.className = 'bienfaits--content';

    let deroulement = document.createElement("div");
    deroulement.className = 'deroulement';
    let titleDeroulement = document.createElement("h3");
    titleDeroulement.className = 'deroulement--title';
    titleDeroulement.textContent = 'Déroulement';


    let prix = document.createElement("div");
    prix.className = 'prix';
    let contentPrix = document.createElement("p");
    contentPrix.className = 'prix--content';

    let contreIndications = document.createElement("div");
    contreIndications.className = 'contreIndications';
    let titleContreIndications = document.createElement("h3");
    titleContreIndications.className = 'contreIndications--title';
    titleContreIndications.textContent = 'Contre indications';

    let i = 0;
    let buttonPrestaOne;
    let buttonPrestaTwo;
    let buttonPrestaThree;
    let buttonPrestaFour;


    buttons.forEach(function(button) {
        buttonPrestaOne = buttons[0];
        buttonPrestaTwo = buttons[1];
        buttonPrestaThree = buttons[2];
        buttonPrestaFour = buttons[3];
        function displayMoreDetails() {
            i++;
            console.log(i);

            if (i < 2) {
                console.log(button.classList);
                presta.style.margin = "90px auto 50px auto";
                presta.appendChild(bienfaits);
                presta.appendChild(deroulement);
                presta.appendChild(prix);
                presta.appendChild(contreIndications);
                bienfaits.appendChild(titleBienfaits);
                deroulement.appendChild(titleDeroulement);
                contreIndications.appendChild(titleContreIndications);
                bienfaits.appendChild(contentBienfaits);
                prix.appendChild(contentPrix);
                prestaSeparator.className = 'benefits__separator--horizontal';
                presta.scrollIntoView({block: "center"});
            }
            else if (i >= 2) {
                presta.style.margin = "auto";
                presta.removeChild(bienfaits);
                presta.removeChild(deroulement);
                presta.removeChild(prix);
                presta.removeChild(contreIndications);
                prestaSeparator.className = '';
                i = 0;
                benefits.scrollIntoView();
            }

            if (event.target === buttons[0]) {
                contentBienfaits.textContent = 'presta 1';
                contentPrix.textContent = "75€";
            }
            else if (event.target === buttons[1]) {
                contentBienfaits.textContent = 'presta 2';
                contentPrix.textContent = "40€";

            }
            else if (event.target === buttons[2]) {
                contentBienfaits.textContent = 'presta 3';
                contentPrix.textContent = "60€ l'heure";

            }
            else {
                contentBienfaits.textContent = 'presta 4';
                contentPrix.textContent = "30€ l'heure";

            }

        }
        
        button.addEventListener("click", displayMoreDetails);
    });
});