// Recuperation des constantes du HTML

const pswrdField = document.querySelector('#pswrdField');
const toggleBtn = document.querySelector('#toggleBtn');

// Declaration des variables globales


// Gestion des evenements
toggleBtn.addEventListener('click', ()=>{
    changeVisibility(pswrdField, toggleBtn);
});


// Developpement des fonctions 

function changeVisibility(element, btn){
    if(element.type == "password"){
        element.setAttribute('type', 'text');
        btn.classList.add('active');
    }else{
        element.setAttribute('type', 'password');
        btn.classList.remove('active');
    }    
}