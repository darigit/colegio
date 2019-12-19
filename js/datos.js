var formulario = document.getElementById('frmAlumno');

formulario.addEventListener('submit', function(e){
    e.preventDefault();
    console.log('Diste un click');

    var  datos = new FormData(formulario);
    console.log(datos.get('idAlumno'));
    console.log(datos.get('fecha'));
    console.log(datos.get('ausente'));
})