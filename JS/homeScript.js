/* cadigo para desplegar el menu */
let menutoggle = document.querySelector('.menu_toggle');
let navegacion = document.querySelector('.navegacion');

let lista = document.querySelectorAll('.li');
menutoggle.onclick = function(){
    navegacion.classList.toggle('active')
}    

function activelista() {
    lista.forEach((item)=>
    item.classList.remove('active'));
    this.classList.add('active');
}
lista.forEach((item)=>
item.addEventListener('click',activelista));