(function(){
    const dashboardLinks = document.querySelectorAll('.aside_menu li');
    const mainDivs = document.querySelectorAll('main > div');
    
    
    dashboardLinks.forEach(link => {
        link.addEventListener('click', function() {
            document.querySelector('.aside_menu .active').classList.remove('active');
            document.querySelector('main > div.active').classList.remove('active');
            let attribute = this.getAttribute('data-dash');
    
            mainDivs[attribute].classList.add('active');
            this.classList.add('active');
        })
    })
    
    const categorie = document.querySelectorAll('.categorie ul li');
    const infoSection = document.querySelectorAll('.info_categorie > div');
    const dataCategorie = 'data-tabs';

    function systemeDonglet( declencheurs, recepteurs, dataName){
        declencheurs.forEach(declencheur => {
            declencheur.addEventListener('click', function(){
                // enlever la classe active sur la div actuel
                recepteurs.forEach( recepteur => {
                    recepteur.classList.remove('active');
                })
                declencheurs.forEach( declencheur => {
                    declencheur.classList.remove('active');
                })

                let atrr = this.getAttribute('data-tabs');

                recepteurs[atrr].classList.add('active');

                this.classList.add('active')

            })
        })
    }

    systemeDonglet(categorie, infoSection, dataCategorie);
})()