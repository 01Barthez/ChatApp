    //! Recuperation des elements du fichier HTML;
    const form = document.querySelector('#form');
    const fname = document.querySelector('#fname').value;
    const lname = document.querySelector('#lname').value;
    const email = document.querySelector('#email').value;
    const password = document.querySelector('#password').value;
    const image = document.querySelector('#image');
    const submitBtn = document.querySelector('#submit');

    // mup.send({
    //     fname,
    //     lname,
    //     email
    // });    
    //! Declaration des Variables Globales;
//
//
//


    //! Gestion des evenements;

//* Gestion de la soumission du formulaire;
form.addEventListener('submit', (e)=>{
    e.preventDefault();  //Bloquer l'envoie du formulaire;
    
    // Verification de la validité des informations saisi par l'utilisateur avec le javaScript;

    // checkInput(fname);
    // checkInput(lname);
    // checkInput(email);
    // checkInput(password);
});

//* Gestion du clique sur le bouton de soumission;
submitBtn.addEventListener('click', ()=>{
    // Put one function here in order to verify the input fields with JavaScript;
    
    let xhr = new XMLHttpRequest();
    let method = "POST", url = "Assets/signup.php", syncronous = true;

    xhr.open(method, url, syncronous);
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200){
            // let data = xhr.responseText;
            // console.log(data);
            console.log(xhr.responseText);
        }
    };
    
    // Envoie des requettes;
    let formData = new FormData(form);
    xhr.send(formData);
})


    //! Developpement des fonctions;  
// function checkInput(element){
//     let length = element.length;
//     if(length === 0){
//         console.log(element+" is not correct");
//         exit();
//     }
// }

// 1H14minutes