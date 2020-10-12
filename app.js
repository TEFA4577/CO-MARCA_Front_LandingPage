// Initialize Cloud Firestore through Firebase
firebase.initializeApp({
    apiKey: "AIzaSyD_ihUH1WPXkod4gbBwB-JXqtTCbAOs8mI",
    authDomain: "lms-academia.firebaseapp.com",
    projectId: "lms-academia"
});

var db = firebase.firestore();

//Funcion guardar email
function guardar() {

    var email = document.getElementById('email').value;

    db.collection("lms_emails_informaciones").add({
            email: email //Campo del email
                //first: "dsd"
        })
        .then(function(docRef) {
            console.log("Document written with ID: ", docRef.id);
        })
        .catch(function(error) {
            console.error("Error adding document: ", error);
        });

}






/*db.collection("lms_encuestas").add({
        educacion_distancia: "No",
        aprender_linea: "Si",
        cursos_interes: "Fotografia"
    })
    .then(function(docRef) {
        console.log("Document written with ID: ", docRef.id);
    })
    .catch(function(error) {
        console.error("Error adding document: ", error);
    });*/