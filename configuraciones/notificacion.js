var button = document.getElementById("button");


button.addEventListener('click', function(){
    notify();
});

function notify(){
    //verificar que el navegador soporte notificaciones
    if(!("Notification" in window)){
        alert("tu navegador no soporta notificaciones");
    }else if( Notification.permission === "granted"){
    // enviar la notificacion si ya esta autorizado el servicio
        var notification = new Notification("Recolección de basura en distrito huancayo");
    }else if(Notification.permission !=="denied"){
        Notification.requestPermission(function(permission){
            if(Notification.permission ==="granded"){
                var notification = new Notification("Recolección de basura en distrito huancayo"); 
            }
        });
    }
};