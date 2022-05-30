//VARIABLES
var checkPassword = null;
var checkTelephone = null;

//EVENTS
var passElement = document.getElementById("passwd");
passElement.addEventListener('input',function(){
    var password = passElement.value;
    if( /^(?=.*[A-Z])(?=.*[\+\-\*\/])(?=.*\d)(?=.*[a-z]).{6,12}$/.test(password)){
        event.target.setCustomValidity("");
        checkPassword=true;
    }else{
        passElement.setCustomValidity('La contraseña no sigue el formato especificado debajo del campo');
        passElement.value('');
        passElement.style.border="solid red";
        checkPassword = false;
    }   
});


const tlphElement = document.getElementById('telephone');
tlphElement.addEventListener('input', function(){
   var telephone = tlphElement.value;
   if(/^[6789]{1}\d{8}$/.test(telephone)){
       event.target.setCustomValidity("");
       checkTelephone=true;
   }else{
       tlphElement.setCustomValidity('El teléfono no sigue el formato especificado debajo del campo');
       checkTelephone=false;
   }
});

//FUNCTIONS & VALIDATIONS

//Si lo voy a enviar por GET no se puede usar multipart 
function GET_method(){
    document.getElementById("urlencoded").checked = true;
    document.getElementById("multipart").checked = false;
    document.getElementById("multipart").disabled = true;
    document.getElementById("myForm").method="get";
}

//Si lo voy a enviar con POST, se puede escoger cualquier tipo de codificación
function POST_method(){
    
    document.getElementById("multipart").disabled=false;
    document.getElementById("myForm").method="post";
}

function comprobaciones(){
    //Coge el navegador usado por el usuario que rellena el form
    var browser = navigator.userAgent;
    document.getElementById("browser").value=browser;
    //Compruebo la contraseña
    if(!checkPass){
        return false;
    }
    if(!checkTelephone){
        return false;
    }
    return true;
}

function formato_codificacion_envio(){
    //Estableciendo el atributo method del formulario
    let opcion_get = document.getElementById("methodGET");
    let opcion_post = document.getElementById("methodPOST");
    let formulario = document.getElementById("myForm");
    if(opcion_get.checked){
        formulario.method ="get";
    }
    if(opcion_post.checked){
        formulario.method ="post";
        
    }
    //Estableciendo el tipo de codificación
    let urlencoded = document.getElementById("urlencoded");
    let multipart = document.getElementById("multipart");
    if(urlencoded.checked){
        formulario.enctype="application/x-www-form-urlencoded";
    }
    if(multipart.checked){
        formulario.enctype="multipart/form-data";
    }
    //Obteniendo info del navegador 
    let browser = navigator.userAgent;
    document.getElementById("cbrowser").value = browser;
}

function envio(){
    //Envía el OK para el envío si las comprobaciones están bien 
    if(comprobaciones()){
        formato_codificacion_envio();
        return true;
    }else{
        return false;
    }
    
}