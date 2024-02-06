// Recuperation des constantes du HTML
const searchInput = document.querySelector('#searchInput');
const searchBtn = document.querySelector('#searchBtn');
const searchBtnIcon = document.querySelector('#icon');


// Declaration des variables globales



// Gestion des evenements
searchBtn.addEventListener('click', ()=>{
    if(searchBtn.className == 'active'){
        searchInput.classList.remove('active');
    }else{
        searchInput.classList.add('active');
    }

    if(searchBtn.className == 'active'){
        searchBtn.classList.remove('active');
    }else{
        searchBtn.classList.add('active');
    }
})

