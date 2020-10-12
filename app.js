console.log('agregado')

// Initialize Cloud Firestore through Firebase
firebase.initializeApp({
    apiKey: 'AIzaSyD_ihUH1WPXkod4gbBwB-JXqtTCbAOs8mI',
    authDomain: 'lms-academia.firebaseapp.com',
    projectId: 'lms-academia'
});

var db = firebase.firestore();

function myFunction() {

    var email = document.getElementById("email").value;

    db.collection("lms_email_info").add({
            emails: email
        })
        .then(function(docRef) {
            console.log("Documento escrito con su ID: ", docRef.id);
        })
        .catch(function(error) {
            console.error("Error adding document: ", error);
        });
}

function guardar() {

    var aprender_linea = document.getElementById("aprender_linea").value;
    var educacion_distancia = document.getElementById("educacion_distancia").value;
    var cursos_interes = document.getElementById("cursos_interes").value;

    console.log(cursos_interes);

    db.collection("lms_encuestas").add({
            aprender_linea: aprender_linea,
            educacion_distancia: educacion_distancia,
            cursos_interes: cursos_interes

        })
        .then(function(docRef) {
            console.log("Documento escrito con su ID: ", docRef.id);
            document.getElementById("aprender_linea").value = '';
            document.getElementById("educacion_distancia").value = '';
            document.getElementById("cursos_interes").value = '';
        })
        .catch(function(error) {
            console.error("Error adding document: ", error);
        });
}