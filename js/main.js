(function(){
    let inputPrice = document.querySelector('.filtre_prix');
    let affichePrice = document.querySelector('.affiche_prix');
    
    inputPrice.addEventListener('change', function(){
        affichePrice.innerHTML = inputPrice.value + '€' ;
    })
})();