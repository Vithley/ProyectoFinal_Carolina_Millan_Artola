///Registro de Usuarios y reservas

document.getElementById('form_registro')
    .addEventListener('submit', function (e) {
        e.preventDefault();
        const form = Object.fromEntries(
            new FormData(e.target)
        )
        //Convierto en json los datos del registro de usuarios
        let datos = JSON.stringify(form);
       
        fetch('../ajax/registroajax.php', {
            method: 'POST',
            body: datos,//los datos que se van a enviar al servidor.
            headers: {
                'Content-Type': 'application/json' 
            }
        })
        .then(Response => Response.text())
        .then(function(data) {
            console.log(data);
            //Variable para mostrar si se ha podido realizar el registro o no.
            let msj = document.getElementById('msj-registro');
            if(data == 'false') {
                msj.innerHTML = 'No se ha podido realizar la reserva';
            }else {
                msj.innerHTML = 'Reserva realizada con éxito';
                location.href = "../view/session.php";//Cargo la página donde nos envía si se ha realizado con éxito.
            }
            
            console.log(data);
        })
        .catch(function(error) {
            console.log(error);
        })

        
    });

    