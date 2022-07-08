document.getElementById('form-contact')
    .addEventListener('submit', function (e) {
        e.preventDefault();
        const form = Object.fromEntries(
            new FormData(e.target)
        )
        let datos = JSON.stringify(form);//los datos que se van a enviar al servidor.
       
        fetch('../ajax/contactoajax.php', {
            method: 'POST',
            body: datos,
            headers: {
                'Content-Type': 'application/json' 
            }
        })
        .then(Response => Response.text())
        .then(function(data) {
            console.log(data);
            //Variable para mostrar si se ha podido realizar el registro o no.
            let msj = document.getElementById('msj-contacto');
            if(data == 'false') {
                msj.innerHTML = 'No se ha podido realizar el registro de contacto';
            }else {
                msj.innerHTML = 'Registro de contacto realizado con éxito';
                location.href = "../view/home.php";//Cargo la página donde nos envía si se ha realizado con éxito.
            }
            
            console.log(data);
        })
        .catch(function(error) {
            console.log(error);
        })

        
    });
