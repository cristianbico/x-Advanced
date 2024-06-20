// window.addEventListener('load', () => {
//     //recibir la tabla
//     var tabla = document.querySelector('#tabla')
//     var cuerpo = document.querySelector('body')

//     //recibir a los nuevos estudiantes
//     fetch('controlador/c_admin.php?mostrarEstudiantes')
//         .then((res) => { res.text() })
//         .then((est) => { estudiantes(est)
//             console.log(est)
//          })

// })

// //función que muestra a los nuevos estudiantes
// function estudiantes(es) {
//     let nuevo
//     es.forEach(e => {
//         nuevo = `
//                 <td>${e.idU}</td>
//                 <td><img src="${e.fotoU}" alt="Foto de usuario" class="img-thumbnail" width="50" height="50"></td>
//                 <td>${e.nombreU}</td>
//                 <td>${e.apellidoU}</td>
//                 <td>${e.correoU}</td>
//                 <td>${e.ciudadU}</td>
//                 <td>${e.promedioU}</td>
//                 <td>
//                     <button type="button" class="btn btn-success btn-sm">Aceptar</button>
//                     <button type="button" class="btn btn-danger btn-sm" onclick="eliminar(${e.idU})>Eliminar</button>
//                     <button type="button" class="btn btn-primary btn-sm">Más</button>
//                 </td>
//         `;
//         tabla.innerHTML += nuevo;
//     });
// }

// function eliminar(id) {
//     let verf = confirm('¿realmete quieres eliminar este registro?')
//     if (verf) {
//         fetch('controlador/c_admin.php',
//             {
//                 method: "POST",
//                 body: id
//             }
//         )
//             .then((res) => { res.text() })
//             .then((res) => {
//                 if (res == true) {
//                     alert('Se eliminó correctamente')
//                 }else{alert('Hubo un problema a la hora de eliminar')}
//             })

//     }
// }

