(function(){
    console.log("la boite marche!!")
    let boite__modale = document.querySelector(".boite__modale");
    let cours__desc__bouton = document.querySelectorAll('.cours__desc__bouton');
    let boite__modale__texte = document.querySelector(".boite__modale__texte");
    console.log(cours__desc__bouton.length);
    for (const bout of cours__desc__bouton) {
        bout.addEventListener('mousedown',function(){
            boite__modale.classList.add('boite__modale--ouvrir');
            console.log(this.parentNode.parentNode.children[0].innerHTML)
            boite__modale__texte.innerHTML = this.parentNode.parentNode.children[0].innerHTML
            
        })
    }

    let boite__modale__bouton = document.querySelectorAll('.boite__modale__bouton');
    for (const bout of boite__modale__bouton) {
        bout.addEventListener('mousedown',function(){
            boite__modale.classList.remove('boite__modale--ouvrir');
        })
    }
    
    
})()