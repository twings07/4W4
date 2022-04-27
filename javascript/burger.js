(function(){
let burger = document.querySelector(".burger");
burger.addEventListener('mousedown' , function(){
    console.log("burger");
    if(!this.classList.contains('burger_X'))
    {
        this.classList.add('burger_X');
    }
    else{
        this.classList.remove('burger_X');
    }
    
})
})()