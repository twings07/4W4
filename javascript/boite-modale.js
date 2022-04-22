(function(){
    console.log("la boite marche!!")
    let boite__modale = document.querySelector(".boite__modale");
    let cours__desc__bouton = document.querySelectorAll('.cours__desc__bouton');
    console.log(cours__desc__bouton.length);
    for (const bout of cours__desc__bouton) {
        bout.addEventListener('click',function(){
            boite__modale.classList.add('boite__modale--ouvrir')
        })
    }

    let boite__modale__bouton = document.querySelectorAll('.boite__modale__bouton');
    for (const bout of boite__modale__bouton) {
        bout.addEventListener('click',function(){
            boite__modale.classList.add('boite__modale--fermer')
        })
    }
    
})()