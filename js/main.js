jQuery(document).ready(function() {
    let container = document.querySelector(".all_benefits");
    console.log(container);
    let presta = document.querySelector(".presta");
    let buttons = document.querySelectorAll(".details");
    let separator = document.createElement("div");
    let prestaSeparator = document.querySelector("#presta_separator");
    let benefits = document.querySelector(".benefit");
    if (document.querySelector(".wpcf7-submit")) {
        let buttonForm = document.querySelector(".wpcf7-submit");
        buttonForm.className += " btn";
    }
    else {
        console.log(" ");
    }
    separator.className = 'benefits__separator--horizontal';


    let bienfaits = document.createElement("div");
    bienfaits.className = 'bienfaits';
    let titleBienfaits = document.createElement("h3");
    titleBienfaits.className = 'bienfaits--title';
    titleBienfaits.textContent = 'Bienfaits';
    let citationBienfaits = document.createElement("p");
    citationBienfaits.className = 'bienfaits--content';
    let spanBienfaits = document.createElement("span");
    spanBienfaits.className = 'bienfaits--content bienfaits--content--span';
    let contentBienfaits = document.createElement("p");
    contentBienfaits.className = 'bienfaits--content';
    let ulBienfaits = document.createElement("ul");
    ulBienfaits.className = 'bienfaits--content bienfaits--content--ul';


    let deroulement = document.createElement("div");
    deroulement.className = 'deroulement';
    let titleDeroulement = document.createElement("h3");
    titleDeroulement.className = 'deroulement--title';
    titleDeroulement.textContent = 'Déroulement';
    let contentDeroulement = document.createElement("p");
    contentDeroulement.className = 'deroulement--content';
    let ulDeroulement = document.createElement("ul");
    ulDeroulement.className = 'deroulement--content';


    let prix = document.createElement("div");
    prix.className = 'prix';
    let contentPrix = document.createElement("p");
    contentPrix.className = 'prix--content';


    let contreIndications = document.createElement("div");
    contreIndications.className = 'contreIndications';
    let titleContreIndications = document.createElement("h3");
    titleContreIndications.className = 'contreIndications--title';
    titleContreIndications.textContent = 'Contre indications';
    let ulContreIndications = document.createElement("ul");
    ulContreIndications.className = 'contreIndications--content';


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
                bienfaits.appendChild(citationBienfaits);
                bienfaits.appendChild(spanBienfaits);
                bienfaits.appendChild(contentBienfaits);
                bienfaits.appendChild(ulBienfaits);

                deroulement.appendChild(titleDeroulement);
                deroulement.appendChild(contentDeroulement);
                deroulement.appendChild(ulDeroulement);

                contreIndications.appendChild(titleContreIndications);
                contreIndications.appendChild(ulContreIndications);

                prix.appendChild(contentPrix);

                prestaSeparator.className = 'benefits__separator--horizontal';

                presta.scrollIntoView({block: "center"});

                if (event.target === buttons[0]) {
                    let tableBienfaits = ["libère les tensions, les émotions liées à la grossesse et à la naissance", "réduit le stress de l’arrivée au monde", "procure un bien-être incomparable au bébé et à ses parents", "adoucit particulièrement les naissances éprouvantes"];
                    tableBienfaits.forEach(Bienfait => {
                        let liBienfaits = document.createElement('li')
                        liBienfaits.className = 'list--bienfaits';
                        ulBienfaits.appendChild(liBienfaits);
                    })

                    contentBienfaits.textContent = 'Le thalasso bain bébé est une douce transition entre le monde intra utérin et le monde extérieur. Il :';
                    let liBienfaits = document.querySelectorAll('.list--bienfaits');
                    for (let i = 0; i<liBienfaits.length; i++) {
                        liBienfaits[i].textContent = tableBienfaits[i];
                    }

                    let tableDeroulement = ["Nous échangeons autour de la grossesse et la naissance afin de mettre en lumière votre vécu, votre ressenti et comprendre ce qui se joue pour bébé et pour vous-mêmes.", "Je prépare le matériel, j’instaure une ambiance feutrée", "Lors du déshabillage, je fais connaissance avec bébé.", "Vient le moment du bain où le temps s’arrête, la magie opère. Bébé retrouve les postures, les sensations connues jusqu’alors : chaleur, bercement, immersion… Je me laisse guider par bébé, je n’impose rien", "A la sortie, nous l’accueillons comme vous le souhaitez : peau à peau, tétée, …"];
                    tableDeroulement.forEach(step => {
                        let liDeroulement = document.createElement('li')
                        liDeroulement.className = 'list--deroulement';
                        ulDeroulement.appendChild(liDeroulement);
                    })
    
                    contentDeroulement.textContent = 'Je propose le thalasso bain bébé à votre domicile dans les vingt premiers jours de bébé (un peu plus en cas de prématurité). J’apporte le matériel nécessaire. ';
                    let liDeroulement = document.querySelectorAll('.list--deroulement');
                    for (let i = 0; i<liDeroulement.length; i++) {
                        liDeroulement[i].textContent = tableDeroulement[i];
                    }
    
                    contentPrix.textContent = "75€";

                    let tableContreIndications = ['Fièvre', 'Hypothermie', 'Chute de poids', 'Circoncision récente', 'Infection ombilicale', 'Problèmes cutanés']
                    tableContreIndications.forEach(tableContreIndication => {
                        let liContreIndications = document.createElement("li");
                        liContreIndications.className = 'list--contreIndications';
                        ulContreIndications.appendChild(liContreIndications);
                    })
    
                    let liContreIndications = document.querySelectorAll('.list--contreIndications');
                    for (let i = 0; i<liContreIndications.length; i++) {
                        liContreIndications[i].textContent = tableContreIndications[i];
                    }
                    
                }
                else if (event.target === buttons[1]) {
                    let tableBienfaits = ["Créer, entretenir le lien d’attachement", "procurer bien-être et détente au bébé comme aux parents", "lui apporter confiance et sécurité affective", "développer sa conscience corporelle", "favoriser le sommeil", "soulager certains maux"];
                    tableBienfaits.forEach(Bienfait => {
                        let liBienfaits = document.createElement('li')
                        liBienfaits.className = 'list--bienfaits';
                        ulBienfaits.appendChild(liBienfaits);
                    })

                    citationBienfaits.textContent = "\" Pour aider les bébés à traverser les premiers mois de la vie, pour qu’ils n’éprouvent plus l’angoisse de se sentir isolés, perdus, il faut parler à leur dos, il faut parler à leur peau qui ont soif et faim autant que leur ventre \"";
                    spanBienfaits.textContent = 'Frédérick Leboyer'
                    contentBienfaits.textContent = "Masser son bébé permet de :"
                    let liBienfaits = document.querySelectorAll('.list--bienfaits');
                    for (let i = 0; i<liBienfaits.length; i++) {
                        liBienfaits[i].textContent = tableBienfaits[i];
                    }

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
            else if (i >= 2) {
                let ulBienfaits = document.querySelector("bienfaits--content--ul");
                let liBienfaits = document.querySelectorAll('list--bienfaits');
                ulBienfaits.removeChild(liBienfaits);
                presta.style.margin = "auto";
                presta.removeChild(bienfaits);
                presta.removeChild(deroulement);
                presta.removeChild(prix);
                presta.removeChild(contreIndications);
                prestaSeparator.className = '';
                i = 0;
                benefits.scrollIntoView();
            }

            

        }
        
        button.addEventListener("click", displayMoreDetails);
    });
});