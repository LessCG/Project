$(document).ready(function(){
 	$('.sidenav').sidenav();
	$('select').formSelect();
   $('.fixed-action-btn').floatingActionButton();
   $('.dropdown-trigger').dropdown({coverTrigger: false, constrainWidth: false});
	$('.tooltipped').tooltip();
	$('.modal').modal();
  $('.parallax').parallax();
});


//Funcion que valida inputs, esta es para solo admitir numeros

function valida(e){Mobile
    tecla = (document.all) ? e.keyCode : e.which;
    //Tecla de retroceso para borrar, siempre la permite
    if (tecla==8){
        return true;
    }
    // Patron de entrada, en este caso solo acepta numeros
    patron =/[0-9]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}

function selectRequest(){
   var x = document.getElementById("section").value;
   // var x = document.getElementById("section");
    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function(){
        if (xmlhttp.readyState==4 && xmlhttp.status == 200){
            document.getElementById('squareSection').innerHTML = xmlhttp.responseText,
         $('select').formSelect();
        }
    }
    xmlhttp.open('GET', '../controllers/squareRequest.php?section='+x+'', true);
    xmlhttp.send();
//    $('select').formSelect();
}
