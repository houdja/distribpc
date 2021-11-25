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
    
})()