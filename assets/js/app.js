// Initialize Firebase(2)
var config = {
    apiKey: "AIzaSyDJdjvmdJeS7_WYMIHU-zv4b4Fc2D5s-Yo",
    authDomain: "contact-form-7ec86.firebaseapp.com",
    databaseURL: "https://contact-form-7ec86-default-rtdb.firebaseio.com",
    projectId: "contact-form-7ec86",
    storageBucket: "contact-form-7ec86.appspot.com",
    messagingSenderId: "643370383331",
    appId: "1:643370383331:web:61c6ca2a2f257b24ba92d6"
};
  firebase.initializeApp(config);
  
  //Reference for form collection(3)
  let formMessage = firebase.database().ref('register');
  
  //listen for submit event//(1)
  document
    .getElementById('registrationform')
    .addEventListener('submit', formSubmit);
  
  //Submit form(1.2)
  function formSubmit(e) {
    e.preventDefault();
    // Get Values from the DOM
    let name = document.querySelector('#name').value;
    let email = document.querySelector('#email').value;
    let nombor = document.querySelector('#nombor').value;
    let Kategori = document.querySelector('#Kategori').value;
    let namaEvent = document.querySelector('#namaEvent').value;
  
    //send message values
    sendMessage(name, email, nombor, Kategori, namaEvent);
  
    //Show Alert Message(5)
    document.querySelector('.alert').style.display = 'block';
  
    //Hide Alert Message After Seven Seconds(6)
    setTimeout(function() {
      document.querySelector('.alert').style.display = 'none';
    }, 7000);
  
    //Form Reset After Submission(7)
    document.getElementById('registrationform').reset();
  }
  
  //Send Message to Firebase(4)
  
  function sendMessage(name, email, nombor, Kategori, namaEvent) {
    let newFormMessage = formMessage.push();
    newFormMessage.set({
      name: name,
      email: email,
      nombor: nombor,
      Kategori: Kategori,
      namaEvent: namaEvent
    });
  }