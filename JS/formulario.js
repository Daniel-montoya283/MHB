//variables
const btnEnviar = document.querySelector('#enviarForm');
const formulario = document.querySelector('#formulario')

const nombre = document.querySelector('#nombre')
const email = document.querySelector('#email')
const asunto = document.querySelector('#asunto')
const mensaje = document.querySelector('#mensaje')
const ExprecionRegular = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/



//funciones
eventListeners();
function eventListeners() {
    document.addEventListener('DOMcontentLoaded', iniciarApp)

    //campos del formulario
    email.addEventListener('blur', validarFormulario)      
    nombre.addEventListener('blur', validarFormulario)
    asunto.addEventListener('blur', validarFormulario)
    mensaje.addEventListener('blur', validarFormulario)

    formulario.addEventListener('submit', enviarEmail)

}
iniciarApp();
function iniciarApp() {
    btnEnviar.disabled = true;  //desabilita el boton
    btnEnviar.classList.add('cursor-not-allowed', 'opacity-50');
}


//valida el formulario

function validarFormulario(e) {

//Eliminar el mensaje de error

    


    if (e.target.value.length > 0) {


        //elimina el mensaje de error
         const MensaError = document.querySelector( 'p.error');
        
         if (MensaError) {
            MensaError.remove();
         }

        e.target.style.borderBottomColor = 'green'; 
        
        
    } else {
        e.target.style.borderBottomColor = 'red';  //si no hay nada lo pone en rojo 
        error('TODOS LOS CAMPOS SON OBLIGATORIOS MAMAGUEVO');
    }


    if (e.target.type === 'email') {
        
        
        if (ExprecionRegular.test(e.target.value)) {
            const MensaError = document.querySelector( 'p.error');
        
            if (MensaError) {
               MensaError.remove();
            }
        } else {
            e.target.style.borderBottomColor = 'red';  
        error('EMAIL NO VALIDO, CAMBIELO POR FAVOR');
        }
    } 

    if ( ExprecionRegular.test (email.value) && nombre.value !== '' && asunto.value !== '' && mensaje.value !== '') {
        btnEnviar.disabled = false;  //habilita el boton
        btnEnviar.classList.add('cursor-not-allowed', 'opacity-50');
    } 
}

function error(mensaje) {
    const mesajeError = document.createElement('p');
    mesajeError.textContent = mensaje
    mesajeError.classList.add('errorr', 'error')
    
    const errores = document.querySelectorAll('.error')
    if (errores.length === 0) {    //solo aparece un mesaje de error en vez de uno por campo
        formulario.appendChild(mesajeError);        
    } 

}


function enviarEmail(e) {
    e.preventDefault();

    console.log('enviando...');

    //mostrar spiner
    const spinner = document.querySelector('#spinner')
    spinner.style.display = 'flex';

    //oculta el spiner
    
    setTimeout(() => {
        console.log('esto se ejecuta luego de 2 segundos ');
        spinner.style.display = 'none';

        //muestra mensaje de aprovacion
        const aprovado = document.createElement('p');
        aprovado.textContent = 'Su Mensaje se Envio Correctamente'; 

        formulario.insertBefore(aprovado, spinner)

        //aprovado.style.color = 'gold';
        aprovado.classList.add('aprovado');

        setTimeout(() => {
            aprovado.remove();

            resetearFormulario();
        }, 8000);
    }, 3000);
}

function resetearFormulario() {
    formulario.reset();

    iniciarApp();
}