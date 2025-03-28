const texto = document.getElementById("texto");
const palabras = ["M a g n e t o", "H i r i n g",  "B o o s t"]; 
let palabraIndex = 0;
let letraIndex = 0;
let borrando = false;

function escribir() {
    let palabraActual = palabras[palabraIndex];

    if (!borrando) {
        texto.textContent = palabraActual.slice(0, letraIndex++);
        if (letraIndex > palabraActual.length) {
            borrando = true;
            setTimeout(escribir, 1000);
            return;
        }
    } else {
        texto.textContent = palabraActual.slice(0, letraIndex--);
        if (letraIndex < 0) {
            borrando = false;
            palabraIndex = (palabraIndex + 1) % palabras.length;
        }
    }

    setTimeout(escribir, 100);
}

document.addEventListener("DOMContentLoaded", escribir);
