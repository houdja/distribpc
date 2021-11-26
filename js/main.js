

(function(){
    let imgQuestion = document.querySelectorAll('.question img');
    let reponses = document.querySelectorAll('.reponse');

    imgQuestion.forEach( img => {
        img.addEventListener('click', function(){
            document.querySelector('.box_question .reponse.active').classList.remove('active');
            document.querySelector('.box_question img.active').classList.remove('active');
            let attribut = this.getAttribute('data-question');
            reponses[attribut].classList.add('active');
            this.classList.add('active');
        })
    })
})();

(function(){
    function affiche_prix(el1, el2){
        //Event input s'active a chaque changement dans l'input
        //Event change s'active a chaque changement quand on a fini avec l'input
        el1.addEventListener('input', function(){
            el2.innerHTML = this.value + '€';
        })
    }

    let inputPrice = document.querySelector('.filtre_prix');
    let affichePrice = document.querySelector('.affiche_prix');

    affiche_prix(inputPrice, affichePrice);
})();