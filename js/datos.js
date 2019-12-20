const app = new Vue({
   
    el:'#app',
    data:{
        titulo:'Registrar un nuevo estudiante utilizando Vue',
        idAlumno:'',
        nombre:''   
    },

    methods:{
        mostrarDatos: function () {
            console.log(this.nombre);
        }
    }

})

// var formulario = document.getElementById('frmAlumno');

// formulario.addEventListener('submit', function(e){
//     e.preventDefault();
//     var  datos = new FormData(formulario);
    
//     fetch('controller/studentController.php',{
//         method:'POST',
//         body:datos
//     })
//     .then(res => res.json())
//     .then(data => {
//         console.log(data);
//     })
// })