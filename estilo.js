document.querySelector('marca').addEventListener('click',cambiarColor);
function cambiarColor(){
    var marcaCafe = document.querySelector('div');
    if(marcaCafe.classList.contains('marca')){
        marcaCafe.classList.remove('marca');
        marcaCafe.classList.add('.marcaUno');
    }
    else {
        articulo.classList.remove('.marcaUno');
        articulo.classList.add('.marca'); 
    }
    
}