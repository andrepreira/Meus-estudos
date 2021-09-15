window.addEventListener('resize', function () {
    //var altura = window.innerHeight;
    var largura = window.innerWidth;
   
    if (largura < 1023 ){
         document.getElementsByClassName('letras')[0].className = 'letras-mobile';
    } 
       
});

