@extends('layouts.layout')

@section('content')

  <section class="getintouch">
    <h2>Get in Touch</h2>
    <form>
      <label for="name">Name</label>
      <input type="text" name="nameV">
      <label for="subject">E-Mail</label>
      <input type="email" name="email">
      <label for="email">Profile Photo</label>
      <input type="file" id="photo" name="photo">
      <label>Message</label>
      <textarea  rows="7" cols="100" name="message"></textarea>
      <input type="submit" value="Send" class="send">
    </form>
  </section>

  <script src="https://www.gstatic.com/firebasejs/8.6.5/firebase-app.js"></script>
  <script src="https://www.gstatic.com/firebasejs/8.6.5/firebase-firestore.js"></script>
  <script src="https://www.gstatic.com/firebasejs/8.6.5/firebase-storage.js"></script>

  <script>
    // Your web app's Firebase configuration
    // For Firebase JS SDK v7.20.0 and later, measurementId is optional
    const firebaseConfig = {
      apiKey: "AIzaSyDvQYwyB7sdvx3bwL4lxzUxtTozjO_Evcw",
      authDomain: "noteslaravel.firebaseapp.com",
      projectId: "noteslaravel",
      storageBucket: "noteslaravel.appspot.com",
      messagingSenderId: "852485384089",
      appId: "1:852485384089:web:de28dde97da5f18657d508"
    };

    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
    let  db = firebase.firestore();
    console.log(db);
  </script>

  <script src="scripts/contact.js"></script>

@endsection