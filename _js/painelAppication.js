 
function someSection(valor){
    console.log("sumiu");
   
    if (valor == 1){
        /* MOSTRAR FORMULARIO DE 'INSERIR' */
        var form = document.getElementById('inserir');
        form.style.opacity = "1";
        form.style.visibility = "visible";
        form.style.marginTop = "-250px";
        console.log("Torne visivel!");
    }else if(valor == 2){
        voltaTitulo();
        console.log('Escolheu opcao2');
    
    }
    /* Efeito de sumir para as classes inline */
    var inline = document.getElementsByClassName('inline');
    for (var i = 0; i<inline.length;i++){
        inline[i].style.opacity = "0";
        inline[i].style.visibility = "hidden";
    }
}
function voltaDiv(){
    var div = document.getElementById('opcao');
    div.style.opacity = '1';
    console.log('volte');
}

function voltaTitulo(){
    var sectionList = document.getElementById('titulos-section');
    sectionList.style.opacity = "1";
    sectionList.style.visibility = "visible";
    sectionList.style.marginTop = "-600px";
}


window.onload = function(){
    var entrouTitulo = location.search; //search retorna o que vem depois do ?= nesse caso id, se vinher id é pq entrou la 
    entrouTitulo = entrouTitulo.slice(1,3);
    console.log(entrouTitulo);
    if (entrouTitulo == "id"){
        var sec = document.getElementById('update');
        sec.style.opacity = "1";
        sec.style.visibility = "visible";
        var inline = document.getElementsByClassName('inline');
        inline[0].href = "painel.php"; //o cara nao pode apertar em editar ou adicionar se tiver no form de update
        inline[1].href = "painel.php";
    }
}

function autoScrollTo(el){
       var currentY = window.pageYOffset; //localidade em pixel que esta no momento
       var targetY = document.getElementById(el).offsetTop; //localidade exata em pixel do objeto passado por parametro
       var bodyHeight  = document.body.offsetHeight; //tamanho da body do seu computador
       var yPos = currentY + window.innerHeight;
        console.log("CURRENT: "+currentY+ " window.innerHeight: "+window.innerHeight);
       var animator = setTimeout('autoScrollTo(\''+el+'\')', speed); // faz com que fique um laço de repeticao ate mandarem parar
      if (yPos > bodyHeight){
            clearTimeout(animator);  //para o scroll pq somando a localidade no momento + o tamanho que ele ta da div for maior que a body inteira, quer dizer que a folha da page ja acabou, entao ele para...
      }else{
         if (currentY < targetY - distance){
             scrollY =  currentY+distance;
             window.scroll(0, scrollY);
         }else{
            clearTimeout(animator);   
         }
      }
}